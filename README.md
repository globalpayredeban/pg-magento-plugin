# GlobalPay Redeban Magento module

## Language:: [EN](#project) || [ES](#proyecto)

## Project

This module is a solution that allows Magento users to easily process credit card payments.

## Download and Installation

**1. Execute this command for install our package:**

Install the latest version.  `composer require globalpayredeban/magento2`

Install a specific version.  `composer require globalpay/magento2:1.1.9`

Once the installation is finished continue with the next commands in your bash terminal.

**2. Update dependency injection:**

`php bin/magento setup:di:compile`


**3. Update modules registry:**

`php bin/magento setup:upgrade`


**Optional.- This command is optional for production environments:**

`php bin/magento setup:static-content:deploy`


Now you can see the GlobalPay settings in this path `Stores > Configuration > Sales > Payment Methods` on your Magento admin dashboard.


## Maintenance
If you need update the plugin to latest version execute step 2 of Installation [here](#download-and-installation)


## Fraud notifications via webhook

When GlobalPay Redeban detect a possible fraud we use notifications through webhook for notify to Magento Admin for make an update the order state and status.

The webhook path by default is:

`/V1/globalpayredeban/notification/listener`

So, the possible fraud notifications can be send to:

`https://magentodomain.com/V1/globalpayredeban/notification/listener`


### =============================

## Proyecto

Este módulo es una solución que permite a los usuarios de Magento 2 procesar pagos con Tarjeta de Crédito de manera rápida y sencilla.

## Descarga e instalación

**1. Ejecuta el siguiente comando para instalar nuestro paquete:**

Instala la versión más reciente.  `composer require globalpayredeban/magento2`

Instala una versión especifica.  `composer require globalpayredeban/magento2:1.1.9`

Una vez que la instalación ha finalizado, continua con los siguientes comando en tu terminal. 

**2. Actualiza la inyección de dependencias:**

`php bin/magento setup:di:compile`


**3. Actualiza el registro de módulos:**

`php bin/magento setup:upgrade`


**Opcional.- Este comando es opcional para ambientes productivos:**

`php bin/magento setup:static-content:deploy`


Ahora puedes ver la configuración en la ruta `Tiendas > Configuración > Ventas > Medios de Pago` dentro del panel de administración de Magento.


## Mantenimiento
Si necesitas actualizar el plugin a la última versión, sigue el paso 2 de la instalación [aquí](#descarga-e-instalación)


## Notificación de fraude vía Webhook

Cuando GlobalPay Redeban detecta un posible fraude, usamos notificaciones a través de un webhook para notificar al Administrador de Magento y hacer una actualización en el estado de la orden.

La ruta del Webhook por defecto es:

`/V1/globalpayredeban/notification/listener`

Entonces, las notificaciones serían enviadas a:

`https://magentodomain.com/V1/globalpayredeban/notification/listener`

