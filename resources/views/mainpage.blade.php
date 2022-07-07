<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
    <body class="antialiased">
    <div class="w3-bar w3-teal">
        <a class="w3-bar-item w3-button w3-right" href="{{ url('logout') }}">
                Logout</a>
        </div>
            <header class="w3-header w3-teal w3-center w3-padding-16" style="height:80px">
            <h2>MyTutor</h2>
        </header>
        <div>
            <button class="w3-button w3-round w3-right" onclick="document.
             getElementById('subject').style.display= 'block';return false;">
             Register Subject</button>
          </div>
          <div class="w3-padding">
             <table class="w3-table w3-striped w3-bordered w3-teal" w3-center>
               <thead>
                 <th>ID</th><th>Subject Title</th><th>Description</th>     
               </thead>
              </table>    

              <div id="subject" class="w3-modal w3-animate-opacity">
   <div class="w3-modal-content w3-round" style="width:500px">
     <header class="w3-row w3-teal"> <span onclick="document.getElementById
     ('subject').style.display='none'" class="w3-button w3-display-topright
     w3-small">&times;</span>
   <h4 class="w3-margin-left">New Subject Form</h4>
     </header>
       <div class="w3-padding">
         <form method="post" action="{{route('subject')}}">
           {{csrf_field()}}
           <p><input class="w3-input w3-round w3-border" type="text"  
           name="id" placeholder="Subject ID"></p>
           <p><input class="w3-input w3-round w3-border" type="text"  
           name="title" placeholder="Subject Title"></p>
           <p><input class="w3-input w3-round w3-border" type="text"  
           name="desc" placeholder="Description"></p>
           <p><input class="w3-input w3-round w3-border" type="text"  
           name="price" placeholder="Price"></p>
           <p><input class="w3-input w3-round w3-border" type="text"  
           name="hour" placeholder="Total Learning Hour"></p>
           <button class="w3-button w3-teal w3-round" type="submit">
           Add Subject</button>
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
