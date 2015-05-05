<?php
App::uses('User', 'Model');

/**
 * User Test Case
 *
 */
class UserTest extends CakeTestCase {

    public $fixtures = array(
        'app.user'
    );

    /**
     * @var User
     */
    public $User;

    public function setUp() {
        parent::setUp();
        $this->User = ClassRegistry::init('User');
    }

    public function tearDown() {
        unset($this->User);

        parent::tearDown();
    }

}
