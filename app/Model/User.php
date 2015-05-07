<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'email';

    public $avatarFilename = 'avatar.jpg';

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'allowEmpty' => false,
            ),
        ),
        'password' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            ),
        ),
    );


    /**
     * Get user's avatar path relative to webroot
     * @param int $id User ID
     * @return string
     */
    public function getAvatarPath($id) {
        return 'files/' . $id . '/' . $this->avatarFilename;
    }
}
