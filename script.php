<?php
    //echo '0';
    $name=$_POST['name'];
    $email=$_POST['email'];
    if(!isset($_POST['submit'])){
        echo 'Thank you for submission.';
        die();
    }
    //$name='hey';
    //$email='bye';
    $conn=mysqli_connect('localhost','root','','ids');
     if(!$conn){
         echo "Die";
         die();
     }
     echo "working";

     $query="SELECT Name1, Email FROM information WHERE Name1='$name' AND Email='$email'";
     //$query="INSERT INTO information (Name,Email) values ('$name','$email')";
    // echo $query;
    // if($conn->query($query))
     //{
       //  echo 'WEW';
     //}
    // header('location: http://localhost/Module1/form.html');
if ($res = mysqli_query($conn, $query)) { 
    if (mysqli_num_rows($res) > 0) { 
        
        while ($row = mysqli_fetch_array($res)) { 
          //  echo "<tr>"; 
            //echo "<td>".$row['Name1']."</td>"; 
            //echo "<td>".$row['Email']."</td>";  
            //echo "</tr>";
            //header('location: C:\Users\Surendra\Desktop\Module1\form.html');
            //include 'C:\Users\Surendra\Desktop\Module1\form.html';
            $_SESSION['Email']=$row['Email']; 
            header('location: http://localhost/Module1/form.html');
        } 
       // echo "</table>"; 
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

     //$retval = mysql_query($query,$conn);
     //while($row = mysql_fetch_array($retval, MYSQL_ASSOC)){
       //  echo 'success';
     //}

     //mysql_close($conn);

?>