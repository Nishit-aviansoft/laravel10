<h1>Update Member</h1>
<form action="/edit" method="POST">
@csrf
<input type="hidden" name="id" value="{{$data['id']}}">
<label>Name</label>
<input type="text" name="name" value="{{$data['name']}}"> <br><br>
<label>Email</label>
<input type="text" name="email" value="{{$data['email']}}"> <br><br>
<label>Address</label>
<input type="text" name="address" value="{{$data['address']}}"> <br><br>

<button type="submit">Update</button>
</form>