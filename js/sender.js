$('form').on('submit', function (e) {
	e.preventDefault();
	var service = 'tophosting';
	var action_url = "http://localhost/ajax-sender/take.php";
	var name = $('#name').text();
	var ticketid = $('#ticket-id').text();
	var subject = $('.subject span').text();
	// var input_name = $('input[name="user_name"]').val();
	/*time 4 request*/
	var time = 0;
	var d = new Date();
	var d_h = ('0'+d.getHours()).slice(-2);
	var d_m = ('0'+d.getMinutes()).slice(-2);
	var d_s = ('0'+d.getSeconds()).slice(-2);
	var lastreply = d.toLocaleDateString('uk-ua') + '.' + d_h + ':' + d_m + ':' + d_s;
	data = {
		service: service,
		lastreply: lastreply,
		time: time,
		innerticketid: null,
		subject: subject,
		name: name,
		ticketid: ticketid
	};
	data = "&" + $.param(data);
	console.info(data);
	$.ajax({
		crossDomain: true,
		url: action_url,
		data: data,
		async: true,
		method: "post"
	}).done(function (data) {
		console.info("done", data);
	}).fail(function () {
		console.error("doesn't send");
	});
	//TODO:: uncomment me 4 sending form
	// $(this).parent().submit();*/
})