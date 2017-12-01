<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/animate.css">
  <script src="js/jjquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>


.navbar {
  overflow: hidden;
  background-color: green;
  position: scroll;
  top: 0;
  width: 100%;
  padding-right: 0px;
  padding-left: 0px;
  border-radius: 0px;
 margin-bottom: 0px;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;

}
.navbar a:hover{
    background-color: black;
}

.main {
  padding: 16px;
  padding-right: 0px;
  padding-left: 0px;
  padding-top: 0px;
  
}
</style>
</head>
<body style="background-image:url(images/ff.jpg);
    background-repeat:no-repeat;
    background-size:cover;
     " >
  
  

<div class="container" id="con">

<div class="navbar">
  <a href="home.php">Home</a>
  <a href="chat.php">Chat</a>
  <a href="profile.php">Profile</a>
  <a href="gallery.php">Gallery</a>
  <a href="calendar.php">Calender</a>
  <a href="tribute.php">Tribute</a>
  <a href="setting.php">Settings</a>
  <a href="index.php" style="float: right;">logout</a>

</div>

<div class="main">
<div class="col-md-12">
<div class="row">

<video width="100%" height="" controls>
  <source src="videos/vida.mp4" type="video/mp4">
</video>

<hr>

  <div class="gal">

  <figure class="snip1166">
  <img src="images/phyllis.jpg" alt="">
  <figcaption>
    <h3>PHYLLIS OTIENO </h3>
    <div>
      <p>Your own mileage may vary. </p>
    </div><a href="#"></a>
  </figcaption>
</figure>

  
    <figure class="snip1166">
  <img src="images/dena.jpg" alt="">
  <figcaption>
    <h3>FAZUL DENA </h3>
    <div>
      <p>Your own mileage may vary. </p>
    </div><a href="#"></a>
  </figcaption>
</figure>
  

  <!-- 
    <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt=""> -->
   <!--  
    <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt=""> -->

    <figure class="snip1166">
  <img src="images/maggy.jpg" alt="">
  <figcaption>
    <h3>MAGGY NDICHU</h3>
    <div>
      <p>Your own mileage may vary. </p>
    </div><a href="#"></a>
  </figcaption>
</figure>
  


    <figure class="snip1166">
  <img src="images/yvonne.jpg" alt="">
  <figcaption>
    <h3>YVONNE OSAWA </h3>
    <div>
      <p>Your own mileage may vary. </p>
    </div><a href="#"></a>
  </figcaption>
</figure>
  
      
   <!--  <img src="https://preview.ibb.co/mysOxk/3.jpg" alt=""> -->
       
   <!--  <img src="https://preview.ibb.co/i0PmHk/1.jpg" alt=""> -->

   <figure class="snip1166">
  <img src="images/stephen.jpg" alt="">
  <figcaption>
    <h3>STEPHEN OCHI</h3>
    <div>
      <p> success comes when every body want change </p>
    </div><a href="#"></a>
  </figcaption>
</figure>
  
        
 <!--    <img src="https://preview.ibb.co/mWpE3Q/2.jpg" alt=""> -->
          
  </div>
  
</div>
</div>
</div>

<style>.gal {
    
  -webkit-column-count: 3; /* Chrome, Safari, Opera */
    -moz-column-count: 3; /* Firefox */
    column-count: 3;
     background-color: #000;
    
  } 
  .gal img{ width: 100%; padding: 7px 0;}
@media (max-width: 500px) {
    
    .gal {
  
  -webkit-column-count: 1; /* Chrome, Safari, Opera */
    -moz-column-count: 1; /* Firefox */
    column-count: 1;

  }
    
  }

 @import url(https://fonts.googleapis.com/css?family=Raleway:400,500,800);
figure.snip1166 {
  font-family: 'Raleway', Arial, sans-serif;
  color: #fff;
  position: relative;
  float: left;
  margin: 10px 1.5%;
  min-width: 210px;
  max-width: 300px;
  max-height: 220px;
  width: 100%;
  background: #ffffff;
  color: #000000;
  text-align: left;
}
figure.snip1166 * {
  -webkit-box-sizing: padding-box;
  box-sizing: padding-box;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
figure.snip1166 img {
  opacity: 1;
  width: 100%;
  vertical-align: top;
  -webkit-transition: opacity 0.4s;
  transition: opacity 0.4s;
}
figure.snip1166 figcaption {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
figure.snip1166 figcaption > div {
  height: 70%;
  overflow: hidden;
  width: 100%;
  position: absolute;
  bottom: 0;
}
figure.snip1166 h3,
figure.snip1166 p {
  margin: 0;
  position: absolute;
  right: 0;
}
figure.snip1166 h3 {
  padding: 0 30px 0 15px;
  color: #ffffff;
  background-color: #1a1a1a;
  display: inline-block;
  font-weight: 400;
  line-height: 40px;
  text-transform: uppercase;
  top: 30%;
  right: 0;
  left: 30px;
  z-index: 1;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
}
figure.snip1166 h3 span {
  font-weight: 400;
}
figure.snip1166 h3:after,
figure.snip1166 h3:before {
  border-style: solid;
  content: '';
  position: absolute;
  left: 100%;
}
figure.snip1166 h3:after {
  border-width: 40px 0 0 12px;
  border-color: transparent transparent transparent #1a1a1a;
  top: 0;
}
figure.snip1166 h3:before {
  border-width: 12px 12px 0 0;
  border-color: #000000 transparent transparent transparent;
  top: 100%;
}
figure.snip1166 p {
  padding: 8px 45px;
  opacity: 0;
  font-size: 0.9em;
  font-weight: 500;
  left: 0;
  -webkit-transform: translate3d(0%, -150%, 0);
  transform: translate3d(0%, -150%, 0);
  -webkit-transition-delay: 0s;
  transition-delay: 0s;
}
figure.snip1166 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
}
figure.snip1166.blue h3 {
  background-color: #2980b9;
}
figure.snip1166.blue h3:after {
  border-color: transparent transparent transparent #2980b9;
}
figure.snip1166.blue h3:before {
  border-color: #123851 transparent transparent transparent;
}


figure.snip1166:hover img,
figure.snip1166.hover img {
  opacity: 0.3;
  -webkit-filter: grayscale(100%);
  filter: grayscale(100%);
}
figure.snip1166:hover figcaption h3,
figure.snip1166.hover figcaption h3 {
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
}
figure.snip1166:hover figcaption p,
figure.snip1166.hover figcaption p {
  opacity: 0.8;
  -webkit-transform: translateY(0);
  transform: translateY(0);
}
#con{
  max-width: 900px;
}
 



  </style>  

  
</div>

<script>  /* Demo purposes only */
  $(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );</script>




</body>
</html>