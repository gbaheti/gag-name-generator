(function(){
	$(document).ready(function(){
		$(".content button").on('click', function(e){
			e.preventDefault();
			var name = $("#name").val();
			$(this).removeClass('normal')
					.addClass('animated')
					.text('please wait..');
			$.ajax({
				type: 'POST',
				url: 'gng.php',
				data: {name: name}
			}, 2000).done(function(name){
				$(".content button").removeClass('animated')
					.addClass('normal')
					.text(name);
			});
		});
	});
})();