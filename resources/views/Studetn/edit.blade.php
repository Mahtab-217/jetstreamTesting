<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body>
    <div class="9/12 border mx-auto "></div>
    <h1 class="text-4xl text-center ">Edit Studetns</h1>
    <form action="{{ URL('student/update',$student->id) }}" method="POST" class="flex gap-4 w-9/12 p-4 flex-col mx-auto">
        @csrf
        @method('put')
        <input value="{{$student->name}}" type="text" class="py-2 px-5 border focus:outline-none" name="name">
        <input value="{{$student->LastName}}" type="text" class="py-2 px-5 border focus:outline-none" name="lastName">
        <input  type="submit" value="Update" class="py-2 px-6 bg-blue-700 text-white">
    </form>
</body>
</html>