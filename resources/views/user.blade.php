

@extends("layouts.app")
@section("content")

<table  borderbgcolor="yellow" bordercolor="green" class="table table-striped">
  <thead>
    <tr>
      <th>identifient</th>
      <th>nom</th>
      <th>email</th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($u as $ui)
    <tr>
      <th >{{$ui->id}}</th>
      <td>{{$ui->name}}</td>
      <td>{{$ui->email}}</td>
      <th>          
    </tr>
    @endforeach
   
  </tbody>
</table>

  
@endsection
@section('menu')

<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">Accueil</a>
</li> &nbsp &nbsp &nbsp
<li class="nav-item">
            <a href="espaceinscription.html" class="btn btn-primary js-scroll-trigger">espace membre</a>
</li>
@endsection