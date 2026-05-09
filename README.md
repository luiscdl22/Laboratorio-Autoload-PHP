Implementacion de Autoload PSR-4 con Composer
Este proyecto contiene la configuracion necesaria para la gestion de clases en PHP mediante el estandar PSR-4.

Guia de Instalacion
Para ejecutar este proyecto, es necesario generar el cargador de clases localmente siguiendo estos pasos:

Asegurese de tener instalado Composer en su sistema.

Abra una terminal en la raiz del proyecto.

Ejecute el siguiente comando:

composer dump-autoload

Estructura de Archivos
La organizacion del proyecto se basa en la siguiente jerarquia:

Carpeta src/: Contiene las clases del sistema.

Archivo composer.json: Define el mapeo del namespace Utp\LaboratorioAutoload hacia la carpeta src/.

Archivo index.php: Punto de entrada que inicializa el autoloader de Composer.

Archivo .gitignore: Configurado para excluir la carpeta vendor.

Conclusiones Tecnicas
Mantenibilidad: La carga automatica elimina la necesidad de gestionar archivos manualmente mediante include o require.

Eficiencia: El uso de Lazy Loading asegura que solo se carguen las clases que son instanciadas en tiempo de ejecucion.

Estandarizacion: El cumplimiento de PSR-4 permite la interoperabilidad y el uso de las mejores practicas de la industria en PHP.

Autor: Luis De León
Curso: Desarrollo de Software VII
