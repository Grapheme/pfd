{{ Form::open(array(
            "action" => "AdminController@login",
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