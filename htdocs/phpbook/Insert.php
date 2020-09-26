<?php

//1. connect server
$mysqli=mysqli_connect("localhost","root","sir104401","testdb");

if(mysqli_connect_errno()){
    printf("Connect failed : %s\n",mysqli_connect_error());
    exit();
}else{

    //2. create SQL string
    $sql="INSERT INTO testTable(testColumn) VALUES ('".$_POST["testColumn"]."')";

    //3. run query string
    $res=mysqli_query($mysqli, $sql);

    if($res==TRUE){
        echo "A record has been inserted";
    }else{
        printf("Could not insert record: %s\n",mysqli_error($mysqli));
    }

    //4. close
    mysqli_close($mysqli);
}
?>