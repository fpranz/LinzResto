<?php
/*For the CONTACT US*/
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "20-60918@g.batstate-u.edu.ph";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'
<!DOCTYPE html>
<html lang="en">
<head>
<title>LinzResto</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins&display=swap" rel="stylesheet">
</head>
<body>

        <div class="container9">
          <h1>Thank you for sharing your opinion.<br>
            We will respond to you as soon as we can.</h1>
          <p class="back">Go back the <a href="index.html">Homepage</a></p>

        </div>
      </div>

</body>
</html>
';

?>