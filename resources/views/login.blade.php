<h1>User Login</h1>

<form action="/user" method="post">
    @csrf
    <input type="text" name="user" placeholder="enter user id"><br>
    <br>
    <input type="password" name="password" placeholder="enter user password"><br>
    <br>
    <button type="submit">Login </button>
</form>
