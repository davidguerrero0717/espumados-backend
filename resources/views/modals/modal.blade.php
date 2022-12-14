<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="titleUser"></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST">
                @csrf
                <div class="mb-3">
                  <label for="nombresLabel" class="form-label">Nombres</label>
                  <input type="text" class="form-control" id="nombresLabel" name="nombresLabel" aria-describedby="namesHelp">
                </div>
                <div class="mb-3">
                  <label for="cedulaLabel" class="form-label">Cedula</label>
                  <input type="text" class="form-control" id="cedulaLabel" name="cedula" aria-describedby="cedulaHelp">
                </div>
                <div class="mb-3">
                  <label for="emailLabel" class="form-label">Correo</label>
                  <input type="email" class="form-control" id="emailLabel" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="passwordLabel" class="form-label">Contraseña</label>
                  <input type="text" class="form-control" id="passwordLabel" name="password">
                </div>
                <div class="mb-3">
                    <select class="form-select" aria-label="Default select example" id="roles" name="roles">
                        <option selected>Seleccione una opción</option>
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                      </select>
                </div>
            </form>

            <div>
                @foreach ($errors->all() as $error)
                    <small style="color: red;">{{ $error }}</small>
                @endforeach
            </div>
        </div>
        <div class="modal-footer" id="typeProcess">
          <button type="button" class="btn btn-primary" onclick="processData()">Guardar</button>
          <button type="button" class="btn btn-secondary" onclick="deleteFields()">Cancelar</button>
        </div>
      </div>
    </div>
</div>