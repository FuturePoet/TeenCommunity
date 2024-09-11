<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #705030;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .container {
            background-color: #fff;
            border-radius: 5px;
            border: 3px solid rgb(59, 6, 6);
            color: #000000;
            align-items: center;
            width: 850px;
            display: inline-block;
            
        }

        .container:hover {
            background-color: #ffffffa3;
        }

        form {
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 3px solid #4a0808;
            width: 700px;
            height: 900px;
            margin: 35px;
            padding :45px;

        }

        .title {
            margin-top: 5px;
            color: aliceblue;
            border: 4px solid rgb(219, 209, 200);
            border-radius: 5px;
            text-align: center;
            height: max-content;
        }

        label {
            margin-top: 10px;
            font-size: 25px;
        }

        input, select {
            padding: 20px;
            margin-top: 5px;
            border: 1px solid #4a0808;
            border-radius: 3px;
            margin-bottom: 10px;
            margin-left: 20px;
            font-size:larger;
        }

        button {
           padding:15px;
            border-radius: 5px;
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
            font-size: larger;
            margin-bottom: 30px;
        }

        button:hover {
            background-color: #b30000;
        }

        p {
            margin-left: 450px;
            margin-top: 20px;
            font-size: 20px;
        }

        a {
            color: #000000;
            width: 200px;
            height: 50px;
            font-size: 25px;
            margin-left: 550px;
        }

        a:hover {
            color: #007BFF;
            text-decoration: underline;
            font-size: 30px;
        }

        h1 {
            color: brown;
            font-size: 45px;
            text-align: center;
        }
        p{
            color:brown;
            font-size: 25px;
             padding:5px;
             background-color: antiquewhite;
             
        }
        

    </style>
</head>
<body>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="register">
        <div class="container">
            <h1>Create new user</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required><br><br>

                <label for="email">Email:</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required><br><br>

                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required><br><br>

                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" name="password_confirmation" id="password_confirmation" required><br><br>

                <label for="role">Role:</label>
                <select name="role" id="role">
                    <option value="admin">Admin</option>
                    <option value="teen">Teen</option>
                    <option value="parent">Parent</option>
                </select><br><br>

                <button type="submit"> <b>Register</b></button>
               
                <p >You have an account:</p>
        <a href="{{ route('login') }}" class="button" style="margin-bottom: 5px;">Login</a>  
            </form>
        </div>
    </div>
</body>
</html>
