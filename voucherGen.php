<?

/******************************************************************************
 * Init some variables with values from $_POST so we don't have to keep typing*
 * the full array list name whenever we want to use the values.               *
 * ****************************************************************************/

// $bkgImg		=	'/assets/img/' . $_POST['inBkgImg'];

$name		=	$_GET['name'];
$uid		=	$_GET['uid'];
$sitename = str_replace(' ','',$name);







/******************************************************************************
 * Build a page generator string using the values passed from form.           *
 ******************************************************************************/

$strOut	=	'<!DOCTYPE html>'
.   '<html lang="en">'
.   '<head>'
.   '<title> </title>'
.   '<meta charset="UTF-8">'
.   '<meta name="description" content="Civic - CV Resume">'
.   '<meta name="keywords" content="resume, civic, onepage, creative, html">'
.   '<meta name="viewport" content="width=device-width, initial-scale=1.0">'
.   '<link href="img/logo.png" rel="shortcut icon"/>'
.   '<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">'
.   '<link rel="stylesheet" href="order/generated/css/bootstrap.min.css"/>'
.   '<link rel="stylesheet" href="order/generated/css/font-awesome.min.css"/>'
.   '<link rel="stylesheet" href="order/generated/css/flaticon.css"/>'
.   '<link rel="stylesheet" href="order/generated/css/owl.carousel.css"/>'
.   '<link rel="stylesheet" href="order/generated/css/magnific-popup.css"/>'
.   '<link rel="stylesheet" href="order/generated/css/style.css"/>'
.   '</head>';




		

$strOut	=	$strOut
		.	'<body>'
		.   '<div id="preloder">'
		.   '<div class="loader"></div>'
		.   '</div>'
		.   '<div class="home-three-style">'
		.   '<div class="container-fluid p-0">'
		.   '<div class="row m-0">'
		.   '<div class="col-xl-5 col-lg-5 p-0">'
		.   '<div class="main-left-area h-100">'
		.   '<section class="intro-section">'
		.   '<figure class="hero-image">'
//		.   '<img src="img/headshot.jpg" alt="">'
		.   '</figure>'
		.   '<div class="hero-text">'
		.   '<h2 id="bigname"></h2>'
		.   '<p id="sbio"></p>'		
		.   '</div>'
		.   '<div class="hero-info pt-5">'
		.   '<h2>General Info</h2>'
		.   '<ul>'								
		.   '<li><span>E-mail: <p id="email"> </p> </span> </li>'  
		.   '<li><span>Phone: <p id="phone"> </p>  </span> </li>'
		.   '</ul>'
		.   '</div>'
		.   '</section>'
		.   '<div class="social-links">'
		.   '<p>Follow Me!</p>'						
		.   '<a target ="blank" href="https://www.instagram.com/ /?hl=en"><i class="fa fa-instagram"></i></a>'							
		.   '</div>'					
		.   '</div>'
		.   '</div>'
		.   '<section>'
		.   '<a href="index.html" target="blank"> '
		.   '<img src="img/sonderfye3.png" alt="" style="position: absolute; right: 0; top: 0; display: block; height: 115px; width: 115px; background: url(TRbanner.gif) no-repeat; text-indent: -999em; text-decoration: none;">'							
		.   '</a>'
		.   '</section>'
		.   '<div class="col-xl-6 col-lg-7">'
		.   '<div class="main-right-area">'		
		.   '<section class="resume-section spad pt-0">'
		.   '<div class="section-title">'
		.   '<h2>About Me</h2>'
		.   '</div>'
		.   '<ul class="resume-list">'
		.   '<li>'
		.   '<p id="lbio"> </p>'
		.   '</li>'									
		.   '</ul>'
		.   '</section>'
		.   '<section class="resume-section spad pt-0">'
		.   '<div class="section-title">'
		.   '<h2>Work Experience</h2>'
		.   '</div>'
		.   '<ul class="resume-list">'
		.   '<li>'
		.   '<p id="wexperience"> </p>'
		.   '</li>'
		.   '</ul>'
		.   '</section>'
		.   '<section class="resume-section spad pt-0">'
		.   '<div class="section-title">'
		.   '<h2>Volunteer Experience</h2>'
		.   '</div>'
		.   '<ul class="resume-list">'
		.   '<li>'
		.   '<p id="vexperience"> </p>'
		.   '</li>'						
		.   '</ul>'
		.   '</section>'				
		.   '<section class="resume-section spad pt-0">'
		.   '<div class="section-title">'
		.   '<h2>Achievements & Awards</h2>'
		.   '</div>'
		.   '<ul class="resume-list">'
		.   '<li>'
		.   '<p id="achievements"> </p>'
		.   '</li>'						
		.   '</ul>'
		.   '</section>'
		.   '</div>'
		.   '</div>'
		.   '</div>'
		.   '</div>'
		.   '</div>'
		.   '<p id="uid" hidden>' . $uid .  '</p>'
		.	'<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-app.js"></script>'
		. 	'<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-auth.js"></script>'
		. 	'<script src="https://www.gstatic.com/firebasejs/6.2.4/firebase-firestore.js"></script>'
		. 	'<script src="js/firebaseStuff.js"></script>'
		. 	'<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>'
		.   '<script src="order/generated/js/jquery-2.1.4.min.js"></script>'
		.   '<script src="order/generated/js/bootstrap.min.js"></script>'
		.   '<script src="order/generated/js/owl.carousel.min.js"></script>'
		.   '<script src="order/generated/js/magnific-popup.min.js"></script>'
		.   '<script src="order/generated/js/circle-progress.min.js"></script>'
		.   '<script src="order/generated/js/main.js"></script>'
		.   '</body>'
		.   '</html>';


	



	



		
/******************************************************************************
 * Create a text file to accept the output string					          *
 ******************************************************************************/
$f = fopen("$sitename.html", "w"); 
fwrite($f, $strOut); 
fclose($f);  


/******************************************************************************
 * Give some feedback and a test link                                         *
 ******************************************************************************/
//echo('<a href="' . $sitename . '.html">Click here</a> to test if the build worked.');
header("Location: " . $sitename . ".html");
exit;

?>



