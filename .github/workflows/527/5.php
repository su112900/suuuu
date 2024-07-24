<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>訂單資訊</title>

    
    <?php
    $msg = "";
    if(isset($_POST["Name"]))
    {
        $file = "guestbook.txt";
        $name = $_POST["Name"];
        $phone = $_POST["Phone"];
        $messages = nl2br($_POST["address"]);
        $fp = fopen($file,"a");
        date_default_timezone_set('Asia/Taipei');
        $today = date("Y年m月d日 h:i:s");
        $msg = "<b>留言時間:<b>".$today."<br/>";
        $msg .= "<b>姓名:<b>".$name."<br/>";
        $msg .= "<b>連絡電話:<b>".$phone."<br/>";
        $msg .= "<b>地址:<b>".$messages."<br/>";
        fputs($fp , $msg);
        fclose($fp);
        header("Location: 6.php");
    }
    ?>
</head>
<body>

<!--<marquee align=""><img src="image/long.png" alt="" /></marquee>!-->
<marquee scrollamount=10 behavior="alternate"><img src="image/未命名.png" alt=""  align="center" width="1500px;" /></marquee>
<!--<img src="image/24hrNight.jpg" alt="" align="right" width="350">!-->

<h1 align="center"  style=" font-size:40px; " >外送資料</h1>
<h1 align="center" style="font-size:20px;">請輸入您的外送地址，以確認它是否位於歡樂送範圍內。</h1>

<form action="5.php" method = "post">
<table  align="center" style="font-size:70px; width:500px; ">
    <td colspan="2" align="center">
        <font size ="5">姓名:
        <input type="text" size="30" name="Name"/>
    </td>
    </tr>
    <tr>
        <td colspan="2" align="center">
        <font size ="5">電話:
        <input type="text" size="30" name="Phone"/>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <font size="5">地址: <textarea name="address" rows="3"cols="30" color="blue"></textarea>
        </td>
    </tr>

    <tr>
        <td colspan="2" align="center">
            <input type="submit" name="Send" value="送出" style="font-size:20px;"/>
            <input type="reset" name="Reset" value="清除欄位"style="font-size:20px;"/><br/>
        </td>
    </tr>

</table>
</form>
<div align="center" style="font-size:30px; margin-top:30px;">
<a href="2.php">檢視購物車</a>
<a href="6.php">查看外送資料</a>

</div>


</body>
</html>