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
                        <h4 style="color: green">अपाङ्गता भएका व्यक्तिहरुका लागि स्वरोजगार प्रर्वद्धनका कार्यक्रम</h4>
                    </div>
                        <figure><img src="{{ asset('site/img/helpinghandlogo.png') }}" alt="" class=""></figure>
                        <div style="background: rgba(255, 255, 255, 0.6); padding: 15px;">
                        <!-- <h2>Satisfaction Survey</h2> -->
                        <p style="text-align: left; color: #000">नमस्कार !! <br /> 
                            यस Yes Helping Hands ले राष्ट्रिय अपाङ्ग महासंघ नेपाल सँग सहकार्य गरी  अपाङ्गता भएका व्यक्तिहरुको आजसम्मको तथ्याङ्क संकलन र वस्तुस्थितीको जानकारी लिई उहाँहरुको क्षमता प्रष्फुटन तथा अभिवृद्धि, स्वरोजगार तथा रोजगारीका निमित्त विभिन्न निःशुल्क सिपमुलक तालिमहरु अनलाइन माध्यमबाट गराउन गईरहेको कुरा यहाँहरुलाई जानकारी गराउन चाहान्छौँ । यस “Status of People With disability in Nepal 2020” नामक अध्यायन र यसका उदेश्यहरु पुरा गर्न तलका प्रश्नहरुको उत्तर दिई सहयोग गरिदिनुहोला ।</p>
                            <br />
                            <span style="color: #000">राष्ट्रिय अपाङ्ग महासंघ नेपाल</span>
                            <img class="img-fluid" src="{{ asset('site/img/header_final16122018.jpg') }}" alt="राष्ट्रिय अपाङ्ग महासंघ नेपाल लोगो" title="राष्ट्रिय अपाङ्ग महासंघ नेपाल लोगो">
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-md-12" style="text-align: center;margin-bottom: 15px;">
                                    <h6>Select Language</h6>
                                    <a class="btn btn-primary" href="{{route('getLanguage', 'np')}}">Nepali</a> | <a class="btn btn-primary" href="{{route('getLanguage', 'en')}}">English</a>
                                </div>
                        </div>
                    </div>
                    <div class="copy">&copy; <?php echo date('Y'); ?> yeshelpinghands.org</div>
                </div>
                <!-- /content-left-wrapper -->
            </div>
            
            <div class="col-lg-6 content-right">
                <a href="{{route('getForm')}}" class="button7" style="background-color:orange; color: green; padding: 15px; font-size: 19px; border-radius: 10px;">
                    @if($language == 'en')
                    Fillup Form
                    @else
                    फर्म भर्नुहोस् 
                    @endif
                </a>
            </div>
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
