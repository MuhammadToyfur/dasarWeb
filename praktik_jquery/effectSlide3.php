<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleSlide.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
        $(document).ready(function(){
            $("#flip").click(function(){
                $("#kotak2").slideToggle("slow");
            });
        });
        </script>
    </head>
    <body>
        <div id="flip">Klik untuk Efek Slide</div>
        <div id="kotak2">Selamat Pagi</div>
    </body>
</html>