# camera.py
import cv2

def capture_image():
    cap = cv2.VideoCapture(0)
    ret, frame = cap.read()
    if ret:
        cv2.imwrite('capture.jpg', frame)
    cap.release()

if __name__ == "__main__":
    capture_image()