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
     * @param int $id
     * @return string
     */
    public function getAvatarPath($id) {
        return 'files/' . $id . '/avatar.jpg';
    }
}
