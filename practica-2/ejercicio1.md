# ¿Qué es CSS y para qué se usa?

Las hojas de estilo en cascada (CSS, cascading style sheets) nos permite controlar la apariencia de una página web para hacerlas atractivas.

El CSS es un lenguaje informático que especifica cómo se presentan los documentos a los usuarios: cómo se diseñan, compaginan, etc.

Un documento suele ser un archivo de texto estructurado con un lenguaje de marcado: HTML es el más común, pero también existen otros como SVG o XML.

Presentar un documento a un usuario significa convertirlo en un formulario que el público pueda utilizar.

El CSS se puede usar para estilos de texto muy básicos como, por ejemplo, cambiar el color y el tamaño de los encabezados y los enlaces. Se puede utilizar para crear un diseño, como podría ser convertir una columna de texto en una composición con un área de contenido principal y una barra lateral para información relacionada. Incluso se puede usar para crear efectos de animación. Echa un vistazo a los enlaces de este párrafo para ver ejemplos específicos.

# CSS utiliza reglas para las declaraciones de estilo, ¿cómo funcionan?

El CSS es un lenguaje basado en reglas: cada usuario define las reglas que especifican los grupos de estilos que van a aplicarse a elementos particulares o grupos de elementos de la página web.

Por ejemplo:
```
h1 {
    color: red;
    font-size: 5em;
}
```

La regla se abre con un selector (en-US). Este selecciona el elemento HTML que vamos a diseñar. En este caso, diseñaremos encabezados de nivel uno (<h1>).

Luego tenemos un conjunto de llaves { }. Entre estas habrá una o más declaraciones, que tomarán la forma de pares de propiedad y valor. Cada par especifica cada una de las propiedades de los elementos seleccionados y el valor que queremos dar a esa propiedad.

# ¿Cuáles son las tres formas de dar estilo a un documento?

Utilizando una hoja de estilo externa que es vinculada a un documento a través del elemento `<link>`, el cual debe ir situado en el `<head>`.

Utilizando un elemento `<style>`, en el interior del documento al que se le quiere dar estilo, y que generalmente se situa en el `<head>`.

Utilizando estilos directamente sobre aquellos elementos que lo permiten a través del atributo `<style>` dentro del `<body>`. 

# ¿Cuáles son los distintos tipos de selectores más utilizados? Ejemplifique cada uno.

## Selector de tipo.

Selecciona todos los elementos que coinciden con el nombre del elemento especificado.

```
span {
  background-color: skyblue;
}
```

## Selector de clase.

Selecciona todos los elementos que tienen el atributo de class especificado.

```
.yellow-bg {
  background: #ffa;
}
```

## Selector de ID.

Selecciona un elemento basándose en el valor de su atributo id. Solo puede haber un elemento con un determinado ID dentro de un documento.

```
#identified {
  background-color: skyblue;
}
```

## Selector universal.

Selecciona todos los elementos. Opcionalmente, puede estar restringido a un espacio de nombre específico o a todos los espacios de nombres.

```
*.warning {
  color: red;
}
```

## Selector de atributo

Selecciona elementos basándose en el valor de un determinado atributo.

```
a[href^="#"] {
  background-color: gold;
}
```

# ¿Qué es una pseudo-clase? Cuáles son las más utilizadas aplicadas a vínculos?

Una pseudoclase CSS es una palabra clave que se añade a los selectores y que especifica un estado especial del elemento seleccionado.

Las pseudoclases, junto con los pseudoelementos, permiten aplicar un estilo a un elemento no sólo en relación con el contenido del árbol de documento, sino también en relación a factores externos como el historial del navegador (:visited, por ejemplo), el estado de su contenido (como :checked en algunos elementos de formulario), o la posición del ratón (como :hover que permite saber si el ratón está encima de un elemento o no).

# ¿Qué es la herencia? 

Algunos valores de las propiedades CSS que se han establecido para los elementos padre los heredan los elementos hijo, pero otros no.

Por ejemplo, si para un elemento se establece el color (color) y el tipo de letra (font-family), cada elemento que se encuentre dentro de él también se mostrará de ese color y con ese tipo de letra, a menos que les se haya aplicado un color y un tipo de letra diferentes directamente

Algunas propiedades no se heredan. Por ejemplo, si para un elemento se establece un ancho width del 50%, sus descendientes no tendrán un 50% de ancho con respecto al de sus padres.

# ¿En qué consiste el proceso denominado cascada?

La cascada en las hojas de estilo significa que el orden de las reglas importa en CSS: cuando dos reglas tienen la misma especificidad, se aplica la que aparece en último lugar en el CSS.