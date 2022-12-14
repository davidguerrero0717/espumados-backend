
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="user-tab" data-bs-toggle="tab" data-bs-target="#user-tab-pane" type="button" role="tab" aria-controls="user-tab-pane" aria-selected="true">Usuarios</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="roles-tab" data-bs-toggle="tab" data-bs-target="#roles-tab-pane" type="button" role="tab" aria-controls="roles-tab-pane" aria-selected="false">Roles</button>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    
    <div class="tab-pane fade show active" id="user-tab-pane" role="tabpanel" aria-labelledby="user-tab" tabindex="0">

        <div class="container mt-5">
            <div class="col">
                <button type="button" class="btn btn-primary mx-5 mb-4" onclick="openModal(1);">Crear Usuario</button>
            </div>

            <div class="col">
                <div class="row">
                    <table class="table table-dark table-striped-columns mx-5">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombres</th>
                              <th scope="col">Cedula</th>
                              <th scope="col">Correo</th>
                              <th scope="col">Rol</th>
                              <th scope="col">Opciones</th>
                            </tr>
                          </thead>
                          <tbody id="tableUSers"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="tab-pane fade" id="roles-tab-pane" role="tabpanel" aria-labelledby="roles-tab" tabindex="0">
        <div class="container mt-5">
            <div class="col">
                <button type="button" class="btn btn-primary mx-5 mb-4" onclick="openModalRoles(1)">Crear Rol</button>
            </div>

            <div class="col">
                <div class="row">
                    <table class="table table-dark table-striped-columns mx-5">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Nombre Pantalla</th>
                              <th scope="col">Opciones</th>
                            </tr>
                          </thead>
                          <tbody id="rolTable"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@include('modals.modal')
@include('modals.rolesModal')