<html>
    <head>
        <link rel="stylesheet" href="jquery-ui-1.13.2.custom/jquery-ui.css">
        <script src="jquery-3.7.1.js"></script>
        <script src="jquery-ui-1.13.2.custom/jquery-ui.js"></script>
        <script>
            $(function() {
                $ ("#jQuery_accordion").accordion();
            });
        </script>
    </head>
    <body>
        <div id="jQuery_accordion">
            <h3>Header 1</h3>
            <p>This is section 1.
            Place your content here in paragraphs or use div elements etc</p>
            <h3>Header 2</h3>
            <p>This is section 2. You can also include images like this:
            <br> <img src="img/gambar1.jpg" width="300px" height="300px"/></p>
            <h3>Header 3</h3>
            <div>
                <p>This is section 3. Content can include listing as well
                    <ol>
                        <li>Item 1</li>
                        <li>Item 2</li>
                        <li>Item 3</li>
                    </ol>
                </p>
            </div>
        </div>
    </body>
</html>