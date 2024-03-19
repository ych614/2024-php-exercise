<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Caculator</title>
</head>
<body>
    <h1>計算BMI</h1>

    <form action="">
        <p>身高: <input type="text" name="height" id="height"></p>
        <p>體重: <input type="text" name="weight" id="weight"></p>
        <input type="submit" value="進行計算" name="submit">
    </form>


    <?php 
       if (isset($_GET["submit"])) {

            // 透過表單傳送的資料
            $h = $_GET["height"];
            $w = $_GET["weight"];

            // 進行計算
            $bmi = $w / ($h/100*$h/100);
            $bmi = number_format($bmi, 2);
    ?>

            <!-- 顯示結果 -->
            <p>身高：<?= $h ?></p>
            <p>體重：<?= $w ?></p>
            <p>BMI： <?= $bmi ?></p>

    <?php
            if ($bmi < 18) {
                echo "你太瘦了, 要補充營養~!";
            } elseif ($bmi > 24) {
                echo "你太胖了, 要多多運動~!";
            } else {
                echo "體重適中, 好好保持~!";
            }
        }  
    ?>

</body>
</html>