<?php
    header("Content-type:text/javascript;charset=utf-8");
    define('HOST','loclhost');
    define('USER','root');
    define('PASS','');
    define('DB','lab_connect_mysql');

    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        $con = mysqli_connect(HOST,USER,PASS,DB) or die ('Unable t o connect');

        mysqli_set_charset($con,'UTF-8');

        $sql = "SELECT * FROM content";

        $query = mysqli_query($conn,$sql);

        $result = array();

        while ($row = mysqli_fetch_array($query)){

            array_push($result,array("id"=> $row["ID"], "comment" => $row["comment"]));
        }
        print json_encode(array('result' => $result));

        mysqli_close($conn);
    }
?>