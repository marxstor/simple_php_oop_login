<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class = "bg-gray-50">
    <div class="flex flex-col items-center justify-center  px-6 py-8 mx-auto">
        <div class = "w-2/6 bg-white rounded-lg shadow">
            <div class="p-6 space-y-4">
                <h1 class = "text-xl font-bold text-gray-900 leading-tight tracking-tight">
                    Sign in your account
                </h1>

                <?php
                    if ($login->errors) {
                        foreach ($login->errors as $error) {
                            echo "<p class = 'text-red-600'>$error</p>";
                        }
                    }
                    if ($login->messages) {
                        foreach ($login->messages as $message) {
                            echo "<p class = 'text-green-600'>$message</p>";
                        }
                    }

                    // var_dump($login->messages);
                ?>

                <form action="index.php" method="post" class = "space-y-4">
                    <div>
                        <label for="email" class = "block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" class = "bg-gray-50 border border-gray-300 text-gray-900 w-full p-2 rounded-lg focus:ring-blue-600 focus:border-blue-600 focus:outline-none" placeholder ="name@company.com" required = "" name = "email">
                    </div>
                    <div>
                        <label for="email" class = "block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" class = "bg-gray-50 border border-gray-300 text-gray-900 w-full p-2 rounded-lg focus:ring-blue-600 focus:border-blue-600 focus:outline-none" placeholder ="********" required = "" name = "password">
                    </div>
                    <div class = "my-2">
                        <a href = "#" class = "text-sm font-medium text-blue-600 hover:underline">Forgot password?</a> 
                    </div>

                    <button type = "submit" name = "login" class = "text-sm w-full bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-blue-300 font-medium">Sign in</button>

                    <p>
                        Don't have an account yet? <a href = "signup.php" class = "font-medium text-blue-600 hover:underline">Sign-up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>