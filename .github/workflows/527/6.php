<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>顯示外送資訊</title>

    <style>
        @keyframes moveRight {
            
        
            0%{
                transform:translate(0px,40px);
            }

            

            10%{
                transform:translate(120px,0px);
            }

            20%{
                transform:translate(240px,40px);
            }

            30%{
                transform:translate(360px,0px);
            }

            40%{
                transform:translate(480px,40px);
            }

            50%{
                transform:translate(600px,0px);
            }

            60%{
                transform:translate(720px,40px);
            }

            70%{
                transform:translate(840px,0px);
            }

            80%{
                transform:translate(960px,40px);
            }

            90%{
                transform:translate(1080px,0px);
            }

            100%{
                transform:translate(1200px,40px);
            }

            
            

        }

        #image1{
            width:500px;
            height:250px;
            animation: moveRight 6s infinite linear;
        }
    </style>

</head>
<body>
    <?php
    $file = "guestbook.txt";
    if(! file_exists($file) or filesize($file)==0)
        echo "<h2>目前沒有任何留言!</h2><hr/>";
    else
        readfile($file);
    ?>
    <br/>
    <a href="5.php">新增留言</a>

    <img id="image1" src="image/mcunn.png" alt="">

</body>