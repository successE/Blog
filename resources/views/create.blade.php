@include('inc.header')
<div class="container">
  <div class="row">
   <div class="col-md-6">
    <form method="post" action="{{ url('/insert') }}">
    {{csrf_field()}}
    <fieldset>
        <legend>Laravel Create Application</legend>
        @if(count($errors) >0)
         @foreach($errors->all() as $error)
            <div class="alert alert-danger">
             {{ $error}}
            </div>
         @endforeach
        @endif
        <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
        </div>
        <div class="form-group">
        <label for="exampleInputPassword1">description</label>
        <textarea name="descriptioin" class="form-control" id="exampleInputPassword1" placeholder="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <button type="reset" class="btn btn-success">Reset</button>
        <a href="{{ url('/') }}" class="btn btn-primary">Back</a>
    </fieldset>
    </form>
   </div>
  </div>
 </div>
 @include('inc.footer')