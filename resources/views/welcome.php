<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./">Inicio<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./register">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./profile">Profile</a>
      </li>
     
    </ul>
    
  </div>
</nav>
    <h1>Hola programador</h1>
    <h4>!Bienvenido al sistema <?php echo $nombre;?></h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni expedita mollitia provident assumenda minima harum numquam neque sit odio veritatis rem consectetur maxime odit, quam minus omnis officiis consequuntur fuga!</p>
</body>
</html>