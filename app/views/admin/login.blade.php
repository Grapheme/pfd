<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->
    <link href="/vendor/twitter/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style>
        body {
          padding-top: 40px;
          padding-bottom: 40px;
          background-color: #eee;
        }

        .form-signin {
          max-width: 330px;
          padding: 15px;
          margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
          margin-bottom: 10px;
        }
        .form-signin .checkbox {
          font-weight: normal;
        }
        .form-signin .form-control {
          position: relative;
          font-size: 16px;
          height: auto;
          padding: 10px;
          -webkit-box-sizing: border-box;
             -moz-box-sizing: border-box;
                  box-sizing: border-box;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="text"] {
          margin-bottom: -1px;
          border-bottom-left-radius: 0;
          border-bottom-right-radius: 0;
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-top-left-radius: 0;
          border-top-right-radius: 0;
        }
    </style>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

        {{ Form::open(array(
            'class' => 'form-signin',
            'role' => 'form'
        )) 
    }}
    <h2 class="form-signin-heading">Please sign in</h2>

    @if (Session::has('message'))
        <div class="flash alert">
            <p>{{ Session::get('message') }}</p>
        </div>
    @endif

    {{ Form::text('user', '', array(
        'placeholder' => 'Пользователь',
        'class' => 'form-control'
        )) 
    }}

    {{ Form::password('password', array(
        'placeholder' => 'Пароль',
        'class' => 'form-control'
        )) 
    }}
    

    {{ Form::submit('Войти', array(
        'class' => 'btn btn-lg btn-primary btn-block'
        )) 
    }}

    {{ Form::close() }}

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
