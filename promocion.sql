
CREATE TABLE promociones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    productos_elegibles VARCHAR(255) NOT NULL,
    descuento DECIMAL(5,2) NOT NULL
);
