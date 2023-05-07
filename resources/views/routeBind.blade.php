

<h4>{{$data['id']}}</h4>
<h4>{{$data['companyName']}}</h4>
<h4>{{$data['rel_id']}}</h4>

<br><br>
@foreach ($data as $item)
 <h4>{{$item}}</h4>   
@endforeach