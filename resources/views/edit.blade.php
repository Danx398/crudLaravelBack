@extends('layouts/main')
@section('contenido')
<div class="container">
    <h1 class="text-center mb-5 mt-3">Edit a person</h1>
    <div class="row justify-content-center">
        <div class="col-5">
            <form action="{{ route('update',$items->id) }}" method="POST" autocomplete="off">
                @csrf
                @method('PUT')
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="paterno" name="paterno" placeholder="name@example.com" required="" value="{{$items->paterno}}">
                    <label for="paterno">Last Name</label>
                  </div>
                  <div class="form-floating">
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Password" required="" value="{{$items->nombre}}">
                    <label for="nombre">Name</label>
                  </div>
                <div class="row justify-content-center">
                    <div class="col-3 ">
                        <a href="/" class="btn btn-info mt-4 container-fluid">Back</a>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-dark mt-4 container-fluid">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection