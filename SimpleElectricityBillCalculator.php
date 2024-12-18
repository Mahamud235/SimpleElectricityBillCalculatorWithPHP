<?php
echo "Enter the amount of units consumed: ";
$consumedUnit = (float) readline();

if($consumedUnit<=100) {
 echo $consumedUnit*5 ;
} elseif($consumedUnit<=200) {
    echo 100*5 +(200-$consumedUnit)*10 ;
} elseif($consumedUnit>200){
    echo 100*5 +100*10+($consumedUnit-200);
}