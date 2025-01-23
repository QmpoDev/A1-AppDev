<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
</head>
<body>
    <div style="border: 3px solid black">

     <div style="margin: 10px;">
           <h2>Register</h2>

           <form action="/register" method="POST">
                @csrf
               <input name="name" type="text" placeholder="Name">
               <input name="email" type="text" placeholder="Email">
               <input name="password" type="password" placeholder="Password">
               <button>Register</button>
        
        
           </form>
     </div>
    </div>

</body>
</html>