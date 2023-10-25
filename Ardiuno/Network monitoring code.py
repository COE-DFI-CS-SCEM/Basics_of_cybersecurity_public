import network
import machine
import time
from scapy.all import sniff, ARP

# Connect to your Wi-Fi network
wlan = network.WLAN(network.STA_IF)
wlan.active(True)
wlan.connect('Your_SSID', 'Your_Password')

while not wlan.isconnected():
    time.sleep(1)

print("Connected to Wi-Fi")

def packet_handler(packet):
    if ARP in packet and packet[ARP].op in (1, 2):  # Capture ARP requests and responses
        print(f"Source IP: {packet[ARP].psrc} - Destination IP: {packet[ARP].pdst}")

print("Starting packet sniffing...")

# You can customize the filter to capture specific types of packets
sniff(prn=packet_handler, filter="arp", store=0, iface=wlan.ifconfig()[0])

print("Packet sniffing ended")
