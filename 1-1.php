<?PHP
$sum=0;
for($i=1;$i<=10;$i++){
  if($i==1){
    $sum=1;
    continue;
  }
  $ans=$sum+$i;
  print "{$sum}+{$i}={$ans}<br>\n";
  $sum=$ans;
}
?>