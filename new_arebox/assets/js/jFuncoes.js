$(function(){
	$('.nome').clear();
	$('.email').clear();
	$('.telefone').clear();
	$('.servicos').clear();
	$('.msg').clear();
	
	$('.btn_enviar').on('click', function(){
		var n, e, t, m, s;
		var msg = "";
		n = $('.nome').val();
		e = $('.email').val();
		t = $('.telefone').val();
		s = $('.servicos').val();
		m = $('.msg').val();
		
		if(n == "Digite seu nome aqui"){ msg += 'Campo Nome vazio. \n'; }
		if(e == "Digite seu e-mail aqui"){ msg += 'Campo E-mail vazio. \n'; }
		if(t == "Digite seu telefone aqui"){ msg += 'Campo Telefone vazio. \n'; }
		if(s == "Escolha um serviço"){ msg += 'Campo Servicos vazio. \n'; }
		if(m == "Digite sua mensagem aqui"){ msg += 'Campo Mensagem vazio. \n'; }
		
		if(msg != ""){
			alerta = "Por favor, preencha o(s) campo(s) abaixo: \n\n"+msg;
			alert(alerta);
			return false;
		}
		
	});
	
});