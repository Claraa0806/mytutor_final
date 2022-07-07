<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
    <body class="antialiased">
    <div class="w3-bar w3-teal">
        <a class="w3-bar-item w3-button w3-right" href="{{ url('login') }}">
                Login</a>
            <a class="w3-bar-item w3-button w3-right" href="{{ url('registration') }}">
                Register</a>
        </div>
            <header class="w3-header w3-teal w3-center w3-padding-16" style="height:80px">
            <h2>MyTutor</h2>
        </header>
        <div class="w3-padding">
            <div class="w3-card w3-round">
                <header class="w3-teal w3-padding">
                    <h3>Landing Page</h3>
                </header>
                <div class="w3-padding w3-center">
                <h2>About</h2>
                <p>MyTutor allows users to find tutors and register for related subjects.</p>
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
