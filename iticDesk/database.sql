CREATE DATABASE alejandro_perez_iticdesk;

USE alejandro_perez_iticdesk;

CREATE USER alejandro IDENTIFIED BY 'pirineus';
GRANT ALL PRIVILEGES ON *.* TO alejandro;
GRANT ALL PRIVILEGES ON alejandro_perez_iticdesk.* TO alejandro;
FLUSH PRIVILEGES;

CREATE TABLE usuaris (
    dni VARCHAR(9),
    nom VARCHAR(50),
    cognom VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    contrasenya VARCHAR(255),
    rol VARCHAR(100)
);


CREATE TABLE incidencies (
    num_referencia INT,
    estatprioritat VARCHAR(100),
    titol VARCHAR(100),
    descripcio TEXT,
    estat_incidencia VARCHAR(100),
    usuari_email VARCHAR(100),
    data TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (usuari_email) REFERENCES usuaris(email)
    
);

