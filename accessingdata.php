<?php
     $username= '';
     $password= '';
     $gender= '';
     $colour='';
     $languages='[]';
     $comments='';
     $tc='';
     


    if (isset($_POST['submit']))  {
        if (isset($_POST['username'])) {
        $username = $_POST['username'];
        };
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
            };
            if (isset($_POST['gender'])) {
                $gender = $_POST['gender'];
                };
                if (isset($_POST['colour'])) {
                    $colour = $_POST['colour'];
                    };
                    if (isset($_POST['languages'])) {
                        $languages = $_POST['languages'];
                        };
                        if (isset($_POST['comments'])) {
                            $comments = $_POST['comments'];
                            };
                            if (isset($_POST['tc'])) {
                                $tc = $_POST['tc'];
                                };
        
        
        printf('User name: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Favorite colour: %s
        <br>Choose Your Multiple Languages(s): %s
        <br>Comments: %s
        <br>T&amp;C: %s',
        htmlspecialchars($username, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($colour, ENT_QUOTES),
        htmlspecialchars(implode('',$languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES));
    }
?>
<form
action="sever"
method="post">

User name: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
Gender: 
Male: <input type="radio" name="gender" id="male" value="male">
Female: <input type="radio" name="gender" id="female" value="female">
Transgender:<input type="radio" name="gender" id="transgender" value="transgender"><br>
Favorite colour:
<select name="colour">
<option value="">Choose Your Favorite Colour</option>
<option value="#0000ff">Blue</option>
<option value="#000000">Black</option>
<option value="#ff0000">red</option>
<option value="#00cc00">green</option>
</select><br>
Choose Your Multiple Languages:
<select name="languages[]" multiple size="4">   
<option value="en">English</option>
<option value="fr">French</option>
<option value="it">Italian</option>
<option value="Hn">Hindi</option>
</select><br>
Comments:
<textarea name="comments"></textarea><br>

<input type="checkbox" name="tc" value="ok">i accept T&amp;C

<input type="submit" name="submit" value="register" >


</form>