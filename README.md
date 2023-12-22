# Nombre del Proyecto

GESTIÓN DE CONCURRENCIA EN RESERVAS CON EVENTOS ASINCRÓNICOS
Escriba un algoritmo en Laravel que gestione las reservaciones de habitaciones de hotel en un entorno de alta concurrencia, asegurando la integridad de los datos. Además, este algoritmo debe integrar un sistema de eventos y colas para procesar las reservas de forma asincrónica.
REQUISITOS:
• MANEJO DE CONCURRENCIA: Implemente bloqueo optimista para manejar la concurrencia en las reservaciones. Cuando un cliente intenta reservar una habitación, el sistema debe verificar si la versión de la disponibilidad de la
habitación es la misma que cuando la cargó. Si no lo es, la reserva debe fallar y el cliente debe ser notificado para intentarlo de nuevo.
• EVENTOS Y COLAS: Cuando se realiza una reserva, un evento debe ser despachado y manejado de forma asincrónica por un trabajador de cola. Este evento realizará las acciones necesarias para finalizar la reserva (p.ej., enviar una confirmación por correo electrónico).
• ROLLBACKS DE TRANSACCIÓN: En caso de que ocurra un error durante la reserva, asegúrese de que cualquier cambio en la base de datos sea revertido.
ASPECTOS TÉCNICOS A CONSIDERAR:
1. MIGRACIONES Y MODELOS: Defina las migraciones y modelos necesarios con atributos como version o timestamp para el bloqueo optimista.
2. CONTROLADORES Y RUTAS: Cree los controladores y rutas necesarios para manejar las solicitudes de API relacionadas con la reserva.
3. EVENTOS DE LARAVEL: Utilice la funcionalidad de eventos de Laravel para despachar y manejar los eventos de reserva.
4. JOBS Y QUEUES: Defina jobs que serán encolados para procesar las reservas de forma asincrónica.
5. MANEJO DE ERRORES: Implemente un manejo de errores adecuado para capturar y responder a las excepciones.

## Requisitos

- PHP versión 8.1
- Laravel versión 10
- Base de datos: prueba_lars_net

## Configuración

1. **Instalación de Dependencias:**
   ```bash
   composer install
