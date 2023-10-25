import network
import usocket

# Set up the Wi-Fi connection
wifi = network.WLAN(network.STA_IF)
wifi.active(True)
wifi.connect("your_network_ssid", "your_network_password")

# Create a raw socket for packet capture
raw_socket = usocket.socket(usocket.AF_PACKET, usocket.SOCK_RAW, usocket.IPPROTO_RAW)

# Set the interface for packet capture (wlan0 for Wi-Fi)
raw_socket.bind(("wlan0", 0))

# Capture and print 10 packets
packet_count = 0

while packet_count < 10:
    packet = raw_socket.recv(2048)  # Adjust the buffer size as needed
    print(packet)
    packet_count += 1

# Close the raw socket
raw_socket.close()
