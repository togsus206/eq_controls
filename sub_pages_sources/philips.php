<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equivalencia de Controles Remotos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles_2.css">
    <!-- <link rel="icon" type="image/png" href="ruta/al/icono.png"> -->

    
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold">EQUIVALENCIA DE CONTROLES REMOTOS DE TELEVISORES</h1>

            <a href="../index.php" class="logo-boton">
            <img src="../main_logo.png" alt="Inicio">
        </header>

        <p>SI UN TELEVISOR TENIA UN CONTROL DE UNA FILA, SE PUEDEN USAR LOS CONTROLES DE LA MISMA FILA COMO EQUIVALENTES.</p>
        <br/>
        <p>
            QUE LA MARCA APAREZCA ARRIBA DE UNA FILA DE CONTROL NO QUIERE DECIR QUE LOS CONTROLES DE ESA FILA SEAN SI O SI 
            COMPATIBLES CON TU TELEVISOR. SOLO SI TU TELEVISOR TENIA UNO DE LOS CONTROLES QUE APARECEN EN LA FILA, QUIERE DECIR
            QUE EL RESTO DE CONTROLES DE LA FILA SERAN COMPATIBLES.
        </p>
        <br/><br/><br/>

        <main>

            <?php include '../navbar.html'; ?>

            
            <!-- PHILIPS -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 custom-bg">PHILIPS</h2>
                <div class="horizontal-scroll">
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/689.png" alt="689" class="img-normalizada">
                        <p class="mt-2 text-center">689</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/691.png" alt="691" class="img-normalizada">
                        <p class="mt-2 text-center">691</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/692.png" alt="692" class="img-normalizada">
                        <p class="mt-2 text-center">692</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/PHILIPS_NET_ABAJO.png" alt="69X" class="img-normalizada">
                        <p class="mt-2 text-center">69X</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/JH501.png" alt="JH501" class="img-normalizada">
                        <p class="mt-2 text-center">JH501</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/1677.png" alt="1677" class="img-normalizada">
                        <p class="mt-2 text-center">1677</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/1747.png" alt="1747" class="img-normalizada">
                        <p class="mt-2 text-center">1747</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/Philips/ROMBO_NETFLIX_SOLO.png" alt="ROMBO NET " class="img-normalizada">
                        <p class="mt-2 text-center">ROMBO NETFLIX</p>
                    </div>
                    <!-- Más controles -->
                </div>
            </div>


            <!-- PHILIPS -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 custom-bg">PHILIPS</h2>
                <div class="horizontal-scroll">
                    <div class="item p-2">
                        <img src="../cr_sources/PHILIPS_2/694.png" alt="694" class="img-normalizada">
                        <p class="mt-2 text-center">694</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/PHILIPS_2/1577.png" alt="1577" class="img-normalizada">
                        <p class="mt-2 text-center">1577</p>
                    </div>
                    <!-- Más controles -->
                </div>
            </div>
            
            
            <!-- PHILIPS TUBO -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 custom-bg">PHILIPS TUBO </h2>
                <div class="horizontal-scroll">
                    <div class="item p-2">
                        <img src="../cr_sources/PHILIPS_TUBO/556.png" alt="556" class="img-normalizada">
                        <p class="mt-2 text-center">556</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/PHILIPS_TUBO/557.png" alt="557" class="img-normalizada">
                        <p class="mt-2 text-center">557</p>
                    </div>
                    <!-- Más controles -->
                </div>
            </div>


        <footer class="text-center mt-8">
            <p>PARA CUALQUIER SUGERENCIA:</p>
            <br/>
            <a href="mailto:togsus2@gmail.com?Subject=Sugerencia%20en%20quivalencias">Contactar por correo</a>
            <br/><br/>
            <p>&copy; 2024 Listado de Controles Remotos</p>
        </footer>
    </div>


    <!--Script para el deslizamiento de la barra superior -->
    <script>
        let scrollInterval;

        function startScroll(direction) {
            const navContainer = document.getElementById('nav-container');
            scrollInterval = setInterval(() => {
                navContainer.scrollBy({ left: direction * 5 });
            }, 20); // Ajusta la velocidad
        }

        function stopScroll() {
            clearInterval(scrollInterval);
        }
    </script>


</body>
</html>