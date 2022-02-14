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
    <form method="post" action="{{  route('categories.save') }}" enctype="multipart/form-data">
    @csrf
         <label>category of name</label>
         <input type="text" name="name"  value="{{ old('name') }} "  >
         @error('name')
            <li style='display:inline'>{{ $message }}</li>
            @enderror
         
         Image: <input type="file" name="category_name">
        
    
        <input type='submit' value='Save'></input>
        <div>