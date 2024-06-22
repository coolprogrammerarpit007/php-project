<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Development</title>
</head>
<body>
    <?php

        $name = "Arpit Mishra";
        echo "Hello, Nice To Meet You: {$name}"."<br>";
        $result = 2<3;
        echo "The Result of condition is: {$result}"."<br>";

        if($name === "Arpit Mishra"){
            echo "Entered Name is Corredt"."<br>";
        }

        $guitars = ["Vela","Explorer","Strat"];
        echo isset($guitars[3]); // determines if a variable is declared and value is other than null.


        // Associative Arrays are objects in PHP

        $student = [
            "name"=>"Arpit",
            "age"=>25,
            "isMarried"=>false,
            "Major"=>"Engineering",
            "Income"=>null
        ];

        foreach($student as $key=>$value){
            if($key === "isMarried"){
                $status = $value === true ? "Student is Married.":"Student is not Married.";
                echo $status . "<br>";
                continue;
            }
            echo "Student {$key} is: {$value}"."<br>";
        }





    ?>
</body>
</html>