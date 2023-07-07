# Caché

## ¿Cuánto borrar la cache?
Si se modifican los scripts o los datos de la aplicación, la información de la cache estará desfasada. Para evitar incoherencias y posibles errores, se debe borrar la caché (la cache de HTML, de configuración, del sistema de enrutamiento y de la internacionalización). 

Para borrar toda la cache se debe ejecutar el siguiente comando:
```php
php bin/console cache:pool:clear --all
```

[MÁS SOBRE LA CACHE](https://symfony.com/doc/current/cache.html#:~:text=app%20service.-,Clearing%20the%20Cache,pools%20into%20%22cache%20clearers%22.)