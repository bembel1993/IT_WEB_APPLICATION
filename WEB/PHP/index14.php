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
                height: 270px;
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
                padding-bottom: 230px;
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
                    <h3>How old are you ?</h3>
                    <p>less than 20 years<input type="radio" name="less" value="1"></p>
                    <p>20 - 25<input type="radio" name="midle" value="1"></p>
                    <p>26 - 30<input type="radio" name="midlemore" value="1"></p>
                    <p>more than 30 years<input type="radio" name="more" value="1"></p>
                    <input type="submit">
		</form>
                </div>
            </div>
                <h1>
                <?php
        if (isset($_REQUEST['less']) == 1) {
            echo "You are less than 20 years";            
            }
        if (isset($_REQUEST['midle']) == 1) {            
            echo "You are 20 - 25 ";
        }
        if (isset($_REQUEST['midlemore']) == 1) {            
            echo "You are 26 - 30 ";
        }
        if (isset($_REQUEST['more']) == 1) {            
            echo "You are more than 30 years ";
        }
        ?>
    </body>
</html>
