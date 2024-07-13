// Library dht dan jaringan WiFi
#include "DHT.h"
#include <WiFi.h>
#include <WiFiClient.h>
#include <HTTPClient.h>

// Pin yang digunakan
#define DHTPIN 18
#define DHTTYPE DHT11
DHT dht (DHTPIN, DHTTYPE);

//WiFi yang digunakan dan IP address 
const char* ssid = "AndroidAP21ac"; 
const char* pass = "123456799";
const char* host = "192.168.43.131";

void setup() {
  Serial.begin(9600);
//aktifkan sensor dht
dht.begin();

// koneksi wifi
WiFi.begin(ssid, pass);
Serial.println("Conecting...");
while(WiFi.status() != WL_CONNECTED)
{
  Serial.print(".");
  delay(500);
}
// apabila berhasil
Serial.println("Connected");

}

void loop() {
// nilai suhu dan kelembaban 
float suhu = dht.readTemperature();
float kelembaban = dht.readHumidity();

Serial.println("Suhu : " + String(suhu) );
Serial.println("Kelembaban : " + String(kelembaban) );

//Mengirim data ke server 
WiFiClient client ;
const int httpPort = 80;
if(!client.connect(host, httpPort) )
{
  Serial.println("Koneksi Gagal");
  return;
}
// Apabila terkoneksi
String Link;
HTTPClient http;
Link = "http://192.168.43.131/sensor/bacasuhudankelembaban.php?suhu=" + String(suhu) + "&kelembaban=" + String (kelembaban);
http.begin(Link);
http.GET();

// Ambil nilai sensor
http.GET();
// baca status response
String respon= http.getString();
Serial.println(respon);
http.end();
delay(30000);
}
