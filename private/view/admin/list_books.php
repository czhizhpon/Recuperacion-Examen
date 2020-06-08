<DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <link href="../../../css/style.css" rel="stylesheet"/>
        <script src="../../../js/cr_books.js"></script>

        <title>Creación de Libros</title>
    </head>
    <body>
        <header id="main_header">
            <nav id="header_nav">
                <a class="nav_a" href="manage_books.php">Registrar Libro</a>
                <a class="nav_a" href="list_books.php">Listar Capítulos</a>
            </nav>
        </header>

        <form id="f_buscar" class="col-30">
            <label for="i_aut_nombre">Nombre del Autor:</label>
            <input type="text" id="i_aut_nombre" name="i_aut_nombre">
            <br>
            <label for="i_cap_titulo">Título del Capítulo:</label>
            <input type="text" id="i_cap_titulo" name="i_cap_titulo">
            <br>
            <input type="button" value="Buscar" onclick="listBooks()">
        </form>
        <table id="t_list_books">
            <tr>
                <th>Titulo Libro</th>
                <th>N. Paginas</th>
                <th> IBSN</th>
                <th>Titulo Capitulo</th>
                <th>N. Capítulo</th>
                <th>Nombre del autor</th>
                <th>Nacionalidad</th>
            </tr>
            <tr>
                <td colspan="7">Ingrese los parámetros de Búsqueda.</td>
            </tr>
        </table>
        
    </body>
</html>