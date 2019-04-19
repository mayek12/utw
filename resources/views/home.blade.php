@extends('layouts.app')

@section('content')

  
          
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Spis artykułów</div>

                <div class="card-body">
                

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Tytuł</th>
      <th scope="col">Treść</th>
      <th scope="col">Akcja</th>
    </tr>
  </thead>
  <tbody>
     @foreach ($articles as $art)
    <tr>
      <th scope="row">{{ $art->id }}</th>
      <td>{{ $art->title }}</td>
      <td>{{ str_limit($art->content, $limit = 20, $end = '...')  }}</td>
      <td></td>
    </tr>
        @endforeach
  </tbody>
</table>





   


                </div>
            </div>
      
    </div>

@endsection
