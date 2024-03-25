<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cargando</title>
  <link rel="stylesheet" href="public/bootstrap/CSS/bootstrap.ccs"> <!--Aquí va el link del Css-->
</head>
<body>

<div id="loader">
<span class="spinner-border text-danger" style="width: 250px; height: 250px;"> </span>
</div>

<style>
#loader {
  font-family: "roboto";
  font-size: 3rem;
  color: #e22;
  opacity: 1;
  position: fixed!important;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 25;
  
  /* colors */
  background-color: #fff;
}

.hoverLoader {
  opacity: 0!important;
  transition: .5s;
}
</style>

<script>
const $loader = document.querySelector("#loader"); 
setTimeout(() => {
$loader.classList.add("hoverLoader");
setTimeout(() => {
  $loader.style.display = "none"; 
}, 500);}, 500);
</script>

<script src="public/bootstrap/JS/bootstrap.bundle.js"></script>
</body>
</html>