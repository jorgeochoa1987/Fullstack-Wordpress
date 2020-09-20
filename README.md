# Docs

1) Construir un sitio wordpress con integración de comercio electrónico Woocomerce y pasarela de pago Payu. -> Ok
        -Se realizar la conexión con el woocommerce  y se deja configurado con el sandBox

2) Construir un tema hijo para el tema seleccionado por usted en el paso anterior, agregar al menos 2 validaciones y reglas dentro del tema hijo para el formulario de checkout. -> Ok
    -Se crea el tema hijo basado en un template gratuito llamado storefront

3) Construcción de un plugin personalizado e implementación del mismo en alguna pagina del sitio (Ejemplo plugin para mostrar productos de la tienda en formato lista).  -> OK
    -He realizado un plugin el cual lista los productos  y contiene diseño  personalizado,  si metodo para incluir en las    página es con el short code [shortcode-listadoMansory ]

4) Construcción de un nuevo método para el Api Rest de Wordpress que haga búsqueda por descripción o nombre sobre los productos de la tienda, e integrar el llamado al Api en el plugin creado en el paso anterior. ->
He realizado dos metodos 
    -Listar todos los productos -> http://localhost/Fullstack-Wordpress/wp-json/productos/v1/all
    -Lista producto por Slug -> http://localhost/Fullstack-Wordpress/wp-json/productos/v1/name/[nombreproducto] (sin los [])

