<?php 
$file_handle = fopen("urllist.txt", "r"); 
 while (!feof($file_handle)) { 
	 	$url = trim(fgets($file_handle)); 
		$content = file_get_contents($url); 
		$document = array($url,$content); 
		$serialized = serialize($document); 
		$fp = fopen('./documents/'.md5($url), 'w'); 
		fwrite($fp, $serialized); 
		fclose($fp); 
} 
fclose($file_handle);
?>