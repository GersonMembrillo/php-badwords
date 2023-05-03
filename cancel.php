<?php

if(isset($_POST['first']) && isset($_POST['second'])) {
$first = $_POST['first'];
$second = $_POST['second'];
} else {
  $first = 'eh Boh';
  $second = 'Scrivi qualcosa, Figlio/a di Buona Donna';
}

$first = $_POST['first'];
$second = $_POST['second'];

$replace = ['idiota' , 'scemo', 'cretino', 'coglione', 'stupido', 'porco', 'cazzo', 'fanculo',];
$replaced = ['i***a' , 's***o', 'c***o', 'c***e', 's***o', 'p***o', 'c***o', 'f**o',];

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
		<title></title>
</head>
<body>

<div class="container my-5 py-5 bg-light">
<p class="text-center"><?php echo $first . ' (' . strlen($first) . ' characters)' ?></p>
<p class="text-center"><?php echo str_replace($replace,$replaced,$second) ?></p>
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