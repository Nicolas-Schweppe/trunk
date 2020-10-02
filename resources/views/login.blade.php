
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/login.css" media="all">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>Login</title>
    
</head>
<body>
<div style="background-color:  #2F2C29">


<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
</br>

  </br>  </br>
  

    <!-- Login Form -->
    <form method="POST" action="{{route('login')}}">
      @csrf 
     
      <input type="email" id="email"  class="fadeIn second "  name="email" required value="{{old('email')}}" placeholder="Email">
   
      <input type="password" id="password"  class="fadeIn third" name="password"  required placeholder="Contraseña"></br>
    </br>
      <button type="submit" class="fadeIn fourth" value="Entrar">Entrar</button>
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <span>
            @foreach ($errors->all() as $error)
                <span>{{ $error }}</span>
            @endforeach
        </span>
    </div>
    @endif


    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Olvidaste la clave papafrita?</a>
    </div>

  </div>
</div>

</body>
</html>
