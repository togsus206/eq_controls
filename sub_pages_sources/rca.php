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

            
            <!-- RCA - TCL - HITACHI - ADMIRAL  -->
            <?php include '../modules_sources/RCA-TCL-HITACHI/RCA-TCL-HITACHI.html'; ?>

            <!-- RCA -   -->
            <?php include '../modules_sources/RCA/RCA.html'; ?>

            <!-- DAEWOO - TONOMAC - KEN BROWN - RCA - NOBLEX - TCL - HITACHI - HYUNDAI - MASTER GOLD -->
            <?php include '../modules_sources/DAEWOO_TONOMAC_KENB_RCA_NOBLEX/DAEWOO_TONOMAC_KENB_RCA_NOBLEX.html'; ?>

            <!-- ONN - RCA - PHILCO - SANYO  -->
            <?php include '../modules_sources/onn_rca_philco_sanyo.html'; ?>

            <!-- RCA - AIPA  -->
            <?php include '../modules_sources/RCA-AIPA.html'; ?>

            <h1 class="text-3xl font-bold custom-title">CONTROLES PARECIDOS PERO *NO EQUIVALENTES*</h1>
            <br/>

            <!-- TCL - RCA VS STEELHOME PANORAMIC  -->
            <?php include '../modules_sources/RCA_TCL_VS_STEELHOME.html'; ?>

            <!-- TELEFUNKEN: 1532 VS 721  -->
            <?php include '../modules_sources/1532_vs_721.html'; ?>

        </main>
        
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