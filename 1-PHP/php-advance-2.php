<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ファイルアップローダー</title>
</head>
<body>

<h1>ファイルアップローダー</h1>

<form method="post">
    <input type="file" name="file">
    <input type="submit" value="送信">
</form>

<?php

    if(isset($_POST["submit"]) && $_POST["file"]){
        print "Succcessful: ファイルのアップロードに成功しました。";
    }else{
        print "Error: ファイルが指定されてません";
    }
?>

</body>
</html>