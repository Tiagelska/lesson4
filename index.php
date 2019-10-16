<?php
include './engine/autoload.php';
autoload('config');
include ENGINE_DIR.'db.php';
include ENGINE_DIR . 'images_table_controler.php';

?>


<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="<?=CSS_ROOT?>style.css"/>

<title>Home Work 5. </title>
</head>
<body>
<h1>Gallery of cats</h1>

<div class="container" >

<?php foreach ($images as $img): ?>
    <div class="foto" >
        <img src="<?=ROOT_DIR . DIRECTORY_SEPARATOR . $img['Path'].DIRECTORY_SEPARATOR .IMG_PROMO_DIR . $img['Name']?>" alt="" width="200">
        <br>
        <a href="<?=ROOT_DIR . DIRECTORY_SEPARATOR . $img['Path'].DIRECTORY_SEPARATOR . IMG_DIR.$img['Name']?>" target="_blank">Photo ID: <?=$img['ID']?></a>
        <span><br>Photo size: <?=$img['Size']?></span>
    </div>
<?php endforeach?>
</div>

</body>
</html>
