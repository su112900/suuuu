<?php   
session_start();  // 啟用交談期
//這是一個存儲在服務器上的資料庫，它可以用來存儲用戶的數據
if ( isset($_SESSION["Name"]))
{
   $_SESSION["Test1"] += 1;
   $id = $_SESSION["Test1"];
   //$id = $id."[Test]";
   //主餐 
   $name = $_SESSION["Name"];
   $price = $_SESSION["Price"];
   //加值套餐
   $setname = $_SESSION["setName"];
   $setprice = $_SESSION["setPrice"];
   //飲品
   $drinkname = $_SESSION["drinkName"];

   $quantity = $_SESSION["Quantity"]; 
   $allprice = ($price + $setprice);
   // 儲存選購在時間加上 3600 秒 (即一小時後過期)
   //setcookie($id."[ID]", $id, time()+3600);
   setcookie($id."[Name]", $name, time()+3600);
   setcookie($id."[setName]", $setname, time()+3600);
   setcookie($id."[drinkName]", $drinkname, time()+3600);
   setcookie($id."[Price]", $allprice, time()+3600);
   setcookie($id."[Quantity]", $quantity, time()+3600);
   
}
   //過期時間為現商品的陣列Cookie

header("Location: 2.php");  // 轉址
?>