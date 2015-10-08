<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <title>Webuild - Vehicle</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- siimple style -->
    <link href='{{ asset("assets/home/css/style.css") }}' rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
{{ asset("resources/assets/home/css/style.css") }}
    <div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <h1>Vehicle</h1>
                    <h2 class="subtitle">We're working hard to improve our website and we'll ready to launch after</h2>
                    <div id="countdown"></div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                        <p class="copyright">Copyright &copy; 2015 - Vehicle</p>
            </div>
            </div>      
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="../resources/assets/home/js/jquery.countdown.min.js"></script>
    <script type="text/javascript">
  $('#countdown').countdown('2015/12/06', function(event) {
    $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
  });
</script>
  </body>
</html>
