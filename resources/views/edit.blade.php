<h1>ENTER DETAILS</h1>

<form action="{{route('update.post',[$posts->id])}}" method="post">
@csrf

Name: <input type="text" name="name" id="" value="{{$posts->name}}">

<button type="submit" value="submit">submit</button>

</form>