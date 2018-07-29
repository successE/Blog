@include('inc.header')
  <div class="container">
   <div class="row">
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
    <tr class="table-active">
      <th scope="row">1</th>
      <td>Column content</td>
      <td>Column content</td>
      <td>
       <a href="{{ url('') }}" class="badge badge-primary">Read</a> |
       <a href="{{ url('') }}" class="badge badge-success">Update</a>  |
       <a href="{{ url('') }}" class="badge badge-danger">Delete</a>
      </td>
    </tr>
  </tbody>
</table>
   </div>
  </div>
@include('inc.footer')