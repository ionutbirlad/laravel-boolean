@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <form action="{{route('admin.articles.store')}}" method="post">
          @csrf
          @method('POST')

          <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>

          <div class="form-group">
            <label for="summary">Sommario</label>
            <input type="text" class="form-control" id="summary" name="summary">
          </div>

          <div class="form-group">
            <label for="body">Testo principale</label>
            <textarea class="form-control" id="category" name="body" rows="8" cols="80"></textarea>
          </div>

          <div class="form-group">
            <label for="category">Categoria</label>
            <select class="form-group" name="category_id" id="category">
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <fieldset>
              <legend>Tags</legend>
              @foreach ($tags as $tag)
                <div class="form-check form-check-inline">
                  <input name="tags[]" class="form-check-input" type="checkbox" id="tag{{$tag->id}}" value="{{$tag->id}}">
                  <label class="form-check-label" for="tag{{$tag->id}}">{{$tag->name}}</label>
                </div>
              @endforeach
            </fieldset>
          </div>

          <div class="form-group">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="visible" name="visible">
              <label class="custom-control-label" for="visible">Toggle this switch element</label>
            </div>
          </div>

          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Salva">
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection
