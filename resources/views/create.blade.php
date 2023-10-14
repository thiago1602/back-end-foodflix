@extends('app')

@section('titulo', 'Cadastrar Loja')

@section('conteudo')
  <h1>Cadastrar Loja</h1>
  <form action="{{ route('diaristas.store') }}" method="POST" enctype="multipart/form-data">
    
    @include('_form')
</form>
@endsection
