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
<h2>Create Category <a href="/create">here</a></h2>
<h2>show all products <a href="/show">here</a></h2>
<h2><a href="{{ route('register') }}">Regist</a></h2>
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
    <td>
      <a href="/showitem/{{$category->id}}">{{ $category-> name }}</a></td>
    <td>
      <!-- <a href="/edit/{{$category -> id}}">update</a></td> -->
      <form method="POST" action="/edit/{{$category -> id}}">
              @csrf
              <input type="hidden" name="_method" value="put">
              <button type="submit" class="btn btn-danger btn-icon">
               update
              </button>
            </form>
</td>  
    <td>
    <form method="post" action="/delete/{{ $category -> id }}">
              @csrf
              <input type="hidden" name="_method" value="post">
              <button type="submit" class="btn btn-danger btn-icon">
               delete
              </button>
            </form>
      <!-- <a href="/delete/{{ $category -> id }}">Delete </a> -->
    </td>
  </tr>
  @endforeach

</table>
<p>{{$categories->links()}}</P>
</body>
</html>