<h3>Fill the form</h3>


<form action="{{URL::to('submit')}}"method="post">

@csrf
<input type="text"placeholder="Enter your name"name="name">
<input type="password"placeholder="Enter your password"name="password">
<input type="submit" value="submit">

</form>