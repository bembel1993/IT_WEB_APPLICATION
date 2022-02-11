<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>phplab6</title>
        <style type="text/css">
            .f1{
                padding-left: 100px;
                padding-top: 50px;
                height: 530px;
                width: 60%;
            background: Green;
            border: solid 3px #7922CC;
            margin-left: auto;
            margin-right: auto;
            border-radius: 25px;
            }
            .f1_2{
                width: 34%;
                background-color: #964b00;
                padding-top: 8px;
                padding-left: 105px;
                padding-bottom: 460px;
                margin-left: 163px;
                margin-top: -60px;
            border: solid 1px bisque;    
            height: 15px;
            }
            .innerf1{
                padding-top: 10px;
                padding-left: -50px;
                margin-left: -100px;
                margin-top: -30px;
                border: solid 3px red
                heigh: 8px
            }
            .innerf2{
                padding-top: 10px;
                padding-left: -50px;
                margin-left: 900px;
                margin-top: -565px;
                border: solid 3px red
                heigh: 5px
            }
            h1 {
    font-size: 200%; 
    border-bottom: 2px solid maroon; 
    font-weight: normal; 
    padding-bottom: 5px; 
   }
            </style>
    </head>
    <body>
        <div class="f1">
        <div class="innerf1">
        <h3>Number of Card Player 1</h3>
    <form action="" method="GET">
	<input type="text" name="num1">
	<input type="submit" value = "Enter"><br />
        </form>
                </div>

        <div class="f1_2">
              <h1>
<?php
if (isset($_REQUEST['num1'])) {
            $i = $_REQUEST['num1'];
switch ($i) {
    case 6:
        echo 'Six';
        echo "<br/><img src='image/six.png'>";
        break;
    case 7:
        echo 'Seven';
        echo "<br/><img src='image/seven.png'>";
        break;
    case 8:
        echo 'Eight';
        echo "<br/><img src='image/eight.png'>";
        break;
    case 9:
        echo 'Nine';
        echo "<br/><img src='image/nine.png'>";
        break;
    case 10:
        echo 'Ten';
        echo "<br/><img src='image/ten.png'>";
        break;
    case 11:
        echo 'Jack';
        echo "<br/><img src='image/Valet.png'>";
        break;
    case 12:
        echo 'Lady';
        echo "<br/><img src='image/Dama.png'>";
        break;
    case 13:
        echo ' KING';
        echo "<br/><img src='image/king.png'>";
        break;
    case 14:
        echo ' ACE';
        echo "<br/><img src='image/tuz.png'>";
        break;
   
    default:
        echo 'Not found Card ';
        break;
}
}
?>
</div>
            </div>
             <div class="innerf2">
             <h3>Number of Card Player 2</h3>
    <form action="" method="GET">
	<input type="text" name="num2">
	<input type="submit" value = "Enter"><br />
        </form>
<?php
if (isset($_REQUEST['num2'])) {
            $i = $_REQUEST['num2'];
switch ($i) {
    case 6:
        echo 'Six';
        echo "<br/><img src='image/six.png'>";
        break;
    case 7:
        echo 'Seven';
        echo "<br/><img src='image/seven.png'>";
        break;
    case 8:
        echo 'Eight';
        echo "<br/><img src='image/eight.png'>";
        break;
    case 9:
        echo 'Nine';
        echo "<br/><img src='image/nine.png'>";
        break;
    case 10:
        echo 'Ten';
        echo "<br/><img src='image/ten.png'>";
        break;
    case 11:
        echo 'Jack';
        echo "<br/><img src='image/Valet.png'>";
        break;
    case 12:
        echo 'Lady';
        echo "<br/><img src='image/Dama.png'>";
        break;
    case 13:
        echo ' KING';
        echo "<br/><img src='image/king.png'>";
        break;
    case 14:
        echo ' ACE';
        echo "<br/><img src='image/tuz.png'>";
        break;

    default:
        echo 'Not found Card ';
        break;
}
}
?>
                </div>
    </body>
</html>