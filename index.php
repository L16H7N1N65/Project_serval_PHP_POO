<?php
// Function to autoload classes
function chargeClass($class) {
    // Require the class file
    require $class . '.class.php';
}

// Register the autoloader
spl_autoload_register('chargeClass'); 
error_log("Autoloader is working");
// Create a new instance of DataBase
$database = new Database();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>My To Do List</title>
    <!-- Meta tags and stylesheet link -->
    <style>
        #trackpad {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            gap: 10px;
            width: 200px;
            height: 200px;
            margin: auto;
        }
        .button {
            background-color: #4CAF50;
            border: none;
            color: white;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class = "container">
                <div class="col offset-1">
        <img width="90%" src="./assets/1025035.jpg" alt="img1">
        
    </div>
</div>
<br>
<br>
<div class="container2">
    <div class="col-md-9">
        <div class="row">
        <div id="trackpad">
        <div></div>
        <button class="button" onclick="move('up')">Up</button>
        <div></div>
        <button class="button" onclick="move('left')">Left</button>
        <div></div>
        <button class="button" onclick="move('right')">Right</button>
        <div></div>
        <button class="button" onclick="move('down')">Down</button>
        <div></div>
      </div>
     <img width="20%" class="col-mt-1 offset-12" src="./assets/compass.png" alt="">
    </div>
</div>
    <script>
        function move(direction) {
            var elem = document.getElementById("myElement");
            var pos = 0;
            if (direction == 'up') pos -= 10;
            if (direction == 'down') pos += 10;
            elem.style.top = pos + "px";
            console.log(`Moving ${direction}`);
        }
    </script>

</body>
</html>