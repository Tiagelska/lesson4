<?php 

function myScan(string $dir) {

	$list = scandir($dir);

	if(!$list) {return false;}

	unset($list[0], $list[1]);
	foreach ($list as $file) {
		include $dir.DIRECTORY_SEPARATOR.$file;
	}
}
myScan('../data');

function imgScan(string $dir){
    $list = scandir($dir);
    if(!$list) {return false;}
    unset($list[0], $list[1]);
    $arImg = [];
	foreach ($list as $file) {
        $mimeType = mime_content_type($dir.DIRECTORY_SEPARATOR.$file);
        if(strpos($mimeType, 'image') == 0 ) {
            array_push($arImg, $file);
        }
    }
    return $arImg;
}

$foto = imgScan(IMG_DIR);

?>


<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
<link rel="stylesheet" type="text/css" href="css/style.css"/>

<title>Home Work 4. </title>
</head>
<body>
<h1>Gallery of cats</h1>

<div class="container" >
<?php foreach ($foto as $img): ?>
<div class="foto" >
<a href="<?=IMG_DIR.DIRECTORY_SEPARATOR.$img?>" target="_blank"> <img src="<?=IMG_PROMO_DIR.DIRECTORY_SEPARATOR.$img?>" alt="" width="200"></a>
</div>
<?php endforeach ?>
</div>

</body>
</html>
