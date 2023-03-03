<?php
// Question 1   : 

function reversestring($str){
  for(  $i=0 ; $i< strlen($str)  ; $i++ ){
    echo $str[strlen($str)-$i-1] ;
  }
}

$name = "IEEE Al-azhar";
reversestring($name);  // echo strrev($name);
echo "<br>" ;

///////////////////////////////////////////////////////////////

// Question 2   : 
function lowerCase($string){
  $flag = true;
  for( $i=0 ; $i<strlen($string) ; $i++ ){
      if( !($string[$i] >= 'a' && $string[$i] <= 'z') ){
         $flag = false;
         break;
      }
  }
  if( $flag == true  ) echo "all  letters lowercases ";
  else echo "Not all letters lowercase";
}

lowerCase("ieee");      //echo strtolower($name) ;
echo "<br>" ;
echo strtolower("IEEE Al azhar") ;
//////////////////////////////////////////////////////////////







// Question 3   : 
function primeOrNot($number) {
  $flag = true;
 for( $i=2 ; $i<$number ; $i++ ){
    if( $number % $i ==0 ){
      $flag = false;
      break;
    }  
 }
  if( $flag == true ) echo "Prime";
  else echo "Not Prime" ;
}
$number = 15 ;
primeOrNot($number); // 15 not prime because 15%3 == 0 , 15%5==0 
echo "<br>" ;
primeOrNot(19);  // 19 prime because 19 Divide by itself and 1 only 
echo "<br>" ;
/////////////////////////////////////////////////////////////

// Question 4   : 
function removeElement($delete_item){
 $numbers = array(2,4,6,8,10);
 foreach( $numbers as $num ){
   if( $num != $delete_item ){
    echo '<pre>';
    print_r($num) ;
    echo '</pre>';
   }
 }
}
removeElement(4);
/////////////////////////////////////////////////////////////

// Question  5    : 
class Student{
private $name;
private $age ;
private $addres; 
public function setname($name){
  $this->name = $name;
}
public function getname(){
  return $this -> name;
}
public function setage($age){
  $this->age = $age;
}
public function getage(){
  return $this->age;
}
public function setaddres($addres){
  $this->addres = $addres;
}
public function getaddres(){
  return $this->addres;
}
}
$student = new Student();
$student->setname("Khadiga");
echo $student->getname();
?>
