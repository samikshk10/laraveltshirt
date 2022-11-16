<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>
<body>
    <div class="container mt-4">

        <h1 class="text-center">Outdoor Company</h1>
        <form action="{{ route('additembtn') }}" method="post">
            @csrf
        <button type="submit" class="btn btn-success mb-4" >Add Item</button>
    </form>

        <table class="table">
            <tr>
               <th>Batch</th>
               <th>Quantity</th>
               <th>Created At</th>
               <th>Status</th>
               <th>Remarks</th>
               <th>Edit</th>
               <th>Delete</th>
            </tr>
            
            @foreach($showall as $value )
            <tr>

                    
                <td>{{ $value->batchno }}</td>
            
                <td>{{ $value->quantity }}</td>
                <td>{{ $value->created_at }}</td>
                <td>{{ $value->status }}</td>
                <td>{{ $value->remarks }}</td>
               
                <td><a href="/edit/{{ $value->id }}"><button id="editbtn" class="btn btn-success"><i class="fa fa-edit  icon"></i></button></a></td>
                <td><a href="/delete/{{ $value->id }}"><button id="deletebtn" class="btn btn-danger"><i class="fa fa-trash icon"></i></button></a></td>
                
                
                @endforeach
            </tr>
            
        </table>
    </div>
</body>
</html>