<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleAnimate.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("div").animate({left: 300});
            });
        });
        </script>
    </head>
    <body>
        <button type="button">Start Animation</button>
        <div class="box"></div>
    </body>
</html>