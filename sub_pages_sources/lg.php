<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equivalencia de Controles Remotos</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../styles_2.css">
    <?php include "../mini_logo.html"; ?>

    
</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <header class="text-center mb-8">
            <h1 class="text-3xl font-bold">EQUIVALENCIA DE CONTROLES REMOTOS DE TELEVISORES</h1>

            <?php include '../logo.html'; ?>
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

            
            <!-- LG MAGIC -->
            <?php include '../modules_sources/LG_magic/LG_magic.html'; ?>


            <!-- LG BOTON NETFLIX - AMAZON -->
            <?php include '../modules_sources/LG_netflix_amazon/LG_netflix_amazon.html'; ?>

            
            <!-- LG SMART -->
            <?php include '../modules_sources/LG_smart/LG_smart.html'; ?>

            <!-- LG  -->
            <?php include '../modules_sources/LG.html'; ?>


            <h1 class="text-3xl font-bold custom-title">CONTROLES PARECIDOS PERO *NO EQUIVALENTES*</h1>
            <br/>

            <!-- LG  -->
            <?php include '../modules_sources/LG_2/LG_2.html'; ?>
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