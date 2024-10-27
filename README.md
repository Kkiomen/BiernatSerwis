## Instalacja

1. Zrób kopie .env.example i wypełnij tam dane (baza danych, wysyłka maili itp.)
2. Trzeba uruchomic komendę composer install. Jeśli instalujesz np na ovh to wypisz poniższe komendy:
  ```  curl -sS https://getcomposer.org/installer | php 
   php composer.phar install --ignore-platform-reqs
   php composer.phar require symfony/filesystem
   php artisan storage:link --relative
  ```

3. Jeśli mamy skonfigurowaną bazę danych to trzeba uruchomić komendę 
```
php artisan migrate 
```

4. Tutaj już strona będzie gotowa, jedynie zostało podpięcie domeny po katalog public
