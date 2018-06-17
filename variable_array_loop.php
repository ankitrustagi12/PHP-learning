<?php
 //echo "it works";
 $myvar1 = 'hello world';
 echo $myvar1.'<br>';
 //concatenation
 $var1='hello';
 $var2='world';
 echo $var1." ".$var2.'<br>';
 //Array
 $numbers = array(12,13,14);
 print_r($numbers).'<br>';
 echo $numbers[1].'<br>';

$numbers=[12,13,14]; 
print_r($numbers);

//ASSOCIATIVE ARRAY
  $ages = array('John' => 35,'Mary' => 27 );
  echo $ages['Mary'].'<br>';

  //array_pop($ages);   //delete last element
  array_shift($ages); //delete first element
  print_r($ages);

 //LOOPS
  
  /*
   comments
  */
  for($i=0;$i<5;$i++){
  	 echo $i.'<br>';
  } 
  $j=0;
  while($j<=5){
  	echo'Number '.$j.'<br>';
  	$j++;
  }
  $numbers= array(12,13,14);
  foreach($numbers as $number){
  	echo'This is number '.$number.'<br>';
  }
  $ages = array('John' => 35,'Mary' => 27 );
  foreach($ages as $key=>$age){
  	echo $key.' is '.$age.' old '.'<br>';
  }
  



 ?>