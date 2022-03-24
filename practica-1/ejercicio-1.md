# Ejercitación 1
## Responder el siguiente cuestionario

### ¿Qué es HTML, cuando fue creado, cuáles fueron las distintas versiones y cuál es la última?

**HTML** (Lenguaje de Marcas de Hipertexto, del inglés HyperText Markup Language) es el componente más básico de la Web. Define el significado y la estructura del contenido web.

**Hipertexto** hace referencia a los enlaces que conectan páginas web entre sí, ya sea dentro de un único sitio web o entre sitios web. Los enlaces son un aspecto fundamental de la Web. Al subir contenido a Internet y vincularlo a las páginas creadas por otras personas, te conviertes en un participante activo en la **World Wide Web** (Red Informática Mundial).

**HTML** es un estándar a cargo del **W3C** que se ha impuesto en la visualización de paginas web y es el que todos los navegadores han adoptado, se considera el lenguaje web mas importante.

**HTML** inicia en 1989, cuando el físico Tim Berners-Lee asegura que está trabajando en un nuevo sistema de hypertexto para compartir documentos. En 1991 se publica formalmente el primer documento HTML llamado *HTML tags*. A finales de 1993 se comienza a trabajar en **HTML 2** llamda HTML+. En 1996 aparece HTML 3.0, que ofrecía facilidades para hcaer tabgles, funciones para que el texto fluyese alrededor de las figuras o mostrar elementos matemáticos complejos. En 1997 aparece HTML 4.0, que dentro de sus novedades estaba las hojas de estilo CSS, mejora de accesibilidad de las páginas, tablas complejas, scripts y mejoras en formularios. En 2008 se publica el primer borrador oficial de HTML 5.0, por un grupo de empresas externas al W3C, en 2014 se presentó la version final, HTML 5.2.

### ¿Cuáles son los principios básicos que el W3C recomienda seguir para la creación de documentos con HTML?

- Un documento HTML comienza con la etiqueta <html>.
- Siempre cerrar las etiquetas pareadas.
- Una pagina web estará contenida dentro de las etiqueras ``<html> y </html>``.
- Todo documento HTML consta de dos partes, la cabecera y el cuerpo.
- La cabecera debe contener información destinada al navegador, encerrado en ``<head> </head> ``.
- El cuerpo es el documento que ve el usuario, va encerrado en ``<body> </body>``.

###  En las Especificaciones de HTML, ¿cuándo un elemento o atributo se considera desaprobado?  ¿y obsoleto?
Un elemento o atributo desaprobado es aquel que ha quedado anticuado por la presencia de estructuras nuevas. Los elementos desaprobados pueden declararse obsoletos en el futuro.  Los agentes de usuario deberían seguir dando soporte a los elementos desaprobados por razones de compatibilidad.
Un elemento o atributo obsoleto es aquél para el cual no hay garantía de soporte por parte de un agente de usuario.

### Qué es el DTD y cuáles son los posibles DTDs contemplados en la especificación de HTML 4.01?

La declaración del tipo de documento (DTD Document Type Declaration) define la estructura y sintaxis de un documento. Se ubica en la primera línea del archivo, antes de la pag html. Según el rigor de HTML 4.01 puede ser declaración transitoria y declaración estricta.

### Qué son los metadatos y cómo se especifican en HTML?

Los metadatos son datos que describen datos, y HTML tiene una forma  *oficial* de introducir metadatos en un documento, que es la tag ``<head>``, definen os sobre el HTML, como quién lo escribió y palabras claves importantes que describen el documento. Por ejemplo ``<meta charset="utf-8">`` especifica la codificación de caracteres del documento.Tambien el titulo de pagina y links son metadatos que van en el head.