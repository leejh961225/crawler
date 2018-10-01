<?PHP

$num = 300;
$given = 3000;
$sum = 0;

while($num <= 3000){
  if($num %2 != 0){
    $sum =+ $num;
  }
  $num ++;
}

echo $sum;
?>