<?php
// STEP 1 :


class Product
{
	private $_id;
	private $_name;
	private $_price;


	public function getID(){
		return $this->_id;
	}

	public function setID($_id){
		$this->_id = $_id;
	}

	
	public function getName(){
		return $this->_name;
	}

	public function setName($_Name){
		$this->_name = $_Name;
	}


	public function getPrice(){
		return $this->_price;
	}

	public function setPrice($_Price){
		$this->_price = $_Price;
	}

}





?>
