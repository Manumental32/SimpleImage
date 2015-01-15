<?
require_once 'src/SimpleImageByManu.php';

$path = 'imagenes/';
// chmod($path,755);

$basename = $path . '/imagen.jpg';
$image = new SimpleImage($basename);
$image->auto_orient();
$image->fit_to_width(1024);
// $w = $image->get_original_info();
// $image->scale(50);
$filename = 'imagen_alterada.jpg';
$image->save($path . $filename);
?>
