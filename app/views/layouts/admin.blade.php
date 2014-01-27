<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="<?=URL::to('css/normalize.css');?>">
    <link href="<?=URL::to('vendor/twitter/bootstrap/dist/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?=URL::to('css/admin.css');?>" rel="stylesheet">

    {{ HTML::style('css/redactor.css') }}

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <style>
      table form { margin-bottom: 0; }
      form ul { margin-left: 0; list-style: none; }
      .error { color: red; font-style: italic; }
    </style>
    <!--<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">-->

  </head>

  <body>
  
    <div id="wrapper">
      
      <!-- Sidebar -->
      <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
          <li class="sidebar-brand"><a href="<?=URL::to('admin')?>">Admin Panel</a></li>
          <li><a href="<?=URL::to('admin/statPages');?>">Pages</a></li>
          <li><a href="<?=URL::to('admin/news');?>">News</a></li>
          <li><a href="<?=URL::to('logout');?>">Log Out</a></li>
        </ul>
      </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <!--<div class="content-header">
          <h1>
            <a id="menu-toggle" href="#" class="btn btn-default"><i class="icon-reorder"></i></a>
            Simple Sidebar
          </h1>
        </div>
        <!-- Keep all page content within the page-content inset div! -->
        <div class="page-content inset">
          @yield('content')
        </div>
      </div>
      
    </div>
    
    <!-- JavaScript -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <script src="<?=URL::to('js/admin.js');?>"></script>

    {{HTML::script('js/vendor/redactor.js');}}
    {{HTML::script('js/redactor-config.js');}}

    <!-- Custom JavaScript for the Menu Toggle -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("active");
    });
    </script>
  </body>
</html>