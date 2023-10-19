import time
from machine import Pin, USB_HID

usb_keyboard = USB_HID()
time.sleep(2)  # Wait for USB enumeration

while True:
    if usb_keyboard.isconnected():
        usb_keyboard.send(Keycode.A)  # Simulate pressing 'A'
        time.sleep(0.1)  # Add a delay
        usb_keyboard.send(Keycode.B)  # Simulate pressing 'B'
        time.sleep(0.1)  # Add a delay
        # Repeat for other key presses
