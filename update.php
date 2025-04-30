
<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        $server="localhost";
        $username="root";
        $password="";
        $dbname="crud";

        $conn=mysqli_connect($server,$username,$password,$dbname);

        if(!$conn)
        {
            echo"error".mysqli_connect_error();
        }
        else
        {

            $sql="UPDATE  `crudtest` SET `username`='testsucess' WHERE `username`=''";

            $x=mysqli_query($conn,$sql);

            echo var_dump($x);

        
        }}
?>