<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <style type="text/css">
        div.ui-menu li {
            list-style:none;
            background-image:none;
            background-repeat:none;
            background-position:0; 
        }
        ul
        {
            list-style-type:none;
            padding:0px;
            margin:0px;
        }
        li
        {
            background-image:url(sqpurple.gif);
            background-repeat:no-repeat;
            background-position:0px 5px; 
            padding-left:14px;
        }
        </style>

</head>
<body>
    @include('menu');
    <div class="container">
        @yield('content')
    </div>
</body>
</html>