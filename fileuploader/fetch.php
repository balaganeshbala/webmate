<?php
    $conn = mysql_connect("localhost","root","");
    mysql_select_db("webmate");
    
    $result = mysql_query("SELECT * FROM uploads ORDER BY fileName");
    while($data = mysql_fetch_array($result)){
        $output[] = $data;
    }
    echo json_encode($output);

