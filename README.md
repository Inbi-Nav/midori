# Midori

## Descripción del proyecto
**Midori** es una tienda online desarrollada con **Laravel**, inspirada de **japon**.  
El proyecto permite la venta de productos como utensilios, accesorios y adornos 

---

## Tecnologías y lenguajes utilizados

- **PHP**
- **Laravel**
- **MySQL**
- **Blade Templates**
- **Tailwind CSS**
- **Vite**

---

## Flujo de uso

1. El usuario se registra en el sistema.
2. Explora el catálogo de productos por categorías.
3. Selecciona productos y realiza un pedido.
4. El pedido se guarda en la base de datos junto con sus productos.
5. Se registra un pago simulado asociado al pedido.
6. El administrador puede cambiar el estado del pedido.

---

## Base de datos
La base de datos está diseñada de forma relacional e incluye las siguientes entidades:

- **users**: usuarios del sistema (cliente y administrador)
- **categoria**: categorías de productos
- **producto**: productos disponibles
- **pedido**: pedidos realizados por los usuarios
- **itemPedido**: productos incluidos en cada pedido
- **pago**: pagos simulados asociados a los pedidos

La cesta de compra se maneja como una estructura temporal y no se persiste en la base de datos.

---

## Estructura del proyecto
**app/**
  - Http/
   --  Controllers/          # Controladores (lógica de las peticiones)
 - Models/                   # Modelos Eloquent (base de datos)
 - Providers/               # Proveedores de servicios de Laravel

**config/**                     # Configuración de la aplicación

 **database/**
 -  migrations/              # Migraciones de la base de datos
 -  seeders/                 # Datos iniciales (seeders)

 **public/**
  - index.php                   # Punto de entrada de la aplicación
  - .htaccess                   # Configuración del servidor
  - assets/                  # Archivos accesibles desde el navegador

**resources/**
 - views/                   # Vistas Blade
 - css/                     # Estilos (Tailwind CSS)

**routes/**
 - web.php                     # Rutas web
 - console.php                 # Comandos de consola (Artisan)

**storage/**                   # Logs, cache y archivos
**tests/**                       # Pruebas
