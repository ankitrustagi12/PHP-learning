<?php
class First{
	public $id=23;
	public $name = 'Ankit';
	public function func1($word){
		echo $word;
	}
}
class Second extends first{
	public function getname(){
		echo $this->name;
	}
}
$second = new Second;
//echo $second->func1('ankit');
echo $second->getname();