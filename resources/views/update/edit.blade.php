<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.9.0/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="navbar bg-base-100">
        <a class="btn btn-ghost text-xl"> Hape </a>
      </div>

      <div class="flex flex-col justify-center items-center ">
        <form action="/update/{{ $hape->id }}" method="POST">
            @csrf
            @method('put')
        <input type="text" placeholder="Name" class="input input-bordered w-full max-w-xs form-control gap-2" name="Name" required/>
        <input type="text" placeholder="Type" class="input input-bordered w-full max-w-xs form-control gap-2" name="Type" required/>
        <input type="text" placeholder="Series" class="input input-bordered w-full max-w-xs form-control gap-2" name="Series" required/>

        <button class="btn btn-primary"> Add Data </button>
        </form>
      </div>
</body>
</html>