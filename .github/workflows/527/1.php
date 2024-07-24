<!DOCTYPE html>
<html>    
<head>
<meta charset="utf-8" />
<title>麥當當</title>
<style>

.wo{
   display :inline;
}
.size{
   font-size: 14px;
}

</style>
</head>
<?php
   session_start();  // 啟用交談期
   //這是一個存儲在服務器上的資料庫，它可以用來存儲用戶的數據
   // 用來檢查是否存在一個名為 "Item" 的表單輸入欄位，是否已經被提交
   //主餐
   if ( isset($_POST["meat"]) ) 
   {
      $meat = $_POST["meat"];
      $_SESSION["Quantity"] = $_POST["Quantity"];
      $id = $_POST["meat"];
      $_SESSION["ID"] = $id;
      
      if($meat =="bigmac"){
         $_SESSION["Name"] = "大麥克";
         $_SESSION["Price"] = 75;
      }
      elseif($meat =="doublecheese"){
         $_SESSION["Name"] = "雙層牛肉吉事堡";
         $_SESSION["Price"] = 65;
      }
      elseif($meat =="chicken"){
         $_SESSION["Name"] = "6塊麥克雞塊";
         $_SESSION["Price"] = 64;
      }
      elseif($meat =="fish"){
         $_SESSION["Name"] = "麥香魚";
         $_SESSION["Price"] = 49;
      }
      elseif($meat =="spicychicken"){
         $_SESSION["Name"] = "勁辣雞腿堡";
         $_SESSION["Price"] = 75;
      }
      elseif($meat =="bltt"){
         $_SESSION["Name"] = "BLT安格斯牛肉堡";
         $_SESSION["Price"] = 114;
      }
      elseif($meat =="ejej"){
         $_SESSION["Name"] = "蕈菇安格斯牛肉堡";
         $_SESSION["Price"] = 124;
      }
      elseif($meat =="bltc"){
         $_SESSION["Name"] = "BLT 嫩煎鷄腿堡";
         $_SESSION["Price"] = 114;
      }
   }

   //加值套餐
   if ( isset($_POST["woman"]) ) 
   {
      $set = $_POST["woman"];

      if($set =="classic"){
         $_SESSION["setName"] = "中薯+冷飲";
         $_SESSION["setPrice"] = 65;
      }
      elseif($set =="salad"){
         $_SESSION["setName"] = "四季沙拉+冷飲";
         $_SESSION["setPrice"] = 65;
      }
      elseif($set =="oreo"){
         $_SESSION["setName"] = "OREO冰炫風+小薯+冷飲";
         $_SESSION["setPrice"] = 95;
      }
      elseif($set =="small"){
         $_SESSION["setName"] = "六塊麥克雞塊+小薯+冷飲";
         $_SESSION["setPrice"] = 95;
      }
      elseif($set =="bad"){
         $_SESSION["setName"] = "不加購超超超超爆值套餐";
         $_SESSION["setPrice"] = 0;
         $_SESSION["drinkName"] = "無";
         header("Location: 3.php");  // 轉址，將用戶導到另一個網頁
      }
   }

   //飲品
   if ( isset($_POST["drink"])  &&  $_SESSION["setName"] != "不加購超超超超爆值套餐" ) 
   {
      $drink = $_POST["drink"];

      if($drink =="S001"){
         $_SESSION["drinkName"] = "可樂";
         //$_SESSION["drinkPrice"] = 0;
      }
      elseif($drink =="S002"){
         $_SESSION["drinkName"] = "檸檬紅茶";
         //$_SESSION["drinkPrice"] = 0;
      }
      elseif($drink =="S003"){
         $_SESSION["drinkName"] = "雪碧";
         //$_SESSION["drinkPrice"] = 0;
      }
      elseif($drink =="S004"){
         $_SESSION["drinkName"] = "綠茶";
         //$_SESSION["drinkPrice"] = 0;
      }
      header("Location: 3.php");  // 轉址，將用戶導到另一個網頁
   }
?>
</head>

<body  >
<form action="1.php" method="post">

<img src="image\MClogo.png" width="10%"><br>
   <img src="image\advertise.jpg" width="100%"  style="display:block; margin:auto;">
    <h1 align="center" >歡迎光臨麥當勞！</h1>
    
    <form action="order.php" method="post">
        <h2>請選擇您的主餐：</h2>

<div style="height:300px;">
<div class="menu-item" style="float:left; ">
      <img src="image/bigmac.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="bigmac" checked="True" />大麥克 $75
</div>

<div  class="menu-item" style="float:left; ">
      <img src="image/doublecheese.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="doublecheese"/>雙層牛肉吉事堡 $65
</div>

<div class="menu-item" style="float:left; ">
      <img src="image/chicken.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="chicken"/>6塊麥克雞塊 $64
</div>

<div class="menu-item" style="float:left; ">
      <img src="image/bltt.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="bltt"/>BLT安格斯牛肉堡 $114
</div>

</div>
<div style="width:100%;">

<div class="menu-item"style="float:left; ">
      <img src="image/fish.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="fish"/>麥香魚 $49
</div>

<div class="menu-item" style="float:left; ">
      <img src="image/spicychicken.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="spicychicken"/>勁辣雞腿堡 $75
</div>

<div class="menu-item" style="float:left; ">
      <img src="image/ejej.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="ejej"/>蕈菇安格斯牛肉堡 $124
</div>

<div class="menu-item" style="float:left; ">
      <img src="image/bltc.jpg" alt="" width ="300"></br>
      <input type="radio" name="meat" value="bltc"/>BLT 嫩煎鷄腿堡 $114
</div>

</div>

</div>




<div style="margin-top:200px;">
<hr/>
<h2>超值配餐:</h2>
   <div style="float:left; ">
            <img src="image/classic.jpg" alt="" width ="275"></br>
            <input type="radio" name="woman" value="classic" checked="True" />中薯+冷飲 $65
   </div>

   <div style="float:left; ">
            <img src="image/salad.jpg" alt="" width ="275"></br>
            <input type="radio" name="woman" value="salad" />四季沙拉+冷飲 $65
   </div>

   <div style="float:left;">
            <img src="image/oreo.jpg" alt="" width ="275"></br>
            <input type="radio" name="woman" value="oreo" />OREO冰炫風+小薯+冷飲 $95
   </div>

   <div style="float:left;">
            <img src="image/small.jpg" alt="" width ="275"></br>
            <input type="radio" name="woman" value="small" />六塊麥克雞塊+小薯+冷飲 $95        
   </div>
   
</div>

<div style="margin-top :200px; width:100%px;">

   <p style="font-size: 20px;">冷飲選擇 :</p>
   
   <select name="drink" style="width:150px; font-size:15px;" >
   <option value="S001">可樂</option>
   <option value="S002">檸檬紅茶</option>
   <option value="S003">雪碧</option> 
   <option value="S004">綠茶</option> 
   </select>

</div>

<input type="text" size="5" name="Quantity" value="1"/> 
<input type="submit" value="訂餐" style="background-color:#ec4c34; color:white; border:none; width:80px; height:30px;"/>

</form>
<hr/>
<a href="1.php">商品目錄</a>
<a href="2.php">檢視購物車</a>
</body>
</html>