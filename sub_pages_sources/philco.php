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
            
            <!-- SANYO - NOBLEX - BGH - JVC - HISENSE  -->
            <?php include '../modules_sources/Sanyo_noblex_bgh_jvc_hisense/Sanyo_noblex_bgh_jvc_hisense.html'; ?>

            <!-- ONN - RCA - PHILCO - SANYO  -->
            <?php include '../modules_sources/onn_rca_philco_sanyo.html'; ?>

            <!-- PHILCO - JVC -NOBLEX - SANYO  -->
            <?php include '../modules_sources/PHILCO-JVC-NOBLEX-SANYO.html'; ?>

            <!-- RCA - TCL - HITACHI - ADMIRAL  -->
            <?php include '../modules_sources/RCA-TCL-HITACHI/RCA-TCL-HITACHI.html'; ?>

            <!-- NOHIS -->
            <?php include '../modules_sources/nohis/nohis.html'; ?>

            <!-- NOBLEX - HITACHI- SANYO -JVC - PHILCO  -->
            <?php include '../modules_sources/NOBLEX-HITACHI-SANYO-JVC-PHILCO.html'; ?>


            <h1 class="text-3xl font-bold custom-title">CONTROLES PARECIDOS PERO *NO EQUIVALENTES*</h1>
            <br/>

            <!-- SAMSUNG VS HYUNDAI  -->
            <?php include '../modules_sources/sam_vs_hyundai.html'; ?>


            <!-- AMBOS NOHIS, PERO NO  -->
            <?php include '../modules_sources/nohis_but_no.html'; ?>


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