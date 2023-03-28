@extends('/NavBarFooter/navbarfooter')
@section('titulo', 'Actualización Docente')

@section('contenido')

<div class="container justify-content-center mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    <h1>Actualización Docente</h1>
                </div>
                <div class="card-body justify-content-center">
                <form action="{{route('actualizar-docente')}}" method="POST" class="needs-validation" novalidate>

                    @csrf
                    @method('put')

                    <div class="row justify-content-center">
                        
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="hidden" name="id" value="{{$docente->id}}" >
                                    <input type="text" name="primerNombre" value="{{$docente->primerNombre}}" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Primer Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="text" name="segundoNombre" value="{{$docente->segundoNombre}}" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Segundo Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="text" name="primerApellido" value="{{$docente->primerApellido}}" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Primer Apellido</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="text" name="segundoApellido" value="{{$docente->segundoApellido}}" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Segundo Apellido</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="text" name="especialidad" value="{{$docente->especialidad}}" class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Especialidad</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating mt-3">
                                    <input type="date" name="fechaNacimiento" value="{{$docente->fechaNacimiento}}"  class="form-control" id="floatingInputGrid" placeholder="name@example.com" required>
                                    <label for="floatingInputGrid">Fecha Nacimiento</label>
                                </div>
                            </div>
                            <div class="row justify-content-center mt-3">
                                <div class="col-5">
                                    <button type="submit" class="btn btn-outline-success">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
