@extends('admin.layouts.main')

@section('contenido') <!-- esto es para que el contenido se valla a la seccion main a trabes de un yield -->
<div>
  <h1>Usuarios</h1>
  <div class="d-flex justify-between">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Agreagar Usuario
    </button>
  </div>
</div>

<div class="p-4">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imagen</th>
        <th scope="col">Nombre</th>
        <th scope="col">Nickname</th>
        <th scope="col">Email</th>
        <th scope="col">Password</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach($usuarios as $item)
      <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->img}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->nickname}}</td>
        <td>{{$item->email}}</td>
        <td>*********</td>
        <td><button Class="btn btn-danger">X</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/dashboard/users" method="POST">
          @csrf
          <div class="modal-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="email" class="form-control" id="Email1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre</label>
              <input type="text" class="form-control" id="Name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nickname</label>
              <input type="text" class="form-control" id="Nickname" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" id="password" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Confirm password</label>
              <input type="password" class="form-control" id="password2" aria-describedby="emailHelp">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
@endsection

@section('scripts')
<script>
  //alert("hola");
</script>
@endsection