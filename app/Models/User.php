<?php
namespace  App\Models;
class User{
	protected $first_name;
	protected $last_name;
	protected $email;
	public function setFirstName($firstName)
	{
		$this->first_name = trim($firstName);
	}

	public function getFirstName()
	{
		return $this->first_name;
	}

	public function setLastName($lastName)
	{
		$this->last_name = trim($lastName);
	}

	public function getLastName()
	{
		return $this->last_name;
	}

	public function getFullName()
	{
		return sprintf('%s %s',$this->getFirstName(),$this->getLastName());
	}

	public function setEmail($email_adr)
	{
		$this->email = $email_adr;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getEmailVariables()
	{
		return ['full_name'=>$this->getFullName(),
			'email'=>$this->getEmail()];
	}
}