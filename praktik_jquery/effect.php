<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
        <script src="jquery-3.7.1.js"></script>
        <script>
            $(document).ready(function() {
                $(".tombol1").click(function() {
                    $("div").hide();
                });
                });
                $(".tombol2").click(function() { 
                    $("div").show();
                });
                    $(".tombol3").click(function() 
                    { $("#div1").fadeOut(); 
                    $("#div2").fadeOut("slow"); 
                    $("#div3").fadeOut(3000);
                });
                $(".tombol4").click(function() {
                     $("#div1").fadeIn(); 
                     $("#div2").fadeIn("slow"); 
                     $("#div3").fadeIn (3000);
                });
                $(".tombol5").click(function() 
                    { $("#div1").fadeTo("slow", 0.15); 
                      $("#div2").fadeTo("slow", 0.4); 
                      $("#div3").fadeTo("slow", 0.7);
                });

            </script>
        </head>
        <body>
            <p>JQuery Effect</p>
            <div id="divl" class="kotak"></div> <br><br>
            <div id="div2" class="kotak"></div> <br><br>
            <div id="div3" class="kotak"></div> <br><br>
            <button class="tomboll">Sembunyikan</button>
            <button class="tombol2">Tampilkan</button>
            <button class="tombol3">Fade Out</button>
            <button class="tombol4">Fade In</button>
            <button class="tombol5">Fade To</button>
    </head>
</html>