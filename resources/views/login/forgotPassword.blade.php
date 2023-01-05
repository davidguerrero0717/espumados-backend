<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/registration.css">

<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Recupere su contraseña</h3>

              <form method="GET" action="{{ route('send-email') }}">

                @csrf
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="email" id="emailForget" name="emailForget" class="form-control form-control-lg rounded-pill shadow-input" />
                      <label class="form-label" for="emailForget">Correo</label>
                    </div>
                  </div>
                </div>
  
                <div class="mt-4 pt-2">
                  <input class="btn btn-primary btn-lg button-class-espumados" type="submit" value="Enviar" />
                  <input class="btn btn-primary btn-lg button-class-espumados" type="button" onclick="javascript:history.back();" value="Cancelar" />
                </div>
  
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>