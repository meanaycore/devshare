
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Devshare</title>
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <body>

     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="/js/jquery-3.1.1.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/bootstrap.min.js"></script>
          <!-- Static navbar -->
           <nav class="navbar navbar-default navbar-static-top">
             <div class="container">
               <div class="navbar-header">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
                 <a class="navbar-brand" href="#">Devshare</a>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                 <ul class="nav navbar-nav">
                   <li class="active"><a href={{ url('/login') }}>Sign in</a></li>
                   <li><a href={{ url('/register') }}>Sign up</a></li>
                   <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                     <ul class="dropdown-menu">
                       <li><a href={{ url('/logout') }}>logout</a></li>
                     </ul>
                   </li>
                 </ul>
               </div><!--/.nav-collapse -->
             </div>
           </nav>
             @yield('content')
    <div class="container">
</body>
</html>
