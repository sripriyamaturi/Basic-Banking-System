<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sparks Bank</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
</head>
<style>
  body{
    background-color:#c6ffb3;
  }
  .title{
    position:relative;
    top: 35px;
    left: 50vw;
    align:center;
  }
  .welcome{
    position:absolute;
    top: 102px;
    left: 46px;
  }

  .button{
    position:absolute;
    top: 283px;
    left: 42px;
  }
  .button2{
    position:absolute;
    top: 351px;
    left:42px;
    background-color: black;
    font-size: 16px;
    padding: 12px 28px;
    border-radius: 8px;
    border: 2px solid #e0e0d1;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    width: 250px;
    text-align: center;
     display: block;
     color: #e0e0d1;
     display: flex;
  justify-content: center;
  align-items: center;
  margin:auto;
  }
  .about{
    position:absolute;
    top: 196px;
    left:0;
  }
  .image{
    position:absolute;
    top: -98px;
    left: 0.5em;
  }
</style>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="company"><a href="">  <b>  SPARKS BANK</b></a></li>


                <li class="other"><a href="record.php">View transactions</a></li>
                  <li class="other"><a href="customers.php">View customers</a></li>
                <li class="other"><a href="">About</a></li>
                <li class="other"><a href="index.php">Home</a></li>

            </ul>
        </nav>
    </header>
 
    
    <div class="title">
    <div class="image">
        <img src="logo.jpeg" alt="error in loading" width="150" height="140" >
   
    </div>
        <h1 class="welcome" style="align:center"><br>Welcome to Sparks Bank</h1>
        <div class="about">
      <p> A simple dynamic banking application to access customer details and allow transactions among them.</p>
      
    </div>
    <a href="customers.php" class="button"><b>View customers</b></a><br>
    <a href="record.php" target="_parent" class="button2"><b>View transactions</b></a>
    </div>
  

      <footer>

        <p>Contact us: <a href="GRIP@thesparksfoundation.sg">GRIP@thesparksfoundation.sg </a>   Visit us: <a href="https://www.thesparksfoundationsingapore.org/">The Sparks Foundation</a></p>
      </footer>

</body>

</html>
