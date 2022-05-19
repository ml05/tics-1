// Librerias extras
#include <DHT.h> // Libreria para sensor de humedad

// Variables sensor temperatura y humedad DHT11
#define DHTPIN 7 // Pin digital del sensor
#define DHTTYPE DHT11 // Definir tipo de sensor utilizado DHT11 en este caso
DHT dht(DHTPIN, DHTTYPE); // Inicializar sensor DHT11

// Variables sensor temperatura LM35
float tempC; // Variable para almacenar el valor obtenido del sensor (0 a 1023)
int pinLM35 = 0; // Pin de entrada del sensor (A0)

// Variables caudalimetro
volatile int Pulsos; // Pulsos recividos por caudalimetro
int pinFS400A = 4; // Pin de entrada del sensor (D4)
float factor_conversion = 7.5; // Factor para convertir de frecuencia a caudal CONFIRMAR Y CALIBRAR

// Funcion ejecutada al interrumpir
void ContarPulsos(){
  NumPulsos++; // Incrementa los pulsos
}

// Funcion para obtener frecuencias con los pulsos
int ObtenerFrecuencia(){
  int frecuencia;
  NumPulsos = 0; // Reset de pulsos previos
  interrupts(); // Habilitar interrupciones
  delay(1000); // Cada 1 segundo
  noInterrupts(); // Deshabilitar interrupciones
  frecuencia = Numpulsos; // Hz (canridad de pulsos por delay (1 sec))
  return frecuencia;
}

void setup() {
  Serial.begin(9600); // Configuracion el puerto serial a 9600 bps
  pinMode(pinFS400A, INPUT);
  attachInterrupt(0, ContarPulsos, RISING); // Interrupcion [0(pin4), Funcion, Flanco de subida]
  dht.begin(); // Habilitar sensor DHT11
}

void loop() {

  // Temperatura LM35
  tempC = analogRead(pinLM35); // Con analogRead leemos el sensor de temperatura LM35 (valor de 0 a 1023) 
  tempC = (5.0 * tempC * 100.0)/1024.0; // Calibrar primero importante

  // Caudal FS400A
  float frecuencia = ObtenerFrecuencia(); // Obtener frecuencia
  float caudal_Litro_minuto = frecuencia / factor_conversion; // Calcular caudal Litros por minuto
  float caudal_Litro_hora = caudal_Litro_minuto * 60; // Calcular caudal Litros por hora

  // Consumo en Litros FS400A
  // Reset cada X tiempo?

  // Medicion temperatura y humedad interna
  float humedadInterior = dht.readHumidity(); // Leer humedad interior
  float tempInterior = dht.readTemperature(); // Leer temperatura interior grados C
  if (isnan(humedadInterior) || isnan(tempInterior)){ // Comprobacion de la lectura NO NECESARIO
    Serial.println("Error en lectura interior");
    return;
  }

  // Agregar datos a pantalla dps
  // buscar Interfaz grafica
  
  // actualizacion a Node MCU
  // pagina web?

  // Impresion borrar dps (?)
  Serial.print("Temperatura exterior: ");
  Serial.print(tempC);
  Serial.println(); // Salto de linea

  Serial.print("\tFrecuenciaPulsos: "); 
  Serial.print(frecuencia,0);
  Serial.print("Hz\tCaudal: "); 
  Serial.print(caudal_L_m,3);
  Serial.print(" L/m\t"); 
  Serial.print(caudal_L_h,3); 
  Serial.println("L/h"); 
  Serial.println();

  Serial.print("Humedad: ");
  Serial.print(humedadInterior);
  Serial.print("%");
  Serial.print("\tTemperatura: ");
  Serial.print(tempInterior);
  Serial.print(" *C ");
  
  delay(1000); // Tiempo de espera para siguiente medicion (ajustar despues) REVISAR COMP CAUDALIMETRO
}