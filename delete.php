<html>
<head>
<title>الغاء الحساب</title>
<meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/style/index.css">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
</head>
<body class="loginPage registerPage">


<nav>
  <img src="assets/images/logo.png" alt="logo">
  
  <ul><li style="box-shadow: 0px 0px 8px whitesmoke"> <a class="active-menu" href="delete.php">الاعدادات</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"><a  href="index.html"> الرئيسية</a></li>
   <li style="box-shadow: 0px 0px 8px whitesmoke"><a href="register.php"> تسجيل</a></li>
  
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="listing.html"> تصفح العقارات</a></li>
   <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="loginnn.php">تسجيل الدخول</a></li>
<li style="box-shadow: 0px 0px 8px whitesmoke"><a href="#">المزيد</a>
<ul>

  
   <li><a href="contact.php"> اضف اعلان</a></li>
 <li>  <a href="about.html"> عن الشركة</a></li>
  <li> <a href="blog.html"> أخبار العقار</a></li>

  </ul></li>
   </ul></nav>


<div class="loginbox" style="height:380px">
<img src="assets/images/av.jpg" class="av">
<h1>الغاء الحساب</h1>
<div  style="color:red;position:relative;top:-39px;">
<?php

session_start(); 

if(isset($_POST['submitt'])){

$database= mysqli_connect( "localhost","root", "12345678","sweethome");

	$password=$_POST['pass'];
		
	$pass=$_SESSION['pass'];
	$id =$_SESSION['id'];
if($pass==$password){
	$query="DELETE FROM signup WHERE id='$id'";
	$result=mysqli_query($database , $query);
	print("تم الغاء حسابك");
}
	
	else{
	print("كلمة المرور غير صحيحة");
		     
} 
mysqli_close($database );
}
?></div>
<form method="POST" >
<p>كلمة المرور:</p>
<input type ="password" name="pass" placeholder="ادخل كلمة المرور لإلغاء حسابك" >

<input type ="submit" name="submitt" value="حذف"><br>



</form>
</div>
</body>

</html>