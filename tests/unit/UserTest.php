<?php

	require __DIR__ . "/../../Models/User.php";
	use PHPUnit\Framework\TestCase;

    class UserTest extends TestCase{

    	public function testThatWeCanGetTheFirstName(){

    		$user = new \App\Models\User;

    		$user->setFirstName('Billy');

    		$this->assertEquals($user->getFirstName(),'Billy');

    	}


    	public function testThatWeCanGetTheLastName(){

    		$user = new \App\Models\User;

    		$user->setLastName('Garret');

    		$this->assertEquals($user->getLastName(),'Garret');

    	}

    	public function testFullNameIsReturned(){

    		$user = new \App\Models\User;

    		$user->setFirstName('Billy');

    		$user->setLastName('Garret');

    		$this->assertEquals($user->getFullName(),'Billy Garret');

    	}

    	public function testFirstAndLastNameAreTrimmed(){

    		$user = new \App\Models\User;

    		$user->setFirstName('Billy      ');

    		$user->setLastName('      Garret');

    		$this->assertEquals($user->getFirstName(),'Billy');

    		$this->assertEquals($user->getLastName(),'Garret');

    	}

    	public function testEmailAdressCanBeSent(){

    		$user = new \App\Models\User;

    		$user->setEmail('billy@codecourse.com');

    		$this->assertEquals($user->getEmail(),'billy@codecourse.com');
		
		}


		public function testEmailVariablesContainCorrectValues(){

			$user = new \App\Models\User;


    		$user->setFirstName('Billy      ');

    		$user->setLastName('      Garret');

    		$user->setEmail('billy@codecourse.com');

    		$emailVariables = $user->getEmailVariables();


    		$this->assertArrayHasKey('full_name', $emailVariables);
    		$this->assertArrayHasKey('email', $emailVariables);

    		$this->assertEquals($emailVariables['full_name'], 'Billy Garret');
    		$this->assertEquals($emailVariables['email'], 'billy@codecourse.com');



		}


    } 