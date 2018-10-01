<?PHP 
//getting the max number among the 3 given numbers
$a = 35;
$b = 64;
$c = 125;

if($a > $b && $a > $c){

  $max_num = $a;

    if($b>$c){
      $second = $b;
      $third = $c;
    }
    else{
      $second = $c;
      $third = $b;
    }
}
else if($b > $a && $b > $c){
    $max_num = $b;
  
    if($a>$c){
    $second = $a;
    $third = $c;
    }
  else{
    $second = $c;
    $third = $a;
  }
}
  else{
    $max_num = $c;
  
    if($a>$b){
    $second = $a;
    $third = $b;
    }
  else{
    $second = $b;
    $third = $a;
  }
  }

  echo $max_num . "</br>";
  echo $second. "</br>";
  echo $third. "</br>";
?>