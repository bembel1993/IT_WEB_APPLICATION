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
                height: 130px;
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
                padding-left: 100px;
                padding-bottom: 100px;
                margin-left: 20%;
                margin-top: -20px;
            border: solid 1px bisque;    
            height: 15px;
            }
            </style>
    </head>
    <body>
        <?php
	if (!isset($_REQUEST['age'])) {
?>
        <div class="f1">
            <div class="f1_2">
		<form action="" method="GET">
		<p>Enter your age <br/>	
                    <input type="text" name="age"></p>
			<input type="submit">
		</form>
                </div>
            </div>
<?php
	}
?>
<?php
	if (isset($_REQUEST['age'])) {
		$age = strip_tags($_REQUEST['age']);
		echo 'Ваш возраст: '.$age;
	}
?>
    </body>
</html>
