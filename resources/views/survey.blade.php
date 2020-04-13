<!DOCTYPE html>
<html>
<head>
	<title>dw-exam</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<div class="text-center">
		<p class="text-danger">Student survey</p>
	</div>
	<form>
		<div class="form-group">
			<label for="inputName">Name</label>
			<input type="text" class="form-control inputName" placeholder="Student name">
		</div>
		<div class="form-group">
			<label for="inputEmail">Email</label>
			<input type="email" class="form-control inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
		</div>
		<div class="form-group">
			<label class="inputTele" for="exampleCheck1">Telephone</label>
			<input type="text" class="form-control inputTele" placeholder="Phone number">
		</div>
		<div class="form-group">
			<label class="inputFeedback">Feedback</label>
			<textarea class="form-control inputFeedback" rows="3"></textarea>
		</div>
	<button id="#load-du-lieu" type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</body>
</html>
<script type="text/javascript">
	$().ready(function() {
		var query = {
			inpName : $('.inputName').val(),
			inpEmail : $('.inputEmail').val(),
			inpTele: $('.inputTele').val(),
			inpFback : $('.inputFeedback').val(),
		};
		$('#load-du-lieu').click(function(e) {
			$.ajax({
				url: 'post-survey',
				type: 'POST',
				dataType: 'json',
				data: {query : query}
			}).done(function(ketqua) {
				alert('success');
			});
		})
</script>