<?php  

class Vegetable extends Product
{	
	private $_productorName;
	private $_expiresAt;

	public function getProductorName(){
		return $this->_productorName;
	}

	public function setProductorName($_ProductorName){
		$this->_productorName = $_ProductorName;
	}

	public function isFresh(){
		$DateAjd = new DateTime();

		if ($DateAjd->getTimestamp() < $this->$_expiresAt->getTimestamp()){
			return True;

		}
		return False;
		
	}

}



?>