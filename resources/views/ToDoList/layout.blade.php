<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha512-9BwLAVqqt6oFdXohPLuNHxhx36BVj5uGSGmizkmGkgl3uMSgNalKc/smum+GJU/TTP0jy0+ruwC3xNAk3F759A==" crossorigin="anonymous" />


    <title>Task list</title>
</head>
<body>
    <div class="text-center flex justify-center pt-10">
        <div class="w-1/3 border rounded p-2">
            @yield('content')
        </div>
    </div>

</body>
</html>
