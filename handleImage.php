<?php
/*
Code by HTT
Shared on J2Team 
Do not remove this line 

 */

header('Content-Type: application/json');

if ( isset($_FILES["file"]["type"]) ) // Cac thong so mac dinh 
{
  $max_size = (5 * 1024) * 1024; // Kich thuong - 5MB
  $destination_directory = "view/"; // Thu muc luu
  $validextensions = array("jpeg", "jpg", "png","PNG","JPEG","JPG"); // dinh dang anh

  $temporary = explode(".", $_FILES["file"]["name"]);
  $file_extension = end($temporary);
function generateRandomString($length = 20) {
    $characters = 'PLOLIKUJMUYHNBGYWAZXCBNMLKJHGFDSAQWERTYUIOP14235469858094012873912652';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$kichthuoc=$_FILES["file"]["size"];


$tilenen=30;
$nenduoc = (($tilenen / 100 ) * $kichthuoc) / 1024;
$img_size=$_FILES["file"]["size"] / 1024;
$fn=generateRandomString();

			
		
  // Kiem tra dinh dang anh
  if ( (($_FILES["file"]["type"] == "image/png") ||
        ($_FILES["file"]["type"] == "image/jpg") ||
        ($_FILES["file"]["type"] == "image/jpeg") ||
        ($_FILES["file"]["type"] == "image/PNG") ||
        ($_FILES["file"]["type"] == "image/JPG")||	
        ($_FILES["file"]["type"] == "image/JPEG")
       ) && in_array($file_extension, $validextensions))
  {
    if ( $_FILES["file"]["size"] < ($max_size) )
    {
      if ( $_FILES["file"]["error"] > 0 )
      {
       $result = array(
			"error" => "1",
			"msg" => "Something Error !!",
			);
		echo json_encode($result,JSON_PRETTY_PRINT);
      }
		 
        if (! file_exists($destination_directory . $_FILES["file"]["name"]) ) // Neu chua co , luu file vao 
        {
                 $sourcePath = $_FILES["file"]["tmp_name"];
          $targetPath = $destination_directory . $fn.".png";
		  $safe= $fn.".png";
          move_uploaded_file($sourcePath, $targetPath);
			$result = array(
			"error" => "0",
			"msg" => "Success",
			"file_url" => $safe
			);
		echo json_encode($result,JSON_PRETTY_PRINT);
   
		}
	  
	}
  

    else
    {

$result = array(
			"error" => "1",
			"msg" => "Error : Kích thước ảnh quá lớn !",
			);
		echo json_encode($result,JSON_PRETTY_PRINT);
    }
  
	
	
	}
}
else{
			
			 $result = array(
			"error" => "3",
			"msg" => "WTF??",
			);
		echo json_encode($result,JSON_PRETTY_PRINT);
      
			
		}
?>