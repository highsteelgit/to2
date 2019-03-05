<?php
//require "db.php";
//if(isset($_SESSION['logged_user'])){
//	 echo '<a style="color:black" href="#">'.$_SESSION['logged_user']->login.' is authorized</a>
//				&nbsp;|&nbsp;
//                <a style="color:black" href="https://stoicolist.com/logout.php">Log out</a>';
// }else{
//	 echo '<a style="color:black" href="https://stoicolist.com/login.php">Login</a>
//                &nbsp;|&nbsp;
//                <a style="color:black" href="https://stoicolist.com/signup.php">Register</a>';
//       }
		

$uri = explode("/", $_GET['a']);



$path = $uri[0]; 
$broad = $path;
switch ($path) {
      case 'experts':
	  $title = 'Experts of blockchain and cryptosphere';
	  require 'header.php'; 
      require $path.'.php';
	  
    break;
	case 'js':
	  $title = 'peoples c';
	  require 'header.php'; 
      require $path.'.php';
	  
    break;
	  case 'people':
	  $title = 'People of blockchain';
	  require 'header.php'; 
      require $path.'.php';
	  
    break;
	
	case 'publish':
	  $title = 'Publish your project';
	  require 'header.php'; 
      require $path.'.php';
	  
    break;
	case 'author':
	  $title = 'All articles by author';
	  require 'header.php';
	  require $path.'.php';
	  
    break;
	case 'news':
	  $title = 'Latest News on ICO STO and blockchain crypto sphere';
	  require 'header.php'; 
      require $path.'.php';
    break;
	case 'post':
	  $title = 'Latest new of crypto and blockchain';
	  require 'header.php'; 
      require $path.'.php';
    break;
	case 'ico':
	  $title = 'ICO ratings list';
	  require 'header.php'; 
      require $path.'.php';
    break;
	case 'contact_us':
	  $title = 'Contact with us';
	  require 'header.php'; 
      require $path.'.php';
    break;
	  default:
	  $title = 'Security Token Offerings STO ratings and ICO ratings list | stoicolist.com';
	  require 'header.php'; 
	  require 'main.php';
	  
   }
  require 'footer.php'; 
    
?>                          