@extends('/admin/plantilla/appadmin')

@section('titulo', 'E M P L E A D O S')

@section('contenido')

    <div class="container">
        <form class="row g-3 needs-validation mx-auto" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">ID_Empleado</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="ID" title="Ingrese solo números"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un ID válido (solo números).
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder=" Primer Nombre"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Nombre válido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustomPrice" class="form-label">Apellidos </label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" id="validationCustomPrice" placeholder="Materno y paterno"
                        title="Ingrese un precio válido (solo números y máximo dos decimales)" required>
                    <div class="valid-feedback">
                        ¡Se ve bien!
                    </div>
                    <div class="invalid-feedback">
                        Proporcione un precio válido (solo números y máximo dos decimales).
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustomDOB" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="validationCustomDOB" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, proporcione una fecha de nacimiento válida.
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Codigo postal</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Codigo" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Codigo postal no valido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Estado</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Estado"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Estado válido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Municipio</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Municipio"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Municipio válido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Telefono de Emergencia</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Contacto"
                    pattern="[0-9]+" title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Telefono de Emergencia n valido
                </div>
            </div>

            <div class="col-12">
                <button id="submitButton" class="btn btn-primary" type="submit">Enviar formulario</button>
                {{-- <a href="/empleado_registro" class="btn btn-primary mt-2">Ir a Registro de Empleados</a> --}}
            </div>
        </form>
    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>

@endsection
