<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="main.css"/>
<title>TOURISM</title>
</head>

<body>
	<h1><center>TOURISM</center></h1><div class="logo">
  
  
  <ul style="list-style-type:none" align="right">
    <li>
    
     <?php  if (isset($_SESSION['username'])) : ?>
       
      <p> <a href="index.php?logout='1'" >LOGOUT</a> </p>
    <?php endif ?>
    </li>
  </ul>

  </div>
<?php  if (isset($_SESSION['username'])) : ?>
      <p id="papi">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    <?php endif ?>
	<nav>
<div class="b">
	<ul style="list-style-type:none" align="center">

	<li>
		<a href="" class="q">HOME</a>
		<a href="" class="q">ABOUT</a>
		<a href="" class="q">CONTACT</a>
		<a href="" class="q">LOCATION</a>
		<a href="login.php" class="q">LOGIN</a>
		<a href="register.php" class="q">LOGOUT</a>
		
		
                
	</li>
	</ul>


</div></nav>
<br/>
<br/>
<table>
	<tr>
		<td>
	<img src="https://athulyashyju.github.io/1213.jpeg" alt="Travelling scenary" width="600" height="300"/>
       </td>
<td>
	<img src="https://superstarblogging.nomadicmatt.com/wp-content/themes/superstarblogging/img/photo/photo-3-large-images.jpg" alt="Travel experience" width="600" height="300"/>
</td>
</tr>
</table>
<center>
<table>
	<tr><td></td>
		<td>
			<ul style="list-style-type:none" align="center"><center>

	<li>
		<a href="" class="ww">TAMILNADU</a><br/>
		<a href="" class="ww">ANDRAPREDESH</a><br/>
		<a href="" class="ww">MUMBAI</a><br/>
		<a href="" class="ww">ASSAM</a><br/>
		<a href="" class="ww">JAMMUKASHMIR</a><br/>
		<a href="" class="ww">OTHERS</a>
		
		
		
                
    </li></center>     </ul>         </td>         <td><p>     <center>
<em><strong><pre>"See the world.<br/> It's more fantastic than any dream made or
paid for in factories.<br/> Ask for no guarantees, ask for no
security."</pre></strong></em> </center> </p></td>     </tr> </table></center>


</body>
</html>



