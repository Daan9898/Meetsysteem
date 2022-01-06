import cv2
import time
import numpy as np

# SET THE COUNTDOWN TIMER for simplicity we set it to 3 we can also take this as input
TIMER = int(10)

# open the camera
cap = cv2.VideoCapture(0)

while True:
    # Read and display each frame
    ret, img = cap.read()

    # Flip for turning (flipping) frames of video horizontal
    img = cv2.flip(img, 1)
    
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
    # Text 
    font = cv2.FONT_HERSHEY_SIMPLEX
    cv2.putText(img, 'Press spacebar to activate', (100,450), font, 1, (0, 255, 0), 1, cv2.LINE_AA)

    cv2.imshow('frame', img)

    # check for the key pressed
    k = cv2.waitKey(125)

    # set for the countdwon to begin, Here we set q if key pressed is q
    if k == ord(' '):
        prev = time.time()

        while TIMER >= 0:
            ret, img = cap.read()

            # Flip for turning (flipping) frames of video horizontal
            img = cv2.flip(img, 1)

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
                        
            # Display countdown on each frame Specify the front and draw the countdown using puttext
            font = cv2.FONT_HERSHEY_SIMPLEX
            cv2.putText(img, str(TIMER),
                        (300, 250), font,
                        3, (0, 255, 255),
                        4, cv2.LINE_AA)
            cv2.imshow('frame', img)
            cv2.waitKey(125)

            # Current time
            cur = time.time()

            # Update and keep track of Countdown if tie elapsed is one second than decrease the counter
            if cur-prev >= 1:
                prev = cur
                TIMER = TIMER-1

        else:
            ret, img = cap.read()

            # Display the clicked frame for 2 sec. You can increase time in waitkey also
            cv2.imshow('frame', img)

            # time for wich image displayed
            cv2.waitKey(2000)

            # Save the frame
            cv2.imwrite('camera.jpg', img)

            # HERE we an reset the Countdown timer if we want more capture without closing the camera

    # Press Esc to exit
    elif k == 27:
        break

# close the camera
cap.release()

# close all the opend windows
cv2.destroyAllWindows()

