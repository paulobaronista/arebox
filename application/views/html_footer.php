<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<?php
	echo script_tag('assets/js/materialize.js');
	echo script_tag('assets/js/init.js');
	echo script_tag('assets/js/site.js');
	echo script_tag('assets/js/jquery.clearinput.js');
	echo script_tag('assets/js/jFuncoes.js');
?>
  <script type="text/javascript"> 
    $(document).ready(function(){
      	$('select').material_select();
      	$('select').change(function(){
        	var newValuesArr = [],
            	select = $(this),
            	ul = select.prev();
        			ul.children('li').toArray().forEach(function (li, i) {
            	if ($(li).hasClass('active')) {
                	newValuesArr.push(select.children('option').toArray()[i].value);
            	}
        	});
        	select.val(newValuesArr);
     	});
      	$('.scrollspy').scrollSpy();
      	$('.slider').slider({full_width: true});
      	Materialize.updateTextFields();
    });
  </script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-79421714-1', 'auto');
    ga('send', 'pageview');
  </script>
</body>
</html>