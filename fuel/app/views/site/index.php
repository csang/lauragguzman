<?= Form::open('fan'); ?>
	<h1>Laura Guzmán tiene <?= $total_fans ?> FANS!</h1>
<? if(isset($_COOKIE['fan']) || isset($cookie)){ ?>
	<h2>Gracias por ser un fan!! :D</h2>
<? }else{ ?>
	<input class="submit" type="submit" name="fan" value="También soy un FAN!!" />
<? } ?>
<?= Form::close(); ?>