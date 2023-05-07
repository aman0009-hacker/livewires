
<table border=1 style="border-collapse:collapse">
@foreach($data as $values)
<tr>
<td>{{$values['srno']}}</td>
<td>{{$values['name']}}</td>
<td>{{$values['number']}}</td>
<td>{{$values['time']}}</td>
</tr>
@endforeach
</table>
<div>{{$data->links()}}</div>