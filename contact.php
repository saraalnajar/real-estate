<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset='utf-8'>
 
  <meta name="keywords" content="home,rate,buy,residence,flat,apartment,villa,search,منزل,بحث عن منزل , سويت هوم ,سكن,sweet home,سكن في الاردن ,search for house,search for house in jordan">
  <meta name="description" content="يمكنك تصفح دليل سويت هوم الالكتروني سواء في قسم البيع او الايجار و مشاهدة عدد كبير من الإعلانات الخاصة بعقارات الأردن
فاذا كنت مواطنا او مقيما وتبحث عن شقق للايجار في الأردن او فلل للبيع وللايجار او اراضي وعمارات للبيع … او غيرها من انواع العقارات الموجودة  في كافة مناطق المملكة ستجدها هنا حيث يعرض لك اهم الخصائص والمواصفات المتعلقة بالعقار مع توفر بيانات التواصل مع صاحب الاعلان سواء المالك مباشرة او المكتب العقاري  ">
  <title> Sweet Home </title>
  <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
  <link rel="icon" href="https://www.up4.cc/2020-11/160426419900011.png" />
<link rel="stylesheet" type="text/css"  href="assets/style/index.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
 <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<body class="contactPage">
<a href="#" class="scroll top"><i class="fas fa-arrow-up"></i></a>
<a href="#finish" class="scroll bottom"><i class="fas fa-arrow-down"></i></a>

<nav>
  <img src="assets/images/logo.png" alt="logo">
  <ul><li style="box-shadow: 0px 0px 8px whitesmoke"><a class="active-menu" href="contact.php"> اضف اعلان</a></li>
   <li style="box-shadow: 0px 0px 8px whitesmoke"><a href="register.php"> تسجيل</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="loginnn.php"> تسجيل الدخول</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="listing.html"> تصفح العقارات</a></li>
   
<li style="box-shadow: 0px 0px 8px whitesmoke"><a href="#">المزيد</a>
<ul>

  
   <li><a href="index.html"> الرئيسية</a></li>
 <li>  <a href="about.html"> عن الشركة</a></li>
  <li> <a href="blog.html"> أخبار العقار</a></li>
   <li> <a href="update.php"> الإعدادات</a></li>
  </ul></li>
   </ul></nav>

  <section>
			<div class="items-container">
				<div class="container text-center text-white">
					<h2 class="pt-5 light">اضف اعلان</h2>

				</div>
				<form method="POST" class="contact">
					<div class="col50">
	<div style="color:red;position:relative;top:-30px;">
    <?php 
	 extract($_POST);
	
if(isset($_POST['ss'])){
	
	$database=mysqli_connect("localhost","root","12345678","sweethome");
	
	$n=$name;
	$ss2=$s2;
	$ss1=$s1;
	$ss3=$s3;
	$pr=$p;
	$phone=$num;
	$size=$sz;
	$ss4=$s4;
	$descrip=$des;
	$image=$im;
	
	$query="INSERT INTO contact (name,type,sale,city,price,phone,size,rooms,description,image) values('$n','$ss2','$ss1','$ss3','$pr','$phone','$size','$ss4','$descrip','$image')";

	$result=mysqli_query($database , $query);
print("سيتم عرض اعلانك قريبا ");
	       
mysqli_close($database);}
	?>
	</div>
						<label>عنوان الاعلان 
						<input type="text" name="name"></label><br>
						<label>اختر القسم 
							<select name="s1" class="selectpicker">
							   <option value="للبيع" selected="selected">للبيع</option>
							   <option value="للايجار">للإيجار</option>
							</select>
						</label>
						<label>السعر
							<input type="text" name="p"></label><br>
							<label>مساحة البناء 
								<input type="text" name="sz"></label><br>
					</div>
					<div class="col50">
						<label>نوع العقار
							<select name="s2" class="selectpicker">
								  <option value="شقة" selected>شقق</option>
								  <option value="شقة مفروشة">شقق مفروشة</option>
								  <option value="فيلة">فلل</option>
								  <option value="أرض">أراضي</option>
								  <option value="محل تجاري">تجاري</option>
								  <option value="غرفة للمشاركة">غرف مشاركة</option>
								</select></label><br>
								<label>المحافظة
									<select  name="s3" class="selectpicker">
									  <option value="عمان">عمان</option>
									  <option value="الزرقاء">الزرقاء</option>
									  <option value="اربد">اربد</option>
									  <option value="البلقاء">البلقاء</option>
									  <option value="جرش">جرش</option>
									  <option value="عجلون">عجلون</option>
									  <option value="المفرق">المفرق</option>
									  <option value="مادبا">مادبا</option>
									  <option value="معان">معان</option>
									  <option value="الطفيلة">الطفيلة</option>
									  <option value="الكرك">الكرك</option>
									  <option value="العقبة">العقبة</option>
									  </select></label><br>

									  <label> رقم الهاتف
										<input type="tel" name="num" pattern="\d{10}"></label>
									 <br>
									 <label>عدد الغرف
										<select name="s4" class="selectpicker">
											  <option value="ستوديو" selected>ستوديو</option>
											  <option value="غرفة">غرفة</option>
											  <option value="غرفتين">غرفتين</option>
											  <option value="3 غرف">3 غرف</option>
											  <option value="4 غرف أو اكثر">4 غرف فأكثر</option>
											   
											</select></label><br>
					</div>
						   <label>وصف الاعلان <br>
						   <textarea rows="3" cols="50" name="des"></textarea></label><br>
						   <br>
						   <!--image-->
						  <label for="file" id="selector" class="i"> اختر فيديو <input type="file" id="file" name="im"></label>
						   <br>
						   <input type="submit" name="ss" value="أعلن">
						   <input type="reset" value="مسح">
						   <div class="clear"></div>
							  </form>
			</div>
		</section>
	<footer>
	<div class="art">
	<div class="content">
	<section>
	<a href="#"><img src="assets/images/ook.png" alt="لوجو الموقع" height="56%" width="56%"></a>
	<p>يمكنك تصفح دليل سويت هوم الالكتروني سواء في قسم البيع او الايجار و مشاهدة عدد كبير من الإعلانات الخاصة بعقارات الأردن</p>

</section>
<section class="a1">
<p class="ht">خدماتنا </p>
<a href="index.html">الرئيسية</a>
<a href="listing.html">تصفح العقارات</a>
<a href="blog.html">أخبار العقارات</a>

</section>
<section class="a2">
<p class="ht">لنبقى على تواصل</p>
<div class="footer_address">

						<h6 dir=ltr><a href="tel:0785829371"><i class="fa fa-phone"></i> 0785829371</a></h6>
						<h6 dir=ltr><a href="mailto:sweethome@gmail.com"><i class="fa fa-envelope"></i> sweethome@gmail.com</a></h6>
					</div>
<div class="wrapper">
<div class="icon facebook">
<div class="tooltip">Facebook</div>
<span><i class="fab fa-facebook-f"></i>	</span>
</div>
<div class="icon twitter">
<div class="tooltip">Twitter</div>
<span><i class="fab fa-twitter"></i></span>
</div>
<div class="icon instagram">
<div class="tooltip">Instagram</div>
<span><i class="fab fa-instagram"></i>	</span>
</div>
<div class="icon Linkedin">
<div class="tooltip">Linked-in</div>
<span>
<i class="fab fa-linkedin-in"></i>	</span>
</div>



</div>
</section>
</div><!--
<div class="notice">
&copy; <strong>2020 Sweet Home </strong>
</div>-->
</div>

<div class="footer_bottom">
	<div class="fcontainer">
		<div class="frow">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 col-12">
				<p dir="ltr">Copyright &copy; 2020 <strong>SweetHome</strong> All Rights Reserved.</p>
			</div>

		</div>
	</div>
</div></footer>
<div id="finish"></div>
  <!--<a href="#p1"><i class="fas fa-arrow-up"></i></a></div>-->

</body>
</html>
