---
---
Laddningstid
=========================

Detta innehåll är skrivet i markdown och du hittar innehållet i filen `content/rapport/05_laddningstid.md`.

I den här uppgiften ska jag välja ut tre olika webbsidor och göra en analys över laddningstiderna på sidorna.

Urval
-------------------------

Jag har valt tre olika webbsidor inom samma bransch. Dessa är Svenska Dagbladet, Expressen och Aftonbladet. Jag gillar att läsa nyheter och tyckte att det var intressant att jämföra tre sidor i samma bransch för att se om det finns likheter och olikheter mellan dessa.

Metod
--------------------------

Jag har huvudsakligen arbetat med Google Pagespeed som verktyg för analysen, samt även devtools i Firefox.

Kalkylark
--------------------------

Jag har sparat mina mätningar i [Google kalkylark](https://docs.google.com/spreadsheets/d/1WLBLoMbgnnET-V4P37F0VYvYxNAjxdy-mHN34kMqIeI/edit?usp=sharing)


SvD
--------------------------

[FIGURE src="img/svd.png"]

####Mobil####
Betyg: 27  

Problem med Första uppritningen av innehåll, tid till interaktivt tillstånd, första meningsfulla skärmuppritningen, första CPU-inaktivitet och högsta potentiella fördröjning till första inmatningen.

Förslag till förbättring är att ta bort resurser som blockerar renderingen, skjut upp inläsningen av bilder som inte visas på skärmen, se till att all text förblir synlig medan webbteckensnitten läses in, undvik ett onödigt stort DOM-träd, minska arbetsbelastningen på modertråden och skicka statiska tillgångar med en effektiv cachelagringspolicy.

####Desktop####
Betyg: 52  

Huvudsakliga problem är hastighetsindex och tid till interaktivt tillstånd.

Viktigaste förslagen till förbättring är att se till att all text förblir synlig medan webbteckensnitten läses in, minska påverkan från tredjepartskod, skicka statiska tillgångar med en effektiv cachelagringspolicy, undvik ett onödigt stort DOM-träd samt minska arbetsbelastningen på modertråden.

Desktop-sidan var ok enligt Page speed men däremot hade mobil-sidan stora problem. Det fanns ett helt batteri med fel och förslag på lösningar där.

Expressen
---------------------------

[FIGURE src="img/expressen.png"]

####Mobil####
Betyg: 75  

Huvudsakligen problem med högsta potentiella fördröjning till första inmatningen.

Förslag på förbättringar är att minska påverkan från tredjepartskod och undvika ett onödigt stort DOM-träd.

####Desktop####
Betyg: 84  

Egentligen inga stora problem här.

Det viktigaste förslaget är att skicka bilder i modernare bildformat.

Det här är en sida med goda betyg och små problem. Det huvudsakliga förslaget för desktop är att använda sig av bildformaten JPEG 2000, JPEG XR och WebP för att snabba upp laddtider och minska mängden nedladdad data. För mobilsidan var ett förslag att minska påverkan från tredjepartskod. Jag gissar att det i mångt och mycket handlar om annonsering. Det kanske går att undvika men samtidigt är det ett sätt att tjäna pengar. DOM-trädet var tydligen onödigt stort också med 2608 element mot rekommenderade 1500.

Aftonbladet
---------------------------

[FIGURE src="img/aftonbladet.png"]

####Mobil####
Betyg: 22  

Stora problem med allt möjligt här. Hastighetsindex, tid till interaktivt tillstånd, första CPU-inaktivitet och högsta potentiella fördröjning till första inmatningen.

Förbättringsförslag är att all text förblir synlig medan webbteckensnitten läses in, minska påverkan från tredjepartskod, skicka statiska tillgångar med en effektiv cachelagringspolicy, undvik ett onödigt stort DOM-träd, minska körningstiden för JavaScript samt minska arbetsbelastningen på modertråden.

####Desktop####
Betyg: 59  

Problem med framförallt tid till interaktivt tillstånd, första CPU-inaktivitet och högsta potentiella fördröjning till första inmatningen.

Förbättringsförslag är alla enligt ovan plus att undvika enorm nätverksbelastning.

Det här är en sida som liknar Svd i den mån att mobil-sidan är dålig, samt att desktop-sidan är ok. Det som står ut på desktop-sidan är att undvika enorm nätverksbelastning. Det verkar huvudsakligen handla om att mycket skickad data kostar användaren pengar. Jag har dock svårt att tro att det är ett stort problem i Sverige. Det måste vara få som har rörliga kostnader när de sitter på desktop. Det är möjligt att några kör via mobil wifi. Då kanske det är ett problem.

Analys
-----------------------

I de här mätningarna fanns det en klar vinnare. Expressen hade både en bra mobil sida och en bra desktopsida Google PageSpeed (egentligen bara godkända men i det övre intervallet). SvD och Aftonbladet hade påfallande dåliga mobila sidor men godkända desktopsidor.

När jag tittade på Devtools så var ändå sidorna påfallande lika. De hade alla ca 210+ resurser som laddades och hastigheten låg mellan 5-6 sekunder plus ett antal tiondelar. Det som skilde sig mellan sidorna var att Expressen skickade mycket mindre data. Sidans totala storlek var nästan en tredjedel av SvDs och Aftonbladets sidor, vilket säkert är en viktig del av de goda resultat som även kom via Google PageSpeed. Det som var lite förvånande var att resurserna aldrig slutade laddas från någon sida. De låg och "tickade" hela tiden utan att ta slut. Något jag också blev förvånad över var att laddtiden låg på 5-6+ sekunder. Utan att veta något om det så trodde jag att det skulle gå fortare.

Det fanns många förbättringsåtgärder på Google PageSpeed men den förbättringsåtgärd som fanns på samtliga tre sidorna (både mobil och desktop) är att undvika ett onödigt stort DOM-träd. När jag läser lite om det så är ett generellt tips att enbart skapa DOM-noder när de behövs och förstöra dem när de inte längre behövs. Ett annat tips var att skapa DOM-noder efter interaktion från användaren, såsom att skrolla eller klicka på en knapp.

I övrigt var skicka bilder i modernare format vanlig förbättringsåtgärd, samt se till att all text förblir synlig medan webbteckensnitten läses in, minska arbetsbelastningen på modertråden, skicka statiska tillgångar med en effektiv cachelagringspolicy, ta bort resurser som blockerar renderingen, minska påverkan från tredjepartskod och skjut upp inläsningen av bilder som inte visas på skärmen.

Det som är märkligt är att både SvD och Aftonbladet hade så pass dåliga mobilsidor. Med tanke på att det är stora tidningar, med många läsare, och att det är vanligt att läsa på mobilen idag, så vore det logiskt att satsa resurser på den mobila versionen. Alla tre tidningar har dock egna appar och det är möjligt att de har lagt sitt "krut" där. Dvs att de tänker att de flesta som läser på mobilen ska gå in och läsa tidningen via appen.

Rangordning webbsidor:

1. Expressen
2. Svd och Aftonbladet

Jag var inne och tittade på dbwebb.se och såg att laddningstiden låg på 1.76 s. Min erfarenhet av att titta på sidor utifrån laddtider är väldigt liten men min upplevelse är att dbwebb är behagligt snabb. Jag är ofta inne på SvD och läser nyheter men upplever ofta lite irritation över att det tar lite för lång tid att ladda sidan. Mellan tumme och pekfinger så kan jag utifrån detta säga att allt under ca 2 s borde kännas snabbt medan allt över 5 s borde kännas långsamt. Det är nog viktigt att ha i åtanke att dessa tidningsidor är mer grafikintensiva och kanske därför mer tilltalande för ögat än exempelvis dbwebb, som är mer minimalistisk i sin design.

Men med ovanstående resonemang i åtanke så blir alla sidor för långsamma för min smak. För att jag ska uppfatta dem som rimligt snabba så skulle de tjäna på att snabbas upp.

Författare
-------------------------

Rapporten har gjorts som enskilt arbete. Den har analyserats och författats av Johan Rejhed.
