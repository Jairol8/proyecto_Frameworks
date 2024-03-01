@extends('/admin/plantilla/appadmin')

@section('titulo', 'P R O D U C T O S')

@section('contenido')

<div class="container">
    <form id="productForm" class="row g-3 needs-validation mx-auto" novalidate>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">ID_Producto</label>
            <input type="text" name="id_producto" class="form-control" id="validationCustom01" placeholder="ID"
                pattern="[0-9]+" title="Ingrese solo números" required>
            <div class="valid-feedback">
                ¡Se ve bien!
            </div>
            <div class="invalid-feedback">
                Proporcione un ID válido (solo números).
            </div>
        </div>

        <div class="col-md-4">
            <label for="validationCustom02" class="form-label">Nombre</label>
            <input type="text" name="nombre_producto" class="form-control" id="validationCustom02"
                placeholder="Nombre del producto" required>
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
                <input type="text" name="precio_producto" class="form-control" id="validationCustomPrice"
                    placeholder="Precio" pattern="[0-9]+(\.[0-9]{1,2})?"
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
            <label for="validationCustomOrderedUnits" class="form-label">Unidades Ordenadas</label>
            <input type="text" name="unidades_ordenadas" class="form-control" id="validationCustomOrderedUnits"
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
            <label for="validationCustomCatalog" class="form-label">Seleccionar Catálogo</label>
            <select class="form-select" id="validationCustomCatalog" name="catalogo" required>
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
                    Agregar
                </label>
                <div class="invalid-feedback">
                    Debe estar de acuerdo antes de enviar.
                </div>
            </div>
        </div>

        <div class="col-12">
            <a href="{{ route('productos.index') }}" class="btn btn-primary">Ir a Registro de Productos</a>
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

