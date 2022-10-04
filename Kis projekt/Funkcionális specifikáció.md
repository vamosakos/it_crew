# Funkcionális specifikáció

## Áttekintés
A kiadó már régóta ismert és híres a kiadott könyveiről. Ezeket a könyveket és azok receptjeit szeretnék elérhetővé tenni digitálisan is a nagyvilág számára, illetve az olvasók számára is lehetőséget biztosítanak receptjeik feltöltéséhez és megosztásához, amik akár bele is kerülhetnek a jövőbeli kiadásaikba.
A receptekhez bárki hozzáférhet és azokat ki is nyomtathatja, le is töltheti az eszközére, viszont a regisztrált felhasználók képesek szavazni más felhasználói receptekre is, amiket szavazatszám alapján rendezni is lehet. A hónap legnépszerűbb receptjét beleírják a következő kiadásukba. A weboldal tervezett neve: sutippek.hu.


## Jelenlegi helyzet
A megrendelő szeretné egy helyen látni a különböző recepteket, a mi feladatunk ennek a megvalósítása. Az oldal tartalma elérhető lesz regisztráció nélkül is. A weboldal könnyű kezelése miatt, nem kell órákat keresni egy adott receptet, hanem ezen az oldalon egyszerűen és gyorsan meglehet találni. Fontos megemlíteni, hogy nem csak keresésre lehet használni az oldalt, hanem megosztani a saját, már bevált recepteket, ötleteket. Ezek mellett tervezünk egy olyan funkciót is, ami arról szól, hogy lehetőség lesz receptek kedvelésére, amivel könnyen lehet rendezni a recepteket, mondjuk a legkedveltebbek szerint. A hónap végén a legtöbb kedveléssel rendelkező, bekerül a következő havi kiadásukba.


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


## Jelenlegi üzleti folyamatok modellje
A mai világban már kevésbé elterjedt a receptek könyvbe való gyüjtése. Manapság, ha gyorsan akarunk megtalálni egy adott receptet, akkor inkább ki használjuk az internet adta lehetőségeket. Ami azt jelenti, hogy az emberek az interneten vagy különböző alkalmazásokon keresztül gyüjtik be az új ötleteiket vagy találnak már bevált régi recepteket. Pont erről szól a mi weboldalunk is, ahol számtalan receptet fel lehet tölteni vagy meg lehet találni és aztán elmenteni, hogy az adott illető később is feltudja használni.


## Igényelt üzleti folyamatok
1. A látogató a főoldalon találja a recepteket, illetve a regisztrációra valamint bejelentkezésre való menüket.
2. A regisztráció gombra való kattintás után átirányításra kerül egy regisztrációs ablakba.
3. Regisztrálni adatai kitöltésével lehetséges az alábbi sorrendben; teljes név, felhasználónév, jelszó
4. A regisztráció után a bejelentkezés fülre kattintva átirányításra kerül a bejelentkezés ablakba.
5. Bejelentkezéshez a regisztrációkor megadott felhasználónév, és jelszó páros megadása szükséges.
6. Bejelentkezés után újra a főodalon találja magát a felhasználó, ahol már receptek feltöltésére is lehetősége van.
7. A recept megírásával együtt lehetősége van kép feltöltésre is.
8. A kész receptet az elküld gombra kattintva tudja posztolni.
9. A főoldalon található többi receptet jutalmazva kedvelni is tudja mások posztjait a like gomb segítségével.
10. A rendezés gomb segítségével rendezhet a legnépszerűbb receptek szerint, könnyebb böngészést biztosítva.
11. Kedvenc süteményei receptjét a nyomtatás gombbal pdf kiterjesztésű fájlban letöltheti.


## Használati esetek
Az oldalra alapértelmezetten látogatóként/vendégként (guest) csatlakozunk. A vendég számára megjelenik a főmenü a
legördülő sütemény receptekkel együtt. Itt lehetőségünk van rendezni a süteményeket népszerűség szerint, illetve
nyomtatni a recepteket. Sütiket feltölteni és likeolni, azonban csak érvényes, regisztrált fiókkal rendelkezők képesek. Ehhez pedig a regisztrációs fül alatt a megfelelő adatokkal kitöltve juthatnak el. A regisztráció befejezése
után egy gyors bejelentkezést követően nyílik meg számunkra a feltöltés és kedvencekhez adás/like gomb használata.
A jogosultságok tehát mindössze két fajta személyt különböztetnek meg; a látogatót és a regisztrált felhasználót.


## Megfeleltetés, hogyan fedik le a használati esetek a követelményeket
- Az oldal betöltése után megnyílik a főmenü és vele együtt a legördülő recepetek sora
- A Rendezés és Nyomtatás gomb mindenki számára elérhető
- Ahhoz, hogy mi is feltölthessünk receptet, illetve használhassuk a like gombot, érvényes fiókkal kell rendelkeznünk és be kell jelentkeznünk
- A regisztrációra kattintva az adatok beírásához az erre kialakított mezőket kell használni
- Ha a felhasználónév még nem foglalt és minden mást megfelelő formátumban adtunk meg, létrejön a fiókunk
- Ezek után a bejelentkezés fül alatt tudunk bejelentkezni a felhasználó név és jelszó együttesével
- A bejelentkezést követően képesek vagyunk új receptet hozzáadni a már meglévők közé, emellett pedig a kedvencekhez is adhatjuk a számunkra ízletes sütemenyéket
- Az ide tartozó input boxba vihetjük fel a recepetet és opcionálisan csatolhatunk hozzá képet is
- A feltöltés gomb segítségével tudjuk közzétenni a receptünket


## Képernyő tervek

![alt text](https://media.discordapp.net/attachments/323508728508710913/1026808340141060166/Kepernyoterv_01.PNG?width=1071&height=630)
![alt text](https://media.discordapp.net/attachments/323508728508710913/1026808340812157008/Kepernyoterv_02.PNG?width=1102&height=630)
![alt text](https://media.discordapp.net/attachments/323508728508710913/1026808341646807111/Kepernyoterv_03.PNG)
![alt text](https://media.discordapp.net/attachments/323508728508710913/1026808339629363291/Kepernyoterv_04.PNG)


## Forgatókönyv
**1.** A felhasználó a kezdőőoldalon találkozik egy kiemelt recepttel és itt tud keresni a receptek között, tud receptet felölteni, illetve itt tud bejelentkezni és regisztrálni. Ezek a gombot az oldal fejlécében elérhetőek lesznek mindvégig.

**2.** Az első pontál említett kezdőoldalon egy nagyító gombra kattintva és egy kifejezést beírva, majd Entert leütve rá tud keresni egy szóra, ami alapján meg is jeleníti az annak  megfelelő recepteket. 

**3.** Miután a felhasználó megtalálta a keresett receptet, a recept címe mellett található nyomtató gombra a rendszerablakot követve ki tudja nyomtatni vagy le tudja menteni a receptet PDF formátumban az eszközére.

**4.** Az első pontnál említett regisztrációs gombra kattintva egy e-mail cím, egy felhasználónév és egy jelszó megadása után tud fiókot létrehozni (vagy meglévő fiók esetén a belépés gombbal és az utóbbi kettő megadásával) be tud lépni a létező fiókjába, ami után a recept címe alatti szív gombbal tud szavazni a receptre és az az mellett levő szám eggyel növekszik.

**5.** Belépés után a felhasználó a feltöltés gombra kattintva tud a receptjének címet adni, az összetevőket és az elkészítést beírni és képet csatolni. Az oldal alján a Publikálás gombra kattintva (ellenőrzés után) megjelenik a recept az oldalon.


## Funkció-követelmény megfeleltetés
### Funkcionális követelmények megfeleltetése:
- **Rendezés:** Jobb átláthatóság, népszerű sütemények előbbi megjelenítése 8/10
- **Nyomtatás:** A receptek egyszerű mobilitása érdekében 6/10
- **Like:** A tetszés kinyilvánítására, illetve a rendezés segítésére 8/10
- **Kép kiválasztása:** A recepthez tartozó eredmény, elkészített kép formájában 6/10
- **Feltöltés:** Lehetőséget kínál új recept hozzáadásához 8/10
- **Regisztráció:** További funkciók elérésért 7/10
- **Bejelentkezés:** A további funkciók kihasználásra ad lehetőséget 7/10

### Nem Funkcionális követelmények megfeleltetése:
- **Látványos és egyedülálló dizájn:** Minimalista, szem-barát, nyugtató színek
- **Egyszerű, gyorsan értelmezhető, letisztult felhasználói felület:** Elképesztően fontos, az egész weboldal magja, ezért a legnagyobb figyelmet igényli. 10/10


## Fogalomtár
- **publikálás:** nyilvánossá tétel
- **regisztráció:** jelentkezés, beiratkozás
- **PDF:** hordozható dokumentumformátum, képeket és formázott szöveget tartalmazó formátum
- **formázott szöveg:** szöveg, ami írható **vastagon**, *dőlten* vagy ~~áthúzva~~.
- **fejléc:** az oldal tetején található sáv