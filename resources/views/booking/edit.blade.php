<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Create a booking</h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}<li>
    @endforeach
    <ul>
        @endif
        <div>  
<form method="post" action="{{ route('booking.update', ['booking' => $booking->id]) }}">

    @csrf
    @method('put')
<div>
<label>Name</label>
<input type="text" name="name" placeholder="Name" value="{{$booking->name}}"/>

</div>
<div>
<label>Qty</label>
<input type="text" name="qty" placeholder="Qty" value="{{$booking->qty}}" /> 
</div>
<div>
<label>Price</label>
<input type="text" name="price" placeholder="Price" value="{{$booking->price}}" />
</div>
<div>
<label>Description</label>
<input type="text" name="description" placeholder="Description" value="{{$booking->description}}" />
</div>
<div>
<input type= "submit" value="Update" />
</div>
</form>
</body>
</html>