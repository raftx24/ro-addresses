<?php

use Illuminate\Database\Migrations\Migration;

class InsertAllLocalitiesForAB extends Migration
{
    public function up()
    {
        $sql = 'INSERT INTO localities (county_id, township, name, created_at, updated_at) VALUES
            (1,"","Abrud", NOW(), NOW()),
            (1,"","Aiud", NOW(), NOW()),
            (1,"","Alba Iulia", NOW(), NOW()),
            (1,"","Albac", NOW(), NOW()),
            (1,"","Almasu Mare", NOW(), NOW()),
            (1,"","Arieseni", NOW(), NOW()),
            (1,"","Avram Iancu", NOW(), NOW()),
            (1,"","Baia de Aries", NOW(), NOW()),
            (1,"","Berghin", NOW(), NOW()),
            (1,"","Bistra", NOW(), NOW()),
            (1,"","Blaj", NOW(), NOW()),
            (1,"","Blandiana", NOW(), NOW()),
            (1,"","Bucium", NOW(), NOW()),
            (1,"","Cenade", NOW(), NOW()),
            (1,"","Ceru-Bacainti", NOW(), NOW()),
            (1,"","Cetatea de Balta", NOW(), NOW()),
            (1,"","Ciugud", NOW(), NOW()),
            (1,"","Ciuruleasa", NOW(), NOW()),
            (1,"","Cricau", NOW(), NOW()),
            (1,"","Craciunelu de Jos", NOW(), NOW()),
            (1,"","Cugir", NOW(), NOW()),
            (1,"","Calnic", NOW(), NOW()),
            (1,"","Campeni", NOW(), NOW()),
            (1,"","Daia Romana", NOW(), NOW()),
            (1,"","Dostat", NOW(), NOW()),
            (1,"","Farau", NOW(), NOW()),
            (1,"","Galda de Jos", NOW(), NOW()),
            (1,"","Garbova", NOW(), NOW()),
            (1,"","Garda de Sus", NOW(), NOW()),
            (1,"","Hoparta", NOW(), NOW()),
            (1,"","Horea", NOW(), NOW()),
            (1,"","Ighiu", NOW(), NOW()),
            (1,"","Jidvei", NOW(), NOW()),
            (1,"","Livezile", NOW(), NOW()),
            (1,"","Lopadea Noua", NOW(), NOW()),
            (1,"","Lunca Muresului", NOW(), NOW()),
            (1,"","Lupsa", NOW(), NOW()),
            (1,"","Metes", NOW(), NOW()),
            (1,"","Mihalt", NOW(), NOW()),
            (1,"","Miraslau", NOW(), NOW()),
            (1,"","Mogos", NOW(), NOW()),
            (1,"","Noslac", NOW(), NOW()),
            (1,"","Ocna Mures", NOW(), NOW()),
            (1,"","Ocolis", NOW(), NOW()),
            (1,"","Ohaba", NOW(), NOW()),
            (1,"","Poiana Vadului", NOW(), NOW()),
            (1,"","Ponor", NOW(), NOW()),
            (1,"","Rosia Montana", NOW(), NOW()),
            (1,"","Rosia de Secas", NOW(), NOW()),
            (1,"","Rametea", NOW(), NOW()),
            (1,"","Ramet", NOW(), NOW()),
            (1,"","Radesti", NOW(), NOW()),
            (1,"","Scarisoara", NOW(), NOW()),
            (1,"","Sebes", NOW(), NOW()),
            (1,"","Sohodol", NOW(), NOW()),
            (1,"","Stremt", NOW(), NOW()),
            (1,"","Sancel", NOW(), NOW()),
            (1,"","Santimbru", NOW(), NOW()),
            (1,"","Salistea", NOW(), NOW()),
            (1,"","Sasciori", NOW(), NOW()),
            (1,"","Teius", NOW(), NOW()),
            (1,"","Unirea", NOW(), NOW()),
            (1,"","Vadu Motilor", NOW(), NOW()),
            (1,"","Valea Lunga", NOW(), NOW()),
            (1,"","Vidra", NOW(), NOW()),
            (1,"","Vintu de Jos", NOW(), NOW()),
            (1,"","Zlatna", NOW(), NOW()),
            (1,"","Intregalde", NOW(), NOW()),
            (1,"","Sibot", NOW(), NOW()),
            (1,"","Sona", NOW(), NOW()),
            (1,"","Spring", NOW(), NOW()),
            (1,"","Sugag", NOW(), NOW()),
            (1,"Abrud","Abrud-Sat", NOW(), NOW()),
            (1,"Abrud","Gura Cornei", NOW(), NOW()),
            (1,"Abrud","Soharu", NOW(), NOW()),
            (1,"Aiud","Aiudul de Sus", NOW(), NOW()),
            (1,"Aiud","Ciumbrud", NOW(), NOW()),
            (1,"Aiud","Gambas", NOW(), NOW()),
            (1,"Aiud","Garbova de Jos", NOW(), NOW()),
            (1,"Aiud","Garbova de Sus", NOW(), NOW()),
            (1,"Aiud","Garbovita", NOW(), NOW()),
            (1,"Aiud","Magina", NOW(), NOW()),
            (1,"Aiud","Pagida", NOW(), NOW()),
            (1,"Aiud","Sancrai", NOW(), NOW()),
            (1,"Aiud","Tifra", NOW(), NOW()),
            (1,"Alba Iulia","Barabant", NOW(), NOW()),
            (1,"Alba Iulia","Micesti", NOW(), NOW()),
            (1,"Alba Iulia","Oarda", NOW(), NOW()),
            (1,"Alba Iulia","Paclisa", NOW(), NOW()),
            (1,"Albac","Budaiesti", NOW(), NOW()),
            (1,"Albac","Barasti", NOW(), NOW()),
            (1,"Albac","Cionesti", NOW(), NOW()),
            (1,"Albac","Costesti", NOW(), NOW()),
            (1,"Albac","Dealu Lamasoi", NOW(), NOW()),
            (1,"Albac","Deve", NOW(), NOW()),
            (1,"Albac","Dupa Plese", NOW(), NOW()),
            (1,"Albac","Fata", NOW(), NOW()),
            (1,"Albac","Plesesti", NOW(), NOW()),
            (1,"Albac","Potionci", NOW(), NOW()),
            (1,"Albac","Rogoz", NOW(), NOW()),
            (1,"Albac","Rosesti", NOW(), NOW()),
            (1,"Albac","Rusesti", NOW(), NOW()),
            (1,"Albac","Sohodol", NOW(), NOW()),
            (1,"Albac","Tamboresti", NOW(), NOW()),
            (1,"Almasu Mare","Almasu de Mijloc", NOW(), NOW()),
            (1,"Almasu Mare","Bradet", NOW(), NOW()),
            (1,"Almasu Mare","Cheile Cibului", NOW(), NOW()),
            (1,"Almasu Mare","Cib", NOW(), NOW()),
            (1,"Almasu Mare","Glod", NOW(), NOW()),
            (1,"Almasu Mare","Nadastia", NOW(), NOW()),
            (1,"Arieseni","Avramesti", NOW(), NOW()),
            (1,"Arieseni","Bubesti", NOW(), NOW()),
            (1,"Arieseni","Casa de Piatra", NOW(), NOW()),
            (1,"Arieseni","Cobles", NOW(), NOW()),
            (1,"Arieseni","Dealu Bajului", NOW(), NOW()),
            (1,"Arieseni","Fata Cristesei", NOW(), NOW()),
            (1,"Arieseni","Fata Lapusului", NOW(), NOW()),
            (1,"Arieseni","Galbena", NOW(), NOW()),
            (1,"Arieseni","Hodobana", NOW(), NOW()),
            (1,"Arieseni","Izlaz", NOW(), NOW()),
            (1,"Arieseni","Poienita", NOW(), NOW()),
            (1,"Arieseni","Pantesti", NOW(), NOW()),
            (1,"Arieseni","Patrahaitesti", NOW(), NOW()),
            (1,"Arieseni","Ravicesti", NOW(), NOW()),
            (1,"Arieseni","Sturu", NOW(), NOW()),
            (1,"Arieseni","Vanvucesti", NOW(), NOW()),
            (1,"Arieseni","Stei-Arieseni", NOW(), NOW()),
            (1,"Avram Iancu","Achimetesti", NOW(), NOW()),
            (1,"Avram Iancu","Avramesti", NOW(), NOW()),
            (1,"Avram Iancu","Boldesti", NOW(), NOW()),
            (1,"Avram Iancu","Badai", NOW(), NOW()),
            (1,"Avram Iancu","Cocesti", NOW(), NOW()),
            (1,"Avram Iancu","Cocosesti", NOW(), NOW()),
            (1,"Avram Iancu","Coroiesti", NOW(), NOW()),
            (1,"Avram Iancu","Candesti", NOW(), NOW()),
            (1,"Avram Iancu","Carasti", NOW(), NOW()),
            (1,"Avram Iancu","Cartulesti", NOW(), NOW()),
            (1,"Avram Iancu","Calugaresti", NOW(), NOW()),
            (1,"Avram Iancu","Casoaia", NOW(), NOW()),
            (1,"Avram Iancu","Dealu Crisului", NOW(), NOW()),
            (1,"Avram Iancu","Dolesti", NOW(), NOW()),
            (1,"Avram Iancu","Dumacesti", NOW(), NOW()),
            (1,"Avram Iancu","Gojeiesti", NOW(), NOW()),
            (1,"Avram Iancu","Heleresti", NOW(), NOW()),
            (1,"Avram Iancu","Incesti", NOW(), NOW()),
            (1,"Avram Iancu","Jojei", NOW(), NOW()),
            (1,"Avram Iancu","Martesti", NOW(), NOW()),
            (1,"Avram Iancu","Orgesti", NOW(), NOW()),
            (1,"Avram Iancu","Plai", NOW(), NOW()),
            (1,"Avram Iancu","Puselesti", NOW(), NOW()),
            (1,"Avram Iancu","Patrutesti", NOW(), NOW()),
            (1,"Avram Iancu","Tarsa", NOW(), NOW()),
            (1,"Avram Iancu","Tarsa-Plai", NOW(), NOW()),
            (1,"Avram Iancu","Valea Maciului", NOW(), NOW()),
            (1,"Avram Iancu","Valea Utului", NOW(), NOW()),
            (1,"Avram Iancu","Verdesti", NOW(), NOW()),
            (1,"Avram Iancu","Vidrisoara", NOW(), NOW()),
            (1,"Avram Iancu","Soicesti", NOW(), NOW()),
            (1,"Avram Iancu","Stertesti", NOW(), NOW()),
            (1,"Baia De Aries","Brazesti", NOW(), NOW()),
            (1,"Baia De Aries","Cioara de Sus", NOW(), NOW()),
            (1,"Baia De Aries","Muncelu", NOW(), NOW()),
            (1,"Baia De Aries","Sartas", NOW(), NOW()),
            (1,"Baia De Aries","Simulesti", NOW(), NOW()),
            (1,"Berghin","Ghirbom", NOW(), NOW()),
            (1,"Berghin","Henig", NOW(), NOW()),
            (1,"Berghin","Straja", NOW(), NOW()),
            (1,"Bistra","Aronesti", NOW(), NOW()),
            (1,"Bistra","Barlesti", NOW(), NOW()),
            (1,"Bistra","Balesti", NOW(), NOW()),
            (1,"Bistra","Balesti-Catun", NOW(), NOW()),
            (1,"Bistra","Cheleteni", NOW(), NOW()),
            (1,"Bistra","Ciuldesti", NOW(), NOW()),
            (1,"Bistra","Cretesti", NOW(), NOW()),
            (1,"Bistra","Dealu Muntelui", NOW(), NOW()),
            (1,"Bistra","Durasti", NOW(), NOW()),
            (1,"Bistra","Dambureni", NOW(), NOW()),
            (1,"Bistra","Garde", NOW(), NOW()),
            (1,"Bistra","Ganesti", NOW(), NOW()),
            (1,"Bistra","Hodisesti", NOW(), NOW()),
            (1,"Bistra","Hudricesti", NOW(), NOW()),
            (1,"Bistra","Lipaia", NOW(), NOW()),
            (1,"Bistra","Lunca Larga", NOW(), NOW()),
            (1,"Bistra","Lunca Merilor", NOW(), NOW()),
            (1,"Bistra","Mihaiesti", NOW(), NOW()),
            (1,"Bistra","Novacesti", NOW(), NOW()),
            (1,"Bistra","Namas", NOW(), NOW()),
            (1,"Bistra","Perjesti", NOW(), NOW()),
            (1,"Bistra","Poiana", NOW(), NOW()),
            (1,"Bistra","Poiu", NOW(), NOW()),
            (1,"Bistra","Runcuri", NOW(), NOW()),
            (1,"Bistra","Ratitis", NOW(), NOW()),
            (1,"Bistra","Salagesti", NOW(), NOW()),
            (1,"Bistra","Tolacesti", NOW(), NOW()),
            (1,"Bistra","Tomnatec", NOW(), NOW()),
            (1,"Bistra","Trisoresti", NOW(), NOW()),
            (1,"Bistra","Varsi-Rontu", NOW(), NOW()),
            (1,"Bistra","Varsii Mari", NOW(), NOW()),
            (1,"Bistra","Varsii Mici", NOW(), NOW()),
            (1,"Bistra","Stefanca", NOW(), NOW()),
            (1,"Bistra","Taranesti", NOW(), NOW()),
            (1,"Blaj","Deleni-Obarsie", NOW(), NOW()),
            (1,"Blaj","Flitesti", NOW(), NOW()),
            (1,"Blaj","Izvoarele", NOW(), NOW()),
            (1,"Blaj","Manarade", NOW(), NOW()),
            (1,"Blaj","Petrisat", NOW(), NOW()),
            (1,"Blaj","Spatac", NOW(), NOW()),
            (1,"Blaj","Tiur", NOW(), NOW()),
            (1,"Blaj","Veza", NOW(), NOW()),
            (1,"Blandiana","Acmariu", NOW(), NOW()),
            (1,"Blandiana","Ibru", NOW(), NOW()),
            (1,"Blandiana","Poieni", NOW(), NOW()),
            (1,"Blandiana","Racatau", NOW(), NOW()),
            (1,"Bucium","Anghelesti", NOW(), NOW()),
            (1,"Bucium","Bisericani", NOW(), NOW()),
            (1,"Bucium","Bucium-Sat", NOW(), NOW()),
            (1,"Bucium","Cerbu", NOW(), NOW()),
            (1,"Bucium","Ciuculesti", NOW(), NOW()),
            (1,"Bucium","Coleseni", NOW(), NOW()),
            (1,"Bucium","Dogaresti", NOW(), NOW()),
            (1,"Bucium","Feresti", NOW(), NOW()),
            (1,"Bucium","Floresti", NOW(), NOW()),
            (1,"Bucium","Gura Izbitei", NOW(), NOW()),
            (1,"Bucium","Helesti", NOW(), NOW()),
            (1,"Bucium","Izbicioara", NOW(), NOW()),
            (1,"Bucium","Izbita", NOW(), NOW()),
            (1,"Bucium","Jurcuiesti", NOW(), NOW()),
            (1,"Bucium","Lupulesti", NOW(), NOW()),
            (1,"Bucium","Muntari", NOW(), NOW()),
            (1,"Bucium","Magura", NOW(), NOW()),
            (1,"Bucium","Petreni", NOW(), NOW()),
            (1,"Bucium","Poiana", NOW(), NOW()),
            (1,"Bucium","Poieni", NOW(), NOW()),
            (1,"Bucium","Stalnisoara", NOW(), NOW()),
            (1,"Bucium","Valea Abruzel", NOW(), NOW()),
            (1,"Bucium","Valea Alba", NOW(), NOW()),
            (1,"Bucium","Valea Cerbului", NOW(), NOW()),
            (1,"Bucium","Valea Negrilesii", NOW(), NOW()),
            (1,"Bucium","Valea Poienii", NOW(), NOW()),
            (1,"Bucium","Valea Sesii", NOW(), NOW()),
            (1,"Bucium","Valcea", NOW(), NOW()),
            (1,"Bucium","Valeni", NOW(), NOW()),
            (1,"Calnic","Cut", NOW(), NOW()),
            (1,"Calnic","Deal", NOW(), NOW()),
            (1,"Campeni","Boncesti", NOW(), NOW()),
            (1,"Campeni","Borlesti", NOW(), NOW()),
            (1,"Campeni","Botesti", NOW(), NOW()),
            (1,"Campeni","Certege", NOW(), NOW()),
            (1,"Campeni","Coasta Vascului", NOW(), NOW()),
            (1,"Campeni","Dealu Bistrii", NOW(), NOW()),
            (1,"Campeni","Dealu Capsei", NOW(), NOW()),
            (1,"Campeni","Dric", NOW(), NOW()),
            (1,"Campeni","Dandut", NOW(), NOW()),
            (1,"Campeni","Fata Abrudului", NOW(), NOW()),
            (1,"Campeni","Floresti", NOW(), NOW()),
            (1,"Campeni","Furduiesti", NOW(), NOW()),
            (1,"Campeni","Mihoesti", NOW(), NOW()),
            (1,"Campeni","Motorasti", NOW(), NOW()),
            (1,"Campeni","Peste Valea Bistrii", NOW(), NOW()),
            (1,"Campeni","Poduri", NOW(), NOW()),
            (1,"Campeni","Sorlita", NOW(), NOW()),
            (1,"Campeni","Tomusesti", NOW(), NOW()),
            (1,"Campeni","Valea Bistrii", NOW(), NOW()),
            (1,"Campeni","Valea Caselor", NOW(), NOW()),
            (1,"Campeni","Varsi", NOW(), NOW()),
            (1,"Cenade","Capu Dealului", NOW(), NOW()),
            (1,"Cenade","Gorgan", NOW(), NOW()),
            (1,"Cergau","Cergau Mare", NOW(), NOW()),
            (1,"Cergau","Cergau Mic", NOW(), NOW()),
            (1,"Cergau","Lupu", NOW(), NOW()),
            (1,"Ceru-Bacainti","Bolovanesti", NOW(), NOW()),
            (1,"Ceru-Bacainti","Bulbuc", NOW(), NOW()),
            (1,"Ceru-Bacainti","Cucuta", NOW(), NOW()),
            (1,"Ceru-Bacainti","Curpeni", NOW(), NOW()),
            (1,"Ceru-Bacainti","Dumbravita", NOW(), NOW()),
            (1,"Ceru-Bacainti","Fantanele", NOW(), NOW()),
            (1,"Ceru-Bacainti","Grosi", NOW(), NOW()),
            (1,"Ceru-Bacainti","Valea Mare", NOW(), NOW()),
            (1,"Ceru-Bacainti","Viezuri", NOW(), NOW()),
            (1,"Cetatea De Balta","Craciunelu de Sus", NOW(), NOW()),
            (1,"Cetatea De Balta","Santamarie", NOW(), NOW()),
            (1,"Cetatea De Balta","Tatarlaua", NOW(), NOW()),
            (1,"Ciugud","Drambar", NOW(), NOW()),
            (1,"Ciugud","Hapria", NOW(), NOW()),
            (1,"Ciugud","Limba", NOW(), NOW()),
            (1,"Ciugud","Teleac", NOW(), NOW()),
            (1,"Ciugud","Seusa", NOW(), NOW()),
            (1,"Ciuruleasa","Bidigesti", NOW(), NOW()),
            (1,"Ciuruleasa","Bodresti", NOW(), NOW()),
            (1,"Ciuruleasa","Boglesti", NOW(), NOW()),
            (1,"Ciuruleasa","Buninginea", NOW(), NOW()),
            (1,"Ciuruleasa","Ghedulesti", NOW(), NOW()),
            (1,"Ciuruleasa","Moraresti", NOW(), NOW()),
            (1,"Ciuruleasa","Matisesti", NOW(), NOW()),
            (1,"Ciuruleasa","Vulcan", NOW(), NOW()),
            (1,"Craciunelu De Jos","Bucerdea Granoasa", NOW(), NOW()),
            (1,"Craciunelu De Jos","Cornu", NOW(), NOW()),
            (1,"Craciunelu De Jos","Panca", NOW(), NOW()),
            (1,"Craciunelu De Jos","Padure", NOW(), NOW()),
            (1,"Cricau","Craiva", NOW(), NOW()),
            (1,"Cricau","Tibru", NOW(), NOW()),
            (1,"Cugir","Bocsitura", NOW(), NOW()),
            (1,"Cugir","Bucuru", NOW(), NOW()),
            (1,"Cugir","Calene", NOW(), NOW()),
            (1,"Cugir","Feteni", NOW(), NOW()),
            (1,"Cugir","Goasele", NOW(), NOW()),
            (1,"Cugir","Mugesti", NOW(), NOW()),
            (1,"Cugir","Vinerea", NOW(), NOW()),
            (1,"Dostat","Boz", NOW(), NOW()),
            (1,"Dostat","Dealu Dostatului", NOW(), NOW()),
            (1,"Farau","Heria", NOW(), NOW()),
            (1,"Farau","Medves", NOW(), NOW()),
            (1,"Farau","Sanbenedic", NOW(), NOW()),
            (1,"Farau","Silea", NOW(), NOW()),
            (1,"Galda De Jos","Benic", NOW(), NOW()),
            (1,"Galda De Jos","Cetea", NOW(), NOW()),
            (1,"Galda De Jos","Galda de Sus", NOW(), NOW()),
            (1,"Galda De Jos","Lupseni", NOW(), NOW()),
            (1,"Galda De Jos","Mesentea", NOW(), NOW()),
            (1,"Galda De Jos","Magura", NOW(), NOW()),
            (1,"Galda De Jos","Oiejdea", NOW(), NOW()),
            (1,"Galda De Jos","Poiana Galdei", NOW(), NOW()),
            (1,"Galda De Jos","Raicani", NOW(), NOW()),
            (1,"Galda De Jos","Zagris", NOW(), NOW()),
            (1,"Garbova","Carpinis", NOW(), NOW()),
            (1,"Garbova","Reciu", NOW(), NOW()),
            (1,"Garda De Sus","Biharia", NOW(), NOW()),
            (1,"Garda De Sus","Dealu Frumos", NOW(), NOW()),
            (1,"Garda De Sus","Dealu Ordancusii", NOW(), NOW()),
            (1,"Garda De Sus","Dobresti", NOW(), NOW()),
            (1,"Garda De Sus","Ghetari", NOW(), NOW()),
            (1,"Garda De Sus","Garda Seaca", NOW(), NOW()),
            (1,"Garda De Sus","Hanasesti", NOW(), NOW()),
            (1,"Garda De Sus","Huzaresti", NOW(), NOW()),
            (1,"Garda De Sus","Izvoarele", NOW(), NOW()),
            (1,"Garda De Sus","Mununa", NOW(), NOW()),
            (1,"Garda De Sus","Ocoale", NOW(), NOW()),
            (1,"Garda De Sus","Plai", NOW(), NOW()),
            (1,"Garda De Sus","Plisti", NOW(), NOW()),
            (1,"Garda De Sus","Scoarta", NOW(), NOW()),
            (1,"Garda De Sus","Snide", NOW(), NOW()),
            (1,"Garda De Sus","Sucesti", NOW(), NOW()),
            (1,"Hoparta","Silivas", NOW(), NOW()),
            (1,"Hoparta","Turdas", NOW(), NOW()),
            (1,"Hoparta","Vama Seaca", NOW(), NOW()),
            (1,"Hoparta","Spalnaca", NOW(), NOW()),
            (1,"Horea","Baba", NOW(), NOW()),
            (1,"Horea","Butesti", NOW(), NOW()),
            (1,"Horea","Darlesti", NOW(), NOW()),
            (1,"Horea","Fericet", NOW(), NOW()),
            (1,"Horea","Giurgiut", NOW(), NOW()),
            (1,"Horea","Mancesti", NOW(), NOW()),
            (1,"Horea","Matisesti", NOW(), NOW()),
            (1,"Horea","Niculesti", NOW(), NOW()),
            (1,"Horea","Petreasa", NOW(), NOW()),
            (1,"Horea","Preluca", NOW(), NOW()),
            (1,"Horea","Patrusesti", NOW(), NOW()),
            (1,"Horea","Teiu", NOW(), NOW()),
            (1,"Horea","Trifesti", NOW(), NOW()),
            (1,"Horea","Zanzesti", NOW(), NOW()),
            (1,"Ighiu","Bucerdea Vanoasa", NOW(), NOW()),
            (1,"Ighiu","Ighiel", NOW(), NOW()),
            (1,"Ighiu","Sard", NOW(), NOW()),
            (1,"Ighiu","Telna", NOW(), NOW()),
            (1,"Intregalde","Dealu Geoagiului", NOW(), NOW()),
            (1,"Intregalde","Ghioncani", NOW(), NOW()),
            (1,"Intregalde","Iliesti", NOW(), NOW()),
            (1,"Intregalde","Ivanis", NOW(), NOW()),
            (1,"Intregalde","Modolesti", NOW(), NOW()),
            (1,"Intregalde","Marinesti", NOW(), NOW()),
            (1,"Intregalde","Necrilesti", NOW(), NOW()),
            (1,"Intregalde","Popesti", NOW(), NOW()),
            (1,"Intregalde","Sfarcea", NOW(), NOW()),
            (1,"Intregalde","Tecsesti", NOW(), NOW()),
            (1,"Jidvei","Balcaciu", NOW(), NOW()),
            (1,"Jidvei","Capalna de Jos", NOW(), NOW()),
            (1,"Jidvei","Feisa", NOW(), NOW()),
            (1,"Jidvei","Veseus", NOW(), NOW()),
            (1,"Livezile","Izvoarele", NOW(), NOW()),
            (1,"Livezile","Poiana Aiudului", NOW(), NOW()),
            (1,"Livezile","Valisoara", NOW(), NOW()),
            (1,"Lopadea Noua","Asinip", NOW(), NOW()),
            (1,"Lopadea Noua","Beta", NOW(), NOW()),
            (1,"Lopadea Noua","Bagau", NOW(), NOW()),
            (1,"Lopadea Noua","Cicard", NOW(), NOW()),
            (1,"Lopadea Noua","Ciuguzel", NOW(), NOW()),
            (1,"Lopadea Noua","Ocnisoara", NOW(), NOW()),
            (1,"Lopadea Noua","Odverem", NOW(), NOW()),
            (1,"Lunca Muresului","Gura Ariesului", NOW(), NOW()),
            (1,"Lupsa","Bardesti", NOW(), NOW()),
            (1,"Lupsa","Barzan", NOW(), NOW()),
            (1,"Lupsa","Curmatura", NOW(), NOW()),
            (1,"Lupsa","Dupa Deal", NOW(), NOW()),
            (1,"Lupsa","Geamana", NOW(), NOW()),
            (1,"Lupsa","Holobani", NOW(), NOW()),
            (1,"Lupsa","Hadarau", NOW(), NOW()),
            (1,"Lupsa","Lazuri", NOW(), NOW()),
            (1,"Lupsa","Lunca", NOW(), NOW()),
            (1,"Lupsa","Musca", NOW(), NOW()),
            (1,"Lupsa","Manastire", NOW(), NOW()),
            (1,"Lupsa","Margaia", NOW(), NOW()),
            (1,"Lupsa","Pitiga", NOW(), NOW()),
            (1,"Lupsa","Posogani", NOW(), NOW()),
            (1,"Lupsa","Parau-Carbunari", NOW(), NOW()),
            (1,"Lupsa","Trifesti", NOW(), NOW()),
            (1,"Lupsa","Valea Holhorii", NOW(), NOW()),
            (1,"Lupsa","Valea Lupsii", NOW(), NOW()),
            (1,"Lupsa","Valea Sesii", NOW(), NOW()),
            (1,"Lupsa","Vinta", NOW(), NOW()),
            (1,"Lupsa","Vai", NOW(), NOW()),
            (1,"Lupsa","Sasa", NOW(), NOW()),
            (1,"Metes","Ampoita", NOW(), NOW()),
            (1,"Metes","Isca", NOW(), NOW()),
            (1,"Metes","Lunca Ampoitei", NOW(), NOW()),
            (1,"Metes","Lunca Metesului", NOW(), NOW()),
            (1,"Metes","Poiana Ampoiului", NOW(), NOW()),
            (1,"Metes","Poiana Ursului", NOW(), NOW()),
            (1,"Metes","Presaca Ampoiului", NOW(), NOW()),
            (1,"Metes","Padurea", NOW(), NOW()),
            (1,"Metes","Remetea", NOW(), NOW()),
            (1,"Metes","Tauti", NOW(), NOW()),
            (1,"Metes","Valeni", NOW(), NOW()),
            (1,"Mihalt","Cistei", NOW(), NOW()),
            (1,"Mihalt","Obreja", NOW(), NOW()),
            (1,"Mihalt","Zaries", NOW(), NOW()),
            (1,"Miraslau","Cicau", NOW(), NOW()),
            (1,"Miraslau","Decea", NOW(), NOW()),
            (1,"Miraslau","Lopadea Veche", NOW(), NOW()),
            (1,"Miraslau","Ormenis", NOW(), NOW()),
            (1,"Miraslau","Rachis", NOW(), NOW()),
            (1,"Mogos","Bocesti", NOW(), NOW()),
            (1,"Mogos","Bogdanesti", NOW(), NOW()),
            (1,"Mogos","Butesti", NOW(), NOW()),
            (1,"Mogos","Barlesti", NOW(), NOW()),
            (1,"Mogos","Barlesti-Catun", NOW(), NOW()),
            (1,"Mogos","Barzogani", NOW(), NOW()),
            (1,"Mogos","Barbesti", NOW(), NOW()),
            (1,"Mogos","Cojocani", NOW(), NOW()),
            (1,"Mogos","Cristesti", NOW(), NOW()),
            (1,"Mogos","Mamaligani", NOW(), NOW()),
            (1,"Mogos","Negresti", NOW(), NOW()),
            (1,"Mogos","Oncesti", NOW(), NOW()),
            (1,"Mogos","Poienile-Mogos", NOW(), NOW()),
            (1,"Mogos","Tomesti", NOW(), NOW()),
            (1,"Mogos","Valea Barnii", NOW(), NOW()),
            (1,"Mogos","Valea Barlutesti", NOW(), NOW()),
            (1,"Mogos","Valea Cocesti", NOW(), NOW()),
            (1,"Mogos","Valea Giogesti", NOW(), NOW()),
            (1,"Mogos","Valea Mlacii", NOW(), NOW()),
            (1,"Mogos","Valea Tupilor", NOW(), NOW()),
            (1,"Noslac","Copand", NOW(), NOW()),
            (1,"Noslac","Captalan", NOW(), NOW()),
            (1,"Noslac","Gabud", NOW(), NOW()),
            (1,"Noslac","Stana de Mures", NOW(), NOW()),
            (1,"Noslac","Valea Ciuciului", NOW(), NOW()),
            (1,"Ocna Mures","Cisteiu de Mures", NOW(), NOW()),
            (1,"Ocna Mures","Micoslaca", NOW(), NOW()),
            (1,"Ocna Mures","Razboieni-Cetate", NOW(), NOW()),
            (1,"Ocna Mures","Uioara de Jos", NOW(), NOW()),
            (1,"Ocna Mures","Uioara de Sus", NOW(), NOW()),
            (1,"Ocolis","Lunca Larga", NOW(), NOW()),
            (1,"Ocolis","Runc", NOW(), NOW()),
            (1,"Ocolis","Vidolm", NOW(), NOW()),
            (1,"Ohaba","Colibi", NOW(), NOW()),
            (1,"Ohaba","Maghierat", NOW(), NOW()),
            (1,"Ohaba","Secasel", NOW(), NOW()),
            (1,"Pianu","Pianu de Jos", NOW(), NOW()),
            (1,"Pianu","Pianu de Sus", NOW(), NOW()),
            (1,"Pianu","Plaiuri", NOW(), NOW()),
            (1,"Pianu","Purcareti", NOW(), NOW()),
            (1,"Pianu","Strungari", NOW(), NOW()),
            (1,"Poiana Vadului","Costesti", NOW(), NOW()),
            (1,"Poiana Vadului","Duduieni", NOW(), NOW()),
            (1,"Poiana Vadului","Fagetu de Jos", NOW(), NOW()),
            (1,"Poiana Vadului","Fagetu de Sus", NOW(), NOW()),
            (1,"Poiana Vadului","Hanasesti", NOW(), NOW()),
            (1,"Poiana Vadului","Lupaiesti", NOW(), NOW()),
            (1,"Poiana Vadului","Morcanesti", NOW(), NOW()),
            (1,"Poiana Vadului","Petelei", NOW(), NOW()),
            (1,"Poiana Vadului","Pastesti", NOW(), NOW()),
            (1,"Poiana Vadului","Stanesti", NOW(), NOW()),
            (1,"Ponor","Dupa Deal", NOW(), NOW()),
            (1,"Ponor","Geogel", NOW(), NOW()),
            (1,"Ponor","Macaresti", NOW(), NOW()),
            (1,"Ponor","Vale In Jos", NOW(), NOW()),
            (1,"Ponor","Valea Bucurului", NOW(), NOW()),
            (1,"Posaga","Cortesti", NOW(), NOW()),
            (1,"Posaga","Incesti", NOW(), NOW()),
            (1,"Posaga","Lunca", NOW(), NOW()),
            (1,"Posaga","Orasti", NOW(), NOW()),
            (1,"Posaga","Posaga de Jos", NOW(), NOW()),
            (1,"Posaga","Posaga de Sus", NOW(), NOW()),
            (1,"Posaga","Sagagea", NOW(), NOW()),
            (1,"Radesti","Leorint", NOW(), NOW()),
            (1,"Radesti","Mescreac", NOW(), NOW()),
            (1,"Radesti","Soimus", NOW(), NOW()),
            (1,"Ramet","Botani", NOW(), NOW()),
            (1,"Ramet","Bradesti", NOW(), NOW()),
            (1,"Ramet","Cheia", NOW(), NOW()),
            (1,"Ramet","Cotorasti", NOW(), NOW()),
            (1,"Ramet","Floresti", NOW(), NOW()),
            (1,"Ramet","Olteni", NOW(), NOW()),
            (1,"Ramet","Valea Fagetului", NOW(), NOW()),
            (1,"Ramet","Valea Inzelului", NOW(), NOW()),
            (1,"Ramet","Valea Manastirii", NOW(), NOW()),
            (1,"Ramet","Valea Poienii", NOW(), NOW()),
            (1,"Ramet","Valea Uzei", NOW(), NOW()),
            (1,"Ramet","Vladesti", NOW(), NOW()),
            (1,"Rametea","Coltesti", NOW(), NOW()),
            (1,"Rosia De Secas","Tau", NOW(), NOW()),
            (1,"Rosia De Secas","Ungurei", NOW(), NOW()),
            (1,"Rosia Montana","Blidesti", NOW(), NOW()),
            (1,"Rosia Montana","Bunta", NOW(), NOW()),
            (1,"Rosia Montana","Balmosesti", NOW(), NOW()),
            (1,"Rosia Montana","Coasta Hentii", NOW(), NOW()),
            (1,"Rosia Montana","Corna", NOW(), NOW()),
            (1,"Rosia Montana","Curaturi", NOW(), NOW()),
            (1,"Rosia Montana","Carpinis", NOW(), NOW()),
            (1,"Rosia Montana","Daroaia", NOW(), NOW()),
            (1,"Rosia Montana","Gura Rosiei", NOW(), NOW()),
            (1,"Rosia Montana","Garda-Barbulesti", NOW(), NOW()),
            (1,"Rosia Montana","Iacobesti", NOW(), NOW()),
            (1,"Rosia Montana","Ignatesti", NOW(), NOW()),
            (1,"Rosia Montana","Vartop", NOW(), NOW()),
            (1,"Rosia Montana","Soal", NOW(), NOW()),
            (1,"Rosia Montana","Tarina", NOW(), NOW()),
            (1,"Salciua","Dealu Caselor", NOW(), NOW()),
            (1,"Salciua","Dumesti", NOW(), NOW()),
            (1,"Salciua","Sub Piatra", NOW(), NOW()),
            (1,"Salciua","Salciua de Jos", NOW(), NOW()),
            (1,"Salciua","Salciua de Sus", NOW(), NOW()),
            (1,"Salciua","Valea Larga", NOW(), NOW()),
            (1,"Salistea","Margineni", NOW(), NOW()),
            (1,"Salistea","Salistea-Deal", NOW(), NOW()),
            (1,"Salistea","Tartaria", NOW(), NOW()),
            (1,"Sancel","Iclod", NOW(), NOW()),
            (1,"Sancel","Panade", NOW(), NOW()),
            (1,"Santimbru","Coslariu", NOW(), NOW()),
            (1,"Santimbru","Dumitra", NOW(), NOW()),
            (1,"Santimbru","Galtiu", NOW(), NOW()),
            (1,"Santimbru","Totoi", NOW(), NOW()),
            (1,"Sasciori","Capalna", NOW(), NOW()),
            (1,"Sasciori","Dumbrava", NOW(), NOW()),
            (1,"Sasciori","Laz", NOW(), NOW()),
            (1,"Sasciori","Loman", NOW(), NOW()),
            (1,"Sasciori","Plesi", NOW(), NOW()),
            (1,"Sasciori","Rachita", NOW(), NOW()),
            (1,"Sasciori","Sebesel", NOW(), NOW()),
            (1,"Sasciori","Tonea", NOW(), NOW()),
            (1,"Scarisoara","Botesti", NOW(), NOW()),
            (1,"Scarisoara","Barlesti", NOW(), NOW()),
            (1,"Scarisoara","Fata-Lazesti", NOW(), NOW()),
            (1,"Scarisoara","Floresti", NOW(), NOW()),
            (1,"Scarisoara","Lespezea", NOW(), NOW()),
            (1,"Scarisoara","Lazesti", NOW(), NOW()),
            (1,"Scarisoara","Matei", NOW(), NOW()),
            (1,"Scarisoara","Negesti", NOW(), NOW()),
            (1,"Scarisoara","Preluca", NOW(), NOW()),
            (1,"Scarisoara","Runc", NOW(), NOW()),
            (1,"Scarisoara","Sfoartea", NOW(), NOW()),
            (1,"Scarisoara","Trancesti", NOW(), NOW()),
            (1,"Scarisoara","Stiuleti", NOW(), NOW()),
            (1,"Sebes","Lancram", NOW(), NOW()),
            (1,"Sebes","Petresti", NOW(), NOW()),
            (1,"Sebes","Rahau", NOW(), NOW()),
            (1,"Sibot","Balomiru de Camp", NOW(), NOW()),
            (1,"Sibot","Bacainti", NOW(), NOW()),
            (1,"Sibot","Saracsau", NOW(), NOW()),
            (1,"Sohodol","Bilanesti", NOW(), NOW()),
            (1,"Sohodol","Bobaresti", NOW(), NOW()),
            (1,"Sohodol","Bradeana", NOW(), NOW()),
            (1,"Sohodol","Burzonesti", NOW(), NOW()),
            (1,"Sohodol","Bazesti", NOW(), NOW()),
            (1,"Sohodol","Deoncesti", NOW(), NOW()),
            (1,"Sohodol","Dilimani", NOW(), NOW()),
            (1,"Sohodol","Furduiesti", NOW(), NOW()),
            (1,"Sohodol","Gura Sohodol", NOW(), NOW()),
            (1,"Sohodol","Hoanca", NOW(), NOW()),
            (1,"Sohodol","Joldisesti", NOW(), NOW()),
            (1,"Sohodol","Lazuri", NOW(), NOW()),
            (1,"Sohodol","Lehesti", NOW(), NOW()),
            (1,"Sohodol","Luminesti", NOW(), NOW()),
            (1,"Sohodol","Medresti", NOW(), NOW()),
            (1,"Sohodol","Moraresti", NOW(), NOW()),
            (1,"Sohodol","Munesti", NOW(), NOW()),
            (1,"Sohodol","Nelegesti", NOW(), NOW()),
            (1,"Sohodol","Nicoresti", NOW(), NOW()),
            (1,"Sohodol","Napaiesti", NOW(), NOW()),
            (1,"Sohodol","Peles", NOW(), NOW()),
            (1,"Sohodol","Poiana", NOW(), NOW()),
            (1,"Sohodol","Robesti", NOW(), NOW()),
            (1,"Sohodol","Sebisesti", NOW(), NOW()),
            (1,"Sohodol","Sicoiesti", NOW(), NOW()),
            (1,"Sohodol","Surdesti", NOW(), NOW()),
            (1,"Sohodol","Toci", NOW(), NOW()),
            (1,"Sohodol","Valea Verde", NOW(), NOW()),
            (1,"Sohodol","Vladosesti", NOW(), NOW()),
            (1,"Sohodol","Simocesti", NOW(), NOW()),
            (1,"Sona","Alecus", NOW(), NOW()),
            (1,"Sona","Biia", NOW(), NOW()),
            (1,"Sona","Doptau", NOW(), NOW()),
            (1,"Sona","Lunca Tarnavei", NOW(), NOW()),
            (1,"Sona","Sanmiclaus", NOW(), NOW()),
            (1,"Sona","Valea Sasului", NOW(), NOW()),
            (1,"Spring","Carpen", NOW(), NOW()),
            (1,"Spring","Carpenii de Sus", NOW(), NOW()),
            (1,"Spring","Cunta", NOW(), NOW()),
            (1,"Spring","Drasov", NOW(), NOW()),
            (1,"Spring","Vingard", NOW(), NOW()),
            (1,"Stremt","Fata Pietrii", NOW(), NOW()),
            (1,"Stremt","Geoagiu de Sus", NOW(), NOW()),
            (1,"Stremt","Geomal", NOW(), NOW()),
            (1,"Sugag","Arti", NOW(), NOW()),
            (1,"Sugag","Barsana", NOW(), NOW()),
            (1,"Sugag","Dobra", NOW(), NOW()),
            (1,"Sugag","Jidostina", NOW(), NOW()),
            (1,"Sugag","Martinie", NOW(), NOW()),
            (1,"Sugag","Tau Bistra", NOW(), NOW()),
            (1,"Teius","Beldiu", NOW(), NOW()),
            (1,"Teius","Coslariu Nou", NOW(), NOW()),
            (1,"Teius","Capud", NOW(), NOW()),
            (1,"Teius","Petelca", NOW(), NOW()),
            (1,"Unirea","Ciugudu de Jos", NOW(), NOW()),
            (1,"Unirea","Ciugudu de Sus", NOW(), NOW()),
            (1,"Unirea","Dumbrava", NOW(), NOW()),
            (1,"Unirea","Inoc", NOW(), NOW()),
            (1,"Unirea","Mahaceni", NOW(), NOW()),
            (1,"Vadu Motilor","Bodesti", NOW(), NOW()),
            (1,"Vadu Motilor","Burzesti", NOW(), NOW()),
            (1,"Vadu Motilor","Dealu Frumos", NOW(), NOW()),
            (1,"Vadu Motilor","Lazesti", NOW(), NOW()),
            (1,"Vadu Motilor","Necsesti", NOW(), NOW()),
            (1,"Vadu Motilor","Poduri-Bricesti", NOW(), NOW()),
            (1,"Vadu Motilor","Popestii de Jos", NOW(), NOW()),
            (1,"Vadu Motilor","Popestii de Sus", NOW(), NOW()),
            (1,"Vadu Motilor","Tomutesti", NOW(), NOW()),
            (1,"Vadu Motilor","Totesti", NOW(), NOW()),
            (1,"Vadu Motilor","Valtori", NOW(), NOW()),
            (1,"Valea Lunga","Faget", NOW(), NOW()),
            (1,"Valea Lunga","Glogovet", NOW(), NOW()),
            (1,"Valea Lunga","Lodroman", NOW(), NOW()),
            (1,"Valea Lunga","Lunca", NOW(), NOW()),
            (1,"Valea Lunga","Tauni", NOW(), NOW()),
            (1,"Vidra","Bobaresti", NOW(), NOW()),
            (1,"Vidra","Bogdanesti", NOW(), NOW()),
            (1,"Vidra","Bordestii Poieni", NOW(), NOW()),
            (1,"Vidra","Bai", NOW(), NOW()),
            (1,"Vidra","Culdesti", NOW(), NOW()),
            (1,"Vidra","Dealu Goiesti", NOW(), NOW()),
            (1,"Vidra","Dos", NOW(), NOW()),
            (1,"Vidra","Dosu Luncii", NOW(), NOW()),
            (1,"Vidra","Dosu Vasesti", NOW(), NOW()),
            (1,"Vidra","Dragoiesti-Lunca", NOW(), NOW()),
            (1,"Vidra","Ficaresti", NOW(), NOW()),
            (1,"Vidra","Gligoresti", NOW(), NOW()),
            (1,"Vidra","Goiesti", NOW(), NOW()),
            (1,"Vidra","Haiducesti", NOW(), NOW()),
            (1,"Vidra","Hoanca", NOW(), NOW()),
            (1,"Vidra","Harasti", NOW(), NOW()),
            (1,"Vidra","Jeflesti", NOW(), NOW()),
            (1,"Vidra","Lunca", NOW(), NOW()),
            (1,"Vidra","Lunca Bisericii", NOW(), NOW()),
            (1,"Vidra","Lunca Goiesti", NOW(), NOW()),
            (1,"Vidra","Lunca Vesesti", NOW(), NOW()),
            (1,"Vidra","Lunca de Jos", NOW(), NOW()),
            (1,"Vidra","Modolesti", NOW(), NOW()),
            (1,"Vidra","Nemesi", NOW(), NOW()),
            (1,"Vidra","Oidesti", NOW(), NOW()),
            (1,"Vidra","Pitarcesti", NOW(), NOW()),
            (1,"Vidra","Plescuta", NOW(), NOW()),
            (1,"Vidra","Poieni", NOW(), NOW()),
            (1,"Vidra","Ponorel", NOW(), NOW()),
            (1,"Vidra","Puiuletesti", NOW(), NOW()),
            (1,"Vidra","Runc", NOW(), NOW()),
            (1,"Vidra","Segaj", NOW(), NOW()),
            (1,"Vidra","Urdes", NOW(), NOW()),
            (1,"Vidra","Valea Morii", NOW(), NOW()),
            (1,"Vidra","Valcesti", NOW(), NOW()),
            (1,"Vidra","Valcaneasa", NOW(), NOW()),
            (1,"Vidra","Vartanesti", NOW(), NOW()),
            (1,"Vidra","Vasesti", NOW(), NOW()),
            (1,"Vintu De Jos","Ciocasu", NOW(), NOW()),
            (1,"Vintu De Jos","Criseni", NOW(), NOW()),
            (1,"Vintu De Jos","Campu Goblii", NOW(), NOW()),
            (1,"Vintu De Jos","Dealu Ferului", NOW(), NOW()),
            (1,"Vintu De Jos","Gura Cutului", NOW(), NOW()),
            (1,"Vintu De Jos","Hategana", NOW(), NOW()),
            (1,"Vintu De Jos","Inuri", NOW(), NOW()),
            (1,"Vintu De Jos","Laz", NOW(), NOW()),
            (1,"Vintu De Jos","Mereteu", NOW(), NOW()),
            (1,"Vintu De Jos","Matacina", NOW(), NOW()),
            (1,"Vintu De Jos","Poienita", NOW(), NOW()),
            (1,"Vintu De Jos","Parau lui Mihai", NOW(), NOW()),
            (1,"Vintu De Jos","Stauini", NOW(), NOW()),
            (1,"Vintu De Jos","Valea Goblii", NOW(), NOW()),
            (1,"Vintu De Jos","Valea Vintului", NOW(), NOW()),
            (1,"Vintu De Jos","Valea lui Mihai", NOW(), NOW()),
            (1,"Vintu De Jos","Vurpar", NOW(), NOW()),
            (1,"Zlatna","Botesti", NOW(), NOW()),
            (1,"Zlatna","Budeni", NOW(), NOW()),
            (1,"Zlatna","Dealu Roatei", NOW(), NOW()),
            (1,"Zlatna","Dobrot", NOW(), NOW()),
            (1,"Zlatna","Dumbrava", NOW(), NOW()),
            (1,"Zlatna","Fenes", NOW(), NOW()),
            (1,"Zlatna","Galati", NOW(), NOW()),
            (1,"Zlatna","Izvoru Ampoiului", NOW(), NOW()),
            (1,"Zlatna","Pirita", NOW(), NOW()),
            (1,"Zlatna","Podu lui Paul", NOW(), NOW()),
            (1,"Zlatna","Parau Gruiului", NOW(), NOW()),
            (1,"Zlatna","Patrangeni", NOW(), NOW()),
            (1,"Zlatna","Runc", NOW(), NOW()),
            (1,"Zlatna","Rusi", NOW(), NOW()),
            (1,"Zlatna","Suseni", NOW(), NOW()),
            (1,"Zlatna","Trampoiele", NOW(), NOW()),
            (1,"Zlatna","Valea Mica", NOW(), NOW()),
            (1,"Zlatna","Valtori", NOW(), NOW());
        ';

        if (config('app.env') !== 'testing') {
            DB::connection()->getPdo()->exec($sql);
        }
    }

    public function down()
    {
        $sql = 'DELETE FROM localities WHERE county_id=1;';
        DB::connection()->getPdo()->exec($sql);
    }
}
