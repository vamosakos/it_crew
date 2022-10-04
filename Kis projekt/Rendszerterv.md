# Rendszerterv

## A rendszer célja

A rendszer célja, hogy a felhasználó sütemény recepteket tudjon olvasni, azokat kinyomtatni vagy letölteni, illetve akár fiók regisztrálása után képes legyen recepteket feltölteni az oldalra és a meglévőekre szavazni. Ezeket a recepteket az oldalon szavazatszám alapján rendezni is képes legyen. A rendszer az adatokat PHP segítségével olvassa ki egy MariaDB adatbázisból. Mivel ez egy weboldal, tervünk, hogy alkalmazkodjon az eszközhöz, tehát mobilon és számítógépen is könnyedén kezelhető legyen. 


## Projektterv
- **Developer Team**: Vámos Ákos, Vámos Márton, Csanádi Balázs, Palotai Marcell Martin,
Madarasi Gábor
- **Scrum Master**: Vámos Márton
- **Product Owner**: Csanádi Balázs

| Funkció         | Feladat                        | Prioritás | Becslés | Aktuális becslés | Eltelt idő | Hátralevő idő |
| --------------- | ------------------------------ | --------- | ------- | ---------------- | ---------- | ------------- 
| Köv. spec       |                                | 2         | 1       | 1                | 1          | 0             
| Funk. spec      |                                | 2         | 1       | 1                | 1          | 0             
| Rendszerterv    |                                | 2         | 1       | 1                | 1          | 0             
| Adattárolás     | Adatmodell terv                | 1         | 2       | 2                | 0          | 1             
|                 | Adatbázis megvalósítása        | 1         | 2       | 2                | 0          | 1             
| Login felület   | Logo                           | 3         | 2       | 1                | 0          | 1             
| Főoldal         | Kiemelt receptek megjelenítése | 2         | 2       | 2                | 0          | 1             
| Feltöltés oldal | A feltöltő oldal               | 2         | 2       | 2                | 0          | 1             

## Üzleti feladatok modellje
![alt text](/home/madarasi/Documents/Megnevezetlen_diagram.drawio.png)

## Követelmények

### Funkcionális követelmények:

- Felhasználó adatainak tárolása
- Felhasználók csoportokba való szervezése
- Webes környezetben való mükődés

### Nem funkcionális követelmények:

- A felhasználók nem jutnak hozzá más felhasználók személyes adataihoz a nevükön és az azonosítokon kívül

### Törvényi előírások, szabványok

- GDPR betartása


## Funkcionális terv
### Rendszerszereplők:
- **Vendég**
- **Felhasználó**

### Rendszerhasználati esetek és lefutásaik:
**Vendég**:
- Lehetősége nyílik a főmenü gomb által "kilistáznia" a legördülő recepeteket
- Rendezni a süteményeket népszerűség alapján
- Letölteni PDF formátumban kedvenc sütemény receptjét
- Létrehozhat felhasználót a Regisztrációs fül alatt

**Felhasználó**:
- Lehetősége nyílik a főmenü gomb által "kilistáznia" a legördülő recepeteket
- Rendezni a süteményeket népszerűség alapján
- Letölteni PDF formátumban kedvenc sütemény receptjét
- Feltölthet, illetve közzétehet új sütemény recepteket
- Kedvelheti más sütemény receptjeit

### Menü-hierarchiák:
- **FŐMENÜ**
    - Bejelentkezés
    - Regisztráció
    - Rendezés
    - Nyomtatás
    - Recept feltöltése
        - Kép feltöltése
    - Recept kedvelése
- **BEJELENTKEZÉS**
    - Regisztráció
    - Főmenü
- **REGISZTRÁCIÓ**
    - Bejelentkezés
    - Főmenü


## Fizikai Környezet

A teszt webes környezetben és minden böngészőben reszponzívnak készül el.
Nincsenek megvásárolt komponenseink.

## Fejlesztői eszközök:

Sublime Text
Visual Studio Code


## Architekturális terv

A rendszerhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk.
Továbbá a weboldalon látható lapok, valamint a bejelentkező és a regisztráció validációját php és javascripttel oldjuk meg. 


## Implementációs terv

A weboldalunk kinézetét HTML és CSS nyelven fogjuk írni, a háttérben futó kódot pedig PHP-ban írjuk, ami a szerveren fog lefutni, a recepteket és a felhasználókat meg egy MySQL adatbázis fogja tárolni. Ezek a fájlok a funkcióik alapján szét lesznek bontva az átláthatóság végett. Az adatokat az adatbázisba HTTP POST requestekkel küldünk, onnan meg HTTP GET requestekkel olvasunk ki, amihez egy (PHP-ban írt) REST API-t használunk.
