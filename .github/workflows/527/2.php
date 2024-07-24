<!DOCTYPE html>
<html>  
<head>
<meta charset="utf-8" />
<title>購物車</title>

<?php
session_start();
/*
因為我們使用表格顯示所有陣列儲存的商品清單。
所以我們在each()函數中，切割結合陣列的鍵值成為二維陣列。
索引0是鍵值陣列；1是元素陣列。
*/
function each(&$array) 
{
   $res = array(); //用來儲存相關數據
   $key = key($array); //key()函數指出當前指針所指向的元素的鍵
   if($key !== null)
   {
       next($array); //next()函數將內部指針指向下一個元素，並返回該元素的值
       $res[1] = $res['value'] = $array[$key]; //把$array[$key]值存入$res['value']及$res[1]中
       $res[0] = $res['key'] = $key; //把$key值存入$res['key']及$res[0]中
   }
   else
   {
       $res = false;
   }
   return $res;
}

?>

</head>
<body >
<table border="0" align="center" style="font-size:25px; line-height:55px; text-align:center; width:70% ;margin-top:30px;"  >
   
  <tr bgcolor="#FFE66F" >
  
   <td><b>功能</b></td>  <td><b>主餐</b></td>  <td><b>加購超值配餐</b></td>  <td><b>飲品</b></td>  <td><b>價格</b></td>  <td><b>數量</b></td>  </tr>

<?php
$flag = false;  
$total = 0;
// 取出所有陣列COOKIE
while ( list($arr, $value) = each($_COOKIE) ) 
{
  // 檢查COOKIE名稱是否存在，且為陣列
  if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr]) ) 
  {
     if ($flag) 
     {   // 切換顯示色彩
        $flag = false;
        $color="#FFFAFA";

     } 
     else 
     {
        $flag = true;
        $color="#F5F5F5";
     }

     echo "<tr bgcolor='".$color."'><td>";
     echo "<a href='4.php?Id=".$arr."'>";
     echo "刪除</a></td>";


     $price = 0;
     $quantity = 0; 

     //使用while迴圈取得每一個鍵值和元素值來建立表格的儲存格
     while ( list($name, $value) = each($_COOKIE[$arr])) 
     {
        // 使用表格顯
        echo "<td>" . $value . "</td>"; 
        if ($name == "Price")  $price = $value; //取得價格
        if ($name == "Quantity") $quantity = $value; //取得數量
     }
     $total += $price * $quantity;  // 計算總金額
     //$total = $_SESSION["Test1"] ;
     echo "</tr>";
  }

}
if ($total != 0) 
{  // 顯示總金額
   echo "<tr bgcolor=#EF5350><td colspan=6 align=right>";
   echo "總金額 = NT$".$total."元</td></tr>";
}
?>


<img src="image\MClogo.png" width="10%"><br>
   <img src="image\111.jpg" width="100%"  style="display:block; margin:auto;">
    
    
 </table>   
 
<div align="center" style="font-size:30px; ">
<a href="1.php">商品目錄</a>
<a href="2.php">檢視購物車</a>
<form action="5.php" method="post" style="margin-top:40px;">
   <input type="submit" name="Send" value="確認訂單" style="font-size:30px;"/>
</form>
</div>

<h1 align="center" style="margin-top:50px; font-size:40px;">現正推出</h1>

<div align="center" style="margin-top : 35px; width:1200px; margin-left:auto; margin-right: auto; height:1000px;">

        <div style="float:left; margin-left:33px; margin-top:20px; border: 1px solid gray; height:450px;">
            <img src="image/ice.jpg" width="550" >
            <h3 style="font-size: 25px;">巧克力焦糖冰炫風限定上市！ </h3>
            <p>酥脆 KITKAT® 巧克力脆片搭配香濃焦糖醬，麥當勞冰炫風攜手 </p>
            <p>KITKAT® 巧克力，給你今夏最甜蜜濃郁的絕佳滋味！</p>
               
        </div> 

        <div style="float:left; margin-left:33px; margin-top:20px; border: 1px solid gray; height:450px;">
            <img src="image/moreblt.jpg" alt="" width="550">
            <h3 style="font-size: 25px;">【Signature 極選系列】享受極致美味</h3>
            <p>麥當勞頂級饗宴，品味再升級，嚴選高檔食材帶來極致搭配，</p>
            <p>講究多一點，美味更絕對！</p>
        </div>

        <div style="float:left; margin-left:33px; margin-top:50px; border: 1px solid gray; height:450px;">
            <img src="image/bt21.jpg" alt="" width="550">
            <h3 style="font-size: 25px;">2023 BT21甜心卡限量開賣 </h3>
            <p>宇宙級優惠強力放送！買A送B優惠一整年，快來蒐集全套四款，</p>
            <p>入坑宇宙級優惠</p>
        </div>

        <div style="float:left; margin-left:33px; margin-top:50px; border: 1px solid gray; height:450px;">
            <img src="image/inorder.jpg" alt="" width="550">
            <h3 style="font-size: 25px;">【環保一杯起】小改變促成大美好！</h3>
            <p>麥當勞鼓勵大眾自帶環保杯，除了在餐廳陸續提供內用杯，</p>
            <p>也攜手好盒器循環杯廠商共同提供餐廳借杯服務</p>
            
        </div>        

</div>
</body>
</html>
