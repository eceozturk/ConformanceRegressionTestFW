<?php

/* 
Count the number of results folders available inside References folder.
 */

chdir("../Test_Automation/TestResults/References");
$command1="find * -maxdepth 0 ";
$output=array();
exec($command1,$output);
$arrlength = count($output);

echo $arrlength;