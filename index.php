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
  <link rel="stylesheet" type="text/css" href="lode.css"/>
  <title>AirTicket Booking</title>
  
</head>
<body>
  
  <script type="text/javascript" src="navj.js"></script>
<div id="login">
  <div class="content">
    
    

 

    
</div>
  <div class="logo">
  
  
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
<div class="navb">
<div  class="menu">
  <ul style="list-style-type:none" align="center">

  <li>
    <a href="" class="ho">HOME</a>
    <a href="" class="sp">SPECIAL OFFERS</a>
    <a href="" class="se">SERVICES</a>
    <a href="" class="co">CONTACT</a>
    <a href="" class="ab">ABOUT US</a>
  </li>
  </ul>
</div></div>
</nav>
</div>
<div class="for">
<form action="" align="center" name="l" >
  
  <div class="radi">
  <input type="radio" name="route" value="one Way"/> One Way 
  <input type="radio" name="route" value="Round Trip"/> Round Trip 
  <input type="radio" name="route" value="multiple destination"/>Multiple Destination<br/>
</div>
<br/>

  <table align="center">
    <tr>
      <td>
  <input type="text" id="f" placeholder="From" name="from"/></td>
  <td class="ton">
  <input type="text" id="t" placeholder="To" name="to"/></td>
  <td>
  <input type="date"  name="Ddate"/></td>
  <td>
  <input type="date" name="Rdate"/></td>
  <td>
  <input type="number" name="qty" min="1" max="5"/></td>
  
  </tr>

</table>
<input type="button" name="" class="button" onclick="return tform()" value="Search"/>

</form>
</div>
<div id="spcl">
  <h2 align="center "><b>SPECIAL OFFERS</b></h2>
  <table>
    <tr>
      <td>
  <div id="PARIS" >
    <h3>PARIS</h3>
    <img src="https://athulyashyju.github.io/parrr.jpg" style="width:300px height:300px" />
     <h4>From 60000 INR</h4>
    <a class="book"  href="#">BOOK NOW</a>
  </div>
</td>
<td>
  <div id="newyork" >
    <h3>NEW YORK</h3>
    <img src="https://athulyashyju.github.io/new.png" style="width:300px height:300px" /><br/>
    <h4>From 90000 INR</h4>
    <a href="#">BOOK NOW</a>
  </div>
</td>
<td>
  <div id="dubai" >
    <h3>DUBAI</h3>
    <img src="https://athulyashyju.github.io/duba.jpg"  style="width:300px height:300px"/><br/>
    <h4>From 8000 INR</h4>
    <a href="#">BOOK NOW</a>
  </div>
</td>
<td>
  <div id="canada" >
    <h3>CANADA</h3>
    <img src="https://athulyashyju.github.io/cana.jpg"  style="width:300px height:300px"/><br/>
    <h4>From 95000 INR</h4>
    <a href="#">BOOK NOW</a>
  </div>
</td>
</tr>

<tr>

      <td>
  <div id="australia" >
    <h3>AUSTRALIA</h3>
    <img src="https://athulyashyju.github.io/aus.jpg"  style="width:300px height:300px" />
     <h4>From 78000 INR</h4>
    <a href="#">BOOK NOW</a>
  </div>
</td>
<td>
  <div id="egypt" >
    <h3>EGYPT</h3>
    <img src="https://athulyashyju.github.io/egi.jpg" style="width:300px height:300px"/>
    <br/>
    <h4>From 90000 INR</h4>
    <a href="#">BOOK NOW</a>
  </div>
</td>
<td>
  <div id="london" >
    <h3>LONDON</h3>
    <img src="https://athulyashyju.github.io/LON.jpg"  style="width:300px height:300px" /><br/>
    <h4>From 8000 INR</h4>
    <a href="#">BOOK NOW</a>
  </div>
</td>
<td>
  <div id="italy" >
    <h3>ITALY</h3>
    <img src="https://athulyashyju.github.io/ITA.jpg"  style="width:300px height:300px" /><br/>
    <h4>From 95000 INR</h4>
    <a href="#">BOOK NOW</a>
  </div>
</td>
</tr>
</table>
</div>


<footer>

  <div id="foot">
    <table>
      <tr>
        <td >
          <div class="ac">
        <h3>About</h3>
        
        <a class="abt" href="">About Us</a><br/>
        <a class="car" href="">Career</a>
      </div>
        </td>
        <td >
          <div class="pc">
        <h3>Travel News</h3>
          <a class="car" href="">Get on a Malaysian Trip!</a><br/>
          <a class="car" href="">Escape to your favorite destinations</a> 
          </div>      
        </td>
        <td >
          <div class="sit">
      <h3>Stay In Touch</h3>
      <p class="e">Mob No:9447561301</p>
        <a class="rr" href="facebook.com"><img src="https://png.icons8.com/color/50/000000/facebook.png"/></a>
        <a class="rr" href="LinkedIn.com"><img src="https://png.icons8.com/color/50/000000/LinkedIn.png"/></a>
        <a class="rr" href="gmail.com"><img src="https://png.icons8.com/color/50/000000/gmail.png"/></a>
        <a class="rr" href="twitter.com"><img src="https://png.icons8.com/color/50/000000/twitter.png"/></a>


      
    </div>
        </td>
      </tr>
    </table>
  </div> 
  
</footer>


</body>
</html>









    
