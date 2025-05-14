<?php

    $conn = mysqli_connect("localhost:3307","root","","finalyearproject") or die (mysqli_error($conn));
    
if($conn)
{
    echo "";
}
    else
    {
        echo"connection failed";
    }
?>