<html>
  <head>
  <title><?php echo $data['title']; ?></title>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    
    <script type="text/javascript">
        var counter = 5;
        var interval = setInterval(function() {
            counter--;
            // Display 'counter' wherever you want to display it.
            if (counter <= 0) {
                clearInterval(interval);
                window.location.href="<?php echo $data['base_url']; ?>";
                return;
            }else{
              document.getElementById("time_id").innerHTML = "The page will be reloaded in "+counter+" seconds.";
            }
        }, 1000);
      </script>
      
  </head>
    <style>
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #e41c30;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #e41c30;
        font-size: 100px;
        line-height: 200px;
        font-style:unset;
      }
      .card {
        background: white;
        padding: 60px;
        border-radius: 4px;
        box-shadow: 0 2px 3px #C8D0D8;
        display: inline-block;
        margin: 0 auto;
      }
    </style>
    <body>
      <div class="card">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">X</i>
      </div>
        <h1>Failed</h1> 
        <h4>Your transaction got Failed</h4>  
            <br/>
            Transaction ID: <?php echo $data['razorpay_payment_id']; ?>
            <br/>
            Booking ID: <?php echo $data['merchant_order_id']; ?>
            <br/>
            <span id="time_id">The page will be reloaded in 5 seconds.</span>
      </div>
    </body>
</html>