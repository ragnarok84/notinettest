@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Agregar un Producto</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
    @if(session('alert'))
        <h2 class="subtitle has-text-centered has-text-success">{{session('alert')}}</h2>
    @endif
    <div class="columns">
        <div class="column"></div>
    <form action="{{ route('products.store') }}" method="POST" class="column">
        {{csrf_field()}}
        <div class="field">
            <label class="label">Nombre</label>
            <div class="control">
                <input class="input" type="text" name="name" value="{{ old('name') }}">
            </div>
            @if ($errors->has('name'))
                <p class="help is-danger">{{ $errors->first('name') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Precio</label>
            <div class="control">
                <input class="input" type="text" name="price" value="{{ old('price') }}">
            </div>
            @if ($errors->has('price'))
              <p class="help is-danger">{{ $errors->first('price') }}</p>
            @endif
        </div>
        <div class="field">
            <label class="label">Descripción</label>
            <div class="control">
                <textarea class="textarea" name="description" value="{{ old('description') }}"></textarea>
            </div>
            @if ($errors->has('description'))
                <p class="help is-danger">{{ $errors->first('description') }}</p>
            @endif
        </div>
        <div class="field is-grouped">
            <div class="control">
                <button type="submit" class="button is-link">Agregar</button>
            </div>
            <div class="control">
                <a href="{{route('products.index')}}" class="button is-link">Regresar</a>
            </div>
        </div>
    </form>
    <div class="column"></div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection