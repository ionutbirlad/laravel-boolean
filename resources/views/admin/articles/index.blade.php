@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th>#</th>
              <th>Titolo</th>
              <th>Sommario</th>
              <th>Categoria</th>
              <th colspan="3">Azioni</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($articles as $article)
              <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->title}}</td>
                <td>{{$article->summary}}</td>
                <td>{{$article->category->name}}</td>
                <td><a class="btn btn-primary" href="{{route('admin.articles.show', $article->id)}}">Visualizza</a></td>
                <td><a class="btn btn-info" href="#">Modifica</a></td>
                <td><input class="btn btn-danger" type="submit" value="Elimina"></td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{$articles->links()}}
      </div>
    </div>
  </div>
@endsection
