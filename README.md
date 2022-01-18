# Measure software

Read me 


Wie 
Onze primaire klant is de eigenaar van een kleding webshop. 

Onze secundaire klant is de websiteontwikkelaar. Deze klant maakt en verkoop websites met onze software er in. 

Wat 
MeasureMe is een software die je kleding maat kan meten door het maken van 1 foto. 

Hier staat gemak centraal. De software moet met 1 druk op de knop op je website kunnen instaleren. Mensen hoeven hiervoor niet meerdere formulieren in te vullen. Er wordt na elke test gekeken hoe wij alles zo gemakkelijk mogelijk maken zonder eerdere handelingen te doen. 

Waar
De software wordt verkocht via wordpress, shopify en wix (drag and drop websites)

Hoe
Het werkt als volgt: 
De persoon gaat voor de camera van zijn laptop/telefoon staan. De software is voor de desktop en mobiel te gebruiken. Daarom moet alles responsieve worden gemaakt. Als de op ‘foto maken’ klikt gaat er een timer van 10 seconde af. Op de website staat aangegeven hoe die moet staan. Als de timer op 0 komt wordt er automatisch een foto gemaakt. Deze foto gaat naar een machine learning model die het omzet in een 3D model. Een ander programma berekent de vertices van de lengte en omtrek. Dit zet die om in centimeters. Om te weten op welke hoogte de borst, taille en heup zitten gebruiken we Fibonacci. Van de lengte zit op 0.75 (borst), 0.625 (taille), 0.5 (heup). Als dat programma de centimeters weet kijkt het in de database van kleding maten welke maat het beste bij de omtrek past. 

De informatie van de personen wordt opgeslagen in een database. De informatie die wij opslaan is leeftijd, afmetingen persoon, plaats, geslacht, en hoe vaak ze kleding kopen. Om de leeftijd en gelschat van de persoon te meten maken we gebruik van een ai die van je gezicht kan herkennen hoe oud je bent, je afkomst en leeftijd. 

Waarom
Uit onderzoek van NOS is gebleken dat 40% van de kleding die online wordt gekocht retour gaat. Daarbij komt 530 gram Co2 vrij. In Nederland worden er dagelijks 75.000 pakketjes aan kleding gekocht. Daarvan gaan er 30.000 terug. De verkoper betaald €12,50 per pakketjes wat terug gestuurd wordt.

Dagelijkse pakketjes 	75.000
Dagelijkse retour pakketjes	30.000
Dagelijkse kosten verkoper	€375.000
dagelijkse Co2 uitstoot van gekocht/retour55.600 kg

Waarmee
De software wordt met javascript en python gemaakt. Javascript wordt gebruikt voor het nemen van de foto in een website. Python wordt gebruikt voor machine learning script en het omzetten van vertices naar centimeters. MySql wordt gebruikt voor het opslaan van data en het lezen van data. 

Wanneer 

