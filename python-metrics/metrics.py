from flask import Flask, Response
from prometheus_client import Gauge, generate_latest
import psutil
import time

app = Flask(__name__)

cpu_usage = Gauge("cpu_usage_percent", "CPU usage percentage")
ram_usage = Gauge("ram_usage_percent", "RAM usage percentage")

@app.route("/metrics")
def metrics():
    cpu_usage.set(psutil.cpu_percent())
    ram_usage.set(psutil.virtual_memory().percent)
    return Response(generate_latest(), mimetype="text/plain")

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=8000)
