<!--
require "db.php";
 $data = $_POST;
 if(isset($data['do_login'])){
	 $errors = array();
	 $user = R::findOne('users',"login = ?", array($data['login']));
	 if($user){
		 //login exist
		 
		 if(password_verify($data['password'], $user->password)){
			 //good, user has log in
		    $_SESSION['logged_user'] = $user;
            echo '<div style="color: green;">Login successful, you can go to <a href="https://stoicolist.com">homepage</a></div><hr>';			
		 }else{
		 $errors[] = 'Password invalid';
	     }
	 }else{
		 $errors[] = 'User with this login not found';
	 }
	 if(!empty($errors)){
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
 } 
 
?>
<form action="login.php" method="POST">
   <p>
     <p><strong>LOGIN</strong>:</p>
	 <input type="text" name="login" value="
	 <?//=@$data['login']?>">
  </p>
  <p>
     <p><strong>Password</strong>:</p>
	 <input type="password" name="password" value="<?//=@$data['password']?>">
  </p>
  <p>
    <button type="submit" name="do_login">Log in</button>
  </p>

</form  ->