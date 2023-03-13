<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!--https://cdn.tailwindcss.com-->
</head>
<body>
    <nav class="bg-gray-100 px-8 py-4 text-gray-700 flex items-center justify-between">
        <spam class="font-bold text-2xl">Brand</spam>
        <spam> Hello, {{ $name }}</spam>
    </nav>

    <section class="p-12 mx-auto max-w-6xl text-gray-800">
        {{$content}}
    </section>   
</body>
</html>