
 <?php 
session_start();


if($_SESSION['id']==1 || $_SESSION['id']==2)
			print("<script>alert('   مرحبا بعودتك ايها المشرف ".$_SESSION['name']." ')</script>");
			
			else
				print("<script>alert('   مرحبا بعودتك ايها المستخدم ".$_SESSION['name']." ')</script>");

 ?>
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
<body>
<a href="#" class="scroll top"><i class="fas fa-arrow-up"></i></a>
<a href="#finish" class="scroll bottom"><i class="fas fa-arrow-down"></i></a>
<!--<header>
<nav>
<div>
  <img src="assets/images/logo.png" alt="logo"></div>

<center>
  <div>
   <a href="contact.html"> اضف اعلان</a>
   <a href="about.html"> عن الشركة</a>
   <a href="blog.html"> أخبار العقار</a>
   <a href="register.html"> تسجيل</a>
   <a href="login.html"> تسجيل الدخول</a>
   <a href="listing.html"> تصفح العقارات</a>
   <a class="active-menu" href="index.html"> الرئيسية</a>
  </div>
</center>
</nav>
</header>-->

<nav>
  <img src="assets/images/logo.png" alt="logo">
  <ul><li style="box-shadow: 0px 0px 8px whitesmoke"><a class="active-menu" href="index.html"> الرئيسية</a></li>
   <li style="box-shadow: 0px 0px 8px whitesmoke"><a href="register.php"> تسجيل</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="loginnn.php"> تسجيل الدخول</a></li>
  <li style="box-shadow: 0px 0px 8px whitesmoke"> <a href="listing.html"> تصفح العقارات</a></li>
   
<li style="box-shadow: 0px 0px 8px whitesmoke"><a href="#">المزيد</a>
<ul>

  
   <li><a href="contact.php"> اضف اعلان</a></li>
 <li>  <a href="about.html"> عن الشركة</a></li>
  <li> <a href="blog.html"> أخبار العقار</a></li>
     <li> <a href="update.php"> الإعدادات</a></li>
  </ul></li>
   </ul>
   </nav>

      <div class="slider">

	 <!-- <div class="hh">
<h1>ابحث عن عقارات للبيع و للايجار في الأردن</h1>
</div>
	    <div class="search">

           <div class="box">

              <input type="search" class="input"
	placeholder ="ابحث عن منزلك الان">
	<div class="searchbtn"><i class="fas fa-search"></i>

	</div>
            </div>
		</div>-->
		<form method="POST" action="">
      <h1 class="text">ابحث عن عقارات للبيع و للايجار في الأردن</h1>

      <div class="form-box search-bar">

 	      <div class="sc">
          <select name="s1" class="selectpicker">

    		  <option value="1" selected="selected">للبيع</option>
    		  <option value="2">للإيجار</option>
        </select>

        </div>
        <div class="sc">
          <select name="s" class="selectpicker">
            <option value="">نوع العقار</option>
      			<option value="type1">شقق</option>
      			<option value="type2">شقق مفروشة</option>
      			<option value="type3">فلل</option>
      			<option value="type4">أراضي</option>
      			<option value="type5">تجاري</option>
      			<option value="type6">غرف مشاركة</option>
          </select>
        </div>
        <div class="sc">
          <select  name="s2" class="selectpicker">
    			<option value="">المحافظة</option>
    			<option value="city1">عمان</option>
    			<option value="city2">الزرقاء</option>
    			<option value="city3">اربد</option>
    			<option value="city4">البلقاء</option>
    			<option value="city5">جرش</option>
    			<option value="city6">عجلون</option>
    			<option value="city7">المفرق</option>
    			<option value="city8">مادبا</option>
    			<option value="city9">معان</option>
    			<option value="city10">الطفيلة</option>
    			<option value="city11">الكرك</option>
    			<option value="city12">العقبة</option>
			</select>

        </div>

        <div class="bt">
          <button class="search-btn">ابحث</button>
        </div>
      </div>
    </form>
</div>
<section class="section-featurs">
<div class="row">
<h2 > اصبح العثور على منزلك المستقبلي الآن سهلاً</h2>
<p class="txt">يمكنك الآن البحث عن العقار المناسب لك بكل سهولة والحصول على جميع المعلومات المتعلقة به </p>
</div>
<div class="row cards">
<div class="card">
<ion-icon name="megaphone"></ion-icon>
<h3> اختر منزلك المستقبلي بكبسة زر فقط</h3>
</div>
<div class="card">
<ion-icon name="alarm"></ion-icon>
<h3>وفر وقتك وجهدك </h3>
</div> <div class="card">
<ion-icon name="document-text"></ion-icon>
<h3>الحصول على جميع المعلومات المتعلقة بالمنزل </h3>
</div>
<div class="card">
<ion-icon name="pricetags"></ion-icon>
<h3>ابحث عن السعر المناسب لك</h3>
</div>


</div>
</section>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

<div class="services ">
		<!--text-->
		<h2 class="pt-5 light">
	 يمكنك الآن

			</h2>
		<div class="box-container">
		<!--1------------->
			<div class="box-1">

			<p style="font-size:35px;
font-weight:bold;
color:#b24229;
margin-top:50px;">شراء منزل</p>

			<a href="listing.html"><button>اشتري الآن</button></a>
			</div>
	   <!--2------------->
			<div class="box-2">


			<p style="font-size:35px;
font-weight:bold;
color:#b24229;
margin-top:50px;">استئجار منزل</p>

			<a href="listing.html"><button>استأجر الآن</button></a>
			</div>
		<!--3------------->
			<div class="box-3">

			<p style="font-size:35px;
font-weight:bold;
color:#b24229;
margin-top:50px;">بيع منزلك</p>

			<a href="contact.php"><button>اضف منزلك</button></a>
			</div>
		</div>
	</div>
  <section>
			<div class="items-container bg-dark">
				<div class="container text-center text-white">
					<h2 class="pt-5">احدث العقارات</h2>

				</div>
        <div class="container p-2">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/1.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/2.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/3.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/4.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
				</div>
          <div style="clear:both;margin-bottom:40px;"></div>
				<div class="container p-2">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/1.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/2.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/3.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 cd">

              <a href="property.html"><img class="card-img-top" src="assets/images/items/4.jpg" alt="Card image cap"></a>
              <div class="card-body">
                <h5 class="card-title font-weight-bold">فيلا 300م للبيع في مرج الحمام</h5>
                <hr>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">المساحة:</span> 200 م</div>
                  <div class="col"><span class=" font-weight-bold">السعر:</span>50000دينار</div>
                </div>
                <div class="row50">
                  <div class="col"><span class=" font-weight-bold">عدد غرف النوم:</span> 2</div>
                  <div class="col"><span class=" font-weight-bold">ميزات:</span> تدفئة، كاميرات مراقبة</div>
                </div>
              </div>

          </div>
				</div>

        <div style="clear:both;margin-bottom:40px;"></div>
			</div>
		</section>
	<footer>
	<div class="art">
	<div class="content">
	<section>
	<a href="#"><img src="assets/images/ook.png" alt="لوجو الموقع" height="36%" width="56%"></a>
	<p>يمكنك تصفح دليل سويت هوم الالكتروني سواء في قسم البيع او الايجار و مشاهدة عدد كبير من الإعلانات الخاصة بعقارات الأردن</p>

</section>
<section style="width:100%;position:relative; right:60px;">
<p class="ht">خدماتنا </p>

<a href="listing.html">تصفح العقارات</a>
<a href="blog.html">أخبار العقارات</a>
<a href="contact.php">اضف عقارك</a>
</section>
<section style="position:relative; right:160px;">
<p class="ht">لنبقى على تواصل</p>
<div class="footer_address">

						<h6 dir=ltr><a href="tel:0785829371"><i class="fa fa-phone"></i> 0785829371</a></h6>
						<h6 dir=ltr><a href="mailto:sweethome@gmail.com"><i class="fa fa-envelope"></i> sweethome@gmail.com</a></h6>
					</div>
<div class="wrapper">
<div class="icon facebook">
<div class="tooltip">Facebook</div>
<a href="http://www.facebook.com"><span><i class="fab fa-facebook-f"></i>	</span></a>
</div>
<div class="icon twitter">
<div class="tooltip">Twitter</div>
<a href="http://www.twitter.com"><span><i class="fab fa-twitter"></i></span></a>
</div>
<div class="icon instagram">
<div class="tooltip">Instagram</div>
<a href="http://www.instagram.com"><span><i class="fab fa-instagram"></i>	</span></a>
</div>
<div class="icon Linkedin">
<div class="tooltip">Linked-in</div>

<a href="http://www.linkedin.com"><span><i class="fab fa-linkedin-in"></i>	</span></a>
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
