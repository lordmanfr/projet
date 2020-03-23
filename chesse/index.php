<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section>
    <h1>Chess</h1>
		<div id="content">
			<div id="chessboard" role="main"></div>
			<div id="moves"></div>
			<div id="clear"></div>
			<div id="help">
				<ul>
					<li>Moves can be made by dragging the pieces on the board, or by clicking the move links in the right panel.</li>
					<li>Pawns dragged to the last rank are promoted to queens. Use the move links in the right panel to underpromote.</li>
					<li>Castle by moving the king two squares towards a rook. The rook moves automatically.</li>
				</ul>
			</div>
		</div>
		<div id="footer"></div>
		<div id="dim"></div>
		<script src="https://code.jquery.com/jquery-1.9.0.min.js"></script>
		<script src="https://code.jquery.com/ui/1.10.0/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/augment.js/1.0.0/augment.min.js"></script><![endif]-->
            <script src="assets/js/app.js"></script>
		<script>
			$(makeChessGame);
		</script>
		<a href="https://github.com/kbjorklu/chess"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>
	</body>
</html>
    </section>
    
</body>
</html>