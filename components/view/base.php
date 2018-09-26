<form method="post">
    <input type="number" value="1" name="idUser">
    <input type="submit" value="send">
</form>

<pre>
<?= isset($_POST['idUser']) && isset($baseModel) ? print_r($baseModel) : 'Введите ид пользователя'; ?>
</pre>