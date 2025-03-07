<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    </head>

    <body>
      
        <section class="h-100 gradient-form" style="background-color: #f8f6f6;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card bg-green rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="img/logo.jpg"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1"> Iniciar Sesion </h4>
                          </div>
          
                          <form>
                            <p>Ingresa usuario y contraseña  </p>
          
                            <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label" for="form2Example11">Usuario</label>
                              <input type="text" name="text" id="form2Example11" class="form-control"
                                placeholder="Ingresa tu usuario" />
                             
                            </div>
          
                            <div data-mdb-input-init class="form-outline mb-4">
                              <label class="form-label" for="form2Example22">Contraseña</label>
                              <input type="password" name="password" id="form2Example22" class="form-control" />
                             
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                                in</button>
                              <a class="text-muted" href="#!">Forgot password?</a>
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2">No tienes usuario ? </p>
                              <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Nuevo registro</button>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                       
                        <img src="https://img.freepik.com/fotos-premium/chef-cocinando-fuego-alto-cocina-restaurante_482257-24330.jpg"
                        alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
       
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
