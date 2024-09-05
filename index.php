<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="">    
    <link rel="shortcut icon" href="images/logo.png"> 
    <link rel="stylesheet" href="output.css"> 
    
    <!-- FontAwesome CSS-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	


</head> 

<body>


<?php

get_header(); ?>



<div class="bg-emerald-800">
  <h1 class="text-pink-800 bg- ">Hey Im your first jQuery + TailWind page without the bild thing madness --------</h1>
</div>

<div class="bg-sky-400">
<button type="button" id="testButton" class=" colorButton focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Purple</button>
</div>


  <div class="prose max-w-full">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
  </div>
</div>

<?php get_footer();

?>

<script src="src/index.js"></script>


</body>
</html> 


