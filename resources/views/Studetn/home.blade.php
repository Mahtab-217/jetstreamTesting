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
    <div class="w-11/12 mx-auto my-2">
    <h1 class="font-bold text-4xl text-center">All Students</h1>
    <table class="border border-collapse w-full mx-auto my-4">
        <tr>
            <th class="py-2 px-4 border">ID</th>
            <th class="py-2 px-4 border">name</th>
            <th class="py-2 px-4 border">Last Name</th>
            <th class="py-2 px-4 border">User Id</th>
            <th class="py-2 px-4 border">Edit/Uptade</th>
        </tr>
        @foreach ($students as $st)
        <tr>
            <td class="border py-1 px-2" >{{$st->id}}</td>
            <td class="border py-1 px-2">{{$st->name}}</td>
            <td class="border py-1 px-2">{{$st->lastName}}</td>
            <td class="border py-1 px-2">{{$st->user_id}}</td>
              <form action="{{URL('student/delete',$st) }}" method="POST">
            @csrf
            @method('delete')
            {{-- @can('delete',$st) --}}
              <input type="submit" value="Delete" class="bg-red-600 rounded-sm py-2 px-1.5">
            {{-- @endcan --}}
   
           </form>
            @can('edit-student',$st)
                 <td class="border py-1 px-2"><a href="{{ URL('student/edit', $st->id)}}">Edit</a></td>
            @endcan
         
        </tr>
            
        @endforeach
    </table>
    </div>
</body>
</html>