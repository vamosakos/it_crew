# Követelményspecifikáció

## Áttekintés
Cégünk terjeszkedni szeretne az internetes térben. Egy olyan internetes weboldal létrehozása a célunk, ami által bevonjuk az olvasóinkat a már meglévő és az elkövetkezendő recepteskönyveinkbe.
Egy pályázat keretében indítjuk el az oldalt, ahol bárki számára elérhetővé válik az általuk különlegesnek vélt sütemény receptjeinek megosztása. A csak szimplán érdeklődők regisztráció nélkül is könnyedén tudnak böngészni a különféle sütemény receptek között. Továbbá egy egyszerű gombnyomással megoldható a receptek lementése/nyomtatása. A regisztrált felhasználóknak lehetősége van a különféle sütemény receptek feltöltésére, amelyet más felhasználók értékelni is tudnak egy "like" gomb segítségével. Később ezen likeok felhasználásával lehetőség nyílik rendezi népszerűség alapján az oldalon megjelenő recepteket. Ennek különlegessége pedig, hogy a hónap végén a legnépszerűbb sütemény receptjét felvisszük a következő kiadásunkba. Az weboldal nevének beszédesen a "sutippek.hu" (sütippek) címet képzeltük el.


## Jelenlegi helyzet
Az elmúlt évtizedben az egyik legnépszerűbb és legkedveltebb receptes könyvkiadó voltunk. 
Lojális olvasóinknak, illetve kitűnő szakembereinknek hála, mára már több tucatnyi könyvet publikáltunk,
így reméljük a következő ötletünkkel folytatni tudjuk a lap sikerét és jó hírnevét. Azt vettük észre, hogy
az olvasóink közül - egész magas részvételi aránnyal - szinte 100%-os jelenléttel mindenki képes és lelkes
használója az internetnek. Előfizetőink napi rendszerességel használják az internetet, ezért úgy gondoltuk, hogy
kifejezetten kézenfekvő lenne számukra is, ha onnan is elérhetnék kedvenc süteményeik receptjét.
Ezenfelül, egy kis interakciót belevíve, könnyen megoszthatják egymással a saját receptjeiket is.
Ezáltal pedig egymástól is tudnak ötleteket meríteni, hogy mindig előre meglegyen, mi kerüljön aznap az asztalra. 
Természetesen további célunk, hogy új látogatókat is bevonjunk. Az oldalunk segítségével, előfizetés vagy bármiféle
tranzakció nélkül is olvasni tudják, illetve részesei lehetnek a könyveinknek.


## Vágyálom rendszer
A projekt célja az olvasóink bevonása a szezonális könyveink kiadásába és a velük lévő interakció. Ugyanakkor nem titok az sem, hogy ez által új érdeklődök bevonzására is nagy hangsúlyt fektetünk. A weboldalon az elmúlt évek könyveit is meglehet vásárolni e-book formátumban, illetve akár házhozszállítás formájában. A rendszer elérhető több platformon, webre és külön androidra specializálva. Továbbá látványos, színes felülettel rendelkezik az oldal, hogy felkeltse a felhasználók figyelmét. A menüpontokhoz hozzátartozik egy galéria is, ahol rövid videók formájában megtalálható egy-egy sütemény receptje. Ezek a videók a mi munkatársaink által, jól képzett cukrászok és szakácsok segítségével jönnek létre. Célunk ez által is motiválni az olvasóinkat az édességek elkészítésére. Az egyszerű felhasználók mellett van egy külön admin felület, ahol moderálásra alkalmas funkciók találhatóak meg. 


## Funkcionális követelmények
- **Főmenü gomb:** segítségével megjelenítjük mások receptjeinek listáját, pontos leírását.
- **Bejelentkezés gomb:** felhasználónév és jelszó együttes megadásával beléphetünk a saját fiókunkba.
- **Regisztrációs gomb:** az itt megadott adatainkkal kitöltve tudunk fiókot létrehozni.
- **Kép kiválasztása:** az általunk, másoknak ajánlott süteményről készült képet lehetőségünk van feltölteni a recepet alatt.
- **Like gomb/Kedvencekhez adás:** a kedvenc receptjeinket ezzel tudjuk megjelölni, majd később ez alapján rendezni a legördülő süteményeket.
- **Rendezés:** lehetőséget kínál népszerűség alapján rendezni a recepteket.
- **Nyomtatás gomb:** nyomtatásra kész formátumban, PDF kiterjesztésben érhetjük el kedvenc sütemény receptjeinket.


## Rendszerre vonatkozó törvények, szabványok, ajánlások
### Törvények
- AZ EURÓPAI PARLAMENT ÉS A TANÁCS (EU) 2016/679 RENDELETE

- Az információs önrendelkezési jogról és az információszabadságról szóló 2011. évi CXII. törvény 4.§ (1) és (2) bekezdései.

### Rendszerszabványok, ajánlások
- Trello
- Discord
- Github
- Visual studio code
- Sublime Text
- PHP
- HTML,CSS
- Javascript
- Tetszőleges mock-up programok (képernyő tervhez)


## Jelenlegi üzleti folyamatok modellje
Általában a mai világban sok ember szeret sütni, főzni. A mi célunk az lenne, hogy ezeknek az embereknek megkönnyítsük a receptek keresését vagy akár megosztását másokkal. Ez által könnyen tudnak keresni vagy feltölteni saját bevált receptjüket az oldalon egy helyen.
Továbbá lehetőség lesz receptek kedvelésére, így az adott hónap végén a legtöbb kedveléssel szolgáló felhasználó bekerül a következő kiadásba.


## Követelménylista
| Modul | ID | Név | v. | Kifejtés |
|---|---|---|---|---|
| Jogosultság | K1 | Bejelentkezési felület | 1.0 | A felhasználó a felhasználóneve és jelszava segítségével bejelentkezhet. Ha a megadott felhasználónév vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap. |
| Jogosultság | K2 | Regisztráció | 1.0 | A felhasználó a teljes nevével, majd a felhasználói nevének és jelszavának megadásával regisztrálja magát. A jelszó tárolása kódolva történik az adatbázisban. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót. |
| Feltöltés | K3 | Recept feltöltése | 1.0 | A regisztrált felhasználóknak lehetőségük van a recept feltöltésére. Ezt a recept feltöltése helyen talált szövegdobozba felvitt gépelt karakterekkel tehető meg. |
| Feltöltés | K4 | Kép feltöltése | 1.0 | A kép feltöltés, a recept feltöltésére használt kitöltött szövegdoboz alatt foglal helyet, ahol a felhasználó opcionálisan tölthet fel képet a már elkészíett süteményéről. |
| Kedvelés | K5 | Like gomb | 1.0 | Minden recepthez hozzájárul egy gomb, melynek megnyomásával a tetszésüket fejezhetik ki regisztrált felhasználók. |
| Rendezés | K6 | Rendezés | 1.0 | A rendezés gomb segítségével lehetőség van receptek rendezésére likeok / kedvelések szerint (Z-A) - csökkenően |
| Nyomtatás | K7 | Nyomtatás | 1.0 | A nyomtatás gomb lehetőséget nyújt az adott képernyőn elhelyezkedő receptek nyomtatására, letöltésére PDF formátumban. |


## Riportok
**Q:** Milyen weboldalt képzelt el? 

**A:** Egy olyan weboldalra lenne szükségünk, ahol a kiadónk által kiadott süteményeskönyv receptjeit a látogatók el tudják írni, illetve a felhasználók is meg tudják osztani a saját süteményes receptjeiket is egy regisztrációt követően). A felhasználók tudnak szavazni a mások által beküldött receptekre is és a legtöbb szavazatot elért recept bekerül a következő kiadásunkba.


**Q:** Az interneten már számos nagy receptoldal létezik. Miért szeretne még egy oldalt létrehozni? 

**A:** A kiadónk története nagymúltú és számos ismert receptkönyv szerepel a listánkon, aminek receptjeit ismert és díjnyertes cukrászok írták. Ezeket a recepteket szeretnénk digitálisan, a modern kornak megfelelő módon is elérhetővé tenni a nagyközönség számára, illetve szeretnénk lehetőséget biztosítani a fel nem fedezett cukrászmesterek számára a tudásuk megmutatására. 


**Q:** Tervez az oldalnak asztali vagy telefonos alkalmazást?

**A:** Nem, hiszen az oldal reszponzív, tehát telefonon és számítógépen is egyszerűen kezelhető. 


**Q:** Korábban említett egy regisztrációt. Mit is jelent ez pontosan?

**A:** A felhasználótól adatokat várunk el, hogy képes legyen recepteket feltölteni (amivel megakakdályozzuk a kéretlen tartalom előfordulását az oldalon), ez egy felhasználónevet, egy e-mail címet és egy jelszót takar.