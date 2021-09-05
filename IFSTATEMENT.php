<html>
<body>
<form method="post" action="server.php">
enter first number:
<input type="number" name="number1"/><br>
enter second number:
<input type="number" name="number2"/><br>
<input type="submit" name="submit" value="add">
</php
if(isset($_POST['submit']))
{

    $number1= $_POST['number1'];
    $number2= $_POST['number2'];
    $sum= $number1+$number2;
    echo "the sum of $number1 and $number2 is:".$sum;
}
?>
</body>
</html>