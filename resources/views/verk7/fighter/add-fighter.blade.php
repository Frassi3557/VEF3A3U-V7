@extends('verk7.layouts.master')

@section('title')
 Upload UFC fighter
@endsection

@section('list')

  <form method="POST" action="/verk7/fighterstore">
		
		{{ csrf_field()}}
		
    <div class="group">
      <h1><input type="text" name="img" placeholder="Image URL" required></h1>
      <h1><input type="text" name="name" placeholder="Image URL" required></h1>
      <h1><input type="text" name="dob" placeholder="Image URL" required></h1>
      <h1><input type="text" name="country" placeholder="Image URL" required></h1>
      <h1><input type="text" name="height" placeholder="Image URL" required></h1>
      <h1><input type="text" name="description" placeholder="Image URL" required></h1>
    </div>
		
		 <input class="sub" type="submit" value="ÁFRAM">
</form>
 
@endsection