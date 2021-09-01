# Vraagt hoe lang je bent om daarna te berekenen hoeveel pixels 1 centimeter is
centimeter = int(input("Hoe lang ben je in centimeters "))

# Vragen naar de coördinaten van je lengte 
coördinaten_boven_rechts_lengte = int(input("Voer hier de bovenste rechtse coördinaten van de lengte "))
coördinaten_boven_links_lengte = int(input("Voer hier de bovenste linkse  coördinaten van de lengte "))
coördinaten_onder_rechts_lengte = int(input("Voer hier de onderste rechtse coördinaten van de lengte "))
coördinaten_onder_links_lengte = int(input("Voer hier de onderste linkse coördinaten van de lengte "))

# pixels brekenen van de coördinaten 
x = coördinaten_onder_rechts_lengte - coördinaten_boven_rechts_lengte
y = coördinaten_onder_links_lengte - coördinaten_boven_links_lengte

# Berekend hoeveel pixels 1 centimeter is
pixel_in_centimeter = y / centimeter

# lengte wordt berekend door de coördinaten delen door pixels in centimter 
lengte = y / pixel_in_centimeter 



# Vragen naar de coördinaten van je breete borst 
coördinaten_boven_rechts_borst = int(input("Voer hier de bovenste rechtse coördinaten van de breete "))
coördinaten_boven_links_borst = int(input("Voer hier de bovenste linkse  coördinaten van de breete "))
coördinaten_onder_rechts_borst = int(input("Voer hier de onderste rechtse coördinaten van de breete "))
coördinaten_onder_links_borst = int(input("Voer hier de onderste linkse coördinaten van de breete "))

# pixels brekenen van de coördinaten 
x = coördinaten_onder_rechts_borst - coördinaten_boven_rechts_borst
y = coördinaten_onder_links_borst - coördinaten_boven_links_borst

# breete borst wordt berekend door de coördinaten delen door pixels in centimter 
borst = x / pixel_in_centimeter * 2



# Vragen naar de coördinaten van je breete taille 
coördinaten_boven_rechts_taille = int(input("Voer hier de bovenste rechtse coördinaten van de taille "))
coördinaten_boven_links_taille = int(input("Voer hier de bovenste linkse  coördinaten van de taille "))
coördinaten_onder_rechts_taille = int(input("Voer hier de onderste rechtse coördinaten van de taille "))
coördinaten_onder_links_taille = int(input("Voer hier de onderste linkse coördinaten van de taille "))

# pixels brekenen van de coördinaten 
x = coördinaten_onder_rechts_taille - coördinaten_boven_rechts_taille
y = coördinaten_onder_links_taille - coördinaten_boven_links_taille

# breete taille wordt berekend door de coördinaten delen door pixels in centimter 
taille = x / pixel_in_centimeter * 2



# Vragen naar de coördinaten van je breete borst 
coördinaten_boven_rechts_heup = int(input("Voer hier de bovenste rechtse coördinaten van de heup "))
coördinaten_boven_links_heup = int(input("Voer hier de bovenste linkse  coördinaten van de heup "))
coördinaten_onder_rechts_heup = int(input("Voer hier de onderste rechtse coördinaten van de heup "))
coördinaten_onder_links_heup = int(input("Voer hier de onderste linkse coördinaten van de heup "))

# pixels brekenen van de coördinaten 
x = coördinaten_onder_rechts_heup - coördinaten_boven_rechts_heup
y = coördinaten_onder_links_heup - coördinaten_boven_links_heup

# breete heup wordt berekend door de coördinaten delen door pixels in centimter 
taille = x / pixel_in_centimeter * 2

# laat zien wat je omtrek is van je lichaam 
print(f"Je borst {borst} is centimeter breed")
print(f"Je taille is: {taille} centimeter breed")
print(f"Je heup is: {taille} centimeter breed")




