<?php
function input($id){
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<input type='text' class='form-control' id='$id' name='$id' value='$value'>";
}
function textarea($id){
    $value = isset($_POST[$id]) ? $_POST[$id] : '';
    return "<textarea type='text' class='form-control' id='$id' name='$id'>$value</textarea>";
}

function select($id, $otions = array()){
    $return = "<select class='form-control' id='$id' name='$id'>";
    foreach($options as $id => $value){
        $return .= "<option value='$id'>$value</option>";
    }
    $return .= '</select>';
}