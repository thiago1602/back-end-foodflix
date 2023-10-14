@extends('app')

@section('titulo', 'Editar Loja')

@section('conteudo')
  <h1>Editar Loja</h1>
  <form action="{{ route('diaristas.update', $diarista) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')

    @include('_form')
</form>
@endsection
