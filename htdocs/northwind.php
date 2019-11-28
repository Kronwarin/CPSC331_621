<?php include("header.php"); ?>
<?php
if (!isset($_SESSION["Status"]) || ($_SESSION["Status"]) < 2 )
{
 echo  ("<a href=logout.php>ไม่สามารถเข้าสู่หน้านี้ได้กรุณาLogin</a> ");
 exit();
}
?>
<div>
<center>
<body bgcolor=>
      <br><a href="categories.php" class="w3-bar-item w3-button">categories</a></br>
      <br><a href="customers.php" class="w3-bar-item w3-button">customers</a></br>
      <br><a href="employees.php" class="w3-bar-item w3-button">employees</a></br>
      <br><a href="orderdetails.php" class="w3-bar-item w3-button">orderdetails</a></br>
      <br><a href="orders.php" class="w3-bar-item w3-button">orders</a></br>
      <br><a href="shippers.php" class="w3-bar-item w3-button">shippers</a></br>
      <br><a href="suppliers.php" class="w3-bar-item w3-button">suppliers</a></br>
      <br><a href="products.php" class="w3-bar-item w3-button">products</a></br>
      <br><a href="portfolio.php" >Back</a></br>
</body>
</center>
</div>
<?php include("footer.php"); ?>

    
            
            
            
            
            
            