<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Заявка формы</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
</head>
<body>

	<form>

		<!-- Hidden Required Fields -->
		<input type="hidden" name="project_name" value="Название  сайта">
		<input type="hidden" name="admin_email" value="20mars07@mail.ru">
		<input type="hidden" name="form_subject" value="Заявка с формы">
		<!-- END Hidden Required Fields -->

		<input type="text" name="Name" placeholder="You name..." required><br>
		<input type="text" name="E-mail" placeholder="You E-mail..." required><br>
		<input type="text" name="Phone" placeholder="You phone..."><br>
		<button>Send</button>

	</form>
	
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="script.js"></script>

</body>
</html>