<?php
    $con = mysqli_connect("localhost", "root", "", "banking_app");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks | Customers</title>
    <!-- Including the bootstrap CDN -->
    <link rel="stylesheet" href= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
    <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script src= "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"> </script> 
    <script src= "https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> 
    <link rel="stylesheet" href="http://anijs.github.io/lib/anicollection/anicollection.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Including style sheet-->
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<style>

body{
        background-color:#c6ffb3;
        
    }

.title{
    align-items: center;
}

table {
    border-collapse: collapse;
    width: 100%;
    padding-right: 100px;
        flex-basis: 50%;
        text-align: right;
        border: 2px solid black;
        position: relative;
        top:0;
        left:270px;
  }
  
  th, td {
    text-align: center;
    padding: 8px;
    border: 2px solid black;
  }
  
  tr:nth-child(even){background-color: #f2f2f2}
  
  th {
    background-color: black;
    color: white;
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
}

</style>
<body  onload="loader()">

    
    <div>

<div class="usertable">
    <div class="back">
        <a href="index.php"><button class="bt"><i class="fa fa-home"></i></button></a>
    </div>
    <h3 class="font-weight-bold"style="text-align:center;font-family: 'Girassol', cursive;font-size:2.2em;padding:3%;">Transfer Records</h3>
    <table id="myTable" style="width:60%">
          <tr>
            <th>Transfer ID</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            
          </tr>
          <?php
        $sql = "SELECT * FROM `transfers` ORDER BY transfer_id DESC LIMIT 10";
        $result = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<form method ='post' action = 'acustomer.php'>";
            echo "<td>". $row['transfer_id'] . "</td>
            <td>". $row['sender'] . "</td>
            <td>". $row['receiver'] . "</td>
            <td>". $row['amount'] . "</td>";
            echo "</form>";
         echo  "</tr>";
        }
        ?>
    </table>
</div>
<br><br>


</body>




</html>