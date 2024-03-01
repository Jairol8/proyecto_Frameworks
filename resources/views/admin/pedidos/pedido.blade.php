@extends('/admin/plantilla/appadmin')

@section('titulo', 'P E D I D O S')

@section('contenido')

    <div class="container">
        <form class="row g-3 needs-validation mx-auto" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">ID_pedido</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="ID_pedido" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un ID válido (solo números).
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">ID_Cliente</label>
                <select class="form-select" id="validationCustom02" required>
                    <option value="">Selecciona un ID de cliente</option>
                    <option value="1">ID Cliente 1</option>
                    <option value="2">ID Cliente 2</option>
                    <option value="3">ID Cliente 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, selecciona un ID de cliente válido
                </div>
            </div>


            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">ID_Empleado</label>
                <select class="form-select" id="validationCustom02" required>
                    <option value="">Selecciona un ID de cliente</option>
                    <option value="1">ID Emplead 1</option>
                    <option value="2">ID Emplead 2</option>
                    <option value="3">ID Emplead 3</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, selecciona un ID de Emplead válido
                </div>
            </div>



            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">datos de la orden</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="Datos" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, proporcione los datos de la orden válidos.
                </div>
            </div>


            <div class="col-md-4">
                <label for="validationCustomDate" class="form-label">Fecha de la Orden</label>
                <input type="date" class="form-control" id="validationCustomDate" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, seleccione una fecha válida.
                </div>
            </div>



            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
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
                {{-- <a href="/pedidos_registro" class="btn btn-primary">Ir a Registro de Pedidos</a> --}}
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
