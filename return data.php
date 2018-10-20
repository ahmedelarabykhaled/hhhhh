
<?php
session_start();

$connect = mysqli_connect("localhost","root","12345678","friends");
    $query = "select * from friends";
    $rows = mysqli_query($connect,$query);
    if($rows->num_rows > 0)
    {
        $count = 1;
            while($result = $rows->fetch_assoc()) {
            echo "<tr><td>".$count."</td><td>".$result["name"]."</td><td>".$result["phone"]."</td><td>".$result["mail"]."</td><td>".$result["location"]."</td><td><a href='delete_row.php?val=".$result["id"]."'><button id='bt-".$count."' class=' btn btn-warning'>DELETE</button></a></td></tr>" ; 
                $count ++;
            
            
        }
        $_SESSION["counter"] = $count+1;
    }
?>

<script type="text/javascript"></script>