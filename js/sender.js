$(function(){
	$('#btnPostReply').on('click', function (event) {
		event.preventDefault();
		var service = 'sseeccoo';
		var action_url = 'https://91.235.128.132/store_stat.php';
		var name = $('#watch-ticket').data('adminFullName');
		var ticketid = $('#watch-ticket').data('ticketId');
		var subject = $('#currentSubject').val();
		/*time 4 request*/
		var time = 0;
		var d = new Date();
		var d_h = ('0' + d.getHours()).slice( - 2);
		var d_m = ('0' + d.getMinutes()).slice( - 2);
		var d_s = ('0' + d.getSeconds()).slice( - 2);
		var lastreply = d.toLocaleDateString('uk-ua') + ' ' + d_h + ':' + d_m + ':' + d_s;
		var data = {
			lastreply: lastreply,
			time: time,
			innerticketid: null,
			subject: subject,
			name: name,
			ticketid: ticketid
		};
		data = 'service=' + service + '&' + $.param(data);
		var xhr = new XMLHttpRequest();
		if (xhr) {
			xhr.open('POST', action_url, true);
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			//xhr.setRequestHeader('Access-Control-Allow-Origin','*');
			xhr.send(data);
			xhr.onreadystatechange = function () { //Вызывает функцию при смене состояния.
				if (xhr.readyState == XMLHttpRequest.DONE && xhr.status == 200) {
					console.info(xhr.responseText);
				}
			}
		}
		//     $(this).parent().submit();
	})
});
