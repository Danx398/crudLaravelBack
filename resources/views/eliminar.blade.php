@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <h2 class="text-center mt-1 mb-2">The data to delete is:</h2>

                <div class="card text-bg-primary mb-3 mt-5">
                    <div class="card-header">Info Delete</div>
                    <div class="card-body">
                        <ul>
                            <li>The LastName is: {{ $items->paterno }}</li>
                            <li>The name is: {{ $items->nombre }}</li>
                        </ul>
                        <row>
                            <div class="col-12">
                                <form action="{{ route('destroy',$items->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger mt-3 container-fluid">Delete permanently</button>
                                </form>
                                <div class="col-12">
                                    <a href="/" class="btn btn-info mt-1 container-fluid">Back</a>
                                </div>
                            </div>
                        </row>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
