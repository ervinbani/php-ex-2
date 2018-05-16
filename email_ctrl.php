<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <?php
          $password = $_GET['password'];


          if($password == 'Boolean'){
              $message = 'OK' . ' - ' . 'La password inserita è corretta, puoi continuare!' ;


          }
          else {
              $newmessage =  'KO' . ' - ' . 'La password inserita è sbagliata;' ;


          }
      ?>
        <h1 style="color:green"><?php echo $message ; ?></h1>
        <h1 style="color:red"><?php echo $newmessage ; ?></h1>





  </body>
</html>
