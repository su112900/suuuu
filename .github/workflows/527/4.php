<?php 
 function each(&$array) //這邊都跟shoppingcart內容一樣
 {
   $res = array();
   $key = key($array);
   if($key !== null)
   {
       next($array); 
       $res[1] = $res['value'] = $array[$key];
       $res[0] = $res['key'] = $key;
   }
   else
   {
       $res = false;
   }
   return $res;
}   

$id = $_GET["Id"];  // 取得URL參數
if ( isset($_COOKIE[$id]) ) 
{ // 檢查Cookie是否存在
   // 存在, 刪除陣列Cookie
   while ( list($name, $value) = each($_COOKIE[$id]) )
      setcookie($id."[".$name."]", "", time()-3600); 
}

header("Location: 2.php");  // 轉址
?>
