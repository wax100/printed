<?php
    class modTemplateVarInputRenderGoogleMapsTV extends modTemplateVarInputRender
    {
        public function getTemplate()
        {
            $id = $_GET['id'];
            
            $sql = "SELECT `context_key`, `pagetitle` from `modx_site_content` where `id` = ". $id;
            $result = $this->modx->query($sql);
            if (is_object($result)) {
                $row = $result->fetch(PDO::FETCH_ASSOC);
                $context  = $row['context_key'];
                $address = $row['pagetitle'];
                $sql = "SELECT `value` FROM  `modx_context_setting` WHERE  `key` =  'city' AND  `context_key` =  '$context '";
                $result = $this->modx->query($sql);
                if (is_object($result)) {
                    $row = $result->fetch(PDO::FETCH_ASSOC);
                    $city  = $row['value'];
                }
            }
            //$mode = modSystemEvent;
            $res = $this->modx->resource->get('id');
            $type = 0;
            if ($res > 0){
                $city = $city.' '.$address;
                $type = 1;
             }
           $this->modx->smarty->assign('type', $type);
            $this->modx->smarty->assign('address',$city);

            $corePath = $this->modx->getOption('ymaps.core_path', null, $this->modx->getOption('core_path') . 'components/ymaps/');
            return $corePath . 'elements/tv/tv.ymaps.input.tpl';
        }
    }
    
return 'modTemplateVarInputRenderGoogleMapsTV';