<?php
if (isset($_FILES['file'])){
    $file = $_FILES['file'];
    //print_r($file);

    $file_name = $file['name'];
    $file_tmp = $file['tmp_name'];
    $file_size = $file['size'];
}