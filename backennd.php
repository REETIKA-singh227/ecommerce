<?php
if (isset($_POST['firstname'])) {
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection to this database failed due to" . mysqli_connect_error());

    } 
    $firstname = $_POST['firstname'];
    
    $sql = "DELETE FROM `reservation`.`reservation`  WHERE `firstname`='$firstname' ";
    if ($con->query($sql) === TRUE) {
        echo '<script>alert("cancellation done successfully")</script>'  ; 
    
    } else {
      echo "Error deleting record: " . $con->error;
    }
    
    $con->close();
}
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .class{
            width: 1000px;
            height: 80px;
            background-color: white;
         }
        
        .navbar {
            background-color: white;
        }

        .navbar li a:hover {
            color: red;
        }
       /* .navbar{width: 2000px;
    background-color: rgb(47, 39, 141);
    border-radius: 10px;
    color: black;*/
    


.navbar ul{height:80px;
    overflow:auto;
    font-size: 25px;
}
.navbar li{padding-top: 20px;
    float :left;
    
    list-style-type: none;
    margin: 3px 12px;

}
.navbar li a{color: #3a3ab1;
    padding :3px 3px;
 text-decoration: none;
}
.cancel{
    width:1500px;
    height: 200px;
    background-color: rgb(61, 15, 105);
   /* font-size: 30px;
    padding-left: 600px;
    padding-top: 25px;
    color:white;*/
}
.cancel1{font-size: 30px;
    padding-left: 600px;
    padding-top: 25px;
    color:white;

}
.cancel2{
    color: white;
    font-size:20px ;
    padding-left: 500px;
    padding-top: 6px;
    
    

}
.cancel3{
    width:800px;
    height: 500px;
    margin-left: 380px;
    background-color: rgb(209, 225, 238);
    border-radius: 16px;
    position:absolute;
    top:200px;
    
    
}
.cancel4{
    width:510px;
    height: 100px;
    
    background-color: rgb(16, 91, 147);
    border-radius: 10px;
    font-size: 30px;
    color: white;
    padding-left: 290px;
    padding-top: 30px;
    

}
.cancel5{
    padding-left: 60px;
   /* margin-top: 30px;*/
   padding-top: 30px;
    width: 300px;
    height: 20px;
    


}
.cancel6{padding-left: 450px;
    
    width: 300px;
    height: 20px;
    

}
.cancel7{padding-left: 60px;
    padding-top: 60px;
    width: 300px;
    height:20px;

}
.cancel11{margin-top: 100px;
    background-color: rgb(90, 90, 241);
    color: aliceblue;
    font-size: 20px;
    width: 700px;
    height: 50px;
    margin-left: 45px;
    border-radius: 10px;
}
.cancela{
    padding-left: 450px;
  padding-top: ;
  width: 300px;
  height: 20px;

}

#Booking{
    height: 40px;
    width: 300px;
}
#Moblie{
    height: 40px;
    width: 300px;
}
#email{
    height: 40px;
    width: 300px;
}.form{
    display: inline-block;
}
#firstname{
    height: 40px;
    width: 300px;
}
.form1{
    
    width: 1400px;
  height: 100px;
  background-color: aliceblue;
  margin-left: 50px;
  border-radius: 10px;
}
.train1{
    
height: 120px;
background-color:  rgb(18, 172, 238);;
margin-left: 60px;
margin-top: 20px;
border-radius: 10px;
padding-left: 100px;
padding-top: 30px;
width: 900px;
display:inline-block;

   
}
.train2{height:120px;
background-color: rgb(18, 172, 238);;
margin-left: 60px;
margin-top: 20px;
border-radius: 10px;
padding-left: 100px;
padding-top: 30px;
width: 900px;
display:inline-block;

}
.train3{
    height: 120px;
background-color: rgb(18, 172, 238);
margin-left: 60px;
margin-top: 20px;
border-radius: 10px;
padding-left: 100px;
padding-top: 30px;
width: 900px;
display:inline-block;

}

.traina{font-size: 18px;
display: inline-block;
           
}
#traina2{
    margin-left:450px;
}
.trainb{
    font-size: 18px;
display: inline-block;


}
#trainb2{
    margin-left:450px;


}
.trainc{
    font-size: 18px;
display: inline-block;


}
#trainc2{
    margin-left:450px;

}
   .place{
    background-image: url(s1.jpg);
    width:1500px ;
    height: 500px;
   } 
   *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
    font-family: 'roboto',sans-serif;
}
.container{
    max-width:80%;
    padding:34px;
    margin:auto;
}
.container h1{
    text-align:center;
    font-size:40px;
}
p{
    font-size:17px;
    text-align:center;
    font-family:'sriracha',cursive;
}
input,textarea{
    border:2px solid black;
    border-radius:6px;
    outline:none;
    font-size:16px;
    width: 700px;
    margin:11px 0px;
    padding:7px;
}
form{
    display:flex;
    align-items:center;
    justify-content: center;
    flex-direction: column;
}
.btn{
    color:white;
    background:#220080;
    padding:10px 40px;
    font-size:20px;
    border:2px solid white;
    border-radius: 20px;
    cursor:pointer;
}
.bg{
    width: 120%;
    position: absolute;
    z-index: -10;
    height: 150%;
}
.p1{
    font-size:17px;
    font-family:'sriracha',cursive;

}
.berth{
    color:rgb(20, 18, 18);
    align-items:center;
    justify-content: center;

}
.p2{
    align-items: center;
font-size: 17px;
font-family: 'sriracha',cursive;
justify-content: center;
margin: auto;
display: flex;
padding-top: 5px;
}
    
               
    </style>
    <script src="https://kit.fontawesome.com/94dac1cbfa.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="class">
    <header>


<nav class="navbar">
    <ul>
        <li><a href="index.php">Home &emsp;</a>
        </li>



        <li><a href="route.html"><i class="fa-solid fa-ticket"></i>
                Ticket Booking&emsp;</a></li>
        <li><a href="cancel.php">Ticket Cancellation &emsp;</a></li>
        <li><a href="booking1.html"><i class="fa-sharp fa-solid fa-location-dot"></i>Train Schedule &emsp;</a></li>
        

    </ul>
</nav>
</header>
    </div>
    <div class="cancel">
    <div class="cancel1">
        Ticket Cancellation
        </div>
        <div class="cancel2">
            Timely updates & complete transparency. That's a promise
        </div>
    </div>
    <div class="place">

    </div>
    <div class="cancel3">
    <div class="cancel4">
        Cancel your Booking

    </div>
        
    <form action="cancel.php"   method="post">
    <div class="cancel5">
        <label for="firstname" style=" font-size: 20px;">Name</label>
        

        
        <div class="cancel8">
        <input type="text" name="firstname" id="firstname" placeholder="enter your name">
        </div>     
        </div>
        <div class="cancel6">
        <label for="Mobile Number" style=" font-size: 20px;">Mobile Number</label>
        <div class="cancel9">
            <input type="text" name="Moblie Number" id="Moblie"  placeholder="enter your Mobile no."> 
        </div>
        </div>
        <div class="cancel7">
        <label for="email ID" style=" font-size: 20px;">email ID</label>
        <div class="cancel10">
            <input type="email" name="email" id="email"  placeholder="enter your email">
        </div>
        </div>
        
        <div class="cancela">
        <label for ="Booking Number or PNR Number" style=" font-size: 20px;padding-top: 800px;height: 900px;
        
        
        
        ">Booking Number or PNR Number</label>
        <div class="cancelb">
            <input type="text" name="Booking Number" id="Booking"  placeholder="enter your PNR no.">
        </div>
        </div>
        <div>
        <button class ="cancel11">Cancel Ticket</button>
        
            
        </div>
    </div>
     
       
</form>
    

<p id="demo"></p>


</body>

</html>
