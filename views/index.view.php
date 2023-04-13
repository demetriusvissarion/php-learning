<?php

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Learning</title>
	<style>
		header {
			background: #e3e3e3;
			padding: 2em;
			text-align: center;
		}
	</style>
</head>

<body>

	<nav>
		<ul>
			<li><a href="/about">About Page</a></li>
			<li><a href="/contact">Contact Page</a></li>
		</ul>
	</nav>
	
		<?php foreach ($tasks as $task) : ?>
			<li>
				
				<?php if ($task->completed) : ?>

					<strike><?= $task->description; ?></strike>

				<?php else: ?>

					<?= $task->description; ?>

				<?php endif; ?>

			</li>
		<?php endforeach; ?>

</body>
</html>




