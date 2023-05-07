

<table border=1 style="border-collapse: collapse">
    <tr>
<th>Id</th>
<th>Title</th>
<th>Description</th>
<th>Price</th>
<th>Thumbnail</th>
    </tr>
@foreach ($data as $item)
<tr>
<td>{{$item['id']}}</td>
<td>{{$item['title']}}</td>
<td>{{$item['description']}}</td>
<td>{{$item['price']}}</td>
<td><img src="{{$item['thumbnail']}}"</td>

</tr>

@endforeach
</table>
