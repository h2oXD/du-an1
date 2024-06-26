<?php 
if(!function_exists('require_file')){
    function require_file($pathFolder){
        $files = array_diff(scandir($pathFolder),['.','..']);
        foreach($files as $file){
            require_once $pathFolder.$file;
        }
    }
}
if(!function_exists('debug')){
    function debug($data){
        echo "<pre>";

        print_r($data);

        die;
    }
}
if(!function_exists('e404')){
    function e404(){
        echo "404 not found";
        die;
    }
}
if(!function_exists('upload_file')){
    function upload_file($file,$pathFileUpload){

            $imagePath = $pathFileUpload. time().'-' . basename($file['name']);
            if(move_uploaded_file($file['tmp_name'],PATH_UPLOAD.$imagePath)){
                return $imagePath;
            }
            return null;
            
        
    }
}
if(!function_exists('get_file_upload')){
    function get_file_upload($field,$default = null){
        if(isset($_FILES[$field]) && $_FILES[$field]['size']>0){
        
            return $_FILES[$field];
        }
        
        return $default ?? null;
            
        
    }
}
if (!function_exists('checkUniqueEmail')) {
    function checkUniqueEmail($tableName, $email)
    {
        try {
            $sql = "SELECT * FROM $tableName WHERE email = :email LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (\Exception $e) {
            debug($e);
        }

    }
}