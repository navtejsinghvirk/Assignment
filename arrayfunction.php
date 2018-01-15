<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Function Assign</title>
 </head>
 <body>
      <?php

        $animals = array("panda","alpaca","boa");

        function sortanimal(){
            global $animals;
            for($x=0;$x<=count($animals);$x++){
                sort($animals);
                echo $animals[$x];
                echo "    ";
            }
        }
            //echo "$cup_value";
            //echo "<br>";
          // }

             echo"<br>";
             sortanimal();  //alpaca boa panda
             echo"<br>";
            // addanimals(goat); //alpaca boa goat panda
             echo"<br>";
             //addanimals(Boa); //alpaca boa goat panda
              echo"<br>";
              echo"<br>";

        ?>
 </body>
</html>
