@extends('/admin/plantilla/appadmin')

@section('titulo', 'DETALLES DE LA ORDEN')

@section('contenido')

    <div class="container">
        <form class="row g-3 needs-validation mx-auto" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">ID_orden</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="ID_orden" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un ID válido (solo números).
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">id producto</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="id producto" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un ID valido
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

            
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">precio por unidad</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="precio por unidad" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un numero telefonico no valido
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">cantidad</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="cantidad" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione una cantidad valida
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">descuento</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="descuento" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione una cantidad valida
                </div>
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        Debe estar de acuerdo antes de enviar.
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
            <div class="col-12">
                <a href="/detalle_orden_registro" class="btn btn-primary">Ir a Registro de Detalle dela orden</a>
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
