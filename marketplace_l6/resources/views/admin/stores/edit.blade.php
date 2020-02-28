@extends('layouts.app')

@section('content')
    <h1>Atualizar Loja</h1>
    <form action="{{route('admin.stores.update', ['store'=>$store->id])}}" method="post"
          enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="form-group">
            <label>Loja</label>
            <input type="text" name="name" class="form-control" value="{{$store->name}}">
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <input type="text" name="description" class="form-control" value="{{$store->description}}">
        </div>

        <div class="form-group">
            <label>Telefone</label>
            <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
        </div>

        <div class="form-group">
            <label>Celular/Whatsapp</label>
            <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">
            <p>
                <img src="{{asset('storage/'.$store->logo)}}" alt="">
            </p>
            <label>Logo</label>
            <input type="file" class="form-control" name="logo">
        </div>

        <div class="form-group">
            <label>Slug</label>
            <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-lg btn-success">Atualizar Loja</button>
        </div>
    </form>
@endsection
