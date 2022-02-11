<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $arr = array();
for ($i=0; $i<=10; $i++) {
    $arr[] = rand(0, 10);
}
echo "<pre>";
print_r($arr);
echo "<pre>";
 
$min = min($arr); 
$max = max($arr); 
 
$keyMin = array_search($min, $arr);
$keyMax = array_search($max, $arr);
 
$arr[$keyMin] = $max;
$arr[$keyMax] = $min;
 
echo "<pre>";
print_r($arr);
echo "<pre>";

echo "<$min>";
echo "<$max>";
        ?>
    </body>
</html>
