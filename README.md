# Repo Grafos UTEM - Trabajo Integral
Este es el repositorio del trabajo integral del ramo de Grafos y Lenguajes Formales.

---

## ¿Qué se pide?

La empresa “D” se encarga de transportar productos desde distintos centros de distribución hacia los negocios
o puntos de venta ubicados en toda la ciudad.
Muy temprano cada día, la flota de camiones se dirige desde las instalaciones de la empresa D al centro de
distribución que se le asigna para ese día a cada camión (un camión recibe un solo centro de distribución
diario). En cada centro de distribución, el camión es cagado con la mercadería de productos a distribuir según
los distintos puntos de venta en la ciudad (denominada hoja de ruta); dicha hoja de ruta incluye los puntos de
venta en los cuales debe dejar productos y en el orden que debe dejarlos.
Al finalizar la entrega en el último punto de venta, el camión se dirige nuevamente a las instalaciones de la
empresa D, para finalizar el turno del día donde el camión se estaciona y guarda hasta el día siguiente.
Se pide desarrollar un software que construya la hoja de ruta de manera eficiente, minimizando las distancias
totales (km) recorridos por todos los camiones diariamente. Para lo anterior, el software debe cargarse con
las coordenadas GPS de los distintos centros de distribución y puntos de venta, además de la dependencia
donde se estacionan los camiones. Luego al ejecutar el programa, se debe pedir el centro de distribución
asignado a cada camión y la cantidad de productos a repartir desde cada centro de distribución a cada punto
de venta.

Supuestos y/o consideraciones:
- Las coordenadas GPS se deberán usar, por facilidad, como coordenadas X,Y enteras.
- Trabaje la precisión (distancias, por ejemplo) de cálculos con 5 decimales.
- Las coordenadas GPS deben ser cargadas en un archivo de parámetros, según especificación indicada más adelante.
- La cantidad de centros de distribución y puntos de venta es variable (según cantidad de coordenadas ingresadas en archivo de parámetros). El punto de estacionamiento de los camiones de la empresa es siempre 1.
- La capacidad máxima de productos por camión es 1000. Un camión no puede transportar “fracciones” de productos.
- Un punto de venta puede ser abastecido diariamente sólo por un camión (es decir, los camiones no pueden hacer despachos “a medias).
- En este trabajo, se puede utilizar bases de datos relacionales si se encuentra necesario. Dichos motores pueden ser MySQL (Maria DB) 10.1 y/o MS SQL server 2008 R2 y/o PostgreSQL 11.2.
- El archivo de parámetros debe ser texto plano (un único archivo) donde cada línea es una ubicación o coordenada con la siguiente estructura: “T;N;X,Y” donde “T” puede ser “P” o “C” para indicar si es un punto de venta o un centro de distribución respectivamente. “N” es un identificador numérico  entero de cada ubicación. “X” e “Y” son las coordenadas X e Y donde está ubicado el centro, ingresada con valores enteros separados por “,” (coma). Note que el tipo de ubicación, el identificador del mismo y la coordenada X,Y están separadas entre sí por un “;” (punto y coma). No hay espacios entre los valores.

    
## ¿Cómo hacer correr el proyecto en tu máquina?

Lo primero que se necesita es tener instalado Xampp, en específico la [versión PHP 7.3.22](https://www.apachefriends.org/xampp-files/7.3.22/xampp-windows-x64-7.3.22-0-VC15-installer.exe).

Luego de instalar Xampp, se debe hacer lo siguiente:
1. Abrir el bash de windows o git dentro de la carpeta xampp/htdocs.
2. Escribir en la terminal: git clone (link del repositorio).
3. Inicializar el módulo Apache en Xampp con el botón Start.
4. En el navegador ingresar a la ruta http://localhost/GLF-TI-G08/public/

Con esto ya se podrá visualizar el contenido de la página web.