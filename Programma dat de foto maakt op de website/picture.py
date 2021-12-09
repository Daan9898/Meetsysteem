import cv2
import time
import numpy as np

from utils import CFEVideoConf, image_resize

# SET THE COUNTDOWN TIMER for simplicity we set it to 3 we can also take this as input
TIMER = int(10)

# open the camera
cap = cv2.VideoCapture(0)

# image need to be a jpg format
img_path = 'Frame foto\cfe-coffee.jpg'
logo = cv2.imread(img_path, -1)
watermark = image_resize(logo, height=50)
watermark = cv2.cvtColor(watermark, cv2.COLOR_BGR2BGRA)


while True:
    # Capture frame-by-frame
    ret, frame = cap.read()
    frame = cv2.cvtColor(frame, cv2.COLOR_BGR2BGRA)
    frame_h, frame_w, frame_c = frame.shape

    # Flip for turning (flipping) frames of video horizontal
    frame = cv2.flip(frame, 1)

    # overlay with 4 channels BGR and Alpha
    overlay = np.zeros((frame_h, frame_w, 4), dtype='uint8')
    watermark_h, watermark_w, watermark_c = watermark.shape
    # replace overlay pixels with watermark pixel values
    for i in range(0, watermark_h):
        for j in range(0, watermark_w):
            if watermark[i,j][3] != 0:
                offset = 10
                h_offset = frame_h - watermark_h - offset
                w_offset = frame_w - watermark_w - offset
                overlay[h_offset + i, w_offset+ j] = watermark[i,j]

    cv2.addWeighted(overlay, 0.25, frame, 1.0, 0, frame)

    frame = cv2.cvtColor(frame, cv2.COLOR_BGRA2BGR)   

    # Text to activate timer
    font = cv2.FONT_HERSHEY_SIMPLEX
    cv2.putText(frame, 'Press spacebar to activate', (100,450), font, 1, (0, 255, 0), 1, cv2.LINE_AA)

    # Where the video is showed in frame
    cv2.imshow('frame', frame)

    # check for the key pressed
    k = cv2.waitKey(125)

    # set for the countdwon to begin, to activate press q
    if k == ord(' '):
        prev = time.time()

        while TIMER >= 0:
            # Capture frame-by-frame
            ret, frame = cap.read()
            frame = cv2.cvtColor(frame, cv2.COLOR_BGR2BGRA)
            frame_h, frame_w, frame_c = frame.shape

            # Flip for turning (flipping) frames of video horizontal
            frame = cv2.flip(frame, 1)

            # overlay with 4 channels BGR and Alpha
            overlay = np.zeros((frame_h, frame_w, 4), dtype='uint8')
            watermark_h, watermark_w, watermark_c = watermark.shape
            # replace overlay pixels with watermark pixel values
            for i in range(0, watermark_h):
                for j in range(0, watermark_w):
                    if watermark[i,j][3] != 0:
                        offset = 10
                        h_offset = frame_h - watermark_h - offset
                        w_offset = frame_w - watermark_w - offset
                        overlay[h_offset + i, w_offset+ j] = watermark[i,j]

            cv2.addWeighted(overlay, 0.25, frame, 1.0, 0, frame)

            frame = cv2.cvtColor(frame, cv2.COLOR_BGRA2BGR)

            # Display countdown on each frame Specify the front and draw the countdown using puttext
            font = cv2.FONT_HERSHEY_SIMPLEX
            cv2.putText(frame, str(TIMER), (300, 250), font, 3, (0, 255, 255), 4, cv2.LINE_AA)
            cv2.imshow('frame', frame)
            cv2.waitKey(125)

            # Current time
            cur = time.time()

            # Update and keep track of Countdown if tie elapsed is one second than decrease the counter
            if cur-prev >= 1:
                prev = cur
                TIMER = TIMER-1

        else:
            ret, frame = cap.read()

            # Display the clicked frame for 2 sec. You can increase time in waitkey also
            cv2.imshow('frame', frame)

            # time for wich image displayed 2 seconds 
            cv2.waitKey(2000)

            # Save the frame as camera.jpg
            cv2.imwrite('camera.jpg', frame)

            # HERE we an reset the Countdown timer if we want more capture without closing the camera

    # Press Esc to exit
    elif k == 27:
        break

# close the camera
cap.release()

# close all the opend windows
cv2.destroyAllWindows()