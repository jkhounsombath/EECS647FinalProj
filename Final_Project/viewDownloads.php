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


        table {
            border-collapse: collapse;
            width: 100%;
            color: #151B8D;
            font-family: monospace;
            font-size: 25px;
            text-align: left;
            }
            th {
            background-color: #151B8D;
            color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2
        }



    </style>
  </head>

  <body>

    <nav id="topNav" class="navbar navbar-full navbar-static-top navbar-dark bg-inverse">
        <div class="container">
            <a class="navbar-brand" href="#">Revolutionized LEDS</a>
        </div>
    </nav>
     
    <table>
    <tr>
    <th>Config Name</th>
    <th>Rating</th>
    <th>Downloads</th>
    </tr>

    <?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "jkhounsombath", "ieng9eiF", "jkhounsombath");

    $query = "SELECT CONFIG_NAME, RATING, DOWNLOADS FROM LED_CONFIG
              ORDER BY DOWNLOADS DESC";    
    $result = $mysqli-> query($query);

    if($result->num_rows > 0){
      
      while($row = $result->fetch_assoc()) {
      echo "<tr><td>" . $row["CONFIG_NAME"]. "</td><td>" . $row["RATING"] . "</td><td>"
      . $row["DOWNLOADS"]. "</td></tr>";
      }
      echo "</table>";
      } else { echo "0 results"; }
      $conn->close();    
    
    ?>

    
    
        

  </body>
</html>