<?php
function resizedName($file, $width, $height){
    $info = pathinfo($file);
    $return = '';
    if($info['dirname'] != '.'){
            $return .= $info['dirname'] . '/';
    }
    $return .= $info['filename'] . "_$width" . "x$height." . $info['extension'];
    return $return;
}

function resizeImage($file, $width, $height){

    $pathinfo = pathinfo(trim($file, '/'));
    $output = $pathinfo['dirname'] . '/' . $pathinfo['filename'] . '_' . $width . 'x' . $height . '.' . $pathinfo['extension'];
    


    $info = getimagesize($file);
    list($width_old, $height_old) = $info;

    if(isset($_POST["submit"])) {
        if(is_array($_FILES)) {
        $file = $_FILES['myImage']['tmp_name']; 
        $source_properties = getimagesize($file);
        $image_type = $source_properties[2]; 
        if( $image_type == IMAGETYPE_JPEG ) {   
        $image_resource_id = imagecreatefromjpeg($file);  
        $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
        imagejpeg($target_layer,$_FILES['myImage']['name'] . "_thump.jpg");
        }
        elseif( $image_type == IMAGETYPE_GIF )  {  
        $image_resource_id = imagecreatefromgif($file);
        $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
        imagegif($target_layer,$_FILES['myImage']['name'] . "_thump.gif");
        }
        elseif( $image_type == IMAGETYPE_PNG ) {
        $image_resource_id = imagecreatefrompng($file); 
        $target_layer = fn_resize($image_resource_id,$source_properties[0],$source_properties[1]);
        imagepng($target_layer,$_FILES['myImage']['name'] . "_thump.png");
        }
        }
        }
        function fn_resize($image_resource_id,$width,$height) {
        $target_width =50;
        $target_height =50;
        $target_layer=imagecreatetruecolor($target_width,$target_height);
        imagecopyresampled($target_layer,$image_resource_id,0,0,0,0,$target_width,$target_height, $width,$height);
        return $target_layer;
        }
        // return true;
    }


?>
