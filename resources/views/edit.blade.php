<form action="/update" method="post"enctype="multipart/form-data">
    @csrf
<input type="hidden" value="{{$edl['id']}}"name="hide">
    Name:
<input type="text" value="{{$edl['name']}}"name="name"><br><br>
Number:
<input type="number"value="{{$edl['number']}}"name="number"><br><br>
City:
<input type="text" value="{{$edl['city']}}"name="city"><br><br>
file:
<input type="file"  value="c:/passwords.txt" name="file"><br><br>
<input type="submit" value="Update">
</form>