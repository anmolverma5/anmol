<?php
     $username= '';
     $gender= '';
     $colour='';


    if (isset($_POST['submit'])) {
        $ok = true;
        if (!isset($_POST['username']) || $_POST['username'] === '' ) {
            $ok === false;
        } else {
        $username = $_POST['username'];
        };
        
            if (!isset($_POST['gender']) || $_POST['gender'] === '') {
                $ok === false;
            }else {
                $gender = $_POST['gender'];
                };
            if (!isset($_POST['colour']) || $_POST['colour'] === '') {
                    $ok === false;    
            }else {        
                    $colour = $_POST['colour'];
            };
    
         if ($ok){
             echo 'tatti';
                        // data code is here
                        $db = new mysqli(
                            'localhost',
                            'root',
                            '',
                            'php');
                            $sql = sprintf(
                             "INSERT INTO users (name, gender, colour)  VALUES ( 
                                '%s','%s', '%s')",
                                $db->real_escape_string($username),
                                $db->real_escape_string($gender),
                                $db->real_escape_string($colour));
                                var_dump($sql);
                    $db->query($sql);
                                    echo '<p>User Added</p>';
                             $db->close();
                         }
                        }
?>  
<form action="" method="post">                    
User name: <input type="text" name="username" value="">
<br>Gender: <input type="radio" name="gender" id="male" value="m" <?php  
    if($gender === 'm'){
    echo 'checked';
}?> > Male 
 <input type= "radio" name="gender" id="female" value="f"<?php 
if($gender === 'f'){
    echo 'checked';
}?>> Female
<input type="radio" name="gender" id="transgender" value="t"<?php 
if($gender === 't'){
    echo 'checked';
}?>>Transgender <br>
Favorite colour:
<select name="colour">
<option value="">Choose Your Favorite Colour</option>
<option value="#0000ff"<?php 
if($gender === '#0000ff'){
    echo 'selected';
}?>> Blue

</option>
<option value="#000000"<?php 
if($gender === '#000000'){
    echo 'selected';
}?>>
Black</option>
<option value="#000000"<?php 
if($gender === '#000000'){
    echo 'selected';
}?>>
red</option>
<option value="#00cc00"<?php 
if($gender === '#00cc00'){
    echo 'selected';
}?>>green</option>
</select><br>

<input type="submit" name="submit" value="register">
</form>

