<?php require'header.php'; ?>

	    <!-- PAGE TITLE -->
    <!-- Put your image here on the "style" -->
    <div class="fullwidth-container image" style="background: url(img/preview_images/top-about.jpg);">
        <div class="parallax-overlay parallax-overlay-pattern"></div>
        <div class="container">

            <div class="pageTitle sixteen columns">
                <h1 class="page_title">TechSparks #17</h1>
                <h2 class="secondaryTitle"></h2>
            </div>
        </div>
    </div>
	    
	    <!-- START: FULL CONTENT -->	
		<div class="entry-content">

            <div class="container">
                <!-- Begin Flexslider -->
                <div class="main_cols container">
                    <div class="sixteen column">
                        <div id="myslider-2" class="flexslider clearfix" style="max-height:300px;">
                            <!-- Begin Flexslider Items -->
                            <ul class="slides">
                                <!-- Begin Flexslider Item 1 
                                <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/Flex1.jpg' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 1 -->
                                <!-- Begin Flexslider Item 2 
                                <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/Poster2.JPG' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 2 -->
                                <!-- Begin Flexslider Item 3 
                                <li>
                                    <a href='javascript:;'>
                                        <img src='img/techsparks/poster002.jpg' alt=''>
                                    </a>
                                </li>
                                <!-- End Flexslider Item 3 -->
                            </ul>
                            <!-- End Flexslider Items -->
                        </div>
                        <script type="text/javascript">
                            jQuery(document).ready(function ($) {
                                $('#myslider-2').flexslider({
                                    animation: "fade",
                                    slideDirection: "vertical",
                                    directionNav: true,
                                    slideshowSpeed: 4500,
                                    controlsContainer: '#myslider-2 .flex-container',
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
                                        $("#myslider-2 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                            'opacity': 1
                                        }, 500);
                                    },
                                    after: function (slider) {
                                        $("#myslider-2").find(".flex-direction-nav").click(function () {
                                            window.location = $("#myslider-2 .slides li").eq(slider.currentSlide).children("a").attr("href");
                                        });
                                        $("#myslider-2 .slides li").find(".flex-caption").each(function () {
                                            $(this).css('opacity', 0);
                                            if ($(this).parent().hasClass('clone')) {} else {
                                                $(this).animate({
                                                    'opacity': 0
                                                }, 500);
                                            }
                                        });
                                        $("#myslider-2 .slides li").eq(slider.currentSlide).find(".flex-caption").animate({
                                            'opacity': 1
                                        }, 500);
                                    }
                                });
                            });
                        </script>
                    </div>
                </div>
                <!-- End Flexslider -->
            </div>


			<div class="container">

                <div class="white-space"></div>

                    <!-- Begin Some Text Containers-->
                    <div class="main_cols container">
                        <!-- Begin Some Text Container column 1-->
                        <div class="one-third column">
                            <h2 class="zaptitle"><span>What we do?</span></h2>
                            <p>Techsparks is a  Inter college techno-event organized and conducted by GNIOT-Techclub.<br>
                                Via this event we connect with students and give them opportunity to explore themselves in technically.
                                Where they can use their own techniques in particular event to competewith others.
                                Students here get a great exposure. And hardwork without rewards doesn’t sounds good to the youth so we have prizes for winners.</p>
                        </div>
                        <!-- End Some Text Container column 1-->

                        <!-- Begin Some Text Container column 2-->
                        <!--<div class="one-third column">
                            <h2 class="zaptitle"><span>Our Approach</span></h2>
                            <p></p>
                        </div>-->
                        <!-- End Some Text Container column 2-->

                        <!-- Begin Some Text Container column 3-->
                        <div class="one-third column">
                            <h2 class="zaptitle"><span>Our Main Events</span></h2>
                            <div class="shortcode-unorderedlist" data-rel="#10b9b9">
                                <ul>                                    
                                    <li><i class="fa fa-check-circle-o"></i>Robotics</li>
                                    <li><i class="fa fa-check-circle-o"></i>Debugging</li>
                                    <li><i class="fa fa-check-circle-o"></i>Quiz</li>
                                    <li><i class="fa fa-check-circle-o"></i>Circuit Surgeon</li>
                                    <li><i class="fa fa-check-circle-o"></i>Bridge Building</li>
                                    <li><i class="fa fa-check-circle-o"></i>IQ sector</li>
                                    <li><i class="fa fa-check-circle-o"></i>Spell Bee</br>                                    
                                    <li><i class="fa fa-check-circle-o"></i>Lan Thrash</li>
                                    <li><i class="fa fa-check-circle-o"></i>Back Tracking</li>
                                    <li><i class="fa fa-check-circle-o"></i>Debate</li>
									<li><i class="fa fa-check-circle-o"></i>An Idea for Change</li>
                                    <li><i class="fa fa-check-circle-o"></i>Extempore</li>
                                    <li><i class="fa fa-check-circle-o"></i>Mock Test</li>
                                    <li><i class="fa fa-check-circle-o"></i>Momemtum</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Some Text Container column 3-->
						<!-- Begin Some Text Container column 3 for new events-->
                        <div class="one-third column">
                            <h2 class="zaptitle"><span>Our New Events</span></h2>
                            <div class="shortcode-unorderedlist" data-rel="#10b9b9">
                                <ul>
                                    <li><i class="fa fa-check-circle-o"></i>Beg Borrow Steel</li>
                                    <li><i class="fa fa-check-circle-o"></i>Poster Making</li>
                                    <li><i class="fa fa-check-circle-o"></i>Creative Writing</li>
									  <li><i class="fa fa-check-circle-o"></i>Mock Parliament</li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Some Text Container column 3-->
                    </div>

                    <div class="white-space"></div>
		    	
		    	<!-- BEGIN: PROJECTS STYLE 1 + SCROLLER -->
	            <section id="lastprojects3-17" class="home_widget recentProjects3">
	                <div class="projects_container_proj sixteen columns">
	                    <div class="zaptitle page_title_s3">
	                    	<span class="page_info_title_s3">Our Events</span>
	                        <!-- BEGIN Slides Arrows -->
	                        <div class="pag-proj2_s3">
	                            <div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal"></div>
	                            <div class="goto_projects" onclick="window.location = '#';" title="View All Projects"></div>
	                            <div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal"></div>
	                        </div>
	                        <!-- END Slides Arrows -->
	                    </div>
	                    
	                    <!-- PROJECTS S3 -->
	                    <div class="project_list_s3">
	                        <ul class="slides_container jcarousel-skin-tango">

	                            <!-- PROJECT #01 
	                            <li data-rel='link' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/code_hunt.png" />
	                                                <a class="flex_this_thumb" href="img/techsparks/code_hunt.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Code Hunt</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>A call for all code enthusiasts to beat their brains and put out something that executes well. </p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>

	                            <!-- PROJECT #02 -->
	                            <li data-rel='none' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">

	                                                    <img class="img_thumb" alt="" src="img/tech17/robotics-logo2.png" />

	                                                <a class="flex_this_thumb" href="img/tech17/robotics-logo2.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Robotics</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Is Optimus Prime your Robo-God? Ever dreamt of building one? Begin right here!</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>

	                         

	                            <!-- PROJECT #03 -->
	                            <li data-rel='link_magnifier' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                    <img class="img_thumb" alt="" src="img/tech17/debugging.png" />
	                                                <a class="flex_this_thumb" href="img/tech17/debugging.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Debug</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Got a keen eye for bugs in programs? You’re at no ease unless the code works deftly.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
								
								<!-- PROJECT #04 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech17/QUIZ.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/QUIZ.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Quiz</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Here’s the deal. A questionnaire dropped and your brain knows it all?  The price is yours then!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								   <!-- PROJECT #05-->
	                            <li data-rel='link' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                    <img class="img_thumb" alt="" src="img/tech17/circuit-surgeon.png" />
	                                                <a class="flex_this_thumb" href="img/tech17/circuit-surgeon.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Circuit Surgeon</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Take a look, sit, brainstorm and prove your mettle by designing an exceptional circuit. </p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
								
								<!-- PROJECT #06 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech17/bbuilding.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/bbuilding.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Bridge Building</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Shout out to all those intrigued by organizational structures and their stability. Respond now.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                
								<!-- PROJECT #07 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/IQSECTOR.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/IQSECTOR.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>IQ Sector</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>The battle-ground to test intelligence. If you are fearless, try setting your feet on it.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								
								<!-- PROJECT #08 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/spell-bee.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/spell-bee.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Spell Bee</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Are you a spelling freak? Derek O’Brien fan? Set your eyes on being the new ’Spell Bee’.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

								 <!-- PROJECT #10 -->
	                            <li data-rel='link' class="indproj1">
	                                <div class="slides_item post-thumb">
	                                    <ul class="ch-grid">
	                                        <li>
	                                            <div class="ch-item">
	                                                    <img class="img_thumb" alt="" src="img/tech17/lan.png" />
	                                                <a class="flex_this_thumb" href="img/tech17/lan.png"></a>
	                                            </div>
	                                        </li>
	                                    </ul>
	                                    <div class="no-flicker">
	                                        <div class="proj-title-tags">
	                                            <div class="p_title no-flicker"><a>Lan Thrash</a>
	                                            </div>
	                                            <div class="p_exerpt no-flicker">
	                                                <p>Do bullet shots and raging cars invoke the fierce in you?  Just settle it on computer screen.</p>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </li>
								<!-- PROJECT #11 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/backtrack.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/backtrack.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Back Track</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Got more brains to re-code for an output you see on screen? Aha, here you go.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								<!-- PROJECT #12 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/debate.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/debate.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Debate</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>A Speech with flair and flamboyance is enough to win war with words. Sharpen your weapons!</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								<!-- PROJECT #13 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech17/extempore.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/extempore.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Extempore</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Ideas collide? Got a moment? Let your views reach the audience straight on point.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								<!-- PROJECT #14 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                        <img class="img_thumb" alt="" src="img/tech17/IDEA-FOR-CHANGE.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/IDEA-FOR-CHANGE.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>AN IDEA FOR CHANGE</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Quintessential ideas transform the world. Got more? Bring it on. We’re waiting.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								 <!-- PROJECT #15 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/mocktest.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/mocktest.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Mock Test</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Been an overachiever but never rewarded? We feel you, right here.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								 <!-- PROJECT #16 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/momentum.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/momentum.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Momentum</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>A Water rocket, a set angle, aim for maximum distance. Boom! You win this.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

	                            
                            </ul>
	                    </div>
	                    <!-- PROJECTS S3 -->
	                </div>
					
					
					<script>
	                    jQuery(document).ready(function () {
	                        jQuery('#lastprojects3-17 .slides_container').parent().carousel({
	                            dispItems: 1
	                        });
	                    });
	                </script>
	                <div class="clear"></div>
	            </section>
	            <!-- END: PROJECTS STYLE 1 + SCROLLER -->
	            
	            <div class="white-space"></div>
					
					<!-- BEGIN: PROJECTS STYLE 1 + SCROLLER -->
	            <section id="lastprojects3-17" class="home_widget recentProjects3">
	                <div class="projects_container_proj sixteen columns">
	                    <div class="zaptitle page_title_s3">
	                    	<span class="page_info_title_s3">Our New Events</span>
	                        <!-- BEGIN Slides Arrows -->
	                        <div class="pag-proj2_s3">
	                            <div class="nextbutton carousel-control next carousel-next jcarousel-next jcarousel-next-horizontal"></div>
	                            <div class="goto_projects" onclick="window.location = '#';" title="View All Projects"></div>
	                            <div class="prevbutton carousel-control previous carousel-previous jcarousel-prev jcarousel-prev-horizontal"></div>
	                        </div>
	                        <!-- END Slides Arrows -->
	                    </div>
					
					
					 <!-- PROJECTS S3 -->
	                    <div class="project_list_s3">
	                        <ul class="slides_container jcarousel-skin-tango">
							
							<!-- PROJECT #01 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/beg.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/beg.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Beg Borrow Steel</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Bring out the explorer within you spot, search and assemble</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

	                            <!-- PROJECT #02 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/MOCK-PARIAMENT.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/MOCK-PARIAMENT.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Mock Parliament</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p> Personality,attitude and speaking skills ,these ingredients makes a perfect mocktail which brings out
													the real politician within you.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								
								<!-- PROJECT #03 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/poster.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/poster.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Poster Making</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>Actual art lies in the hands of the artist, some colours and brush build an aesthetic stuff.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
								
									<!-- PROJECT #04 -->
                                <li data-rel='link_magnifier' class="indproj1">
                                    <div class="slides_item post-thumb">
                                        <ul class="ch-grid">
                                            <li>
                                                <div class="ch-item">
                                                    <img class="img_thumb" alt="" src="img/tech17/creativewriting.png" />
                                                    <a class="flex_this_thumb" href="img/tech17/creativewriting.png"></a>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="no-flicker">
                                            <div class="proj-title-tags">
                                                <div class="p_title no-flicker"><a>Creative Writing</a>
                                                </div>
                                                <div class="p_exerpt no-flicker">
                                                    <p>A pen is mightier than a sword, prove your mettle by unleashing  the writer within you .</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            
                            </ul>
	                    </div>
							
							
							
							<!-- PROJECTS S3 -->
	                
					
					<br>
					
	                <script>
	                    jQuery(document).ready(function () {
	                        jQuery('#lastprojects3-17 .slides_container').parent().carousel({
	                            dispItems: 1
	                        });
	                    });
	                </script>
	                <div class="clear"></div>
	            </section>
	            <!-- END: PROJECTS STYLE 1 + SCROLLER -->
				
				 <div class="white-space"></div>
                <div class="entry-content">
                    <div class="container">
                        <div class="zaptitle page_title_s3">
                            <span class="page_info_title_s3">Event Details &amp; Info</span>
                        </div>

                        <!-- BEGIN: DESIGNARE VERTICAL TABS -->
                        <section class='special_tabs'>
				
				
				<!-- BEGIN: SECTION #01 -->
                            <div class='label 1'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-code'></i>
                                </div><span class='tab_title'>Coding Events</span>
                            </div>
                            <div class='content 1'>
                                <h1 class="aligncenter">Coding Events</h1>
                                <ul>                                 

                                    <li>  <h4><b><u>1. DEBUGGING (solo participation, ENTRY FEE: Rs. 100 per head)</u></b></h4><br>
                                        <h5>1. There will be three levels:<br>
                                         a) LEVEL 1 : (Finding Errors): 20 questions in 15 min.<br>
                                         b) LEVEL 2 : (Jumbled Programs): 15 questions in 10 min. <br>
                                         c) LEVEL 3 : (Output of Programs): 10 questions in 15 min.  <br>
                                         2.There will be 10 minutes break after every level.<br>
                                         3.Only those who qualify. <b>LEVEL 1</b> will be allowed to the next level and so on.<br>
                                         4.Electronic items are not allowed.<br>
                                         5.Participants should bring their laptops.<br></h5>
                                    </li><br>

                                    <li> <h4><b><u>2. BACKTRACK (solo participation, ENTRY FEE: Rs. 100 per head)</u></b></h4><br>
                                    <h5>1.This event is all about your programming concepts and your thinking power. This is about reverse coding<br> 
									    2. Each participant will be provided four different set of rough source codes out of which the participant will have 
										   to choose any 2 codes randomly but later on decide upon only one for which he/she will have 
										   to write the alternate source code.<br>                        
									    3. Conditions for writing the alternate source code-<br>
                                            a)	Duration is of 20 to 30 minutes.<br>
                                            b)	The alternate source must be different from the given source code.<br>
                                            c)	The output must be same.<br>
                                        4. Participants have to bring their laptops (those who do not have will be provided with desktops).<br>
                                    </h5>
                                    </li><br>
                                </ul>
                                <br/>

                            </div>

                            <!-- BEGIN: SECTION #02 -->
                            <div class='label 2'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-power-off'></i></div>
                                <span class='tab_title'>Electronic/Electrical Events</span>
                            </div>

                            <div class='content 2'>
                                <h1 class="aligncenter">Electronic/Electrical Events</h1>
                                <ul>
                                    <li> <h4><b><u>1. CIRCUIT SURGEON (groups of 2, ENTRY FEE: Rs. 200 per team)</u></b></h4><br>
                                        <h5>  1. The participant will be given a MCQ paper.<br>
                                                  2. There will be some cut-off marks. Who will qualify it will be send to 2nd round.<br>
                                                  3. The first-round timing is 1 hour.<br>
                                                  4. The participant from 1st year are only eligible for 1st round.<br>
                                                    5. The highest marks scoring group will be awarded.<br>
                                                  6.  The participant from 2nd year to 4th who will qualify 1st round will be eligible for 2nd round.<br>
                                                  7.  In 2nd round they have to make a circuit.<br>
                                                  8.  The 2nd round timing is 1 hour<br>
                                                  9.  According to the judges, they will get 1st, 2nd and 3rd prize. Requirement:<br>                                                10.  Question paper with MCQ question paper, resistance,capacitance, buzzer, <br>
                                                    11.  bread board and the equipment which candidate required at that time.<br>
                                        </h5> 
                                    </li></br>
                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #03 -->
                            <div class='label 3'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-cogs'></i></div>
                                <span class='tab_title'>Mechanical/Civil Events</span>
                            </div>

                            <div class='content 3'>
                                <h1 class="aligncenter">Mechanical/Civil Events</h1>
                                <ul>
                                    <li><h4><b><u> 1. MOMENTUM (groups of 3, ENTRY FEE: Rs. 200 per team)</u></b></h4><br>
                                        <h5>    1.	Each team will consist a maximum of three members. Members can be from different institutions.<br>
                                                2.	Teams will be provided with the launch pad and air compressor by the event organizers.<br>
                                                3.	Participating team will be disqualified if any damage occurs to the launch pad provided by the event organizers.<br>
                                                4.	Only one chance will be given to each team in each round.<br>
                                                5.	Participating team will be disqualified if any part of the rocket gets detached (except for the multi-stage system) during launch till the entire flight touches the ground.<br>
                                                6.	Decision in the above rounds, their rules & regulations are bound to change as per the conditions*.<br>
                                                7.	The decision of event organizers will be final.<br>
                                                8.	Participants have to bring their rocket with them.<br></h5>
                                    </li><br>

                                    <li> <h4><b><u>2. ROBOTICS (groups of 4, ENTRY FEE: Rs. 500 per team)</u></b></h4><br>
                                         <h5>Construct the machine to have the maximum SPEED to beat another machine on the given track to reach the final destination in minimum time. 
									         Design and construct a remote controlled robot 
									         capable of not only running fast but also of fighting the hurdles on the track.<br>
                                        2.There will be two sub-categories:-<br>
                                        a)	•Robo Soccer<br>
                                        b)	•Robo Race<br>
                                    </h5>
                                    </li><br> 
									 <li> <h4><b><u>a. Robo soccer</u></b></h4><br>
                                      <h5>Each team will have to defend the goal on its side as well as score the goal on the opposite side.<br>
                                        1.Each team can have a maximum of5 team members.<br>
                                        2.A team will have one robot, (manually controlled.)<br>
                                        3.The game will start at the count of 3 given by referee followed by whistle. In case a team starts 
                                          its robot before the whistle, the game will be restarted and a team making this mistake for more than 3 times will be disqualified.<br>
                                        4.The ball can be either dragged or pushed by the team.<br>
                                        5.Each goal scored by a team by rolling the ball on the ground will fetch the team 1 point.<br>
                                        6.The game will last for 5 minutes.<br>
                                        7.Maximum 2 members per team will be allowed to remain close to field for operating the robots.<br>
                                        8.In case of jam up of robots for more than 30 seconds the robots will have to kick-off again at the order of the referee.<br>
                                        9.In case of any discrepancy the final decision rests in the hands of judges.<br>
                                        10.   Any act of misbehavior or misconduct will lead to immediate disqualification of the team.<br>
                                        11.   The robots are not allowed to use grippers or actuations which are intended to harm the opponent's robot.<br>
                                         12.   The competition is aimed at making the game a friendly footballmatch rather than a robo-war Fix<br>
                                        </h5>
									 
									 <br>
									  <li> <h4><b><u>b. Robo race</u></b></h4><br>
                                      <h5>Challenge
                                         <h4>  "More speed, more power with minimum time"<h4>
                                          <h4>Track<h4>
                                            1.Width of track will be 30cm. <br>
                                            2. Track surface and course may have unevenness.<br>
                                            3.There might be abrupt angles. <br>
                                            4.There will be certain obstacles in race track which will try to slow down the speed of the robot ex. Road cones.<br>
                                            5.Arena will consist of switch gate, speed breakers, marble/sand pits, slippery paths, rotating disc, see-saw, 
											   slotted ramp etc.<br>
                                            6.Actual track will be revealed on the day of the event.<br>
                                            7. A.C Power supply of 220V will be provided. Participants must bring their own adaptors or batteries to operate their robots.<br>
                                         <h4>Machine Specifications<h4>
                                           1.The dimension of bot should not exceed 25x25x25 cm (L*B* H).<br>
                                           2.Non-adherence to the dimensions will lead to outright ousting from the event with no exceptions.<br>
                                           3.The minimum width of the bot should be 15 cm.<br>
                                           4.The weight of the robot should not exceed 2 Kg's.<br>
                                           5.The robot can be fully powered only electrically either through power adaptor or batteries. <br>
                                           6. The machine should be controlled by wireless remote controlled mechanism or wired one throughout the race.<br>
                                           7. If the machine is wired then the wire should remain slack under all circumstances during the competition. All the wires coming out
                                              of machine should be stacked as single unit. The wires must be properly insulated.<br>
                                           8.The upper limit for motor capacity is 500rpm.<br>
                                     <h4>Rules<h4><br>
                         <h4>A. Game<h4><br>
                                               a.Every team will be given only one chance to run their machine on the track.<br>
                                               b.Timer will start when robot starts from the starting point.<br>
                                               c.There will be a time penalty if the robot touches any obstacle or the boundary of the track.<br>
                                               d.The robot should not damage any part of the arena.<br>
                                               e. There will be partial points based on the length covered, checkpoints cleared.<br>
                                               f.The robot will be judged on basis of (in priority):<br>
                                               1. Time to complete the track.<br>
                                               2. Number of checkpoints cleared.<br>
                                               g.The judges' decision on the criteria of innovation and design cannot be competed.<br>
                                               h.If the teams reset their robots position then they will have to start from the last checkpoint cleared.<br>
                                               i. During the Round, only maximum of two team members are allowed in the arena, one member will control the robot and other to guide it.
                                               j. Each team should have its own programmers and components.<br>
                                               k.No programmers or components will be made available by the coordinator during the event.<br>
                                               l. Unethical behavior could lead to disqualification. Facultycoordinators have all the rights to take final decision for any
                                                    matter during the event.<br>
                                       <h4>B. General<h4>
                                                a.Each team can have maximum 4 members.<br>
                                                b. Judges' and coordinators' decision shall be treated as final and binding on all.<br>
												c.Machine must not contain any readymade kits, pneumatic & hydraulic systems, IC engines.<br>
                                        </h5>
										 </li><br> 
                                    
                                    <li> <h4><b><u>3. BRIDGE BUILDING (groups of 2, ENTRY FEE: Rs 500 per team)</u></b></h4><br>
                                      <h5>Objective: To build the bridge with in our specifications that has the highest capacity.<br>
									  The bridge must be constructed of approved materials.<br>
                                                   1.Apparatus: Building materials (ALL MATERIALS PROVIDED)<br> 
												   a.Popsicle sticks.<br>
                                                   b.Elmer¡¦s glue.<br>
                                                   c.Thread.<br>
												   <h4>Dimensions:<h4>
                                                  1.Overall length of bridge: 50 cm.<br>
                                                  2.Clear span of bridge: 45 cm.<br>
                                                  3.Height of truss: 9.5 to 12.5 cm.<br>
                                                  4.Width of carriageway: 8 to 10 cm.<br>
                                         <h4> Judging and scoring:<h4>
                                                 1.The greatest load prior to failure will be a bridge capacity.<br>
                                                 2.Broken stick should not be used.<br>
                                                 3.Carriageway shall be open from the top.<br>
                                                 4.The bridge with the highest score wins the event.<br> 
												 </h5>
                                    </li><br>
                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #04 -->
                            <div class='label 4'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-gamepad'></i></div>
                                <span class='tab_title'>Gaming Events</span>
                            </div>
                            <div class='content 4'>
                                <h1 class="aligncenter">Gaming Events</h1>
                                <ul>
                                    <li> <h4><b><u>1.Counter Strike(groups of 5, ENTRY FEE: Rs. 500 per team)</u></b></h4><br>
                                   <h5>1.There will be group participation of 5 players each.
								    <h4>maps:<h4>
                                        a. De dust2<br>
                                        b. De nuke<br>
                                        c. De train<br>
                                        d. De inferno<br> <br>
							       2. Coin toss will be done between two teams at a time.<br>
                                   3. Winner of the toss will decide the map and loser will decide to choose between terrorist and counter-terrorist.<br>
                                   4. Best of 11 rounds will decide the winner for the game till qualifying rounds.<br>
                                   5. Sides will be switched after 6 rounds.<br>
                                   6. Best of 15 rounds will be played from semi-finals onward.<br>
                                   7. Here sides will be switched after 8 rounds<br>
                                   8. Items banned in the game are: D3/AU-1, ES C90, Night Vision, Tactical shield, Krieg 550.<br>
                                   9. Each round's time will 1.45 minutes.<br>
                                   10. Initiated balance will be 800$.<br>
                                   11. Freeze time will be 15 seconds.<br>
                                <h4>Disqualification is applicable for use of cheat codes, peeping in opponent team's systems.<h4><br>
                                               </h5>
                                    </li></br>
									<li> <h4><b><u>2.Need For Speed (ENTRY FEE: Rs. 200 per head)</u></b></h4><br>
                                         <h5>ACCORDING TO THE NUMBER OF ENTRIES THE RULES MAY VARRY.<br>
                                           1. THERE WILL BE FOUR ROUNDS.<br>
                                           2. THERE SHOULD BE KNOCKOUT ROUNDS.<br>
                                           3. PLAYERS MAY BRING THEIR OWN GAMMING CONTROLS.<br><br>
                                     ROUND 1: QUALIFYING ROUND (CIRCUIT RACE WITH 3 LAPS) TWO OUT OF FOUR WILL BE SELECTED FOR round 1  AND THE LOOSING PLAYER WILL BE GIVEN ANOTHER CHANCE  
									               {REMATCH WILL BE ONLY HAPPEN
                                                    IF NUMBER OF ENTRIES WILL BE LESS}<br><br>
                                     REMATCH ROUND: ONE OUT OF FOUR WILL BE SELECTED, OTHER WILL BE ELEMINATED FROM THE GAME (DRAG RACE) (OPTIONAL BASED ON ENTRIES)<br><br>
                                     ROUND 2: SPRINT RACE BETWEEN ROUND 0 AND REMATCH WINNERS.<br><br>
                                     ROUND 3: NFS WORLD LOOP, OF ROUND 2 WINNERS (BEST TWO WILL BE THE FINALS)<br><br>
                                     FINAL ROUND (BEST OF THREE RACES)<br>
                                    </h5>
                                    </li><br>
									
										<li> <h4><b><u>3.Clash Of Clans (groups of 5, ENTRY FEE: Rs. 250 per team) </u></b></h4><br>
                                         <h5>1. It is a 5 Vs 5 friendly war event.<br>
										     2. One team can consist of maximum three th9 and maximum two th8. <br>
										           Th10 and th11 are strictly not allowed.<br>
                                             3. It is to be ensured by the clan members that they are not participating in any other war event.<br>
                                             4. Each team must create a new clan of 5 members for this event.<br>
                                             5.Preparation day will be of 30 min and battle day of 1 hour.<br>
                                             6.All clan members must execute their own attacks only. clan members trying to help another clan member in any form
                                                (attacking on behalf of another clan members ,using another clan member’s device during attack etc.) will lead to disqualification of team.<br>
                                             7.No clan members can receive maxed out troops in his/her war cc except healer.<br>
                                             8.All participants are required to bring their own mobile phones with good internet connection.<br>
                                          </h5>
                                         </li><br>
										 
										 
										 
										 <li> <h4><b><u>4.Mini Militia (groups of 5, ENTRY FEE: Rs. 250 per team) </u></b></h4><br>
                                         <h5>1.There are 4 members in each team.<br>
                                             2.There will be 3 matches played between two team at three different venues, 'Outpost', 'Hight Tower', 'Catacomb' 
											 of default time 6 min 30 seconds.<br>
                                             3.Best of three will be considered for evaluating results, and in case of draw, total no. of killings of all three matches will be
                                                considered. If a team wins first two matches there is no need of third match to be played.<br>
                                             4.No preinstalled games will be allowed, we will provide game app there itself and each game will be spectated by Coordinator.<br>
                                             5.No rematch will happen if anyone's device or game crashed or in any other cases.<br>
                                             6.Mobiles should be fully charged and put in air plane mode.<br>
                                          </h5>
                                         </li><br>

                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #05 -->
                            <div class='label 5'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-edit'></i></div>
                                <span class='tab_title'>Literary Events</span>
                            </div>
                            <div class='content 5'>
                                <h1 class="aligncenter">Literary Events</h1>
                                <br/>
                                <div>
                                    <ul>
                                        <li><h4><b><u> 1. EXTEMPORE (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                        <h5>1.First of all, participant will come and they will pick up a cheat.<br>
                                  2. Participant will be given time to brainstorm for 2 minutes.<br>
                                  3. The participant will have to speak maximum15 min and minimum 10 min.<br>
                                  4. If the time will be over than buzzer will be buzzed.<br>
                                  5. If the time limit of the participant increases than he will be given negative point.<br></h5>
                                        </li><br>

                                        <li><h4><b><u>	2. MOCK TEST (solo participation, ENTRY FEE: Rs.100 per head)</u></b></h4><br>
                                        <h5> 1.All the participants have to appear in aptitude exam.<br>
                                             2.The question paper will have 40 questions time limit 30 minutes.<br>
                                             3.All the qualifiers will have to participate in Group discussion.<br>
                                             4.The qualifiers of group discussion will be decided by the allocated faculty as judge<br>
                                             5.The qualifiers of GD will have to give personal interview.<br>
                                             6.The winner will be assigned by their respective score.<br>
                                             7.The results will be decided by the jury member.<br>
                                            8.No alteration will be entertained against their decision.<br></h5>
                                        </li><br>

                                        <li><h4><b><u> 3. SPELL BEE (solo participation, ENTRY FEE: Rs.50 per head) </u></b></h4><br>
                                          <h5>Round 1 will consist of a written test and shortlisting will be done in this round. <br>
										  This will be a ' one word for a sentence round'<br>
                                          Round 2 will consist of a vocal round in which the shortlisted participants will have to spell the words spoken in front of them.
                                         Elimination will be done in this round only and the one to get max correct will be the winner<br></h5> 
                                        </li><br>

                                        <li><h4><b><u> 4. DEBATE (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                          <h5>    1.There will be two sides of the pre-decided topic: for & against.<br>
                                                  2.Participants will be divided evenly in the two sides.<br>
                                                  3. 2 participants, 1 each from the two sides will be selected at a time.<br>
                                                   4. Both will deliver their independent speech on their respective stand for a maximum time of 3 minutes. 
												   (After 3 minutes, negative marking will be done).<br>
                                                 5.Once both individuals are done with their speeches, they are allowed to counter each other.<br>
                                                6.After that, the audience will be given a chance to counter the participants.<br>
                                                7.Winners will be decided by the judges on the basis of 5 fields<br>
                                               <h4>mentioned below:<h4>
                                                1. Fluency<br>
                                                2. Pronunciation<br>
                                                3. Confidence<br>
                                                4. Grammar<br>
                                                5. Questioning & answering qualities.<br>
												Disqualification is applicable for use of slangs and offensive languages.<br></h5>
                                        </li><br>

                                        <li><h4><b><u> 5. Mock Parliament (team participation, ENTRY FEE: Rs.50 per head) </u></b></h4><br>
                                           <h5>1.The debate will be presided over by the Mr. or Madam Speaker.<br>
                                              2. There would be total 3 knockout rounds of discussion for both the teams.<br>
                                              3.Both the teams have to choose one language in common i.e. Hindi or English. The team A which is in the side in favor shall
                                                   sit on the right-hand side of the Speaker.<br>
                                              4. The Opposition (the side against) shall sit on the left.<br>
                                              5. The speaking order will be as follows: First the leader of Team
                                                  A (the team in favor), followed by the leader of Team B (the team against)<br>
                                               6.Maximum speaking times are 5 minutes for each member of both the teams. There are no minimum times.<br>
                                               7.During the rebuttal, Members of both the teams may not bring up any new arguments or new
                                               evidence except in direct refutation of material which has already been presented.<br>
                                               8.Members will speak only when called upon by the leader of the team. There is to be no heckling.<br>
                                              9.There will be no Points of Order or Points of Personal Privilege Raised. If the condition gets to worst 
											  (any use of slang word,abusive words, political issue or any kind of misbehavior or chaos created) , the guilty Team would be disqualified.<br>
                                           10.Points of Information are raised while another Member has the floor (i.e. is speaking).<br>
                                           11.If a Member wishes to raise a Point of Information, he/she should stand and with one hand<br>
                                           12.On their head and another pointing forward (in teapot-style) and say: “On that point”.<br> 
										   13.The person who is speaking may refuse to take the point saying: “Not at this time.”<br>
                                           14.Alternatively, they may to choose to take the point. If thespeaker refuses the point<br>
										   15.The Member raising the POI must sit down. <br>
										   16.Otherwise, they should deliver their point as succinctly as possible (in less than 15 seconds) Often the point is phrased as a question. All
                                           17.speakers should attempt to both deliver at least one POI and to accept one POI during the
                                           18.Course of the debate.
                                           19.Props (e.g. drawings, models) may not be used.
                                           20.Courtesy must be shown to all other Members at all times..<br></h5>
                                        </li><br>
                                    </ul>

                                </div>
                      

                            <!-- BEGIN: SECTION #06 -->
                            <div class='label 6'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-adn'></i>
                                </div><span class='tab_title'>Knowledge Management Events</span>
                            </div>
                             <div class='content 6'>
                                     <h1 class="aligncenter">Knowledge Management Events</h1>
                                 <ul>
                                     <li><h4><b><u>1. AN IDEA FOR A CHANGE (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                         <h5>1.There will be group of 2 participants in this Event.<br>
                                             2.Each group will be provided 5 to 8 mins to present their idea.<br>
                                             3.The preferred language must be English.<br>
                                             4.Power Presentation/ Slideshow is required.<br>
                                             5.Topic selected by group must have relevance to technical fields.<br>
                                             6.The jury members will take the decision about the winners.<br>
                                             7.The idea should be innovative.<br>
											 8.The group members may bring charts to present their idea,also markers will be provided to make it understand better.<br>
                                             9.Both of the partners have to speak to express their idea.<br></h5> 
                                     </li><br>
									 
                                     <li><h4><b><u> 2. QUIZ (groups of 4, ENTRY FEE: Rs.200 per team) </u></b></h4><br>
                                     <h5>1.Only team entries are available.<br>
                                         2.A team shall consist of minimum 2 members and a maximum of 4 members.<br>
                                         3.The decision of the quiz master will be final and will not be subjected to any change.<br>
                                         4.The participants are not allowed to use mobile phones or any electronic instruments.<br>
                                          5.The questions will be in the form of multiple choice, True/False, Specific answer, etc.<br>
                                          6. Audience is not allowed to give any kind of hints or clues to the participants.<br>
                                          7.Replacement of any team member is not allowed after team registration.<br>
                                         8.Teams registered should give an appropriate name to their team by which they will be known.<br>
                                          <h4>  ELIMINATION ROUND (In Case more than 6 teams register)</h4><br>
                                               a. Each team will be given a set of 25 multiple choice questions.<br>
                                               b. Time limit – 15 minutes.<br>
												c.Only 6 teams with maximum marks will be selected for next rounds.<br>
												d.In case of tie between 2 or more teams, 5 tie breaker questions will be asked for final selection.<br>
											<h4>STAGE ROUNDS:</h4>
										<h4>  ROUND 1:</h4><br>
										a.  Each team will be asked 4 questions.<br>
										b. 10 points will be rewarded for every correct answer and -5 for every wrong answer. No points will be deducted if team is unable to answer.<br>
										c. If a team is unable to answer the question the question will be passed on to another team and the team answering the passed question will be rewarded 5 points.<br>
										d. Answering time is 30 seconds.<br>
										e. Team discussion is allowed.<br>
									<h4> ROUND 2: (Rapid fire round):</h4><br>
										a. Each team will be asked 10 questions in a 2minute time.<br>
										b. 10 points for every correct answer and -5 for every wrong answer. No points will be deducted if team is unable to answer.<br>
										c. Unanswered questions will not be passed to another team.<br>
										d. Team discussion is allowed.<br>
									<h4> ROUND 3: (Buzzer round):</h4><br>
										a. A question will be asked and he team pressing the buzzer first will get to answer first.<br>
										b. In all 6 questions will be asked.<br>
										c. 10 marks for every correct answer and -5 for every wrong answer. No points will be deducted if team is unable to answer.<br>
										1. If the team who presses the buzzer first is unable to answer the question the question will be passed to another team and the answering team will be awarded 5 points for the correct answer.<br>
										2. Answering time is 30 seconds.<br></h5> 
													</li><br>

                                     <li><h4><b><u> 3.IQ SECTOR (solo participation, ENTRY FEE: Rs.50 per head) </u></b></h4><br>
                                         <h5>1.READ THE QUESTIONS CAREFULLY.<br>
                                             2.FOR EACH CORRECT ANSWER = 2 MARKS.<br>
                                             3.FOR EACH WRONG ANSWER = -1 MARKS.<br>
                                             4.NO ELECTRONIC ITEMS ARE ALLOWED.<br>
                                             5.USE OF PEN ON THE QUESTION PAPER IS NOT ALLOWED.<br>
                                             6.FILL THE OMR SHEETS PROPERLY.<br>
                                             7.FILL ALL THE BUBBLES CAREFULLY.<br>
                                             8.DO NOT FOLD THE OMR SHEET<br></h5> 
                                     </li><br>

                                 </ul>
                             </div>


                            <!-- BEGIN: SECTION #07 -->
                            <div class='label 7'>
                                <div class='designare_icon_special_tabs'><i class='fa fa-columns'></i></div>
                                <span class='tab_title'>Creative Events</span>
                            </div>
                            <div class='content 7'>
                                <h1 style="text-align: center;">Creative Events</h1>
                                <br/>
                                <ul>
                                    <li><h4><b><u> 1. Poster Making (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                     <h5>1.THERE SHOULD BE MAXIMUM 3 MEMBERS IN A GROUP.<br>
                                         2.PARTICIPANTS SHOULD HAVE THEIR OWN STATIONARY.<br>
                                         3.THEME WILL BE GIVEN ON THE SPOT.<br>
                                         4.EACH PARTICIPANT WILL GET ONE HOUR TO COMPLETE THEIR POSTERS.<br>
                                         5.JUDGMENT CRITERION SHALL BE ON CREATIVITY DESIGN, CLARITY, CONTENT AND ELEMENTS PRESENT.<br>
                                         6.DECISION OF THE JUDGE WILL BE FINAL AND BINDING..<br></h5> 
                                    </li><br>

                                    <li><h4><b><u> 2. Creative Writing (solo participation, ENTRY FEE: Rs.150 per head) </u></b></h4><br>
                                      <h5>1.It is an individual competition.
                                          2.It will be descriptive form of writing.
                                          3.Time limit will be 1 hour and word limit is 1000 words.
                                          4.Negative marking for exceeding the word limit.
                                          5.Topic will be given on the spot. 
                                          6.Participants will be judged on Idea Mapping, Writing Skills and Expression.
                                          7.Only sheets will be provided. Get your own stationery.
                                          8.No Electronic gadgets like cell phones, Laptops, etc. shall be allowed.
                                          9.No second person, other than the participants will be entertained.
                                         10.Don’t carry any extra sheet or paper during the competition.
                                         11.Decision of the judges will be final and binding.<br></h5> 
                                    </li><br>
                                </ul>
                            </div>
                       
                        <!-- END: DESIGNARE VERTICAL TABS -->

                        <!-- BEGIN: DESIGNARE VERTICAL TABS SUBSTITUTE FOR MOBILE DEVICES-->
                        <div class="shortcode-accs acc-substitute default">

                           <!-- BEGIN: SECTION #01 -->
                            <div class="acc-title">
                                <h2><i class="fa fa-desktop"></i>Coding Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 class="aligncenter">Coding Events</h1>
                                <ul>
                                    <li> <h4><b><u>1. CODE HUNT (solo participation, ENTRY FEE: Rs. 100 per head)</u></b></h4><br>
                                        <h5>1. There will be three levels:<br>
                                            a) LEVEL 1 : Given 15 questions and the time for completion will be 15 mins.<br>
                                            b) LEVEL 2 : Given 10 questions and the time for completion will be 10 mins.<br>
                                            c) LEVEL 3 : Given 7 questions and the time for completion will be 7 mins.<br>
                                            2. There will be 10 minutes break after every level.<br>
                                            3. Only those who qualify <b>LEVEL 1</b> will be allowed to next level and so on.<br>
                                            4. Electronic items are not allowed.<br>
                                            5. Participant should bring their registration receipt.<br>
                                        </h5>
                                    </li></br>
									
                                    <li> <h4><b><u>2. BACKTRACK (solo participation, ENTRY FEE: Rs. 100 per head)</u></b></h4><br>
                                    <h5>1.This event is all about your programming concepts and your thinking power. This is about reverse coding<br> 
									    2. Each participant will be provided four different set of rough source codes out of which the participant will have 
										   to choose any 2 codes randomly but later on decide upon only one for which he/she will have 
										   to write the alternate source code.<br>                        
									    3. Conditions for writing the alternate source code-<br>
                                            a)	Duration is of 20 to 30 minutes.<br>
                                            b)	The alternate source must be different from the given source code.<br>
                                            c)	The output must be same.<br>
                                        4. Participants have to bring their laptops (those who do not have will be provided with desktops).<br>
                                    </h5>
                                    </li><br>
                                </ul>
                                </br>

                            </div>

                            <!-- BEGIN: SECTION #02 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-power-off"></i>Electronic/Electrical Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 class="aligncenter">Electronic/Electrical Events</h1>
                                <ul>
                                    <li> <h4><b><u>1. CIRCUIT SURGEON (groups of 2, ENTRY FEE: Rs. 200 per team)</u></b></h4><br>
                                        <h5>  1. The participant will be given a MCQ paper.<br>
                                                  2. There will be some cut-off marks. Who will qualify it will be send to 2nd round.<br>
                                                  3. The first-round timing is 1 hour.<br>
                                                  4. The participant from 1st year are only eligible for 1st round.<br>
                                                    5. The highest marks scoring group will be awarded.<br>
                                                  6.  The participant from 2nd year to 4th who will qualify 1st round will be eligible for 2nd round.<br>
                                                  7.  In 2nd round they have to make a circuit.<br>
                                                  8.  The 2nd round timing is 1 hour<br>
                                                  9.  According to the judges, they will get 1st, 2nd and 3rd prize. Requirement:<br>                                                10.  Question paper with MCQ question paper, resistance,capacitance, buzzer, <br>
                                                    11.  bread board and the equipment which candidate required at that time.<br>
                                        </h5> 
                                    </li></br>
                                </ul>
                            </div>

                            <!-- BEGIN: SECTION #03 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-cogs"></i>Mechanical/Civil Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 class="aligncenter">Mechanical/Civil Events</h1>
                                <ul>
                                    <li><h4><b><u> 1. MOMENTUM (groups of 3, ENTRY FEE: Rs. 200 per team)</u></b></h4><br>
                                        <h5>    1.	Each team will consist a maximum of three members. Members can be from different institutions.<br>
                                                2.	Teams will be provided with the launch pad and air compressor by the event organizers.<br>
                                                3.	Participating team will be disqualified if any damage occurs to the launch pad provided by the event organizers.<br>
                                                4.	Only one chance will be given to each team in each round.<br>
                                                5.	Participating team will be disqualified if any part of the rocket gets detached (except for the multi-stage system) during launch till the entire flight touches the ground.<br>
                                                6.	Decision in the above rounds, their rules & regulations are bound to change as per the conditions*.<br>
                                                7.	The decision of event organizers will be final.<br>
                                                8.	Participants have to bring their rocket with them.<br></h5>
                                    </li><br>

                                    <li> <h4><b><u>2. ROBOTICS (groups of 4, ENTRY FEE: Rs. 500 per team)</u></b></h4><br>
                                         <h5>Construct the machine to have the maximum SPEED to beat another machine on the given track to reach the final destination in minimum time. 
									         Design and construct a remote controlled robot 
									         capable of not only running fast but also of fighting the hurdles on the track.<br>
                                        2.There will be two sub-categories:-<br>
                                        a)	•Robo Soccer<br>
                                        b)	•Robo Race<br>
                                    </h5>
                                    </li><br> 
									 <li> <h4><b><u>a. Robo soccer</u></b></h4><br>
                                      <h5>Each team will have to defend the goal on its side as well as score the goal on the opposite side.<br>
                                        1.Each team can have a maximum of5 team members.<br>
                                        2.A team will have one robot, (manually controlled.)<br>
                                        3.The game will start at the count of 3 given by referee followed by whistle. In case a team starts 
                                          its robot before the whistle, the game will be restarted and a team making this mistake for more than 3 times will be disqualified.<br>
                                        4.The ball can be either dragged or pushed by the team.<br>
                                        5.Each goal scored by a team by rolling the ball on the ground will fetch the team 1 point.<br>
                                        6.The game will last for 5 minutes.<br>
                                        7.Maximum 2 members per team will be allowed to remain close to field for operating the robots.<br>
                                        8.In case of jam up of robots for more than 30 seconds the robots will have to kick-off again at the order of the referee.<br>
                                        9.In case of any discrepancy the final decision rests in the hands of judges.<br>
                                        10.   Any act of misbehavior or misconduct will lead to immediate disqualification of the team.<br>
                                        11.   The robots are not allowed to use grippers or actuations which are intended to harm the opponent's robot.<br>
                                         12.   The competition is aimed at making the game a friendly footballmatch rather than a robo-war Fix<br>
                                        </h5>
									 
									 <br>
									  <li> <h4><b><u>b. Robo race</u></b></h4><br>
                                      <h5>Challenge
                                         <h4>  "More speed, more power with minimum time"<h4>
                                          <h4>Track<h4>
                                            1.Width of track will be 30cm. <br>
                                            2. Track surface and course may have unevenness.<br>
                                            3.There might be abrupt angles. <br>
                                            4.There will be certain obstacles in race track which will try to slow down the speed of the robot ex. Road cones.<br>
                                            5.Arena will consist of switch gate, speed breakers, marble/sand pits, slippery paths, rotating disc, see-saw, 
											   slotted ramp etc.<br>
                                            6.Actual track will be revealed on the day of the event.<br>
                                            7. A.C Power supply of 220V will be provided. Participants must bring their own adaptors or batteries to operate their robots.<br>
                                         <h4>Machine Specifications<h4>
                                           1.The dimension of bot should not exceed 25x25x25 cm (L*B* H).<br>
                                           2.Non-adherence to the dimensions will lead to outright ousting from the event with no exceptions.<br>
                                           3.The minimum width of the bot should be 15 cm.<br>
                                           4.The weight of the robot should not exceed 2 Kg's.<br>
                                           5.The robot can be fully powered only electrically either through power adaptor or batteries. <br>
                                           6. The machine should be controlled by wireless remote controlled mechanism or wired one throughout the race.<br>
                                           7. If the machine is wired then the wire should remain slack under all circumstances during the competition. All the wires coming out
                                              of machine should be stacked as single unit. The wires must be properly insulated.<br>
                                           8.The upper limit for motor capacity is 500rpm.<br>
                                     <h4>Rules<h4><br>
                         <h4>A. Game<h4><br>
                                               a.Every team will be given only one chance to run their machine on the track.<br>
                                               b.Timer will start when robot starts from the starting point.<br>
                                               c.There will be a time penalty if the robot touches any obstacle or the boundary of the track.<br>
                                               d.The robot should not damage any part of the arena.<br>
                                               e. There will be partial points based on the length covered, checkpoints cleared.<br>
                                               f.The robot will be judged on basis of (in priority):<br>
                                               1. Time to complete the track.<br>
                                               2. Number of checkpoints cleared.<br>
                                               g.The judges' decision on the criteria of innovation and design cannot be competed.<br>
                                               h.If the teams reset their robots position then they will have to start from the last checkpoint cleared.<br>
                                               i. During the Round, only maximum of two team members are allowed in the arena, one member will control the robot and other to guide it.
                                               j. Each team should have its own programmers and components.<br>
                                               k.No programmers or components will be made available by the coordinator during the event.<br>
                                               l. Unethical behavior could lead to disqualification. Facultycoordinators have all the rights to take final decision for any
                                                    matter during the event.<br>
                                       <h4>B. General<h4>
                                                a.Each team can have maximum 4 members.<br>
                                                b. Judges' and coordinators' decision shall be treated as final and binding on all.<br>
												c.Machine must not contain any readymade kits, pneumatic & hydraulic systems, IC engines.<br>
                                        </h5>
										 </li><br> 
                                    
                                    <li> <h4><b><u>3. BRIDGE BUILDING (groups of 2, ENTRY FEE: Rs 500 per team)</u></b></h4><br>
                                      <h5>Objective: To build the bridge with in our specifications that has the highest capacity.<br>
									  The bridge must be constructed of approved materials.<br>
                                                   1.Apparatus: Building materials (ALL MATERIALS PROVIDED)<br> 
												   a.Popsicle sticks.<br>
                                                   b.Elmer¡¦s glue.<br>
                                                   c.Thread.<br>
												   <h4>Dimensions:<h4>
                                                  1.Overall length of bridge: 50 cm.<br>
                                                  2.Clear span of bridge: 45 cm.<br>
                                                  3.Height of truss: 9.5 to 12.5 cm.<br>
                                                  4.Width of carriageway: 8 to 10 cm.<br>
                                         <h4> Judging and scoring:<h4>
                                                 1.The greatest load prior to failure will be a bridge capacity.<br>
                                                 2.Broken stick should not be used.<br>
                                                 3.Carriageway shall be open from the top.<br>
                                                 4.The bridge with the highest score wins the event.<br> 
												 </h5>
                                    </li><br>
                                </ul>
                            </div>
                               <!-- BEGIN: SECTION #04 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-gamepad"></i>Gaming Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 style="text-align: center;">Gaming Events</h1>
                                <ul>
                         
                                    <li> <h4><b><u>1.Counter Strike(groups of 5, ENTRY FEE: Rs. 500 per team)</u></b></h4><br>
                                   <h5>1.There will be group participation of 5 players each.
								    <h4>maps:<h4>
                                        a. De dust2<br>
                                        b. De nuke<br>
                                        c. De train<br>
                                        d. De inferno<br> <br>
							       2. Coin toss will be done between two teams at a time.<br>
                                   3. Winner of the toss will decide the map and loser will decide to choose between terrorist and counter-terrorist.<br>
                                   4. Best of 11 rounds will decide the winner for the game till qualifying rounds.<br>
                                   5. Sides will be switched after 6 rounds.<br>
                                   6. Best of 15 rounds will be played from semi-finals onward.<br>
                                   7. Here sides will be switched after 8 rounds<br>
                                   8. Items banned in the game are: D3/AU-1, ES C90, Night Vision, Tactical shield, Krieg 550.<br>
                                   9. Each round's time will 1.45 minutes.<br>
                                   10. Initiated balance will be 800$.<br>
                                   11. Freeze time will be 15 seconds.<br>
                                <h4>Disqualification is applicable for use of cheat codes, peeping in opponent team's systems.<h4><br>
                                               </h5>
                                    </li></br>
									<li> <h4><b><u>2.Need For Speed (ENTRY FEE: Rs. 200 per head)</u></b></h4><br>
                                         <h5>ACCORDING TO THE NUMBER OF ENTRIES THE RULES MAY VARRY.<br>
                                           1. THERE WILL BE FOUR ROUNDS.<br>
                                           2. THERE SHOULD BE KNOCKOUT ROUNDS.<br>
                                           3. PLAYERS MAY BRING THEIR OWN GAMMING CONTROLS.<br><br>
                                     ROUND 1: QUALIFYING ROUND (CIRCUIT RACE WITH 3 LAPS) TWO OUT OF FOUR WILL BE SELECTED FOR round 1  AND THE LOOSING PLAYER WILL BE GIVEN ANOTHER CHANCE  
									               {REMATCH WILL BE ONLY HAPPEN
                                                    IF NUMBER OF ENTRIES WILL BE LESS}<br><br>
                                     REMATCH ROUND: ONE OUT OF FOUR WILL BE SELECTED, OTHER WILL BE ELEMINATED FROM THE GAME (DRAG RACE) (OPTIONAL BASED ON ENTRIES)<br><br>
                                     ROUND 2: SPRINT RACE BETWEEN ROUND 0 AND REMATCH WINNERS.<br><br>
                                     ROUND 3: NFS WORLD LOOP, OF ROUND 2 WINNERS (BEST TWO WILL BE THE FINALS)<br><br>
                                     FINAL ROUND (BEST OF THREE RACES)<br>
                                    </h5>
                                    </li><br>
									
										<li> <h4><b><u>3.Clash Of Clans (groups of 5, ENTRY FEE: Rs. 250 per team) </u></b></h4><br>
                                         <h5>1. It is a 5 Vs 5 friendly war event.<br>
										     2. One team can consist of maximum three th9 and maximum two th8. <br>
										           Th10 and th11 are strictly not allowed.<br>
                                             3. It is to be ensured by the clan members that they are not participating in any other war event.<br>
                                             4. Each team must create a new clan of 5 members for this event.<br>
                                             5.Preparation day will be of 30 min and battle day of 1 hour.<br>
                                             6.All clan members must execute their own attacks only. clan members trying to help another clan member in any form
                                                (attacking on behalf of another clan members ,using another clan member’s device during attack etc.) will lead to disqualification of team.<br>
                                             7.No clan members can receive maxed out troops in his/her war cc except healer.<br>
                                             8.All participants are required to bring their own mobile phones with good internet connection.<br>
                                          </h5>
                                         </li><br>
										 
										 
										 
										 <li> <h4><b><u>4.Mini Militia (groups of 5, ENTRY FEE: Rs. 250 per team) </u></b></h4><br>
                                         <h5>1.There are 4 members in each team.<br>
                                             2.There will be 3 matches played between two team at three different venues, 'Outpost', 'Hight Tower', 'Catacomb' 
											 of default time 6 min 30 seconds.<br>
                                             3.Best of three will be considered for evaluating results, and in case of draw, total no. of killings of all three matches will be
                                                considered. If a team wins first two matches there is no need of third match to be played.<br>
                                             4.No preinstalled games will be allowed, we will provide game app there itself and each game will be spectated by Coordinator.<br>
                                             5.No rematch will happen if anyone's device or game crashed or in any other cases.<br>
                                             6.Mobiles should be fully charged and put in air plane mode.<br>
                                          </h5>
                                         </li><br>

                                </ul>
                            </div>   
                         
                                             <!-- BEGIN: SECTION #05 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-edit"></i>Literary Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 style="text-align: center;">Literary Events</h1>
                                <ul>
                                  <li><h4><b><u> 1. EXTEMPORE (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                        <h5>1.First of all, participant will come and they will pick up a cheat.<br>
                                  2. Participant will be given time to brainstorm for 2 minutes.<br>
                                  3. The participant will have to speak maximum15 min and minimum 10 min.<br>
                                  4. If the time will be over than buzzer will be buzzed.<br>
                                  5. If the time limit of the participant increases than he will be given negative point.<br></h5>
                                        </li><br>

                                        <li><h4><b><u>	2. MOCK TEST (solo participation, ENTRY FEE: Rs.100 per head)</u></b></h4><br>
                                        <h5> 1.All the participants have to appear in aptitude exam.<br>
                                             2.The question paper will have 40 questions time limit 30 minutes<br>
                                             3.All the qualifiers will have to participate in Group discussion.<br>
                                             4.The qualifiers of group discussion will be decided by the allocated faculty as judge<br>
                                             5.The qualifiers of GD will have to give personal interview.<br>
                                             6.The winner will be assigned by their respective score.<br>
                                             7.The results will be decided by the jury member.<br>
                                            8.No alteration will be entertained against their decision.<br></h5>
                                        </li><br>

                                        <li><h4><b><u> 3. SPELL BEE (solo participation, ENTRY FEE: Rs.50 per head) </u></b></h4><br>
                                          <h5>Round 1 will consist of a written test and shortlisting will be done in this round. <br>
										  This will be a ' one word for a sentence round'<br>
                                          Round 2 will consist of a vocal round in which the shortlisted participants will have to spell the words spoken in front of them.
                                         Elimination will be done in this round only and the one to get max correct will be the winner<br></h5> 
                                        </li><br>

                                        <li><h4><b><u> 4. DEBATE (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                          <h5>    1.There will be two sides of the pre-decided topic: for & against.<br>
                                                  2.Participants will be divided evenly in the two sides.<br>
                                                  3. 2 participants, 1 each from the two sides will be selected at a time.<br>
                                                   4. Both will deliver their independent speech on their respective stand for a maximum time of 3 minutes. 
												   (After 3 minutes, negative marking will be done).<br>
                                                 5.Once both individuals are done with their speeches, they are allowed to counter each other.<br>
                                                6.After that, the audience will be given a chance to counter the participants.<br>
                                                7.Winners will be decided by the judges on the basis of 5 fields<br>
                                               <h4>mentioned below:<h4>
                                                1. Fluency<br>
                                                2. Pronunciation<br>
                                                3. Confidence<br>
                                                4. Grammar<br>
                                                5. Questioning & answering qualities.<br>
												Disqualification is applicable for use of slangs and offensive languages.<br></h5>
                                        </li><br>

                                        <li><h4><b><u> 5. Mock Parliament (team participation, ENTRY FEE: Rs.50 per head) </u></b></h4><br>
                                           <h5>1.The debate will be presided over by the Mr. or Madam Speaker.<br>
                                              2. There would be total 3 knockout rounds of discussion for both the teams.<br>
                                              3.Both the teams have to choose one language in common i.e. Hindi or English. The team A which is in the side in favor shall
                                                   sit on the right-hand side of the Speaker.<br>
                                              4. The Opposition (the side against) shall sit on the left.<br>
                                              5. The speaking order will be as follows: First the leader of Team
                                                  A (the team in favor), followed by the leader of Team B (the team against)<br>
                                               6.Maximum speaking times are 5 minutes for each member of both the teams. There are no minimum times.<br>
                                               7.During the rebuttal, Members of both the teams may not bring up any new arguments or new
                                               evidence except in direct refutation of material which has already been presented.<br>
                                               8.Members will speak only when called upon by the leader of the team. There is to be no heckling.<br>
                                              9.There will be no Points of Order or Points of Personal Privilege Raised. If the condition gets to worst 
											  (any use of slang word,abusive words, political issue or any kind of misbehavior or chaos created) , the guilty Team would be disqualified.<br>
                                           10.Points of Information are raised while another Member has the floor (i.e. is speaking).<br>
                                           11.If a Member wishes to raise a Point of Information, he/she should stand and with one hand<br>
                                           12.On their head and another pointing forward (in teapot-style) and say: “On that point”.<br> 
										   13.The person who is speaking may refuse to take the point saying: “Not at this time.”<br>
                                           14.Alternatively, they may to choose to take the point. If thespeaker refuses the point<br>
										   15.The Member raising the POI must sit down. <br>
										   16.Otherwise, they should deliver their point as succinctly as possible (in less than 15 seconds) Often the point is phrased as a question. All
                                           17.speakers should attempt to both deliver at least one POI and to accept one POI during the
                                           18.Course of the debate.
                                           19.Props (e.g. drawings, models) may not be used.
                                           20.Courtesy must be shown to all other Members at all times..<br></h5> 
                                        </li><br>
                                    </ul>

                                </div>
                           
										
                         
                                        <!-- BEGIN: SECTION #06 -->
                            <div class="acc-title">
                                <h2 style="cursor:pointer;"><i class="fa fa-adn"></i>Knowledge Management Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 style="text-align: center;">Knowledge Management Events</h1>
                                <ul>
                                     <li><h4><b><u>1. AN IDEA FOR A CHANGE (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                         <h5>1.There will be group of 2 participants in this Event.<br>
                                             2.Each group will be provided 5 to 8 mins to present their idea.<br>
                                             3.The preferred language must be English.<br>
                                             4.Power Presentation/ Slideshow is required.<br>
                                             5.Topic selected by group must have relevance to technical fields.<br>
                                             6.The jury members will take the decision about the winners.<br>
                                             7.The idea should be innovative.<br>
											 8.The group members may bring charts to present their idea,also markers will be provided to make it understand better.<br>
                                             9.Both of the partners have to speak to express their idea.<br></h5> 
                                     </li><br>
									 
                                     <li><h4><b><u> 2. QUIZ (groups of 4, ENTRY FEE: Rs.200 per team) </u></b></h4><br>
                                     <h5>1.Only team entries are available.<br>
                                         2.A team shall consist of minimum 2 members and a maximum of 4 members.<br>
                                         3.The decision of the quiz master will be final and will not be subjected to any change.<br>
                                         4.The participants are not allowed to use mobile phones or any electronic instruments.<br>
                                          5.The questions will be in the form of multiple choice, True/False, Specific answer, etc.<br>
                                          6. Audience is not allowed to give any kind of hints or clues to the participants.<br>
                                          7.Replacement of any team member is not allowed after team registration.<br>
                                         8.Teams registered should give an appropriate name to their team by which they will be known.<br>
                                          <h4>  ELIMINATION ROUND (In Case more than 6 teams register)</h4><br>
                                               a. Each team will be given a set of 25 multiple choice questions.<br>
                                               b. Time limit – 15 minutes.<br>
												c.Only 6 teams with maximum marks will be selected for next rounds.<br>
												d.In case of tie between 2 or more teams, 5 tie breaker questions will be asked for final selection.<br>
											<h4>STAGE ROUNDS:</h4>
										<h4>  ROUND 1:</h4><br>
										a.  Each team will be asked 4 questions.<br>
										b. 10 points will be rewarded for every correct answer and -5 for every wrong answer. No points will be deducted if team is unable to answer.<br>
										c. If a team is unable to answer the question the question will be passed on to another team and the team answering the passed question will be rewarded 5 points.<br>
										d. Answering time is 30 seconds.<br>
										e. Team discussion is allowed.<br>
									<h4> ROUND 2: (Rapid fire round):</h4><br>
										a. Each team will be asked 10 questions in a 2minute time.<br>
										b. 10 points for every correct answer and -5 for every wrong answer. No points will be deducted if team is unable to answer.<br>
										c. Unanswered questions will not be passed to another team.<br>
										d. Team discussion is allowed.<br>
									<h4> ROUND 3: (Buzzer round):</h4><br>
										a. A question will be asked and he team pressing the buzzer first will get to answer first.<br>
										b. In all 6 questions will be asked.<br>
										c. 10 marks for every correct answer and -5 for every wrong answer. No points will be deducted if team is unable to answer.<br>
										1. If the team who presses the buzzer first is unable to answer the question the question will be passed to another team and the answering team will be awarded 5 points for the correct answer.<br>
										2. Answering time is 30 seconds.<br></h5> 
													</li><br>

                                     <li><h4><b><u> 3.IQ SECTOR (solo participation, ENTRY FEE: Rs.50 per head) </u></b></h4><br>
                                         <h5>1.READ THE QUESTIONS CAREFULLY.<br>
                                             2.FOR EACH CORRECT ANSWER = 2 MARKS.<br>
                                             3.FOR EACH WRONG ANSWER = -1 MARKS.<br>
                                             4.NO ELECTRONIC ITEMS ARE ALLOWED.<br>
                                             5.USE OF PEN ON THE QUESTION PAPER IS NOT ALLOWED.<br>
                                             6.FILL THE OMR SHEETS PROPERLY.<br>
                                             7.FILL ALL THE BUBBLES CAREFULLY.<br>
                                             8.DO NOT FOLD THE OMR SHEET<br></h5> 
                                     </li><br>

                                 </ul>
                            
							 </div>
							 
							 
							   <!-- BEGIN: SECTION #07 -->
                                             <div class="acc-title">
                                <h2 style="cursor:pointer;" class=" "><i class="fa fa-columns"></i>Creative Events</h2>
                            </div>
                            <div class="pane acc-sec">
                                <h1 style="text-align: center;">Creative Events</h1>
                                <ul>
                                         <li><h4><b><u> 1. Poster Making (solo participation, ENTRY FEE: Rs.100 per head) </u></b></h4><br>
                                     <h5>1.THERE SHOULD BE MAXIMUM 3 MEMBERS IN A GROUP.<br>
                                         2.PARTICIPANTS SHOULD HAVE THEIR OWN STATIONARY.<br>
                                         3.THEME WILL BE GIVEN ON THE SPOT.<br>
                                         4.EACH PARTICIPANT WILL GET ONE HOUR TO COMPLETE THEIR POSTERS.<br>
                                         5.JUDGMENT CRITERION SHALL BE ON CREATIVITY DESIGN, CLARITY, CONTENT AND ELEMENTS PRESENT.<br>
                                         6.DECISION OF THE JUDGE WILL BE FINAL AND BINDING..<br></h5> 
                                    </li><br>

                                    <li><h4><b><u> 2. Creative Writing (solo participation, ENTRY FEE: Rs.150 per head) </u></b></h4><br>
                                      <h5>1.It is an individual competition.
                                          2.It will be descriptive form of writing.
                                          3.Time limit will be 1 hour and word limit is 1000 words.
                                          4.Negative marking for exceeding the word limit.
                                          5.Topic will be given on the spot. 
                                          6.Participants will be judged on Idea Mapping, Writing Skills and Expression.
                                          7.Only sheets will be provided. Get your own stationery.
                                          8.No Electronic gadgets like cell phones, Laptops, etc. shall be allowed.
                                          9.No second person, other than the participants will be entertained.
                                         10.Don’t carry any extra sheet or paper during the competition.
                                         11.Decision of the judges will be final and binding.<br></h5> 
                                    </li><br>
                               </ul>
                            </div>
                       
                        <!-- END: DESIGNARE VERTICAL TABS SUBSTITUTE FOR MOBILE DEVICES-->
                    </div>
                    <!--  end container -->
                </div>
				 </div>
	            
	            <div class="white-space"></div>

	            <!-- BEGIN: PROJECTS STYLE 2 NO-SCROLLER -->
	            <section id="lastprojects4-20" class="home_widget recentProjects4">
	                <div class="projects_container_s4">
	                    <div class="page_title_s4 sixteen columns a-left">
	                    	<span class="page_info_title_s4">Event Gallery</span>
	                    </div>
	                    <div class="project_list_s4">
	                        <ul class="slides_container jcarousel-skin-tango">
	                            <div class="projs_row">
	                                
	                                <!-- PROJECT #01 
	                                <div class="indproj2  one-third column">
	                                    <ul class="da-thumbs da-recent-projs">
	                                        <li>
	                                            <a class="noscroll" href="#">
	                                                <div class="slides_item post-thumb">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/8.JPG" />
	                                                </div>
	                                            </a>
	                                            <a class="pp-link" style="display:none;" href="img/techsparks/8.JPG"></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                                
	                                <!-- PROJECT #02 
	                                <div class="indproj2  one-third column">
	                                    <ul class="da-thumbs da-recent-projs">
	                                        <li>
	                                            <a class="noscroll" href="#">
	                                                <div class="slides_item post-thumb">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/7.JPG" />
	                                                </div>
	                                            </a>
	                                            <a class="pp-link" style="display:none;" href="img/techsparks/7.JPG"></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                                
	                                <!-- PROJECT #03 
	                                <div class="indproj2  one-third column">
	                                    <ul class="da-thumbs da-recent-projs">
	                                        <li>
	                                            <a class="noscroll" href="#">
	                                                <div class="slides_item post-thumb">
	                                                    <img class="img_thumb" alt="" src="img/techsparks/1.JPG" />
	                                                </div>
	                                            </a>
	                                            <a class="pp-link" style="display:none;" href="img/techsparks/1.JPG"></a>
	                                        </li>
	                                    </ul>
	                                </div>

                                    <!-- PROJECT #03 --
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/2.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/2.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 --
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/3.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/3.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 --
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/4.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/4.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 --
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/5.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/5.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- PROJECT #03 --
                                    <div class="indproj2  one-third column">
                                        <ul class="da-thumbs da-recent-projs">
                                            <li>
                                                <a class="noscroll" href="#">
                                                    <div class="slides_item post-thumb">
                                                        <img class="img_thumb" alt="" src="img/techsparks/6.JPG" />
                                                    </div>
                                                </a>
                                                <a class="pp-link" style="display:none;" href="img/techsparks/6.JPG"></a>
                                            </li>
                                        </ul>
                                    </div>-->
	                            </div>
	                        </ul>
	                    </div>
	                </div>
	                <script type="text/javascript">
	                    jQuery(function ($) {
	                        $('#lastprojects4-20 .da-thumbs > li > a > .post-thumb').hoverdir();
	                    });
	                </script>
	                <div class="clear"></div>
	            </section>
	        </div>
	     </div>
	     <!-- END: FULL CONTENT -->
	     <div class="white-space"></div>
	     <div class="white-space"></div>
	     
		<!-- BEGIN: BREADCRUMBS -->
	 	<div class="breadcrumbs-container"> 
			<div class="entry-breadcrumb no-flicker" style="border: none;"> 
				<p>You are here: <a href="index.php">Home</a><span class="delimiter"> &raquo; </span>TechSparks</p>
			</div>	    		  
		</div>
		
		<!-- BEGIN: BACK-TO-TOP BUTTON -->			
		<div id="back-to-top"><a href="javascript:;"></a></div>
		
<?php require'footer.php'; ?>