if(window.SimpleAnime) {
	new SimpleAnime();
}

if(window.SimpleForm) {
	new SimpleForm({
		form: ".formphp", // seletor do formulário
		button: "#enviar", // seletor do botão
		erro: "<div id='form-erro'><h3>Erro no envio</h3><p>Infelizmente ocorreu um erro no envio, por gentileza, envie um e-mail diretamente para contato@escontilassociados.com.br</p></div>", // mensagem de erro
		sucesso: "<div id='form-sucesso'><h3>Formulário enviado com sucesso</h3><p>Em breve entraremos em contato com você.</p></div>", // mensagem de sucesso
	});
}
