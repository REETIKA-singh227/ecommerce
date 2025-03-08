<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ama-cart</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />


    <link rel="stylesheet"href="style.css">
   <style> 



* {
    margin: 0;
    padding:0;
    box-sizing: border-box;
    font-family:'Spartan',sans-serif;
}

h1 {
    font-size: 50px;
    list-style: 64px;
    color: #222;
}

h2 {
    font-size: 46px;
    line-height: 54px;
    color:#222;

}

h4 {
    font-size: 20px;
    color:#222
}

h6 {
    font-weight: 700;
    font-size: 12px;
}

p {
    font-size: 16px;
    color:#465b52;
    margin: 15px 0 20px 0;
}

.section-p1 {
    padding: 40px 80px;
}
.section-m1 {
    margin: 40px 0;
}

button.normal{
    font-size: 14px;
    font-weight: 600;
    padding: 15px 30px;
    color: #000;
    background-color: #fff;
    border-radius: 4px;
    cursor: pointer;
    border: none;
    outline: none;
    transition:0.2s;

}

button.white{
    font-size: 13px;
    font-weight: 600;
    padding: 11px 30px;
    color:#fff;
    background-color: transparent;
    cursor: pointer;
    border: 1px solid #fff;
    outline: none;
    transition:0.2s;

}

body {
    width: 100%;
}

/* Header Start */

#header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 80px;
    background: #E3E6F3;
    box-shadow: 0 5px 15px rgba(0,0,0,0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;

}

#navbar{
    display: flex;
    align-items: center;
    justify-content: center;
}


#navbar li{
    list-style: none;
    padding:0 20px;
    position: relative;
    
}

#navbar li a{
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    color: #1a1a1a;
    transition: 0.3 ease;

}

#navbar li a:hover,
#navbar li a.active {
    color: #088178;
}


#navbar li a.active::after,
#navbar li a:hover::after{
    content: "";
    width: 30%;
    height: 2px;
    background: #088178;
    position: absolute;
    bottom:-4px;
    left: 20px;

}

#mobile{
    display: none;
    align-items: center;

}
#close{
    display: none;
}


/* Home page */
#hero{
    background-image: url("images/hero4.png");
    height: 90vh;
    width: 100%;
    background-size: cover;
    background-position: top 25% right 0%;
    padding: 0 80px;
    display: flex;
    flex-direction: column;
    align-items:flex-start;
    justify-content: center;

}

#hero h4{
    padding-bottom: 15px;
} 

#hero h1{
    color: #088178;
}

#hero button{
    background-image: url("images/button.png");
    background-color: transparent;
    color: #088178;
    border: 0;
    padding: 14px 80px 14px 65px;
    background-repeat: no-repeat;
    cursor: pointer;
    font-weight: 700;
    font-size: 15px;

}

#feature{
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
}

#feature .fe-box{
    width: 180px;
    text-align: center;
    padding: 25px 15px;
    box-shadow: 20px 20px 34px rgba(0,0,0,0.03);
    border: 1px solid #cce7d0;
    border-radius: 4px;
    margin: 15px 0;

}

#feature .fe-box:hover{
    box-shadow: 10px 10px 54px rgba(70, 62, 221, 0.1);
}

#feature .fe-box img{
    width: 100%;
    margin-bottom: 10px;
}

#feature .fe-box h6{
    display: inline-block;
    padding: 9px 8px 6px 8px;
    line-height: 1;
    border-radius: 4px;
    color: #088178;
    background-color: #fddde4;
}

#feature .fe-box:nth-child(2) h6{
    background-color: #cdebbc;
}
#feature .fe-box:nth-child(3) h6{
    background-color: #d1e8f2;
}
#feature .fe-box:nth-child(4) h6{
    background-color: #cdd4f8;
}
#feature .fe-box:nth-child(5) h6{
    background-color: #f6dbf6;
}
#feature .fe-box:nth-child(6) h6{
    background-color: #fff2e5;
}

#product1{
    text-align: center;
}

#product1 .pro-container{
    display: flex;
    justify-content: space-between;
    padding-top: 20px;
    flex-wrap: wrap;
}

#product1 .pro{
    width: 23%;
    min-width: 250px;
    padding: 10px 12px;
    border: 1px solid #cce7d0;
    border-radius: 25px;
    cursor: pointer;
    box-shadow: 20px 20px 30px rgba(0,0,0,0.02);
    margin: 15px 0;
    transition: 0.2s ease;
    position: relative;

}

#product1 .pro:hover{
    box-shadow: 20px 20px 30px rgba(0,0,0,0.06);


}

#product1 .pro img {
    width: 100%;
    border-radius: 20px;
}

#product1 .pro .des{
    text-align: start;
    pad: 10px 0;
}

#product1 .pro .des span{
    color: #606063 ;
    font-size: 14px;
}

#product1 .pro .des h5{
    padding: 8px;
    color:#1a1a1a ;
    font-size: 14px;
}

#product1 .pro .des i{
    font-size: 12px;
    color: rgb(243,181,25);

}

#product1 .pro .des h4{
    padding-top: 7px;
    font-size: 15px;
    font-weight: 700;
    color: #088178;
}

#product1 .pro .cart{
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50px;
    background-color: #e8f6ea;
    font-weight: 500;
    color: #088178;
    border: 1px solid #cce7d0;
    position: absolute;
    bottom:20px ;
    right: 10px;
}

#banner {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background-image: url("images/b2.jpg");
    width: 100%;
    height: 40vh;
    background-size: cover;
    background-position: center; 
    
}

#banner h4{
    color: #fff;
    font-size: 16px;
}

#banner h2{
    color: #fff;
    font-size: 30px;
    padding: 10px 0;
}

#banner h2 span{
    color: #ef3636;
   
}

#banner button:hover{
    background-color: #088178;
    color: #fff;
}

#sm-banner {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

#sm-banner .banner-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background-image: url("images/b17.jpg");
    width: 580px;
    height: 50vh;
    background-size: cover;
    background-position: center;
    padding: 30px;
}
#sm-banner .banner-box2{
    background-image: url("images/b10.jpg");
}

#sm-banner h4{
    color:#fff;
    font-size: 20px;
    font-weight:300 ;

}

#sm-banner h2 {
    color:#fff;
    font-size: 20px;
    font-weight:800 ;
}

#sm-banner span {
    color:#fff;
    font-size: 14px;
    font-weight:500;
    padding: 15px;
}

#sm-banner .banner-box:hover button{
    background-color: #088178;
    border: 1px solid #088178;
}

#banner3 {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    padding: 0 80px;
}

#banner3 .banner-box {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    background-image: url("images/b7.jpg");
    width: 30%;
    height: 30vh;
    background-size: cover;
    background-position: center;
    padding: 20px;
    margin-bottom: 20px;
}

#banner3 .banner-box2 {
    background-image: url("images/b4.jpg");

}

#banner3 .banner-box3 {
    background-image: url("images/b18.jpg");

}


#banner3 h2{
    color: #fff;
    font-weight: 900;
    font-size: 22px;
}

#banner3 h3{
    color: #c50a0aa2;
    font-weight: 800;
    font-size: 15px;
    
}

#newsletter {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    align-items: center;
    background-image: url(images/b14.png);
    background-repeat: no-repeat;
    background-position: 20% 30%;
    background-color: #041e42;
}

#newsletter h4 {
    font-size: 22px;
    font-weight: 700;
    color: #fff;
}

#newsletter p {
    font-size: 14px;
    font-weight: 600;
    color:#818ea0 ;
}

#newsletter p {
    font-size: 14px;
    font-weight: 600;
    color:#818ea0 ;
} 
#newsletter p span {
    color:#834e12 ;
}

#newsletter .form{
    display: flex;
    width: 40%;

}

#newsletter input{
    height:3.125rem ;
    padding: 0 1.25rem;
    font-size: 14px;
    width: 100%;
    border: 1px solid transparent;
    border-radius: 4px;
    outline: none;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

#newsletter button {
    background-color: #088178;
    color: #fff;
    white-space: nowrap;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;

}

footer {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

footer .col {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 20px;
}

footer .logo {
    margin-bottom: 30px;
}

footer h4 {
    font-size: 14px;
    padding-bottom: 20px;
}

footer p {
    font-size: 13px;
    margin: 0 0 8pc 0;

}

footer a {
    font-size: 13px;
    text-decoration: none;
    color: #222;
    margin-bottom: 10px;
}

footer .follow {
    margin-top: 20px;

}

footer .follow i {
    color: #465b52;
    padding-right: 4px;
    cursor: pointer;
}

footer .install .row img{
    border: 1px solid #088178;
    border-radius: 6px;
}

footer .install img {
    margin: 10px 0 15px 0;
}

footer .follow i:hover,
footer a:hover{
    color:#034440;
}

footer .copyright{
    width: 100%;
    text-align: center;
}


/* Shop page  */
#page-header{
    background-image: url("images/b1.jpg");
    width: 100%;
    height: 40vh;
    background-size: cover;
    justify-content: center;
    text-align: center;
    flex-direction: column;
    padding: 14px;

}

#page-header h2,
#page-header p{
    color: #fff;
}

#pagination{
    text-align: center;
}

#pagination a{
    text-decoration: none;
    background-color: #088178;
    padding: 15px 20px;
    color: #fff;
    font-weight: 600;

}

#pagination a i{
    font-size: 16px;
    font-weight: 600;

}



/* Single product */

#prodetails{
    display: flex;
    margin-top: 20px;
}

#prodetails .single-pro-image{
    width: 40%;
    margin: 50px;

}

.small-img-group{
    display: flex;
    justify-content: space-between;
}

.small-img-col{
    flex-basis: 24%;
    cursor: pointer;
}

#prodetails .single-pro-details{
    width: 50%;
    padding-top: 90px;
}

#prodetails .single-pro-details h4{
    padding: 40px 0 20px 0;
  font-size: 20px;
 
}

#prodetails .single-pro-details h2{
    font-size: 26px;
 
}

#prodetails .single-pro-details select{
    display: block;
    padding: 5px 10px;
    margin-bottom: 10px;
}

#prodetails .single-pro-details input{
    width: 50%;
    height: 47px;
    padding-left: 10px;
    font-size: 16px;
    margin-right: 10px;
}

#prodetails .single-pro-details input:focus{
outline: none;
}

#prodetails .single-pro-details button{
    background-color: #088178;
    color: #fff;
}

#prodetails .single-pro-details span{
    line-height: 25px;
}







/* Blog page */

#page-header.blog-header{
    background-image: url("images/b19.jpg");
}

#blog{
    padding: 150px 150px 0 150px;
}

#blog .blog-box {
    display: flex; 
    align-items: center;
    width: 100%;
    position: relative;
    padding: 40px;
}

#blog .blog-img {
    width: 50%;
    margin-right: 40px;
}

#blog img  {
    width:100% ;
    height: 300px;
    object-fit: cover;
}

#blog .blog-details{
    width: 50%;
}

#blog .blog-details a{
    text-decoration: none;
    font-size: 11px;
    color:#000;
    font-weight: 700;
    position: relative;
    transition: 0.3s;
}

#blog .blog-details a::after{
    content: "";
    width: 50px;
    height: 1px;
    background-color: #000;
    position: absolute;
    top: 4px;
    right: -60px;
}

#blog .blog-details a:hover{
    color: #088178;
}

#blog .blog-details a:hover::after{
    background-color: #088178;
}

#blog .blog-box h1{
    position: absolute;
    top: -10px;
    left: 40px;
    font-size: 70px;
    font-weight: 700;
    color: #c9cbce;
    z-index: -9;
}
/* About page */



@media (max-width:799px) {
    .section-p1 {
        padding: 40px 40px; 
    }
    #navbar {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: flex-start;
        position: fixed;
        top: 0;
        right: -300px;
        height: 100vh;
        width: 300px;
        background-color:#E3E6F3 ;
        box-shadow: 0 40px 60px rgba(0,0,0,0.01);
        padding: 80px 0 0 10px;
        transition: 0.3s;

    }

    #navbar.active {
        right: 0px;

    }

    #navbar li {
        margin-bottom: 25px;
    }

    #mobile {
        display: flex;
        align-items: center;
    
    }

    #mobile i {
        color: #1a1a1a;
        font-size: 24px;
        padding-left: 20px;
    }

    #close{
        display: initial;
        position: absolute;
        top: 30px;
        left: 30px;
        color: #222;
        font-size: 24px;

    }
    #lg-bag{
        display: none;

    }
    
    #hero {
        height: 90vh;
        padding: 0 80px;
        background-position: top 30% right 30%;

    }

    #feature {
        justify-content: center;
    }

    #feature .fe-box {
       
        margin: 15px 15px;
    }

    #product1 .pro-container{

        justify-content: center;
  
    }

    #product1 .pro{
        margin:15px ;
    }

    #banner {
       
        height: 20vh;
    }

    #sm-banner .banner-box {
        
       min-width: 100%;
        height: 30vh;

    }

    #banner3 {
        padding: 0 40px;
    }

    #banner3 .banner-box {
        width: 28%;
    }

    #newsletter .form {
        width: 70%;
    }
        
}

@media (max-width:477px){
    .section-p1{
        padding: 20px;
    }
    #header {
        padding: 10px 30px;
    }
    h1{
        font-size: 32px;
    }
    h2{
        font-size: 32px;
    }

    #hero {
        padding:0 20px;
        background-position: 55%;
    }

    #feature {
        justify-content: space-between;
    }

    #feature .fe-box {
        width: 155px;
        margin: 0 0 15px 0;
    }

    #product1 .pro {
        width: 100%;

    }
    #banner {
        height: 40vh;
    }

    #sm-banner .banner-box{
        height: 40vh;
    }

    #sm-banner .banner-box2{
        margin-top: 20px;
    }

    #banner3 {
        padding: 0 20px;
    }

    #banner3 .banner-box {
        width: 100%;
    }

    #newsletter .form{
        width: 100%;
    }

    #newsletter {
        padding: 40px 20px;
        
    }

    #newletter .form{
        width: 100%;
    }

    footer .copyright {
        text-align: start;
    }

    /* Single Product*/

    #prodetails {
        display: flex;
        flex-direction:column;
    }

    #prodetails .single-pro-image{
        width: 100%;
    
    }

    #prodetails .single-pro-details{
        width: 100%;
    }

    /* blog page */

    #blog{
        padding: 100px 20px 0 20px;
    }

    #blog .blog-box{
        display: flex;
        flex-direction: column;
        align-items: flex-start;
    }

    #blog .blog-img{
        width: 100%;
        margin-right: 0px;
    }

    #blog .blog-details {
        width: 100%;
    }

}

</style>
</head>
<body>
    <section id ="header">
        <a href="#"><img src="images/logo4.png"  class="logo" alt=""></a>
        <div>
            <ul id ="navbar">
                <li><a class="active" href="index.html">Home</a> </li>
                <li><a href="shop.html">Shop</a> </li>
                <li><a href="blog.html">Blog</a> </li>
                <li><a href="about.html">About</a> </li>
                <li><a href="contact.html">Contact</a> </li>
                <li id="lg-bag"><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                <a href="#" id="close"><i class="far fa-times"></i></a>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a> 
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

    <section id="hero">
    <h4>Trade-in-offer</h4>
    <h2>Super value deals</h2>
    <h1>On all products</h1>
    <p>Save more with coupons & up to 70% off! </p>
    <button> Shop Now</button>

    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="images/f1.png" alt="">
             <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="images/f2.png" alt="">
             <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="images/f3.png" alt="">
             <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="images/f4.png" alt="">
             <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="images/f5.png" alt="">
             <h6>Happy sell</h6>
        </div>
        <div class="fe-box">
            <img src="images/f6.png" alt="">
             <h6>F24/7 Support</h6>
        </div>
        
        
    </section>

    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="images/f1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men Regular Fit Printed Slim Collar Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹400</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/f2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men Regular Fit Printed Slim Collar Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹320</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/f3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men Regular Fit Printed Slim Collar Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1300</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/F4.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men Regular Fit Printed Slim Collar Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹900</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/f5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men Regular Fit Printed Slim Collar Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹980</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/f6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men Slim Fit Solid Mandarin Collar Casual Shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹899</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/f7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Women Regular Fit light Green Pure Cotton Trousers</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹769</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Casual Regular Sleeves Printed Women Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>


            <div class="pro">
                <img src="images/img.kpj.png" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Men shirt</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1200</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="images/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="images/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="images/f8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹800</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

        </div>
    </section>

    <section id="banner" class="section-m1">
        <h4>Repair Service</h4>
        <h2>Up to<span> 70% off</span> - All t-shirts & accessories</h2>
        <button class="normal">Explore More</button>

    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="images/n1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹670</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/n2.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹908</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/n3.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1200</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/n1.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1350</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/n5.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1299</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/n6.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shorts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1300</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/n7.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1500</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="images/n8.jpg" alt="">
                <div class="des">
                    <span>Adidas</span>
                    <h5>Cartoon Astronaut Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1499</h4>
                </div>
                <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at ama-cart</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>spring/summer</h4>
            <h2>upcomming season</h2>
            <span>The best classic dress is on sale at ama-cart</span>
            <button class="white">Collection</button>
        </div>
    </section>

    <section id="banner3">
        <div class="banner-box">
            
            <h2>SEASONAL SALE</h2>
            <h3>Winter collection-50% OFF</h3>
           
        </div>
        <div class="banner-box banner-box2">
            
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>SPRING / Summer 2022</h3>
           
        </div>
        <div class="banner-box banner-box3">   
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>

    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4> Sign Up For Newsletters</h4>
            <p> Get E-main updates about our latest shop and <span>special offers.</span>
            </p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal"><a href="index1.php">sign Up</a></button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="images/logo4.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong> 561 Bandra Road, Street 39, Mumbai</p>
            <p><strong>Phone: </strong> +91 7537 738  /(+91) 01 7358 9182</p>
            <p><strong>Hours: </strong> 10:00-18:00,Mon-Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Condition</a>
            <a href="#">Contact us</a>

        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlists</a>
            <a href="#">Track My Orders</a>
            <a href="#">Helps</a>
        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="images/app.jpg" alt="">
                <img src="images/play.jpg" alt="">
            </div>
            <p>Secured Payment Gateways</p>
            <img src="images/pay.png" alt="">
        </div>
    
        <div class="copyright">
            <p>@ 2021,Tech etc -HTML CSS Ecommerce Template</p>
        </div>

    </footer>

    
    <script src ="script.js"></script>
</body>
</html>
