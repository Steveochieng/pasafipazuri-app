

<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
     <script src="js/isotope.js"></script>
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
  
}
</style>
</head>
<body>

<style>
 body{
    
    background-image:url(images/ff.jpg);
    background-repeat:no-repeat;
    background-size:cover;
      
  }
.container{
    width:800px;
    padding-right: 0px;
    padding-left: 0px;
  
}
  
.gallery{
    background-color: #000;
    width:800px;
}
/*
.gallery h1{
    background-color: #000;
}*/

.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}
</style>

 <div class="container gallery">

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
        <div class="row">

            <h1 class="gallery-title">Gallery</h1>
       
        <br/>



            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter sprinkle">
                <img src="images/one.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter hdpe">
                <img src="images/grafiti.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter sprinkle">
                <img src="images/two.jpg" class="img-responsive">
            </div>

             <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter sprinkle">
                <img src="images/three.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter hdpe">
                <img src="images/four.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter hdpe">
                <img src="images/nai.jpg" class="img-responsive">
            </div>

             

             <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter hdpe">
                <img src="images/train.jpg" class="img-responsive">
            </div>

           

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter irrigation">
                <img src="images/five.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12  filter sprinkle">
                <img src="images/six.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter sprinkle">
                <img src="images/seven.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12  filter irrigation">
                <img src="images/eight.jpg" class="img-responsive">
            </div>

            <div class="gallery_product col-lg-6 col-md-6 col-sm-12 col-xs-12 filter sprinkle">
                <img src="images/happy.jpg" class="img-responsive">
            </div>


             <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">All</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">DONE PROJECT</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">PENDING PROJECTS</button>
        
            
        </div>
        </div>
    </div>
    </div>
</section>



</body>
</html>