<?php
// STEP 1 :

class User
{
	private $_id;
	private $_email;
	private $_createDate;


	public function getID(){
		return $this->_id;
	}

	public function setID($_id){
		$this->_id = $_id;
	}

}

$NewUser = new User();
$NewUser->setId('koko');

$test = $NewUser->getID(); 

var_dump($test);
?>
