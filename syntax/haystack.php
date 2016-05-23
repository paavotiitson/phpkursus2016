 <?php


while ($nr != 1)
{
  $nr = rand(1, 3);
  $counter++;
  echo "$counter) $nr<br>";
}



$var = 4;
while ($var < 3)
{
  echo "$var, ";
  $var++;
}


$haystack = "abcdefghijklmnoprstuv0123456789";
//echo $haystack[2];

while ($needle != 'a')
{
  $rnd = rand(0, strlen($haystack)-1);
  $needle = $haystack[$rnd];
  echo $needle;
  $counter++;
}
echo "<br>$counter";


?> 