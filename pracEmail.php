<html>

<head>
<title>Sending email using PHP</title>
</head>

<body>

<?php
   $to = "faithmueni6@gmail.com";
   $subject = "This is subject";
   $message = "This is simple text message. C0nfirm reception";
   $header = "From:faith.mueni@ashesi.edu.gh \r\n";
   $retval = mail ($to,$subject,$message,$header);
   if( $retval == true )  
   {
      echo "Message sent successfully...";
   }
   else
   {
      echo "Message could not be sent...";
   }
?>

</body>
</html>