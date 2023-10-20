import pyb
import time

# Delay for 2 seconds to allow USB enumeration
time.sleep(2)

# Function to simulate key press
def key_press(keycode):
    pyb.usb_hid.send((0, keycode, 0, 0, 0, 0, 0, 0))
    time.sleep(0.05)  # Delay to simulate key press

# Function to simulate key release
def key_release():
    pyb.usb_hid.send((0, 0, 0, 0, 0, 0, 0, 0))
    time.sleep(0.05)  # Delay to simulate key release

# Function to simulate keyboard input
def keyboard_input(input_string):
    pyb.usb_hid.init()
    time.sleep(1)  # Delay for 1 second to allow HID initialization

    for char in input_string:
        key_press(ord(char))
        key_release()

# Simulate pressing the Windows key
key_press(0x15)  # Left GUI key (Windows key)
key_release()

# Simulate typing "chrome" and pressing Enter to open Chrome
keyboard_input("chrome")
key_press(0x28)  # Enter key
key_release()

# Wait for Chrome to open
time.sleep(5)

# Simulate typing a web address (e.g., google.com) and pressing Enter
keyboard_input("google.com")
key_press(0x28)  # Enter key
key_release()

# Wait for the browser to load the webpage
time.sleep(5)

# Simulate typing a search query (e.g., "USB Rubber Ducky") and pressing Enter
keyboard_input("USB Rubber Ducky")
key_press(0x28)  # Enter key
key_release()

# Wait for search results to load
time.sleep(5)

# Simulate Alt+F4 to close the browser
key_press(0x12)  # Left Alt key
key_press(0x09)  # F4 key
key_release()
key_release()

# Wait for the browser to close
time.sleep(2)
