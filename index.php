<?php

class man{
	public $name;
	public $age;
	public $height;
	

    function __construct($name,$age,$height){
	$this->name = $name;
	$this->age = $age;
	$this->height = $height;
	}	
    protected function info(){
	  return "Name: ".$this->name."age: ".$this->age."height: ".$this->height;
	}
}
class monjur extends man{
	public $address;
	 function __construct($name,$age,$height,$address){
		$this->address = $address;
		$this->name = $name;
	    $this->age = $age;
	    $this->height = $height;
	 }
	public function message(){
	return $this->name.$this->age.$this->height.$this->address;
	}
}

$monjur = new monjur("monjur",16,5.4,"Noakhali");

echo $monjur->message();


?>

