<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $pageTitle; ?></title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/CSS/Layout.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    
    <script src="/jquery.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
      $(document).ready(function(){
          $('#success').fadeOut('slow').fadeIn('slow').fadeOut('slow').fadeIn('slow').fadeOut('slow');
          $('#err').fadeOut('slow').fadeIn('slow').fadeOut('slow').fadeIn('slow').fadeOut('slow');
      });
    </script>
</head>
<body>