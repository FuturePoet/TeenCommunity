<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('https://media.istockphoto.com/id/157719429/photo/group-of-middle-school-students-working-on-project-together.jpg?s=612x612&w=0&k=20&c=WIA13-EqS695ZXNo5KZw6k_pvrIBgUTTKpk1spoD17Q=') no-repeat center center/cover;
            position: relative;
            
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.4); 
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
            display: flex;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            width: 900px;
            padding: 40px;
            justify-content: space-between;
            align-items: center;
        }
.container:hover {
            background-color: #ffffffa3;
        }
        .login-form {
            width: 50%;
            padding-right: 20px;
        }

        .title {
            color: #333;
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
        }

        label {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #555;
        }

        input {
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            font-size: 1rem;
            background-color: #f9f9f9;
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 20px;
            border: none;
            border-radius: 5px;
            background-color: #28a745;
            color: #fff;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #218838;
        }

        .message {
            font-size: 1rem;
            color: #555;
            margin: 30px 0 20px;
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
        }

        a {
            color: #007BFF;
            text-decoration: none;
            font-size: 1.1rem;
            display: block;
            text-align: center;
            margin-top: 15px;
        }

        a:hover {
            text-decoration: underline;
        }

        .image-section {
            width: 45%;
        }

        .image-section img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="login-form">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="title">
                    <h2>Login</h2>
                </div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
                
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>

                <button type="submit" name="login">Login</button>

                <div class="message">
                    Don’t have an account?
                </div>

                <a href="{{ route('register') }}">Create a New Account</a>
            </form>
        </div>

        <div class="image-section">
            <img src="https://th.bing.com/th/id/OIP.XRd3cuOzERK6m-bNFYPUVQAAAA?pid=ImgDet&w=180&h=270&c=7&dpr=1.3" alt="Teen Community">
        </div>
    </div>

</body>
</html>