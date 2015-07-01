<div class="header_body" id="user_panel">
  <!-- USER : LOGOUT -->
  {!! Form::open(array('action' => 'UserController@connect')) !!}

  {!! Form::text('username', null, ['placeholder' => Lang::get('all.login.username'), 'class' => 'input']) !!}

  {!! Form::password('password', ['placeholder' => Lang::get('all.login.password'), 'class' => 'input']) !!}

  <input type="submit" class="btn" value="{{Lang::get('all.login.connect')}}">

  {!! Form::close() !!}

  <a href="#" class="password_lost">{{Lang::get('all.login.missing_password')}}</a>
</div>
