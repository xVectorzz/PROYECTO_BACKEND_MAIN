<?php include './views/templates/header.php'; ?>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="max-height: 700px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./src/img/ESCOM_escuela.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./src/img/IPN_escuela.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="./src/img/ESFM_escuela.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>

    <!-- Recuadro en el centro -->
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card information">
            <div class="card-body">
                <h2 class="fw-normal card-title text-center display-3">Ceremonia de Distinciones</h2>
                <p class="card-text">Las distinciones al mérito politécnico son un reconocimiento que hace la comunidad politécnica a una conducta, trayectoria, servicio o acción ejemplar o sobresaliente cada año.</p>
            </div>

            
            <a href="login.php"class="text-center navbar-brand animate__animated animate__zoomIn">
                <p class="btn btn-primary">Registrarse</p>
            </a>
        </div>
    </div>

    
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="main.js"></script>
</body>
</html>
