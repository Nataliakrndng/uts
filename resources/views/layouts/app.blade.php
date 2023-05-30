<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/homepage.css">
</head>
<body style="background-color: #f4f4f4;">
    <nav class="text-black p-4 border-b-4 border-black ml-20 mr-20 justify-start">
        <div class="container mx-auto flex items-center justify-start">
            <h1 class="text-4xl font-bold self-center">Wijarwan Notes</h1>
            <p class="text-m ml-5 self-center font-bold ">The Blog of <br>Gita Wirjawan</p>
        </div>
    </nav>
    <div class="container mx-auto">
        @yield('content')
    </div>
</body>
</html>
