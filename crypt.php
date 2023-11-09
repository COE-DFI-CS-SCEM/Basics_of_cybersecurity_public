<!DOCTYPE html>
<html>
<head>
    <title>CTF Challenge</title>
</head>
<body>
    <h1>Decrypt the Message</h1>
    <form action="decrypt.php" method="post">
        <label for="encrypted_message">Encrypted Message:</label>
        <input type="text" name="encrypted_message" id="encrypted_message" required>
        <input type="submit" value="Decrypt">
    </form>
</body>
</html>
Create a PHP script (decrypt.php) to handle the decryption and provide a secret message:
php
Copy code
<!DOCTYPE html>
<html>
<head>
    <title>CTF Challenge</title>
</head>
<body>
    <h1>Decrypted Message</h1>
    <?php
    if (isset($_POST['encrypted_message'])) {
        $encryptedMessage = $_POST['encrypted_message'];
        $decryptedMessage = decryptMessage($encryptedMessage);

        echo "<p>Decrypted Message: $decryptedMessage</p>";

        if ($decryptedMessage === 'Congratulations! You solved the CTF challenge.') {
            echo "<p>Congratulations! You solved the CTF challenge.</p>";
        } else {
            echo "<p>Sorry, that's not the correct decryption.</p>";
        }
    }

    function decryptMessage($message) {
        // Your decryption logic goes here.
        // For a simple example, let's use ROT13.
        return str_rot13($message);
    }
    ?>
</body>
</html>
