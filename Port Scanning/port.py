import nmap
import tkinter as tk
from tkinter import messagebox

def scan_ports():
    nmap_path=[r"C:\Program Files (x86)\Nmap\nmap.exe",]
    host = host_entry.get()
    ports = ports_entry.get().split(',')
    scanner = nmap.PortScanner(nmap_search_path=nmap_path)
    for port in ports:
        res = scanner.scan(host, port)
        res = res['scan'][host]['tcp'][int(port)]['state']
        result_text.insert(tk.END, f'port {port} is {res}.\n')

root = tk.Tk()
root.title("Nmap Port Scanner")

host_label = tk.Label(root, text="Enter the host:")
host_label.pack()
host_entry = tk.Entry(root)
host_entry.pack()

ports_label = tk.Label(root, text="Enter the ports separated by comma:")
ports_label.pack()
ports_entry = tk.Entry(root)
ports_entry.pack()

scan_button = tk.Button(root, text="Scan Ports", command=scan_ports)
scan_button.pack()

result_text = tk.Text(root)
result_text.pack()

root.mainloop()