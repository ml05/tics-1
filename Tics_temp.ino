
//dependencias DHT11
#include <DHT.h>
#define DHTPIN 2 // pin a DHT11
#define DHTTYPE DHT11 // definir tipo de modulo
DHT dht(DHTPIN, DHTTYPE); // enlaze pin y tipo

// dependencias LM35
#define VoltajeLM35    3300.0 // en milivolt
#define RangoAnalogo 1024.0 // rango pin analogo 0 a 1023 
#define PIN_LM35       A0 // pin a LM35

//LEDS
const int LEDOK = 7;
const int LEDNOK = 6;

void setup() {
  Serial.begin(9600);
  dht.begin();
}

void loop() {
  // codigo sensor LM35 temperatura exterior
  float ValorLM35 = analogRead(PIN_LM35); // rango del sensor
  float milliVolt = ValorLM35 * (VoltajeLM35 / RangoAnalogo);// convertir rango a voltaje
  int tempC = ((milliVolt / 10)- 32)* 5/9 ;// convertir voltaje a C int para entero

  // codigo sensor DHT11 temperatura y humedad interior
  float humedad = dht.readHumidity(); // Humedad interior
  float tempCint = dht.readTemperature(); // Temperatura interior

  //LEDs de estado
    digitalWrite(LEDNOK, LOW); // defecto LED rojo OFF
    
  if(tempCint > 50) // Si temp supera, apagar led verde
    digitalWrite(LEDOK, LOW);
  else
    digitalWrite(LEDOK, HIGH);

  if(tempCint > 50) // Si temp supera prender led rojo
    digitalWrite(LEDNOK, HIGH);
  else
    digitalWrite(LEDNOK, LOW);
  
  // Impresion Temp Exterior
  Serial.print("Temperatura exterior: ");
  Serial.print(tempC);   // print the temperature in Celsius
  Serial.println("°C");

  // Impresion Temp y Humedad interior
  Serial.print("Temperatura interior: ");
  Serial.print(tempCint + 2);
  Serial.print("   ~   ");
  Serial.print("Humedad: ");
  Serial.println(humedad);

  delay(1000);
}
