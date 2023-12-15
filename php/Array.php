<?php

$iata= $_GET["iata"]
$aerolineas = array(
    
"iata_code" => "name",
"0B" => "Blue Air",
"0C" => "Catovair",
"0J" => "Premium Jet AG",
"0O" => "STA Travel",
"0P" => "Palau Pacific Airways",
"0V" => "Vietnam Air Services Company",
"0W" => "W Caribbean Costa Rica",
"1A" => "Amadeus",
"1B" => "Abacus",
"1C" => "EDS Information Business",
"1D" => "Raddix Solutions",
"1E" => "Travelsky Technology",
"1F" => "Infini Travel Information",
"1G" => "Travelport Galileo",
"1H" => "Sirena Travel",
"1I" => "Netjets Aviation",
"1J" => "Axess International",
"1K" => "Sutra",
"1L" => "Navitaire Open Skies",
"1M" => "Sirena Jsc",
"1N" => "Navitaire New Skies",
"1O" => "Phoenix Systems Dertours",
"1P" => "Travelport Worldspan",
"1Q" => "Joint Stock Company Ital",
"1R" => "Bird Information Systems",
"1S" => "Sabre",
"1T" => "East Line",
"1U" => "ITA Software",
"1V" => "Galileo International",
"1W" => "Sabre",
"1X" => "Branson Air Express",
"1Y" => "Electronic Data Systems (EDS)",
"1Z" => "Fantasia Info Network",
"2A" => "Deutsche Bahn",
"2B" => "Albawings",
"2C" => "SNCF",
"2D" => "Eastern Airlines",
"2E" => "Smokey Bay Air",
"2F" => "Fair Aviation",
"2G" => "Angara Airlines",
"2H" => "Thalys",
"2I" => "Star Perú",
"2J" => "Air Burkina",
"2K" => "Aerolineas Galapagos",
"2L" => "Helvetic Airways",
"2M" => "Maya Island Air",
"2N" => "Nextjet",
"2O" => "Redemption",
"2P" => "PAL Express",
"2Q" => "Air Cargo Carriers",
"2R" => "VIA Rail Canada",
"2S" => "Air Carnival",
"2T" => "Timbis Air",
"2U" => "Ero Sun d'Or",
"2V" => "Amtrak",
"2Z" => "Passaredo Transportes",
"3A" => "Chu Kong Passenger Transport",
"3B" => "Job Air",
"3C" => "Calima Aviacion",
"3D" => "Dokasch",
"3E" => "Multi Aero",
"3F" => "Pacific Airways",
"3G" => "AsiaCargo Express",
"3H" => "Air Inuit",
"3I" => "Pison Airways Ltd",
"3J" => "Jubba Airways Kenya",
"3K" => "Jetstar Asia Airways",
"3M" => "Silver Airways",
"3N" => "Air Urga",
"3O" => "Air Arabia Maroc",
"3Q" => "Carib Aviation Limited",
"3R" => "Divi Divi Air",
"3S" => "Air Antilles Express",
"3T" => "Tarco Air",
"3U" => "Sichuan Airlines",
"3V" => "Tnt Airways",
"3W" => "Malawian Airlines",
"3X" => "Premier Trans Aire",
"3Z" => "Travel Service Polska",
"4A" => "Aero Transporte",
"4B" => "Aviastar TU",
"4C" => "LATAM Colombia",
"4D" => "Air Sinai",
"4E" => "Tanana Air Service",
"4F" => "Freedom Airline Express",
"4G" => "Gazpromavia",
"4H" => "United Airways Bangladesh",
"4I" => "Ihy Izmir Havayollari",
"4J" => "Flydamas Airlines",
"4K" => "Kenn Borek Air",
"4L" => "Palau National Airlines",
"4M" => "LATAM Argentina",
"4N" => "Air North",
"4O" => "Interjet",
"4P" => "Travel Air",
"4Q" => "Safi Airways",
"4R" => "Star East Airline",
"4S" => "Star Airways",
"4T" => "Belair Airlines",
"4U" => "Germanwings",
"4V" => "Lacbravo",
"4W" => "Warbelows Air Ventures",
"4X" => "Atlantic Express Airline",
"4Y" => "Flight Alaska",
"4Z" => "Airlink",
"5B" => "Bassaka Air",
"5C" => "Nature Air",
"5D" => "Aeroméxico Connect",
"5E" => "East Coast Flight Services",
"5F" => "Fly One",
"5H" => "Five Fourty Aviation",
"5I" => "ALSA",
"5J" => "Cebu Pacific",
"5K" => "Hi Fly",
"5L" => "Fly Salone",
"5M" => "Montserrat Airways",
"5N" => "Jsc Nordavia",
"5O" => "ASL Airlines France",
"5P" => "PAL Airlines",
"5R" => "RUTACA Airlines",
"5S" => "Servicios Aereos Profesionales",
"5T" => "Canadian North",
"5U" => "Transportes Aéreos Guatemaltecos",
"5V" => "Everts",
"5W" => "WESTBahn",
"5X" => "UPS Airlines",
"5Y" => "Atlas Air",
"5Z" => "CemAir",
"6A" => "Armenia Airways",
"6B" => "Tuifly Nordic",
"6C" => "Air Timor",
"6D" => "Travel Service Slovensko",
"6E" => "IndiGo",
"6F" => "Primera Air Nordic",
"6G" => "Executive Express Aviation",
"6H" => "Israir Airlines",
"6I" => "Air Alsie",
"6J" => "Solaseed Air",
"6K" => "Songbird Airways",
"6L" => "Aklak Air",
"6M" => "Air Minas Linhas Aereas",
"6N" => "Niger Airlines",
"6O" => "Orbest",
"6Q" => "Cham Wings Airlines",
"6R" => "ALROSA",
"6S" => "Saudi Gulf Airlines",
"6T" => "Air Mandalay",
"6V" => "Avanza",
"6W" => "Saratov Airlines",
"6Y" => "SmartLynx Airlines",
"6Z" => "Eurasia Air",
"7A" => "Express Air Cargo",
"7B" => "Fly Blue Crane",
"7C" => "Jeju Air",
"7D" => "MGC Aviation",
"7E" => "Sylt Air",
"7F" => "First Air",
"7G" => "StarFlyer",
"7H" => "Ravn Alaska",
"7I" => "Insel Air International",
"7J" => "Tajik Air",
"7K" => "Kogalymavia Airlines",
"7L" => "Aero Caribbean",
"7M" => "Mayair",
"7N" => "PAWA Dominicana",
"7O" => "Travel Service Hungary",
"7P" => "Air Panama",
"7Q" => "Elite Airways",
"7R" => "RusLine",
"7S" => "Ryan Air Services",
"7T" => "Trenitalia",
"7U" => "Alpha Air Transport",
"7V" => "Federal Airlines",
"7W" => "Wind Rose Aviation",
"7Y" => "Mann Yadanarpon Airlines",
"7Z" => "Halcyon Air Cabo Verde",
"8A" => "Panama Airways",
"8B" => "TransNusa Air Services",
"8C" => "Air Transport International",
"8D" => "Servant Air",
"8E" => "Bering Air",
"8F" => "STP Airways",
"8G" => "Mid Africa Aviation",
"8H" => "BH Air",
"8I" => "Insel Air Aruba",
"8J" => "Línea Aerea Eco Jet",
"8L" => "Lucky Air",
"8M" => "Myanmar Airways International",
"8N" => "Regional Air Services",
"8P" => "Pacific Coastal Airlines",
"8Q" => "Onur Air",
"8R" => "Sol Líneas Aéreas",
"8S" => "Shun Tak China",
"8T" => "Air Tindi",
"8U" => "Afriqiyah Airways",
"8V" => "Astral Aviation",
"8W" => "Fly All Ways Airlines",
"8Y" => "Pan Pacific Airlines",
"8Z" => "Congo Airways",
"9A" => "Aladia Airlines",
"9B" => "AccesRail",
"9C" => "Spring Airlines",
"9E" => "Endeavor Air",
"9F" => "Eurostar",
"9G" => "9G Rail",
"9H" => "Chang An Airlines",
"9I" => "Air India Regional",
"9J" => "Dana Air",
"9K" => "Cape Air",
"9L" => "West Link Airways",
"9M" => "Central Mountain Air",
"9N" => "Tropic Air",
"9P" => "Air Arabia Jordan",
"9Q" => "Caicos Express Airways",
"9R" => "SATENA",
"9S" => "Southern Air",
"9T" => "MyCargo Airlines",
"9U" => "Air Moldova",
"9V" => "Avior Airlines",
"9W" => "Jet Airways",
"9X" => "Southern Airways Express",
"A0" => "Macair Jet",
"A1" => "G Switch Works",
"A2" => "Astra Airlines",
"A3" => "Aegean Airlines",
"A4" => "Azimuth",
"A5" => "HOP!",
"A6" => "Yunnan Hongtu Airline",
"A7" => "Aéreo Calafia",
"A8" => "Aerolink Uganda",
"A9" => "Georgian Airways",
"AA" => "American Airlines",
"AC" => "Air Canada",
"AD" => "Azul Brazilian Airlines",
"AE" => "Mandarin Airlines",
"AF" => "Air France",
"AG" => "Aruba Airlines",
"AH" => "Air Algerie",
"AI" => "Air India",
"AJ" => "Aztec Worldwide Airlines",
"AK" => "AirAsia",
"AL" => "Air Leisure",
"AM" => "AeroMexico",
"AN" => "HOP Airlinair",
"AP" => "AlbaStar",
"AQ" => "9 Air",
"AR" => "Aerolíneas Argentinas",
"AS" => "Alaska Airlines",
"AT" => "Royal Air Maroc",
"AU" => "Austral Líneas Aéreas",
"AV" => "Avianca",
"AW" => "Africa World Airlines",
"AX" => "Trans States Airlines",
"AY" => "Finnair",
"AZ" => "Alitalia",
"B0" => "La Compagnie",
"B1" => "Cions Software",
"B2" => "Belavia",
"B3" => "Bhutan Airlines",
"B4" => "Zanair",
"B5" => "Fly-SAX",
"B6" => "JetBlue",
"B7" => "Uni Airways",
"B8" => "Eritrean Airlines",
"B9" => "Iran Air Tours",
"BA" => "British Airways",
"BB" => "Seaborne Airlines",
"BC" => "Skymark Airlines",
"BD" => "Cambodia Bayon Airlines",
"BE" => "Flybe",
"BF" => "French Bee",
"BG" => "Biman Bangladesh Airline",
"BH" => "Hawkair",
"BI" => "Royal Brunei",
"BJ" => "Nouvelair",
"BK" => "Okay Airways",
"BL" => "Jetstar Pacific Airlines",
"BM" => "bmi regional",
"BN" => "Bahrain Air",
"BO" => "BB Airways",
"BP" => "Air Botswana",
"BR" => "EVA Air",
"BS" => "US-Bangla Airlines",
"BT" => "airBaltic",
"BU" => "Compagnie Africaine d'Aviation",
"BV" => "Blue Panorama Airlines",
"BW" => "Caribbean Airlines",
"BX" => "Air Busan",
"BY" => "Thomson Airways",
"BZ" => "Bluebird Airways",
"C0" => "Centralwings",
"C1" => "Tectimes Sudamerica",
"C2" => "Ceiba Intercontinental",
"C3" => "Trade Air",
"C4" => "Alma De Mexico",
"C5" => "CommutAir",
"C6" => "Canjet Airlines",
"C7" => "Cinnamon Air",
"C8" => "Cronos Airlines",
"C9" => "Skywise",
"CA" => "Air China",
"CC" => "CM Airlines",
"CD" => "Corendon Dutch Airlines",
"CE" => "Chalair Aviation",
"CF" => "China Postal Airlines",
"CG" => "PNG Air",
"CH" => "Bemidji Airlines",
"CI" => "China Airlines",
"CJ" => "BA CityFlyer",
"CK" => "China Cargo Airlines",
"CL" => "Lufthansa CityLine",
"CM" => "Copa Airlines",
"CN" => "Grand China Air",
"CO" => "Cobalt Air",
"CP" => "Compass Airlines",
"CQ" => "Coastal Travels",
"CR" => "OAG Worldwide",
"CS" => "Comlux Aruba",
"CT" => "Alitalia CityLiner",
"CU" => "Cubana De Aviacion",
"CV" => "Cargolux",
"CX" => "Cathay Pacific",
"CY" => "Charlie Airlines",
"CZ" => "China Southern Airlines",
"D0" => "DHL Air UK",
"D2" => "Severstal Air Company",
"D3" => "Daallo Airlines",
"D4" => "DART Ltd",
"D6" => "Interair",
"D7" => "AirAsia X",
"D8" => "Norwegian Air International",
"D9" => "Donavia",
"DA" => "Air Georgia",
"DB" => "HOP Brit Air",
"DC" => "Braathens Regional",
"DD" => "Nok Air",
"DE" => "Condor",
"DF" => "Condor Berlin",
"DG" => "Cebgo",
"DH" => "Douniah Airlines",
"DI" => "Norwegian Air UK",
"DJ" => "AirAsia Japan",
"DK" => "Thomas Cook Airlines",
"DL" => "Delta Air Lines",
"DM" => "Asian Air",
"DN" => "Norwegian Air Argentina",
"DO" => "Discovery Airways",
"DP" => "Pobeda",
"DQ" => "Delta Connection",
"DR" => "Ruili Airlines",
"DS" => "easyJet Switzerland",
"DT" => "Taag",
"DU" => "Norwegian Long Haul",
"DV" => "SCAT Airlines",
"DW" => "Great Dane Airlines",
"DX" => "Danish Air Transport",
"DY" => "Norwegian Air Shuttle (NAS)",
"DZ" => "Donghai Airlines",
"E2" => "Eurowings Europe",
"E3" => "New Gen Airways",
"E4" => "Enter Air",
"E5" => "Air Arabia Egypt",
"E6" => "Bringer Air Cargo",
"E7" => "Equaflight Service",
"E8" => "City Airways",
"E9" => "Evelop Airlines",
"EB" => "Wamos Air",
"EC" => "OpenSkies",
"ED" => "Air Explore",
"EE" => "Nordica",
"EF" => "Fly CamInter",
"EG" => "East Air",
"EH" => "ANA Wings",
"EI" => "Aer Lingus",
"EJ" => "New England Airlines",
"EK" => "Emirates",
"EL" => "Ellinair",
"EM" => "Aero Benin",
"EN" => "Air Dolomiti",
"EO" => "Air Go Egypt",
"EP" => "Iran Aseman Airlines",
"EQ" => "TAME",
"ER" => "SereneAir",
"ES" => "DHL International Aviation ME",
"ET" => "Ethiopian Airlines",
"EU" => "Chengdu Airlines",
"EV" => "ExpressJet Airlines",
"EW" => "Eurowings",
"EY" => "Etihad Airways",
"EZ" => "Sun Air of Scandinavia",
"F1" => "Farelogix",
"F2" => "Safarilink Aviation",
"F3" => "Flyadeal",
"F4" => "Air Flamenco",
"F7" => "Etihad Regional",
"F8" => "Flair Airlines",
"F9" => "Frontier Airlines",
"FA" => "Safair",
"FB" => "Bulgaria Air",
"FC" => "Fly Corporate",
"FD" => "Thai AirAsia",
"FE" => "Far Eastern Air Transport",
"FG" => "Ariana Afghan Airlines",
"FH" => "Freebird Airlines",
"FI" => "Icelandair",
"FJ" => "Fiji Airways",
"FK" => "Kelowna Flightcraft Air Charter",
"FL" => "Airtran Airways",
"FM" => "Shanghai Airlines",
"FN" => "Fastjet",
"FO" => "Felix Airways",
"FP" => "Pelican Airlines",
"FR" => "Ryanair",
"FT" => "FlyEgypt",
"FU" => "Fuzhou Airlines",
"FV" => "Rossiya",
"FW" => "Ibex Airlines",
"FX" => "Fedex",
"FY" => "Flyfirefly",
"FZ" => "flydubai",
"G2" => "Galeyr Airline",
"G3" => "Gol Transportes Aéreos",
"G4" => "Allegiant Air",
"G5" => "China Express Airlines",
"G6" => "Denim Air",
"G7" => "GoJet Airlines",
"G8" => "GoAir",
"G9" => "Air Arabia",
"GA" => "Garuda Indonesia",
"GB" => "ABX Air",
"GC" => "Global Feeder Services",
"GE" => "TransAsia Airways",
"GF" => "Gulf Air",
"GG" => "Sky Lease Cargo",
"GH" => "Globus",
"GI" => "Itek Air",
"GJ" => "Zhejiang Loong Airlines",
"GK" => "Jetstar Japan",
"GL" => "Air Greenland",
"GM" => "Germania Flug",
"GO" => "Go",
"GP" => "APG Airlines",
"GQ" => "Sky Express",
"GR" => "Aurigny Air Services",
"GS" => "Tianjin Airlines",
"GT" => "Air Guilin",
"GU" => "Aviateca",
"GV" => "Grant Aviation",
"GW" => "SkyGreece Airlines",
"GX" => "Guangxi Beibu Gulf Airlines",
"GY" => "Colorful Guizhou Airlines",
"GZ" => "Air Rarotonga",
"H1" => "Hahn Air Systems",
"H2" => "Sky Airline",
"H3" => "Harbour Air",
"H4" => "Aero4M",
"H6" => "Bulgarian Air Charter",
"H7" => "Eagle Air",
"H8" => "Chilejet",
"H9" => "Himalaya Airlines",
"HA" => "Hawaiian Airlines",
"HB" => "Asia Atlantic Airlines",
"HC" => "Air Senegal",
"HD" => "Air Do",
"HE" => "LGW Luftfahrtges Walter",
"HF" => "Air Cote D Ivoire",
"HH" => "Taban Airlines",
"HI" => "Papillon Airways",
"HJ" => "Hellas Jet",
"HK" => "Skippers Aviation",
"HM" => "Air Seychelles",
"HN" => "Afghan Jet International",
"HO" => "Juneyao Airlines",
"HP" => "Amapola Flyg",
"HQ" => "Thomas Cook Airlines Belgium",
"HR" => "Hahn Air",
"HS" => "Heli Sécurité",
"HU" => "Hainan Airlines",
"HV" => "Transavia Airlines",
"HW" => "North Wright Air",
"HX" => "Hong Kong Airlines",
"HY" => "Uzbekistan Airways",
"HZ" => "Aurora Airlines",
"I1" => "CTS Viaggi",
"I2" => "Iberia Express",
"I3" => "ATA Airlines",
"I4" => "Scott Air",
"I5" => "AirAsia India",
"I6" => "Air Indus",
"I7" => "Int'Air Îles",
"I8" => "Izhavia",
"IA" => "Iraqi Airways",
"IB" => "Iberia",
"IC" => "Nacil Indian Airline",
"ID" => "Batik Air",
"IE" => "Solomon Airlines",
"IF" => "FlyBaghdad",
"IG" => "Air Italy",
"IH" => "Jsc Irtysh Air",
"II" => "IBC Airways",
"IJ" => "Spring Airlines Japan",
"IK" => "Air Kiribati",
"IL" => "Trigana Air Service",
"IM" => "Mint Líneas Aéreas",
"IN" => "NAM Air",
"IO" => "IrAero",
"IP" => "Iberworld Airlines",
"IQ" => "Qazaq Air",
"IR" => "Iran Air",
"IS" => "AIS Airlines",
"IT" => "Tigerair Taiwan",
"IU" => "Hevilift",
"IV" => "Air Djibouti",
"IW" => "Wings Air",
"IX" => "Air India Express",
"IY" => "Yemen Airways",
"IZ" => "Arkia",
"J0" => "Jetlink Express",
"J1" => "OntJet",
"J2" => "Azerbaijan Airlines",
"J3" => "Northwestern Air Lease",
"J4" => "Badr Airlines",
"J5" => "Alaska Seaplane Service",
"J6" => "Jet-Ops",
"J7" => "Afrijet Business Service",
"J8" => "Berjaya Air",
"J9" => "Jazeera Airways",
"JA" => "Jetsmart",
"JB" => "Helijet International",
"JC" => "Japan Air Commuter",
"JD" => "Beijing Capital Airlines",
"JE" => "Mango",
"JF" => "Jet Asia Airways",
"JG" => "Jetgo Australia",
"JH" => "Fuji Dream Airlines",
"JI" => "Eastern Caribbean Airlines",
"JJ" => "LATAM Brasil",
"JL" => "Japan Airlines",
"JM" => "Jambojet",
"JO" => "Jet Time",
"JQ" => "Jetstar",
"JR" => "Joy Air",
"JS" => "Air Koryo",
"JT" => "Lion Air",
"JU" => "Air Serbia",
"JV" => "Bearskin Airlines",
"JW" => "Vanilla Air",
"JX" => "DAC East Africa",
"JY" => "InterCaribbean Airways",
"K3" => "Taquan Air Services",
"K4" => "ALS",
"K5" => "SeaPort",
"K6" => "Cambodia Angkor Air",
"K7" => "Air KBZ",
"K8" => "Kan Air",
"K9" => "Kalitta Charters",
"KA" => "Cathay Dragon",
"KB" => "Druk Air",
"KC" => "Air Astana",
"KD" => "Western Global Airlines",
"KE" => "Korean Air",
"KF" => "Air Belgium",
"KG" => "Aerogaviota",
"KH" => "Aloha Air Cargo",
"KI" => "KrasAvia",
"KJ" => "Air Incheon",
"KK" => "AtlasGlobal",
"KL" => "KLM",
"KM" => "Air Malta",
"KN" => "China United Airlines",
"KO" => "Komiaviatrans",
"KP" => "ASKY Airlines",
"KQ" => "Kenya Airways",
"KR" => "Air Bishkek",
"KS" => "Penair",
"KT" => "Fly Kiss",
"KU" => "Kuwait Airways",
"KV" => "Sky Regional Airlines",
"KW" => "Kharkiv Airlines",
"KX" => "Cayman Airways",
"KY" => "Kunming Airlines",
"KZ" => "Nippon Cargo Airlines",
"L1" => "E Savtravel",
"L3" => "Lynx Aviation",
"L4" => "Air Service Liege (ASL)",
"L5" => "Atlantique Air Assistance",
"L6" => "Mauritanian Airlines Int",
"L7" => "Lugansk Airlines",
"L8" => "Afric Aviation",
"L9" => "Belle Air Europe",
"LA" => "LATAM Chile",
"LB" => "Air Costa",
"LC" => "ECAir",
"LF" => "Corporate Flight Management",
"LG" => "Luxair",
"LH" => "Lufthansa Cargo",
"LI" => "LIAT",
"LJ" => "Jin Air",
"LK" => "Lao Skyway",
"LL" => "Miami Air International",
"LM" => "Loganair",
"LN" => "Libyan Airlines",
"LO" => "LOT Polish Airlines",
"LP" => "LATAM Perú",
"LQ" => "Lanmei Airlines",
"LR" => "Avianca Costa Rica",
"LS" => "Jet2.com",
"LT" => "Longjiang Airlines",
"LU" => "LAN Express",
"LV" => "Level",
"LW" => "Pacific Wings",
"LX" => "Swiss International Air Lines",
"LY" => "El Al",
"LZ" => "Swiss Global Air Lines",
"M0" => "Aero Mongolia",
"M2" => "MHS Aviation",
"M3" => "Air Norway",
"M4" => "Mistral Air",
"M5" => "Kenmore Air",
"M6" => "Amerijet International",
"M8" => "SKYJET Airlines",
"M9" => "Motor Sich Jsc",
"MB" => "Mng Airlines Cargo",
"MC" => "Air Mobility Command",
"MD" => "Air Madagascar",
"ME" => "Middle East Airlines",
"MF" => "XiamenAir",
"MG" => "Miami Air Lease",
"MH" => "Malaysia Airlines",
"MI" => "SilkAir",
"MJ" => "Mihin Lanka",
"MK" => "Air Mauritius",
"MM" => "Peach Aviation",
"MN" => "Comair",
"MO" => "Calm Air International",
"MP" => "Martinair",
"MQ" => "Envoy Air",
"MR" => "Hunnu Air",
"MS" => "EgyptAir",
"MT" => "Thomas Cook Airlines",
"MU" => "China Eastern Airlines",
"MW" => "Mokulele Airlines",
"MY" => "MASwings",
"MZ" => "Amakusa Airlines",
"N2" => "Dagestan Airlines",
"N3" => "Aerolineas Mas",
"N4" => "Nord Wind",
"N5" => "Nolinor Aviation",
"N6" => "Nomad Aviation",
"N7" => "Nordic Regional Airlines",
"N8" => "National Airlines",
"N9" => "Novair",
"NA" => "Nesma Airlines",
"NB" => "Skypower Express Airways",
"NC" => "Cobham Aviation Services Australia",
"ND" => "FMI Air",
"NE" => "Nesma Airlines",
"NF" => "Air Vanuatu",
"NH" => "All Nippon Airways",
"NI" => "Portugalia",
"NJ" => "Niger Airways",
"NK" => "Spirit Airlines",
"NL" => "Shaheen Air",
"NM" => "Manx",
"NN" => "Vim Airlines",
"NO" => "Neos",
"NP" => "Nile Air",
"NQ" => "Air Japan",
"NR" => "Manta Air",
"NS" => "Hebei Airlines",
"NT" => "Binter Canarias",
"NU" => "Japan Transocean Air",
"NV" => "Iranian Naft Airline",
"NW" => "Northwest Airlines",
"NX" => "Air Macau",
"NY" => "Air Iceland",
"NZ" => "Air New Zealand",
"O2" => "Jet Air",
"O4" => "Antrak Air",
"O5" => "Comores Aviation International",
"O7" => "Orenburg Region Airlines",
"O9" => "Nova Airways",
"OA" => "Olympic Air",
"OB" => "Boliviana de Aviación (BoA)",
"OC" => "Oriental Air Bridge",
"OD" => "Malindo Airways",
"OE" => "Lauda",
"OF" => "Overland Airways",
"OG" => "Air Freight NZ",
"OH" => "PSA Airlines",
"OI" => "Hinterland Aviation",
"OJ" => "Fly Jamaica Airways",
"OK" => "Czech Airlines",
"OL" => "Polynesian Airlines",
"OM" => "Miat Mongolian Airlines",
"ON" => "Nauru Airlines",
"OO" => "SkyWest Airlines",
"OP" => "Air Pegasus",
"OQ" => "Chongqing Airlines",
"OR" => "TUI Airlines Netherlands",
"OS" => "Austrian Airlines",
"OU" => "Croatia Airlines",
"OW" => "Skyward Express",
"OX" => "Orient Thai Airlines",
"OY" => "Andes Líneas Aéreas",
"OZ" => "Asiana Airlines",
"P0" => "Proflight Commuter",
"P1" => "Publiccharters Com",
"P2" => "Airkenya Express",
"P3" => "CargoLogicAir",
"P4" => "Aerolineas Sosa",
"P5" => "Copa Airlines Colombia",
"P6" => "Pascan Aviation",
"P8" => "SprintAir",
"P9" => "Peruvian Airlines",
"PA" => "Airblue",
"PB" => "Provincial Airlines",
"PC" => "Pegasus Airlines",
"PD" => "Porter Airlines",
"PE" => "Peoples Viennaline",
"PF" => "Primera Air Scandinavia",
"PG" => "Bangkok Airways",
"PH" => "Transavia Denmark",
"PI" => "Polar Airlines",
"PJ" => "Air Saint Pierre",
"PK" => "Pakistan International Airlines (PIA)",
"PL" => "Southern Air Charter",
"PM" => "Canaryfly",
"PN" => "China West Air",
"PO" => "Polar Air Cargo",
"PP" => "Jet Aviation Business",
"PQ" => "AirAsia Philippines",
"PR" => "Philippine Airlines",
"PS" => "Ukraine International Airlines",
"PT" => "Piedmont Airlines",
"PU" => "Plus Ultra Líneas Aéreas",
"PV" => "Saint Barth Commuter",
"PW" => "Precision Air",
"PX" => "Air Niugini",
"PY" => "Surinam Airways",
"PZ" => "LATAM Paraguay",
"Q0" => "Quebecair Express",
"Q1" => "Sqiva Sistem",
"Q2" => "Maldivian",
"Q3" => "Anguilla Air Services",
"Q4" => "Aviation Starlink",
"Q5" => "Forty Mile Air",
"Q6" => "Skytrans Regional",
"Q7" => "Sky Bahamas Airlines",
"Q8" => "Trans Air Congo",
"Q9" => "Airliaison",
"QA" => "Cimber",
"QB" => "Qeshm Air",
"QC" => "Camair-Co",
"QD" => "Dobrolet Airlines",
"QE" => "Fars Qeshm Airlines",
"QF" => "Qantas",
"QG" => "Citilink Indonesia",
"QH" => "Air Kyrgyzstan",
"QJ" => "Latpass Airlines",
"QK" => "Jazz Aviation",
"QL" => "Linea Aerea De Servicio",
"QM" => "Monacair",
"QO" => "Quantum Air",
"QP" => "Air Kenya Aviation",
"QQ" => "Alliance Airlines",
"QR" => "Qatar Airways",
"QS" => "Smartwings",
"QT" => "Tampa Cargo",
"QU" => "UTair Ukraine",
"QV" => "Lao Airlines",
"QW" => "Qingdao Airlines",
"QX" => "Horizon Air",
"QY" => "European Air Transport",
"QZ" => "Indonesia AirAsia",
"R0" => "MS Royal Airlines",
"R3" => "Yakutia Airlines",
"R4" => "Real Tonga",
"R5" => "Jordan Aviation",
"R6" => "DOT LT",
"R7" => "Aserca",
"R8" => "Kyrgyzstan Airlines",
"R9" => "TAF Linhas Aereas",
"RA" => "Nepal Airlines",
"RB" => "Syrian Arab Airlines",
"RC" => "Atlantic Airways",
"RE" => "Stobart Air",
"RF" => "Ord Air Charter",
"RG" => "Rotana Jet",
"RH" => "Robin Hood Aviation",
"RI" => "Air Costa Rica",
"RJ" => "Royal Jordanian",
"RK" => "Region Airline",
"RL" => "Royal Flight",
"RM" => "Aircompany Armenia",
"RN" => "Rayani Air",
"RO" => "TAROM",
"RP" => "Chautauqua Airlines",
"RQ" => "Kam Air",
"RR" => "Royal Air Force",
"RS" => "Air Seoul",
"RT" => "Rainbow Airlines",
"RU" => "Air Bridge Cargo",
"RV" => "Air Canada Rouge",
"RW" => "Royal Air Charter Service",
"RX" => "Regent Airways",
"RY" => "Jiangxi Air",
"RZ" => "SANSA Airlines",
"S0" => "Slok Air International",
"S1" => "Lufthansa Systems",
"S2" => "Jet Lite",
"S3" => "SBA Airlines",
"S4" => "SATA International",
"S5" => "Shuttle America",
"S6" => "Sunrise Airways",
"S7" => "S7 Airlines",
"S8" => "Sounds Air",
"S9" => "Starbow",
"SA" => "South African Airways",
"SB" => "Aircalin",
"SC" => "Shandong Airlines",
"SD" => "Sudan Airways",
"SF" => "Tassili Airlines",
"SG" => "SpiceJet",
"SH" => "Sharp Aviation",
"SI" => "Blue Islands",
"SJ" => "Sriwijaya Air",
"SK" => "Scandinavian Airlines",
"SL" => "Thai Lion Air",
"SM" => "Air Cairo",
"SN" => "Brussels Airlines",
"SO" => "Apex Airline",
"SP" => "SATA Air Açores",
"SQ" => "Singapore Airlines",
"SS" => "Corsair",
"ST" => "Germania",
"SU" => "Aeroflot",
"SV" => "Saudia",
"SW" => "Air Namibia",
"SX" => "SkyWork Airlines",
"SY" => "Sun Country",
"SZ" => "Somon Air",
"T0" => "Avianca Perú",
"T1" => "Tik Systems",
"T2" => "Fly Art",
"T3" => "Eastern Airways",
"T4" => "Trip",
"T5" => "Turkmenistan Airlines",
"T6" => "ITI Air",
"T7" => "Twin Jet",
"T9" => "Aviator Aviation",
"TA" => "Avianca El Salvador",
"TB" => "TUIfly Belgium",
"TC" => "Air Tanzania",
"TD" => "Atlantis European Airways",
"TE" => "Sky Taxi",
"TF" => "BRA",
"TG" => "Thai Airways",
"TH" => "Raya Airways",
"TI" => "Tailwind Hava Yollari As",
"TJ" => "Tradewind Aviation",
"TK" => "Turkish Airlines",
"TL" => "Airnorth",
"TM" => "Lam Mozambique",
"TN" => "Air Tahiti Nui",
"TO" => "Transavia France",
"TP" => "TAP Portugal",
"TQ" => "Tandem Aero",
"TR" => "Tigerair",
"TS" => "Air Transat",
"TT" => "Tigerair Australia",
"TU" => "Tunisair",
"TV" => "Tibet Airlines",
"TW" => "T'way Air",
"TX" => "Air Caraibes",
"TY" => "Air Caledonie",
"TZ" => "Scoot",
"U1" => "Videcom International",
"U2" => "easyJet",
"U3" => "Avies",
"U4" => "Buddha Air",
"U5" => "Karinou Airlines",
"U6" => "Ural Airlines",
"U7" => "Air Uganda",
"U8" => "Tus Airways",
"U9" => "Tatarstan Air",
"UA" => "United Airlines",
"UB" => "Myanmar National Airlines",
"UC" => "LAN Cargo",
"UD" => "Hex Air",
"UE" => "Nasair",
"UF" => "Um Air",
"UG" => "Tunisair Express",
"UH" => "AtlasJet Ukraine",
"UI" => "Auric Air Services",
"UJ" => "AlMasria Universal Airlines",
"UK" => "Vistara",
"UL" => "SriLankan Airlines",
"UM" => "Air Zimbabwe",
"UN" => "Transaero Airlines",
"UO" => "Hong Kong Express Airways",
"UP" => "Bahamasair",
"UQ" => "Business Aviation Centre",
"UR" => "Uganda Airlines",
"US" => "US Airways",
"UT" => "UTair Aviation",
"UU" => "Air Austral",
"UV" => "Helicopteros Del Sureste",
"UX" => "Air Europa",
"UY" => "Sky Prime Charter",
"UZ" => "Buraq Air",
"V0" => "Conviasa",
"V1" => "IBS Software Services Americas",
"V2" => "Vision Airlines",
"V3" => "Carpatair",
"V4" => "Vieques Air Link",
"V5" => "Aerovias DAP",
"V6" => "Air Link",
"V7" => "Volotea",
"V8" => "Iliamna Air",
"V9" => "Van Air Europe",
"VA" => "Virgin Australia",
"VB" => "Aeroenlaces Nacionales",
"VC" => "ViaAir",
"VD" => "Hennan Airlines",
"VE" => "EasyFly",
"VG" => "VLM Airlines",
"VH" => "Viva Air Colombia",
"VI" => "Volga Dnepr Airline",
"VJ" => "VietJet Air",
"VK" => "Anisec Luftfahrt",
"VL" => "Air VIA",
"VN" => "Vietnam Airlines",
"VO" => "VLM Airlines Slovenia",
"VP" => "Villa Air",
"VQ" => "Novoair",
"VR" => "Tacv Cabo Verde Airlines",
"VS" => "Virgin Atlantic",
"VT" => "Air Tahiti",
"VU" => "Vuelos Economicos",
"VV" => "Viva Airlines Peru",
"VW" => "Aeromar",
"VX" => "Virgin America",
"VY" => "Vueling",
"VZ" => "Thai Vietjet Air",
"W1" => "WorldTicket",
"W2" => "Flexflight",
"W3" => "Arik Air",
"W5" => "Mahan Airlines",
"W6" => "Wizz Air",
"W7" => "Sayakhat Airlines",
"W8" => "Caribbean Winds Airlines",
"W9" => "Air Bagan",
"WA" => "KLM Cityhopper",
"WB" => "Rwandair",
"WC" => "Islena Airlines",
"WD" => "Amsterdam Airlines Bv",
"WE" => "Thai Smile Airways",
"WF" => "Widerøe",
"WG" => "Sunwing Airlines",
"WH" => "West African Airlines",
"WI" => "White Airways",
"WJ" => "Air Labrador",
"WK" => "Edelweiss Air",
"WL" => "European Coastal Airlines",
"WM" => "Windward Island Airways",
"WN" => "Southwest Airlines",
"WO" => "World Airways",
"WP" => "Island Air",
"WQ" => "Romavia",
"WR" => "WestJet Encore",
"WS" => "WestJet",
"WT" => "Swiftair",
"WV" => "Aero VIP",
"WW" => "Wow Air",
"WX" => "CityJet",
"WY" => "Oman Air",
"WZ" => "Red Wings Airlines",
"X3" => "TUIfly",
"X4" => "Air Excursions",
"X6" => "Airlines Reporting Corp",
"X7" => "Exec Air",
"X9" => "Avion Express",
"XB" => "IATA",
"XC" => "Corendon Airlines",
"XD" => "Scheduled Airlines Traffic Offices",
"XE" => "Delux Public Charter",
"XF" => "Vladivostok Air",
"XG" => "Sun Express Germany",
"XH" => "Non Iata Codeshare Carrier",
"XJ" => "Thai AirAsia X",
"XK" => "Air Corsica",
"XL" => "LATAM Ecuador",
"XM" => "Zimex Aviation",
"XN" => "XpressAir",
"XO" => "Seair",
"XP" => "Xtra Airways",
"XQ" => "SunExpress",
"XS" => "SITA",
"XT" => "Indonesia AirAsia X",
"XU" => "African Express Airways",
"XW" => "NokScoot",
"XY" => "Flynas",
"XZ" => "South African Express",
"Y0" => "Yellow Airtaxi",
"Y1" => "Travel Technology Interactive",
"Y2" => "Ygnus Air",
"Y3" => "Gryphon Airlines",
"Y4" => "Volaris",
"Y5" => "Golden Myanmar Airlines",
"Y6" => "AB Aviation",
"Y7" => "NordStar",
"Y8" => "Yangtze River Express",
"Y9" => "Kish Airlines",
"YA" => "Nego Airline One",
"YC" => "Yamal Airlines",
"YD" => "Mauritania Airways",
"YE" => "Yan Air",
"YG" => "South Airlines",
"YH" => "Yangon Airways",
"YI" => "Yunnan Yingan Airline",
"YJ" => "Asian Wings Airways",
"YK" => "Avia Traffic Company",
"YL" => "Libyan Wings",
"YM" => "Montenegro Airlines",
"YN" => "Air Creebec",
"YO" => "Heli Air Monaco",
"YP" => "Perimeter Aviation",
"YQ" => "TAR Aerolíneas",
"YR" => "Scenic Airlines",
"YS" => "Regional",
"YU" => "Euroatlantic Airways",
"YV" => "Mesa Airlines",
"YW" => "Air Nostrum",
"YX" => "Republic Airline",
"YZ" => "Alas Uruguay",
"Z2" => "AirAsia Zest",
"Z3" => "PM Air",
"Z4" => "Zagrosjet",
"Z5" => "GMG Airlines",
"Z6" => "Dniproavia",
"Z7" => "Amaszonas Uruguay",
"Z8" => "Línea Aérea Amaszonas",
"Z9" => "Jsc Bek Air",
"ZA" => "Sky Angkor Airlines",
"ZB" => "Monarch Airlines",
"ZD" => "Ewa Air",
"ZE" => "Eastar Jet",
"ZF" => "Azur Air",
"ZG" => "Groznyy Avia",
"ZH" => "Shenzhen Airlines",
"ZI" => "Aigle Azur",
"ZJ" => "Zambezi Airlines",
"ZK" => "Great Lakes Airlines",
"ZL" => "Regional Express",
"ZM" => "Pegasus Asia",
"ZN" => "Naysa",
"ZP" => "Paranair",
"ZR" => "Punto Azul",
"ZS" => "Kazaviaspas",
"ZT" => "Titan Airways",
"ZU" => "Sunair",
"ZV" => "V Air",
"ZW" => "Air Wisconsin",
"ZX" => "Air Georgian",
"ZY" => "China Air Cargo",
"ZZ" => "Airline Service",
);


echo $aerolineas[$iata];


?>
