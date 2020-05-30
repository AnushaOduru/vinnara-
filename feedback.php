<?php


// create temp variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recamand";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
    $quesion = $_POST['quesion'];
    
   
    if($quesion!=''){
       
        $sql = "INSERT INTO `feedback`(`quesion`) VALUES ('$quesion')";
        
      
        $result = $conn->query($sql);
        
        if ($result) {
          echo "<br/><br/><span>Data Inserted successfully...!!</span>";
        } else {
            die("insert failed: " . $conn->error);
        }
    }
    else{
        echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
    }
}
// mysql_close($conn); // Closing Connection with Server
$conn->close();
header('location:index.html')

?>