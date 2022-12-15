#include "DHT.h"
#include <RestClient.h>

RestClient client = RestClient("c8t54pern.alwaysdata.net");

#define DHTPIN D6
DHT dht22(DHTPIN, DHT22);

String response;
const char* api_key    = "edutech";

void setup() {
  Serial.begin(115200);
  dht22.begin();
  client.begin("your_ssid", "your_password");
  Serial.println("Servidor inicializado!");
}

void loop() {
  float humedad = dht22.readHumidity();   
  String humString =String(humedad,2);
  float temperatura = dht22.readTemperature(); 
  String tempString =String(temperatura,2);
  
  response = "";
  char postParameter[50];
  String postValue = "temperatura="+tempString+"&humedad="+humString+"&api_key="+api_key;
  postValue.toCharArray(postParameter, 50);
  Serial.println(postValue);

  int statusCode = client.post("/subida.php", postParameter);
  
  Serial.print("Status code from server: ");
  Serial.println(statusCode);
  Serial.print("Response body from server: ");
  Serial.println(response);
 
  delay(120000);
}
