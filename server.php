<?php
    header('Content-Type: application/json');

// $data=extract($_post);
echo json_encode($_GET,JSON_PRETTY_PRINT);
if(isset($_POST['submit']))
{

    $number1= $_POST['number1'];
    $number2= $_POST['number2'];
    $sum= $number1+$number2;
    echo "the sum of $number1 and $number2 is:".$sum;
}
?>