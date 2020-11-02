<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset ="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Task list</title>
</head>
<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">To do list</h1>
        <x-alert />
        <form method="post" action="/todolist/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded"/>
            <input type="submit" value="Create" class ="p-1 border rounded-lg"/>
        </form>
    </div>

</body>
</html>
