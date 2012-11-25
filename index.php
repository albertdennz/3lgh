<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Home | Griya Hijau</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="style/menu.css" />
        <link rel="stylesheet" type="text/css" href="style/style.css" />
		<link rel="stylesheet" type="text/css" href="style/jquery-ui-1.9.2.custom.min.css" />
        <link rel="stylesheet" type="text/css" href="style/lightbox.css" />

        <!-- JAVASCRIPT -->
		<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.9.1.custom.min.js"></script>
        <script type="text/javascript" src="js/lightbox.js"></script>

		<script type="text/javascript">
			$(document).ready(function(){
				$(".slidingDiv").hide();
				$(".show_hide").show();
				
				$('.show_hide').click(function(){
					$(".slidingDiv").slideToggle("slow");
				});

                $(function() {
                    $("#tab-project-1").tabs();
                    $("#tab-project-2").tabs();
                    $("#accordion-projects").accordion({
                        heightStyle: "content",
                        collapsible: "true",
                        active: "false"
                    });
                });
			});
		</script>

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta charset="UTF-8">

        <!-- TWITTER SCRIPT -->
        <script>
        !function(d,s,id){
            var js,fjs=d.getElementsByTagName(s)[0];
            if(!d.getElementById(id)){
                js=d.createElement(s);
                js.id=id;
                js.src="//platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
            }
        }
        (document,"script","twitter-wjs");
        </script>

        <!-- FACEBOOK SCRIPT -->
        <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        </script>


        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script|Patua+One' rel='stylesheet' type='text/css'>
	</head>
    
    <body>
        <div id="toolbar">
            <div id="toolbar-header">
                GRIYA HIJAU Development
            </div>
            <ul id="toolbar-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="javascript:void(0)" class="show_hide">Contact Us</a></li>
                <li>|</li>
                <li>
                    Stay Connected
                    <ul>
                        <li>
                            <a href="https://twitter.com/google" class="twitter-follow-button" data-show-count="false">Follow @google</a>
                        </li>
                        <li>
                            <div class="fb-like" data-href="http://www.facebook.com/Google" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div id="mainHeader"></div>
        <div id="sections">
            <div id="home">
                <div class="section-header">Griya Hijau Development</div>
            	<div id="content">
                	<p>
                    	Developer yang sebelumnya merupakan bagian dari Developer Perumahan Mansion Garden Ciputat, yang telah berhasil menyelesaikan pemasaran dan dalam tahap akhir penyelesaian proyek perdananya sebanyak 30 unit di Perumahan Cluster Mansion Garden Ciputat sepanjang 2011-2012.
                    </p>
                    
                    <p>
                    	Melanjutkan konsep pembangunan perumahan cluster premium di daerah Ciputat, maka segera dimulai proyek perumahan Green Valley, yang berlokasi di Jl. Villa Mutiara IV/jl H. Mahmud Ginding, yang berdekatan dengan Bintaro Jaya sektor IX dan Stasiun KRL Sudimara. Cluster Green Valley akan memiliki unit sebanyak 30, dengan 24 diantaranya merupakan unit 1 lantai dan 6 merupakan unit 2 lantai. Rumah tersebut memiliki desain minimalis yang ramah lingkungan dan modern, dan menggunakan material kualitas setingkat diatas rata-rata perumahan di sekitar Tangerang Selatan.
                    </p>
                    
                    <p>
                    </p>
                </div>
            </div>

            <div class="divider"></div>

            <div id="projects">
                <div class="section-header">Projects</div>
                <div id="accordion-projects">
                    <h3><div class="accordion-header"><img src="resource/image/project/headerBanner/greenValley.png"></div></h3>
                    <div>

                        <!-- tabs -->
                        <div id="tab-project-1">
                            <ul>
                                <li><a href="#tabs-1">Lotus</a></li>
                                <li><a href="#tabs-2">Magnolia</a></li>
                            </ul>
                            <div id="tabs-1">
                            	<div id="tipeA" class="dropShadow"></div>

                                <div id="container-1">
                                    <div class="image-container">

                                        <a href="images/content/Green Valley/denah-41-72.jpg" rel="lightbox[tipeA]" title="Denah Bangunan Tipe 41/72">
                                            <img src="images/content/Green Valley/denah-41-72.jpg">
                                        </a>

                                        <a href="images/content/Green Valley/denah-45-108.jpg" rel="lightbox[tipeA]" title="Denah Bangunan Tipe 45/108">
                                            <img src="images/content/Green Valley/denah-45-108.jpg">
                                        </a>

                                        <a href="images/content/Green Valley/siteplan.jpg" rel="lightbox[tipeA]" title="Siteplan">
                                            <img src="images/content/Green Valley/siteplan.jpg">
                                        </a>

                                    </div>
                                </div>
                            </div>
                            
                            <div id="tabs-2">
                            	<div id="tipeB" class="dropShadow"></div>
                                
                                <div id="container-2">
                                    <div class="image-container">
                                    
                                        <a href="images/content/Green Valley/denah-69-72.jpg" rel="lightbox[tipeB]" title="Denah Bangunan Tipe 69/72">
                                                <img src="images/content/Green Valley/denah-69-72.jpg">
                                            </a>
                                        
                                        <a href="images/content/Green Valley/siteplan.jpg" rel="lightbox[tipeB]" title="Siteplan">
                                                <img src="images/content/Green Valley/siteplan.jpg">
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabs -->
                    </div>

                    <h3><div class="accordion-header"><img src="resource/image/project/headerBanner/masionGarden.png"></div></h3>
                    <div>
                    
                         <!-- tabs -->
                        <div id="tab-project-2">
                            <ul>
                                <li><a href="#tabs-1">Tulip</a></li>
                                <li><a href="#tabs-2">Rose</a></li>
                            </ul>
                            <div id="tabs-1">
                            	<div id="tulip" class="dropShadow"></div>
                                
                                <div id="container-3">
                                    <div class="image-container">

                                        <a href="images/content/Mansion Garden/denah-41-72.jpg" rel="lightbox[tulip]" title="Denah Bangunan Tipe 41/72">
                                            <img src="images/content/Mansion Garden/denah-41-72.jpg">
                                        </a>

                                        <a href="images/content/Mansion Garden/site-plan.jpg" rel="lightbox[tulip]" title="Siteplan">
                                            <img src="images/content/Mansion Garden/site-plan.jpg">
                                        </a>
                                        
                                        <a href="images/content/Mansion Garden/peta-lokasi(view).jpg" rel="lightbox[tulip]" title="Peta Lokasi">
                                            <img src="images/content/Mansion Garden/peta-lokasi.jpg">
                                        </a>

                                    </div>
                                </div>
                            </div>
                            
                            <div id="tabs-2">
                            	<div id="rose" class="dropShadow"></div>
                                
                                <div id="container-4">
                                    <div class="image-container">

                                        <a href="images/content/Mansion Garden/denah-45-84.jpg" rel="lightbox[rose]" title="Denah Bangunan Tipe 45/84">
                                            <img src="images/content/Mansion Garden/denah-45-84.jpg">
                                        </a>

                                        <a href="images/content/Mansion Garden/site-plan.jpg" rel="lightbox[rose]" title="Siteplan">
                                            <img src="images/content/Mansion Garden/site-plan.jpg">
                                        </a>
                                        
                                        <a href="images/content/Mansion Garden/peta-lokasi(view).jpg" rel="lightbox[rose]" title="Peta Lokasi">
                                            <img src="images/content/Mansion Garden/peta-lokasi.jpg">
                                        </a>

                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- tabs -->
                        
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div id="about-us">
                <div class="section-header">Our Gallery</div>
                
                	<div class="image-container">
                        <a href="images/gallery/mansion1.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion1.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion2.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion2.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion3.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion3.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion4.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion4.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion5.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion5.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion6.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion6.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion7.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion7.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion8.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion8.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion9.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion9.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion10.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion10.jpg">
                        </a>
                        
                        <a href="images/gallery/mansion11.jpg" rel="lightbox[gallery]" title="Mansion Garden">
                            <img src="images/gallery/mansion11.jpg">
                        </a>
                	</div>

            </div>
        </div>
        
        <div class="slidingDiv">
        	<div id="slidingHeader" class="dropShadow_lighter"></div>
            <div id="slidingContent">
            	<div id="contactUS_mainFrame">
                	<div id="contactUS_mainFrame_left">
                	  <form name="frm_sendEmail" action="sendEmail.php" method="post">
               	  <table width="100%">
                        	<tr>
                                <td>
                                	Name <span class="required">(required*)</span><br />
                                    <input type="text" name="tb_name" id="tb_name" class="inputTextStyle" />
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Email Address <span class="required">(required*)</span><br />
                                    <input type="text" name="tb_email" id="tb_email" class="inputTextStyle" />
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	Your Message <span class="required">(required*)</span><br />
                                    <textarea name="tb_email" id="tb_email" class="inputTextAreaStyle" ></textarea>
                                </td>
                            </tr>
                            <tr>
                            	<td>
                                	<input type="submit" value="Send Message" id="fsSubmitButton" />
                                    <input type="button" value="May be later" id="fsSubmitButton" class="show_hide" onclick="javascript:void(0)" />
                                </td>
                            </tr>
                        </table>
                        </form>
                    </div>
            	</div>
            </div>
        </div>


        <script type="text/javascript">
            $(function() {
                $('#toolbar-menu li a').bind('click', function(event){
                    var $anchor = $(this);
                    
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top
                    }, 1500,'easeInOutExpo');

                    event.preventDefault();
                });
            });
        </script>
    </body>
</html>