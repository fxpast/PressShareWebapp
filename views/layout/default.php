

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">


    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
      <?php
        
        include '../daos/connect.php';
            
        $sql = "SELECT * FROM ParamTable";
        $result = mysqli_query($con, $sql);
        
        if(!$result) {
            echo 'Error connection';
        }
        else {
            while($row = $result->fetch_object()) {
                //the user has admin rights
              
                if($_SERVER['REQUEST_METHOD'] != 'POST') {
                    
                    $colorApp = $row->colorApp;
                    $colorAppLabel = $row->colorAppLabel;
                    $colorAppText = $row->colorAppText;
                    $colorAppPlHd = $row->colorAppPlHd;
                    $colorAppBt = $row->colorAppBt;
                    
                    echo <<<_END
  
                        <style>

                            .colorApp {
                                background-color: #$colorApp;
                            }

                            .colorAppLabel {
                                color: #$colorAppLabel;
                            }

                            .colorAppText {
                                color: #$colorAppText;
                            }

                            
                            input::-webkit-input-placeholder,
                            textarea::-webkit-input-placeholder {
                              color: #$colorAppPlHd;
                            }
                            input:-moz-placeholder,
                            textarea:-moz-placeholder {
                              color: #$colorAppPlHd;
                              opacity: 1;
                            }
                            input::-moz-placeholder,
                            textarea::-moz-placeholder {
                              color: #$colorAppPlHd;
                            }
                            input:-ms-input-placeholder,
                            textarea:-ms-input-placeholder {
                              color: #$colorAppPlHd;
                            }

                            .colorAppBt {
                                color: #$colorAppBt;
                            }

                        </style>

_END;

                    break;
                }
                
                
            }
            
        }
        
    ?>


  </head>
  <body class = "colorApp">

    <div class="container">
    		<?php  
    		  echo $content_for_layout;
    		?>   
	</div>
                    
  </body>


</html>