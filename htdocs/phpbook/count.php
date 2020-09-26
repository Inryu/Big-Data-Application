<?php

//1. connect server
$mysqli=mysqli_connect("localhost","root","sir104401","testdb");

if(mysqli_connect_errno()){
    printf("Connect failed : %s\n",mysqli_connect_error());
    exit();
}else{

    //2. create SQL string
    $sql="SELECT * FROM testTable";

    //3. run query string
    $res=mysqli_query($mysqli, $sql);

    if($res==TRUE){
        $number_of_rows=mysqli_num_rows($res);
        printf("Result set has %d rows.\n",$number_of_rows);

    }else{
        printf("Could not retrieve records: %s\n",mysqli_error($mysqli));
    }

    //4. free result
    mysqli_free_result($res);

    //close
    mysqli_close($mysqli);
}
?>