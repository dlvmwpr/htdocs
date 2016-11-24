<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="js/jquery-3.0.0.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title></title>
        <script>
            $(document).ready(function() {
               $.ajax({
                    url:url,
                    datatype:'xml',
                    type:'get',
                    success:function(response){
                    console.log(response);
                }
               }); 
            });
        </script>
    </head>
    <body>
        
    </body>
</html>
