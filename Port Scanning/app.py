from flask import Flask, request, render_template
import nmap

app = Flask(__name__)
@app.route('/', methods=['GET', 'POST'])
def home():
    if request.method == 'POST':
        starting = int(request.form.get('starting'))
        closing = int(request.form.get('closing'))
        targethost = request.form.get('targethost')
        nmap_path = [r"C:\Program Files (x86)\Nmap\nmap.exe",]
        portscanner = nmap.PortScanner(nmap_search_path=nmap_path)
        results = []
        for j in range(starting, closing+1):
            resultant = portscanner.scan(targethost, str(j))
            resultant = resultant['scan'][targethost]['tcp'][j]['state']
            results.append(f'The port {j} numbers from the range is {resultant}.')
        return render_template('home.html', results=results)
    return render_template('home.html')

if __name__ == '__main__':
    app.run(debug=True)
