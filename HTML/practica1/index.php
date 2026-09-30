<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Permite utilizar correctamente caracteres como á, é, ñ, etc. -->
    <meta charset="UTF-8">

    <!-- Hace que la página se adapte correctamente a celulares, tablets y computadoras -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Descripción de la página. Es útil para buscadores como Google -->
    <meta name="description" content="Tienda de computadoras, laptops y accesorios">

    <!-- Título que aparece en la pestaña del navegador -->
    <title>Tienda de Computadoras</title>


    <!-- =========================================================
         BOOTSTRAP 5.3
         ========================================================= -->

    <!--
        Bootstrap es un framework de CSS que nos proporciona
        clases listas para diseñar nuestra página.

        En este caso utilizamos Bootstrap 5.3 desde su CDN.
    -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>


<body>

    <!-- =========================================================
         ENCABEZADO / HEADER
         ========================================================= -->

    <!--
        <header> representa la parte superior de nuestra página.
        Aquí normalmente colocamos el logo, menú, buscador, etc.
    -->
    <header>
        <!-- NAV es el elemento semántico utilizado para navegación -->
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark" id="BarraNavegacion">

            <!-- .container centra el contenido y limita su ancho -->
            <div class="container">

                <!-- Nombre o logo de nuestra tienda -->
                <a class="navbar-brand" href="#">
                    Mi Tienda PC
                </a>



                <!--
                    Botón que aparece en pantallas pequeñas.
                    Permite abrir/cerrar el menú.
                -->
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#menuPrincipal"
                    aria-controls="menuPrincipal"
                    aria-expanded="false"
                    aria-label="Mostrar menú"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Contenedor del menú -->
                <div class="collapse navbar-collapse" id="menuPrincipal">

                    <!-- Lista de enlaces -->
                    <ul class="navbar-nav ms-auto">

                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Inicio
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#productos">
                                Productos
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">
                                Contacto
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </nav>
    </header>


    <!-- =========================================================
         CONTENIDO PRINCIPAL
         ========================================================= -->

    <!--
        <main> contiene el contenido principal de la página.
        Una página debería tener un <main> principal.
    -->
    <main>

        <!-- =====================================================
             SECCIÓN DE BIENVENIDA
             ===================================================== -->

        <section id="secction1" class="py-5 bg-light">

            <div class="container">

                <div class="row align-items-center">

                    <!-- Columna izquierda -->
                    <div class="col-md-7">

                        <h1 class="display-4">
                            Computadoras para todos
                        </h1>

                        <p class="lead">
                            Encuentra laptops, computadoras de escritorio
                            y accesorios para tu trabajo, estudio o gaming.
                        </p>

                        <!-- Botón de Bootstrap -->
                        <a href="#productos" class="btn btn-primary">
                            Ver productos
                        </a>

                    </div>

                    <!-- Columna derecha -->
                    <div class="col-md-5">

                        <!--
                            Por ahora utilizamos una imagen de ejemplo.
                            Más adelante puedes sustituirla por una imagen
                            almacenada en tu propio proyecto.
                        -->
                        <img
                            src="https://via.placeholder.com/600x400"
                            alt="Computadora de escritorio"
                            class="img-fluid rounded"
                        >

                    </div>

                </div>

            </div>

        </section>


        <!-- =====================================================
             PRODUCTOS
             ===================================================== -->

        <section id="productos" class="py-5">

            <div class="container">

                <h2 class="text-center mb-4">
                    Nuestros productos
                </h2>

                <!--
                    .row crea una fila de Bootstrap.

                    Las clases col-md-4 hacen que cada producto
                    ocupe aproximadamente 1/3 del ancho en
                    pantallas medianas o grandes.
                -->
                <div class="row">


                    <!-- PRODUCTO 1 -->
                    <div class="col-md-4 mb-4">

                        <!-- Card = tarjeta de Bootstrap -->
                        <div class="card h-100">

                            <img
                                src="https://via.placeholder.com/400x250"
                                class="card-img-top"
                                alt="Laptop"
                            >

                            <div class="card-body">

                                <h3 class="card-title">
                                    Laptop Pro
                                </h3>

                                <p class="card-text">
                                    Laptop para trabajo y estudio.
                                </p>

                                <p class="fw-bold">
                                    $15,999 MXN
                                </p>

                                <button class="btn btn-primary">
                                    Comprar
                                </button>

                            </div>
                        </div>

                    </div>


                    <!-- PRODUCTO 2 -->
                    <div class="col-md-4 mb-4">

                        <div class="card h-100">

                            <img
                                src="https://via.placeholder.com/400x250"
                                class="card-img-top"
                                alt="PC Gamer"
                            >

                            <div class="card-body">

                                <h3 class="card-title">
                                    PC Gamer
                                </h3>

                                <p class="card-text">
                                    Computadora para videojuegos.
                                </p>

                                <p class="fw-bold">
                                    $25,999 MXN
                                </p>

                                <button class="btn btn-primary">
                                    Comprar
                                </button>

                            </div>
                        </div>

                    </div>


                    <!-- PRODUCTO 3 -->
                    <div class="col-md-4 mb-4">

                        <div class="card h-100">

                            <img
                                src="https://via.placeholder.com/400x250"
                                class="card-img-top"
                                alt="Monitor"
                            >

                            <div class="card-body">

                                <h3 class="card-title">
                                    Monitor 27"
                                </h3>

                                <p class="card-text">
                                    Monitor Full HD para tu computadora.
                                </p>

                                <p class="fw-bold">
                                    $5,499 MXN
                                </p>

                                <button class="btn btn-primary">
                                    Comprar
                                </button>

                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </section>


        <!-- =====================================================
             CONTACTO
             ===================================================== -->

        <section id="contacto" class="py-5 bg-light">

            <div class="container">

                <h2 class="mb-4">
                    Contáctanos
                </h2>

                <!--
                    <form> representa un formulario.
                    Posteriormente puedes conectarlo con JavaScript
                    o con un backend.
                -->
                <form>

                    <div class="mb-3">

                        <label for="nombre" class="form-label">
                            Nombre
                        </label>

                        <input
                            type="text"
                            id="nombre"
                            class="form-control"
                            placeholder="Escribe tu nombre"
                        >

                    </div>


                    <div class="mb-3">

                        <label for="email" class="form-label">
                            Correo electrónico
                        </label>

                        <input
                            type="email"
                            id="email"
                            class="form-control"
                            placeholder="correo@ejemplo.com"
                        >

                    </div>


                    <div class="mb-3">

                        <label for="mensaje" class="form-label">
                            Mensaje
                        </label>

                        <textarea
                            id="mensaje"
                            class="form-control"
                            rows="4"
                            placeholder="Escribe tu mensaje"
                        ></textarea>

                    </div>


                    <button type="submit" class="btn btn-success">
                        Enviar mensaje
                    </button>

                </form>

            </div>

        </section>

    </main>


    <!-- =========================================================
         PIE DE PÁGINA
         ========================================================= -->

    <footer class="bg-dark text-white text-center py-4">

        <div class="container">

            <p class="mb-0">
                &copy; 2026 Mi Tienda PC - Todos los derechos reservados.
            </p>

        </div>

    </footer>


    <!-- =========================================================
         JAVASCRIPT DE BOOTSTRAP
         ========================================================= -->

    <!--
        Bootstrap necesita JavaScript para componentes interactivos
        como el menú desplegable de navegación, modales, etc.

        "bundle" incluye también Popper, que Bootstrap necesita
        para algunos componentes.
    -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>

</body>
</html>