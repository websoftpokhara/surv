<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Corporate social responsibility for people with disability</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('site/assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('site/assets/css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('site/assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('site/assets/css/vendors.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('site/fontawesome/css/all.css')}}">

    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('site/assets/css/custom.css') }}" rel="stylesheet">
        
        <style>
            body {
                font-family: 'Nunito';
            }
        </style>

        


    <script>
        var stateObject = {
        "प्रदेश १": {
        "Bhojpur": ["Bhojpur","Shadanand","Hatuwagadhi","Ramprasad Rai","Aamchok","Tyamke Maiyunm","Arun Gaunpalika","Pauwadungma","Salpasilichho"],
        "Khotang": ["Katari municipality","Chaudandigadhi municipality","Triyuga municipality","Belaka municipality","Udayapurgadhi gaunpalika","Tapli gaunpalika","Rautamai gaunpalika","Limchungbung"],
        "Dhankuta": ["Dhankuta Municipality ","Pakhribas Municipality","Mahalaxmi Municipality","Sangurigadhi Rural Municipality","Chaubise Rural Municipality ","Khalsa Chhintang Sahidbhumi Rural Municipality ","Chhathar Jorpati  Rural Municipality"],
        
        "Ilam": ["Ilam Municipality","Deumai Municipality","Mai Municipality","Suryodaya Municipality","Phakphokthum Rural Municipality","Mai Jogmai Rural Municipality","Chulachuli Rural Municipality","  Rong Rural Municipality","Mangsebung Rural Municipality","Sandakpur Rural Municipality"],

        "Jhapa": ["Mechinagar Municipality","Bhadrapur Municipality","Birtamod Municipality","Arjundhara Municipality","Kankai Municipality","Shivasatakshi Municiplity","Gauradaha Municipality","Damak Municipality","Buddhashanti Rural Municipality","Haldibari Rural Municipality","Kachankawal Rural Municipality","Barhadashi Rural Municipality","Jhapa Rural Municipality","","Gauriganj Rural Municipality","Kamal Rural Municipality"],

        "Morang": ["Biratnagar Metropolitan City","SundarHaraicha Municipality","Belbari Municipality","Pathari-Sanischare Municipality","Urlabari Municipality","Rangeli Municipality","Letang Bhogateni Municipality","Ratuwamai Municipality","Sunawarshi Municipality"],

        "Okhaldhunga": ["Siddhicharan ","Manebhanjyang Rural Municipality","Champadevi Rural Municipality ","Sunkoshi Rural Municipality","Molung Rural Municipality","Chisankhugadhi Rural Municipality","Khiji Demba Rural Municipality","Likhu Rural Municipality"],

        "Panchthar": ["Phidim Municipality","Hilihang Rural Municipality","Kummayak Rural Municipality","Miklajung Rural Municipality","Phalelung Rural Municipality","Phalgunanda Rural Municipality","Tumbewa Rural Municipality ","Yangawarak Rural Municipality"],

        "Sankhuwasabha": ["Bhotkhola Rural Municipality ","Chainpur Municipality","Chichila Rural Municipality","Dharmadevi Municipality","Khandbari Municipality","Madi Municipality","Makalu Rural Municipality","Panchakhapan Municipality","Sabhapokhari Rural Municipality","Silichong Municipality"],
        
        "Solukhumbu": ["Solududhkunda urban","Dudhakaushika Rural","Necha Salyan Rural","Dudhkoshi Rural","Maha Kulung Rural","Sotang Rural","Likhu Pike Rural","Khumbu Pasanglhamu Rural"],

        "Sunsari": ["Itahari Sub Metropolitan City",
"Dharan Sub Metropolitan City",
"Inaruwa Municipality",
"Duhabi Municipality",
"Ramdhuni Municipality",
"Barahachhetra Municipality",
"Koshi Rural Municipality",
"Gadhi Rural Municipality",
"Barju Rural Municipality",
"Bhokraha Narashingh Rural Municipality",
"Harinagara Rural Municipality",
"Dewanganj Rural Municipality"],

        "Taplejung": ["Phungling","Aathrai Tribeni","Sidingwa","Phaktanglung","Mikkwakhola","Meringden","Maiwakhola","Pathibhara Yangwarak","Sirijangha"],

        "Terhathum": ["Aathrai Rural Municipality ","Chhathar Rural Municipality","Laliguras Municipality","Menchayam Rural Municipality ","Myanglung Rural Municipality","Phedap Rural Municipality"],
        
        "Udayapur": ["Triyuga Municipality","Katari Municipality","Chaudandigadhi Municipality","Belaka Municipality","Udayapurgadhi Rural Municipality","Rautamai Rural Municipality","Tapli","Limchungbung Rural Municipality"],
        },

        "प्रदेश २": {
            "Parsa": ["Birgunj Metropolitan","Bahudarmai Municipality","Parsagadhi Municipality","Pokhariya Municipality","Bindabasini Rural Municipality","Dhobini Rural Municipality","Chhipaharmai Rural Municipality","Jagarnathpur Rural Municipality","Jirabhawani Rural Municipality","Kalikamai Rural Municipality","Pakaha Mainpur Rural Municipality","Paterwa Sugauli Rural Municipality","Sakhuwa Prasauni Rural Municipality","Thori Rural Municipality"],
            "Bara": ["Kalaiya Sub-Metropolitan City",
"Jeetpur Simara Sub-Metropolitan City",
"Kolhabi Municipality",
"Nijgadh Municipality",
"Mahagadhimai Municipality",
"Simraungadh Municipality",
"Pacharauta Municipality",
"Pheta Rural Municipality",
"Bishrampur Rural Municipality",
"Prasauni Rural Municipality",
"Adarsh Kotwal Rural Municipality",
"Karaiyamai Rural Municipality",
"Devtal Rural Municipality",
"Parwanipur Rural Municipality",
"Baragadhi Rural Municipality",
"Suwarna Rural Municipality"
],
            "Rautahat": [ "Baudhimai Municipality","Brindaban Municipality","Chandrapur Municipality","Dewahi Gonahi Municipality","Gadhimai Municipality", "Garuda Municipality","Gaur Municipality","Gujara Municipality","Ishanath Municipality","Katahariya Municipality","Madhav Narayan Municipality","Maulapur Municipality","Paroha Municipality","Phatuwa Bijayapur Municipality","Rajdevi Municipality","Rajpur Municipality","Durga Bhagwati Rural Municipality","Yamunamai Rural Municipality"],
            "Sarlahi": ["Bagmati Municipality",
                        "Balara Municipality",
                        "Barahathwa Municipality",
                        "Godaita Municipality",
                        "Harion Municipality",
                        "Haripur Municipality",
                        "Haripurwa Municipality",
                        "Ishworpur Municipality",
                        "Kabilasi Municipality",
                        "Lalbandi Municipality",
                        "Malangwa Municipality",
                        "Basbariya Rural Municipality",
                        "Bishnu Rural Municipality",
                        "Brahampuri Rural Municipality",
                        "Chakraghatta Rural Municipality",
                        "Chandranagar Rural Municipality",
                        "Dhankaul Rural Municipality",
                        "Kaudena Rural Municipality",
                        "Parsa Rural Municipality",
                        "Ramnagar Rural Municipality"],
            "Siraha": ["Lahan Municipality",
"Dhangadhimai Municipality",
"Siraha Municipality",
"Golbazar Municipality",
"Mirchaiya Municipality",
"Kalyanpur Municipality",
"Karjanha Municipality",
"Sukhipur Municipality",
"Bhagwanpur Rural Municipality",
"Aurahi Rural Municipality",
"Bishnupur Rural Municipality",
"Bariyarpatti Rural Municipality",
"Lakshmipur Patari Rural Municipality",
"Naraha Rural Municipality",
"Sakhuwanankar Katti Rural Municipality",
"Arnama Rural Municipality",
"Navarajpur Rural Municipality"],
            "Dhanusha": ["Janakpur Sub Metropolitan City",
"Chhireshwarnath Municipality",
"Ganeshman Charanath",
"Dhanusadham Municipality",
"Nagarain Municipality",
"Bideha Municipality",
"Mithila Municipality",
"Sahidnagar Municipality",
"Sabaila Municipality",
"Kamala Municipality",
"Mithila Bihari Municipality",
"Hansapur Municipality",
"Janaknandani Rural Municipality",
"Bateshwar Rural Municipality",
"Mukhiyapatti Musharniya Rural Municipality",
"Lakshminya Rural Municipality",
"Aurahi Rural Municipality",
"Dhanauji Rural Municipality"],
            "Saptari": ["Bodebarsain Municipality",
"Dakneshwori Municipality",
"Hanumannagar Kankalini Municipality",
"Kanchanrup Municipality",
"Khadak Municipality",
"Sambhunath Municipality",
"Saptakoshi Municipality",
"Surunga Municipality",
"Rajbiraj Municipality",
"Agnisaira Krishnasavaran Rural Municipality",
"Balan-Bihul Rural Municipality",
"Rajgadh Rural Municipality",
"Bishnupur Rural Municipality",
"Chhinnamasta Rural Municipality",
"Mahadeva Rural Municipality",
"Rupani Rural Municipality",
"Tilathi Koiladi Rural Municipality",
"Tirhut Rural Municipality"],
            "Mahottari": ["Aurahi Municipality",
"Balawa Municipality",
"Bardibas Municipality",
"Bhangaha Municipality",
"Gaushala Municipality",
"Jaleshwor Municipality",
"Loharpatti Municipality",
"ManaraShiswa Municipality",
"Matihani Municipality",
"Ramgopalpur Municipality",
"Ekdara Rural Municipality",
"Mahottari Rural Municipality",
"Pipara Rural Municipality",
"Samsi Rural Municipality",
"Sonama Rural Municipality"],

},

        "बागमती प्रदेश":{
            "Bhaktapur District":["Bhaktapur",
"Changunarayan",
"Madhyapur Thimi",
"Suryabinayak Municipality",
],
            "Chitwan District":["Bharatpur Metropolitan City",
"Kalika Municipality",
"Khairahani Municipality",
"Madi Municipality",
"Ratnanagar municipality",
"Rapti Municipality",
"Ichchhakamana Rural Municipality"],

            "Dhading District":["Dhunibeshi Municipality",
"Nilkantha Municipality",
"Khaniyabas Rural Municipality",
"Gajuri Rural Municipality",
"Galchhi Rural Municipality",
"Gangajamuna Rural Municipality",
"Jwalamukhi Rural Municipality",
"Thakre Rural Municipality",
"Netrawati Dabjong Rural Municipality",
"Benighat Rorang Rural Municipality",
"Rubi Valley Rural Municipality",
"Siddhalek Rural Municipality",
"Tripurasundari Rural Municipality"],

            "Dolakha District":["Bhimeswor Municipality",
"Jiri Municipality",
"Kalinchok Rural Municipality",
"Melung Rural Municipality",
"Bigu Rural Municipality",
"Gaurishankar Rural Municipality",
"Baiteshwor Rural Municipality",
"Sailung Rural Municipality",
"Tamakoshi Rural Municipality"],

            "Kathmandu District":["Budanilkantha Municipilaty",
"Chandragiri Municipilaty ",
"Dakshinkali Municipilaty",
"Gokarneshwar Municipilaty",
"Kageshwari Manohara Municipilaty",
"Kathmandu Municipilaty", 
"Kirtipur Municipilaty",
"Nagarjun Municipilaty",
"Shankharapur Municipilaty",
"Tarakeshwar Municipilaty",
"Tokha Municipilaty"],

            "Kavrepalanchok District":["Dhulikhel Municipality",
"Banepa Municipality",
"Panauti Municipality",
"Panchkhal Municipality",
"Namobuddha Municipality",
"Mandandeupur Municipality",
"Khani Khola Rural Municipality",
"Chauri Deurali Rural Municipality",
"Temal Rural Municipality",
"Bethanchok Rural Municipality",
"Bhumlu Rural Municipality",
"Mahabharat Rural Municipality",
"Roshi Rural Municipality"],

            "Lalitpur District":["Lalitpur Metropolitan City",
"Mahalaxmi Municipality",
"Godawari Municipality",
"Konjyoson Rural Municipality",
"Bagmati Rural Municipality",
"Mahankal Rural Municipality"],

            "Makwanpur District":["Hetauda Sub-Metropolitan City",
"Thaha Municipality",
"Bhimphedi Rural Municipality",
"Makawanpurgadhi Rural Municipality",
"Manahari Rural Municipality",
"Raksirang Rural Municipality",
"Bakaiya Rural Municipality",
"Bagmati Rural Municipality",
"Kailash Rural Municipality",
"Indrasarowar Rural Municipality"],

            "Nuwakot District":["Bidur Municipality",
"Belkotgadhi Municipality",
"Kakani Rural Municipality",
"Panchakanya Rural Municipality",
"Likhu Rural Municipality",
"Dupcheshwar Rural Municipality",
"Shivapuri Rural Municipality",
"Tadi Rural Municipality",
"Suryagadhi Rural Municipality",
"Tarkeshwar Rural Municipality",
"Kispang Rural Municipality",
"Myagang Rural Municipality"],

            "Ramechhap District":["Manthali Municipality",      
"Ramechhap Municipality ",  
"Umakunda Rural Municipality",      
"Khandadevi Rural Municipality",        
"Doramba Rural Municipality",       
"Gokulganga Rural Municipality",        
"Likhu Tamakoshi Rural Municipality ",
"Sunapati Rural Municipality"],

            "Rasuwa District":["Kalika Rural Municipality",
"Gosaikunda Municipality",
"Naukunda Rural Municipality",
"Parbatikunda (Aama Chhodingmo) Rural Municipality",
"Uttargaya Municipality"],

            "Sindhuli District":["Kamalamai Municipality",
"Dudhauli Municipality",
"Sunkoshi Rural Municipality",
"Hariharpur Gadhi Rural Municipality",
"Tinpatan Rural Municipality",
"Marin Rural Municipality",
"Golanjor Rural Municipality",
"Phikkal Rural Municipality",
"Ghyanglekh Rural Municipality"],

            "Sindhupalchok District":["Chautara Sangachowkgadi",
"Bahrabise",
"Melamchi",
"Balephi Rural Municipality",
"Sunkoshi Rural Municipality",
"Indrawati Rural Municipality",
"Jugal Rural Municipality",
"Panchpokhari Thangpal Rural Municipality",
"Bhotekoshi Rural Municipality",
"Lisankhu Pakhar Rural Municipality",
"Helambu Rural Municipality",
"Tripurasundari Rural Municipality"],
        },


        "गण्डकी प्रदेश": {
        "बागलुङ": ["Baglung Municipality",
"Dhorpatan Municipality",
"Galkot Municipality",
"Jaimuni Municipality",
"Bareng Rural Municipality",
"Khathekhola Rural Municipality",
"Taman Khola Rural Municipality",
"Tara Khola Rural Municipality",
"Nisikhola Rural Municipality",
"Badigad Rural Municipality"],

        "गोरखा": [
        "Gorkha Municipality",
        "Palungtar Municipality",
        "Sulikot Rural Municipality",
        "Siranchowk Rural Municipality",
        "Ajirkot Rural Municipality",
        "Tsum Nubri Rural Municipality",
        "Dharche Rural Municipality",
        "Bhimsen Thapa Rural Municipality",
        "Sahid Lakhan Rural Municipality",
        "Aarughat Rural Municipality",
        "Gandaki Rural Municipality"
        ],

        "कास्की": ["Pokhara Metropolitan City", "Annapurna Rural Municipality", "Machhapuchchhre Rural Municipality", "Madi Rural Municipality", "Rupa Rural Municipality"],

        "लमजुङ": ["Besisahar Municipality",
"Dordi Rural Municipality",
"Dudhpokhari Rural Municipality",
"Kwhlosothar Rural Municipality",
"Madhya Nepal Municipality",
"Marsyandi Rural Municipality",
"Rainas Municipality",
"Sundarbazar Municipality"],

        "मनाङ": ["Chame Municipality",
"Nason Rural Municipality",
"Narpa Bhumi Rural Municipality",
"Manang Ngisyang Rural Municipality"],

        "मुस्ताङ": ["Gharpajhong (घरपझोङ)",
"Thasang (थासाङ)",
"Barhagaun Muktichhetra (बाह्रगाउँ मुक्तिक्षेत्र)",
"Lomanthang (लोमन्थाङ)",
"Dalome (दालोमे)"],

        "म्याग्दी": ["Beni Municipality",
"Annapurna Rural Municipality",
"Dhaulagiri Rural Municipality",
"Mangala Rural Municipality",
"Malika Rural Municipality",
"Raghuganga Rural Municipality"],

        "नवलपुर": ["Kawasoti municipality (Headquarter)",
"Gaindakot municipality",
"Devachuli municipality",
"Madhyabindu municipality",
"Baudikali Rural municipality",
"Bulingtar Rural municipality",
"Binayi Tribeni Rural municipality",
"Hupsekot Rural municipality"],

        "पर्वत": ["Kushma Municipality",
"Phalewas Municipality",
"Jaljala rural municipality ",
"Paiyun Rural Municipality",
"Mahashila Rural Municipality",
"Modi Rural Municipality",
"Bihadi Rural Municipality"],

        "स्याङग्जा": ["Galyang Municipality",
"Chapakot Municipality",
"Putalibazar Municipality",
"Bheerkot Municipality",
"Waling Municipality",
"Arjun Chaupari Rural Municipality",
"Aandhikhola Rural Municipality",
"Kaligandaki Rural Municipality",
"Phedikhola Rural Municipality",
"Harinas Rural Municipality",
"Biruwa Rural Municipality"],

        "तनहुँ": ["Bhanu Municipality",
"Bhimad Municipality",
"Byas Municipality",
"Shuklagandaki Municipality",
"Anbu Khaireni Rural Municipality",
"Devghat Rural Municipality",
"Bandipur Rural Municipality",
"Rishing Rural Municipality",
"Ghiring Rural Municipality",
"Myagde Rural Municipality"],
        },

        " लुम्बिनी प्रदेश ":{
            "Kapilvastu": ["Kapilvastu Municipality",
                            "Banganga Municipality",
                            "Buddhabhumi Municipality",
                            "Shivaraj Municipality",
                            "Krishnanagar Municipality",
                            "Maharajgunj Municipality",
                            "Mayadevi Rural Municipality",
                            "Yashodhara Rural Municipality",
                            "Suddhodhan Rural Municipality",
                            "Bijaynagar Rural Municipality"],

        "Parasi": ["Bardghat urabn",
                    "Ramgram urban",
                    "Sunwal urban",
                    "Susta rural",
                    "Palhi Nandan rural",
                    "Pratappur rural",
                    "Sarawal rural"],

        "Rupandehi": ["Butwal Sub-Metropolitan Municipality",
    "Devdaha    Municipality",  
    "Lumbini Sanskritik Municipality",
    "Sainamaina Municipality",
    "Siddharthanagar Municipality", 
    "Tilottama Municipality ",
    "Gaidahawa Rural Municipality", 
    "Kanchan    Rural Municipality",
    "Kotahimai Rural Municipality", 
    "Marchawari Rural Municipality",
    "Mayadevi Rural Municipality",
    "Omsatiya Rural Municipality",
    "Rohini Rural Municipality",
    "Sammarimai Rural Municipality",
    "Siyari Rural Municipality",    
    "Suddodhan Rural Municipality"],

        "Arghakhanchi ": ["Sandhikharka Municipality",
"Sitganga Municipality",
"Bhumikasthan Municipality",
"Chhatradev Rural Municipality",
"Panini Rural Municipality",
"Malarani Rural Municipality"],

        "Gulmi": ["Kaligandaki Rural Municipality",
"Satyawati Rural Municipality",
"Ruru Rural Municipality",
"Dhurkot Rural Municipality",
"Chhatrakot Rural Municipality",
"Musikot Urban Municipality",
"Resunga Urban Municipality",
"Gulmidarbar Rural Municipality",
"Chandrakot Rural Municipality",
"Isma Rural Municipality",
"Madane Rural Municipality",
"Malika Rural Municipality"],

        "Palpa": ["Tansen Municipality",
"Rampur Palpa",
"Rainadevi Chhahara Rural Municipality",
"Ripdikot Rural Municipality",
"Bagnaskali Rural Municipality",
"Rambha Rural Municipality",
"Purbakhola Rural Municipality",
"Nisdi Rural Municipality",
"Mathagadi Rural Municipality",
"Tinahu Rural Municipality"],

        "Dang": ["Ghorahi Sub-Metropolitan City",
"Tulsipur Sub-Metropolitan City",
"Lamahi Municipality",
"Gadhawa Rural Municipality",
"Rajpur Rural Municipality",
"Shantinagar Rural Municipality",
"Rapti Rural Municipality",
"Banglachuli Rural Municipality",
"Dangisharan Rural Municipality",
"Babai Rural Municipality"],

        "Pyuthan": ["NO"],

        "Rolpa": ["Rolpa Municipality",
"Runtigadi Rural Municipality",
"Triveni Rural Municipality",
"Sunil Smiriti Rural Municipality",
"Lungri Rural Municipality",
"Sunchhari Rural Municipality",
"Thawang Rural Municipality",
"Madi Rural Municipality",
"Ganga Dev Rural Municipality",
"Pariwartan Rural Municipality"],

        "Eastern Rukum ": ["Bhume rural",
"Putha rural",
"Uttarganga rural", 
"Sisne rural"],

        "Banke": ["Nepalgunj Sub-Metropolitan City",
"Kohalpur Municipality",
"Rapti-Sonari Rural Municipality",
"Narainapur Rural Municipality",
"Duduwa Rural Municipality",
"Janaki Rural Municipality",
"Khajura Rural Municipality",
"Baijanath Rural Municipality"],

        "Bardiya": ["Gulariya municipality",
"Rajapur municipality",
"Madhuwan municipality",
"Thakurbaba municipality",
"Basgadhi municipality",
"Barbardiya municipality",
"Badhaiyatal rural municipality",
"Geruwa rural municipality"],
        },

        " कर्णाली प्रदेश":{
            "Dailekh District":["Narayan Urban Municipilaty",   
    "Dullu  Urban Municipilaty",
    "Aathbis    Urban Municipilaty",
    "Chamunda Bindrasaini Municipilaty",    
    "Thantikandh Rural Municipilaty",   
    "Bhairabi Rural Municipilaty",  
    "Mahabu Rural Municipilaty" ,
    "Naumule    Rural Municipilaty" ,
    "Dungeshwar Rural Municipilaty",    
    "Gurans Rural Municipilaty" ,
    "Bhagawatimai Rural Municipilaty"],

            "Dolpa District":["Thuli Bheri Municipality",
"Tripurasundari Municipality",
"Dolpo Buddha Rural Municipality",
"She Phoksundo Rural Municipality",
"Jagadulla Rural Municipality",
"Mudkechula Rural Municipality",
"Kaike Rural Municipality",
"Chharka Tangsong Rural Municipality"],

            "Humla District":["Simkot Rural Municipality",
"Namkha Rural Municipality",
"Kharpunath Rural Municipality",
"Sarkegad Rural Municipality",
"Chankheli Rural Municipality",
"Adanchuli Rural Municipality",
"Tajakot Rural Municipality"],

            "Jajarkot District":["Bheri भेरी municipilaty",
"Chhedagad  छेडागाड municipilaty",
"Nalgad     त्रिवेणी नलगाड municipalaty" ,
"Junichande Rural municipalaty जुनीचाँदे",
"Kushe Rural municipalaty कुशे",
"Barekot Rural municipalaty बारेकोट",
"Shivalaya Rural municipalaty शिवालय"],

            "Jumla District":["Chandannath", 
"Kankasundari ",
"Sinja ",
"Hima" ,
"Tila ",
"Guthichaur",
"Tatopani" ,
"Patarasi" ],

            "Kalikot District":["Khandachakra Municipality",
"Raskot Municipality",
"Tilagufa Municipality",
"Pachaljharana Rural Municipality",
"Sanni Triveni Rural Municipality",
"Narharinath Rural Municipality",
"Shubha Kalika Rural Municipality",
"Mahawai Rural Municipality",
"Palata Rural Municipality"],

            "Mugu District":["Chhayanath Rara Municipality",
"Mugum Karmarong Rural Municipality",
"Soru Rural Municipality",
"Khatyad Rural Municipality"],

"Salyan District":["Shaarda Municipality",
"Bagchaur Municipality",
"Bangad Kupinde Municipality",
"Kalimati Rural Municipality",
"Tribeni Rural Municipality",
"Kapurkot Rural Municipality",
"Chatreshwari Rural Municipality",
"Kumakh Rural Municipality",
"Siddha Kumakh Rural Municipality",
"Darma Rural Municipality"],

"Surkhet District":["Birendranagar Municipality",       
"Bheriganga Municipality",  
"Gurbha Kot Municipality",      
"Panchapuri Municipality",      
"Lekbesi Municipality",
"Chaukune Rural Municipality",
"Barahatal Rural Municipality",
"Chingad Rural Municipality",
"Simta Rural Municipality"],

"Western Rukum District":["Musikot municipality",
"Chaurjahari municipality",
"Aathbiskot municipality",
"Banphikot Rural municipality",
"Tribeni  Rural municipality",
"Sani Bheri  Rural municipality"],
        },

" सुदूर-पश्चिम प्रदेश ":{
    "Achham  ": ["Mangalsen municipality",
    "Kamalbazar कमलबजार municipality",
    "Sanfebagar साँफेबगर municipality", 
    "Panchadewal Binayak पञ्चदेवल municipality",
    "Ramaroshan रामारोशन rural",
    "Chaurpati चौरपाटी rural",  
    "Turmakhand तुर्माखाँद  rural", 
    "Mellekh    मेल्लेख rural", 
    "Dhakari    ढँकारी rural    ",
    "Bannigadi Jayagad बान्नीगडीजैगड rural"],

        "Baitadi ": ["Dasharathchand Municipality",
        "Patan Municipality",
        "Melauli Municipality",
        "Purchaudi Municipality",
        "Surma Rural Municipality",
        "Sigas Rural Municipality",
        "Shivanath Rural Municipality",
        "Pancheshwor Rural Municipality",
        "Dogdakedar Rural Municipality",
        "Dilasaini Rural Municipality"],

        "Bajhang ": ["Jaya Prithvi Municipality",
"Bungal Municipality",
"Talkot Rural Municipality",
"Masta Rural Municipality",
"Khaptadchhanna Rural Municipality",
"Thalara Rural Municipality",
"Bitthadchir Rural Municipality",
"Surma Rural Municipality",
"Chhabis Pathibhera Rural Municipality",
"Durgathali Rural Municipality",
"Kedarsyu Rural Municipality",
"Saipal Rural Municipality",],

        "Bajura  ": ["Badimalika Municipality",
"Triveni Municipality",
"Budhiganga Municipality",
"Budhinanda Municipality",
"Gaumul Rural Municipality",
"Jagnnath Rural Municipality",
"Swamikartik Khapar Rural Municipality",
"Chhededaha Rural Municipality",
"Himali Rural Municipality"],

        "Dadeldhura ": ["Amargadhi municipality",
"Parshuram municipality",
"Aalitaal Rural Municipality",
"Bhageshwar Rural Municipality",
"Navadurga Rural Municipality",
"Ajaymeru Rural Municipality",
"Ganyapadhura Rural Municipality"],

        "Darchula ": [  "Mahakali   Urban", 
    "Shailyasikhar  Urban", 
"Malikarjun Rural", 
    "ApihimalRural",    
    "Duhun  Rura",  
    "Naugad Rural",
    "Marma  Rural",     
"Lekam  Rural",
    "Vyans  Rural"],

        "Doti ": ["Dipayal Silgadhi Municipality",
"Shikhar Municipality",
"Purbichauki Rural Municipality",
"Badikedar Rural Municipality",
"Jorayal Rural Municipality",
"Sayal Rural Municipality",
"Aadarsha Rural Municipality",
"Dr. K. I. Singh Rural Municipality",
"Bogatan Rural Municipality"],

        "Kailali ": ["Dhangadhi Sub-Metropolitan City",
"Lamki Chuha Municipality",
"Tikapur Municipality",
"Ghodaghodi Municipality",
"Bhajani Municipality",
"Godawari Municipality",
"Gauriganga Municipality",
"Janaki Rural Municipality",
"Bardagoriya Rural Municipality",
"Mohanyal Rural Municipality",
"Kailari Rural Municipality",
"Joshipur Rural Municipality",
"Chure Rural Municipality"],

        "Kanchanpur ": ["Bedkot municipality",
"Belauri municipality",
"Bhimdatta municipality",
"Mahakali municipality",
"Shuklaphanta municipality",
"Krishnapur municipality",
"Punarbas municipality",
"Laljhadi rural municipality",
"Beldandi rural municipality"],
        }
        }
        window.onload = function () {
        var provinceSel = document.getElementById("provinceSel"),
        destrictsSel = document.getElementById("destrictsSel"),
        municipalitySel = document.getElementById("municipalitySel");
        for (var province in stateObject) {
        provinceSel.options[provinceSel.options.length] = new Option(province, province);
        }
        provinceSel.onchange = function () {
        destrictsSel.length = 1; // remove all options bar first
        municipalitySel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        for (var districts in stateObject[this.value]) {
        destrictsSel.options[destrictsSel.options.length] = new Option(districts, districts);
        }
        }
        provinceSel.onchange(); // reset in case page is reloaded
        destrictsSel.onchange = function () {
        municipalitySel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        var district = stateObject[provinceSel.value][this.value];
        for (var i = 0; i < district.length; i++) {
        municipalitySel.options[municipalitySel.options.length] = new Option(district[i], district[i]);
        }
        }
        }
    </script>
    </head>
    <body>
        <?php $language = Session::get('language'); ?>
        <div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->
    
    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->
    <div class="container-fluid full-height">
        <div class="row row-height">
            <div class="col-lg-6 content-left">
                <div class="content-left-wrapper">
                    <div>
                        <div class="col-md-12">
                            <h3 style="color: green">अपाङ्गता भएका व्यक्तिहरुका लागि स्वरोजगार प्रर्वद्धनका कार्यक्रम</h3>
                        </div>
                    </div>    
                </div>
            </div>
            
             <div class="col-lg-6 content-right" id="start">
            @if($language == 'np' || $language == null)
                <div id="wizard_container">
                    <img class="img-fluid" src="img/header_final16122018.jpg" alt="">
                    <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <div>
                            @if(session()->has('message'))
                                    <div class="alert alert-success" style="display: block; overflow: hidden;">
                                        {{ session()->get('message') }}
                                    </div>
                            @endif
                        </div>
                        
                        <!-- /top-wizard -->
                        <form action="{{route('postAddRecord')}}" method="POST" name="myform" id="myForm" enctype="multipart/form-data">
                            @csrf()
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">
                                <div class="step">
                                    <div class="col-md-12">
                                        <h3 class="main_question" style="text-align: right"><strong>1/5</strong></h3>
                                        <h5>व्यक्तिगत विवरण</h5>
                                        <p>यो स्वरोजगार प्रर्वद्धन कार्यक्रमको फारम तपाईले उपलब्ध गरेको जानकारी गोप्य राखिनेछ ।</p> 

                                        <hr />
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h6>फोटो</h6>
                                                <input type="file" name="photo" class="form-control" placeholder="photo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6>पुरा नाम*</h6>
                                            <div class="form-group">
                                                <input type="text" name="fullname" class="form-control" placeholder="उत्तरदाताको पुरा नाम *" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>प्रदेश*</h6>
                                            <div class="form-group">
                                                <div class="clearfix">
                                                    <select class=" wide form-select" name="province" id="provinceSel" size="1" required>
                                                        <option value="" selected="selected">प्रदेश छान्नुहोस्</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6>जिल्ला*</h6>
                                            <div class="form-group">
                                                <div class="clearfix">
                                                    <select class="wide form-select" name="district" id="destrictsSel" required>
                                                        <option value="">जिल्ला छान्नुहोस् </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>न.पा/गा.पा.*</h6>
                                            <div class="form-group">
                                                <div class="clearfix">
                                                    <select class="wide form-select" name="minicipality" id="municipalitySel" size="1" required>
                                                        <option value="">न.पा/गा.पा. छान्नुहोस् </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h6>वडा नं.*</h6>
                                            <div class="form-group">
                                                <select type="number" name="wardno" class="form-control " placeholder="वडा नं." required>
                                                    <option value="1">१</option>
                                                        <option value="2">२</option>
                                                        <option value="3">३</option>
                                                        <option value="4">४</option>
                                                        <option value="5">५</option>
                                                        <option value="6">६</option>
                                                        <option value="7">७</option>
                                                        <option value="8">८</option>
                                                        <option value="9">९</option>
                                                        <option value="10">१०</option>
                                                        <option value="11">११</option>
                                                        <option value="12">१२</option>
                                                        <option value="13">१३</option>
                                                        <option value="14">१४</option>
                                                        <option value="15">१५</option>
                                                        <option value="16">१६</option>
                                                        <option value="17">१७</option>
                                                        <option value="18">१८</option>
                                                        <option value="19">१९</option>
                                                        <option value="20">२०</option>
                                                        <option value="21">२१</option>
                                                        <option value="22">२२</option>
                                                        <option value="23">२३</option>
                                                        <option value="24">२४</option>
                                                        <option value="25">२५</option>
                                                        <option value="26">२६</option>
                                                        <option value="27">२७</option>
                                                        <option value="28">२८</option>
                                                        <option value="29">२९</option>
                                                        <option value="30">३०</option>
                                                        <option value="31">३१</option>
                                                        <option value="32">३२</option>
                                                        <option value="33">३३</option>
                                                        <option value="34">३४</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>टोल*</h6>
                                            <div class="form-group">
                                                <input type="text" name="tole" class="form-control" placeholder="टोल" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>सम्पर्क नं.*</h6>
                                            <div class="form-group">
                                                <input type="integer" name="contactnumber" class="form-control" placeholder="सम्पर्क नं." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                 <h6>उमेर*</h6>
                                                <select type="number"  x-webkit-speech name="age" class="form-control" placeholder="बर्ष" >
                                                    <option value="">उमेर</option>
                                                    <option value="5">५ बर्ष मुनि </option>
                                                    <option value="5">५ </option>
                                                    <option value="6">६ </option>
                                                    <option value="7">७ </option>
                                                    <option value="8">८ </option>
                                                    <option value="9">९ </option>
                                                    <option value="10">१० </option>
                                                    <option value="11">११</option>
                                                    <option value="12">१२</option>
                                                    <option value="13">१३</option>
                                                    <option value="14">१४</option>
                                                    <option value="15"> १५</option>
                                                    <option value="16">१६</option>
                                                    <option value="17">१७</option>
                                                    <option value="18">१८</option>
                                                    <option value="19">१९</option>
                                                    <option value="20">२०</option>
                                                    <option value="21">२१</option>
                                                    <option value="22">२२</option>
                                                    <option value="23">२३</option>
                                                    <option value="24">२४</option>
                                                    <option value="25">२५</option>
                                                    <option value="26">२६</option>
                                                    <option value="27">२७</option>
                                                    <option value="28">२८</option>
                                                    <option value="29">२९</option>
                                                    <option value="30">३०</option>
                                                    <option value="31">३१</option>
                                                    <option value="32">३२</option>
                                                    <option value="33">३३</option>
                                                    <option value="34">३४</option>
                                                    <option value="35">३५</option>       
                                                    <option value="36">३६</option> 
                                                    <option value="37">३७</option>  
                                                    <option value="38">३८ </option>  
                                                    <option value="39"> ३९</option>       
                                                    <option value="40"> ४०</option>       
                                                    <option value="41"> ४१ </option>      
                                                    <option value="42">४२ </option>      
                                                    <option value="43"> ४३</option>       
                                                    <option value="44"> ४४</option>       
                                                    <option value="45"> ४५</option>       
                                                    <option value="46"> ४६</option>       
                                                    <option value="47"> ४७ </option> 
                                                    <option value="48"> ४८</option>       
                                                    <option value="49"> ४९</option>       
                                                    <option value="50">५०</option>
                                                    <option value="51"> ५१ </option>
                                                    <option value="52"> ५२ </option>
                                                    <option value="53"> ५३ </option>
                                                    <option value="54"> ५४ </option>
                                                    <option value="55">५५ </option>
                                                    <option value="55">५५ बर्ष माथि </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6>इ-मेल ठेगाना</h6>
                                                <input  type="email" name="email" class="form-control" placeholder="इ - मेल ठेगाना" >
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="row">

                                        <div class="col-md-8">
                                           <div class="form-group">
                                                <h6>फेसबुक आईडी</h6>
                                                <input  type="text" name="fbId" class="form-control" placeholder="फेसबुक आईडी" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h6>लिङ्ग*</h6>
                                                <div class="clearfix">
                                                    <select class="wide form-select" name="gender"  size="1" required>
                                                        <option value="M">पुरुष</option>
                                                        <option value="F">महिला</option>
                                                        <option value="O">अन्य</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <!-- /step-->
                                <div class="step">
                                     <h3 class="main_question"><strong>2/5</strong></h3>
                                     <div class="col-md-12">
                                        <h6>अपाङ्गता परिचय पत्र छ / छैन?</h6>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group radio_input">
                                                <label class="container_radio">छ
                                                    <input type="radio" name="identycardoption" value="Y" class="identy_card_yes" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container_radio">छैन
                                                    <input type="radio" name="identycardoption" value="N" class="identy_card_no" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="identycardno row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h6>अपाङ्गता परिचय पत्रको वर्ग</h6>
                                                 <select class="wide form-select"   onchange="this.className=this.options[this.selectedIndex].className"
                                                 name="identycardno" class="identycardno form-control">
                                                    <option value="">Choose your Card Group</option>
                                                    <option class="redText"   value="रातो" >रातो</option>
                                                    <option class="blueText" value="निलो" >निलो</option>
                                                    <option class="yellowText" value="पहेंलो" >पहेंलो</option>
                                                    <option class="whiteText" value="सेतो" >सेतो</option>    
                                                </select>
                                            </div>
                                        </div>
                                            <div class="col-md-6">
                                                <h6>तपाईको परिचय पत्र नम्बर के हो?</h6>
                                                 <div class="form-group">
                                                    <input type="integer" name="idcard" class="form-control" placeholder="तपाईको परिचय पत्र नम्बर दिनुहोस्r">            
                                                </div>
                                            </div>
                                        

                                        
                                    </div>
                                    <h5>अशक्तताको प्रकार</h5>
                                    <div class="row">
                                         <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="container_radio version_2">शारीरिक अपाङ्गता 
                                                <input type="radio" name="type" value="Physical" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">दृष्टीविहिन
                                                <input type="radio" name="type" value="Complete Blindness" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">बहिरा तथा सुस्त श्रवण
                                                <input type="radio" name="type" value="Blindness" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">श्रवण दृष्टीविहिन 
                                                <input type="radio" name="type" value="Low vision" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">हेमोफिलिया अपाङ्गता भएका व्यक्तिहरु
                                                <input type="radio" name="type" value="Deafness" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">अरिजम अपाङ्गता भएका व्यक्तिहरु
                                                <input type="radio" name="type" value="Hard of Hearing" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">बौद्धिक अपाङ्गता भएका व्यक्तिहरु
                                                <input type="radio" name="type" value="Speech disability" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="container_radio version_2">बहु अपाङ्गता भएका व्यक्तिहरु
                                                <input type="radio" name="type" value="Deaf blindness" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">स्वर बोलाई अपाङ्गता
                                                <input type="radio" name="type" value="Intellectual disability" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="container_radio version_2">मनोसामाजिक अपाङ्गता
                                                <input type="radio" name="type" value="Autism" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label class="container_radio version_2">अन्य
                                                <input type="radio" name="type" value="Others" class="" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>

                                    </div>
                                    </div>
                                </div>






                                <!-- /step-->
                                <div class="step" id="3">
                                    <h3 class="main_question"><strong>3/5</strong></h3>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>नागरिकता छ /  छैन ?</h6>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="form-group radio_input">
                                                <label class="container_radio"> छ
                                                    <input class="cityzenship_card_yes" type="radio" name="cityzenshipoption" value="Y" required />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container_radio"> छैन
                                                    <input class="cityzenship_card_no" type="radio" name="cityzenshipoption" value="N" required />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="form-group">
                                                <input type="text" name="cityzenshipno" class="cityzenshipno form-control" placeholder="नागरिकता नं.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <h6>परिवारमा सदस्य संख्या</h6>
                                            <div class="form-group">
                                                <select type="number" name="familyno" class="form-control" placeholder="परिवारमा सदस्य संख्या">
                                                    <option value="">परिवारमा सदस्य संख्या</option>
                                                     <option value="1">१</option>
                                                        <option value="2">२</option>
                                                        <option value="3">३</option>
                                                        <option value="4">४</option>
                                                        <option value="5">५</option>
                                                        <option value="6">६+</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group radio_input">
                                                <label class="container_radio"> 
                                                    <input class="other_disable_in_family_yes" type="checkbox" name="otherdisableinfamilyoption" value="Y"/> अन्य अपाङ्गता भएको व्यक्ति परिवारमा छ ?
                                                    <span class="checkmark"></span>
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            
                                            <div class="form-group">
                                                <select type="number" name="otherdisableinfamilyno" class="other_disable_in_family_no form-control" placeholder="अन्य अपाङ्गता भएको व्यक्ति परिवारमा संख्या">
                                                    <option value="">अन्य अपाङ्गता भएको व्यक्ति परिवारमा संख्या</option>
                                                     <option value="1">१</option>
                                                        <option value="2">२</option>
                                                        <option value="3">३</option>
                                                        <option value="4">४</option>
                                                        <option value="5">५</option>
                                                        <option value="6">६+</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="gname" class="form-control" placeholder="अभिभावक /  सम्रक्षकको नाम" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6>नाता</h6>
                                            <div class="form-group">
                                                <select type="text" name="relation" class="form-control" placeholder="नाता" >
                                                     <option value="">नाता</option>
                                                        <option value="Amaa">आमा</option>
                                                        <option value="2">बुबा</option>
                                                        <option value="3">पति</option>
                                                        <option value="4">पत्नी</option>
                                                        <option value="5">छोरी</option>
                                                        <option value="6">छोरा</option>
                                                        <option value="7">भाई</option>
                                                        <option value="8">दाइ</option>
                                                        <option value="9">दिदी</option>
                                                        <option value="10">बहिनी</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <h6>सम्पर्क नं</h6>
                                            <div class="form-group">
                                                <input type="integer" name="fcontactno" class="form-control" placeholder="सम्पर्क नं.">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->
                                <div class="step">
                                    <h3 class="main_question"><strong>4/5</strong>शिक्षा</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                            <div class="clearfix">
                                                <select  class="wide form-select" name="education" id="education" size="1" required>
                                                    <option value="">शिक्षा</option>
                                                    <option value="लेखपढ गरेको छैन">लेखपढ गरेको छैन</option>
                                                    <option value="विद्यालय स्तरीय">विद्यालय स्तरीय</option>
                                                    <option value="प्रमाणपत्र तह">उच्च शिक्षा</option>
                                                    <option value="स्नातक स्नाकोत्तर">स्नातक</option>
                                                    <option value="स्नातक स्नाकोत्तर">स्नाकोत्तर</option>
                                                </select>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>रोजगार स्वरोजगारमुलक तालिम लिएको वा नलिएको</h6>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group radio_input">
                                                <label class="container_radio">लिएको छ
                                                    <input class="training_yes" type="radio" name="trainingoption" value="Y" required />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container_radio">लिएको छैन
                                                    <input class="training_no" type="radio" name="trainingoption" value="N" required />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="training_yes_content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select type="text" name="whattraining" class="form-control" placeholder="कस्तो तालिम">
                                                            <option value="कस्तो तालिम">कस्तो तालिम</option>
                                                            <option value="कपडा बनाउने">कपडा बनाउने</option>
                                                            <option value="धुप बनाउने ">धुप बनाउने </option>
                                                            <option value="टोपी बनाउने">टोपी बनाउने </option>
                                                            <option value="स्वेटर बनाउने">स्वेटर बनाउने</option>
                                                            <option value="झोला बनाउने">झोला बनाउने</option>
                                                            <option value="सल बनाउने">सल बनाउने</option>
                                                            <option value="खेलौना बनाउने">खेलौना बनाउने</option>
                                                            <option value="उनिका सामन बनाउने">उनिका सामन बनाउने</option>
                                                            <option value="पस्मिना बनाउने">पस्मिना बनाउने</option>
                                                            <option value="अन्यहाते सामन बनाउने">अन्यहाते सामन बनाउने</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select type="text" name="wheretraining" class="form-control" placeholder="कहाँ बाट तालिम लिनुभएको">
                                                            <option>कहाँ बाट तालिम लिनुभएको</option>
                                                            <option value="आईएनजीओ">आईएनजीओ</option>
                                                            <option value="एनजीओ">एनजीओ</option>
                                                            <option value="नेपाल सरकार">नेपाल सरकार</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <!-- /step-->
                                <div class="submit step">
                                    <h3 class="main_question"><strong>5/5</strong>Summary</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6>तालिम लिएर केहि ब्यबसाय संचलान गर्नु भयको छ</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group radio_input">
                                                <label class="container_radio">छ
                                                    <input class="bussiness_yes" type="radio" name="businessoption" value="Y" required />
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="container_radio">छैन
                                                    <input class="bussiness_no" type="radio" name="businessoption" value="N" required />
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bussiness_yes_content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="whatbusiness" class="form-control" placeholder="कस्तो ब्यबसाय">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select type="text" name="effectonbusiness" class="form-control" placeholder="कोभिडले केहि प्रब्बाब पारेको छ">
                                                        <option value="">कोभिडले केहि प्रब्बाब पारेको छ</option>
                                                        <option value="छ">छ</option>
                                                        <option value="छैन">छैन</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="clearfix">
                                                        <h6>ब्यबसायको अवस्था कस्तो छ</h6>
                                                        <select class="wide form-select" name="businessstatus" id="businesss" size="1">
                                                            <option value="संचालन भैरहेको">संचालन भैरहेको</option>
                                                            <option value="बन्द भैसैकेको">बन्द भैसैकेको</option>
                                                            <option value="चाडै बन्द हुने अवस्था">चाडै बन्द हुने अवस्था</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>आगामी दिनमा के कस्तो योजना छ र आबश्यकता छ </label>
                                                <textarea name="remark" class="form-control" style="height:100px;" placeholder="केही छ भने लेख्नुहोस्"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>तपाईको क्षेत्रमा व्यवसाय गर्न केही सम्भावाना तथा स्रोत साधान तथा कच्चा पदार्थ छ भन्ने उल्लेख गर्नुहोस् । हामी पुर्णरुपमा सहयोग गर्न प्रयास गर्दछौ । </label>
                                                <textarea name="possiable" class="form-control" style="height:100px;" placeholder="केही छ भने लेख्नुहोस्"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->
                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward">Prev</button>
                                <button type="button" name="forward" class="forward">Next</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
            @else
            <div id="wizard_container">
                    <div id="top-wizard">
                            <div id="progressbar"></div>
                    </div>
                    <div>
                        @if(session()->has('message'))
                                <div class="alert alert-success" style="display: block; overflow: hidden;">
                                    {{ session()->get('message') }}
                                </div>
                        @endif
                    </div>
                    <form action="{{route('postAddRecord')}}" method="POST" name="myform" id="myForm" enctype="multipart/form-data">
                        @csrf()
                        <input id="website" name="website" type="text" value="">
                        <div id="middle-wizard">
                            <div class="step">
                                <div class="col-md-12">
                                    <h3 class="main_question" style="text-align: right"><strong>1/5</strong></h3>
                                    <h5>Personal Information</h5>
                                    <p>This is a form of self-employment promotion program The information you provide will be kept confidential.</p>

                                    <small>* fields are mandatory</small>
                                </div>
                                <div class="form-group">
                                    <h6>Photo</h6>
                                    <input type="file" name="photo" class="form-control" placeholder="photo">
                                </div>
                                <div class="form-group">
                                    <h6>Full Name*</h6>
                                    <input type="text" name="fullname" class="form-control" placeholder="Full Name" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <h6>Provinces*</h6>
                                            <div class="clearfix">
                                                <select class=" wide form-select" name="province" id="provinceSel" size="1" required>
                                                    <option value="" selected="selected">Select Province</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <h6>Districts*</h6>
                                            <div class="clearfix">
                                                <select class="wide form-select" name="district" id="destrictsSel" required>
                                                    <option value="">Select District</option>
                                                </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <h6>Municipality*</h6>
                                            <div class="clearfix">
                                                <select class="wide form-select" name="minicipality" id="municipalitySel" size="1" required>
                                                    <option value="">Select Municipality </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h6>Ward Number*</h6>
                                            <select type="number" name="wardno" class="form-control " placeholder="Word No." required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>
                                                    <option value="32">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>City/Village*</h6>
                                            <input type="text" name="tole" class="form-control" placeholder="City/Village" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Contact Number*</h6>
                                            <input type="text" name="contactnumber" class="form-control" placeholder="Contact No." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h6>Age*</h6>
                                            <select  type="number" class="form-control" name="age" x-webkit-speech required >
                                                    <option value="age">Age</option>
                                                    <option value="5below">5 year below</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="2">18</option>
                                                    <option value="3">19</option>
                                                    <option value="10">20</option>
                                                    <option value="11">21</option>
                                                    <option value="12">22</option>
                                                    <option value="13">23</option>
                                                    <option value="14">24</option>
                                                    <option value="15">25</option>
                                                    <option value="16">26</option>
                                                    <option value="17">27</option>
                                                    <option value="18">28</option>
                                                    <option value="19">29</option>
                                                    <option value="20">30</option>
                                                    <option value="21">31</option>
                                                    <option value="22">32</option>
                                                    <option value="33">33</option>
                                                    <option value="34">34</option>
                                                    <option value="35">35</option>
                                                    <option value="36">36</option>
                                                    <option value="37">37</option>
                                                    <option value="38">38</option>
                                                    <option value="39">39</option>
                                                    <option value="40">40</option>
                                                    <option value="41">41</option>
                                                    <option value="42">42</option>
                                                    <option value="43">43</option>
                                                    <option value="44">44</option>
                                                    <option value="45">45</option>
                                                    <option value="46">46</option>
                                                    <option value="47">47</option>
                                                    <option value="48">48</option>
                                                    <option value="49">49</option>
                                                    <option value="50">50</option>
                                                    <option value="51">51</option>
                                                    <option value="52">52</option>
                                                    <option value="53">53</option>
                                                    <option value="54">54</option>
                                                    <option value="55">55</option>
                                                    <option value="55above">55 year above</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Email adress</h6>
                                            <input  type="email" name="email" class="form-control" placeholder="Email Address" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                            <h6>FaceBook Id</h6>
                                            <input  type="text" name="fbid" class="form-control" placeholder="Facebook Id" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Gender*</h6>
                                            <div class="clearfix">
                                                <select class="wide form-select" name="gender" id="municipalitySel" size="1" required>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="O">Others</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <h3 class="main_question"><strong>2/5</strong></h3>
                                 <div class="col-md-12">
                                    <h6>You have disability identify card?</h6>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group radio_input">
                                            <label class="container_radio">Yes
                                                <input type="radio" name="identycardoption" value="Y" class="identy_card_yes" required>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">No
                                                <input type="radio" name="identycardoption" value="N" class="identy_card_no" required>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="identycardno row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>What is the identity card Group</h6>
                                             <select class="wide form-select"   onchange="this.className=this.options[this.selectedIndex].className"
                                             name="identycardno" class="identycardno form-control">
                                                <option value="">Choose your Card Group</option>
                                                <option class="redText"   value="Red" >Red</option>
                                                <option class="blueText" value="Blue" >Blue</option>
                                                <option class="yellowText" value="Yellow" >Yellow</option>
                                                <option class="whiteText" value="white" >White</option>    
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                            <h6>What is your identity card number?</h6>
                                             <div class="form-group">
                                                <input type="integer" name="idcard" class="form-control" placeholder="Your Identity Card Number">            
                                            </div>
                                        </div>
                                </div>
                                <h5>Type of Disability</h5>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="container_radio version_2">Physical 
                                            <input type="radio" name="type" value="Physical" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Complete Blindness
                                            <input type="radio" name="type" value="Complete Blindness" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Blindness
                                            <input type="radio" name="type" value="Blindness" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Low vision 
                                            <input type="radio" name="type" value="Low vision" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Deafness
                                            <input type="radio" name="type" value="Deafness" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Hard of Hearing
                                            <input type="radio" name="type" value="Hard of Hearing" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Speech disability
                                            <input type="radio" name="type" value="Speech disability" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="container_radio version_2">Deaf blindness
                                            <input type="radio" name="type" value="Deaf blindness" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Intellectual disability
                                            <input type="radio" name="type" value="Intellectual disability" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Autism
                                            <input type="radio" name="type" value="Autism" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Psychosocial disability
                                            <input type="radio" name="type" value="Psychosocial disability" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Hemophilia
                                            <input type="radio" name="type" value="Hemophilia" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Multiple disability 
                                            <input type="radio" name="type" value="Multiple disability" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="container_radio version_2">Others
                                            <input type="radio" name="type" value="Others" class="" required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="step" id="3">
                                <h3 class="main_question"><strong>3/5</strong></h3>
                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6>Do you have citizenship Card</h6>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group radio_input">
                                            <label class="container_radio"> Yes
                                                <input class="cityzenship_card_yes" type="radio" name="cityzenshipoption" value="Y" required />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio"> No
                                                <input class="cityzenship_card_no" type="radio" name="cityzenshipoption" value="N" required />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <h6>Citizenship Number</h6>
                                            <input type="text" name="cityzenshipno" class="cityzenshipno form-control" placeholder="Citizenship Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <h6>Number of family member</h6>
                                            <select type="number" name="familyno" class="form-control" placeholder="Family Members No.">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6+</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group radio_input">
                                            <label class="container_radio"> 
                                                <input class="other_disable_in_family_yes" type="checkbox" name="otherdisableinfamilyoption" value="Y"/> Any family member disability?
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select type="number" name="otherdisableinfamilyno" class="other_disable_in_family_no form-control" placeholder="No.of family member disablity">
                                                 <option value="">No.of family member disablity</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6+</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h6>Supporter</h6>
                                            <input type="text" name="gname" class="form-control" placeholder="Supporter">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Relation</h6>
                                            <select type="text" name="relation" class="form-control" placeholder="Relation">
                                                    <option value="">Relation</option>
                                                    <option value="Amaa">Mother</option>
                                                    <option value="2">Father</option>
                                                    <option value="3">Husband</option>
                                                    <option value="4">Wife</option>
                                                    <option value="5">Daughter</option>
                                                    <option value="6">Son</option>
                                                    <option value="7">Brother</option>
                                                    <option value="8">Elder Brother</option>
                                                    <option value="9">Elder Sister</option>
                                                    <option value="10">Sister</option>
                                            </select>
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="form-group">
                                            <h6>Contact Number</h6>
                                            <input type="integer" name="fcontactno" class="form-control" placeholder="Contact No">
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="step">
                                <h3 class="main_question"><strong>4/5</strong></h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <h6>Education</h6>
                                        <div class="clearfix">
                                            <select class="wide form-select" name="education" id="education" size="1" required>
                                                <option value="">Select Education</option>
                                                <option value="लेखपढ गरेको छैन">Illiteracy</option>
                                                <option value="विद्यालय स्तरीय">School Level (SEE/SLC)</option>
                                                <option value="प्रमाणपत्र तह">+2 Level</option>
                                                <option value="स्नातक स्नाकोत्तर">Bachlore</option>
                                                <option value="स्नातक स्नाकोत्तर">Degree</option>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6>Employed or not self-employed training</h6>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group radio_input">
                                            <label class="container_radio">Yes
                                                <input class="training_yes" type="radio" name="trainingoption" value="Y"/>
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">No
                                                <input class="training_no" type="radio" name="trainingoption" value="N"/>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                    <div class="training_yes_content">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select type="text" name="whattraining" class="form-control" placeholder="कस्तो तालिम">
                                                        <option value="To make clothes">To make clothes</option>
                                                        <option value="To make incense ">To make incense</option>
                                                        <option value="To make a hat">To make a hat </option>
                                                        <option value="Making sweaters">Making sweaters</option>
                                                        <option value="To make a bag">To make a bag</option>
                                                        <option value="To make sal">To make sal</option>
                                                        <option value="Toy making">Toy making</option>
                                                        <option value="Making woolen clothes">Making woolen clothes</option>
                                                        <option value="making Pasmina">Making Pasmina</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select type="text" name="wheretraining" class="form-control" placeholder="कहाँ बाट तालिम लिनुभएको">
                                                        <option value="INGO">INGO</option>
                                                        <option value="NGO">NGO </option>
                                                        <option value="Nepal Goverment">Nepal Goverment </option>
                                                        
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="submit step">
                                <h3 class="main_question"><strong>5/5</strong>Summary</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6>Are there any difficulty to run a business with training</h6>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group radio_input">
                                            <label class="container_radio">Yes
                                                <input class="bussiness_yes" type="radio" name="businessoption" value="Y" required />
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="container_radio">No
                                                <input class="bussiness_no" type="radio" name="businessoption" value="N" required />
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="bussiness_yes_content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="text" name="whatbusiness" class="form-control" placeholder="What kind of business">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select type="text" name="effectonbusiness" class="form-control" placeholder="Covid has made some impact">
                                                     <option value="">Covid has made some impact</option>
                                                  <option value="Yes">Yes</option>
                                                  <option value="No">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="clearfix">
                                                    <h6>What is the state of the business?</h6>
                                                    <select class="wide form-select" name="businessstatus" id="businesss" size="1">
                                                        <option value="संचालन भैरहेको">In operation</option>
                                                        <option value="बन्द भैसैकेको">Closed</option>
                                                        <option value="चाडै बन्द हुने अवस्था">In case of early closure</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>What are the plans and needs in the coming days? </label>
                                            <textarea name="remark" class="form-control" style="height:100px;" placeholder="Write if there is anything"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Mention that there are some possibilities and resources and raw materials to do business in your area. We try our best to help. </label>
                                            <textarea name="possiable" class="form-control" style="height:100px;" placeholder="Write if there is anything"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bottom-wizard">
                            <button type="button" name="backward" class="backward">Prev</button>
                            <button type="button" name="forward" class="forward">Next</button>
                            <button type="submit" name="process" class="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            @endif
        </div>
    </div>
    <div class="cd-overlay-nav">
        <span></span>
    </div>
    <!-- /cd-overlay-nav -->

    <div class="cd-overlay-content">
        <span></span>
    </div>
    <!-- /cd-overlay-content -->

    <!-- /menu button -->
    
    <!-- COMMON SCRIPTS -->
    <script src="{{ asset('site/assets/js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/scripts.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/velocity.min.js') }}"></script>
    <script src="{{ asset('site/assets/js/functions.js') }}"></script>

    <!-- Wizard script -->
    <script src="{{ asset('site/assets/js/survey_func.js') }}"></script>

    <script type="text/javascript">
        // for cityzenship
        $(".cityzenshipno").hide();
        $(".cityzenship_card_yes").click(function() {
            if($(this).is(":checked")) {
                $(".cityzenshipno").show();
            } else {
                $(".cityzenshipno").hide();
            }
        });

        $(".cityzenship_card_no").click(function(){
            if($(this).is(":checked")){
                $(".cityzenshipno").hide();
            } else{
                $(".cityzenshipno").show();
            }
            
        });
        // for identycard
        $(".identycardno").hide();
        $(".identy_card_yes").click(function() {
            if($(this).is(":checked")) {
                $(".identycardno").show();
            } else {
                $(".identycardno").hide();
            }
        });

        $(".identy_card_no").click(function(){
            if($(this).is(":checked")){
                $(".identycardno").hide();
            } else{
                $(".identycardno").show();
            }
            
        });

        // for other diable family 
        $(".other_disable_in_family_no").hide();
        $(".other_disable_in_family_yes").click(function(){
            if($(this).is(':checked')){
                $('.other_disable_in_family_no').show();
            }else{
                $('.other_disable_in_family_no').hide();
            }
        });

        // for training
        $(".training_yes_content").hide();
        $(".training_yes").click(function(){
            if($(this).is(':checked')){
                $(".training_yes_content").show();
            }else{
                $(".training_yes_content").hide();
            }
        });
        $(".training_no").click(function(){
            if($(this).is(':checked')){
                $(".training_yes_content").hide();
            }else{
                $(".training_yes_content").show();
            }
        });

        // for business
        $(".bussiness_yes_content").hide();
        $(".bussiness_yes").click(function(){
            if($(this).is(':checked')){
                $(".bussiness_yes_content").show();
            }else{
                $(".bussiness_yes_content").hide();
            }
        });
        $(".bussiness_no").click(function(){
            if($(this).is(':checked')){
                $(".bussiness_yes_content").hide();
            }else{
                $(".bussiness_yes_content").show();
            }
        });
    </script>
    <script src="{{asset('site/fontawesome/js/all.js')}}"></script>
    </body>
</html>
