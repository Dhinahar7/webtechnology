<?php
include("conn.php");
if (isset($_GET['id'])) { 
    $id=$_GET['id'];
}
else{
    header("location:stationary.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop</title>
    <link rel="stylesheet" href="./style.css">
    <!-- <link rel="stylesheet" href="./shop.css"> -->
    <style>
        /* html {
  background-color: #e7eef5;
} */
        #items {
            display:block;
        }
    #items > div {
  background-color: white;
  padding: 5px; 
  width:100%;
  display: flow-root;
}
#items > div img {
 float:left;
 margin-right:10px
}
h1 {
    color: white;
    /* background-color: #d87422; */
    text-align: center;
    font-size: 50px;
  }
  .topnav {
    overflow: hidden;
    background-color: rgb(55, 207, 245);
  }
   .topnav a {
    float: left;
    color: #f01a1a;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  .topnav a:hover {
    background-color: rgb(201, 31, 31);
    color: rgb(12, 207, 221);
  }
  .topnav a.active {
    background-color: #cf1261;
    color: white;
  } 
    .total{font-size: 30px;
    
    color: rgb(101, 42, 211);} 
   
    #items button {
  width: 150px;
  height: 30px;
  color: rgb(82, 150, 228);
  font-size: 20px;
  font-weight: bold;
  font-family: "Courier New", Courier, monospace;
  border-radius: 5px;
  background-color: wheat;
  position: relative;
}
    </style>
</head>
<body>
<!-- <h1>CAR RENTAL</h1> -->
    <div id="container">
        <header>
            <div class="topnav">
                <a  href="./front.php">Home</a>
                
                <a class="active" href="./order.php">order</a>
           </header>
           <h1>CAR RENTAL</h1>
</div>
<?php
/* $sql="SELECT sum(price) as total from product";
 $res=$conn->query($sql);
 if($res->num_rows > 0)
                {
                    $row=$res->fetch_assoc();
                    echo "<p class='total'>TotalBill:".$row['total']."</p>" ;
                }
                else{
                    echo "no items";

                }*/
?>
  <div id="items">
<?php
                 $sql="select * from product where ID=$id";
                $res=$conn->query($sql);
            
                $imagesLinks["INNOVA"] = "./i.jpg";
                $imagesLinks["MARUTHI"] = "./h.jpg";
                $imagesLinks["TOYOTA"] = "./t.jpg";
                $imagesLinks["SUSEKI"] = "./s.jpg";
                
                if($res->num_rows > 0)
                {
                        while($row=$res->fetch_assoc())
                        {
                          echo '
                            <div class="car"><h2>'.$row['NAME'].'</h2>
                            <img id="image1" src="'.$imagesLinks[$row["NAME"]].'" 
                            width="300px" height="300px"/>
                           <p>NAME           : '.$row['NAME'].' </p>
                           <p>PER_DAY        :'.$row['PER_DAY'].' </p>
                           <p>PER_KILOMETER  :'.$row['PER_KILOMETER'].' </p>
                           <p>SEATS          :'.$row['SEATS'].' </p>
                           <p>MILEAGE        : '.$row['MILEAGE'].' </p>
                           <p>DISELE_CAPACITY: '.$row['DISELE_CAPACITY'].' </p>
                           <button class="book"> <a href="./inform.php">OK</a> </button>
                           <button class="book"> <a href="./car.php">BACK</a> </button>

                            </div>';
                        }
                    } 
             ?>          
</div>
 </body>
</html>




