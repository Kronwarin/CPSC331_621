<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<title>ยินดีต้อนรับ กรวรินทร์ มาแล้ว</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>

<script>
 function num_key(evt){
  var iKeyCode;
  if(window.event){ // IE
    iKeyCode = evt.keyCode  
  }
  else if(evt.which){ // Netscape/Firefox/Opera
    iKeyCode = evt.which
  }

  if ((iKeyCode >= 48 && iKeyCode <= 57) || iKeyCode == 8 || iKeyCode == 46){  // 8 Backapace , 46 Delete
  return true;
  }
  else{
  return false;
  }
}

function checkID(id) { 
    if (id.length == 13){
      for(i=0, sum=0; i < 12; i++){
      sum += parseFloat(id.charAt(i))*(13-i); 
      }
      if ((11-sum%11)%10!=parseFloat(id.charAt(12))){
      alert('รหัสบัตรประชาชนไม่ถูกต้อง');
      document.getElementById("sp_result");
      }
      else {
      document.getElementById("sp_result");
      }
    }
}

</script>

<body>

<!-- Navbar 
<div class="w3-top">
  <div class="w3-bar w3-brown w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>

    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
    <a href="https://kronwarin.github.io/my-work-program/">Project</a>
    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">เมนู</font></button>

          <div class="w3-dropdown-content w3-bar-block w3-card-4">
	    <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div>
    <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ลงทะเบียน</a></font>
    <a href="select.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ข้อมูล</a></font>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อกอิน</a></font>
  </div>-->


  <!-- Navbar on small screens -->
 
<?php  if (@$_SESSION["Status"] =="2") {?>
  <div class="w3-top">
  <div class="w3-bar w3-light-grey  w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ข้อมูลส่วนตัว</a></font>
    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">คอมพิวเตอร์เบื้องต้น</font></button>
       <div class="w3-dropdown-content w3-bar-block w3-card-4">
	          <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div>
    <!--<div class="w3-dropdown-hover " >
       <button  href="pyramid.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">36 พีระมิด</font></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="pyramid1.10.php" class="w3-bar-item w3-button">pyramid1-10</a>
            <a href="pyramid11.20.php" class="w3-bar-item w3-button">pyramid11-20</a>
            <a href="pyramid21.30.php" class="w3-bar-item w3-button">pyramid21-30</a>
            <a href="pyramid31.36.php.php" class="w3-bar-item w3-button">pyramid31-36</a>
          </div></div>-->
   <div class="w3-dropdown-hover " >
    <button  href="portfolio.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ผลงาน</font></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
	          <a href="pyramid.php" class="w3-bar-item w3-button">พีระมิด 36</a>
            <a href="java.php" class="w3-bar-item w3-button">JAVA</a>
            <a href="logo.php" class="w3-bar-item w3-button">ภาษาโลโก้</a>
            <a href="jslibrary.php" class="w3-bar-item w3-button">library</a>
          </div></div> 
              <div class="w3-dropdown-hover " >
    <button  href="northwind.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">northwind</font></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
	          <a href="categories.php" class="w3-bar-item w3-button">categories</a>
            <a href="customers.php" class="w3-bar-item w3-button">customers</a>
            <a href="employees.php" class="w3-bar-item w3-button">employees</a>
            <a href="orderdetails.php" class="w3-bar-item w3-button">orderdetails</a>
            <a href="orders.php" class="w3-bar-item w3-button">orders</a>
             <a href="shippers.php" class="w3-bar-item w3-button">shippers</a>
            <a href="suppliers.php" class="w3-bar-item w3-button">suppliers</a>
            <a href="products.php" class="w3-bar-item w3-button">products</a>
            <a href="myorderform.php" class="w3-bar-item w3-button">sales</a>
          </div></div> 
    <a href="select.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ข้อมูลผู้ใช้</a></font>
    <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อคเอาท์</a></font>
</div>


      
  <?php } else if (@$_SESSION["Status"] =="1") { ?>
  <div class="w3-top">
  <div class="w3-bar w3-light-grey  w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
   <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
   <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ข้อมูลส่วนตัว</a></font>
    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">คอมพิวเตอร์เบื้องต้น</font></button>
         <div class="w3-dropdown-content w3-bar-block w3-card-4">
	          <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div>
      <!--<div class="w3-dropdown-hover " >
       <button  href="pyramid.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">36 พีระมิด</font></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
            <a href="pyramid1.10.php" class="w3-bar-item w3-button">pyramid1-10</a>
            <a href="pyramid11.20.php" class="w3-bar-item w3-button">pyramid11-20</a>
            <a href="pyramid21.30.php" class="w3-bar-item w3-button">pyramid21-30</a>
            <a href="pyramid31.36.php.php" class="w3-bar-item w3-button">pyramid31-36</a>
          </div></div>-->

         <div class="w3-dropdown-hover " >
    <button  href="portfolio.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ผลงาน</font></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
	          <a href="pyramid.php" class="w3-bar-item w3-button">พีระมิด 36</a>
            <a href="java.php" class="w3-bar-item w3-button">JAVA</a>
            <a href="logo.php" class="w3-bar-item w3-button">ภาษาโลโก้</a>
            <a href="jslibrary.php" class="w3-bar-item w3-button">library</a>
          </div></div> 
              <div class="w3-dropdown-hover " >
    <button  href="northwind.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">northwind</font></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
	          <a href="categories.php" class="w3-bar-item w3-button">categories</a>
            <a href="customers.php" class="w3-bar-item w3-button">customers</a>
            <a href="employees.php" class="w3-bar-item w3-button">employees</a>
            <a href="orderdetails.php" class="w3-bar-item w3-button">orderdetails</a>
            <a href="orders.php" class="w3-bar-item w3-button">orders</a>
             <a href="shippers.php" class="w3-bar-item w3-button">shippers</a>
            <a href="suppliers.php" class="w3-bar-item w3-button">suppliers</a>
            <a href="products.php" class="w3-bar-item w3-button">products</a>
            <a href="myorderform.php" class="w3-bar-item w3-button">sales</a>
          </div></div> 
         <a href="user.php" class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ประวัติผู้ใช้</a></font>
      <a href="logout.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อคเอาท์</a></font>
  </div>

  <?php } else  if(@$_SESSION["Status"] =="") { ?>
  <div class="w3-top">
  <div class="w3-bar w3-light-grey  w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">หน้าแรก</a></font>
    <a href="profile.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">ข้อมูลส่วนตัว</a></font>

    <div class="w3-dropdown-hover " >
    <button  href="menu.php"  class="w3-button w3-hide-small w3-padding-large w3-hover-white"><font size="5">คอมพิวเตอร์เบื้องต้น</font></button>
        <div class="w3-dropdown-content w3-bar-block w3-card-4">
	          <a href="computer.php" class="w3-bar-item w3-button">ความหมายของคอมพิวเตอร์</a>
            <a href="ethics.php" class="w3-bar-item w3-button">จริยธรรมเกี่ยวกับการใช้เทคโนโลยีสารสนเทศ</a>
            <a href="network.php" class="w3-bar-item w3-button">ระบบเครือข่ายคอมพิวเตอร์</a>
            <a href="crime_act.php" class="w3-bar-item w3-button">พ.ร.บ.คอมพิวเตอร์ฯ 2560</a>
            <a href="social_media.php" class="w3-bar-item w3-button">SOCIAL MEDIA</a>
          </div></div> 
      <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ล็อคอิน</a></font>
      <a href="register.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white w3-right"><font size="5">ลงทะเบียน</a></font>
  </div>
<?php }?>
</div>
<!-- Header -->
<header class="w3-display-container w3-content w3-center" style="max-width:1500px">
  <img class="w3-image" src="image/W1.png" alt="Me" width="1500" height="600">
  <div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-grey w3-center">
    <h1 class="w3-hide-medium w3-hide-small w3-xxxlarge">NAMWARN</h1>
    <h3 class="w3-hide-medium w3-hide-small">KRONWARIN PUTTHAWONG</h3>
  </div>
</header>




