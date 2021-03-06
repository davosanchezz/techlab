<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
      
      <link rel="stylesheet" href="{{ asset('css/main.css') }}">

      <link rel="icon" type="image/vnd.microsoft.icon" href="{{ asset('media/techlab.ico') }}">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <title>TechLab - Login</title>
    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col s10 offset-s1 m10 offset-m1 l4 offset-l4">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="card hoverable z-depth-3 center-align login-card">
                            <div class="card-content">
                              <span class="card-title light-blue darken-3 white-text">Login</span>
                            </div>
                            <div class="card-action">
                                <div class="input-field">
                                    <input placeholder="me@email.com" id="email" type="email" name="email" class="@error('email') invalid @enderror" value="{{ old('email') }}" autofocus>
                                    <label for="email">Correo electrónico</label>
                                    @error('email')
                                        <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
                                    @enderror
                                    </div>
                                  <div class="input-field">
                                    <input placeholder="********" id="password" name="password" type="password" class="@error('password') invalid @enderror">
                                    <label for="password">Contraseña</label>
                                    @error('password')
                                        <span class="helper-text" data-error="{{ $message }}" data-success="right"></span>
                                    @enderror
                                  </div>
                                  <div class="input-field">
                                    <p class="left-align">
                                        <label>
                                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <span>{{ __('Recuerdame') }}</span>
                                          </label>
                                    </p>
                                  </div>
                                  <div class="input-field">
                                    <button class="btn waves-effect waves-light light-blue darken-3" type="submit" name="action">Accesar
                                        <i class="material-icons right">send</i>
                                      </button>
                                  </div>
                            </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>

      <!--JavaScript at end of body for optimized loading-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    </body>
  </html>