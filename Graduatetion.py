import numpy as np
import cv2

#Acquisition
image = cv2.imread('uploaded/testimage.jpeg')
cv2.imshow('test image', image)
cv2.waitKey(0)

#Preprocessing : binarization
gray = cv2.cvtColor(image,cv2.COLOR_BGR2GRAY)
cv2.imshow('gray test image', gray)
cv2.waitKey(0)

#Preprocessing : Filtering
blurred = cv2.GaussianBlur(gray, (5, 5), 0)
cv2.imshow("blurred", blurred)
cv2.waitKey(0)

#Preprocessing : Edge Detection
edgeDetection = cv2.Canny(blurred, 30, 150)
cv2.imshow("edged", edgeDetection)
cv2.waitKey(0)


#Preprocessing : threshholding : morphological operations
kernel = cv2.getStructuringElement(cv2.MORPH_ELLIPSE, (1, 5))
thresh = cv2.morphologyEx(edgeDetection, cv2.MORPH_OPEN, kernel)
cv2.imshow("threshholding", thresh)
cv2.waitKey(0)


def x_cord_contour(contour):
    # This function take a contour from findContours
    # it then outputs the x centroid coordinates

    if cv2.contourArea(contour) > 10:
        M = cv2.moments(contour)
        return (int(M['m10'] / M['m00']))


def makeSquare(not_square):
    # This function takes an image and makes the dimenions square
    # It adds black pixels as the padding where needed

    BLACK = [0, 0, 0]
    img_dim = not_square.shape
    height = img_dim[0]
    width = img_dim[1]
    if (height == width):
        square = not_square
        return square
    else:
        doublesize = cv2.resize(not_square, (2 * width, 2 * height), interpolation=cv2.INTER_CUBIC)
        height = height * 2
        width = width * 2
        if (height > width):
            pad = (height - width) / 2
            doublesize_square = cv2.copyMakeBorder(doublesize, 0, 0, pad, pad, cv2.BORDER_CONSTANT, value=BLACK)
        else:
            pad = (width - height) / 2
            # print("Padding = ", pad)
            doublesize_square = cv2.copyMakeBorder(doublesize, pad, pad, 0, 0, cv2.BORDER_CONSTANT, value=BLACK)
    doublesize_square_dim = doublesize_square.shape
    return doublesize_square


def resize_to_pixel(dimensions, image):
    # This function then re-sizes an image to the specificied dimenions

    buffer_pix = 4
    dimensions = dimensions - buffer_pix
    squared = image
    r = float(dimensions) / squared.shape[1]
    dim = (dimensions, int(squared.shape[0] * r))
    resized = cv2.resize(image, dim, interpolation=cv2.INTER_AREA)
    img_dim2 = resized.shape
    height_r = img_dim2[0]
    width_r = img_dim2[1]
    BLACK = [0, 0, 0]
    if (height_r > width_r):
        resized = cv2.copyMakeBorder(resized, 0, 0, 0, 1, cv2.BORDER_CONSTANT, value=BLACK)
    if (height_r < width_r):
        resized = cv2.copyMakeBorder(resized, 1, 0, 0, 0, cv2.BORDER_CONSTANT, value=BLACK)
    p = 2
    ReSizedImg = cv2.copyMakeBorder(resized, p, p, p, p, cv2.BORDER_CONSTANT, value=BLACK)
    img_dim = ReSizedImg.shape
    height = img_dim[0]
    width = img_dim[1]
    return ReSizedImg


_, contours, _= cv2.findContours(edgeDetection.copy(), cv2.RETR_EXTERNAL, cv2.CHAIN_APPROX_SIMPLE)

# Sort out contours left to right by using their x cordinates
contours = sorted(contours, key=x_cord_contour, reverse=False)

# Create empty array to store entire number
full_number = []

# loop over the contours
for c in contours:
    # compute the bounding box for the rectangle
    (x, y, w, h) = cv2.boundingRect(c)

    if w >= 5 and h >= 25:
        roi = blurred[y:y + h, x:x + w]
        ret, roi = cv2.threshold(roi, 127, 255, cv2.THRESH_BINARY_INV)
        squared = makeSquare(roi)
        final = resize_to_pixel(20, squared)
        final_array = final.reshape((1, 400))
        final_array = final_array.astype(np.float32)
        # draw a rectangle around the digit, the show what the
        # digit was classified as
        cv2.rectangle(image, (x, y), (x + w, y + h), (0, 0, 255), 2)
        cv2.imwrite("outputs/testimage.jpeg", image)
