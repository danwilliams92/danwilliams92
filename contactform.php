<?PHP
  // form handler
  if($_POST && isset($_POST['submit'], $_POST['name'], $_POST['email'], $_POST['message'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!$name) {
      $errorMsg = "Please enter your Name";
    } elseif(!$email || !preg_match("/^\S+@\S+$/", $email)) {
      $errorMsg = "Please enter a valid Email address";
    } elseif(!$message) {
      $errorMsg = "Please enter your comment in the Message box";
    } else {
      // send email and redirect
      $to = "danielwilliamsweb@gmail.com";
      $headers = "From: ".$name. " \r\n";
      mail($to, $subject, $headers, $message);
	  header("Location:portfolio_site/contact.html");
	  exit;
    }

  }
?>