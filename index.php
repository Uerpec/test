<?php
require_once __DIR__.'/functions/functions.php';

$filesList = fileScanner(__DIR__ , '/images/');

?>


<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Писка</title>
</head>
<body>
<?php
foreach ($filesList as $f) {
    echo '<img src="'. $f .'" width=300><br>';
}
?>
</body>
</html>
