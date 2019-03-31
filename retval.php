<?php
    $name="Vipul";
    $conn=mysqli_connect('localhost','root','','ids');
     if(!$conn){
         echo "Die";
         die();
     }
     //echo "working";
     //$email1=$_SESSION['Email'];
     $query="SELECT Name1, Email FROM information WHERE Name1='$name'";
if ($res = mysqli_query($conn, $query)){ 
    if (mysqli_num_rows($res) > 0) { 
        
        while ($row = mysqli_fetch_array($res)) {
            echo "<table>"; 
            echo "<tr>"; 
            //echo "<input type="text" name="username" value=".$row['Name1']">";
            echo "<td>".$row['Name1']."</td>"."<br>"; 
            echo "<td>".$row['Email']."</td>"."<br>";  
            echo "</tr>";
        } 
        echo "</table>"; 
        mysqli_free_result($res); 
    } 
    else { 
        echo "No matching records are found."; 
    } 
} 
else { 
    echo "ERROR: Could not able to execute $query. "
                                .mysqli_error($conn); 
} 
mysqli_close($conn); 

?>