<h1 class="title-feedback">Оставьте обратную связь о нашем сайте!</h1>
<form action="/journal/feedback/send" method="POST">
	<p><input class="form-text-name" placeholder="Введите ваше имя" name="user"></p>
	<p><input class="form-text-email" placeholder="Введите вашу электронную почту" name="email"></p>
	<p><textarea class="form-text-comment" name="comment" placeholder="Введите ваш комментарий"></textarea></p>
   	<p><input class="form-text-button-send" type="button" onclick="sendData()" value="Отправить"><input  class="form-text-button-clear" type="reset" value="Очистить"></p>
</form>
<script>
	{
		"use strict";

		function sendData() {
			let xhr = new XMLHttpRequest();

			feedbackForm = document.forms[0],
    		formData = new FormData(feedbackForm)

			xhr.open("POST", '/files/journal/feedback/send')
			

			xhr.onloadend = function() {
			    if (xhr.status == 200) {
			    	if (xhr.response == 1) {
			    		alert('Добавлено!');
			    	} else {
			    		alert(xhr.response);
			    	}
			    } else {
			      alert("Ошибка " + this.status);
			    }
			  };

			xhr.send(formData);
		}

	}
</script>