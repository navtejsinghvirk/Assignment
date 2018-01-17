<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Function Assign</title>
 </head>
 <body>
      <?php
      //Part 1.
      //define array as $animals
      $animals = array("panda","alpaca","boa");
      //function for sort animals
      function sortAnimal(){
            global $animals;
            for($x=0;$x<=count($animals);$x++){
                sort($animals);
                echo $animals[$x];
                echo "    ";
               }
            }
     // function add new animals in array and check case insensitive
      function addanimals($newanimal){
          global $animals;
          $newlowerchar = strtolower($newanimal);
          for($x=0;$x<=count($animals);$x++){
              if(in_array($newlowerchar,$animals))
              {
                  sort($animals);
                  echo $animals[$x];
                  echo "    ";
              }else{
                  array_push($animals,$newlowerchar);
                  sort($animals);
                  echo $animals[$x];
                  echo "    ";
               }
              }
            }
     //call functions
      sortAnimal();  //alpaca boa panda
       echo"<br>";
      addanimals(goat); //alpaca boa goat panda
         echo"<br>";
      addanimals(Boa); //alpaca boa goat panda
      echo "<br>";
      echo"<br>";

      //Part 2
   // define associative array key=>value pair
      $cupcake = array("grasshopper"=>"The Grasshopper",
                          "maple"=>"Whisky Maple Bacon",
                          "carrot"=>"Carrot Walnut",
                          "caramel"=>"Salted Caramel Cupcake",
                          "velvet"=>"Red Velvet",
                          "lemon"=>"Lemon Drop",
                          "tiramisu"=>"Tiramisu");

    // print as key value as checkbox
      foreach($cupcake as $flavors=>$flavors_value) {
          echo ' <input type="checkbox" name="flavors[]" value ="'. $flavors_value.'"> ' ;
          echo $flavors_value;
          echo "<br>";
          }
          ?>

 </body>
</html>
