<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset("css/login.css")}}">
   </head>
  <body>
    <div class="container vh-100 d-flex align-items-center justify-content-center flex-column">
        <!-- <h2 class="mb-5 text-center">Aplicacion de propuestas</h2> -->
        <div class="row d-flex gap-3">
            <div class="col d-flex">
                <div class="card" style="width: 18rem;">
                    <i class="fs-1 pt-3 text-center fas fa-cog"></i>
                    <div class="card-body d-flex flex-column">
                      <h5 class="text-center card-title">Administrador</h5>
                      <p class="flex-fill card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, qui.
                      </p>
                      <a href="{{route('administrador.index')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card" style="width: 18rem;">
                    <i class="fs-1 pt-3 text-center fas fa-glasses"></i>
                    <div class="card-body d-flex flex-column">
                      <h5 class="text-center card-title">Profesor</h5>
                      <p class="flex-fill card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis, nostrum. In fuga consequuntur quas dolores ullam et mollitia asperiores nobis.
                      </p>
                      <a href="{{route('profesor.index')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card" style="width: 18rem;">
                    <i class="fs-1 pt-3 text-center fas fa-user-graduate"></i>
                    <div class="card-body d-flex flex-column">
                      <h5 class="text-center card-title">Estudiante</h5>
                      <p class="flex-fill card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="{{route('estudiante.lista')}}" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>