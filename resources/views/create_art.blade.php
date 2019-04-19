@extends('layouts.app')

@section('content')

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Utwórz nowy artykuł</div>
                <br/>

                	<form method="POST" action="/index.php/save">
    @csrf

  <div class="form-group row justify-content-center">
  
    <div class="col-11">
    	<h4>Tytuł:</h4>
      <input id="text" name="title" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row justify-content-center">
   
    <div class="col-11 ">
    	<h4>Treść:</h4>
      <textarea id="editor1" name="content" cols="40" rows="5" class="form-control"></textarea>
    </div>
  </div> 
  <div class="form-group row justify-content-center" >
    <div class="col-11">
      <button name="submit" type="submit" class="btn btn-primary">Zapisz</button>
    </div>
  </div>
					</form>


                </div>
            </div>
@endsection
