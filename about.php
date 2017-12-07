<?php require'header.php'; ?>

	<!-- PAGE TITLE -->
	<!-- Put your image here on the "style" -->
	<div class="fullwidth-container image" style="background: url(img/preview_images/top-about.jpg);">
		<div class="parallax-overlay parallax-overlay-pattern"></div>
		<div class="container">

        	<div class="pageTitle sixteen columns">
            	<h1 class="page_title">About us</h1>
                <h2 class="secondaryTitle">Know more about us and our club.</h2>
            </div>
        </div>
    </div>
        
    <!-- START: FULL CONTENT -->	
	<div class="entry-content">

        <!-- BEGIN: WELCOME SECTION -->
        <div class="container">
        	
        	<!-- BEGIN: EIGHT COLUMNS -->
        	<div class="eight columns">
            	
            	<!-- Begin Text -->
				<h1>Welcome to <span class="text_color">GNIOT-TechClub.</span></h1>
                <br/>
                <p>GNIOT TechClub is the first ever Official Tech Club of Greater Noida Institute of Technology. This Club is established as a direct result of growing interest of students in technical field.
                    It has proved to be an immaculate representation of the passion that the budding engineers of GNIOT have for technology. The organizing committee of the GNIOT TechClub creates memorable moments for all. The club got an overwhelming response from students. The Club's objective is to provide a platform to students to develop and showcase technical prowess.</p>
				
				<br/>
				<div class="main_cols container">
					
					<!-- Begin Numerical Increment 1 - ONE THIRD COLUM -->
                    <div class="one-third column">
                        <div>
                            <div class="numericals">
                                <script type="text/javascript">
                                    var today = new Date();
                                    jQuery(window).load(function () {
                                        if (isScrolledIntoView("numerical-4")) {
                                            jQuery('#numerical-4').removeClass('notinview');
                                            incrementNumerical('#numerical-4', '+today.getHours()+', 5);
                                        }
                                    });
                                    jQuery(window).scroll(function () {
                                        if (jQuery('#numerical-4.notinview').length) {
                                            if (isScrolledIntoView("numerical-4")) {
                                                jQuery('#numerical-4').removeClass('notinview');
                                                incrementNumerical('#numerical-4','+today.getHours()+', 5);
                                            }
                                        }
                                    });
                                </script>
                                <div class="numerical-container">
                                    <div id="numerical-4" class="notinview">
                                        <div style="font-size:40px;" class="value left colored">0</div>
                                    </div>
                                    <div class="numerical-content left" style="line-height:.2px;">Hours of work</div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--End Numerical Increment 1 -->
					
					<!--Begin Numerical Increment 2 - ONE THIRD COLUM -->
                    <div class="one-third column">
                        <div>
                            <div class="numericals">
                                <script type="text/javascript">
                                    jQuery(window).load(function () {
                                        if (isScrolledIntoView("numerical-5")) {
                                            jQuery('#numerical-5').removeClass('notinview');
                                            incrementNumerical('#numerical-5', 36, 1);
                                        }
                                    });
                                    jQuery(window).scroll(function () {
                                        if (jQuery('#numerical-5.notinview').length) {
                                            if (isScrolledIntoView("numerical-5")) {
                                                jQuery('#numerical-5').removeClass('notinview');
                                                incrementNumerical('#numerical-5', 36, 1);
                                            }
                                        }
                                    });
                                </script>
                                <div class="numerical-container">
                                    <div id="numerical-5" class="notinview">
                                        <div style="font-size:40px;" class="value left">0</div>
                                    </div>
                                    <div class="numerical-content left" style="line-height:.2px;">Club Successfull Months</div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--End Numerical Increment 2 -->
					
					<!--Begin Numerical Increment 3 - ONE THIRD COLUM -->
                    <div class="one-third column">
                        <div>
                            <div class="numericals">
                                <script type="text/javascript">
                                    jQuery(window).load(function () {
                                        if (isScrolledIntoView("numerical-6")) {
                                            jQuery('#numerical-6').removeClass('notinview');
                                            incrementNumerical('#numerical-6', 250, 1);
                                        }
                                    });
                                    jQuery(window).scroll(function () {
                                        if (jQuery('#numerical-6.notinview').length) {
                                            if (isScrolledIntoView("numerical-6")) {
                                                jQuery('#numerical-6').removeClass('notinview');
                                                incrementNumerical('#numerical-6', 250, 1);
                                            }
                                        }
                                    });
                                </script>
                                <div class="numerical-container">
                                    <div id="numerical-6" class="notinview">
                                        <div style="font-size:40px;" class="value left">0</div>
                                    </div>
                                    <div class="numerical-content left" style="line-height:.2px;">Team members</div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!--End Numerical Increment 3 -->
                </div>
                <!-- END: INCREMENTS CONTAINER -->
           </div>
           <!-- END: EIGHT COLUMNS -->

           <!-- BEGIN: EIGHT COLUMNS -->
           <div class="eight columns">
                                    
                <!-- Begin Flexslider -->
				<div id="myslider-1" class="flexslider clearfix" style="max-height:300px;">
                    <ul class="slides">
					 	<!-- Begin Flexslider Image 1 -->
                        <li>
                            <a href='javascript:;'>
                                <img src='img/preview_images/about-1.jpg' alt=''>
                            </a>
                        </li>
						<!-- End -->
						<!-- Begin Flexslider Image 2 -->
                        <li>
                            <a href='javascript:;'>
                                <img src='img/preview_images/about-2.jpg' alt=''>
                            </a>
                        </li>
						<!-- End -->
						<!-- Begin Flexslider Image 3 -->
                        <li>
                            <a href='javascript:;'>
                                <img src='img/preview_images/about-3.jpg' alt=''>
                            </a>
                        </li>
						<!-- End -->
                    </ul>
                </div>
				<!-- End Flexslider -->
				
				<!-- Begin Flexslider script -->
                <script type="text/javascript">
                    jQuery(document).ready(function ($) {
                        $('#myslider-1').flexslider({
                            animation: "fade",
                            slideDirection: "vertical",
                            directionNav: true,
                            slideshowSpeed: 4500,
                            controlsContainer: '#myslider-1 .flex-container',
                            pauseOnAction: false,
                            pauseOnHover: true,
                            keyboardNav: false,
                            controlNav: true,
                            start: function (slider) {
                                $(slider).find('li').each(function () {
                                    if ($(this).children('a').href != "javascript:;") {
                                        $(this).children('a').children('img').click(function () {
                                            window.location = $(this).parent('a').attr('href');
                                            $(this).parent('a').attr('href', 'javascript:;');
                                        });
                                    }
                                });
                                $("#myslider-1 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                    'opacity': 1
                                }, 500);
                            },
                            after: function (slider) {
                                $("#myslider-1").find(".flex-direction-nav").click(function () {
                                    window.location = $("#myslider-1 .slides li").eq(slider.currentSlide).children("a").attr("href");
                                });
                                $("#myslider-1 .slides li").find(".flex-caption").each(function () {
                                    $(this).css('opacity', 0);
                                    if ($(this).parent().hasClass('clone')) {} else {
                                        $(this).animate({
                                            'opacity': 0
                                        }, 500);
                                    }
                                });
                                $("#myslider-1 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                    'opacity': 1
                                }, 500);
                            }
                        });
                    });
                </script>
				<!-- End Flexslider script -->
            </div>
            <!-- END: EIGHT COLUMNS -->
        </div>
        <!-- END: WELCOME SECTION -->
        
        <div class="white-space"></div>
        
        <div class="des-sc-dots-divider"></div>
        
        <div class="white-space"></div>
        
        <!-- BEGIN: TEAM SECTION -->
        <div class="container">
          <section id="team-2" class="shortcode-team sixteen columns">
            <!-- Team title-->
            <h2 class="team_header zaptitle" style="min-height:20px;"><span>Meet the Team</span></h2>
              <!-- Begin Team Member Row 2-->
              <div class='team-row 3' style="margin-top: 20px;">
                  
				  
				  <div class='team-member one-third column'>
                      <div class='teamimg'>
                          <img class='scale-with-grid' alt='B.L. Gupta' title='B.L. Gupta' src='img/team/vc.jpg'>
                      </div>
                      <div class='team_content'>
                          <h4 class='member_name'>Shri. B.L. Gupta</h4>
                          <p><span class="text_color">Chief Club Patron</span>
                          </p>
                          <hr />
                          <div class='socialdiv'>
                              <ul>
                                  <li><a href="" target='_blank' class='facebook' title='Facebook'></a></li>
                                  <li><a href="" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  
				  
				  
				  
				  <div class='team-member one-third column' style="margin: 0 2%;">
                      <div class='teamimg'>
                          <img class='scale-with-grid' alt='Dr. Rohit Garg' title='Dr. Rohit Garg' src='img/team/rohit.jpg'>
                      </div>
                      <div class='team_content'>
                          <h4 class='member_name'>Dr. Rohit Garg</h4>
                          <p><span class="text_color">Club Patron</span>
                          </p>
                          <hr />
                          <div class='socialdiv'>
                              <ul>
                                  <li><a href="" target='_blank' class='facebook' title='Facebook'></a></li>
                                  <li><a href="" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  
				  
				  <div class='team-member one-third column' style="margin-right: -3%;">
                      <div class='teamimg'>
                          <img class='scale-with-grid' alt='Dr.Rajdev Tiwari' title='Dr.Rajdev Tiwari' src='img/team/rajdevtiwari.jpg'>
                      </div>
                      <div class='team_content'>
                          <h4 class='member_name'>Dr.Rajdev Tiwari</h4>
                          <p><span class="text_color">Club In-charge</span>
                          </p>
                          <hr />
                          <div class='socialdiv'>
                              <ul>
                                  <li><a href="https://www.facebook.com/rajdev.tiwari.3" target='_blank' class='facebook' title='Facebook'></a></li>
                                  <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- End Team Member Row 2-->
			  
            <!-- Begin Team Member Row 1-->
			<!--<h2 class="team_header zaptitle" style="min-height:20px;"><span>Chief Co-ordinator</span></h2>
            -->
			<div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Prabhat Singh' title='Prabhat Singh' src='img/team/prabhat.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Prabhat Singh</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Chief Co-ordinator</span>
                        </p>
						<p><span class="text_color">Contact No.- 9015237724</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/prabhat.singhfauzdar?ref=br_rs" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://www.linkedin.com/in/prabhat-singh-6a1593110" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Divyansh Mishra' title='Divyansh Mishra' src='img/team/divyansh.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Divyansh Mishra</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Chief Co-ordinator</span>
                        </p>
						<p><span class="text_color">Contact No.- 7042543988</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/divyansh.mishra.336717" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				
				
				<div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Ayush Mishra' title='Ayush Mishra' src='img/team/ayush1.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Ayush Mishra</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Chief Co-ordinator</span>
                        </p>
						<p><span class="text_color">Contact No.- 9044208267</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/ayush.mishra.18488169" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://www.linkedin.com/in/ayush-mishra-a99068a6" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				
             </div>
            <!-- End Team Member Row 1-->
            <!-- Begin Team Member Row 2-->
            
			
			<div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column omega'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Punit Raj' title='Punit Raj' src='img/team/punit.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Punit Raj</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Associate Chief Co-ordinator</span>
                        </p>
						<p><span class="text_color">Contact No.- 8651728409</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/punit.raj.96?ref=br_rs" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

				
				
				<div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Soumya Sharma' title='Soumya Sharma' src='img/team/soumya.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Soumya Sharma</h4>
                        <p><span class="text_color">Associate Chief Co-ordinator</span>
                        </p>
					<p><span class="text_color">.</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/profile.php?id=100009706814181&ref=br_rs" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>



				<div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Gagan Jeet Singh' title='Gagan Jeet Singh' src='img/team/.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Gagan Jeet Singh</h4>
                        <p><span class="text_color">Associate Chief Co-ordinator</span>
                        </p>
						<p><span class="text_color">Contact No. - 8285925979</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/gaganw2" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
				
				<div class='team-row 3' style="margin-top: 20px;">
                <div class='team-member one-third column omega'>
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Shashi Bhushan Singh' title='Shashi Bhushan Singh' src='img/team/Shashi.jpg'>
                    </div>
                    <div class='team_content'>
                        <!-- Team Member Name -->
                        <h4 class='member_name'>Shashi Bhushan Singh</h4>
                        <!-- Team Member Work -->
                        <p><span class="text_color">Head Technical Co-ordinator</span>
                        </p>
						<p><span class="text_color">Contact No. -8826846450</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/shashi.bhushansingh.14" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://www.linkedin.com/in/shashi-bhushan-singh-415498140" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

				
				
				<div class='team-member one-third column' style="margin: 0 2%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Himalaya Bhardwaj' title='Himalaya Bhardwaj' src='img/team/himalaya.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Himalaya Bhardwaj</h4>
                        <p><span class="text_color">Marketing Head</span>
                        </p>
						<p><span class="text_color">Contact No. -9717179130</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="https://www.facebook.com/himalaya.goswami" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="https://www.linkedin.com/in/himalaya-bhardwaj-90993a145" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>



				<div class='team-member one-third column' style="margin-right: -3%;">
                    <div class='teamimg'>
                        <img class='scale-with-grid' alt='Arpit Goel' title='Arpit Goel' src='img/team/arpit.jpg'>
                    </div>
                    <div class='team_content'>
                        <h4 class='member_name'>Arpit Goel</h4>
                        <p><span class="text_color">Marketing Head</span>
                        </p>
						<p><span class="text_color">Contact No. -8882471384</span>
                        </p>
                        <hr />
                        <div class='socialdiv'>
                            <ul>
                                <li><a href="#" target='_blank' class='facebook' title='Facebook'></a></li>
                                <li><a href="#" target='_blank' class='linkedin' title='LinkedIn'></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <!-- End Team Member Row 2-->
           
            <div class='clear'></div>
          </section>
        <!-- END: TEAM SECTION -->
        </div>

</div>

	<!-- BEGIN: BREADCRUMBS -->
 	<div class="breadcrumbs-container"> 
		<div class="entry-breadcrumb no-flicker" style="border: none;"> 
			<p>You are here: <a href="index.php">Home</a><span class="delimiter"> &raquo; </span>About Us</p>
		</div>	    		  
	</div>
	
	<!-- BEGIN: BACK-TO-TOP BUTTON -->			
	<div id="back-to-top"><a href="javascript:;"></a></div>
	
	
<?php require'footer.php';?>