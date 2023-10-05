# Prueba-Tecnica-Teenvio
![Symfony](https://img.shields.io/badge/symfony-%23000000.svg?style=for-the-badge&logo=symfony&logoColor=white)
<a href="https://www.linkedin.com/in/valentinayesa/">![LinkedIn](https://img.shields.io/badge/linkedin-%230077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white)</a>

## Interpreatación de la prueba con las siguientes características:

Crear una aplicación que sea capaz de recibir múltiples peticiones http simples y, a través de un broker de mensajes, lleve un control de las visitas guardando dicha información.

Requisitos

1- La aplicación estará escrita en PHP 8.2 con framework Symfony (Arquitectura Hexagonal)<br/>
2- La aplicación deberá permitir alta concurrencia (frontales con idea de usar balanceadores)<br/>
3- La aplicación deberá poder lanzarse mediante Docker de forma automática (docker-compose) <br/>
4- El broker de mensajes será preferiblemente RabbitMQ<br/>
5- Podrá haber varios consumidores de mensajes que procesen la información<br/>
6- La información de las visitas se guardará en una base de datos MySQL<br/>
7- La prueba se subirá a un repositorio público tipo GitHub<br/>

El test será lanzar peticiones automatizadas (tipo ApacheBench) a los distintos frontales y luego levantar varios consumidores para que los datos finalmente queden guardados en base de datos.

Como mínimo deberá ser capaz de llevar un contador de visitas sumatorio que sea consistente en el tiempo.

## La aplicación no es funcional

Aunque no he conseguido hacer funcional la aplicación en mi entorno de desarrollo, creo que se ve claramente la intención de usar RabbitMQ como broker de mensajes antes de enviar el grueso de peticiones a la base de datos usando Symfony-Messenger para ello. 
