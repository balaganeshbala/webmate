<?php
    $conn = mysql_connect("localhost","root","");
    mysql_select_db("webmate");
    $content = $_POST['content'];
    $filename = $_POST['filename'];
    
    $result =  mysql_query("SELECT * FROM files WHERE file_name = '$filename'");
    $data=mysql_fetch_array($result);
    if ($data[0]){
        echo "false";
    }
    else{
        $res = mysql_query("INSERT INTO files VALUES('$filename');");
        $myfile = fopen("files/".$filename,"w");
        fwrite($myfile, $content);
        fclose($myfile);
        $result =  mysql_query("SELECT * FROM files WHERE file_name = '$filename'");
        $data = mysql_fetch_array($result);
        
        echo json_encode($data);
    }