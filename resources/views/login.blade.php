<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body class="antialiased">
    @if (session('save'))
    <script>
        alert("Success");
    </script>
    @endif
    @if (session('error'))
    <script>
        alert("Failed");
    </script>
    @endif

    <div class="w3-container">
        <div class="w3-bar w3-teal ">
        <a class="w3-bar-item w3-button w3-right" href="{{ url('index') }}">
                Landing Page</a>
            <a class="w3-bar-item w3-button w3-right" href="{{ url('registration') }}">
                Register</a>
        </div>
        <header class="w3-header w3-teal w3-center w3-padding-16" style="height:80px">
            <h2>MyTutor</h2>
        </header>
        <div class="w3-padding">
            <div class="w3-card w3-round">
                <header class="w3-teal w3-padding">
                    <h3>Login Form</h3>
                </header>
                <div class="w3-padding ">
                    <form action="{{route('login.post')}}" method="post" accept-charset="UTF-8">
                        {{csrf_field()}}
                        <label for="email">Email</label>
                        <p><input id="email" class="w3-input w3-round w3-border" type="email" name="email" required></p>
                        @if ($errors->has('email'))
                        <span class="w3-red">{{ $errors->first('email') }}</span>
                        @endif
                        <label for="pass">Password</label>
                        <p><input id="pass" class="w3-input w3-round w3-border" type="password" name="password" required></p>
                        @if ($errors->has('password'))
                        <span class="w3-red">{{ $errors->first('password') }}</span>
                        @endif
                        <div class="w3-row">
                            <input type="checkbox" name="remember"> Remember Me
                            <button class="w3-button w3-teal w3-round w3-right">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="w3-container w3-teal w3-center w3-bottom" style="height:50px">
        <p>MyTutor</p>
    </footer>
    </div>
</body>

</html>