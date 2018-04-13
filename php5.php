<!DOCTYPE html>
<html lang="ja">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>



<table border="1">
    <?php

    $addresses = array(
        #array("name" => '名前', "address" => '住所', "phone" => '電話', "Email" => 'email'),
        array("name" => '東京太郎', "address" => '東京都', "phone" => '012-345-6789', "Email" => 'taro@example.com'),
        array("name" => '工科花子', "address" => '北海道', "phone" => '987-654-3210', "Email" => 'hana@example.com'),
    );

    if (isset($_POST[submit])) {

        $getPost =
            array("name" => $_POST['name'], "address" => $_POST['address'], "phone" => $_POST['phone'], "Email" => $_POST['email']);
        array_push($addresses, $getPost);
    }

    print_table($addresses);
    ?>



    <table xmlns="http://www.w3.org/1999/html">
        <table border="1">



            <?php
            function print_table($addresses)
            {
                echo "<table border='1'>\n";
                echo "<tr>";
                echo "<th>名前</th>";
                echo "<th>住所</th>";
                echo "<th>電話</th>";
                echo "<th>Email</th>";
                echo " ";

                foreach ($addresses as $v) {



                echo "<tr>\n";
                echo "<td>" . $v['name'] . "</td>\n";
                echo "<td>" . $v['address'] . "</td>\n";
                echo "<td>" . $v['phone'] . "</td>\n";
                echo "<td>" . $v['Email'] . "</td>\n";
                echo "</tr>\n";

            }
            }

            ?>

        </table>

        <form action="php5.php" method="post">
            名前<input type='text' name="name">
            住所<input type='text' name="address">
            電話<input type='text' name="phone">
            Email<input type='text' name="email">
            <input type="submit" name="submit" value="送信">



        <?php
        if (isset($_POST[submit])) {

            $getPost =
            array("name" => $_POST['name'], "address" => $_POST['address'], "phone" => $_POST['phone'], "Email" => $_POST['email']);
            array_push($addresses, $getPost);

            $str = "abcdefghijklmnopqrstuvwxyz";//文字列
            $cut = 50000;//カットしたい文字数
            $replace = substr( $str , 0 , strlen($str)-$cut );
            echo $replace;//abcdefghijklmnopqrstuvwxy


            $json = json_encode ( $getPost ,JSON_UNESCAPED_UNICODE);
            print($json);

            file_put_contents("./json/addresses.json", $json);
        }
        ?>

        <?php

        ?>
        </form>

</body>
</html>



