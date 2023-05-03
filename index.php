<?php
  $name = 'Gerry';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
			integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
			crossorigin="anonymous"
			referrerpolicy="no-referrer"
		/>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="./css/style.css" />
		<title>No Swear!</title>
</head>
<body>

<div class="container mt-3 py-5 bg-light">
  <h1 class="text-center text-uppercase fw-bold">Bad Words!</h1>
  <p class="text-center bg-secondary text-white">Inserisci del testo nel primo quadrante e ti dirà la lunghezza, il secondo quadrante verrà censurato solo se sarai monello</p>
  <div class="text-center">
    <form action="cancel.php" method="POST">
      <div class="mb-3">
        <label for="first"></label>
        <input type="text" name="first" id="first" placeholder="Scrivi qui">
      </div>
      <div class="mb-4">
        <label for="second"></label>
        <input type="text" name="second" id="second" placeholder="Scrivi anche qui">
      </div>
      <input type="submit" class="btn btn-outline-dark" value="Invia">
    </form>
  </div>
</div>


<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
		<script type="text/javascript" src="./js/script.js"></script>
		<script type="text/javascript" src="./js/utility.js"></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
			crossorigin="anonymous"
		></script>
</body>
</html>