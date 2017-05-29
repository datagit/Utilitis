<?php
/*OOP for PHP
1. encapsulation
2.
3.
4.
5.
6.
7.
*/
//3. always custom exception
error_reporting(E_ALL);
ini_set('display_errors', 1);
class PersonException extends LogicException {}
class Person {
	//1. Encapsulation
	private $fullName;
	private $age;
	private $birthday;
	function __construct($fullName = 'DefaultName'){
		//called when user new object
		$this->fullName = $fullName;
		$this->age = 0;
		$this->birthday = new DateTime();
	}
	function __destroy(){
		//called when user call unset(object);
		echo "__destroy\n";
	}
	
	public function setBirthday($birthday, $format = 'Y-m-d'){
		//2. always friendly with neighbouring
		$date = DateTime::createFromFormat($format, $birthday);
		if ($date === false){
			throw new PersonException("Birthday is invalid!");
		}		
		$this->birthday = $date;
		return $this;
	}
	
	public function setAge($age){
		//2. always friendly with neighbouring
		if (filter_var($age, FILTER_VALIDATE_INT) === false) {
			throw new PersonException("Age is invaild!");
		}
		$this->age = $age;
		return $this;
	}
	
	public function __toString(){
		//called when user try print
		$s = sprintf("FullName: %s, Age: %d, Birthay: %s \n", $this->fullName, $this->age, $this->birthday->format('Y-m-d'));
		return $s;
	}
	public function __debugInfo(){
		//called when user try var_dump		
		return (array)$this;
	}
	
	
}
//4. use code with interface
//5. less connect with object
//6. 

$p = new Person();
echo $p;
var_dump($p);