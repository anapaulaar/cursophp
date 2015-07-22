<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>site</title>
    <script type="text/javascript">
     var array = Array(1,2,3,4,5);

     for(var i=0;i<array.length;i++){
       alert(array[i]);
     }
    </script>
  </head>
  <body>

  </body>
</html>


<?php



$a = array(1,2,3,4);
foreach($a as $valor){

   $valor =  $valor*5;
  echo $valor."<br/>";

}

foreach($a as &$valor){
   $valor = $valor*10;
}

foreach($a as $valor){

   $valor =  $valor*5;
  echo $valor."<br/>";

}

var_dump($a);
?>
