<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Home | Griya Hijau</title>

        <!-- CSS -->
		<link rel="stylesheet" type="text/css" href="style/jquery-ui-1.9.1.custom.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style/menu.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style/style.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="style/lightbox.css">

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
                    $("#accordion-projects").accordion({
                        heightStyle: "content",
                        collapsible: "true",
                        active: "false"
                    });
                });
			});
		</script>
        
        <!--Map-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <meta charset="UTF-8">
        
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
            <script type="text/javascript">
                var map;
                var mainMap;
                function initialize() {
                    var myOptions = {
                        panControl: false,
                        zoomControl: false,
                        mapTypeControl: false,
                        scaleControl: false,
                        streetViewControl: false,
                        overviewMapControl: false,
                        zoom: 15,
                        center: new google.maps.LatLng(-6.23779, 106.62894),
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById('contactUS_mainFrame_right_Map'),myOptions);
              }
        
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
        <!--End Map-->


        <!-- FONTS -->
        <link href='http://fonts.googleapis.com/css?family=Petit+Formal+Script|Patua+One' rel='stylesheet' type='text/css'>
	</head>
    
    <body>
        <div id="toolbar" class="dropShadow">
            <div id="toolbar-header">
                GRIYA HIJAU Development
            </div>
            <ul id="toolbar-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about-us">About Us</a></li>
                <li><a href="javascript:void(0)" class="show_hide">Contact Us</a></li>
                <li>|</li>
                <li>Stay Connected</li>
                <li class="icon-facebook"><a href=""></a></li>
                <li class="icon-twitter"><a href=""></a></li>
            </ul>
        </div>
        <div id="mainHeader"></div>
        <div id="sections">
            <div id="home">
                <div class="section-header">Griya Hijau Development</div>
            	<div id="content">
                	<p>
                    	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
                    </p>
                    
                    <p>
                    	Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
                    </p>
                    
                    <p>
                    </p>
                </div>
            </div>

            <div class="divider"></div>

            <div id="projects">
                <div class="section-header">Projects</div>
                <div id="accordion-projects">
                    <h3><div class="accordion-header"><img src="images/gh1.png"></div></h3>
                    <div>

                        <!-- tabs -->
                        <div id="tab-project-1">
                            <ul>
                                <li><a href="#tabs-1">Tipe-A</a></li>
                                <li><a href="#tabs-2">Tipe-B</a></li>
                            </ul>
                            <div id="tabs-1">
                            	<div id="tipeA"></div>

                                <div id="container-1">
                                    <div class="image-container">

                                        <a href="images/content/denah-41-72.jpg" rel="lightbox[tipeA]" title="Denah Bangunan Tipe 41/72">
                                            <img src="images/content/denah-41-72.jpg">
                                        </a>

                                        <a href="images/content/denah-45-108.jpg" rel="lightbox[tipeA]" title="Denah Bangunan Tipe 45/108">
                                            <img src="images/content/denah-45-108.jpg">
                                        </a>

                                        <a href="images/content/siteplan.jpg" rel="lightbox[tipeA]" title="Siteplan">
                                            <img src="images/content/siteplan.jpg">
                                        </a>

                                    </div>
                                </div>
                                
                                <!-- <h4>Floor Plan</h4>
                                <div class="fp1tipeA"><b><center>Tipe 41/72</center></b></div>
                                <div class="fp2tipeA"><b><center>Tipe 45/108</center></b></div>

                                <h4>Site Plan</h4>
                                <div class="sptipeA"></div> -->
                            </div>
                            
                            <div id="tabs-2">
                            	<div id="tipeB"></div>
                                
                                <div id="container-2">
                                    <div class="image-container">
                                    
                                        <a href="images/content/denah-69-72.jpg" rel="lightbox[tipeB]" title="Denah Bangunan Tipe 69/72">
                                                <img src="images/content/denah-69-72.jpg">
                                            </a>
                                        
                                        <a href="images/content/siteplan.jpg" rel="lightbox[tipeB]" title="Siteplan">
                                                <img src="images/content/siteplan.jpg">
                                        </a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tabs -->
                    </div>

                    <h3>Mansion Garden</h3>
                    <div>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
                    </div>
                </div>
            </div>

            <div class="divider"></div>

            <div id="about-us">
                <div class="section-header">About Us</div>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
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
                                	<input type="submit" value="Send Message" class="fsSubmitButton" />
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