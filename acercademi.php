<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Mí</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .perfil-contenedor {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
            max-width: 800px;
            width: 100%;
            margin-top: 2rem;
            text-align: left;
        }
        .foto-perfil {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 1.5rem auto;
            display: block;
            border: 4px solid #1abc9c;
        }
        .seccion-acerca {
            margin-bottom: 1.5rem;
        }
        .seccion-acerca h3 {
            color: #2c3e50;
            border-bottom: 2px solid #1abc9c;
            padding-bottom: 0.5rem;
            margin-bottom: 1rem;
        }
        .lista-gustos {
            list-style-type: none;
            padding: 0;
        }
        .lista-gustos li {
            margin-bottom: 0.8rem;
            padding-left: 2rem;
            position: relative;
        }
        .lista-gustos li::before {
            content: "✨";
            position: absolute;
            left: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Acerca de Mí</h1>
        <p>Conoce a la creadora de este trabajo</p>
    </header>

    <main>
        <div class="perfil-contenedor">
            <img src="img/mifoto.png" alt="Mi Foto de Perfil" class="foto-perfil">
            
            <h2 style="text-align: center; margin-bottom: 2rem;">Isabella Mendez</h2>

            <div class="seccion-acerca">
                <h3>Propósito de la Página</h3>
                <p>El propósito de este sitio web es mostrar mis aprendizajes en lógica de programación con PSeInt y desarrollo web con PHP durante los periodos académicos. Es un espacio donde evidencio la comprensión de estructuras basicas, operaciones, condicionales, ciclos y la implementación de formularios web.</p>
            </div>

            <div class="seccion-acerca">
                <h3>Mis Intereses y Gustos</h3>
                <p>Soy una estudiante de Pereira y, además de la programación, disfruto mucho de las siguientes actividades:</p>
                <ul class="lista-gustos">
                    <li><strong>Tecnología y Diseño:</strong> Me gusta el desarrollo web y practicar diseño gráfico, creando logos o piezas gráficas en Illustrator y Canva.</li>
                    <li><strong>Deporte y Fitness:</strong> Llevo un estilo de vida activo. Me apasiona ir al gimnasio, entrenar fuerza, patinar, correr y participar en eventos deportivos.</li>
                    <li><strong>Cine y Series:</strong> Soy una gran fanática de las peliculas, en especial las peliculas de marvel o de roance y acción .</li>
                </ul>
            </div>
        </div>

        <nav class="menu-periodos" style="margin-top: 3rem;">
            <a href="index.html" class="btn" style="background-color: #34495e;">Ir al Menú Principal</a>
        </nav>
    </main>

    <footer>
        <p>&copy; 2026 - Proyecto de informatica</p>
    </footer>
</body>
</html>