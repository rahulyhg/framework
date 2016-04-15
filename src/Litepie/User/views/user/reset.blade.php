
<div class="container">
    <div class="row">
        <div class="col-md-6  col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Reset <small>Password</small></div>
                <div class="panel-body">
                    {!!Form::vertical_open()
                    ->id('reset')
                    ->method('POST')
                    ->action('/password/reset')!!}
                    {!! csrf_field() !!}
                    {!! Form::hidden('token')->value($token) !!}

                    {!! Form::email('email')
                    -> label(trans('user.user.label.email'))
                    -> placeholder(trans('user.user.placeholder.email'))!!}

                    {!! Form::password('password')
                    -> label(trans('user.user.label.password'))
                    -> placeholder(trans('user.user.placeholder.password'))!!}

                    {!! Form::password('password_confirmation')
                    -> label(trans('user.user.label.password_confirmation'))
                    -> placeholder(trans('user.user.placeholder.password_confirmation'))!!}

                    {!! Form::submit(trans('user.reset'))!!}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
