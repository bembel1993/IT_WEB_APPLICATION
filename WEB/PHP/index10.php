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
                padding-top: 100px;
                height: 300px;
                width: 40%;
            background: Plum;
            border: solid 3px #7922CC;
            margin-left: auto;
            margin-right: auto;
            border-radius: 25px;
            }
            .f1_2{
                width: 260px;
                
                background-color: pink;
                padding: 60px;
                padding-bottom: 250px;
                margin-left: 7%;
                margin-top: -13%;
            border: solid 2px bisque;    
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
	<P>Login <br/> <input type="text" name="login"></p>
	<p>Password <br/> <input type="password" name="pass"></p>
	<input type="submit" name="submit" value=" Send ">
</form>
</div>
            </div>   
    </head>
    <body>
        <h1>
        <?php
        if(isset($_REQUEST['submit'])){
            $login = 'admin';
            $pass = 'reiter';
            $formLogin = trim($_REQUEST['login']);
            $formPass = trim($_REQUEST['pass']);
            if ($login == $formLogin && $pass == $formPass){
                echo 'Welcome!';
            } else {
                echo 'Access is denied';
            }
        }
        ?>
    </body>
</html>
