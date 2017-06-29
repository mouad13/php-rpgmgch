<?php
// STEP 1 :

require('client.php');
class User
{
	private $_id = 'lolo';
	private $_email = 'mouad@rifai.ao';
	private $_createDate = '00/00/00';


	public function getID(){
		return $this->_id;
	}

	public function setID($_id){
		$this->_id = $_id;
	}

	
	public function getEmail(){
		return $this->_email;
	}

	public function setEmail($_email){
		$this->_email = $_email;
	}


	public function getDate(){
		return $this->_createDate;
	}

	public function setDate($_Date){
		$this->_createDate = $_Date;
	}

}




//$test = $NewUser->getID(); 

//var_dump($NewUser);
?>
