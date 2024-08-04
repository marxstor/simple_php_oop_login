<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class = "bg-gray-50">
    <div class="flex flex-col items-center justify-center  px-6 py-8 mx-auto">
        <div class = "w-2/6 bg-white rounded-lg shadow">
            <div class="p-6 space-y-4">
                <h1 class = "text-xl font-bold text-gray-900 leading-tight tracking-tight">
                    Create an account
                </h1>

                <form action="login.php" method="post" class = "space-y-4">
                    <div>
                        <label for="email" class = "block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" class = "bg-gray-50 border border-gray-300 text-gray-900 w-full p-2 rounded-lg focus:ring-blue-600 focus:border-blue-600 focus:outline-none" placeholder ="sample123" required = "" name = "username">
                    </div>
                    <div>
                        <label for="email" class = "block mb-2 text-sm font-medium text-gray-900">Your email</label>
                        <input type="email" class = "bg-gray-50 border border-gray-300 text-gray-900 w-full p-2 rounded-lg focus:ring-blue-600 focus:border-blue-600 focus:outline-none" placeholder ="name@company.com" name = "email" required = "">
                    </div>
                    <div>
                        <label for="email" class = "block mb-2 text-sm font-medium text-gray-900">Password</label>
                        <input type="password" class = "bg-gray-50 border border-gray-300 text-gray-900 w-full p-2 rounded-lg focus:ring-blue-600 focus:border-blue-600 focus:outline-none" placeholder ="********" name = "password" required = "">
                    </div>

                    <button class = "text-sm w-full bg-blue-600 text-white px-5 py-2.5 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-blue-300 font-medium" name = "register">Sign up</button>

                    <p>
                        Already have an account? <a href = "login.php" class = "font-medium text-blue-600 hover:underline">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>