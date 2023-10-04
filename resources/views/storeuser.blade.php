<h1>Add new member</h1>
@if(session('user'))
<h3>Data Saved for {{session('user')}}</h3>
@endif

<form action="storecontroller" method="post">
    @csrf
    <input type="text" name="user" placeholder="Enter user name"> <br><br>
    <input type="password" name="password" placeholder="Enter user password"> <br><br>
    <input type="email" name="email" placeholder="Enter user email"> <br><br>
    <button type="submit">Add user </button>
</form>