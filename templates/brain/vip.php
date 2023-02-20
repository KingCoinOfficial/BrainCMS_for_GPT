<?php
	include_once 'includes/header.php';
?>
<title><?= $config['hotelName'] ?>: <?= $lang["Ccommunity"] ?></title>
<div class="center">
<?php
		include_once 'includes/alerts.php';
	?>
	<div class="columleft">
		<div class="box">
			<div class="title">
				<?= $lang["Vvipheader"] ?>
			</div>
			<div class="mainBox" style="float;left">
				<div class="boxHeader"></div>
				<?php echo'<img src="templates\brain\style\images\vip\vip_image.gif" align="right">  '?>
				<?= $lang["Vvipwhatsin"] ?>
				<?php echo'<img src="templates\brain\style\images\vip\vipbadge.gif" align="left">  '?>
			</div>
		</div>
	</div>
	<div class="columright">
		
		<div class="box">
			<div class="title green">
				<?= $lang["VvipBuyHeader"] ?>
			</div>
			<?php buyvip(); ?>
			<?= $lang["VvipBuyslogan"] ?>
			<form method="post">
				<input type="submit" class="submit" value="<?= $lang["VvipBuyButton"] ?>" name="getvip" style="margin-top: 10px;"><br>
			</form>
		</div>
	</div>
	<?php
		include_once 'includes/footer.php';
	?>
</div>
</div>
<style>
input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
</style>
</body>
</html>			