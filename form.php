<form action="" method="get">
	<input type="text" name="email" /><br />
    <input type="text" name="username" /><br />
    <input type="submit" value="Отправить">
</form>

<?php
if (isset($_GET['email'])) {
	echo 'email: ' . $_GET['email'];
	echo "<br>";
}