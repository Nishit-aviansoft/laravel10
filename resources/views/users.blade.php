{{--<x-header componentName="Users" />--}}
<h1>user login</h1>

{{--<form action="/users" method="POST">--}}
{{--@csrf--}}
{{--<input type="text" name="user" placeholder="enter user id"><br>--}}
{{--    <br>--}}
{{--<input type="password" name="password" placeholder="enter user password"><br>--}}
{{--    <br>--}}
{{--<button type="submit">Login </button>--}}
{{--</form>--}}

{{--<table border="1">--}}
{{--<tr>--}}
{{--    <td>ID</td>--}}
{{--    <td>Email</td>--}}
{{--    <td>First Name</td>--}}
{{--    <td>Last Name</td>--}}
{{--    <td>Profile Photo</td>--}}

{{--</tr>--}}
{{--@foreach($collection as $users)--}}
{{--        <tr>--}}
{{--            <td>{{$users['id']}}</td>--}}
{{--            <td>{{$users['email']}}</td>--}}
{{--            <td>{{$users['first_name']}}</td>--}}
{{--            <td>{{$users['last_name']}}</td>--}}
{{--            <td> <img src="{{$users['avatar']}}"></td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--</table>--}}


{{--<form action="users" method="POST">--}}
{{--@csrf--}}
{{--<input type="text" name="username" placeholder="enter user id"><br>--}}
{{--    <span style="color: red">@error('username'){{$message}}@enderror</span>--}}
{{--    <br>--}}
{{--<input type="password" name="userpassword" placeholder="enter user password"><br>--}}
{{--    <span style="color: red">@error('userpassword'){{$message}}@enderror</span>--}}
{{--    <br>--}}
{{--<button type="submit">Login </button>--}}
{{--</form>--}}


{{--@include('inner')--}}
{{--@csrf--}}
{{--    @if($user=="nishit")--}}
{{--        <h3>Hi {{$user}} </h3>--}}
{{--    @elseif($user=="Gohil")--}}
{{--        <h3>Hello {{$user}} </h3>--}}
{{--    @else--}}
{{--        <h3>Unknown user </h3>--}}
{{--    @endif--}}

{{--@for($i=0;$i<10;$i++)--}}
{{--        <h3> {{$i}} </h3>--}}
{{--@endfor--}}

{{--@foreach($users as $user)--}}
{{--            <h3> {{$user}} </h3>--}}
{{--@endforeach--}}


{{--@foreach($users as $user)--}}
{{--    <h4> {{$user}} </h4>--}}
{{--@endforeach--}}

{{--<script>--}}
{{--    var data = @json($users);--}}
{{--    console.warn(data[0])--}}
{{--</script>--}}


