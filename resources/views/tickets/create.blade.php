<!DOCTYPE html>
<html>
<head>
    <title>Créer un nouveau ticket</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-4">
  @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
  @endif
  <div class="card">
    <div class="card-header text-center font-weight-bold">
      Créer un nouveau ticket
    </div>
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('tickets/create')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Titre</label>
          <input type="text" id="titre" name="titre" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Description</label>
          <textarea name="description" class="form-control" required=""></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Créer un ticket</button>
      </form>
    </div>
  </div>
</div>
</body>
</html>
