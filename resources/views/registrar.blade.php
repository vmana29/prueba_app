<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <br>
        <h3>Probando</h1>
            <br>
            <div class="row">
                <form id="formregistrarest">
                    {{-- <div class="mb-3">
                    <label class="form-label">Nombres</label>
                    <input type="text" class="form-control" id="nombres"
                        placeholder="Ingresar nombres">
                </div>
                <div class="mb-3">
                    <label class="form-label">Apellidos</label>
                    <input type="text" class="form-control" id="apellidos"
                        placeholder="Ingresar apellidos">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telefono fijo</label>
                    <input type="text" class="form-control" id="telefonofijo"
                        placeholder="Ingresar telefono fijo">
                </div> --}}
                    {{-- <div class="mb-3">
                    <label class="form-label">Telefono personal</label>
                    <input type="text" class="form-control" id="telefonoper"
                        placeholder="Ingresar telefono personal">
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo personal</label>
                    <input type="text" class="form-control" id="correoper"
                        placeholder="Ingresar correo personal">
                </div>
                <div class="mb-3">
                    <label class="form-label">Correo institucional</label>
                    <input type="text" class="form-control" id="correoinsti"
                        placeholder="Ingresar correo institucional">
                </div>
                <div class="mb-3">
                    <label class="form-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion"
                        placeholder="Ingresar dirección">
                </div> --}}
                    <div class="mb-3">
                        <label class="form-label">DNI</label>
                        <input type="text" class="form-control" id="dni" placeholder="Ingresar DNI">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </div>

                </form>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <form id="formactualizar">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="form-label">Telefono fijo</label>
                                        <input type="text" class="form-control" id="telefonofijo"
                                            placeholder="Ingresar telefono fijo">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Telefono personal</label>
                                        <input type="text" class="form-control" id="telefonoper"
                                            placeholder="Ingresar telefono personal">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Correo personal</label>
                                        <input type="text" class="form-control" id="correoper"
                                            placeholder="Ingresar correo personal">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Correo institucional</label>
                                        <input type="text" class="form-control" id="correoinsti"
                                            placeholder="Ingresar correo institucional">
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Understood</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
            <script src="{{ asset('js/registrarest.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
            </script>

</body>

</html>
