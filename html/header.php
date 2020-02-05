<!Doctype html>

<html>

<html lang="en">

    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/headerfooter.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    <header class="clearfix" style="padding:0;">

<!-- top-----navbar -->
  <nav class="navbar navbar-expand-md topline" style="padding:0;background-color:#e40046;">

      <ul class="navbar-nav nav-flex-icons mr-auto">
       
   <li class="nav-item">
            <a class="nav-link" href="https://www.facebook.com/rumvidyalayajaunpur" target="_blank">
                 <i class="fab fa-facebook-square"></i>
              </a>
        </li>

          <li class="nav-item">
            <a class="nav-link" href="https://api.whatsapp.com/send?phone=+91-9415976556"  target="_blank">
              <i class="fab fa-whatsapp"></i>
            </a>
          </li>
          </ul>
           <ul class="navbar-nav nav-flex-icons">
           <li class="nav-item ml-auto">
            <a class="nav-link" href="tel:+91-9415976556">
              <i class="fa fa-phone"> +91-9415976556</i>
            </a>
               
          </li>
        
     </ul>
          <ul class="navbar-nav nav-flex-icons">
        
                <li class="nav-item">
            <a class="nav-link" href="mailto:shitala.pd.shukla@gmail.com">
              <i class="fa fa-envelope"> shitala.pd.shukla@gmail.com</i>
            </a>
          </li>
        
     </ul>
      

</nav>      
     
        
        <div class="d-flex justify-content-center p-2" style="padding:0;background-color:#E7717D;"><a href="/index.php"><img src="../images/logo.png" style="width:600px;" class="img-fluid"></a></div>   
        <!-- navbar -->
 
<nav class="navbar navbar-expand-md menu navbar-dark" style="padding:0;">
 
 
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav" style="margin:0;">
 
<span class="navbar-toggler-icon"></span>
 
</button>
 
<div class="collapse navbar-collapse justify-content-center" id="nav">
 
<ul class="navbar-nav">
 
<li class="nav-item" >
 
<a class="nav-link text-light font-weight-bold px-3" href="/index.php">Home</a>
 
</li>
 
<li class="nav-item" >
 
<a class="nav-link text-light font-weight-bold px-3" href="/html/About.php">About Us</a>
 
</li>

 <li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="/html/Mission.php">Our Mission</a>
 
</li><li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="/html/Academics.php">Academics</a>
 
</li><li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="/html/Sports.php">Sports</a>
 
</li>
<li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="/html/Gallery.php">Gallery</a>
 
</li>
<li class="nav-item">
 
<a class="nav-link text-light font-weight-bold px-3" href="/html/Contact.php">Contact Us</a>
 
</li>

 
</ul>
 

</div>

 

</nav>
    </header>
       
 <a id="back-to-top" href="#" class="btn btn-lg back-to-top" role="button"><i class="fa fa-arrow-circle-up" style="color:#E7717D;font-size:25px;"></i></a>
    
    
    <script>
        $(document).ready(function(){
	$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('#back-to-top').fadeIn();
			} else {
				$('#back-to-top').fadeOut();
			}
		});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
});
    </script>
</body>
</html>