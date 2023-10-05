{{-- <h1>Member List</h1>
<table border="1">
<tr>
    <td>ID</td>
    <td>Name</td>
    <td>Email</td>
    <td>Address</td>
    <td>Operation</td>
</tr>

@foreach ($members as $item)
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['email']}}</td>
    <td>{{$item['address']}}</td>
    <td>
        <a href={{"delete/".$item['id']}} >Delete</a>
        <a href={{"edit/".$item['id']}} >Edit</a>
    </td>

</tr>
@endforeach

</table> --}}
{{-- <div>
    {{$members->links()}}
</div>

<style>
    .w-5{
        display: none
    }
</style> --}}


{{-- <table border="1">
   
    @foreach ($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->address}}</td>
    </tr>
    @endforeach
    
    </table> --}}