<?php
// the message

ini_set("sendmail_from", "goelheight1@gmail.com");

$name = $_POST['name'];
$contact = $_POST['mobile_no'];
$message = $_POST['message'];




$msg = "Hello Admin\n $name has shown interest in Goel Hieghts.\n The Contact No. is $contact \n Message: $message";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
$result = mail("goelheight1@gmail.com", "Enquiry From goelheight.com", $msg);
if ($result) {
  
        header("Location: http://goelheights.com/?sent=true");

    
} else {
    header("Location: http://goelheights.com/?sent=false");
}


?>