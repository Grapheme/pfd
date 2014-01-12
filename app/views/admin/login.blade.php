<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.3.0/pure-min.css">

<div style="width: 300px; margin: 0 auto;">{{ Form::open(array(
            'class' => 'pure-form pure-form-stacked'
        )) 
    }}

    {{ Form::text('user', '', array(
        'placeholder' => 'Пользователь',
        'class' => 'pure-input-1'
        )) 
    }}

    {{ Form::password('password', array(
        'placeholder' => 'Пароль',
        'class' => 'pure-input-1'
        )) 
    }}
    

    {{ Form::submit('Войти', array(
        'class' => 'pure-button pure-button-primary  pure-input-1'
        )) 
    }}

    {{ Form::close() }}
</div>