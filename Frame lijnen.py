import cv2
import imutils
import numpy as np
import time
import math 
import PIL


# Ask input from user in centimeters
hight = int(input("Put here your hight in centimeters "))

# open the camera
cap = cv2.VideoCapture(0)
 
# if we don't find a camera  
if (cap.isOpened()== False): 
  print("Error opening video stream or file")

cap.set(cv2.CAP_PROP_FRAME_WIDTH, 720)
cap.set(cv2.CAP_PROP_FRAME_HEIGHT, 480)


# do this function when the camera can open (720p)
while(cap.isOpened()):
  ret, img = cap.read()
 
  #1 linker zijde
  cv2.line(img, (250,414), (250,191), (0,0,0), 3)
  #2 linker buiten been
  cv2.line(img, (261,658), (250,414), (0,0,0), 3)
  #3 linker voet
  cv2.line(img, (261,658), (300,658), (0,0,0), 3)
  #4 linker binnen been 
  cv2.line(img, (315,455), (300,658), (0,0,0), 3)
  #20 kruis
  cv2.line(img, (315,455), (337,455), (0,0,0), 3)
  #5 rechter binnen been
  cv2.line(img, (352,658), (337,455), (0,0,0), 3)
  #6 rechter voet
  cv2.line(img, (391,658), (352,658), (0,0,0), 3)
  #7 rechter buiten been 
  cv2.line(img, (391,658), (404,414), (0,0,0), 3)
  #8 rechter zijde
  cv2.line(img, (404,414), (404,191), (0,0,0), 3)
  #9 rechter onder arm
  cv2.line(img, (479,370), (404,191), (0,0,0), 3)
  #10 rechter hand 
  cv2.line(img, (479,370), (514,350), (0,0,0), 3)
  #11 rechter boven arm
  cv2.line(img, (514,350), (419,132), (0,0,0), 3)
  #12 rechter schouder
  cv2.line(img, (354,125), (419,132), (0,0,0), 3)
  #12 rechter nek
  cv2.line(img, (354,125), (354,90), (0,0,0), 3)
  #13 hoofd
  cv2.circle(img, (326,60), 40, (0,0,0), 3)
  #15 linker nek
  cv2.line(img, (296,125), (296,90), (0,0,0), 3)
  #16 linker shouder
  cv2.line(img, (296,125), (235,132), (0,0,0), 3)
  #17 linker boven arm 
  cv2.line(img, (140,350), (235,132), (0,0,0), 3)
  #18 linker hand 
  cv2.line(img, (140,350), (175,370), (0,0,0), 3)
  #19 linker onder arm 
  cv2.line(img, (175,370), (250,191), (0,0,0), 3)

  # represents the top left corner of image
  start_point_height = (325,25)
  start_point_chest = (250,210)
  start_point_taille = (270,375)
  start_point_hips = (250,414) 

  # represents the bottom right corner of image
  end_point_height = (325,658)
  end_point_chest = (404,210)
  end_point_taille = (384,375)
  end_point_hips = (404,414) 
    
  # Green color in BGR
  color = (0, 255, 0)
    
  # Line thickness of 3 px
  thickness = 3
    
  # Using cv2.line() method
  # Draw a diagonal green line with thickness of 9 px
  image = cv2.line(img, start_point_height, end_point_height, color, thickness)
  image = cv2.line(img, start_point_chest, end_point_chest, color, thickness)
  image = cv2.line(img, start_point_taille, end_point_taille, color, thickness)
  image = cv2.line(img, start_point_hips, end_point_hips, color, thickness)

  # calculating centimeter per pixel (3,4 pixels is 1 centimeter)
  pixelH = int(633)
  pixelsPerMetric = pixelH / hight

  # calculating the chest
  pixelC = int(140)
  pixelChest = pixelC / pixelsPerMetric * 2.5

  # calculating the taille
  pixelT = int(121)
  pixelTaille = pixelT / pixelsPerMetric * 2.5
  
  # calculating the hips
  pixelH = int(144)
  pixelHips = pixelH / pixelsPerMetric * 2.5

  # show in frame 
  cv2.imshow('frame', img)
  if cv2.waitKey(25) & 0xFF == ord('q'):
      break 

# close the camera
cap.release()

# close all the opend windows
cv2.destroyAllWindows()



# show the size in cm 
print(f"""
  your chest size is {pixelChest} centimeter
  your taille size is {pixelTaille} centimeter
  your hips size is {pixelHips} centimeter
  """)
