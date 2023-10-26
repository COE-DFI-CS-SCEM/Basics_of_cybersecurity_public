import time
import board
from adafruit_hid import keyboard
import usb_hid

# Initialize the USB HID keyboard
kbd = keyboard.Keyboard(usb_hid.devices)

# Function to simulate key press
def key_press(keycode):
    kbd.press(keycode)
    time.sleep(0.05)  # Delay to simulate key press
    kbd.release(keycode)

# Define the key codes for special keys
LEFT_CTRL = keyboard.Keycode.LEFT_CONTROL
LEFT_SHIFT = keyboard.Keycode.LEFT_SHIFT
ENTER = keyboard.Keycode.ENTER

# Delay for 2 seconds to allow USB enumeration
time.sleep(2)

# Simulate pressing the Windows key (Left GUI key)
key_press(keyboard.Keycode.GUI)
time.sleep(1)

# Simulate opening the Run dialog
key_press(keyboard.Keycode.R)
key_press(ENTER)
time.sleep(2)

# Simulate typing the 'firewall.cpl' command to open Windows Firewall settings
kbd_layout = "firewall.cpl"
for char in kbd_layout:
    key_press(ord(char))
key_press(ENTER)
time.sleep(3)

# Simulate running a hypothetical security scan tool
kbd_layout = "security_scan_tool.exe"
for char in kbd_layout:
    key_press(ord(char))
key_press(ENTER)
time.sleep(5)

# Simulate Alt+F4 to close the security scan tool or firewall settings
kbd.press(LEFT_SHIFT, keyboard.Keycode.F4)
kbd.release(LEFT_SHIFT, keyboard.Keycode.F4)
time.sleep(2)

# Simulate shutting down the computer
kbd.press(LEFT_CTRL, LEFT_SHIFT, keyboard.Keycode.S)
kbd.release(LEFT_CTRL, LEFT_SHIFT, keyboard.Keycode.S)