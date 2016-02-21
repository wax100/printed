<?php
/**
 * The base class for Tickets.
 *
 * @package tickets
 */
class Manuser {
	/* @var modX $modx */
	public $modx;
	/* @var pdoTools $pdoTools */
	public $pdoTools;
	public $initialized = array();
	public $authenticated = false;
	private $prepareCommentCustom = null;
	private $last_view = 0;


	/**
	 * @param modX $modx
	 * @param array $config
	 */
	function __construct(modX &$modx,array $config = array()) {
		$this->modx =& $modx;

		$corePath = $this->modx->getOption('tickets.core_path',$config,$this->modx->getOption('core_path').'components/tickets/');
		$assetsPath = $this->modx->getOption('tickets.assets_path', $config, $this->modx->getOption('assets_path').'components/tickets/');
		$assetsUrl = $this->modx->getOption('tickets.assets_url', $config, $this->modx->getOption('assets_url').'components/tickets/');
		$actionUrl = $this->modx->getOption('tickets.action_url', $config, $assetsUrl.'action.php');
		$connectorUrl = $assetsUrl.'connector.php';

		$this->config = array_merge(array(
			'assetsUrl' => $assetsUrl,
			'cssUrl' => $assetsUrl.'css/',
			'jsUrl' => $assetsUrl.'js/',
			'jsPath' => $assetsPath.'js/',
			'imagesUrl' => $assetsUrl.'img/',

			'connectorUrl' => $connectorUrl,
			'actionUrl' => $actionUrl,

			'corePath' => $corePath,
			'modelPath' => $corePath.'model/',
			'chunksPath' => $corePath.'elements/chunks/',
			'templatesPath' => $corePath.'elements/templates/',
			'chunkSuffix' => '.chunk.tpl',
			'snippetsPath' => $corePath.'elements/snippets/',
			'processorsPath' => $corePath.'processors/',

			'fastMode' => false,
			'dateFormat' => 'd F Y, H:i',
			'dateNow' => 10,
			'dateDay' => 'day H:i',
			'dateMinutes' => 59,
			'dateHours' => 10,
			'charset' => $this->modx->getOption('modx_charset'),
			'snippetPrepareComment' => $this->modx->getOption('tickets.snippet_prepare_comment'),
			'commentEditTime' => $this->modx->getOption('tickets.comment_edit_time', null, 180),
			'depth' => 0,

			'gravatarUrl' => 'https://www.gravatar.com/avatar/',
			'gravatarSize' => 24,
			'gravatarIcon' => 'mm',

			'json_response' => true,
			'nestedChunkPrefix' => 'tickets_',
			'allowGuest' => false,
			'allowGuestEdit' => false,
			'allowGuestEmails' => false,
			'enableCaptcha' => false,
		),$config);

		$this->modx->addPackage('tickets',$this->config['modelPath']);
		$this->modx->lexicon->load('tickets:default');

		if ($name = $this->config['snippetPrepareComment']) {
			if ($snippet = $this->modx->getObject('modSnippet', array('name' => $name))) {
				$this->prepareCommentCustom = $snippet->get('content');
			}
		}

		$this->authenticated = $this->modx->user->isAuthenticated($this->modx->context->get('key'));
	}


	/**
	 * Initializes component into different contexts.
	 *
	 * @param string $ctx The context to load. Defaults to web.
	 * @param array $scriptProperties
	 *
	 * @return boolean
	 */
	public function initialize($ctx = 'web', $scriptProperties = array()) {
		$this->config = array_merge($this->config, $scriptProperties);
		if (!$this->pdoTools) {$this->loadPdoTools();}
		$this->pdoTools->setConfig($this->config);

		$this->config['ctx'] = $ctx;
		if (!empty($this->initialized[$ctx])) {
			return true;
		}
		switch ($ctx) {
			case 'mgr': break;
			default:
				if (!defined('MODX_API_MODE') || !MODX_API_MODE) {
					$config = $this->makePlaceholders($this->config);

					if ($css = $this->modx->getOption('tickets.frontend_css')) {
						$this->modx->regClientCSS(str_replace($config['pl'], $config['vl'], $css));
					}

					$enable_editor = (integer) $this->modx->getOption('tickets.enable_editor');
					$editorConfig = 'enable_editor: '.$enable_editor.'';
					if ($enable_editor) {
						$this->modx->regClientScript($this->config['jsUrl'].'web/editor/jquery.markitup.js');
						$this->modx->regClientCSS($this->config['jsUrl'].'web/editor/editor.css');
						$editorConfig .= '
							,editor: {
								ticket: '.$this->modx->getOption('tickets.editor_config.ticket').'
								,comment: '.$this->modx->getOption('tickets.editor_config.comment').'
							}';
					}
					$config_js = preg_replace(array('/^\n/', '/\t{6}/'), '', '
						TicketsConfig = {
							ctx: "'.$ctx.'"
							,jsUrl: "'.$this->config['jsUrl'].'web/"
							,cssUrl: "'.$this->config['cssUrl'].'web/"
							,actionUrl: "'.$this->config['actionUrl'].'"
							,close_all_message: "'.$this->modx->lexicon('tickets_message_close_all').'"
							,tpanel: '.(integer) $this->authenticated.'
							,'.$editorConfig.'
						};
					');
					$this->modx->regClientStartupScript("<script type=\"text/javascript\">\n".$config_js."\n</script>", true);

					if ($js = trim($this->modx->getOption('tickets.frontend_js'))) {
						if (!empty($js) && preg_match('/\.js/i', $js)) {
							$this->modx->regClientScript(preg_replace(array('/^\n/', '/\t{7}/'), '', '
							<script type="text/javascript">
								if(typeof jQuery == "undefined") {
									document.write("<script src=\"'.$this->config['jsUrl'].'web/lib/jquery.min.js\" type=\"text/javascript\"><\/script>");
								}
							</script>
							'), true);
							$this->modx->regClientScript(str_replace($config['pl'], $config['vl'], $js));
						}
					}
				}

				$this->initialized[$ctx] = true;
				break;
		}
		return true;
	}


	/**
	 * Shorthand for the call of processor
	 *
	 * @access public
	 * @param string $action Path to processor
	 * @param array $data Data to be transmitted to the processor
	 * @return mixed The result of the processor
	 */
	public function runProcessor($action = '', $data = array()) {
		if (empty($action)) {return false;}
		return $this->modx->runProcessor($action, $data, array('processors_path' => $this->config['processorsPath']));
	}


	

	/**
	 * This method returns an error of the cart
	 *
	 * @param string $message A lexicon key for error message
	 * @param array $data.Additional data, for example cart status
	 * @param array $placeholders Array with placeholders for lexicon entry
	 *
	 * @return array|string $response
	 */
	public function error($message = '', $data = array(), $placeholders = array()) {
		$response = array(
			'success' => false
			,'message' => $this->modx->lexicon($message, $placeholders)
			,'data' => $data
		);

		return $this->config['json_response']
			? $this->modx->toJSON($response)
			: $response;
	}


	/* This method returns an success of the cart
	 *
	 * @param string $message A lexicon key for success message
	 * @param array $data.Additional data, for example cart status
	 * @param array $placeholders Array with placeholders for lexicon entry
	 *
	 * @return array|string $response
	 * */
	public function success($message = '', $data = array(), $placeholders = array()) {
		$response = array(
			'success' => true
			,'message' => $this->modx->lexicon($message, $placeholders)
			,'data' => $data
		);

		return $this->config['json_response']
			? $this->modx->toJSON($response)
			: $response;
	}

}
