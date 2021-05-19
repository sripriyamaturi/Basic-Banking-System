<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details</title>
    <link rel="stylesheet" href="customers.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.title{
    position:relative;
    top:10px;
    left:615px;
    font-family: 'Girassol', cursive;
}
body{
    background-color: #c6ffb3;
}
td,th{
    text-align: center;
    padding: 8px;
    border: 2px solid black;
} 
table {
    border-collapse: collapse;
   
    padding-right: 100px;
        
        text-align: right;
        border: 2px solid black;
        width:60%;
        position:absolute;
        top: 102px;
    left: 276px;
    
  }  
  
  .center{
    margin-left: auto;
  margin-right: auto;
  }

  img{
      position: absolute;
      top: 11px;
    left: 538px;
  }

  .bt {
  background-color:  #208000; /* Blue background */
  border: 2px solid black; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
  position: absolute;
  top: 36px;
    left: 1266px;
}

/* Darker background on mouse-over */
.bt:hover {
  background-color: #c6ffb3;
}
</style>

<body>
    <div class='heading'>
      
        <h1 class = 'title'><b>  CUSTOMER DETAILS</img></b></h1>
       
    </div>
    <a href="index.php"><button class="bt"><i class="fa fa-home"></i></button></a>
    <img src="logo.jpeg" width="75" height="75">
    
    <br>
    <form action="transactions.php" method="post">
    <table class = 'center' id="table" >
    <tr>
    <th>Account.no.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Current balance</th>
    <th>Click button to <br> perform transaction </th>
    </tr>
    
    <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "banking_app");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM customers";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
        while($row = mysqli_fetch_array($result)){
            $rownum = 1;

            echo "<tr id=" .$rownum++. ">";
                echo "<td> " . $row['Account.no.'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['CurrentBalance'] . "</td>";
                echo "<td> <a href='transactions.php'><button type='submit' class='btn btn-default' name='user'  id='users1' value= '{$row['Name']}' >Transact</button></a></td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
//mysqli_close($link);
?>
    </table>
   
   
    
                    </form>
<?php
 
mysqli_close($link);
?> 
</body>
</html>