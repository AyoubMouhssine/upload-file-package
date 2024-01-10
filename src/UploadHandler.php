<?php 
namespace MyUploadPackage;



class UploadHandler {
    public static function uploadFiles($dir, $file) {
        if(!is_dir($dir)){
            mkdir($dir, 0755, true);
        }
    
        $destination = $dir . $file['name'];
    
        if(move_uploaded_file($file['tmp_name'], $destination)){
            echo $file['name'] . ' uploaded successfully.';
        } else {
            echo 'Error uploading.';
        }
    }
}
