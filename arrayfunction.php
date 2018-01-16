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

   // define associative array key=>value pair
      $cupcake = array("grasshopper"=>"The Grasshopper",
                          "maple"=>"Whisky Maple Bacon",
                          "carrot"=>"Carrot Walnut",
                          "caramel"=>"Salted Caramel Cupcake",
                          "velvet"=>"Red Velvet",
                          "lemon"=>"Lemon Drop",
                          "tiramisu"=>"Tiramisu");

    // print as key value as checkbox
      foreach($cupcake as $cup=>$cup_value) {
          echo' <input type="checkbox" name="cup[]" value ="">';
          echo "$cup_value";
          echo "<br>";
          }
          ?>
<br>
      <label>
      <!--create individual check box  -->
      <input type="checkbox" name="flavors[]" value="grasshopper"> The Grasshopper<br>
      <input type="checkbox" name="flavors[]" value="maple"> Whisky Maple Bacon<br>
      <input type="checkbox" name="flavors[]" value="carrot"> Carrot Walnut<br>
      <input type="checkbox" name="flavors[]" value="caramel"> Salted Carmel Cupcake<br>
      <input type="checkbox" name="flavors[]" value="velvet"> Red Velvet<br>
      <input type="checkbox" name="flavors[]" value="lemon">Lemon Drop<br>
      <input type="checkbox" name="flavors[]" value="tiraminsu">Tiramisu<br>
      </label>

 </body>
</html>
