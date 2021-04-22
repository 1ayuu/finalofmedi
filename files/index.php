<!DOCTYPE html>
<html>
<head>
	<title>Medical Archive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width:50%;
    height:50%;
    display: block;
  margin-left: auto;
  margin-right: auto;
   padding-top: 25px;
  }
  body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.hero-image {
  background-image: url("6.jpg");
    /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  background-color: #cccccc;
  height: 900px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  padding-top: 25px;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}
.avatar {
  vertical-align: middle;
  
  border-radius: 50%;
}
  </style>
</head>
<body>
<div class="hero-image"></div>
  <div class="hero-text"><h1> <center>Medical Archive</center></h1>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="8.jpg" alt="" width="900" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="7.jpg" alt="Chicago" width="900" height="500">
      <div class="carousel-caption">
        <h3></h3>
        <p>!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="6.jpg" alt="New York" width="900" height="500">
      <div class="carousel-caption">
        <h3></h3>
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

  <img src="lock.jpg"   height="5%" width="10%" border-radius="50%" 
 alt="Avatar" >

	<form action="process.php" method="POST">
	
  <input type="password" placeholder="Password" name="password"  required/>
	<input type="submit" value="Login" />

</form>

  </center>

</body>
</html>