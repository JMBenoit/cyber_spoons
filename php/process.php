<?php ob_start();

  if ("null" !== ($_POST['submit'])) {
    $to = "support@cyberspoons.com";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $header = $name.'<'.$email.'>';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = "From: $header";


    mail($to, $subject, $message, $headers);

    header("location: ../submit.html");
  }

?>
