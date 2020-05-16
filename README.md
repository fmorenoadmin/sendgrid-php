![FMoreno Logo](https://frankmorenoalburqueque.com/images/logo.png)

[![BuildStatus](https://travis-ci.org/sendgrid/sendgrid-php.svg?branch=master)](https://travis-ci.org/sendgrid/sendgrid-php)
[![Packagist](https://img.shields.io/packagist/v/sendgrid/sendgrid.svg)](https://packagist.org/packages/sendgrid/sendgrid)
[![Downloads](https://img.shields.io/packagist/dt/sendgrid/sendgrid.svg?maxAge=3600)](https://packagist.org/packages/sendgrid/sendgrid)
[![MIT licensed](https://img.shields.io/badge/license-MIT-blue.svg)](./LICENSE.md)
[![Twitter Follow](https://img.shields.io/twitter/follow/sendgrid.svg?style=social&label=Follow)](https://twitter.com/FrankMartinMor1)
[![GitHub contributors](https://img.shields.io/github/contributors/sendgrid/sendgrid-php.svg)](https://frankmorenoalburqueque.com)
[![Open Source Helpers](https://www.codetriage.com/sendgrid/sendgrid-php/badges/users.svg)](https://www.codetriage.com/sendgrid/sendgrid-php)

**1**
Crea tu cuenta en https://signup.sendgrid.com/
Y sigue los pasos de registro

**2**
Crea tu correo de remitente en: https://app.sendgrid.com/settings/sender_auth/senders/new
confirma tu correo electrónico de remitente (El Correo de verifiación es enviado por SendGrid a tu bandeja de entrada)

**3**
Crea tu API_KEY en: https://app.sendgrid.com/settings/api_keys

**4**
Desargar o clonar este repositorio y colocarlo en tu proyecto: https://github.com/fmorenoadmin/sendgrid-php.git

**5**
Ingresar la API_KEY dentro del archivo #constant.php en: 'INSERT_SECRET_KEY'

**6**
Para prueba del envío del correo:

	Edita y ejecuta el archivo #index.php para que pruebes que si se envía el correo electrónico.
	Cambia el # setFrom("insert@remitente.com", "insert name remitente"); por tú correo de remitente del paso 2
	Cambia el # setSubject("Esta es una prueba"); por el asunto del correo.
	Cambia el # addTo("insert@destinatario.com", "insert name destinatario"); por el correo y nombre de destinatario.

Para Método POST:

	Edita y ejecuta el archivo #para_post.php para que pruebes que si se envía el correo electrónico.

Para Método GET:

	Edita y ejecuta el archivo #para_get.php para que pruebes que si se envía el correo electrónico.

Para Método REQUEST:

	Edita y ejecuta el archivo #para_request.php para que pruebes que si se envía el correo electrónico.

**LISTO**

Si necesitas más cosas en tu correo. Revisa el archivo #adicionales.php