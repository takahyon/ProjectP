<!DOCTYPE html>
<html lang="ja">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>


<table border="1">

    <?php


    $jsonUrl = "addresses.json";
    if (file_exists($jsonUrl)) {
        echo "file read";
        $json = file_get_contents($jsonUrl);
        $json = mb_convert_encoding($json, 'UTF-8');
        $obj = json_decode($json, true);
        $adresses = $obj;
        echo $obj["name"];

    } else {
        echo "データがありません";
    }


    if (isset($_POST[submit])) {

        $getPost =
            array("name" => $_POST['name'], "address" => $_POST['address'], "phone" => $_POST['phone'], "Email" => $_POST['email']);
        array_push($obj, $getPost);
    }

    print_table($obj);

    makeJson($obj);
    ?>

    <table border="1">;


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


    </form>

    <?php
    function makeJson($array)
    {
        $json = json_encode($array, JSON_UNESCAPED_UNICODE);
        file_put_contents("addresses.json", $json);
    }

    ?>


</body>
</html>



