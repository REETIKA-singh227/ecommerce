
<?php
if (isset($_POST['placeorder'])){
   
    $server= "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection" . mysqli_connect_error());


    }

   $firstname = $_POST["firstname"];
   $mobilenumber = $_POST["mobilenumber"];
   
   $size = $_POST["size"];
   $address = $_POST["address"];
  
     $sql = "INSERT INTO `users2`. `placeorder` (`firstname`,`mobilenumber`,`size`,`address`) VALUES ('$firstname','$mobilenumber','$size','$address');";
    
    if ($con->query($sql) == true) {
     echo '<script>alert("reservation done successfully")</script>'  ; 
    
    }
    
     else {
        echo "ERROR: $sql <br> $con->error";
    }
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
.cancel1{font-size: 40px;
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
    font-size: 50px;
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
.placeorder{margin-top: 100px;
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
#size{
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
    
               
    </style>
    <script src="https://kit.fontawesome.com/94dac1cbfa.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="class">
    <header>



</header>
    </div>
    <div class="cancel">
    <div class="cancel1">
        Cash On Delivery
        </div>
        <div class="cancel2">
            
    </div>
    <div class="place">

    </div>
    <div class="cancel3">
    <div class="cancel4">
        Place Order

    </div>
        
    <form action="index.php"   method="post">
    <div class="cancel5">
        <label for="firstname" style=" font-size: 20px;">Name</label>
        

        
        <div class="cancel8">
        <input type="text" name="firstname" id="firstname" placeholder="enter your name">
        </div>     
        </div>
        <div class="cancel6">
        <label for="Mobile Number" style=" font-size: 20px;">Mobile Number</label>
        <div class="cancel9">
            <input type="text" name="moblienumber" id="Moblie"  placeholder="enter your Mobile no."> 
        </div>
        </div>
        <div class="cancel7">
        <label for="size" style=" font-size: 20px;">Size</label>
        <div class="cancel10">
            <input type="size" name="size" id="size"  placeholder="enter size">
        </div>
        </div>
        
        <div class="cancela">
        <label for ="Booking Number or PNR Number" style=" font-size: 20px;padding-top: 800px;height: 900px;
        
        
        
        ">Address</label>
        <div class="cancelb">
            <input type="text" name="address" id="Booking"  placeholder="enter your adderss">
        </div>
        </div>
        <div>
        <button class ="placeorder" name="placeorder">place order</button>
                
            
        
            
        </div>
    </div>
     
       
</form>
    

<p id="demo"></p>


</body>

</html>
