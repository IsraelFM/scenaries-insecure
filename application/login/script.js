$(document).ready(function () {

	$(document).on('click', '#authenticate', () => {
		requestAuthentication();
	});

	const requestAuthentication = () => {
		const username = $('#username').val();
		const password = $('#password').val();

		$.ajax({
			url: 'authenticate.php',
			method: 'GET',
			data: {
				username,
				password,
			},
			success: response => {
				toastr[!response.success ? 'error' : 'success'](response.message);

				if (response.success) {
					console.log(response.message)
					window.location.href = '/dashboard/index.php';
				}
			},
			error: error => {
				toastr['error'](error.message);
			}
		})
	}
});
