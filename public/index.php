<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Catering System</title>
</head>
<body class="grid place-items-center min-h-screen bg-slate-100">
    <div class="w-3/4 flex bg-white">
        <div class="w-2/6 px-10 py-6">
            <p class="font-semibold mb-10 text-4xl">Catering</p>
            <div class="mb-5">
                <p class="text-2xl">Welcome Back</p>
                <p class="text-md text-gray-500">Sign in with your email address and password</p>
            </div>
            <div>
                <form action="" class="flex flex-col mb-10">
                    <label for="" class="mb-1 text-lg">Email Address</label>
                    <input type="email" name="email" required class="mb-3 py-2 px-2 text-lg border-2 outline-none">
                    <label for="" class="mb-1 text-lg">Password</label>
                    <input type="password" name="password" required class="mb-3 py-2 px-2 text-lg border-2 outline-none">
                    <div class="flex justify-between mb-6">
                        <div class="flex gap-2 items-center">
                            <input type="checkbox" name="remember">
                            <p>Remember Me</p>
                        </div>
                        <div>
                            <a href="#">Forgot Password?</a>
                        </div>
                    </div>
                    <button class="w-full py-2 rounded-lg border-2 border-wood-200 bg-white text-black hover:text-white hover:border-2 hover:bg-wood-200 hover:border-wood-200 ease-out duration-300">Sign In</button>
                </form>
                <p>Don't have an account yet? <a href="#" class="text-blue-500">Create one!</a></p>
            </div>
        </div>
        <div class="w-2/3">
            <img src="../src/img/hero.jpg" alt="">
        </div>
    </div>
</body>
</html>