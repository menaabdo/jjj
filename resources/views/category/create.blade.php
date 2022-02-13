<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
    <link rel="stylesheet"  href='mystyle.css'>
</head>
<body>
    <h1>Create new Category </h1>
    <div>
    <form method="post" action="{{  route('categories.save') }}">
    @csrf
         <label>category of name</label>
         <input type="text" name="name"  value="{{ old('name') }} "  >
        @if ($errors->has('name'))
        
    <div style='color: red'>
        <ul>
            @foreach ($errors->get('name') as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <input type='submit' value='Save'></input>
        <div>