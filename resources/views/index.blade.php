<!DOCTYPE html>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" 
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            font-weight: 600;
        }
        body{
            background-color: #4d90a1;
        }
        .loginform{
            background:white;
            height: 360px;
            width: 360px;  
            padding: 15px; 
            border-radius: 9px;
            }
        .loginform div{
            font-size: 20px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .field{
            border: #ccc 1px solid;
            padding: 10px;
            border-bottom: #ccc 2px solid;
            margin: 20px;
            width:290px;
            color:#000;
            margin: 5px;
            margin-top: 10px;
            border-radius: 10px;
        }
        .submitlogin{
            background-color: #00A757;
            border: none;
            color: white;
            padding:0.4em 1em;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin:1em 0.3em 0.3em 1em;
            box-shadow:inset 0 -0.6em 0 -0.35em rgba(0,0,0,0.17);
            font-weight: bold;
            white-space: normal;
            -webkit-appearance: none;
            width: 80px;
            padding: 8px;
                        }
        </style>
    </head>

<body>
    <div class="container">
        <div class="form-group col-12 p-0">
            <div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif


            </div>

    <form action={{ route('store') }} method="POST">
    @@csrf  
        <div class="form-group">
            <div class= "col-sm-12">
                <h2>Registration</h2>
            </div>
        </div>

        <hr>
            <div class="row">

                <div class="loginform">
                    <label>Username</label>
                    <input type = "text" class="field" name = "username" id="Username" placeholder = "Username" required>
                    <label>Password</label>
                    <input type = "password" class="field" name = "password" id="password" placeholder = "Password" required>
                    <button type = "submit" class="submitlogin" name = "login">Login</button>
                </div>
            </div>
    </form>
</div>
</div>
</body>
</html>