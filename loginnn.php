
<!DOCTYPE html>
<html>
<head>
<title>تسجيل الدخول</title>
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
  <ul><li style="box-shadow: 0px 0px 8px whitesmoke"><a  href="index.html"> الرئيسية</a></li>
   <li style="box-shadow: 0px 0px 8px whitesmoke"><a href="register.php"> تسجيل</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a class="active-menu" href="loginnn.php"> تسجيل الدخول</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="listing.html"> تصفح العقارات</a></li>
   
<li style="box-shadow: 0px 0px 8px whitesmoke"><a href="#">المزيد</a>
<ul>

  
   <li><a href="contact.php"> اضف اعلان</a></li>
 <li>  <a href="about.html"> عن الشركة</a></li>
  <li> <a href="blog.html"> أخبار العقار</a></li>
     <li> <a href="update.php"> الإعدادات</a></li>
  </ul></li>
   </ul></nav>


<div class="loginbox" style="height:460px;">
<img src="assets/images/av.jpg" class="av">
<div style="position:relative;top:-15px;">
<h1>تسجيل الدخول</h1>
<form method="POST" >
<div  style="color:red;position:relative;top:-39px;">
<?php 
session_start(); 
$con = mysqli_connect( "localhost","root", "12345678","sweethome");

if(isset($_POST['submit'])){
	
	$uname=$_POST['email'];
	$password=$_POST['pass'];
	$query="SELECT * FROM signup where email='$uname' AND pass='$password'";
	$result=mysqli_query($con , $query);
	
	$b=mysqli_fetch_row($result);
		if (mysqli_num_rows($result)> 0) {
            	$_SESSION['email'] = $_POST['email'];
            	$_SESSION['name'] = $b[1];
            	$_SESSION['id'] = $b[0];
            	$_SESSION['pass'] = $_POST['pass'];
            	
	header("Location: indexphp.php");
		        
		        exit();
            }else{
				print("البريد الالكتروني أو كلمة المرور خاطئة");
		       
			}
		}
		mysqli_close($con);

	
?>
<p>البريد الإلكتروني</p>
<input type ="text" name="email" placeholder="Enter your Email" required>
<p>كلمة السر</p>            
<input type ="password" name="pass" placeholder="Enter Password" required>
<a href="register.php" style="position:relative;top:-12px;" >مستخدم جديد?</a>
<input type ="submit" name="submit" value="دخول" style="position:relative;top:-6px;"><br>
</div>
</div>
</div>
</form>
</div>

</body>

</html>
