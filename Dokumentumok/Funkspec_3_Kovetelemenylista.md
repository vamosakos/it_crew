## Követelménylista
1. Reszponzív dizájn
2. Letisztult felhasználói felület
3. Átlátható menü kezelés
4. Egyszerű adat felvilet a lap újratöltése nélkül
5. Gyors válaszidő

### Követelmények
| Modul | ID | Név | v. | Kifejtés |
|---|---|---|---|---|
| Jogosultság | K1 | Bejelentkezési felület | 1.0 | A felhasználó a felhasználóneve és jelszava segítségével bejelentkezhet. Ha a megadott felhasználónév vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap. |
| Jogosultság | K2 | Regisztráció | 1.0 | A felhasználó a teljes nevével, majd a felhasználói nevének és jelszavának megadásával regisztrálja magát. A jelszó tárolása kódolva történik az adatbázisban. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót. |
| Feltöltés | K3 | Recept feltöltése | 1.0 | A regisztrált felhasználóknak lehetőségük van a recept feltöltésére. Ezt a recept feltöltése helyen talált szövegdobozba felvitt gépelt karakterekkel tehető meg. |
| Feltöltés | K4 | Kép feltöltése | 1.0 | A kép feltöltés, a recept feltöltésére használt kitöltött szövegdoboz alatt foglal helyet, ahol a felhasználó opcionálisan tölthet fel képet a már elkészíett süteményéről. |
| Kedvelés | K5 | Like gomb | 1.0 | Minden recepthez hozzájárul egy gomb, melynek megnyomásával a tetszésüket fejezhetik ki regisztrált felhasználók. |
| Rendezés | K6 | Rendezés | 1.0 | A rendezés gomb segítségével lehetőség van receptek rendezésére likeok / kedvelések szerint (Z-A) - csökkenően |
| Nyomtatás | K7 | Nyomtatás | 1.0 | A nyomtatás gomb lehetőséget nyújt az adott képernyőn elhelyezkedő receptek nyomtatására, letöltésére PDF formátumban. |