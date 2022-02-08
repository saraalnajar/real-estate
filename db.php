<?php
session_start(); 

extract($_POST);
	
	$database=mysqli_connect("localhost","root","12345678","sweethome");
	if(isset($_POST['sub'])){
	$n=$name;
	$em=$email;
	$p=$pass;
	$sql = "SELECT * FROM signup WHERE email='$em' ";
		$result = mysqli_query($database, $sql);
	if (mysqli_num_rows($result) > 0) {
			header("Location: register.php");
	        exit();
		}else {
	$query="INSERT INTO signup (name,email,pass) values('$n','$em','$p')";

	$result2=mysqli_query($database , $query); 
		       
	}}
		
	 ?>
<!DOCTYPE html>

 <html>
  <head>
   <meta charset="utf-8">
   <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/style/index.css">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
   <title> شكرا لك</title>
  </head>
  
  <body>

    

    <?php 
	 
print("<body class='loginPage' >


<nav>
  <img src='assets/images/logo.png'  alt='logo'>
  <ul><li style='box-shadow: 0px 0px 8px whitesmoke'><a  href='index.html'> الرئيسية</a></li>
   <li style='box-shadow: 0px 0px 8px whitesmoke'><a class='active-menu' href='register.php'> تسجيل</a></li>
  <li style='box-shadow: 0px 0px 8px whitesmoke'> <a href='loginnn.php'> تسجيل الدخول</a></li>
  <li style='box-shadow: 0px 0px 8px whitesmoke'> <a href='listing.html'> تصفح العقارات</a></li>
   
<li style='box-shadow: 0px 0px 8px whitesmoke'><a href='#'>المزيد</a>
<ul>

  
   <li><a href='contact.html'> اضف اعلان</a></li>
 <li>  <a href='about.html'> عن الشركة</a></li>
  <li> <a href='blog.html'> أخبار العقار</a></li>
  </ul></li>
   </ul></nav>


<div class='wrapper'>
  
  <div class='social_media'>
    <div class='item'>
      <i class='fab fa-facebook-f'></i>
    </div>
    <div class='item'>
      <i class='fab fa-twitter'></i>
    </div>

  </div>




<div class='loginbox register' style='color:black;text-align:center;height:450px''>
<div style='position: relative;bottom:30px'>
<h2 >شكراً لك </h2>
 مرحباً<span style='color: #b24229'><strong> $name </strong></span><br>أنت الآن فرد من عائلتنا<br>
<strong >تمت اضافة معلوماتك المعروضة ادناه الى قاعدة البيانات الخاصة بنا :</strong><br>
 اسمك: <span style='color: #b24229'><strong> $name </strong></span><br>
بريدك الالكتروني:<span style='color: #b24229'><strong> $email </strong></span><br>
كلمة مرورك: <span style='color: #b24229'><strong> $pass </strong></span> <br>
 <strong>تصفح موقعنا واحظى بوقتٍ سعيد  </strong>
</div>
</div>");
 
	
	?>
<div style="
	position: absolute;">
<a href="loginnn.php"><button style="font-size:15px;
	font-family: 'Almarai', sans-serif;
	width:120px;
	height:50px;
	background-color:#b24229;
	color:white;
	border:none;
	outline: none;
	margin-right:500px;
	margin-top:460px;
	
border-radius:5px">تسجيل الدخول</button></a>
</div>
  </body>

 </html>
	
	