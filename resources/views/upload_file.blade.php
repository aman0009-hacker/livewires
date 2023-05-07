<form action="files" method="POST" enctype="multipart/form-data">


    @csrf
    <input type="file"name="docs">
    <input type="submit" value="submit">

</form>