<div class="modal fade" id="roleModal" tabindex="-1" aria-labelledby="roleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="roleModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="mb-3">
            <label for="nombreInput" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombreInput" name="nombre" aria-describedby="nombreHelp" required>
            @error('nombre')
              <div class="error">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3">
            <label for="nombrePantallaInput" class="form-label">Nombre en pantalla</label>
            <input type="text" class="form-control" id="nombrePantallaInput" name="nombrePantalla" required>
            @error('nombrePantalla')
              <div class="error">{{ $message }}</div>    
            @enderror
          </div>
          <div class="mb-3">
            <button type="button" class="btn btn-secondary" deleteFieldsRoles();>Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="processDataRoles();">Guardar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>