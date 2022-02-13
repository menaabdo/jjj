
<!DOCTYPE html>
<html>
<head>
<title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Categories Table</h2>
<h2>All products From {{$items[0]->name}}</h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>description</th>
    <th>category</th>
    <th>update</th>
    <th>delete</th>
    
  </tr>
  @foreach ($items as $item)
  <tr>
   
    <td>{{ $item->id }}</td>
    <td>{!! $item-> name !!}</td>
    <td>{!! $item-> des !!}</td>
    <td>{{ $item-> category->name }}</td>
     <td><a href="/edit/{{$item -> id}}">update</a></td>
   
     
    <td><a href="/delete/{{ $item -> id }}">Delete </a></td>
  </tr> 
  @endforeach

</table>

</body>
</html>
