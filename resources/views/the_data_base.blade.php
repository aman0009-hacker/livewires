<style>

td {
    padding: 15px;
}
td a {
    padding: 10px;
}
</style>
<table border=1 style="border-collapse:collapse">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>number</td>
        <td>city</td>
        <td>file</td>
        <td>actions</td>
    </tr>
@foreach ($data as $item)
<tr>
    <td>{{$item['id']}}</td>
    <td>{{$item['name']}}</td>
    <td>{{$item['number']}}</td>
    <td>{{$item['city']}}</td>
    <td>{{$item['file']}}</td>
    <td><a href="del/{{$item['id']}}">Delete</a><a href="edit/{{$item['id']}}">Edit</a>
</tr>
    
@endforeach

</table>