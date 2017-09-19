$(function(){

	var BASE = "http://mvc.pc/";
	var alerts = ["alert-info","alert-warning","alert-success","alert-danger"];

	$('form').submit(function(){

		var form = $(this);
		var cap = form.attr('id');
		var dados = new FormData($(this)[0]);

		$.ajax({
			url: BASE + cap,
			data: dados,
			type: 'POST',
			dataType:'json',
			processData: false,
			contentType: false,
			beforeSend: function(data){
				$(".i-send").addClass("fa-spinner fa-spin");

				$.each(alerts, function(key,value){
					$(".alert").removeClass(value);
				});
			},
			success: function(data){
				$(".i-send").removeClass("fa-spinner fa-spin");

				if(data.return){
					$('.alert').addClass(data.return[0]);
					$('.result').html(data.return[1]);
					$('.count_client').html(data.count_client);
				}

				if(data.redirect){
					window.setTimeout(function(){
						window.location.href = BASE + data.redirect[0];
					},data.redirect[1]);

				}

			}
		});
		return false;
	});

	//Método de exclusão
	$(".remover").click(function(){
		var id = $(this).attr('id');
		var cap = $(this).attr('rel');
		var tr = $(this).closest('tr');

		$.ajax({
			url: BASE + cap,
			data: {id: id},
			type: 'POST',
			dataType:'json',
			beforeSend: function(data){

				$.each(alerts, function(key,value){
					$(".alert").removeClass(value);
				});
			},
			success: function(data){

				if(data.return){
					$('.alert').addClass(data.return[0]);
					$('.result').html(data.return[1]);

					$('.count_client').html(data.count_client);

					tr.fadeOut(400, function(){
						tr.remove();
					});
				}

				if(data.redirect){
					window.setTimeout(function(){
						window.location.href = BASE + data.redirect[0];
					},data.redirect[1]);

				}

			}
		});
		return false;
	});





}); // fim da inicialização do JQuery