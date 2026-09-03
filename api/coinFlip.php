<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="refresh" content="5" />
    <title>Coin-Flip</title>
  </head>
  <body>
    

    <?php 
      
      $taco = "taco"; //This is a variable $taco = "taco"
      echo "this is a test, and this is a variable: $taco"; //echo outputs data to screen 
    ?>

    <?php 
      $coinFlip = rand(0,1);
      if($coinFlip){
        echo "<section>This is section i can load dynamically, and <p style=\"color: red;\"> I lost the coin flip</p></section>";
      }else{
        echo "<section>This is section i can load dynamically, and <p style=\"color: green;\"> I won the coin flip!</p></section>";
      }
      
    ?>

  </body>
</html>
