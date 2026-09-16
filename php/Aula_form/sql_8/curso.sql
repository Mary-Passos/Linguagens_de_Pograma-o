USE curso_online;

CREATE TABLE alunos(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(35) NOT NULL,
email VARCHAR(50),
idade INT 
);

INSERT INTO alunos(nome, email, idade)
VALUE ("Carlos Andre", "Carlosandre@gmail.com", "15");

INSERT INTO alunos(nome, email, idade)
VALUE ("Jennifer Silva", "jennisilva@gmail.com", "20");

INSERT INTO alunos(nome, email, idade)
VALUE ("Lucas Rafael", "lucasrafh@gmail.com", "22");

INSERT INTO alunos(nome, email, idade)
VALUE ("Jadson Moura", "jadsonmoura@gmail.com", "17");

INSERT INTO alunos(nome, email, idade)
VALUE ("Bianca Laís", "biancalah23@gmail.com", "19");

INSERT INTO alunos(nome, email, idade)
VALUE ("Kenedy Rodrigues", "kennyroh@gmail.com", "14");

INSERT INTO alunos(nome, email, idade)
VALUE ("Luan Felipe", "luanfelipe666@gmail.com", "25"); 

SELECT nome FROM alunos
WHERE idade > 18;

UPDATE alunos
SET email = "biancalais@gmail.com"
WHERE id = 5;

DELETE FROM alunos
WHERE id = 7;
