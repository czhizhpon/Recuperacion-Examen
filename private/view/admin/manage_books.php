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
        <!-- Fin Barra Nav-->

        <div id="main_notice" class="e_hidden col-80">	
            <div id="notice" class="div_notice"></div>
        </div>
        <main class="main_container">
            <section  class="col-40">
                <form id="f_book" class="col-100">
                    <label for="i_book_name" class="" >Nombre:</label>
                    <input type="text" name="i_book_name" id="i_book_name" class="" 
                        placeholder="Ingrese el nombre del Libro"/>

                    <br>

                    <label for="i_isbn" class="" >ISBN:</label>
                    <input type="text" name="i_isbn" id="i_isbn" class="" 
                        placeholder="Ingrese el ISBN" onkeyup="validarIngresoCapitulo()"/>

                    <br>

                    <label for="i_num_pag" class="" >N. Páginas:</label>
                    <input type="text" name="i_num_pag" id="i_num_pag" class="" 
                        placeholder="Ingrese el total de páginas"/>

                    <br>

                    <label for="i_author" class="" >Código del Autor:</label>
                    <input type="text" name="i_author" id="i_author" class="" 
                        placeholder="Ingrese el Código del Autor" onkeyup="validarIngresoCapitulo()"/>

                    <input type="button" value="Buscar Autor" onclick="searchAuthor()">

                    <br>
                    <input type="button" value="Crear Libro" onclick="createBook()">
                    
                </form>
                <table id="t_author" class="e-hidden">

                </table>
            </section>
            
            <form id="f_chapter" class="col-40">
                <label for="i_cap_num" class="" >N. Capítulo:</label>
                <input type="text" name="i_cap_num" id="i_cap_num" class="" 
                    placeholder="Ingrese el número del Capítulo" disabled/>

                <br>

                <label for="i_cap_title" class="" >Título:</label>
                <input type="text" name="i_cap_title" id="i_cap_title" class="" 
                    placeholder="Ingrese el Título del Capítulo" disabled/>

                <br>

                <input type="button" value="Registrar Capítulo" id="i_cap_btn" disabled onclick="createChapter()">

                <br>

            </form>
        </main>
    </body>
</html>