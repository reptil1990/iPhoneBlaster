#!/usr/bin/python

import sys
import Adafruit_DHT
import RPi.GPIO as GPIO

GPIO.setmode(GPIO.BCM)
GPIO.setup(20, GPIO.OUT)
GPIO.setup(21, GPIO.OUT)

humidity, temperature = Adafruit_DHT.read_retry(22, 22)


if humidity is not None and temperature is not None:
        if int(temperature) > 30:
            GPIO.output(20,GPIO.HIGH)
        else:
            GPIO.output(20,GPIO.LOW)
        if int(temperature) > 35:
            GPIO.output(21,GPIO.HIGH)
            return 1
        else:
            GPIO.output(21,GPIO.LOW)
            return 0
