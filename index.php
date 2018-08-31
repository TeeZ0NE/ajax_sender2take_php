<?php //header("Access-Control-Allow-Headers:*");
//header('Access-Control-Allow-Origin: *');
//?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</head>
<body>
<button class="btn btn-info btn-block btn-sm" id="watch-ticket" type="button" data-admin-full-name="Vadim Kovalchuk" data-admin-id="22" data-ticket-id="11664" data-type="watch">
	Наблюдать за тикетом
</button>
<input type="hidden" id="currentSubject" value="ticket_num_11664">
<form action="take.php" method="post">
	<input type="text" name="user_name" placeholder="user name">
	<button type="submit" class="btn btn-primary pull-right" name="postreply" id="btnPostReply" value="true">
		<i class="fa fa-reply"></i>
		Ответ
	</button>
</form>

<script type="text/javascript" src="js/sender.js"></script>
</body>
</html>