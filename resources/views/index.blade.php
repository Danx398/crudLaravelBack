@extends('./layouts/main')
@section('contenido')
<div class="container">
        <h1 class="text-center mb-4">Crud</h1>
        <div class="row">
            <div class="col-12">
                <a href="/create" class="btn btn-dark">New Name</a>
                <hr>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>Last name</th>
                            <th>Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $item)
                        <tr>
                            <td>{{$item->paterno}}</td>
                            <td>{{$item->nombre}}</td>
                            <td><a href="{{ route('edit',$item->id) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="{{route('show',$item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
