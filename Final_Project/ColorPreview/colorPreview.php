<!DOCTYPE html>
<head>


<link rel="stylesheet" href="myStyle.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<script type="text/javascript" src="ex.js"> </script>
</head>
<body>
  <button style="margin-right:600px;" onclick="window.location.href='../userPortal.php'">RETURN TO USER PORTAL</button>
</BR><h1>LED COLOR TEST</h1>
</body>
Enter each color value below, each in 00-FF form. </BR> Click the TEST button to preview your choice.</BR></BR>
R:<input type="text" id="1R"> </BR>
G:<input type="text" id="1G"></BR>
B:<input type="text" id="1B"></BR></BR>
<button onclick="myFunc()">TEST</button>
<h2> PREVIEW </h2>
Now, choose your desired brightness intensity (0-999) for your LED display. </BR></BR>
BRIGHTNESS:<input type="text" id="1L"></BR>
Click below to upload your currently inputted choices to the database when you're done. </BR></BR>
<button onclick="myFunc2()">SUBMIT</button>
</html>
