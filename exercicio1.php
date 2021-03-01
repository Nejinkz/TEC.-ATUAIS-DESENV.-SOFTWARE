<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
<?php for ($i=1; $i <= 99; $i++): ?>
	<p>Mariana conta <?=$i?></p>
	<p>
		Mariana conta <?=$i?>
		<?php for ($r=1; $r <= $i; $r++): ?>
			é <?=$r?>
		<?php endfor; ?>
                ,
	</p>
	<p>Ana viva a Mariana viva a Mariana,</p>
<?php endfor; ?>


</body>
</html>