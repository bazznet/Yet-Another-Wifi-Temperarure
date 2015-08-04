# Yet-Another-Wifi-Temperarure
YAWT is a temperarure (DS18B20 and SHT10) and humidity (SHT10) reading sketch on Arduino IDE on the ESP8266-12 WiFi module (HUZZAH ESP8266 Breakout)


This sketch takes about 6-7 seconds to run and will sleep for 30 minutes.

The ESP will try to connect to a local server (Apache2 running PHP on a Raspberry Pi) and send the data through the URL.

This is a work in progress. SHT10 sensor as not yet arrived, so it's not programmed yet.
