@extends('/admin/plantilla/appadmin')

@section('titulo', 'C A T E G O R I A')

@section('contenido')

    <div class="container">
        <form class="row g-3 needs-validation mx-auto" novalidate>
            <div class="col-md-4">
                <label for="validationCustom01" class="form-label">id_categoria</label>
                <input type="text" class="form-control" id="validationCustom01" placeholder="ID_categoria" pattern="[0-9]+"
                    title="Ingrese solo números" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un ID válido (solo números).
                </div>
            </div>

            <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="" required>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Proporcione un Nombre válido
                </div>
            </div>
            <div class="col-md-4">
                <label for="validationCustomPrice" class="form-label">Precio del Producto</label>
                <div class="input-group has-validation">
                    <span class="input-group-text" id="inputGroupPrepend">$</span>
                    <input type="text" class="form-control" id="validationCustomPrice" placeholder="Precio"
                        pattern="[0-9]+(\.[0-9]{1,2})?"
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
                <label for="validationCustomCatalog" class="form-label">Seleccionar Catálogo</label>
                <select class="form-select" id="validationCustomCatalog" required>
                    <option value="" selected disabled>Seleccionar catálogo</option>
                    <option value="1">Catálogo 1</option>
                    <option value="2">Catálogo 2</option>
                    <option value="3">Catálogo 3</option>
                    <option value="4">Catálogo 4</option>
                    <option value="5">Catálogo 5</option>
                    <option value="6">Catálogo 6</option>
                    <option value="7">Catálogo 7</option>
                    <option value="8">Catálogo 8</option>
                </select>
                <div class="valid-feedback">
                    ¡Se ve bien!
                </div>
                <div class="invalid-feedback">
                    Por favor, seleccione un catálogo.
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
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>

                   
                </div>
            </div>
            
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
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
