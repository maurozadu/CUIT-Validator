# CUIT Validator

## Validador de CUIT/CUIL de Argentina. 

Viene como plugin para CakePHP pero la clase se puede usar de manera suelta en cualquier aplicación

### Modo de uso en CakePHP

	<?php
	App::import('libs', 'CuitValidator.CuitValidator');
	if (CuitValidator::isValid('30-52135353-1')) {
		echo 'El CUIT es válido!';
	} else {
		echo 'El CUIT no es válido :(';
	}
	