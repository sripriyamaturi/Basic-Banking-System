<?php
session_start();
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password,"banking_app");
if(!$con){
    die("Connection failed");

}
$_SESSION['user']=$_POST['user'];
$_SESSION['sender']=$_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks | Customers</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
   
</head>
<style>
    body{
        background-color: #c6ffb3;
    }

    .head1{
        text-align:center;
        font-family: 'Girassol', cursive;
        position:absolute;
        top:0;
        left:535px;
    }

    .welcome{
        position:absolute;
        top: 103px;
    left: 563px;
        text-align:center;
        font-family: 'Girassol', cursive;
    }

    .cb{
        position:absolute;
        top: 115px;
    left: 487px;
        text-align:center;
        font-family: 'Girassol', cursive;
    }

    .head2{
        position:absolute;
        top: 192px;
    left: 557px;
        text-align:center;
        font-family: 'Girassol', cursive;
    }

    .dc{
        background-color: #39ac73;
        position:absolute;
        top: 283px;
    left: 316px;
        text-align:center;
        font-family: 'Girassol', cursive;
        height:50%;
        width:50%;
        border: 2px solid black;
        border-radius:10px
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
<body  onload="loader()">

    <div>
<div class="acustomer" style="margin:2%;">
<div class="row">
    <div class="col-sm" style="padding:1% 3%;">
 
    
    <div style="padding-top:2%;display:inline;"><h1 class="head1">Money Transfer</h1>
    </div>
    <a href="index.php"><button class="bt"><i class="fa fa-home"></i></button></a>
        <div style="font-size:1.2em;">
        <?php
        if (isset($_SESSION['user']))
        {
          $user=$_SESSION['user'];
          $result=mysqli_query($con,"SELECT * FROM customers WHERE Name='$user'");
          while($row=mysqli_fetch_array($result))
          {
            
            echo "<p name='sender'><b class='welcome'>WELCOME,&nbsp;&nbsp;&nbsp;&nbsp;".$row['Name']."!</b></p><br>";
            
            echo "<p class='cb'><b >Your currect account balance is</b>&nbsp; :&nbsp;<b>&#8377; ".$row['CurrentBalance']."</b></p>";
          }         
        }
      ?>
      </div>
    </div>
    <div class="col-sm" style="padding:1% 3%;">
        <div >
                    <form action="transfer.php" method="POST">
                        
                    <img  height="50" src="./images/arrow.png" alt="" style="display:inline;">&nbsp;
                    <div style="padding-top:2%;display:inline;">
                    <span class="head2"><b><h2>Transfer Details</h2></b></span>
                    </div><br><br>
                    <div class="dc">
                        <br><br>
                    <b style="font-size:1.2em;">Sender</b> : <span style="font-size:1.2em;"><input id="myinput" name="sender" disabled type="text" style="width:40%;border:none;" value='<?php echo "$user";?>'></input></span>

                        <br><br><br>
                        <b style="font-size:1.2em;">Select Reciever:</b>
                <select name="reciever" id="dropdown" required>
                    <option>Select Reciever</option>
                <?php
                $db = mysqli_connect("localhost", "root", "", "banking_app");
                $res = mysqli_query($db, "SELECT * FROM customers WHERE Name!='$user'");
                while($row = mysqli_fetch_array($res)) {
                    echo("<option> "."  ".$row['Name']."</option>");
                }
                ?>
                </select>
                <br><br><br>
                        <b style="font-size:1.2em;">Amount to be transferred &#8377;:</b>
                        <input name="amount" type="number" style="width:35%;" min="100" required>
                        <br><br><br>
                        <button id="transfer"  name="transfer" class="btn btn-default"
                        style="border=1px solid black" ><b>Transfer</b></button>
                        </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>