<html>
<head>
<style>
form{
    margin: 100px 100px 100px 500px;
    
}

</style>
<script>

var x=20;
var y=30;
var z =x+y;
var a = 'hlo this is awesome ';
document.write(1+2+a);  
  </script>
</head>
<body>
<p>1+2=</p>
<h1>MAKING REGISTER FORM</h1>
<form method="get">
<label for="fname"><b>First Name:</label><br>
<input type="text" name="fname" id="fname"><br>
<label For="lname"><b>Last Name:</label><br>
<input type="text" name="lname" id="lname"><br>
<label for="username">User Name:</label><br>
<input type="text" name="username" id="username"><br>
<label for="emailid">Email ID:</label><br>
<input type="text" name="email" id="email"><br>
<lebel for="password">Password:</lebel><br>
<input type="password" name="enterpwd" id="enterpwd"><br>
<label for="gender">Choose Your Gender:</lebel><br>
<label for="male">Male:</lebel>
<input type="radio" name="gender" value="male" id="male">
<label for="female">Female:</lebel>
<input type="radio" name="gender" value="female" id="female">
<label for="transgender">Transgender:</label>
<input type="radio" name="gender" value="transgender" id="transgender"><br>
<label for="language">Choose Your Languages:</label><br>
<label for="English">English:</label>
<input type="checkbox" name="language" id="eng">
<label for="French">French:</label>
<input type="checkbox" name="language" id="fr">
<label for="Italian">Italian:</label>
<input type="checkbox" name="language" id="it"><br>
<label type="comment">More About You:</label>
<input type="submit" name="comment" id="comment">
</form>  
</body>
</html>