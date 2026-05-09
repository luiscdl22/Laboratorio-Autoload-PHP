Laboratorio: Implementación de Autoload PSR-4 con Composer
Este proyecto cumple con los requerimientos técnicos del laboratorio para la gestión automatizada de clases en PHP, utilizando el estándar PSR-4.

Guía de Instalación
Para que el proyecto funcione correctamente después de clonar el repositorio, se debe regenerar el mapa de clases localmente (Higiene del Repositorio):

Asegúrese de tener instalado Composer.

Ejecute en la terminal de la raíz del proyecto el siguiente comando:

composer dump-autoload

Estructura de Archivos y Namespaces
Siguiendo los lineamientos de la guía, la arquitectura se organiza de la siguiente manera:

Namespace Raíz: Utp\LaboratorioAutoload

Directorio de Clases: Carpeta src/ (Mapeado en composer.json)

Clase de Prueba: src/Usuario.php

Punto de Entrada: index.php (Implementación de vendor/autoload.php y uso de la palabra reservada use)

Análisis Comparativo (Conclusiones)
Basado en la implementación realizada, se concluyen las siguientes ventajas técnicas:

Mantenibilidad: Se elimina la dependencia de inclusiones manuales. Al añadir nuevas clases en la carpeta src/, el sistema las reconoce automáticamente sin modificar archivos globales.

Eficiencia de Memoria: Mediante el Lazy Loading, Composer solo carga los archivos de las clases cuando son instanciadas, optimizando el rendimiento frente a las inclusiones tradicionales.

Estandarización: El cumplimiento de PSR-4 garantiza la interoperabilidad, permitiendo que el proyecto sea escalable y compatible con los estándares de la industria.

Autor: Luis De León
Curso: Desarrollo de Software VII
Institución: Universidad Tecnológica de Panamá