<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
</head>
<body>
    <?php
        $pass = "qwerty";
        
        echo "<h2>MD5 &amp; SHA1 hashes</h2>";
        //To reverse lookup the generated md5 hash: https://md5.gromweb.com/
        echo md5($pass) . "<br>";
        //To reverse lookup the generated sha1 hash: https://sha1.gromweb.com/
        echo sha1($pass) . "<br>";

        echo "<h2>Single hash with BCRYPT</h2>";
        echo password_hash($pass, PASSWORD_BCRYPT) . "<br>";
        
        echo "<h2>Multiple hashes with BCRYPT</h2>";
        //Generate multiple instances of the hashed password to indicate differences
        for($x = 0; $x < 10; $x++){
            echo password_hash($pass, PASSWORD_BCRYPT) . "<br>";
        }

        echo "<h2>Checking password with password verify</h2>";
        $hashed = password_hash($pass, PASSWORD_ARGON2I); //Note that we use a different hashing algorithm here

        if(password_verify($pass, $hashed)){
            echo "Pass is the same <br>";
        }else{
            echo "Pass is NOT the same <br>";
        }
    ?>
</body>
</html>