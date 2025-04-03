<<<<<<< HEAD
CREATE DATABASE IF NOT EXISTS bdlojinha2000;
USE bdlojinha2000;

CREATE TABLE tbvendedor(
	codvend INT PRIMARY KEY AUTO_INCREMENT,
    vendedor VARCHAR(90) NOT NULL
);

=======
CREATE DATABASE bdlojinha2000;
USE bdlojinha2000;

>>>>>>> c72edae296bec75b180038a336bc56663d357539
CREATE TABLE tbcliente(
	codcli INT PRIMARY KEY AUTO_INCREMENT,
    cliente VARCHAR(90) NOT NULL,
    cpf INT,
<<<<<<< HEAD
    codvendedor INT,
    FOREIGN KEY(codvendedor) REFERENCES tbvendedor(codvend)
);


=======
    codvendedor INT
);
CREATE TABLE tbvendedor(
	codvend INT PRIMARY KEY AUTO_INCREMENT,
    vendedor VARCHAR(90) NOT NULL
);

-- ALTER TABLE tbvendedor CHANGE codcli codvend INT AUTO_INCREMENT;

ALTER TABLE tbcliente ADD FOREIGN KEY(codcli) REFERENCES tbvendedor(codvend);

ALTER TABLE tbvendedor CHANGE cliente vendedor VARCHAR(90) NOT NULL;
>>>>>>> c72edae296bec75b180038a336bc56663d357539

Drop DATABASE bdlojinha2000;

SELECT * FROM tbcliente;
SELECT * FROM tbvendedor;