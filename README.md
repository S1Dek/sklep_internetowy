## Funkcjonalności

-   Rejestracja i logowanie użytkowników (hashowanie haseł)
-   Trzy role użytkowników: user, admin, gość(niezalogowany)
-   Różne panele po zalogowaniu
-   Panel administracyjny CRUD użytkowników
-   Walidacja danych dla produktów
-   Architektura MVC
-   Laravel 10 / PHP 8
-   Baza danych MySQL (XAMPP)


/// URUCHOMIENIE PROJEKTU
composer update bacon/bacon-qr-code --prefer-dist

composer install

php artisan config:clear  

php artisan migrate:refresh

php artisan key:generate

php artisan serve 
