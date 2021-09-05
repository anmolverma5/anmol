<html>
<head>
</head>
<body>  

<?php
    echo 'hello this is my website';
    if (isset($_POST['searchterm'])) {
        /// insecure !!!!!!!
        echo ['searchterm'];
    }
?><br>
<input type="text" name="type password" ><br>
<input type="password" name="type password"><br>
<textarea name="area"></textarea><br>
<input type="checkbox" value="on"><br>
<input type="radio" name="group" value="option"><br>
<input type="radio" name="group" value="option"><br>
<SELECT name="dd1"><br>
     <option value="item1">one</option>
     <option value="item2">two</option>
     <option value="item3">three</option>
     <form
     action=""
     method="post">
     <input type="text" name="searchterm">
     <input type="submit" value="search">
     </form>
      
</body>
</html>