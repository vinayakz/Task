<?php
    
    include 'mysqlconnect.php';
    

    
    
    $sql = "SELECT * FROM demo";
    
    $result = mysqli_query($conn, $sql);

    $myJson = [];

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $myJson[] = $row;
        }
    }
    
    
    
    //header('Content-Type: application/json');
    
    echo json_encode($myJson);    

    mysqli_close($conn);
?>