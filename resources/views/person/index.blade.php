@extends('layouts.master')

@section('title')
  Blade
@endsection

@section('list')
  <li><a href="v3/person/1"><?= $persons[0][0]; ?>
      <img src="<?= $persons[0][1] ?>">
    </a></li>

  <li><a href="v3/person/2"><?= $persons[1][0]; ?>
      <img src="<?= $persons[1][1] ?>">
    </a></li>
@endsection