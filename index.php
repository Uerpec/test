<?php
require_once __DIR__.'/functions/functions.php';
$uploadDir = __DIR__ . '/images/';
$filesList = fileScanner(__DIR__ , '/images/');
$counter=count($filesList);
echo 'файлов в базе: '.$counter;
if (isset($_POST['submit']))
    $_FILES['image']['name']= (++$counter).substr($_FILES['image']['name'],-4);
    $newName = $uploadDir . basename($_FILES['image']['name']);

    if (is_uploaded_file($_FILES['image']['tmp_name'])) {
        move_uploaded_file($_FILES['image']['tmp_name'],$newName);
    }
?>

<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Писка</title>
</head>
<body>
<form method="post" action="index.php" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="submit">
</form>
<?php
foreach ($filesList as $f) {
    echo '<img src="'. $f .'" width=300><br>';
}
?>
</body>
</html>
