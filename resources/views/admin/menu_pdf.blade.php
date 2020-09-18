<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cetak Menu</title>
</head>
<body>

<h2 style="margin-left: 12px; margin-top:5px;">Menu Data</h2>

    <table class="table" id="datatable">
      <thead>
        <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Stock</th>       
        </tr>
    </thead>
    <tbody>
    @foreach ($menus as $m)
        <tr>
        <th scope="row">{{ $m->id_menu }}</th>
        <td>{{ $m->menu_name }}</td>
        <td>{{ $m->price }}</td>
        <td>{{ $m->stock }}</td>
        </tr>
    </tbody>
    @endforeach
        
    </table>
</body>
</html>