<?php
class manuserGetListProcessor extends modObjectGetListProcessor {
    public $classKey = 'modUser';
    public $languageTopics = array('user');
    public $permission = 'view_user';
    public $defaultSortField = 'username';

    public function initialize() {
   // return $this->modx->error->failure('Ошибка, пользователь не найден.');
        $initialized = parent::initialize();
        $this->setDefaultProperties(array(
            'usergroup' => false,
            'query' => '',
            'exclude' =>  $this->modx->getOption('exclude_users'),
        ));
        if ($this->getProperty('sort') == 'username_link') $this->setProperty('sort','username');
        if ($this->getProperty('sort') == 'id') $this->setProperty('sort','modUser.id');
        
        return $initialized;
    }

    public function prepareQueryBeforeCount(xPDOQuery $c) {
        $c->leftJoin('modUserProfile','Profile');
        
        $exclude = $this->getProperty('exclude','');
        if (!empty($exclude)) {
            $c->where(array(
                'id:NOT IN' => is_array($exclude) ? $exclude : explode(',',$exclude),
                
            ), xPDOQuery::SQL_AND, null, 1);
        }
        
        $query = $this->getProperty('query','');
        if (!empty($query)) {
            $c->andCondition(array('modUser.username:LIKE' => '%'.$query.'%'));
            $c->orCondition(array('Profile.fullname:LIKE' => '%'.$query.'%'));
            $c->orCondition(array('Profile.email:LIKE' => '%'.$query.'%'));
        }

        $userGroup = $this->getProperty('usergroup',0);
        if (!empty($userGroup)) {
            $c->innerJoin('modUserGroupMember','UserGroupMembers');
            $c->where(array(
                'UserGroupMembers.user_group' => $userGroup,
            ));
        }
  
        
        
        //$c->prepare();
       // echo($c->toSql()); exit();
        return $c;
    }

    public function prepareQueryAfterCount(xPDOQuery $c) {
        $c->select($this->modx->getSelectColumns('modUser','modUser'));
        $c->select($this->modx->getSelectColumns('modUserProfile','Profile','',array('fullname','email','blocked')));
        return $c;
    }

    /**
     * Prepare the row for iteration
     * @param xPDOObject $object
     * @return array
     */
    public function prepareRow(xPDOObject $object) {
        $objectArray = $object->toArray();
        $objectArray['blocked'] = $object->get('blocked') ? true : false;
        $objectArray['cls'] = 'pupdate premove pcopy';
        unset($objectArray['password'],$objectArray['cachepwd'],$objectArray['salt']);
        return $objectArray;
    }
}
return 'manuserGetListProcessor';