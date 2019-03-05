<!--
require "db.php";
$data = $_POST;
if(isset($data['do_signup'])){
	$errors = array();
	if(trim($data['login']) == ''){
	   $errors[] = 'Enter login';	
	}
	if(trim($data['email']) == ''){
	   $errors[] = 'Enter your e-mail';	
	}
	if($data['password'] == ''){
	   $errors[] = 'Enter your password';	
	}
	if($data['password_2'] != $data['password']){
	   $errors[] = 'Dublicate your password ';	
	}
	if(R::count('users', "login = ?", array($data['login'])) > 0){
	   $errors[] = 'User with this login already exists';	
	}
	if(R::count('users', "email = ?", array($data['email'])) > 0){
	   $errors[] = 'User with this email already exists';	
	}
	if(empty($errors)){
		//if register sign up good, script out this code
		$user = R::dispense('users');
		$user->login = $data['login'];
		$user->email = $data['email'];
		$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		R::store($user);
		echo '<div style="color: green;">Register successful</div><hr>';
	}else{
		echo '<div style="color: red;">'.array_shift($errors).'</div><hr>';
	}
}

?>
<form action="/signup.php" method="POST">
  <p>
     <p><strong>YOUR LOGIN</strong>:</p>
	 <input type="text" name="login" value="<//?=@$data['login']?>">
  </p>
  <p>
     <p><strong>YOUR EMAIL</strong>:</p>
	 <input type="email" name="email" value="<//?=@$data['email']?>">>
  </p>
  <p>
     <p><strong>YOUR PASS</strong>:</p>
	 <input type="password" name="password" value="<//?=@$data['password']?>">>
  </p>
  <p>
     <p><strong>CONFIRM PASS</strong>:</p>
	 <input type="password" name="password_2" value="<//?=@$data['password_2']?>">>
  </p>
  <p>
    <button type="submit" name="do_signup">REGISTER</button>
  </p>

</form-->
