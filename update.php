<html>
<head>
<title>الاعدادات</title>
<meta charset="utf-8">
  <link rel="icon" href="https://www.up4.cc/2020-11/160426419900011.png" />

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


<div class="loginbox register">

<img src="assets/images/av.jpg" class="av">
<h1>تعديل معلومات المستخدم</h1>
<form method="POST" >
<div  style="color:red;position:relative;top:-39px;">
<?php

session_start();

if(isset($_POST['update'])){
$database = mysqli_connect( "localhost","root", "12345678","sweethome");

    $username=$_POST['email2'];
	$password=$_POST['pass2'];
	$id=$_SESSION['id'];
	
if(!empty($username)){
$query = "UPDATE signup SET email='$username' WHERE id='$id'";
$result = mysqli_query( $database,$query );
$_SESSION['email']=$_POST['email2'];

}
 if(!empty($password)){
$q = "UPDATE signup SET pass='$password' WHERE id='$id'";
$r = mysqli_query( $database,$q );
$_SESSION['pass']=$_POST['pass2'];

}
print("تم تعديل معلومات حسابك");
mysqli_close( $database );
}
?></div>
<p>تعديل البريد الإلكتروني </p>
<input type ="text" name="email2" placeholder="ادخل البريد الالكتروني الجديد" autocomplete="on" >
<p>  تعديل كلمة المرور</p>
<input type ="password" name="pass2" placeholder="ادخل كلمة المرور الجديدة">
<a href="delete.php" style="position:relative;top:-8;">إلغاء الحساب</a>
<input type ="submit" name="update" value="حفظ"><br>



</form>
</div>
</body>

</html>