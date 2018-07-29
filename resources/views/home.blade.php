@include('inc.header')
  <div class="container">
   <div class="row">
   <legend>Laravel CRUD Application</legend>
   @if(session('info'))
   <div class="col-mg-6 alert alert-success">
    {{session('info')}}
    </div>
   @endif
   <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @if(count($users) >0)
   @foreach($users->all() as $user)
    <tr class="table-active">
      <th scope="row">{{ $user->id}}</th>
      <td>{{ $user->title}}</td>
      <td>{{ $user->Descriptioin}}</td>
      <td>
       <a href='{{ url("/read/$user->id") }}' class="badge badge-primary">Read</a> |
       <a href='{{ url("/update/$user->id") }}' class="badge badge-success">Update</a>  |
       <a href='{{ url("/delete/$user->id") }}' class="badge badge-danger">Delete</a>
      </td>
    </tr>
   @endforeach
  @endif
  </tbody>
</table>
   </div>
  </div>
@include('inc.footer')