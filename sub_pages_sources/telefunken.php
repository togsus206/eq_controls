<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equivalencia de Controles Remotos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles_2.css">
    <?php include '../addons_sources/mini_logo.html'; ?>

    
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold">EQUIVALENCIA DE CONTROLES REMOTOS DE TELEVISORES</h1>

            <?php include '../addons_sources/logo.html'; ?>
        </header>

        <?php include '../addons_sources/disclaimer.html'; ?>
    
        <br/><br/><br/>

        <main>

            <?php include '../addons_sources/navbar.html'; ?>

            <!-- TELEFUNKEN - BGH   -->
            <?php include '../modules_sources/TELEFUNKEN-BGH/TELEFUNKEN-BGH.html'; ?>

            <!-- SANYO - NOBLEX - BGH - JVC - HISENSE  -->
            <?php include '../modules_sources/Sanyo_noblex_bgh_jvc_hisense/Sanyo_noblex_bgh_jvc_hisense.html'; ?>

            
            <h1 class="text-3xl font-bold custom-title">CONTROLES PARECIDOS PERO *NO EQUIVALENTES*</h1>
            <br/>

            <!-- TELEFUNEN VS ENOVA  -->
            <?php include '../modules_sources/TELEFUNKEN_VS_ENOVA/TELEFUNKEN_VS_ENOVA.html'; ?>


        <footer class="text-center mt-8">
            <p>PARA CUALQUIER SUGERENCIA:</p>
            <br/>
            <a href="mailto:togsus2@gmail.com?Subject=Sugerencia%20en%20quivalencias">Contactar por correo</a>
            <br/><br/>
            <p>&copy; 2024 Listado de Controles Remotos</p>
        </footer>
    </div>


</body>
</html>