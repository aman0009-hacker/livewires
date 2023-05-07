<form action="databa" method="POST" enctype="multipart/form-data">
@csrf
Name:
<input type="text" name="name"><br><br>
Number:
<input type="number" name="number"><br><br>
City:
<input type="text" name="place"><br><br>
File:
<input type="file" name="file"><br><br>

<input type="submit"value="submit">


</form>