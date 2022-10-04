# Rendszerterv

## A rendszer célja

A rendszer célja, hogy a felhasználó sütemény recepteket tudjon olvasni, azokat kinyomtatni vagy letölteni, illetve akár fiók regisztrálása után képes legyen recepteket feltölteni az oldalra és a meglévőekre szavazni. Ezeket a recepteket az oldalon szavazatszám alapján rendezni is képes legyen. A rendszer az adatokat PHP segítségével olvassa ki egy MariaDB adatbázisból. Mivel ez egy weboldal, tervünk, hogy alkalmazkodjon az eszközhöz, tehát mobilon és számítógépen is könnyedén kezelhető legyen.

### Vágyálom rendszer
A projekt célja az olvasóink bevonása a szezonális könyveink kiadásába és a velük lévő interakció. Ugyanakkor nem titok az sem, hogy ez által új érdeklődök bevonzására is nagy hangsúlyt fektetünk. A weboldalon az elmúlt évek könyveit is meglehet vásárolni e-book formátumban, illetve akár házhozszállítás formájában. Továbbá látványos, színes felülettel rendelkezik az oldal, hogy felkeltse a felhasználók figyelmét. A menüpontokhoz hozzátartozik egy galéria is, ahol rövid videók formájában megtalálható egy-egy sütemény receptje. Ezek a videók a mi munkatársaink által, jól képzett cukrászok és szakácsok segítségével jönnek létre. Célunk ez által is motiválni az olvasóinkat az édességek elkészítésére. Az egyszerű felhasználók mellett van egy külön admin felület, ahol moderálásra alkalmas funkciók találhatóak meg. 


## Projektterv
- **Developer Team**: Vámos Ákos, Vámos Márton, Csanádi Balázs, Palotai Marcell Martin, Madarasi Gábor
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
![Üzleti feladatok modellje](https://media.discordapp.net/attachments/323508728508710913/1026805600681738321/uzleti_folyamatok_modellje.png)

## Követelmények

### Funkcionális követelmények:

- Felhasználó adatainak tárolása
- Felhasználók csoportokba való szervezése
- Webes környezetben való mükődés

- **Főmenü gomb:** segítségével megjelenítjük mások receptjeinek listáját, pontos leírását.
- **Bejelentkezés gomb:** felhasználónév és jelszó együttes megadásával beléphetünk a saját fiókunkba.
- **Regisztrációs gomb:** az itt megadott adatainkkal kitöltve tudunk fiókot létrehozni.
- **Kép kiválasztása:** az általunk, másoknak ajánlott süteményről készült képet lehetőségünk van feltölteni a recepet alatt.
- **Like gomb/Kedvencekhez adás:** a kedvenc receptjeinket ezzel tudjuk megjelölni, majd később ez alapján rendezni a legördülő süteményeket.
- **Rendezés:** lehetőséget kínál népszerűség alapján rendezni a recepteket.
- **Nyomtatás gomb:** nyomtatásra kész formátumban, PDF kiterjesztésben érhetjük el kedvenc sütemény receptjeinket.

### Nem funkcionális követelmények:

- A felhasználók nem jutnak hozzá más felhasználók személyes adataihoz a nevükön és az azonosítokon kívül

### Törvényi előírások, szabványok

- GDPR betartása

- AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE

- Az információs önrendelkezési jogról és az információszabadságról szóló 2011. évi CXII. törvény 4.§ (1) és (2) bekezdései.

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

### Menükhöz tartozó specifikációk:
| Modul | ID | Név | v. | Kifejtés |
|---|---|---|---|---|
| Feltöltés | K1 | Recept feltöltése | 1.0 | A regisztrált felhasználóknak lehetőségük van a recept feltöltésére. Ezt a recept feltöltése helyen talált szövegdobozba felvitt gépelt karakterekkel tehető meg. |
| Feltöltés | K2 | Kép feltöltése | 1.0 | A kép feltöltés, a recept feltöltésére használt kitöltött szövegdoboz alatt foglal helyet, ahol a felhasználó opcionálisan tölthet fel képet a már elkészíett süteményéről. |
| Kedvelés | K3 | Like gomb | 1.0 | Minden recepthez hozzájárul egy gomb, melynek megnyomásával a tetszésüket fejezhetik ki regisztrált felhasználók. |
| Rendezés | K4 | Rendezés | 1.0 | A rendezés gomb segítségével lehetőség van receptek rendezésére likeok / kedvelések szerint (Z-A) - csökkenően |
| Nyomtatás | K5 | Nyomtatás | 1.0 | A nyomtatás gomb lehetőséget nyújt az adott képernyőn elhelyezkedő receptek nyomtatására, letöltésére PDF formátumban. |


## Fizikai Környezet

A teszt webes környezetben és minden böngészőben reszponzívnak készül el.
Nincsenek megvásárolt komponenseink.

## Fejlesztői eszközök:

- Sublime Text
- Visual Studio Code


## Architekturális terv

A rendszerhez szükség van egy adatbázis szerverre, ebben az esetben MySql-t használunk.
Továbbá a weboldalon látható lapok, valamint a bejelentkező és a regisztráció validációját php és javascripttel oldjuk meg. 


## Adatbázis terv

![Adatbázis terv](https://media.discordapp.net/attachments/323508728508710913/1026806858595434507/Adatbazis_terv.PNG?width=955&height=630)


## Implementációs terv

A weboldalunk kinézetét HTML és CSS nyelven fogjuk írni, a háttérben futó kódot pedig PHP-ban írjuk, ami a szerveren fog lefutni, a recepteket és a felhasználókat meg egy MySQL adatbázis fogja tárolni. Ezek a fájlok a funkcióik alapján szét lesznek bontva az átláthatóság végett. Az adatokat az adatbázisba HTTP POST requestekkel küldünk, onnan meg HTTP GET requestekkel olvasunk ki, amihez egy (PHP-ban írt) REST API-t használunk.

## Használt technológiák

- Trello - projekt szervezése, rendezése
- Discord - verbális kommunikáció
- HTML - A weboldal struktúrális vázát adja meg
- CSS - A kinézethez manipulálására használatos
- Git, GitHub - Alkalmazás verzióinak követése
- Rajzolóprogramok az ábrákhoz
- Kódszerkesztők (VS, SubLime, Notepad++, stb.)
- Prototype - mockup, képernyő tervek
- PHP
- JS