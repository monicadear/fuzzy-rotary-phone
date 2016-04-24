<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to the First Version ! </title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                background: #557700 url("/resources/assets/cupcakebackground.jpg");
                filter: alpha(opacity=70);
                filter: progid: DXImageTransform.Microsoft.Alpha(opacity=30);
                -moz-opacity: 0.70;
                opacity: 0.7;
                zoom: 1;
                text-align: center;
                display: table-cell;
                vertical-align: top;
                    margin-top: 100px;
            }

            .content {
                text-align: left;
                display: inline-block;
                    width: 60%;
                        margin: 0 auto;
                            padding: 10px;
                        color: #FFF;
                        background-color: #000;
            }

            .title {
                font-size: 96px;
            }

            a,
            a:link,
            a:visited,
            a:active,
            a:hover {
                color: #FFF;
                    text-decoration: underline;
            }

        </style>

    </head>
    <body>
  
    		@yield('content')

    </body>
</html>
