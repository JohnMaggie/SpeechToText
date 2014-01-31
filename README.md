SpeechToText
============

Submission for code ninja competeition

Please see http://nuigstt.zxq.net/ for full demo, didn't have time to upload pictures to git hub but they are all on the demo.

when running the demo, lecturer login details are 
name: admin
pass: admin

open the lecturer page and start
open home.html too to send teh video link to teh student

on the same device or a different device open student.html
click start
A video link of the lecturers web cam as well as the converted speech to text will be displayed on the students page.

***********************************************************************************************************

The code simply uses the getusermedia function of javascript to take the feed from both the webcam and the microphone of the lecturer it uses the google API to convert the speech to text, ajax to send the converted text to the server which uses php to save it to a file on the server, the student page then uses ajax to request the contents of the file from the server and displays it to the student

Similarily the video stream is taken in using getusermedia, converted to a base64 image, posted to a file in the server. The student page requests this information decodes the base64 image and pastes teh image to a canvas in the student page, this is done every few hundred ms to give the illusion of live video.

This will allow users of hearing difficulties to get the most out of lectures and speeches, giving them the video for lip reading and gestures as well as the speech to text to get the speech word for word. The google hangout is also used to screen capture from the lecturers laptop to transmit the lecturers slides to teh student so the student has everything on their screen. 

If any  other details are needed please contact me 
John Maguire
0876246259
j.maguire4@nuigalway.ie
