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

            <?php include 'navbar.html'; ?>

            
            <!-- KEN BROWN -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 custom-bg">KEN BROWN</h2>
                <div class="horizontal-scroll">
                    <div class="item p-2">
                        <img src="../cr_sources/ken_b/control-remoto-ken-brown-637.png" alt="637" class="img-normalizada">
                        <p class="mt-2 text-center">637</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/ken_b/control-remoto-ken-brown-638.png" alt="638" class="img-normalizada">
                        <p class="mt-2 text-center">638</p>
                    </div>
                    <!-- Más controles -->
                </div>
            </div>

             <!-- ADMIRAL -  KEN BROWN - NOBLEX - SANYO   -->
             <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 custom-bg"> ADMIRAL -  KEN BROWN - NOBLEX - SANYO </h2>
                <div class="horizontal-scroll">
                    <div class="item p-2">
                        <img src="../cr_sources/ADMIRAL-KB-NOBLEX-SANYO/1505.png" alt="1505" class="img-normalizada">
                        <p class="mt-2 text-center">1505</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/ADMIRAL-KB-NOBLEX-SANYO/1506.png" alt="1506" class="img-normalizada">
                        <p class="mt-2 text-center">1506</p>
                    </div>
                    <!-- Más controles -->
                </div>
            </div>


            <!-- DAEWOO - TONOMAC - KEN BROWN - RCA - NOBLEX  -->
            <div class="mb-8">
                <h2 class="text-2xl font-semibold mb-4 custom-bg">DAEWOO - TONOMAC - KEN BROWN - RCA - NOBLEX</h2>
                <div class="horizontal-scroll">
                    <div class="item p-2">
                        <img src="../cr_sources/DAEWOO_TONOMAC_KENB_RCA_NOBLEX/679.png" alt="679" class="img-normalizada">
                        <p class="mt-2 text-center">679</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/DAEWOO_TONOMAC_KENB_RCA_NOBLEX/718.png" alt="718" class="img-normalizada">
                        <p class="mt-2 text-center">718</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/DAEWOO_TONOMAC_KENB_RCA_NOBLEX/774.png" alt="774" class="img-normalizada">
                        <p class="mt-2 text-center">774</p>
                    </div>
                    <div class="item p-2">
                        <img src="../cr_sources/NOBLEX/774_FORMATO2.png" alt="OTRO FORMATO" class="img-normalizada">
                        <p class="mt-2 text-center">774(FORMATO ALTERNATIVO)</p>
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