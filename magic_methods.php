<?php
/**
* The magic methods
* http://php.net/manual/en/language.oop5.magic.php
*/
error_reporting(E_ALL);
ini_set('display_errors', 1);

interface IEmployee {
	public function eat($food);
	public function drink($water);
}
abstract class AbsEmployee {
	abstract protected function think();
}
class Employee{
	private $_data = array();
	public function __set($name, $value){
		if(array_key_exists($name, $this->_data)){
			return false;
		}
		$this->_data[$name] = $value;
		return true;
	}
	public function __get($name){
		if(array_key_exists($name, $this->_data)){
			return $this->_data[$name];
		}
		return false;
	}
	
	
	protected function think(){
		return sprintf("%s\n", "I am thinking...");
	}
	public function showThink(){
		echo $this->think();
	}
}

$e = new Employee();
$e->showThink();
$e->Name = "Dao Man Dat";
echo $e->Name;
echo "\n";
var_dump($e);
echo "\n";