<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Shop</title>
    <link rel="stylesheet" href="./shops.css">
    
</head>
<body>
<!-- <h1>  CAR RENTAL</h1> -->
    <div id="container">
        <header>
             <div class="topnav">
                <a class="active" href="./signin.php">Home</a>
                
                <a href="./order.php">order</a>
                <!-- <h1>  CAR RENTAL</h1> -->
           </header>
           <h1>  CAR RENTAL</h1>
</div>
  <div id="items">
  <?php
                 $sql="select * from product";
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
                            <div class="flex=-item"><h2>'.$row['NAME'].'</h2>
                            <img id="image1" src="'.$imagesLinks[$row["NAME"]].'" 
                            width="300px" height="300px"/>
                            <button class="book"> <a href="./order.php?id='.$row['ID'].'">ORDER</a> </button>
                            

                            </div>';
                              
                        }

                    } 
                    //<p> PER.HOURS: Rs='.$row['QUANTITY'].'</p>
                    //<p>PER.DAY: Rs '.$row['PRICE'].' </p>
             ?>       
</div>
 </body>
</html>