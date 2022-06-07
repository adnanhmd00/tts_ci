<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">
    <title>Thank You For Register</title>
    <style>
        body, html {
            background: #000;
        }
        #wrapper {
            width: 600px;
            margin: 0 auto;
            margin-top: 15%;
        }
        h1 {
            color: #EEE;
            text-shadow: -1px -2px 3px rgba(17, 17, 17, 0.3);
            text-align: center;
            font-family: "Monsterrat", sans-serif;
            font-weight: 900;
            text-transform: uppercase;
            font-size: 80px;
            margin-bottom: -5px;
        }
        h1 underline {
            border-top: 5px solid rgba(26, 188, 156, 0.3);
            border-bottom: 5px solid rgba(26, 188, 156, 0.3);
        }

        h3 {
            width: 570px;
            margin-left: 16px;
            font-family: "Lato", sans-serif;
            font-weight: 600;
            color: #EEE;
        }
    </style>
</head>
<body>
    <div id="wrapper" class="animated zoomIn">
        <h1>  <underline>Thank you!</underline></h1>
        <h3 style="text-align: center;">Our team is verifying your account. <br> Please check again after 24 hours.</h3>
    </div>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        $( document ).ready(function() {
            $("h1").hover(function() { 
            $( this ).addClass("animated infinite pulse"); 
            }, function() {
            $( this ).removeClass("animated infinite pulse");
        });
    });

    </script>
</body>
</html>