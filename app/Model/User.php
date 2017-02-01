<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');


class User extends AppModel {
    
    public $helpers = array('Html','Form');
    public $components = array('Email','Flash','Session');

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A username is required'
            )
        ),
        
         'email' => array(
            'required' => array(
                'rule' =>'notBlank',
                'message' => 'An email is required'
                //'allowEmpty' => false
            )
        ),
       
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                //'allowEmpty' => false
            )
        ),
         'password' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'A password is required'
            )
        ),
          'pass_conf' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'Please confirm your password'
            ),
        ),
         );

    public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $passwordHasher = new BlowfishPasswordHasher();
        $this->data[$this->alias]['password'] = $passwordHasher->hash(
            $this->data[$this->alias]['password']
        );
    }
    return true;
}

}
?>