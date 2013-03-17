i


iii

DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
		<!-- Meta Data -->
<!--		<meta name="keywords" content="" />
		<meta name="description" content="Check out the interesting wallpaper on SmilingStart." />-->
                
		<title>SmilingStart</title>
                <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
                <link rel="shortcut icon" href="/frontend/img/Icons/HoverSsLogo.png" type="image/png" />
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />
		<!-- Stylesheets -->
        <link rel="stylesheet" type="text/css" href="/homepage/css/homepage.css" />
		<!-- Javascripts -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script src="/frontend/js/jquery.cookie.js"></script>
		<script type="text/javascript" src="/homepage/js/hoverbox.js"></script>
		<script type="text/javascript" src="/homepage/js/jquery.colorbox-min.js"></script>
		<!-- External Custom Scripts -->
        <script>
            var globalCampaignId = 27;
        </script>
		<script type="text/javascript" src="/homepage/js/scripts.js"></script>
		
		<!-- Include webfont script for "Helvetica Neue" -->
		
		<!-- Custom Scripts -->
		<script type="text/javascript">
$(document).ready(function(){
             	//$('.popbox').popbox();
             	
             	$('#fsbtn').click(function(e){

/********* Full Screen *********/

if ((document.fullScreenElement && document.fullScreenElement !== null) ||    // alternative standard method
      (!document.mozFullScreen && !document.webkitIsFullScreen)) 
	{               // current working methods
            var docElm = document.getElementById("supersized");

            if (docElm.requestFullscreen) {
                docElm.requestFullscreen();

            }
            /******** For Mozilla ********/
            else if (docElm.mozRequestFullScreen) {
                docElm.mozRequestFullScreen();

            }
            /******** For Crome ********/
            else if (docElm.webkitRequestFullScreen) {
                docElm.webkitRequestFullScreen();

            }
            else
                {    /******** For IE ********/
                     e.preventDefault();
             		$("#header").toggle("slow", "linear");
             		$("#knowmore").toggle("slow", "linear");
             		$("#searchcontainer").toggle("slow", "linear");
             		$("#socialshare").toggle("slow", "linear");
             		$("#prevbtn").toggle("slow", "linear");
             		$("#nextbtn").toggle("slow", "linear"); 
                        $("#nextbtndisabled").toggle("slow", "linear");
                        $("#prevbtndisabled").toggle("slow", "linear");
                }
    	}
else 
{
            if (document.cancelFullScreen) {

              document.cancelFullScreen();

            } else if (document.mozCancelFullScreen) { 
              document.mozCancelFullScreen();

            } else if (document.webkitCancelFullScreen) {
             document.webkitCancelFullScreen();
            }
    
}

                       
});
});
</script>
         <style>
            #searchcontainer {
                                top: 18.6978%;
                
                right: 12.5862%;
            }
        </style>
        <script>
            $(document).ready(function() {
                $('#searchform').submit(function() {
                    var keyword = encodeURI($('#searchtb').val());
                    var selected = $('#searchlist > li > a.current').attr('id');

                    var googleurl = 'http://google.com/search?q=' + keyword;
                    var yahoourl = 'http://search.yahoo.com/search?p=' + keyword;
                    var bingurl = 'http://www.bing.com/search?q=' + keyword;
                    var facebookurl = 'http://www.facebook.com/search.php?q=' + keyword;
                    var twitterurl = 'https://twitter.com/search?src=typd&q=' + keyword;
                    var youtubeurl = 'http://www.youtube.com/results?search_query=' + keyword;

                    if (selected == 'googlesearch')
                    {
                        window.open(googleurl);
                    }
                    else if (selected == 'yahoosearch')
                    {
                        window.open(yahoourl);
                    }
                    else if (selected == 'bingsearch')
                    {
                        window.open(bingurl);
                    }
                    else if (selected == 'fbsearch')
                    {
                        window.open(facebookurl);
                    }
                    else if (selected == 'twsearch')
                    {
                        window.open(twitterurl);
                    }
                    else if (selected == 'ytsearch')
                    {
                        window.open(youtubeurl);
                    }

                    return false;
                });
            });
            
            $(document).ready(function() { 
                /* mobile */
                    $('#searchform1').submit(function() { 
                    var keyword1 = encodeURI($('#searchtb1').val());
                    var selected1 = $('#searchlist1 > li > a.current').attr('id');

                    var googleurl1 = 'http://google.com/search?q=' + keyword1;
                    var yahoourl1 = 'http://search.yahoo.com/search?p=' + keyword1;
                    var bingurl1 = 'http://www.bing.com/search?q=' + keyword1;
                    var facebookurl1 = 'http://www.facebook.com/search.php?q=' + keyword1;
                    var twitterurl1 = 'https://twitter.com/search?src=typd&q=' + keyword1;
                    var youtubeurl1 = 'http://www.youtube.com/results?search_query=' + keyword1;

                    if (selected1 == 'googlesearch1')
                    {
                        window.open(googleurl1);
                    }
                    else if (selected1 == 'yahoosearch1')
                    {
                        window.open(yahoourl1);
                    }
                    else if (selected1 == 'bingsearch1')
                    {
                        window.open(bingurl1);
                    }
                    else if (selected1 == 'fbsearch1')
                    {
                        window.open(facebookurl1);
                    }
                    else if (selected1 == 'twsearch1')
                    {
                        window.open(twitterurl1);
                    }
                    else if (selected1 == 'ytsearch1')
                    {
                        window.open(youtubeurl1);
                    }
                     return false;
                
                
            });
            });
        </script>
        <script>
            var positionTags = function() {
                var supersizedImg = $('#supersized img');
                var imgHeight = supersizedImg.height();
                var imgTop = parseInt(supersizedImg.css('top'), 10);

                var imgWidth = supersizedImg.width();
                var imgLeft = parseInt(supersizedImg.css('left'), 10);

                $('.popbox').each(function(index, element) {
                    var elem = $(element);
                    elem.css('top', (elem.data('postop') * imgHeight + imgTop) + 'px' );
                    elem.css('left', (elem.data('posleft') * imgWidth + imgLeft) + 'px');
                });
            };

            $(window).load(function() {
                positionTags();

            });
            $(window).resize(function() {
                positionTags();
            });
        </script>
        <!--  change height and width of light box becoz changing welcome page contents.  -->
                                        <meta content="SmilingStart Wallpaper" property="og:title"/>
                <meta content="SmilingStart" property="og:site_name"/>
                <meta content="website" property="og:type"/>
                <meta content="http://test.smilingstart.com/27" property="og:url"/>
                <meta content="http://test.smilingstart.com/assets/wbD9Z3p6kh2JjLFrb0HxLMEuJnPgRyQV.jpg" property="og:image"/>
                <meta content="Check out the interesting wallpaper." property="og:description"/>
	<link rel="image_src" href="http://media.clickonf5.org/image/logo.png" />
</head>
	<body id="fullscreenmain">
        <div id="supersized">
            <img src="http://test.smilingstart.com/assets/wbD9Z3p6kh2JjLFrb0HxLMEuJnPgRyQV.jpg" />
        </div>
		<div id="header">
			<ul id="leftmenu">
				<li style="padding: 5px 10px;">
                                    
                                    <a id="logobtn" href="/" title="SmilingStart Homepage">
<!--                                        <img title="Smiling Start" src='/frontend/img/Icons/OutSsLogo.png'-->
<!--                                            onmouseover="this.src='/frontend/img/Icons/HoverSsLogo.png'"-->
<!--                                            onmouseout="this.src='/frontend/img/Icons/OutSsLogo.png'"/>-->
                                    </a>
                                </li>
				<li>
                                    <a class="menuitem" href="/frontend/howitworks">How It Works</a>
                                </li>
				<li class="mobilegallery">
                                    <a class="menuitem" href="/frontend/gallery">Gallery</a>
                                </li>
			</ul>
			<ul id="rightmenu">
				<li>
					<!-- if logged in then -->
                    					<a id="signinbtn" class="menuitem" href="/user/login">Sign In</a> <br/>
									</li>
				<li>
                                         					<a id="registerbtn" class="orangebtn" href="/frontend/join">Sign Up</a>
									</li>
				<li style="padding: 5px 10px;"><a id="settingsbtn" href="/user/settings" title="Settings">Settings</a></li>
			</ul>
		</div>
            <div id="mobilesearch">
            <form id="searchform1">
				<input id="searchtb1" type="text" />
				<input type="submit" />
				<a id="smallarrow1" href="#"> </a>
				<ul id="searchlist1">
					<li><a id="googlesearch1" class="current" href="google" rel="1">Google</a></li>
					<li><a id="yahoosearch1" href="yahoo" rel="2">Yahoo</a></li>
					<li><a id="bingsearch1" href="bing" rel="3">Bing</a></li>
					<li><a id="fbsearch1" href="facebook" rel="4">Facebook</a></li>
					<li><a id="twsearch1" href="twitter" rel="5">Twitter</a></li>
					<li><a id="ytsearch1" href="youtube" rel="6">Youtube</a></li>
				</ul>
			</form>
        </div>
		<a id="knowmore" href="/frontend/howitworks">&nbsp;</a>
		<div id="searchcontainer">
			<form id="searchform">
				<input id="searchtb" type="text"/>
				<input type="submit" value="" />
				<a id="smallarrow" href="#"> </a>
				<ul id="searchlist">
					<li><a id="googlesearch" class="current" href="google" rel="1">Google</a></li>
					<li><a id="yahoosearch" href="yahoo" rel="2">Yahoo</a></li>
					<li><a id="bingsearch" href="bing" rel="3">Bing</a></li>
					<li><a id="fbsearch" href="facebook" rel="4">Facebook</a></li>
					<li><a id="twsearch" href="twitter" rel="5">Twitter</a></li>
					<li><a id="ytsearch" href="youtube" rel="6">Youtube</a></li>
				</ul>
			</form>
		</div>
                            	<!-- End loop-->
		<div id="footer">
			<ul id="socialshare">
				<li><div>Share: </div></li>
				<li><a id="fbicon" 
					href="http://www.facebook.com/sharer/sharer.php?u=http%3Atest.smilingstart.com%2F27"
					target="_blank" title="Share this Wallpaper on Facebook">Facebook</a></li>
				<li><a id="twittericon" 
					href="http://twitter.com/share?text=Interesting+wallpaper+advertisement+on+%23SmilingStart%3A+&url=http://test.smilingstart.com/27"
					target="_blank" title="Tweet this Wallpaper">Twitter</a></li>
				<li><a id="pinicon" 
					href="http://pinterest.com/pin/create/button/?url=http://test.smilingstart.com/27&media=http://test.smilingstart.com/assets/wbD9Z3p6kh2JjLFrb0HxLMEuJnPgRyQV.jpg&description=Interesting%20wallpaper%20advertisement%20on%20SmilingStart."
					target="_blank" title="Pin this Wallpaper">Pinterest</a></li>
				<li>
                                    <a id="mailicon"
                                       target="_blank" title="Email this Wallpaper to yours Friends"
                                       href="mailto:yourfriend@site.com?Subject=Interesting%20Wallpaper%20on%20SmilingStart&body=Hey,%20I%20think%20you%20will%20like%20this%20interesting%20wallpaper%20on%20SmilingStart:%0Ahttp://test.smilingstart.com/27" title="Mail Us">Mail</a></li>
			</ul>
			<ul id="controlbtns">
                				<li><a id="prevbtn" href="/26" title="Previous">Previous</a></li>
                                                <li><a id="nextbtndisabled" title="Next">Next</a></li>
                				<li><a id="fsbtn"  href="#fullscreen" title="Fullscreen">Fullscreen</a></li>
			</ul>
		</div>

        <div class="signoutbox" style="display:none;">
            <a href="/user/logout">Sign Out</a>
        </div>
        <script type="text/javascript">

            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-34731151-1']);
            _gaq.push(['_setDomainName', 'smilingstart.com']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();

        </script>
        

	</body>
</html>
