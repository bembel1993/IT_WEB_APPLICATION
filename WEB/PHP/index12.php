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
                height: 310px;
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
                padding-bottom: 210px;
                margin-left: 20%;
                margin-top: -20px;
            border: solid 1px bisque;    
            height: 90px;
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
        
                   <P><b> HTML </b>
                    <input type="checkbox" name="LANGUAGE[]" value="HTML"></P>  
                    <P><b> CSS </b>
                    <input type="checkbox" name="LANGUAGE[]" value="CSS"></P>
                    <P><b> PHP </b>
                    <input type="checkbox" name="LANGUAGE[]" value="PHP"></P>
                    <P><b> Java </b>
                    <input type="checkbox" name="LANGUAGE[]" value="JAVA"></P>
                    <P><b> JavaScript </b>
                    <input type="checkbox" name="LANGUAGE[]" value="JS"></P>
                    <p><b> C/C++ </b>
                    <input type="checkbox" name="LANGUAGE[]" value="C/C++"></p>
                    <p><b> SQL </b>
                    <input type="checkbox" name="LANGUAGE[]" value="SQL"></p>
                    <input type="submit" value=" Submitting a request ">
		</form>
                </div>
            </div>
                <h1>
        <?php
        if (isset($_REQUEST['LANGUAGE'])) {
            echo 'You know - '.implode(', ', $_REQUEST['LANGUAGE']); 
            }
        ?>
    </body>
</html>
