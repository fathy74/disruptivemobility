<?php
// check if user coming from a request

if($_SERVER['REQUEST_METHOD'] == 'POST') {

 $user = filter_var ($_POST['username'], FILTER_SANITIZE_STRING);
 $mail = filter_var ($_POST['email'], FILTER_SANITIZE_EMAIL);
 $cell = filter_var ($_POST['cellphone'], FILTER_SANITIZE_NUMBER_INT);
 $msg =  filter_var ($_POST['message'], FILTER_SANITIZE_STRING);


// creating Array of Errors


$formErros = array();
if (strlen($user) <= 3){

$formErrors[] = 'user name must be larger than <strong> 3 </strong> characters';

}

if(strlen($msg) < 10) {
$formErrors[] = 'message can\'t be less than <strong> 10 </strong> characters';

}

$headers = 'from: ' . $mail . '\r\n';
$myEmail = 'fathywork7472@gmail.com';
$subject = 'contact form';

if (empty($formErrors)) {

  mail($myEmail, $subject, $msg, $headers);

}


}

?>







<!DOCTYPE html>
<html lang="en">
<head>
<meta charest="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title> </title>
<link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="css/fontawesome.min.css"/>
<link rel="stylesheet" href="css/contact.css"/>
</head>

<body> 
<div class="container">
<h1 class="text-center"> contact me </h1>
<form class="contact-form" action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">


    <?php if (! empty($formErrors)) { ?>
        <div class="alert alert-danger alert-dismissible" role="start">
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true"> × </span>
    </button>
 
        <?php
foreach($formErrors as $error) {
echo $error . '<br/>';

}
?>
</div>
<?php } ?>

<div class="form-group">
<input class="username form-control" 
type="text"
 name="username"
  placeholder="type your user name"
  value="<?php if (isset($user)) {echo $user;} ?>"/>
  <span class="asterisx"> * </span>
  <div class="alert alert-danger custom-alert">
  user name must be larger than <strong> 3 </strong> characters
</div>
</div>


<div class="form-group">
<input class="email form-control" 
type="email"
name="email"
 placeholder="please type a valid Email"
 value="<?php if (isset($mail)) {echo $mail;} ?>"/>
 <span class="asterisx"> * </span>
 <div class="alert alert-danger custom-alert">
  Email can't be  <strong> Empty </strong>
</div>
 </div>



<input class="message form-control"
 type="text"
  name="cellphone" 
  placeholder="type your cell phone"
  value="<?php if (isset($cell)) {echo $cell;} ?>"/>

<textarea class="form-control"
 type="text" 
 name="message" 
 placeholder="your message!"> <?php if (isset($msg)) {echo $msg;} ?> </textarea>
 <div class="alert alert-danger custom-alert">
 message can\'t be less than <strong> 10 </strong> characters
</div>

<input class="btn btn-success" type="submit" value="send message"/>








<button class="btn btn-primary"> click </button>
<i class="fa fa-home fa-3x">
<script src="js/jquery-1.12.4.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
<script src="js/custom.js"> </script>
