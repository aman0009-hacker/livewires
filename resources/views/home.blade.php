@include('outside');
<x-foot name="home" />

<h5>{{URL::full()}}</h5>
<h1>i am the first page of my website</h1>
<h2>{{$name}}</h2>
<h2>{{$email}}</h2>
<a href="{{URL::to('/')}}">Click me!</a>
<h3>{{URL::previous()}}</h3>

<a href="{{URL::to('/logout')}}">Logout</a>
