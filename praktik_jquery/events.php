<!DOCTYPE html>
<htmL>
    <head>
        <style> 
        #paragraf{
            width:600px;
            height: 80px;
            background-color: pink;
            text-align: center;
            line-height: 80px;
            font-size: 30px;
        }
    </style>
    <script src="jquery-3.7.1.js"></script>
    <script>
    $(document).ready(function() {
    $("#paragraf").click(function() {
        $("#paragraf").css("color", "white");
    });
    $("#paragraf").mouseover (function() {
        $("#paragraf").css("background-color", "silver");
    });
        $("#paragraf").mouseout(function() {
    $("#paragraf").css("background-color", "blue");
    });
        $("#paragraf").dblclick(function() {
    $("#paragraf").css("border", "solid 3px black");
    });
    });
    </script>
    <body>
        <p id="paragraf">Praktikum Minggu ke- JQuery</p>
    </body>

    </head>
</htmL>