<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>booking</h1>
    <div>index</div>  
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</>
    </tr>
    @foreach($bookings as $booking)
    <tr>
        <td>{{$booking->id}}</td>
        <td>{{$booking->name}}</td>
        <td>{{$booking->qty}}</td>
        <td>{{$booking->price}}</td>
        <td>{{$booking->description}}</td>
        <td>
       <a href="{{route('booking.edit',['booking'=>$booking])}}">edit</a>
    </td>
<td>
<form action="{{ route('booking.destroy', $booking->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

</td>
    @endforeach
    <table> 
        <td>
           
        <div>
</body>
</html>