<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document
   </title>


   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Josefin Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link href="/path/to/bootstrap.css" rel="stylesheet" />
<script src="/path/to/jquery.js"></script>
<script src="/path/to/bootstrap.js"></script>
<script src="/path/to/regular.js"></script>
<script src="/path/to/fontawesome.js"></script>
<script src="/path/to/datepicker-bs4.js"></script>
 
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CustomSuperKicks</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>


       
     
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/joota.jpg" alt="facial" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Facial  </h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/shoess.jpg" alt="haircut" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Haircut</h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/pedicuree.jpg" alt="pedicure" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Pedicure</h3>
        <p></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-2">
<h3 class="text-center">About us</h3>
</div>
<div class="container-fluid">

<div class="row">
  <div class=" col-lg-6 col-md-6 col-12 ">
    <img src="images/salon.jpeg" class="img-fluid aboutimg">

  </div>
  <div class=" col-lg-6 col-md-6 col-12 ">
    <h2 class="display-6">We are petals salon & spa</h2>
    <p class="py-3">                   Lorem ipsum dolor sit amet consectetur adipisicing elit. I
      nventore harum amet velit nihil nam suscipit maxime corporis in, labore exerci
      tationem natus quos, ab, asperiores incidunt!</p>
      <a href="about.php" class="btn btn-success">check more</a>
      </div>
</div>
</div>
</section>
<section class = "my-5">
<div class = "py-5">
<h2 class="text-center"> Our Services</h3>
</div>
<div class= "container-fluid">
  <div class= "row">
     <div class= "col-lg-4 col-md-4 col-12">
     <div class="card">
  <img class="card-img-top" src="images/facial.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Facial</h4>
    <p class="card-text">Soothing facial for a refreshing look</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  
</div>
<div class= "col-lg-4 col-md-4 col-12">
     <div class="card">
  <img class="card-img-top" src="images/massage.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Massage</h4>
    <p class="card-text">Relax your muscles with our professional team of masseuse</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
  
</div>

</div>
<div class= "col-lg-4 col-md-4 col-12" >
     <div class="card">
  <img class="card-img-top" src="images/cutt.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Haircut</h4>
    <p class="card-text">Give yourself a professional haircut</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>
  
</div>

</section>
 

<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">BOOK AN APPOINTMENT</h2>
  </div>
  <div class="w-50 m-auto"> 
    <form action="userinfo.php" method="post">    
      <div class ="form-group">
        <label>Name </label>
        <input type="text" name="name" autocomplete="off" class="form-control">

      </div>
      
    <form action="userinfo.php" method="post">    
      <div class ="form-group">
        <label>Email ID </label>
        <input type="text" name="email" autocomplete="off" class="form-control">

      </div>
  
    <form action="userinfo.php" method="post">    
      <div class ="form-group">
        <label>Mobile </label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">

      </div>
        
      <div class ="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comments">
     </textarea>
     

      </div>
      <button type="submit" class="btn btn-success">Submit</button>
      
  </div>
  </section>
  <footer>
    <p class="p-3 bg-dark text-white text-center">@petalsalonspa</p>
  </footer>












<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js">
  </script>
    
</body>
</html>