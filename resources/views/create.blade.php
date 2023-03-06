@extends('./layouts/main')
@section('contenido')
    <div class="container">
        <h1 class="text-center mb-5 mt-3">Create New Person</h1>
        <div class="row justify-content-center">
            <div class="col-5">
                <form action="/store" method="POST" autocomplete="off">
                    @csrf
                    @method('POST')
                    <div class="form-floating mb-3">
                        <input autofocus type="text" class="form-control" id="paterno" name="paterno" placeholder="name@example.com" required="">
                        <label for="paterno">Last Name</label>
                      </div>
                      <div class="form-floating">
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Password" required="">
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
