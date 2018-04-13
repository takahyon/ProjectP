<!DOCTYPE html>
<html lang="ja">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>


<?php

$header = ["name" => '名前', "address" => '住所', "phone" => '電話', "Email" => 'email'];
$addresses = array(
    array("name" => '東京太郎', "address" => '東京都', "phone" => '012-345-6789', "Email" => 'taro@example.com'),
    array("name" => '工科花子', "address" => '北海道', "phone" => '987-654-3210', "Email" => 'hana@example.com'),
);

?>

<table>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>住所</th>
            <th>電話</th>
            <th>Email</th>
        </tr>


        <?php

        funtion($addresses){
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

</body>
</html>
