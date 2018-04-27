<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ファイルアップローダー</title>


</head>
<body>

<?php
$_FILES['fname'];

$tempfile = $_FILES['fname']['tmp_name']; // 一時ファイル名
$filename = $_FILES['fname']['name']; // 本来のファイル名

$tempfile = $_FILES['fname']['tmp_name'];
$filename = './' . $_FILES['fname']['name'];

if (is_uploaded_file($tempfile)) {
    if (move_uploaded_file($tempfile, $filename)) {
        print ("Successful: ファイルのアップロードに成功しました。");
    }
} else {
    print("Error: ファイルが指定されていません");
}
?>

<h1>ファイルアップローダー</h1>

<form action="php-advance-2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fname">
    <input type="submit" value="送信">
</form>

</body>
</html>