
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

   
</head>

<style>
  *{
    margin:0;
    padding:0; 
  }

  body{
    background:#808484; 
    background-image:url(images/ff.jpg);
    background-repeat:no-repeat;
    background-size:cover;
    padding:50px;   
  }
 .container{
  width:800px;
  background-color:black;
  padding:0px;  
 }
.wrapper ul{
  list-style: none; 
}
.wrapper ul li{
  width:75px;
  height:75px; 
  line-height:75px;
  margin: 0  10px;
  margin-left:40%;
  text-align:center;
  cursor:pointer;
  border-radius:50%;
  border:5px solid green;
  float:left;    
}
.wrapper ul li .fa{
  color: green;
  margin-top:20px; 
  transition: all 0.5s ease;
}

.wrapper ul li:hover:nth-child(1){
  border:5px solid #fff;
  box-shadow: 0 0 15px #fff;
  transition: all 0.5s ease;
}
.wrapper ul li:hover .fa-user-circle-o{
  color:#fff; 
  text-shadow: 0 0 15px#fff;
}


.wrapper ul li:hover:nth-child(2){
  border:5px solid #fff;
  box-shadow: 0 0 15px #fff;
  transition: all 0.5s ease;
}
.wrapper ul li:hover .fa-comments{
  color:#fff; 
  text-shadow: 0 0 15px #fff;
}

.wrapper ul li:hover:nth-child(3){
  border:5px solid #fff;
  box-shadow: 0 0 15px #fff;
  transition: all 0.5s ease;
}
.wrapper ul li:hover .fa-picture-o{
  color:#fff; 
  text-shadow: 0 0 15px #fff;
}

.wrapper ul li:hover:nth-child(4){
  border:5px solid #fff;
  box-shadow: 0 0 15px #fff;
  transition: all 0.5s ease;
}
.wrapper ul li:hover .fa-calendar{
  color:#fff; 
  text-shadow: 0 0 15px #fff;
}

.wrapper ul li:hover:nth-child(5){
  border:5px solid #fff;
  box-shadow: 0 0 15px #fff;
  transition: all 0.5s ease;
}
.wrapper ul li:hover .fa-cog{
  color:#fff; 
  text-shadow: 0 0 15px #fff;
}
.wrapper ul li:hover:nth-child(6){
  border:5px solid #fff;
  box-shadow: 0 0 15px #fff;
  transition: all 0.5s ease;
}
.wrapper ul li:hover .fa-users{
  color:#fff; 
  text-shadow: 0 0 15px #fff;
}

.fa-user-circle-o:before {
    content: "\f2be";
    width:100%; 
}

</style>


<body>

<style >
  /*
inspired from http://codepen.io/Rowno/pen/Afykb
& https://jsfiddle.net/q0rgL8ws/
*/
.carousel-fade .carousel-inner .item {
  opacity: 0;
  transition-property: opacity;
    overflow:hidden;
}
.item.active img {
    transition: transform 5000ms linear 0s;
    /* This should be based on your carousel setting. For bs, it should be 5second*/
    transform: scale(1.05, 1.05);
}
.carousel-fade .carousel-inner .active {
  opacity: 1;
}

.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  opacity: 0;
  z-index: 1;
}

.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}

.carousel-fade .carousel-control {
  z-index: 2;
}

/*
WHAT IS NEW IN 3.3: "Added transforms to improve carousel performance in modern browsers."
now override the 3.3 new styles for modern browsers & apply opacity
*/
@media all and (transform-3d), (-webkit-transform-3d) {
    .carousel-fade .carousel-inner > .item.next,
    .carousel-fade .carousel-inner > .item.active.right {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.prev,
    .carousel-fade .carousel-inner > .item.active.left {
      opacity: 0;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
    .carousel-fade .carousel-inner > .item.next.left,
    .carousel-fade .carousel-inner > .item.prev.right,
    .carousel-fade .carousel-inner > .item.active {
      opacity: 1;
      -webkit-transform: translate3d(0, 0, 0);
              transform: translate3d(0, 0, 0);
    }
}

</style>

<div class="container">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
   
    <!-- Carousel items -->
    <div class="carousel-inner carousel-zoom">
        <div class="active item"><img class="img-responsive" src="https://images.unsplash.com/photo-1419064642531-e575728395f2?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item"><img class="img-responsive" src="https://images.unsplash.com/photo-1445280471656-618bf9abcfe0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
            
          </div>
        </div>
        <div class="item"><img class="img-responsive" src="https://images.unsplash.com/photo-1445462657202-a0893228a1e1?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
           
          </div>
        </div>
       </div>
    <!-- Carousel nav -->
    
</div>
</div>
 

<div class="container">
<div class="wrapper">

<ul>
   <a href="profile.php">
   <div class="col-md-6" style="border-right:solid 1px #fff;" >
   <li><i class="fa fa-user-circle-o" aria-hidden="true"></i></li>
   <hr style="margin-top:90px;">
   </div>
   </a>
   

   <a href="chat.php">
   <div class="col-md-6">
   <li><i class="fa fa-comments" aria-hidden="true"></i></li>
   <hr style="margin-top:90px;">
   </div>
   </a>

   <a href="gallery.php">
   <div class="col-md-6" style="border-right:solid 1px #fff;">
   <li><i class="fa fa-picture-o" aria-hidden="true"></i></li>
   <hr style="margin-top:90px;">
   </div>
   </a>

   <a href="calendar.php">
   <div class="col-md-6">
   <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
   <hr style="margin-top:90px;">
   </div>
   </a>
   
   <a href="change password.php">
   <div class="col-md-6" style="border-right:solid 1px #fff;">
   <li><i class="fa fa-cog" aria-hidden="true"></i></li>
   <hr style="margin-top:90px;">
   </div>
   </a>

   <a href="tribute.php">
   <div class="col-md-6">
   <li><i class="fa fa-users" aria-hidden="true"></i></li>
   <hr style="margin-top:90px;">
   </div>
   </a>

</ul>
</div>
</div>
    


 
</body>
</html>