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
                height: 170px;
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
                padding-bottom: 130px;
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
       <form action="" method="post">
  <input type="text" name="name1" >
    <input type="submit">
</div>
            
</form>
                <h1>
<?php
if ( $_SERVER[ "REQUEST_METHOD" ] == "POST" )

{
     // первый вариант

  $namesArr   = explode( ' ', $_POST[ 'name1' ] );
  $surName   = my_mb_ucfirst( $namesArr[ 0 ], false );
  $firstName = my_mb_ucfirst( $namesArr[ 1 ] );
  $thirdName = my_mb_ucfirst( $namesArr[ 2 ] );
  $string = $surName . $firstName . $thirdName;
 // echo "$string<br>";
  
  //второй вариант
  $namesArr = preg_split( '/[ -]/', $_POST[ 'name1' ] );
  foreach( $namesArr as $key => $name )
  {
    if( $key === 0 )
      $string2 = my_mb_ucfirst( $name, false );
    else
      $stringArr[] = my_mb_ucfirst( $name );
  }
  $string2 .= implode( ' ', $stringArr );
  echo "$string2<br>";
}
function my_mb_ucfirst( $str, $onlyFirstLetter = true )
{
  $firstLetter = mb_strtoupper( mb_substr( $str, 0, 1 ) ); 
  return $onlyFirstLetter
         ? $firstLetter . '.'
         : $firstLetter . mb_substr( $str, 1 ) . ' ';}
?>
                    </div>
    </body>
</html>
