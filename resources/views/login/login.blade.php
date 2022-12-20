<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/login.css">

<section class="vh-100 background-color">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                  alt="login form" class="img-fluid img-styles" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
  
                  <form>
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0 title-styles">Espumados SAS</span>
                    </div>
  
                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Ingrese en su cuenta</h5>
  
                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg rounded-pill shadow-input" />
                      <label class="form-label" for="form2Example17">Usuario</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg rounded-pill shadow-input" />
                      <label class="form-label" for="form2Example27">Contraseña</label>
                    </div>
  
                    <div class="pt-1 mb-4">
                      <button class="btn btn-lg gradient-custom-2" type="button">Ingresar</button>
                    </div>
  
                    <a class="small title-styles title-hover" href="{{ route('password') }}">Aqui, si olvido su password?</a>
                    <p class="mb-5 pb-lg-2 title-styles">No se encuentra registrado? <a href="{{ route('register') }}" class="title-styles title-hover">Registrese aqui</a></p>
                  </form>
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <script src="{{ asset('assets/js/login.js') }}"></script>