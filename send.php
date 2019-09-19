<?php
$text = $_POST['text'];
$cv = $_POST['cv'];

mail("rebrum1920@mail.ru", "Заявка с сайта", "Сопроводительное письмо:".$text.". Резюме: ".$cv,"From: rebrum1920@mail.ru \r\n")
?>

<script>
	window.close()
</script>
