<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Virgin Mary Church</title>
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script>
var jq = $.noConflict();
jq(document).ready(function(){
  jq("#LoginButton").click(function(){
    jq("#LoginBox").toggle('blind');
  });
});
</script>

<script>
//var jq = $.noConflict();
jq(function() {

	// grab the initial top offset of the navigation
	var sticky_navigation_offset_top = jq('#TourMenu').offset().top;
	
	// our function that decides weather the navigation bar should have "fixed" css position or not.
	var sticky_navigation = function(){
		var scroll_top = jq(window).scrollTop(); // our current vertical position from the top
		
		// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
		if (scroll_top > sticky_navigation_offset_top) {
			jq('#TourMenu').css({ 'position': 'fixed', 'top':0 });
			//jq('#TourMenu').css({ 'position': 'fixed', 'top':0, 'left':0 });
		} else {
			jq('#TourMenu').css({ 'position': 'relative'});
			//jq('#home').css({ 'padding': '148px 0 0' });
		}
	};
	
	// run our function on load
	sticky_navigation();
	
	// and run it again every time you scroll
	jq(window).scroll(function() {
		 sticky_navigation();
	});
	
	// NOT required:
	// for this demo disable all links that point to "#"
	jq('a[href="#"]').click(function(event){
		event.preventDefault();
	});
});
</script>

<script>
jq(document).ready(function(){

	// hide #back-top first
	jq("#back-top").hide();
	
	// fade in #back-top
	jq(function () {
		jq(window).scroll(function () {
			if (jq(this).scrollTop() > 313) {
				jq('#back-top').fadeIn();
			} else {
				jq('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		jq('#back-top a').click(function () {
			jq('body,html').animate({
				scrollTop: 0
			}, 800);
			window.sec="home";
			return false;
		});
	});

});
</script>

<script type="text/javascript">
window.sec="home";


function goToByScroll(idx){

   //if(window.clicks == 0)
   //{

		 // Reove "link" from the ID
		//window.clicks="no";
		 //id = id.replace("link", "");
		 var x=idx;
		 //window.sec=x;
		 //alert(window.sec);
		
		 var hei=jq("#"+idx).offset().top;
		
		
		
		if(x=="TourTwo")
		{
		//alert("sfdd");
		  if(window.sec!='home')
		  {
		  jq('html,body').animate({scrollTop: hei-67 },1000);
		  }
		  else
		  {
		    jq('html,body').animate({scrollTop: hei-134 },1000);
			window.sec="zz";
		  }
		
		}
		if(x=="TourThree")
		{
		  if(window.sec!='home')
		  {
		  jq('html,body').animate({scrollTop: hei-67 },1000);
		  }
		  else
		  {
		    jq('html,body').animate({scrollTop: hei-134 },1000);
			window.sec="zz";
		  }
		}
		if(x=="TourFour")
		{
		  if(window.sec!='home')
		  {
		  jq('html,body').animate({scrollTop: hei-67 },1000);
		  }
		  else
		  {
		    jq('html,body').animate({scrollTop: hei-134 },1000);
			window.sec="zz";
		  }
		}
		else
		{
		  // jq('html,body').animate({scrollTop: hei-150 },1000);
		}		
}	
		//var hei=jq("#"+id).offset().top;
		// Scroll	
		//jq('html,body').animate({scrollTop: hei-225 },2500);}
   // }
	//else if(window.clicks != 0)
	//{
	 // id = id.replace("link", "");
		// Scroll
	//	var hei=$("#"+id).offset().top
	//	$('html,body').animate({scrollTop: hei },2500);}
	//}
jq(document).ready(function(){

jq('#EPHESUS_FULL_DAY_TOURS').click(function () {
			jq('body,html').animate({
				scrollTop: 210
			}, 800);
			window.sec="home";
			return false;
		});

<!--================================================================================-->

	jq("#EPHESUS_HALF_DAY_TOURS").click(function(e) {
          // Prevent a page reload when a link is pressed
        e.preventDefault();
          // Call the scroll function
		
        goToByScroll("TourTwo");
    });
<!--================================================================================-->	
	jq("#EPHESUS_AND_THE_HOUSE_OF_VIRGIN_MARY").click(function(e) {
          // Prevent a page reload when a link is pressed
        e.preventDefault();
          // Call the scroll function
        goToByScroll("TourThree");
    });
<!--================================================================================-->	
	jq("#EPHESUS_TERRACE_HOUSES_TOURS").click(function(e) {
          // Prevent a page reload when a link is pressed
        e.preventDefault();
          // Call the scroll function
        goToByScroll("TourFour");
    });
<!--================================================================================-->	
	
<!--================================================================================-->
	
});
</script>

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

<p id="EphesusTursTitle">Ephesus Tours</p>

<div id="TourMenu">
	  <ul>
	     <li><a href="#" id="EPHESUS_FULL_DAY_TOURS">EPHESUS FULL DAY TOURS</a></li>
		 <li><a href="#" id="EPHESUS_HALF_DAY_TOURS">EPHESUS HALF DAY TOURS</a></li>
		 <li><a href="#" id="EPHESUS_AND_THE_HOUSE_OF_VIRGIN_MARY">EPHESUS AND THE HOUSE OF VIRGIN MARY</a></li>
		 <li><a href="#" id="EPHESUS_TERRACE_HOUSES_TOURS">EPHESUS & TERRACE HOUSES TOURS</a></li>
	  </ul>
</div>

 <div id="EphesusTursBox">
 
	<div id="TourOne" class="Tours">
	   <p>EPHESUS FULL DAY TOURS</p>
	   - Pick-up from the Kusadasi Port or from your hotel<br />
- Drive to the House of Virgin Mary, after the visit the Ephesus ancient city<br />
- After the lunch break, drive to the Temple of Artemis<br />
Then to the Basilica of St. John
- By the end of the tour drive back to Kusadasi Port<br />
or to your hotel.<br /><br />

Duration: 7 hours<br /><br />

Lunch: during the tour is included.<br />
Places to Visit:<br />
- Ancient City of Ephesus<br />
- Temple of Artemis<br />
- House of Mother Mary<br />
- St. John’s Basilica.<br /><br />

Tour Rates  :<br /><br />

Min.2 – 4 Pax            90 USD Per Person<br />
Min.5 – 8 Pax         75 USD Per Person<br />
Min.9- 12 Pax           68 USD Per Person<br />
Min.13 – 16 Pax     60 USD Per Person<br />
Min. 17+                     52 USD Per Person<br />
Rates Included:<br /><br />

- The tour includes the professional licensed tour guide, all entrance fees, private air-conditioned transportation and VAT.<br />
- Approximate time to reach to Ephesus is 20 minutes.<br />
- As the number of participant increases the certain amount of discount will be applied.<br />
- Please contact us for your group requests.<br />
- Children 0-6 ages are free.<br />
- The price is valid during the year 2012.<br />
	</div>
	<hr />
	<section id="TourTwo" class="Tours">
	   <p>EPHESUS FULL DAY TOURS</p>
	   - Pick-up from the Kusadasi Port or from your hotel<br />
- Drive to the House of Virgin Mary, after the visit the Ephesus ancient city<br />
- After the lunch break, drive to the Temple of Artemis<br />
Then to the Basilica of St. John
- By the end of the tour drive back to Kusadasi Port<br />
or to your hotel.<br /><br />

Duration: 7 hours<br /><br />

Lunch: during the tour is included.<br />
Places to Visit:<br />
- Ancient City of Ephesus<br />
- Temple of Artemis<br />
- House of Mother Mary<br />
- St. John’s Basilica.<br /><br />

Tour Rates  :<br /><br />

Min.2 – 4 Pax            90 USD Per Person<br />
Min.5 – 8 Pax         75 USD Per Person<br />
Min.9- 12 Pax           68 USD Per Person<br />
Min.13 – 16 Pax     60 USD Per Person<br />
Min. 17+                     52 USD Per Person<br />
Rates Included:<br /><br />

- The tour includes the professional licensed tour guide, all entrance fees, private air-conditioned transportation and VAT.<br />
- Approximate time to reach to Ephesus is 20 minutes.<br />
- As the number of participant increases the certain amount of discount will be applied.<br />
- Please contact us for your group requests.<br />
- Children 0-6 ages are free.<br />
- The price is valid during the year 2012.<br />
	</section>
	<hr />
	<section id="TourThree" class="Tours">
	   <p>EPHESUS FULL DAY TOURS</p>
	   - Pick-up from the Kusadasi Port or from your hotel<br />
- Drive to the House of Virgin Mary, after the visit the Ephesus ancient city<br />
- After the lunch break, drive to the Temple of Artemis<br />
Then to the Basilica of St. John
- By the end of the tour drive back to Kusadasi Port<br />
or to your hotel.<br /><br />

Duration: 7 hours<br /><br />

Lunch: during the tour is included.<br />
Places to Visit:<br />
- Ancient City of Ephesus<br />
- Temple of Artemis<br />
- House of Mother Mary<br />
- St. John’s Basilica.<br /><br />

Tour Rates  :<br /><br />

Min.2 – 4 Pax            90 USD Per Person<br />
Min.5 – 8 Pax         75 USD Per Person<br />
Min.9- 12 Pax           68 USD Per Person<br />
Min.13 – 16 Pax     60 USD Per Person<br />
Min. 17+                     52 USD Per Person<br />
Rates Included:<br /><br />

- The tour includes the professional licensed tour guide, all entrance fees, private air-conditioned transportation and VAT.<br />
- Approximate time to reach to Ephesus is 20 minutes.<br />
- As the number of participant increases the certain amount of discount will be applied.<br />
- Please contact us for your group requests.<br />
- Children 0-6 ages are free.<br />
- The price is valid during the year 2012.<br />
	</section>
	<hr />
	<section id="TourFour" class="Tours">
	   <p>EPHESUS FULL DAY TOURS</p>
	   - Pick-up from the Kusadasi Port or from your hotel<br />
- Drive to the House of Virgin Mary, after the visit the Ephesus ancient city<br />
- After the lunch break, drive to the Temple of Artemis<br />
Then to the Basilica of St. John
- By the end of the tour drive back to Kusadasi Port<br />
or to your hotel.<br /><br />

Duration: 7 hours<br /><br />

Lunch: during the tour is included.<br />
Places to Visit:<br />
- Ancient City of Ephesus<br />
- Temple of Artemis<br />
- House of Mother Mary<br />
- St. John’s Basilica.<br /><br />

Tour Rates  :<br /><br />

Min.2 – 4 Pax            90 USD Per Person<br />
Min.5 – 8 Pax         75 USD Per Person<br />
Min.9- 12 Pax           68 USD Per Person<br />
Min.13 – 16 Pax     60 USD Per Person<br />
Min. 17+                     52 USD Per Person<br />
Rates Included:<br /><br />

- The tour includes the professional licensed tour guide, all entrance fees, private air-conditioned transportation and VAT.<br />
- Approximate time to reach to Ephesus is 20 minutes.<br />
- As the number of participant increases the certain amount of discount will be applied.<br />
- Please contact us for your group requests.<br />
- Children 0-6 ages are free.<br />
- The price is valid during the year 2012.<br />
	</section>
	<hr />
 </div>

</div>

<?php include('footer.php');?>
<p id="back-top"><a href="#top"><span></span>Back to Top</a></p>
</body>
</html>