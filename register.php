
<!DOCTYPE html>
<html>
<head>
<title>تسجيل</title>
<meta charset="utf-8">
  <link rel="icon" href="https://www.up4.cc/2020-11/160426419900011.png" />
  <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/style/index.css">
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
</head>
<body class="loginPage">


<nav>
  <img src="assets/images/logo.png" alt="logo">
  <ul><li style="box-shadow: 0px 0px 8px whitesmoke"><a  href="index.html"> الرئيسية</a></li>
   <li style="box-shadow: 0px 0px 8px whitesmoke"><a class="active-menu" href="register.php"> تسجيل</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="loginnn.php"> تسجيل الدخول</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="listing.html"> تصفح العقارات</a></li>
   
<li style="box-shadow: 0px 0px 8px whitesmoke"><a href="#">المزيد</a>
<ul>

  
   <li><a href="contact.php"> اضف اعلان</a></li>
 <li>  <a href="about.html"> عن الشركة</a></li>
  <li> <a href="blog.html"> أخبار العقار</a></li>
     <li> <a href="update.php"> الإعدادات</a></li>
  </ul></li>
   </ul></nav>


<div class="wrapper">
  
  <div class="social_media">
    <div class="item">
      <i class="fab fa-facebook-f"></i>
    </div>
    <div class="item">
      <i class="fab fa-twitter"></i>
    </div>

  </div>




<div class="loginbox register">
<img src="assets/images/av.jpg" class="av">
<h1>تسجيل مستخدم جديد!</h1>
<form method="POST" action="db.php">

<div style="position:relative;top:-35px;">
	<p>الاسم</p>
	<input type ="text" name="name" placeholder="ادخل الاسم الكامل" required>
<p>البريد الإلكتروني</p>
<input type ="text" name="email" placeholder="ادخل البريد الالكتروني" required>
<p>كلمة السر</p>
<input type ="password" name="pass" placeholder="ادخل كلمة السر" required>
<input type ="submit" name="sub" value="تسجيل"><br>
</div>


</form>

</div>
</body>

</html>
