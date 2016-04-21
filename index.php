<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
      <title>new-app</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
      <?php include("page/leftnav.php"); ?>
       <div id="content-area"></div>
  </body>
    <script src="js/jquery-2.2.2.min.js"></script>
    <script>
    
         $(document).ready(function(){         
             
    $('#content-area').fadeOut('fast', function(){
    $('#content-area').load('page/debitur-list.php', function(){
        $('#content-area').fadeIn('fast');
    });
    });
   
    
  
});
    
    </script>
</html>
