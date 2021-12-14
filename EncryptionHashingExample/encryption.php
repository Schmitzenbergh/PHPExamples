<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symmetric Encryption</title>
</head>

<body>
    <?php
    function encrypt($data, $cipher, $key, $iv)
    {
        //Check if the to be used cipher exisits on the server.
        if (in_array($cipher, openssl_get_cipher_methods())) {
            //Encrypt the data based on the given params
            return openssl_encrypt($data, $cipher, $key, 0, $iv);
        } else {
            throw new ErrorException("No such cipher exists: {$cipher}.");
        }
    }

    function decrypt($data, $cipher, $key, $iv)
    {
        //Check if the to be used cipher exisits on the server.
        if (in_array($cipher, openssl_get_cipher_methods())) {
            //Encrypt the data based on the given params
            return openssl_decrypt($data, $cipher, $key, 0, $iv);
        } else {
            throw new ErrorException("No such cipher exists: {$cipher}.");
        }
    }

    //Define the data, private key and the to be used cipher
    $data = "Super secret message to be encrypted";
    $key = "nhlstenden";
    $cipher = "aes-256-ctr"; //Replaceable by another cipher

    //Get the Initalisation Vector length (this is based on the cipher)
    $ivlen = openssl_cipher_iv_length($cipher);
    //Generate a pseudo random bytes string based on the IV length
    $iv = openssl_random_pseudo_bytes($ivlen);

    echo "<h3>Currently installed cipher methods</h3>";
    foreach (openssl_get_cipher_methods() as $method) {
        echo $method . "<br>";
    }

    //Encrypt the data
    echo "<h3>Encrypted data</h3>";
    $encrypted_data = encrypt($data, $cipher, $key, $iv);
    echo $encrypted_data;

    //And decrypt the data
    echo "<h3>Decrypted data</h3>";
    echo decrypt($encrypted_data, $cipher, $key, $iv);

    //Encrypt an image (or whatever file)
    $path = "image.jpg";
    $path_enc = "encryptedImage.aes";
    $path_dec = "decryptedImage.jpg";

    //Read the file contents
    $file_to_encrypt = file_get_contents($path);
    //Encrypt the file
    $encrypted_data = encrypt($file_to_encrypt, $cipher, $key, $iv);
    //And write the file back to the disk
    $handle = fopen($path_enc, "w");
    fwrite($handle, $encrypted_data);
    fclose($handle);

    //decrypt the image
    //Open the file
    $handle = fopen($path_dec, "w");
    //Decrypt the file and write its content back to the disk
    fwrite($handle, decrypt(file_get_contents($path_enc), $cipher, $key, $iv));
    fclose($handle);

    ?>
</body>

</html>