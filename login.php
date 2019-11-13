<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONE</title>
<link rel="shortcut icon" href="images/eureka.ico" >
</head>
<style>
body, html {
	height: 100%;
	margin: 0;
	font-family: Arial, Helvetica, sans-serif;
}

.bg {
	background-image: url(images/Backgrounds.jpg);
	height: 100%;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button, input[class=btnLogin]{
    background-color: #4CAF50;
    color: white;
    padding: 16px 40px;
    margin: -5px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
  background-color: #f44336;
}

button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

.container {
    padding: 50px;
}

span.psw {
    float: right;
    padding-top: -1000px;
}

.modal {
    display: none; 
    position: fixed; 
    z-index: 1; 
    left: 0;
    top: 0;
    width: 100%; 
    height: 100%; 
    overflow: auto; 
    background-color: rgb(0,0,0);
    background-color: rgba(0,0,0,0.4);
    padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; 
    border: 1px solid #888;
    width: 80%; 
}

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 10%;
    }
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
	Color: black;
}

.centered1 {
    position: absolute;
    top: 60%;
    left: 50%;
    transform: translate(-50%, -50%);
	Color: black;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
.close1 {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>

<script language="JavaScript" type="text/javascript" src="view/js/registration.js"></script>
</head>

<body>
<div class="bg"></div>
<div class="centered"><button onclick="document.getElementById('id01').style.display='block'" style="width:100%;">Login</button></div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" name="loginForm" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="userName" id="userName" /required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="userPass" id="userPass" /required>
      <br><br> 
      <input type="button" class="btnLogin" name="Login" id="btnLogin" value="Login" onClick="validateUser('login');" />
	  <br><br>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
  </form>
</div>

<div class="centered1"><button onclick="document.getElementById('id02').style.display='block'" style="width:100%;">Sign Up</button></div>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close1" title="Close Modal">&times;</span>
   
  <form class="modal-content" method="post" action="signup_class.php" enctype="multipart/form-data">
  
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="fname"><b>Upload Default Picturee</b></label><br>
      <input type="file" name="image"><br><br>
      
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Your Username" name="uname" id="uname" /required>
	  
	  <label for="noic"><b>IC number</b></label>
      <input type="text" placeholder="Enter Your ic number" name="noic" id="noic" /required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Your Password" name="psw" id="psw" /required>
      
      <label for="psw2"><b>Confirm Password</b></label>
      <input type="password" placeholder="Enter Your Password" name="psw2" id="psw2" /required>
	  
	  <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Your Email" name="email" id="email" /required>
      
      <label for="phoneno"><b>Phone Number</b></label>
      <input type="text" placeholder="Enter Your Phone Number" name="phoneno" id="phoneno" /required>
     
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Your Address" name="address" id="address" /required>

      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <p>By creating an account you agree to our Terms & Privacy.</p>
	  <br>
      <div class="clearfix">
        <button type="button" onclick="window.location.href='login.php'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}




// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
