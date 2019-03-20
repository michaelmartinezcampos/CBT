<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>cbt</title>
  <meta name="description" content="cbt tool">
  <meta name="author" content="mmc">
  <!--<link rel="stylesheet" href="css/styles.css">-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
  <script type="text/javascript">
	$(function(){
	     $('li').hover(function(){
	          $(this).addClass('highlight');
	      }, function(){
	          $(this).removeClass('highlight');
	      });

	      $('li').click(function(){
	      	console.log("clicked");
	     $('li').removeClass('highlight_stay');
	     $(this).addClass('highlight_stay');
		});
		});	
	</script>

   <script type="text/javascript">
		$(function(){
				// Select all links with hashes
	$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
      }
    }
  });
		}
   </script>
  
  <style type="text/css">
  	  body{ background: #F9E6E6; }
	  ul {list-style: none;}
	  li{
	  	margin: 0px 0px 0px -36px;
	  	padding: 30px 0px 30px 30px;
	  	color: white;
	  	margin: 10px 10 10 0;
	  	font-size: 25px;
		background:  #f7dada;}
	  /*li:nth-child(odd) { background: #f7dada; } */
	/*  li:hover{ opacity: .1; } */
	  .highlight, .highlight_stay{ opacity: 1.5; background: #85E5E5;}

	  .mdl-textfield{width: 454px;}
	  html, .mdl-textfield--floating-label, .is-focused, .is-upgraded{color: white};
	  .is-focused{color:white;}
	  .is-upgraded{color:white;}
	  .mdl-textfield__input{
    border-bottom: 1px solid #fff;


}

.mdl-textfield__label{
    color: #fff;
}

 	a {color: white; text-decoration: none;}

 	div{margin-top: 50%;}
 	h5{font-weight: 300;}
  </style>
  
  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>
<div class="mdl-grid">
	<div class="mdl-cell mdl-cell--4-offset mdl-cell--4-col">
		<form action="#">
				  
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="sample3">
			    <label class="mdl-textfield__label" for="sample3"><a href="#">What is your thought?</a></label>
			  </div>
		  <!--add skip link-->
		</form>

		<div class="percent-believed-before">
			<a href="#percent-believed-before"></a>
			<h5>Power meter believe</h5>
			<h5>Power meter effect</h5>
		</div>

		<div class"type-of-thought">
			<h4><a href="#type-of-thought"> What type of thought are you having?</a></h4>
			<!--accordion list, have it collapse when selection is made-->
			<ul>
				<li>
					Catastrophizing<!--icon needed-->
				</li>
				<li>
					Fortune telling<!--icon needed-->
				</li>
				<li>
					Mindreading<!--icon needed-->
				</li>
				<li>
					Blaming<!--icon needed-->
				</li>
				<li>
					Labeling<!--icon needed-->
				</li>
				<li>Magnification<!--icon needed-->
				</li>
				<li>
					Minimization<!--icon needed-->
				</li>
				<li>
					Emotional reasoning<!--icon needed-->
				</li>
			</ul>
		</div>

		

		<div class="what-would-your-friend-tell-you">
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="friend-tell-you">
			    <label class="mdl-textfield__label" for="sample3"><a href="#friend-tell-you"> What would your friend tell you about this thought?</label>
			  </div>
			</form>
		</div>

		<div class="what-would-you-tell-your-friend">
			<form action="#">
			  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			    <input class="mdl-textfield__input" type="text" id="tell-your-friend">
			    <label class="mdl-textfield__label" for="sample3"><a href="#tell-you-friend"> What would you tell your friend if they had this thought?</label>
			  </div>
			</form>
		</div>

		<div class="percent-believed-after">
			<h5><a href="#percent-believed-after">Power meter believe</a></h5>
			<h5>Power meter effect</h5>
		</div>
		<!--show snapping/bouncing tween of data sizes-->
		<!--Data viz thought-->
		<!--Data viz history
		instances of same thought, frequency, date, time
		need db-->
		<!--show thought journal-->
		<!--send reminders to user-->
		<!--single page application frameworks-->
		</div>

</div>  
</body>
</html>