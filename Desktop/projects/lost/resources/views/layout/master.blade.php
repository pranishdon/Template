<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Asbab - eCommerce HTML5 Templatee</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT:400,400i,700|Poppins:300,400,400i,500,600,700,800')" rel="stylesheet" > 
  
    @vite([
      
    
     
         'resources/css/bootstrap.min.css',
            'resources/css/owl.carousel.min.css',
            'resources/css/owl.theme.default.min.css',
            'resources/css/core.css',
            'resources/css/shortcode/shortcodes.css',
            'resources/css/style.css',
            'resources/css/responsive.css',
            'resources/css/custom.css',


      ])
@vite([
    'resources/js/modernizr-3.5.0.min.js',
    
])

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

</body>


</html>


@include('layout.navigation')
@yield('content')
@include('layout.footer')
@yield('scripts')



