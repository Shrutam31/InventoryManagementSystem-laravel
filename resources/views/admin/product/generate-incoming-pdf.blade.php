<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>{{$title}}</title>
</head>
<body>
    <h2>Title:{{$title}}</h2>
    <h2>Date:{{$date}}</h2>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>category</th>
                <th>name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $item)
            <tr>
                <td>{{$item->category}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>