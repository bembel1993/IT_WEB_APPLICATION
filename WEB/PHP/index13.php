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
                height: 150px;
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
                padding-bottom: 120px;
                margin-left: 20%;
                margin-top: -20px;
            border: solid 1px bisque;    
            height: 15px;
            }
            h1 {
    font-size: 200%; 
    border-bottom: 2px solid red; 
    font-weight: normal; 
    padding-bottom: 5px; 
   }
            </style>
        </head>
    <body>
        <div class="f1">
            <div class="f1_2">
		<form action="" method="GET">
                    <h3>You know PHP?</h3>
                    <p>Yes<input type="radio" name="language" value="0">
                    No<input type="radio" name="language" value="1"></p>
                    <input type="submit">
		</form>
                </div>
            </div>
                <h1>
                <?php
        if (isset($_REQUEST['language']) and $_REQUEST['language'] == 0) {
            echo "You know PHP ! It's Cool";            
            }
        if (isset($_REQUEST['language']) and $_REQUEST['language'] == 1) {            
            echo "You don't know PHP";
        }
        ?>
    </body>
</html>
