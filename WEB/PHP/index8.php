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
	<P>Name: <input type="text" name="name"></p>
	<p>Age: <input type="text" name="age"></p>
	<p>Message: <br/>
        <textarea name="message" cols="30" rows="5"></textarea></p>
	<input type="submit" name="submit">
</form>
</div>
            </div>    
        <h1>
        <?php
	if (isset($_REQUEST['submit'])) {
		$age = strip_tags($_REQUEST['age']);
		$name = strip_tags($_REQUEST['name']);
		$message = strip_tags($_REQUEST['message']);
		echo "Hallo, $name, $age <br> Your message: $message";
	}
?>
    </body>
</html>
