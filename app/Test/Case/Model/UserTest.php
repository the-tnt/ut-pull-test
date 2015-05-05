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

    public function testGetAvatarPath() {
        $result = $this->User->getAvatarPath(1);
        $this->assertEquals('files/1/avatar.jpg', $result);
    }

}
