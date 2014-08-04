<?php /* Template Name: Test */ ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<meta name="description" content="David + Ginny">
<title>D+G (Can't Buy Me Love)</title>
<?php wp_head(); ?>
</head>
<body>
<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/skrollr.menu.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-1906067-35', 'cantbuymelove.org');
  ga('send', 'pageview');
</script>
</body>
</html>