# IMPLEMENTACIÓN DE AUTOLOAD PSR-4 CON COMPOSER

---

## 1. INTRODUCCIÓN

En este proyecto se presenta la implementación de un sistema de carga automática de clases (Autoload) utilizando el estándar PSR-4. Se explora la gestión de dependencias con Composer y la organización de Namespaces para optimizar el desarrollo en PHP.

---

## 2. REQUISITOS PREVIOS

Para la ejecución de este laboratorio se configuró el siguiente entorno:

* **Sistema Operativo:** Windows 11
* **Servidor Local:** WampServer
* **Lenguaje:** PHP 8.3
* **Gestor de Dependencias:** Composer
* **Editor de Código:** Visual Studio Code

---

## 3. INSTALACIÓN IMPLEMENTADA

1. **Configuración de Composer:** `composer init`
2. **Definición de PSR-4:** Mapeo de `Utp\LaboratorioAutoload` hacia la carpeta `src/`.
3. **Generación de Autoloader:** `composer dump-autoload`
4. **Prueba de ejecución:** Instancia de clases en `index.php`.

---

## 4. CONCLUSIONES TÉCNICAS

* **Mantenibilidad:** La carga automática elimina la gestión manual de archivos mediante inclusiones tradicionales.
* **Eficiencia:** El uso de Lazy Loading asegura que solo se carguen las clases instanciadas en tiempo de ejecución.
* **Estandarización:** El cumplimiento de PSR-4 garantiza la interoperabilidad y el uso de mejores prácticas.

---
**Autor:** Luis De León  
**Curso:** Desarrollo de Software VII  
**Profesora:** Irina Fong 
