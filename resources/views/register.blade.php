<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div class="w3-container">
   <div class="w3-bar w3-teal ">
   <a class="w3-bar-item w3-button w3-right" href="{{ url('index') }}">
                Landing Page</a>
     <a class="w3-bar-item w3-button w3-right" href="{{ url('login') }}"> 
       Login</a>
    </div>
    <header class="w3-header w3-teal w3-center w3-padding-16" style="height:80px">
            <h2>MyTutor</h2>
    </header>
   <div class="w3-padding">
      <div class="w3-card w3-round">
        <header class="w3-teal w3-padding">
          <h3>Registration Form</h3>
        </header>
      <div style="justify-content: center; margin-bottom: 5%;">
       <div class="w3-padding ">
       <form action=" {{route('register.post') }}" method="post">
         {{csrf_field()}}
           <label for="name">Full Name</label>
           <p><input id="name" class="w3-input w3-round w3-border" type=
              "name" name="name" required></p>
           @if ($errors->has('name'))
             <span class="text-danger">{{ $errors->first('name') }}</span>
           @endif

           <label for="email">Email</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "email" name="email" required></p>
           @if ($errors->has('email'))
             <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif

           <label for="phone">Phone Number</label>
           <p><input id="phone" class="w3-input w3-round w3-border" type=
              "phone" name="phone" required></p>
           @if ($errors->has('phone'))
             <span class="text-danger">{{ $errors->first('phone') }}</span>
           @endif

           <label for="address">Mailing Address</label>
           <p><input id="address" class="w3-input w3-round w3-border" type=
              "address" name="address" required></p>
           @if ($errors->has('address'))
             <span class="text-danger">{{ $errors->first('address') }}</span>
           @endif

           <label for="state">State</label>
           <p><input id="state" class="w3-input w3-round w3-border" type=
              "state" name="state" required></p>
           @if ($errors->has('state'))
             <span class="text-danger">{{ $errors->first('state') }}</span>
           @endif

           <label for="password">Password</label>
           <p><input id="password" class="w3-input w3-round w3-border" type=
              "password" name="password" required></p>
           @if ($errors->has('password'))
             <span class="text-danger">{{ $errors->first('password') }}</span>
           @endif
           
           <div class="w3-row">
           <button class="w3-button w3-teal w3-right w3-round">Register</button>
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