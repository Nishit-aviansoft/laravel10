<h1>Add Members</h1>

<form action="/add" method="post">
    @csrf
    <input type="text" name="name" placeholder="enter user name"><br>
    <br>
    <input type="email" name="email" placeholder="enter user email"><br>
    <br>
    <input type="text" name="address" placeholder="enter user address"><br>
    <br>
    <button type="submit">Add Members </button>
</form>