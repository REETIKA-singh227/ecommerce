
<?php
if (isset($_POST['submit'])){
    $show =false;
    $server= "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection" . mysqli_connect_error());


    }

   $username = $_POST["username"];
   $password = $_POST["password"];
   $cpassword = $_POST["cpassword"];
   $exists=false;
    if(($password == $cpassword) && $exists==false){
        "SELECT * FROM `users`";
   $sql = "INSERT INTO `users2`.`users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
   
    $result = mysqli_query($con,$sql);
    if($result){
     $show = true;
    
    
    
     
}
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
    <link rel="stylesheet" href="form.css">
    <style>
        .class {
            width: 1000px;
           
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



        .navbar ul {
            font-size: 25px;
            overflow: auto;
        }

        .navbar li {color: #3a3ab1;
            padding-top: 20px;
            float: left;
            list-style-type: none;
            margin: 3px 12px;
        }

        .navbar li a {color: #3a3ab1;
            padding: 3px 3px;
            text-decoration: none;
           
        }

        .form {
            display: inline-block;
        }

        .form1 {

            width: 1400px;
            height: 100px;
            background-color: aliceblue;
            margin-left: 50px;
            border-radius: 10px;
        }

        
        
        
        .fill{
            position: absolute;
            top: 210px;
            left:100px;
            width: 1400px;
  height: 50px;
  font-size: 20px;
  margin-left: 60px;
  margin-top: 40px;
}
   
   
   .note{  height: 30px;
  background-color: rgb(239, 247, 99);
  border-radius: 10px;
  width: 500px;
  padding-left: 90px;
}
    
   .radio{
    margin:10px;

   }  
   .tarikh{
    margin:10px;
    padding: 10px;
    color:rgb(21, 18, 18);
    width: 450px;
   }
   .content2{
    padding-left:10px;
   }
   .choice{
    border:none;
    outline:none;
    width:40px;
    padding:10px;
    margin-left:0px;
   }
   .box{
    margin:10px;
    width: 455px;
    height:40px;
   }
   .submit-btn{display: inline;
    font-size: large;
    margin:10px;
            width: 200px;
            height: 50px;
            border-radius: 10px;
            background-color: rgb(93, 56, 243);
            

        }
        .hero{
    width:100%;
    height:900px;
    background-image: url(b.jpg);
    background-size: cover;
    background-position: center;
    position: relative;
    overflow: hidden;
}


    

   .form2{position: absolute;
top: 80px;
   } 
   
   .container{
    position: absolute;
    top:200px;
    left:390px;
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
    width: 500px;
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
</head>

<body>
    
    <div class="hero">
    <div class="container">
        <h1>Signup</h1>
    
        <br>
        <form action="index.php" method="post">
        
        
        <br>
        

            <input type="text" name="username" id="username" placeholder="Username"> 
           
            <input type="text" name="password" id="password" placeholder="Password">
                
            <input type="text" name="cpassword" id="cpassword" placeholder="Confirm Password">
           
    
           
       
       
            <button class="submit-btn" type="submit" name="submit"  id="submit">Signup</button>
            
            
        </form>
    </div>
    
    </div>
</body>
</html>
