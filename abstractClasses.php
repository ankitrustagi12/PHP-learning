<?php
abstract class animal{
	public $name;
	public $color;
	public function describe(){
		return $this->name.' is '.$this->color;
	}
    abstract public function makesound();
}

class duck extends animal{
	public function describe(){
		return parent::describe();
	}
	public function makesound(){
		return 'Quack';
	}
}
class dog extends animal{
	public function describe(){
		return parent::describe();
	}
	public function makesound(){
		return 'Bark';
	}
}
$animal= new dog();
$animal->name='nonu';
$animal->color='black';
//echo $animal->describe();
echo $animal->makesound();