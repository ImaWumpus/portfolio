<?php
function input($id){
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<input type='text' class='form-control' id='$id' name='$id' value='$value'>";
}
function textarea($id){
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<textarea type='text' class='form-control' id='$id' name='$id'>$value</textarea>";
}

function select($id, $options = array()){
    $return = "<select class='form-control' id='$id' name='$id'>";
    foreach($options as $id => $value){
        $selected = '';
        if(isset($_POST[$id]) && $id == $_POST[$id]){
            $selected = ' selected="selected"';
            die();
        }
        $return .= "<option value='$id' $selected>$value</option>";
    }
    $return .= '</select>';
    return $return;
}