<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/registration.css">

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registrese</h3>
              <form method="POST" id="createUsers">
                @csrf
                <div class="row">
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="names" class="form-control form-control-lg rounded-pill shadow-input" name="names" required />
                      <label class="form-label" for="names">Nombres</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="text" id="cedula" class="form-control form-control-lg rounded-pill shadow-input" name="cedula" required />
                      <label class="form-label" for="cedula">Cedula</label>
                    </div>
  
                  </div>

                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control form-control-lg rounded-pill shadow-input" id="passwordUser" name="passwordUs" required />
                      <label for="passwordUser" class="form-label">Contraseña</label>
                    </div>
  
                  </div>

                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline">
                      <input type="email" id="emailAddress" class="form-control form-control-lg rounded-pill shadow-input" name="emailAdd" required />
                      <label class="form-label" for="emailAddress">Email</label>
                    </div>
  
                  </div>

                </div>
  
                <div class="row">
                  <div class="col-12">
  
                    <select class="select form-control-lg d-flex align-items-center" id="rolUser" required>
                      <option value="0">Escoja una opción</option>
                      <option value="1">Administrador</option>
                      <option value="2">Usuario</option>
                    </select>
                  </div>
                </div>
  
                <div class="mt-4 pt-2">
                  <button class="btn btn-primary btn-lg button-class-espumados" id="saveUser" onclick="storeUsers();" type="button">Guardar</button>
                  <button class="btn btn-primary btn-lg button-class-espumados" type="button" onclick="javascript:history.back();">Cancelar</button>
                </div>

                <div class="mt-4 pt-2">
                  @foreach ($errors->all() as $message)
                      <p>{{ $message }}</p>
                  @endforeach
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{-- Jquery Library --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js"></script>
  
  <script src="{{ asset('assets/js/login.js') }}"></script>

  {{-- Axios Librery --}}
  <script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>

  {{-- Sweet Alert Library --}}
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>