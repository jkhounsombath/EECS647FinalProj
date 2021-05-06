<?php

session_start();


if(!isset($_SESSION["userid"]) || $_SESSION["userid"] !== true){
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
  <head>


    <title>Revolutionized LEDS</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">
    <style>
        section {
            padding: 70px 0;
            border-bottom: 1px dotted #ccc;
        }

        
        .grid-example  div[class^="col"] {
            border: 1px solid white;
            background: rgb(255, 255, 255);
            text-align: center;
            padding-top: 8px;
            padding-bottom: 8px;
            }
      
        .jumbotron {
    background-color: rgb(255, 255, 255);
        }
    </style>
  </head>

  <body data-spy="scroll" data-target="#navbar-example">

    <nav id="topNav" class="navbar navbar-full navbar-static-top navbar-dark bg-inverse">
        <div class="container">
            <a class="navbar-brand" href="#">Revolutionized LEDS</a>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <?php echo "<h1 class= 'display-3'> Welcome " .$userName. "</h2>"; ?>
      </div>
    </div>

    <div class = regButtons>
        <button onclick="window.location.href='ColorPreview/colorPreview.php'">Color Test</button>
    </div>
    
    <div class = regButtons>
        <button onclick="window.location.href='viewDownloads.php'">View most downloaded colors</button>
    </div>   
        
    <div class = regButtons>
        <button onclick="window.location.href='viewRating.php'">View top rated colors</button>
    </div>        
        
    <div class = regButtons>
        <button onclick="window.location.href='logout.php'">Log out</button>
    </div>    
        

  </body>
</html>