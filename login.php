<?php include './views/templates/header.php'; ?>

    <!-- main div -->
    <div class = "d-flex justify-content-center align-items-center mt-5">
        
        <form class="p-3 rounded shadow __regist-form" action="./controllers/auth.php" method="post">
        <div class="container">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center col-sm-6 text-center">
                    <img src="./src/img/ipn.png" width="200px"  id="logo-image" alt="logo-ipn" style="padding-bottom: 30px;"> 
                </div>

                <div class="col-sm-6">
                    <h1 class="text-center fw-semibold pb-5 display-6">Registro al evento</h1>
                    <p>
                        Se les hace una coordial invitación al evento de distinciones <br>
                        Si has sido invitador, por favor, ingresa tu CURP:
                    </p>

                    <div class="mb-3">
                        <label for="exampleInputCurp1" class="form-label">CURP</label>
                        <input  type="text"
                                name="curp"
                                class="form-control" 
                                id="inputCurp" 
                                minlength=18 
                                maxlength=18
                                required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </div>
            </div>
        </div>
    </form>
    </div>
</body>
</html>