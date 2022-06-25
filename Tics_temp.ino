// dependencias de OLED
#include <Wire.h> // definir
#include <Adafruit_GFX.h> // definir libreria grafica
#include <Adafruit_SSD1306.h> // definir libreria de OLED
#define ANCHO 128 // ancho de la pantalla
#define ALTO 64 // alto de la pantalla
#define OLED_RESET 4 // numero "aleatoreo" se usa solo para pantallas que tengan el boton
Adafruit_SSD1306 oled(ANCHO, ALTO, &Wire, OLED_RESET); // setear parametros para el oled

// dependencias DHT11
#include <DHT.h>
#define DHTPIN 2 // pin a DHT11
#define DHTTYPE DHT11 // definir tipo de modulo
DHT dht(DHTPIN, DHTTYPE); // enlaze pin y tipo

// dependencias LM35
#define VoltajeLM35    3300.0 // en milivolt
#define RangoAnalogo 1024.0 // rango pin analogo 0 a 1023 
#define PIN_LM35       A0 // pin a LM35

// LEDS
const int LEDOK = 7;
const int LEDNOK = 6;

void setup() {
  Wire.begin();
  Serial.begin(9600);
  dht.begin();
  oled.begin(SSD1306_SWITCHCAPVCC, 0x3C);
}

void loop() {
  // codigo sensor LM35 temperatura exterior
  float ValorLM35 = analogRead(PIN_LM35); // rango del sensor
  float milliVolt = ValorLM35 * (VoltajeLM35 / RangoAnalogo);// convertir rango a voltaje
  int tempC = (milliVolt / 10) ;// convertir voltaje a C int para entero

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
  
  // Impresion por pantalla
  oled.clearDisplay();
  oled.setTextColor(WHITE);
  oled.setCursor(0,0);
  oled.setTextSize(1);
  oled.print("Temp. Ext:");
  oled.setCursor(65,0);
  oled.setTextSize(1);
  oled.print(tempC);

  oled.setCursor(0,10);
  oled.setTextSize(1);
  oled.print("Temp. Int:");
  oled.setCursor(65,60);
  oled.setTextSize(1);
  oled.print(tempCint);

   oled.display();

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
