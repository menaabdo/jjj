<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Category</title>
</head>
<body>
    <p>edit your category</p>
    <form method="get" action="/update">
    @csrf
        Name: <input type="text" name="name">
        <input type='hidden' name="id" value={{$id}}>
        <button>Submit</button>
    </form>
</body>
</html>