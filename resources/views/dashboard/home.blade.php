<div class="container border border border-dark mb-5 text-center">
    <img src="images/Espumados.png" alt="Espumados Colombia" height="180" width="180">
</div>


<ul class="nav nav-tabs mx-5" id="myTab" role="tablist">
    <li class="nav-item background-tab" role="presentation" id="users">
      <button class="nav-link active" id="user-tab" data-bs-toggle="tab" data-bs-target="#user-tab-pane" type="button" role="tab" aria-controls="user-tab-pane" aria-selected="true">Usuarios</button>
    </li>
    <li class="nav-item background-tab" role="presentation" id="roles">
      <button class="nav-link" id="roles-tab" data-bs-toggle="tab" data-bs-target="#roles-tab-pane" type="button" role="tab" aria-controls="roles-tab-pane" aria-selected="false">Roles</button>
    </li>
</ul>

<div class="tab-content" id="myTabContent">
    
    <div class="tab-pane fade show active" id="user-tab-pane" role="tabpanel" aria-labelledby="user-tab" tabindex="0">
        @include('resources.users')        
    </div>

    <div class="tab-pane fade" id="roles-tab-pane" role="tabpanel" aria-labelledby="roles-tab" tabindex="0">
        @include('resources.roles')
    </div>
</div>

@include('modals.modal')
@include('modals.rolesModal')