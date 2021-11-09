<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Virgin Mary Church</title>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
var jq = $.noConflict();
jq(document).ready(function(){
  jq("#LoginButton").click(function(){
    jq("#LoginBox").toggle('blind');
  });
});
</script>
       
       <script src="js/modernizr.custom.js"></script>
       <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">
	<link rel="stylesheet" href="css/screen.css" media="screen"/>
	<link rel="stylesheet" href="css/lightbox.css" media="screen"/>
       
</head>

<body>
<?php include('header.php');?>
<?php include('login.php');?>

<div id="wrapper">
<?php

	if(isset($_SESSION['logedIn']))
	{
	  if($_SESSION['logedIn']=='1')
	  {
		echo '<div id="logBxesCntainer">';
			echo '<div id="showLgStusBox">
				  <form action="phpFunctions/logOutUser.php">
					Welcome'." ".$_SESSION['Name'].'<input type="submit" value="LogOut"/>
				  </form> 
				  </div>';
			echo '<div id="gtWwall">
				   <form action="writeOnWall.php">
					  Write a Wish on the Wall<input type="submit" value="Write a Wish"/>
				   </form>
				  </div>';
		echo '</div>';
	   }
	}
?>
  <p id="regTitle">Image Gallery</p>
  <div id="GalleryBox">
  
          <table style="margin:0 auto;">
             <tr>
                <td>
                   <a class="example-image-link" href="images/images/1.jpg" data-lightbox="example-1">
                 	   <img class="example-image" src="images/images/thumbs/1.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                	<a class="example-image-link" href="images/images/2.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/2.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
               		 <a class="example-image-link" href="images/images/3.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/3.jpg" alt="thumb-1" width="150" height="150"/>
           			 </a>
                </td>
                <td>
                    <a class="example-image-link" href="images/images/4.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/4.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                 	<a class="example-image-link" href="images/images/5.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/5.jpg" alt="thumb-1" width="150" height="150"/>
           			</a>
                </td>
             </tr>
             
             <tr>
               <td>
                	 <a class="example-image-link" href="images/images/6.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/6.jpg" alt="thumb-1" width="150" height="150"/>
           			 </a>
               </td>
                <td>
               		 <a class="example-image-link" href="images/images/7.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/7.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
               		 <a class="example-image-link" href="images/images/8.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/8.jpg" alt="thumb-1" width="150" height="150"/>
            		 </a>
                </td>
                <td>
                 	<a class="example-image-link" href="images/images/9.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/9.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                	<a class="example-image-link" href="images/images/10.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/10.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
             </tr>
             
             <tr>
               <td>
               		<a class="example-image-link" href="images/images/11.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/11.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
               </td>
                <td>
               		<a class="example-image-link" href="images/images/12.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/12.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
               		 <a class="example-image-link" href="images/images/13.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/13.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                	<a class="example-image-link" href="images/images/14.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/14.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                	<a class="example-image-link" href="images/images/15.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/15.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
             </tr>
             
             <tr>
                <td>
                	 <a class="example-image-link" href="images/images/16.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/16.jpg" alt="thumb-1" width="150" height="150"/>
           			 </a>
                </td>
                <td>
                	 <a class="example-image-link" href="images/images/17.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/17.jpg" alt="thumb-1" width="150" height="150"/>
           			 </a>
                </td>
                <td>
               		<a class="example-image-link" href="images/images/18.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/18.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                	<a class="example-image-link" href="images/images/19.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/19.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                	<a class="example-image-link" href="images/images/20.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/20.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
             </tr>
             
             <tr>
                <td>
                	<a class="example-image-link" href="images/images/21.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/21.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                	 <a class="example-image-link" href="images/images/22.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/22.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
               		<a class="example-image-link" href="images/images/23.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/23.jpg" alt="thumb-1" width="150" height="150"/>
            		</a>
                </td>
                <td>
                 	<a class="example-image-link" href="images/images/24.jpg" data-lightbox="example-1">
              			<img class="example-image" src="images/images/thumbs/24.jpg" alt="thumb-1" width="150" height="150"/>
           			</a>
                </td>
                <td>
                	<a class="example-image-link" href="images/images/25.jpg" data-lightbox="example-1">
             			 <img class="example-image" src="images/images/thumbs/25.jpg" alt="thumb-1" width="150" height="150"/>
           			</a>
                </td>
             </tr>
          </table>
            
            
            
            
            
            
            
            
            
            
            
  </div>
</div>

<?php include('footer.php');?>

<script src="js/jquery-1.10.2.min.js"></script>
	<script src="js/lightbox-2.6.min.js"></script>

	<script>
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-2196019-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	</script>

</body>
</html>