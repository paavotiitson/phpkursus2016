<?php
$drinks[]="Piim";
$drinks[]="Hapupiim";
$drinks[]="Mahl";
$drinks[]="Limonaad";
$drinks[]="Lahjapiim";

echo $drinks[4];

echo "<pre>";
print_r($drinks);
echo "</pre>";

$rand1 = rand(0, sizeof($drinks)-1);
$rand2 = rand(0, sizeof($drinks)-1);

echo "isa lemmikjook on $drinks[$rand1] aga poeg joob $drinks[$rand2]";

echo "<hr>";

echo "<ul>";
for ($i = 0; $i < sizeof($drinks); $i++)
{
    echo "<li>$drinks[$i] ";
    echo "- " . rand(2,7) . "€";
    echo "</li>";
    
}    
echo "</ul>";

echo "<p>";

foreach ($drinks as $key => 4val)
{
    $counter++;
    echo "$counter) massiiv element $key väärtus on $val<br>";
}

?>