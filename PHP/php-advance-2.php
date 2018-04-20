<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ファイルアップローダー</title>


    <?php
    $save_dir = '/images/upload/';
    $save_filename = date('YmdHis');
    $save_basename = $save_filename . '.' . $extension;
    $save_path = $_SERVER["DOCUMENT_ROOT"] . $save_dir . $save_basename;
    while (file_exists($save_path)) { // 同名ファイルがあればファイル名を変更する
        $save_filename .= mt_rand(0, 9);
        $save_basename = $save_filename . '.' . $extension;
        $save_path = $_SERVER["DOCUMENT_ROOT"] . $save_dir . $save_basename;
    }
    ?>

</head>
<body>

<h1>ファイルアップローダー</h1>

<form action="php-advance-2.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fname">
    <input type="submit" value="送信">
</form>

<?php
$_FILES['fname'];

$tempfile = $_FILES['fname']['tmp_name']; // 一時ファイル名
$filename = $_FILES['fname']['name']; // 本来のファイル名

$tempfile = $_FILES['fname']['tmp_name'];
$filename = './' . $_FILES['fname']['name'];

if (is_uploaded_file($tempfile)) {
    if (move_uploaded_file($tempfile, $filename)) {
        echo $filename . "をアップロードしました。";
    } else {
        echo "ファイルをアップロードできません。";
    }
} else {
    echo "ファイルが選択されていません。";
}
?>

</body>
</html>