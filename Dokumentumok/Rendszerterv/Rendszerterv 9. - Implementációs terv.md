#Implementációs terv

A weboldalunk kinézetét HTML és CSS nyelven fogjuk írni, a háttérben futó kódot pedig PHP-ban írjuk, ami a szerveren fog lefutni, a recepteket és a felhasználókat meg egy MySQL adatbázis fogja tárolni. Ezek a fájlok a funkcióik alapján szét lesznek bontva az átláthatóság végett. Az adatokat az adatbázisba HTTP POST requestekkel küldünk, onnan meg HTTP GET requestekkel olvasunk ki, amihez egy (PHP-ban írt) REST API-t használunk. 
