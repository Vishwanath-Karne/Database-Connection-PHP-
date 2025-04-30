
<?php

    if($_SERVER['REQUEST_METHOD']=='POST')
    {

        // $nam=$_POST['person'];
        // $pas=$_POST['pass'];

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

            // $sql="select * from `contact1`";

            // $x=mysqli_query($conn,$sql);

            
            

            
            // while($row=mysqli_fetch_assoc($x))
            // {
            //     foreach($row as $k)
            //     {
            //         echo $k."  ";
            //     }
            //     echo"<br/>";
            // }


            // $sql="select * from `contact1`";

            
            $sql="DELETE FROM `crudtest` WHERE username = 'MANJU'";

            $x=mysqli_query($conn,$sql);

            echo var_dump($x);

            
            
            
            
            // while($row=mysqli_fetch_assoc($x))
            // {
            //     foreach($row as $k)
            //     {
            //         echo $k."  ";
            //     }
            //     echo"<br/>";
            // }
             

        
        }



    }





?>