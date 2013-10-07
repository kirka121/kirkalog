<html>
<head>
    <title>KirkaBlog - Dead Simple Blogging Board</title>
    <link rel="stylesheet" href="/assets/css/index.css" />
    <script type="text/javascript" src="/assets/js/jquery.js"></script>
    <script type="text/javascript" src="/assets/js/jquery.color.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            spectrum();
            
            function spectrum(){
                var hue = 'rgb(' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ',' + (Math.floor(Math.random() * 256)) + ')';
                $('#main_container').animate( { backgroundColor: hue }, 5000);
                spectrum();
             }
        });
    </script>
</head>
<body>
    <div id="main_container">
        <div id="header">
            This is my Header
        </div>
    </div>
</body>
</html>