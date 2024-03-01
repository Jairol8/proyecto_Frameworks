@extends('/admin/plantilla/appadmin')

@section('titulo', 'C L I E N T E S')

@section('contenido')

    <div class="container">
        <form class="row g-3 needs-validation mx-auto" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">id_cliente</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="ID_cliente" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un ID válido (solo números).
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nombre_compañia</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Nombre de la compañia"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Nombre válido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nombre_contacto</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Nombre del contacto"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Nombre válido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="direccion"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Nombre válido
                </div>
            </div>

        
            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Estado</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Estado"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Nombre válido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">municipio</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="municipio"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Nombre válido
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
                <label for="validationCustom01" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Telefono" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un numero telefonico no valido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">correo electronico</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="correo electronico"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un correo valido válido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustomOrderedUnits" class="form-label">Unidades Ordenadas</label>
                <input type="text" class="form-control" id="validationCustomOrderedUnits"
                    placeholder="Unidades Ordenadas" pattern="[0-9]+" title="Ingrese un número entero de unidades ordenadas"
                    required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un número entero válido para las unidades ordenadas.
                </div>
            </div>


      
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>

                   
                </div>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a class="nav-link" href="/cliente_registro">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
            <div class="col-12">
                <a href="{{ route('clientes.index') }}" class="btn btn-primary">Ir a Registro de Cliente</a>
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
