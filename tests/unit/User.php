<?php
use PHPUnit\Framework\TestCase;
class UserTest extends  TestCase{

	protected $user;
	public function setUpOff()
	{
		$this->user = new \App\Models\User;
	}
	public function testGetFName()
	{
		$this->user = new \App\Models\User;
		$this->user->setFirstName('Billy');
		$this->assertEquals($this->user->getFirstName(),'Billy');
		return 'Billy';
	}

	public function testSetGetLastName()
	{
		$this->user = new \App\Models\User;
		$this->user->setLastName('Petro');
		$this->assertEquals($this->user->getLastName(),'Petro');
		return 'Petro';
	}

	/**
	 * @depends testName
	 * @depends testLastName
	 */
	public function tstGetFullName($name, $last)
	{
		$this->user = new \App\Models\User;
		$this->user->setFirstName('Billy');
		$this->user->setLastName('Petro');
		$this->assertEquals($this->user->getFullName(),sprintf('%s %s',$name,$last));
	}

	public function estTrimtedFullName()
	{
		$this->user->setFirstName('  Billy');
		$this->user->setLastName('Petro  ');
		$this->assertEquals($this->user->getFullName(),'Billy Petro');
	}

	public function estKeyArrCorrectInInfoAboutUser()
	{
		$this->user->setFirstName('Billy');
		$this->user->setLastName('Petro');
		$this->user->setEmail('billy_petro@foundation.org');

		$email_variables = $this->user->getEmailVariables();
		$this->assertArrayHasKey('full_name',$email_variables);
		$this->assertArrayHasKey('email',$email_variables);
		$this->assertEquals($email_variables['full_name'],'Billy Petro');
		$this->assertEquals($email_variables['email'],'billy_petro@foundation.org');
	}

	/**
	 * @test
	 */
	public function tsimpleTrue(){
		$this->assertTrue(true);
	}
	/*public static function setUpBeforeClass()
	{
		fwrite(STDOUT, __METHOD__ . "\n");
	}*/
}