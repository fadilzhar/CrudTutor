@php
    $no = 1

@endphp


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
        <a class="btn btn-ghost text-xl"> HaPe </a>
      </div>

      <div class="gap-2">
        <a class="btn btn-primary" href="/input">
            Add Data
        </a>
      </div>

      <div class="overflow-x-auto">
        <table class="table">
          <!-- head -->
          <thead>
            <tr>
              <th></th>
              <th>Name</th>
              <th>Type</th>
              <th>Series</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($hape as $h)
                
          
            <!-- row 1 -->
            <tr>
              <th>{{ $no }}</th>
              <td>{{ $h ->Name }}</td>
              <td>{{ $h ->Type }}</td>
              <td>{{ $h ->Series }}</td>
              <td> <a href="/{{ $h->id }}/edit" class="btn btn-primary"> Edit Data </a>
            <form action="/update/{{ $h->id }}" method="POST">
            <button class="btn btn-primary"> Delete </button>
            @csrf
            @method('delete')
            </form>
            
            </td>
            </tr>
            @php
                $no++
            @endphp
              @endforeach
          </tbody>
        </table>
      </div>
</body>
</html>