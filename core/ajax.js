$(function(){

	var BASE = window.location.href;
	var alerts = ["card-panel teal lighten-2","card-panel white-text","card-panel yellow","red-text"];

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
				// $(".i-send").addClass("fa-spinner fa-spin");

				$(".barra-progresso").addClass("progress");
				$(".tipo-progresso").addClass("indeterminate");

				$.each(alerts, function(key,value){
					$(".alert").removeClass(value);
					$(".alert").html("");
				});
			},
			success: function(data){
				$(".barra-progresso").removeClass("progress");
				$(".tipo-progresso").removeClass("indeterminate");
				console.log(data.return);

				if(data.return){
					$('.alert').addClass(data.return[0]);
					$('.result').html(data.return[1]);
					$('.count_client').html(data.count_client);
					$('.clear').val("");
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
	//Fim do método de exclusão

	//Método change do select box Extado
	$(".estado").on("change", function(){
		var ca = $(this).attr('id');
		var estado = $(this).val();

		$.ajax({
			url:BASE + ca,
			data:{estado: estado},
			type:'POST',
			dataType:'json',
			beforeSend: function(data){
				$(".cidade").html("<option value='' selected=''>Atualizando cidades...</option>");
			},//fim do beforeSend.
			success: function(data){
				$(".cidade").html("<option value='' selected=''>Selecione a Cidade...</option>");
				if(data.lista_cidades){
					$.each(data.lista_cidades, function (key, value){
						$(".cidade").append("<option value='"+value['cod_cidades']+"'>"+value['nome']+"</option>");
					});
				}

			}//fim do success;
		}); //Fim da chamada do Ajax.


	});//Fim do método Change do SelectBox



}); // fim da inicialização do JQuery
