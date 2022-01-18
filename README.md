# Meetsysteem

### Wie 
Onze primaire klant is de eigenaar van een kleding webshop. 

Onze secundaire klant is de websiteontwikkelaar. Deze klant maakt en verkoop websites met onze software er in. 

### Wat 
MeasureMe is een software die je kleding maat kan meten door het maken van 1 foto. 

Hier staat gemak centraal. De software moet met 1 druk op de knop op je website kunnen instaleren. Mensen hoeven hiervoor niet meerdere formulieren in te vullen. Er wordt na elke test gekeken hoe wij alles zo gemakkelijk mogelijk maken zonder eerdere handelingen te doen. 

### Waar
De software wordt verkocht via wordpress, shopify en wix (drag and drop websites)

### Hoe
Het werkt als volgt: 
De persoon gaat voor de camera van zijn laptop/telefoon staan. De software is voor de desktop en mobiel te gebruiken. Daarom moet alles responsieve worden gemaakt. Als de op ‘foto maken’ klikt gaat er een timer van 10 seconde af. Op de website staat aangegeven hoe die moet staan. Als de timer op 0 komt wordt er automatisch een foto gemaakt. Deze foto gaat naar een machine learning model die het omzet in een 3D model. Een ander programma berekent de vertices van de lengte en omtrek. Dit zet die om in centimeters. Om te weten op welke hoogte de borst, taille en heup zitten gebruiken we Fibonacci. Van de lengte zit op 0.75 (borst), 0.625 (taille), 0.5 (heup). Als dat programma de centimeters weet kijkt het in de database van kleding maten welke maat het beste bij de omtrek past. 

De informatie van de personen wordt opgeslagen in een database. De informatie die wij opslaan is leeftijd, afmetingen persoon, plaats, geslacht, en hoe vaak ze kleding kopen. Om de leeftijd en gelschat van de persoon te meten maken we gebruik van een ai die van je gezicht kan herkennen hoe oud je bent, je afkomst en leeftijd. 

### Waarom
Uit onderzoek van NOS is gebleken dat 40% van de kleding die online wordt gekocht retour gaat. Daarbij komt 530 gram Co2 vrij. In Nederland worden er dagelijks 75.000 pakketjes aan kleding gekocht. Daarvan gaan er 30.000 terug. De verkoper betaald €12,50 per pakketjes wat terug gestuurd wordt.

| Dagelijks        | Aantal           | 
| ------------- |:-------------:| 
| Pakketjes    | 75.000| 
| Retours     | 30.000  |   
| Kosten verkoper | €375.000    |   
| Co2 uitstoot| 55.600 KG      |


Dagelijkse pakketjes 	75.000
Dagelijkse Retour pakketjes	30.000
Kosten verkoper	€375.000
Co2 uitstoot	55.600 kg

### Waarmee
De software wordt met javascript en python gemaakt. Javascript wordt gebruikt voor het nemen van de foto in een website. Python wordt gebruikt voor machine learning script en het omzetten van vertices naar centimeters. MySql wordt gebruikt voor het opslaan van data en het lezen van data. 

### Wanneer 
Nog niet bekend


### Gebruikers perspectief 
Button:
Dit is de knop op de website waar mensen het systeem mee activeren. Er wordt een nieuw tabblad geopend.

Voorbeeld foto: 
![alt text](https://github.com/Daan9898/Meetsysteem/blob/main/Img/MeasureMe%20button.PNG "Logo Title Text 1")

Frame:
In het nieuwe tabblad moet de persoon op camera toestaan klikken. Als de persoon dit niet doet kan de camera ook niet aan.

Wanneer er op de knop wordt gedrukt gaat het frame open met daarin aangegeven de buitenlijn van een persoon waar iemand in moet staan. Dit zorgt er voor dat we geen halve beelden krijgen. 

Het maken van de foto:
Wanneer de gebruiker op Click Photo klikt wordt er van 10 seconde afgeteld in de frame. De gebruiker heeft nu tijd om goed te staan in de frame. Als die bij 0 komt maakt het programma een foto en stuurt die door naar de server. 


Voorbeeld foto: 
![alt text](https://github.com/Daan9898/Meetsysteem/blob/main/Img/Take%20picture%20button.PNG "Logo Title Text 1")


Waar zitten de borst, taille en heup in percentages van de persoon
uit het voorbeeld hier onder is te zien dat je de mens in 8 delen kan opdelen. 100% geeft de hoogte aan van de persoon. 2.  Geeft de borst aan 75% zou de borst zitten. 3 geeft de taille aan. Deze zou op 62,5% zitten. Op plek 4 zou ongeveer de heup zitten op 50% van de lichaam.

Voorbeeld foto: 
![alt text](https://github.com/adam-p/markdown-here/raw/master/src/common/images/icon48.png "Logo Title Text 1")







