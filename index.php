<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

        <link rel="stylesheet" href="style.css">

</head>


<body>
    <div class="container mt-5 bg-form text-white p-5">
        <h3>Subir archivo</h3>
       
        <form action="subir.php" method="post" enctype="multipart/form-data">
            
        <div class="mb-5"> 
                <input type="file" class="form-control" id="seleccionar" name="archivo"> 
                <button type="submit" class="btn btn-secondary mt-3">Enviar</button> 
            </div>
        </form>
    </div>

</body>

</html>