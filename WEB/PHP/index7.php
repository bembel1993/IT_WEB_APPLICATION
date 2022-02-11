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
        <style type="text/css">
            .f1{
                padding-left: 100px;
                padding-top: 50px;
                height: 80px;
                width: 60%;
            background: Plum;
            border: solid 3px #7922CC;
            margin-left: auto;
            margin-right: auto;
            border-radius: 25px;
            }
            .f1_2{
                width: 34%;
                background-color: pink;
                padding-top: 5px;
                padding-left: 10px;
                padding-bottom: 10px;
                margin-left: 25%;
            border: solid 1px bisque;    
            height: 15px;
            }
            h1 {
    font-size: 200%; /* Размер шрифта */
    border-bottom: 2px solid red; /* Параметры линии под текстом */
    font-weight: normal; /* Убираем жирное начертание */
    padding-bottom: 5px; /* Расстояние от текста до линии */
   }
        </style>
    </head>
    <body>
        <div class="f1">
            <div class="f1_2">
        <form action="" method="GET">
	<input type="text" name="name">
	<input type="submit">
        </form>
                </div>
            </div>
                <h1>
        <?php
        // put your code here
        if (!empty($_REQUEST['name'])) {
		$name = $_REQUEST['name'];
		echo 'Hallo '.$name;
	}
        ?>
    </body>
</html>
