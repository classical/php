<?php 
ini_set('memory_limit', '-1');

$file = file_get_contents('imagename.txt', FILE_USE_INCLUDE_PATH);
$fileName =  preg_split("/(\r\n|\n|\r)/", $file);
$folderImg = 'tmp/';
$desFolder = 'needed/';
//print_r($fileName);
foreach($fileName as $_name) {
	//echo $_name . "<br />";
	if (file_exists($folderImg.$_name)) {
		echo "El fichero $_name existe <br />";
		copy($folderImg.$_name, $desFolder.$_name);
		//unlink($folderImg.$_name);
	} else {
		//echo "El fichero $_name no existe <br />";
	}
}
echo "Complete";
//file_put_contents('standard.csv', $firstElement);
