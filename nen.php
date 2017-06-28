<?php
/*
Code by HTT
Shared on J2Team 
Do not remove this line 

 */
header('Content-Type: application/json');
	 
include_once("function_nen1.php");
$rd= generateRandomString();

$fn="na_".$rd."".md5($_GET['file']).".png"; // Ten file khi tai ve 


if(isset($_GET['file']) && !(empty($_GET['file']))){
    // lay duong dan file can nen 
    $file = 'view/'.$_GET['file'];
		
		
if (file_exists($file)) {
ob_start();
$compressed = compress_image($file, $fn,75); // ( file , ten file , chat luong )
     
	header('Content-Description: File Transfer');
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");	
        header('Content-Disposition: attachment; filename='.basename($compressed));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($compressed));
       ob_end_clean();
        flush();
        readfile($compressed);
        ignore_user_abort(true);
        unlink($file); // Xoa
        unlink($fn); // Xoa
        exit;
        

		}
		
		else{
			
			 $result = array(
			"error" => "1",
			"msg" => "Something Error !!",
			);
		echo json_encode($result,JSON_PRETTY_PRINT);
      
			
		}
}
else{
			
			 $result = array(
			"error" => "3",
			"msg" => "WTF???",
			);
		echo json_encode($result,JSON_PRETTY_PRINT);
      
			
		}
?>
