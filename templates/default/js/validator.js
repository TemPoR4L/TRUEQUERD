
	var usuarioExiste = false;

	function mostrarMensaje(mensaje, tipo, donde)
	{
		
		if (donde == "login")
		{
			var status = document.getElementById("statusLogin");
			var alert = document.getElementById("alertBalLogin");
			
			if (document.getElementById("alertBalRegister") != null)
			{
				document.getElementById("statusRegister").removeChild(
						document.getElementById("alertBalRegister")
				);
			}
			
			
			if (alert != null)
			{
				status.removeChild(alert);
			}
			
			var a_create = document.createElement("div");
			var a_text = document.createTextNode(mensaje);
			a_create.setAttribute("class", "alert alert-" + tipo);
			a_create.setAttribute("id", "alertBalLogin");
			a_create.appendChild(a_text);

			status.appendChild(a_create);
			
		} else if (donde == "register"){
			var status = document.getElementById("statusRegister");
			var alert = document.getElementById("alertBalRegister");
			
			if (document.getElementById("alertBalLogin") != null)
			{
				document.getElementById("statusLogin").removeChild(
						document.getElementById("alertBalLogin")
				);
			}
			
			if (alert != null)
			{
				status.removeChild(alert);
			}
			
			var a_create = document.createElement("div");
			var a_text = document.createTextNode(mensaje);
			a_create.setAttribute("class", "alert alert-" + tipo);
			a_create.setAttribute("id", "alertBalRegister");
			a_create.appendChild(a_text);

			status.appendChild(a_create);
			
		}

	}
	
	
	function hasSpecialCharacters(str)
	{
		if(/^[a-zA-Z0-9- ]*$/.test(str) == false) 
		{
		   return true;
		} else {
			return false;
		}
	}
		
	function validarLogin(evt)
	{
		var username = document.getElementById("username");
		var password = document.getElementById("password");
		
		if (username.length == 0 || username.value == "")
		{
			mostrarMensaje("Falta escribir el USUARIO", "danger", "login");
			document.getElementById("username").focus();
			evt.preventDefault();
			return false;
		}
		
		if (hasSpecialCharacters(username.value))
		{
			mostrarMensaje("El usuario no puede contener carácteres especiales.", "danger", "login");
			document.getElementById("username").focus();
			evt.preventDefault();
			return false;
		}
		
		if (password.length <= 0 || password.value == "")
		{
			mostrarMensaje("Falta escribir la CONTRASEÑA", "danger", "login");
			document.getElementById("password").focus();
			evt.preventDefault();
			return false;
		}
	}
	
	
	function validateEmail(email) {
		  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		  return re.test(email);
	}

	
	function isNumeric(value)
	{
		return /\d/.test(value);
	}

	function validarRegister(evt)
	{
		var realName = document.getElementById("realName");
		var lastname = document.getElementById("lastname");
		var userNew = document.getElementById("userNew");
		var email = document.getElementById("email");
		var confirmEmail = document.getElementById("confirmEmail");
		var passNew = document.getElementById("passNew");
		var confirmPassword = document.getElementById("confirmPassword");
		var address = document.getElementById("address");
		var addressNum = document.getElementById("addressNum");
		var cpN = document.getElementById("cpN");
		var city = document.getElementById("city");
		var state = document.getElementById("state");
		var country = document.getElementById("country");
		var phoneNumber = document.getElementById("phoneNumber");
		var acceptEULA = document.getElementById("acceptEULA");
		
		if (realName.length == 0 || realName.value == "")
		{
			mostrarMensaje("Falta escribir su nombre.", "danger", "register");
			document.getElementById("realName").focus();
			evt.preventDefault();
			return false;
		} 
		
		if (isNumeric(realName.value) || hasSpecialCharacters(realName.value)) {
			mostrarMensaje("El nombre ingresado no es válido", "danger", "register");
			document.getElementById("realName").focus();
			evt.preventDefault();
			return false;
		}

		if (lastname.length == 0 || lastname.value == "")
		{
			mostrarMensaje("Falta escribir su apellido.", "danger", "register");
			document.getElementById("lastname").focus();
			evt.preventDefault();
			return false;			
		} 
		
		if (isNumeric(lastname.value) || hasSpecialCharacters(lastname.value)) {
			mostrarMensaje("El apellido no puede ser numérico.", "danger", "register");
			document.getElementById("lastname").focus();
			evt.preventDefault();
			return false;
		}
		
		if (userNew.length == 0 || userNew.value == "")
		{
			mostrarMensaje("Falta escribir un nombre de usuario.", "danger", "register");
			document.getElementById("userNew").focus();
			evt.preventDefault();
			return false;
		}
		
		if (usuarioExiste)
		{
			mostrarMensaje("El usuario ingresado ya existe.", "danger", "register");
			document.getElementById("userNew").focus();
			evt.preventDefault();
			return false;
		}
		
		if (hasSpecialCharacters(userNew.value))
		{
			mostrarMensaje("El usuario no puede contener carácteres especiales.", "danger", "register");
			document.getElementById("userNew").focus();
			evt.preventDefault();
			return false;
		}
		
		if (email.length == 0 || email.value == "")
		{
			mostrarMensaje("Falta escribir el correo electrónico.", "danger", "register");
			document.getElementById("email").focus();
			evt.preventDefault();
			return false;			
		}
		
		if (!validateEmail(email.value))
		{
			mostrarMensaje("El correo ingresado no es correcto.", "danger", "register");
			document.getElementById("email").focus();
			evt.preventDefault();
			return false;			
		}
		
		if (confirmEmail.length == 0 || confirmEmail.value == "")
		{
			mostrarMensaje("Falta repetir su correo electrónico.", "danger", "register");
			document.getElementById("confirmEmail").focus();
			evt.preventDefault();
			return false;
		}
		
		if (confirmEmail.value != email.value) {
			mostrarMensaje("El correo electrónico no coincide con la confirmación.", "danger", "register");
			evt.preventDefault();
			return false;
		}
		
		if (!validateEmail(confirmEmail.value)) {
			mostrarMensaje("El correo electrónico de confirmación ingresado no es correcto.", "danger", "register");
			evt.preventDefault();
			return false;
		}
		
		if (passNew.length == 0 || passNew.value == "")
		{
			mostrarMensaje("Falta escribir su contraseña.", "danger", "register");
			document.getElementById("passNew").focus();
			evt.preventDefault();
			return false;			
		}
		
		if (confirmPassword.length == 0 || confirmPassword.value == "")
		{
			mostrarMensaje("Falta confirmar su contraseña.", "danger", "register");
			document.getElementById("confirmPassword").focus();
			evt.preventDefault();
			return false;
		}
		
		if (confirmPassword.value != passNew.value) {
			mostrarMensaje("La contraseñas no coinciden.", "danger", "register");
			evt.preventDefault();
			return false;
		}
		
		if (address.length == 0 || address.value == "")
		{
			mostrarMensaje("Falta escribir su dirección", "danger", "register");
			document.getElementById("address").focus();
			evt.preventDefault();
			return false;
		}
		
		if (isNumeric(address.value) || hasSpecialCharacters(address.value)) {
			mostrarMensaje("La calle es inválida", "danger", "register");
			document.getElementById("address").focus();
			evt.preventDefault();
			return false;
		}
		
		if (addressNum.length == 0 || addressNum.value == "")
		{
			mostrarMensaje("Falta escribir su número de calle.", "danger", "register");
			document.getElementById("addressNum").focus();
			evt.preventDefault();
			return false;
		}
		
		if (!(isNumeric(addressNum.value)) || hasSpecialCharacters(addressNum.value)) {
			mostrarMensaje("El número de casa ingresado no es válido.", "danger", "register");
			document.getElementById("addressNum").focus();
			evt.preventDefault();
			return false;
		}
		
		if (cpN.length == 0 || cpN.value == "")
		{
			mostrarMensaje("Falta escribir su código postal", "danger", "register");
			document.getElementById("cpN").focus();
			evt.preventDefault();
			return false;
			
		}
		
		if (cpN.value.length > 5 ||  hasSpecialCharacters(cpN.value)){
			mostrarMensaje("El código postal ingresado no es válido.", "danger", "register");
			document.getElementById("cpN").focus();
			evt.preventDefault();
			return false;
			
		}
		
		if (city.length == 0 || city.value == "")
		{
			mostrarMensaje("Falta escribir la ciudad donde vive.", "danger", "register");
			document.getElementById("city").focus();
			evt.preventDefault();
			return false;
		}
		
		if (isNumeric(city.value) || hasSpecialCharacters(city.value)) {
			mostrarMensaje("La ciudad introducida no es válida.", "danger", "register");
			document.getElementById("city").focus();
			evt.preventDefault();
			return false;
		}
		
		if (state.length == 0 || state.value == "")
		{
			mostrarMensaje("Falta escribir el estado o provincia en donde vive.", "danger", "register");
			document.getElementById("state").focus();
			evt.preventDefault();
			return false;
		}
		
		if (isNumeric(state.value) || hasSpecialCharacters(state.value)) {
			mostrarMensaje("El estado o provincia introducido no es válido.", "danger", "register");
			document.getElementById("state").focus();
			evt.preventDefault();
			return false;
		}
		
		if (country.length == 0 || country.value == "")
		{
			mostrarMensaje("Falta escribir el país en donde vive", "danger", "register");
			document.getElementById("country").focus();
			evt.preventDefault();
			return false;
		}
		
		if (isNumeric(country.value) || hasSpecialCharacters(country.value)) {
			mostrarMensaje("El país introducido no es válido.", "danger", "register");
			document.getElementById("country").focus();
			evt.preventDefault();
			return false;			
		}
	
		if (phoneNumber.length == 0 || phoneNumber.value == "")
		{
			mostrarMensaje("Falta escribir su número de teléfono", "danger", "register");
			document.getElementById("phoneNumber").focus();
			evt.preventDefault();
			return false;
		}
		
		if (!(isNumeric(phoneNumber.value)) || hasSpecialCharacters(phoneNumber.value)) {
			mostrarMensaje("El número de teléfono ingresado no es válido.", "danger", "register");
			document.getElementById("phoneNumber").focus();
			evt.preventDefault();
			return false;
		}
		
		if (!(acceptEULA.checked))
		{
			mostrarMensaje("No podemos crear su cuenta, si usted no acepta los términos de la web.", "danger", "register");
			document.getElementById("acceptEULA").focus();
			evt.preventDefault();
			return false;
		}
		
		
		
	}

	function loadValidator(evt)
	{
		
		document.getElementById("loginBtn").addEventListener("click", validarLogin, false);
		document.getElementById("registerBtn").addEventListener("click", validarRegister, false);
		
		document.getElementById("userNew").addEventListener("change", function(){
			var str = document.getElementById("userNew");
			
		    if (str.length == 0) {
		        document.getElementById("txtHint").innerHTML = "";
		        usuarioExiste = false;
		        return;
		    } else {
		        var xmlhttp = new XMLHttpRequest();
		        xmlhttp.onreadystatechange = function() {
		        	
		                if(this.responseText == "TRUE")
		                {
		                	document.getElementById("userExist").innerHTML = "Ese usuario ya existe.";
		                	usuarioExiste = true;
		               	} else {
		               		document.getElementById("userExist").innerHTML = "";
		               		usuarioExiste = false;
		               	}
		            
		        };
		        xmlhttp.open("GET", "/TRUEQUERD/include/useravailable.php?username=" + str.value, true);		        
		        xmlhttp.send();
		    }
		    
		}, false);
	}