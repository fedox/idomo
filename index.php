<!DOCTYPE html>

<html>
<head>
	<title>iDomo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" charset="UTF-8">
	<link rel="stylesheet" href="normalize.css">
	<link rel="stylesheet" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>
		$(function() { 
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
</head>
<body>
	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="#">iDomo</a></li>
			<li><a href="#">Température</a></li>
			<li><a href="#">Hygrométrie</a></li>
			<li><a href="#">Vidéo</a></li>
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>

<TABLE BORDER="0"> 
  
    
 <TR>  <TD> Lampe de Bureau </TD> <TD>     <composents class="clearfix">
        <ul class="clearfix">
  <li>
    			<div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active"><div class="onoffswitch-switch">ON</div></div>
                            <div class="onoffswitch-inactive"><div class="onoffswitch-switch">OFF</div></div>
                        </div>
                    </label>
                </div>
            </li>
    </ul>
</composents>
	 </TD> </TR>
 <TR><TD> Lampe du plafond </TD> <TD>     <composents class="clearfix">
        <ul class="clearfix">
  <li>
    			<div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active"><div class="onoffswitch-switch">ON</div></div>
                            <div class="onoffswitch-inactive"><div class="onoffswitch-switch">OFF</div></div>
                        </div>
                    </label>
                </div>
            </li>
    </ul>
</composents>
	 </TD> </TR> 
 
  <TR> <TD> Lampe de nuit</TD> <TD>     <composents class="clearfix">
        <ul class="clearfix">
  <li>
    			<div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active"><div class="onoffswitch-switch">ON</div></div>
                            <div class="onoffswitch-inactive"><div class="onoffswitch-switch">OFF</div></div>
                        </div>
                    </label>
                </div>
            </li>
    </ul>
</composents>
	</TD> 
 </TR>
 <TR><TD> Ventilateur</TD> <TD>     <composents class="clearfix">
        <ul class="clearfix">
  <li>
    			<div class="onoffswitch">
                    <input type="checkbox" name="onoffswitch1" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                    <label class="onoffswitch-label" for="myonoffswitch">
                        <div class="onoffswitch-inner">
                            <div class="onoffswitch-active"><div class="onoffswitch-switch">ON</div></div>
                            <div class="onoffswitch-inactive"><div class="onoffswitch-switch">OFF</div></div>
                        </div>
                    </label>
                </div>
            </li>
    </ul>
</composents>
	</TD> 
    </TR> 
</TABLE>



	  
	


	
</body>
</html>
