<?php
    $conn = mysql_connect("localhost","root","");
    mysql_select_db("webmate");

    foreach($_FILES['filesToUpload']['name'] as $key=>$val){
        //upload and stored images
        $target_dir = "uploads/";
        $file_name = $_FILES['filesToUpload']['name'][$key];
        if($_FILES['filesToUpload']['size'][$key]>1048576000){
            echo "<span color='red'>$file_name exceeds the size 1GB";
        }
        else{
            $target_file = $target_dir.$_FILES['filesToUpload']['name'][$key];
            if(file_exists($target_file)){
                $count = mysql_result(mysql_query("SELECT COUNT(fileName) FROM uploads WHERE fileName='$file_name'"),0);
                $target_file = $target_dir.$count.'_'.$_FILES['filesToUpload']['name'][$key];
            }

            if(move_uploaded_file($_FILES['filesToUpload']['tmp_name'][$key],$target_file)){
                mysql_query("INSERT INTO uploads VALUES('$target_file','$file_name')");
                echo $file_name.' uploaded successfully<br>';
            }
            else{
                echo "<span color='red'>$file_name not uploaded</span><br>";
            }
        }
    }
    

