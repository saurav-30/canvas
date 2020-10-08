@extends('layouts.app')

@section('content')
<div class="container">
   




 
 <div class="row">
 <div class="col-md-3"><h1>WISHLISTS</h1>

 
{{session('mssg')}}
{{session('update')}}
    </div>
 <div class="col-md-3">
  <a href="create"  style="border:2px solid black;">New</a>
  </div>
  </div>
  
  <hr>
  <br>
 


 <div>
  <table border="" width="100%" height="100%">
  <tr>
  <th>NAME</th>
  <th>operations</th>
  </tr>
  @foreach($posts ?? '' as $post)
  <tr>
 
  <td>{{$post->name}}</td>
  <td><a href="delete/{{$post->id}}" onclick="myFunction()" >delete</a> &nbsp &nbsp &nbsp &nbsp &nbsp<a href="edit/{{$post->id}}">edit</a></td>
  </tr>
  @endforeach
  </table>
  </div>
    
</div>


</div>
            </div>
        </div>
        </div>    
       


        <script>
function myFunction() {
  alert("deleted");
}
</script>

@endsection







