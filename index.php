<?php
include('conn.php');
?>
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Form</title>
        
    </head>
    <body>
       <form action="" method="post">
           First Name:<input type="text" name="name"></br>
           Last Name:<input type="text" name="lname"></br>
           Email:<input type="text" name="mail"></br>
           Message:<input type="text" name="note"></br>
           Click to submit <input type="submit" name="submit">
       </form>
    </body>
</html>