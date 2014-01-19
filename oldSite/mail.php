<?php
if(isset($_POST['submit'])) {
$to = "amart1892@gmail.com";
$name_field = $_POST['Name'];
$email_field = $_POST['Email'];
$subject = $_POST['Subject'];
$message = $_POST['Message'];
 
$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
 
echo "Data has been submitted to $to!";
mail($to, $subject, $body);
} else {
echo "blarg!";
}
?>