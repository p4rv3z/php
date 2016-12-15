<?php
echo "File<br><hr>";
echo readfile("data.txt");
echo "<br>";
$data = fopen("data.txt","r") or die("File not found.");
$file_size = filesize("data.txt");
echo fread($data,$file_size)."<br>";
fclose($data);

echo "Read Line<br><hr>";
$data = fopen("data.txt","r") or die("File not found.");
$file_size = filesize("data.txt");
echo fgets($data,$file_size)."<br>";
fclose($data);

echo "Read Chracter<br><hr>";
$data = fopen("data.txt","r") or die("File not found.");
echo fgetc($data)."<br>";
fclose($data);

echo "Read all line using loop<br><hr>";
$data = fopen("data.txt","r") or die("File not found.");
$file_size = filesize("data.txt");
while(!feof($data)){
	echo fgets($data,$file_size)."<br>";
}
fclose($data);

echo "Read all chracter using loop<br><hr>";
$data = fopen("data.txt","r") or die("File not found.");
while(!feof($data)){
	echo fgetc($data)."<br>";
}
fclose($data);
?>