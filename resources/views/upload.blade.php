<h1>Upload file</h1>

<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" placeholder="add file"><br>
    <br>
    <button type="submit">Add File</button>
</form>