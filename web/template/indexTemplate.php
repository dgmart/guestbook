<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
</head>

<body>
    <div class="container">
        <div class="ten columns">
            <h1>Meu Blog</h1>
        </div>
        <div class="one column">
            <form action="/controller/saveVisitorController.php" method="POST">
                <input type="text" name="visitorName" placeholder="Seu nome">
                <input type="email" name="visitorEmail" placeholder="E-mail">
                <input type="submit" value="Assinar livro de visitas" class="button-primary">
            </form>
        </div>
    </div>
</body>

</html>