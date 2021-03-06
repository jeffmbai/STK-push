<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Lipa na Mpesa</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script>
            function validate(evt) {
                var theEvent = evt || window.event;
              
                // Handle paste
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                // Handle key press
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                var regex = /[0-9]/;
                if( !regex.test(key) ) {
                  theEvent.returnValue = false;
                  if(theEvent.preventDefault) theEvent.preventDefault();
                }
              }
        </script>
        
        <style>
          html, body {
                background-color: #fff;
                color: #636b6f;
                padding-top:80px;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
               
            }
             .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 40px;
                padding:20px;
            }
            
            .send {
                background-color:#b3e6b3;
                height:40px;
                width:150px;
                border-radius:60px;
                font-family: 'Raleway', sans-serif;
                font-weight: 150;
                font-size:15px;
            }
        </style>
    </head>
        <body>
            <h1><center>Enter phone number and amount</center></h1>
        <div class="content">
            <form action="/requestpay" method="POST">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <label>phone to send push STK</label><br>
                <input type='text' onkeypress='validate(event)' name="phonenumber" placeholder="254..." maxlength="12" minlength="10" required><br><br>
                <label>Amount to request Payment</label><br>
                <input type='text' onkeypress='validate(event)' name="amount" placeholder="Ksh." maxlength="4" required><br><br>
                <input  class="send" type="submit" value="Send Request">
            </form>
        </div><br>
        <center><i>Powered by Siweb Kenya><a href="tel:+254111983314"><i class="fa fa-phone" aria-hidden="true"></i>Call us</a></i></center>
    </body>
</html        