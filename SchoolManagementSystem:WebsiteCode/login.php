<!DOCTYPE html>
<html>
<head>
<title> Login </title>
<style>
body {font-family: Arial, Helevtica, sans-serif;}
form{border: 3 px solid #f1f1f1;}
input[type=text], input[type=password]{
width:100%;
padding: 12px 20px;
margin: 8px 0;
display: inline-block;
border: 1px solid #ccc;
box-sizing border-box;}
button {
background-color: #4CAF50;
color:white;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor:pointer;
width:100%;}
button:hover {
opacity: 0.8;}
.cancelbtn {
width: auto;
padding: 10px 18px;
background-color: #f44336;}
.container{
padding:16px;}
span.psw {
float:right;
padding-top:16px;}

</style>
</head>
<body> 
<h2> <center> Login Form </center></h2>

<form action="/menu.php">
<div class="container"> 
<label for="username"> <b> Username</b></label>
<input type ="text" placeholder="Enter Password" name="psw" required>

<label for="password"> <b> Password</b></label>
<input type="password" placeholder="Enter Password" name="psw" required>
<button type ="submit"> Login</button>
</div>
<div class ="container" style ="background=color:#f1f1f1"> 
<button type="button" class="cancelbtn"> Cancel </button>
</div>
</form>
</body>
</html>

















