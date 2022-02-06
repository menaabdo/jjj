<!DOCTYPE html>
<html>
<head>
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
<h2>Create Category <a href="/create">here</a></h2>
<h2>show all products <a href="/show">here</a></h2>
<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Action1</th>
    <th>Action2</th>
  </tr>
  @foreach ($categories as $category)
  <tr>
    <td>{{ $category->id }}</td>
    <td><a href="/showitem/{{$category -> id}}">{{ $category-> name }}</a></td>
    <td><a href="/edit/{{$category -> id}}">update</a></td>
   
     
    <td><a href="/delete/{{ $category -> id }}">Delete </a></td>
  </tr>
  @endforeach

</table>

</body>
</html>