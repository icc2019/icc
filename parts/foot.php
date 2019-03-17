
<!-- ***************** - JavaScript Starts Here - ***************** -->
<!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"> -->
</script><script type="text/javascript" src="assests/js/custom-main.js"></script>
<script type="text/javascript" src="assests/js/superfish.js"></script>
<script type="text/javascript" src="assests/js/jquery.flexslider.js"></script>
<script type="text/javascript" src="assests/js/jquery.fitvids.js"></script>
<script type="text/javascript" src="assests/js/scrollWatch.js"></script>
<script type="text/javascript" src="assests/js/jquery.isotope.js"></script>
<script type="text/javascript" src="assests/js/jquery.ui.core.min.js"></script>
<script type="text/javascript" src="assests/js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="assests/js/jquery.ui.tabs.min.js"></script>
<script type="text/javascript" src="assests/js/jquery.ui.accordion.min.js"></script>
<script type="text/javascript" src="assests/js/jquery.prettyPhoto.js"></script>
<script>
jQuery(document).ready(function () {
    jQuery('.tt-parallax-text').fadeIn(1000); //delete this to remove fading content

    var $window = jQuery(window);
    jQuery('section[data-type="background"]').each(function () {
        var $bgobj = jQuery(this);

        jQuery(window).scroll(function () {
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            var coords = '50% ' + yPos + 'px';
            $bgobj.css({
                backgroundPosition: coords
            });
        });
    });
});
</script>

<!--[if !IE]><!--><script>
  if (/*@cc_on!@*/false) {
	  document.documentElement.className+=' ie10';
  }
</script><!--<![endif]-->
</body>
</html>
