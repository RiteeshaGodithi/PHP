<?php
require_once('functions.php');

//create short variable names
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $mname=$_POST['m'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $passwd=$_POST['passwd'];
  $passwd2=$_POST['passwd2'];
  // start session which may be needed later
  // start it now because it must go before headers
  session_start();
  try{
    // check forms filled in
    if (!filled_out($_POST)) 
      new Exception('You have not filled the form out correctly - please go back and try again.');
    // email address not valid
    if (!valid_email($email)) 
      new Exception('That is not a valid email address.  Please go back and try again.');
   

    // passwords not the same
    if ($passwd != $passwd2) 
      new Exception('The passwords you entered do not match - please go back and try again.');

    // check password length is ok
    // ok if username truncates, but passwords will get
    // munged if they are too long.
    if ((strlen($passwd) < 6) || (strlen($passwd) > 16))
        new Exception('Your password must be between 6 and 16 characters Please go back and try again.');
    

    // attempt to register
    // this function can also throw an exception
     $db=connect();
	 $q="select fname from customers where username like '%".$username."%'";
	 $result=@mysqli_query($db,$q);
	   $num_rows=mysqli_num_rows($result);
	 if($num_rows>0)
		new Exception('username is already there, try some other username');
    $passwd=sha1($passwd);
	$q1="insert into customers  values('$email','$passwd','$username', '$fname','$mname',
	'$lname','$phone','$address')";
	
	 mysqli_query($db,$q1)or die("unable to register");
	 		 
    // register session variable
    $_SESSION['valid_user'] = $username;
	echo 'vvvvv '.$_SESSION['valid_user'];
     header('Location: welcome.php');
    // provide link to members page
  }catch (Exception $e){
	  echo $e;	
	}

?>
