<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo( 'description' ); ?></title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url');?>">
      <?php wp_head(); ?>
      </head>
      <body>
<?php 

$navL = get_option('mockNav');


if (null !== get_template_part('template-parts/nav', $navL)) {
  get_template_part('template-pats/nav', $navL);
} else{
  get_template_part( 'template-parts/nav', $name = null );
}
?>

