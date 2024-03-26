<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>報名表</h1>

    <form action="" method="post">

        <p>姓名：<input type="text" name="chname" id="" placeholder="請輸入中文姓名" required></p>
        <p>密碼：<input type="password" name="passwd" id="" placeholder="請設定密碼"></p>
        <p>身高：<input type="text" name="height" value="" placeholder="請用公分輸入身高"></p>

        <input type="submit" value="Send" name="submit">
    </form>

    <?php
    # 主機接受並處理
    if (isset($_REQUEST["submit"])) {

        $name = $_REQUEST["chname"];
        $pwd = $_REQUEST["passwd"];
        $h = $_REQUEST["height"];

        echo "姓名:" . $name;
        echo "密碼:" . $pwd;
        echo "身高:" . $h;
    }

    ?>
</body>
</html>