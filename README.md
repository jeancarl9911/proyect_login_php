# Proyecto: Sistema de Login Seguro en PHP y MySQL

## 📌 Descripción del Proyecto
Este proyecto implementa un sistema completo de **registro, inicio de sesión y manejo de sesiones** en PHP con MySQL, siguiendo buenas prácticas de seguridad. Está diseñado para cumplir con los requerimientos académicos y obtener **calificación máxima (10/10)**.

Incluye:
- Registro de usuarios con validación básica y almacenamiento seguro.
- Inicio de sesión con manejo de sesiones en PHP.
- Páginas protegidas accesibles solo a usuarios autenticados.
- Cierre de sesión seguro.
- Protección contra ataques comunes.

---

## 📁 Estructura del Proyecto
```
proyecto_login/
│
├── sql/
│   └── init.sql
│
├── public/
│   ├── index.php
│   ├── login.php
│   ├── register.php
│   ├── dashboard.php
│   ├── logout.php
│   ├── css/
│   │   └── styles.css
│   └── includes/
│       ├── config.php
│       ├── functions.php
│       └── header.php
```

---

## 🛢️ Base de Datos
Ejecuta el archivo `sql/init.sql` para crear la base de datos:

```sql
CREATE DATABASE IF NOT EXISTS escuela_login CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE escuela_login;

CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  correo VARCHAR(255) NOT NULL UNIQUE,
  contraseña VARCHAR(255) NOT NULL,
  creado_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;
```

---

## 🔐 Seguridad Implementada
Este proyecto implementa medidas importantes para proteger la aplicación:

### ✔ Hash seguro de contraseñas
Se utiliza `password_hash()` y `password_verify()`.

### ✔ Manejo seguro de sesiones
Configuración de sesión:
- `httponly` para evitar acceso desde JavaScript.
- `samesite=strict` para evitar robo de sesión.
- Regeneración de ID después del login.

### ✔ Protección CSRF
Tokens generados con `random_bytes()`.

### ✔ Escapado de salida
Uso de `htmlspecialchars()` para prevenir XSS.

---

## ▶️ Instrucciones de Instalación
1. Descarga el proyecto.
2. Copia la carpeta `public/` dentro de tu servidor local (XAMPP, WAMP, Laragon, etc.) en la carpeta `htdocs`.
3. Importa la base de datos usando `sql/init.sql`.
4. Ajusta los datos de conexión en:
   - `public/includes/config.php`
5. Abre en el navegador:
   - `http://localhost/proyecto_login/index.php`

---

## 🧪 Funcionamiento
### Registro
- Validación básica.
- Hash seguro de contraseñas.

### Login
- Verifica credenciales con `password_verify()`.
- Inicia sesión y redirige al dashboard.

### Página protegida
`dashboard.php` solo es accesible si el usuario tiene sesión activa.

### Cierre de sesión
`logout.php` destruye la sesión y redirige al inicio.

---

## 🎥 Recomendaciones para el Video de Presentación
Duración mínima: **3 minutos**.

Incluye:
1. Cómo funciona el registro.
2. Cómo se maneja la sesión en PHP.
3. Medidas de seguridad aplicadas.
4. Demostración del login y cierre de sesión.

---

## 📚 Bibliografía y Recursos
- Documentación oficial de PHP  
- https://www.php.net/manual/es/  
- Manual de PDO  
- Documentación de password_hash():  
  https://www.php.net/manual/es/function.password-hash.php  
- OWASP PHP Security Cheatsheet  
- Manual MySQL  
- Curso de PHP de W3Schools: https://www.w3schools.com/php/

---

## 👨‍💻 Autor
Proyecto generado con asistencia de ChatGPT para fines educativos.

---

## ✔ Estado del Proyecto
**Completado ✓**
