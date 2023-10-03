/* <-------- comentário
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

ignore os sets acima

CREATE DATABASE IF NOT EXISTS tohelpDB;

USE tohelpDB;

-- Table infoContratante
CREATE TABLE IF NOT EXISTS infoContratante(
  id INT NOT NULL AUTO_INCREMENT,
  CPF_contr VARCHAR(14) NOT NULL UNIQUE,
  nome_contr VARCHAR(45) NOT NULL,
  sobrenome_contr VARCHAR(100) NOT NULL,
  email_contr VARCHAR(100) NOT NULL,
  telefone VARCHAR(15) NOT NULL UNIQUE,
  senha_contr VARCHAR(8) NOT NULL,
  dt_cadastro DATETIME NOT NULL,
  tipo_contr BINARY NOT NULL,
  PRIMARY KEY(id, CPF_contr)
) ENGINE = InnoDB;

INSERT INTO infoContratante (CPF_contr, nome_contr, sobrenome_contr, email_contr, telefone, senha_contr, dt_cadastro, tipo_contr)
VALUES
  ('134.982.734-99', 'João', 'Silva', 'joao@email.com', '(11) 98232-5464', 'senha123', NOW(), 0), -- não tem dependentes --
  ('022.904.830-99', 'Maria', 'Santos', 'maria@email.com', '(47) 90393-2452', 'senha456', NOW(), 1); -- tem dependentes --

-- Table enderecoContratante
CREATE TABLE IF NOT EXISTS enderecoContratante (
  id INT NOT NULL AUTO_INCREMENT,
  estado_dep VARCHAR(45) NOT NULL,
  cidade_dep VARCHAR(45) NOT NULL,
  endereco_dep VARCHAR(100) NOT NULL,
  numero_dep VARCHAR(10) NOT NULL,
  complemento_dep VARCHAR(100) NULL,
  id_contr_FK INT NOT NULL,
  PRIMARY KEY(id, id_contr_FK),
  FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
) ENGINE = InnoDB;

INSERT INTO enderecoContratante (estado_dep, cidade_dep, endereco_dep, numero_dep, complemento_dep, id_contr_FK)
VALUES
  ('SP', 'São Paulo', 'Rua A', '123', 'Apto 101', 1),
  ('RJ', 'Rio de Janeiro', 'Av B', '456', NULL, 2);


-- Table infoDependente
CREATE TABLE IF NOT EXISTS infoDependente (
  id INT NOT NULL AUTO_INCREMENT,
  CPF_dep VARCHAR(14) NOT NULL UNIQUE,
  nome_dep VARCHAR(45) NOT NULL,
  sobrenome_dep VARCHAR(100) NOT NULL,
  dtnasc_dep DATE NOT NULL,
  telefone_dep VARCHAR(15) NULL UNIQUE,
  parentesco ENUM("Pai", "Mãe", "Filho(a)", "Irmão", "Irmã", "Neto(a)", "Tio", "Tia", "Sobrinho(a)", "Bisneto(a)", "Primo(a)", "Sobrinho(a)-neto(a)", "Trineto(a)", "Sobrinho(a)-bisneto(a)", "Sogro(a)", "Genro", "Nora", "Padrasto", "Madrasta", "Enteado(a)") NOT NULL,
  id_contr_FK INT NOT NULL,
  dt_cadastro_dep DATETIME NOT NULL,
  PRIMARY KEY(id, CPF_dep, id_contr_FK),
  FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
) ENGINE = InnoDB;

INSERT INTO infoDependente (CPF_dep, nome_dep, sobrenome_dep, dtnasc_dep, telefone_dep, parentesco, id_contr_FK, dt_cadastro_dep)
VALUES
  ('093.232.233-03', 'Pedro', 'Silva', '1955-01-15', '(71) 99892-9913', 'Filho(a)', 2, NOW()),
  ('982.478.782-91', 'Ana', 'Santos', '1940-05-20', '(71) 92324-9781', 'Filho(a)', 2, NOW());


-- Table enderecoDependente
CREATE TABLE IF NOT EXISTS enderecoDependente (
  id INT NOT NULL AUTO_INCREMENT,
  estado_dep VARCHAR(45) NOT NULL,
  cidade_dep VARCHAR(45) NOT NULL,
  endereco_dep VARCHAR(100) NOT NULL,
  numero_dep VARCHAR(10) NOT NULL,
  complemento_dep VARCHAR(100) NULL,
  id_dep_FK INT NOT NULL,
  PRIMARY KEY(id, id_dep_FK),
  FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
) ENGINE = InnoDB;

INSERT INTO enderecoDependente (estado_dep, cidade_dep, endereco_dep, numero_dep, complemento_dep, id_dep_FK)
VALUES
  ('BA', 'Salvador', 'Rua X', '789', 'Casa 2', 1),
  ('BA', 'Salvador', 'Av Y', '567', 'Ap 345', 2);


-- Table infoMedDependente
CREATE TABLE IF NOT EXISTS infoMedDependente (
  id INT NOT NULL AUTO_INCREMENT,
  comorbidades_dep VARCHAR(500) NULL,
  alergias_dep VARCHAR(200) NULL,
  rotina_dep TEXT(1000) NOT NULL,
  id_dep_FK INT NOT NULL,
  PRIMARY KEY(id, id_dep_FK),
  FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
) ENGINE = InnoDB;

INSERT INTO infoMedDependente (comorbidades_dep, alergias_dep, rotina_dep, id_dep_FK)
VALUES
  ('Nenhuma', 'Nenhuma', 'Rotina de exercícios diários', 1),
  ('Alergia a amendoins', 'Nenhuma', 'Tomar remédio antes das refeições', 2);

-- Table medicamentosDependente
CREATE TABLE IF NOT EXISTS medicamentosDependente (
  id INT NOT NULL AUTO_INCREMENT,
  nomeMed VARCHAR(60) NULL,
  horaMed TIME NULL,
  diaMed ENUM("Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado", "Domingo") NULL,
  id_dep_FK INT NOT NULL,
  PRIMARY KEY(id, id_dep_FK),
  FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
) ENGINE = InnoDB;

INSERT INTO medicamentosDependente (nomeMed, horaMed, diaMed, id_dep_FK)
VALUES
  ('Paracetamol', '08:00:00', 'Segunda-feira', 1),
  ('Dipirona', '12:30:00', 'Terça-feira', 1);

-- Table infoCuidador
CREATE TABLE IF NOT EXISTS infoCuidador (
  id INT NOT NULL AUTO_INCREMENT,
  CPF_cuid VARCHAR(14) NOT NULL UNIQUE,
  nome_cuid VARCHAR(45) NOT NULL,
  sobrenome_cuid VARCHAR(100) NOT NULL,
  email_cuid VARCHAR(100) NOT NULL UNIQUE,
  telefone VARCHAR(15) NOT NULL UNIQUE,
  senha_cuid VARCHAR(8) NOT NULL,
  dt_cadastro_cuid DATETIME NOT NULL,
  PRIMARY KEY(id, CPF_cuid)
) ENGINE = InnoDB;

INSERT INTO infoCuidador (CPF_cuid, nome_cuid, sobrenome_cuid, email_cuid, telefone, senha_cuid, dt_cadastro_cuid)
VALUES
  ('843.742.730-09', 'Lucas', 'Oliveira', 'lucas@email.com', '(71) 9564-9883',"12345678", NOW()),
  ('743.795.860-05', 'Camila', 'Ferreira', 'camila@email.com', '(71) 9234-9555',"87654321", NOW());


-- Table enderecoCuidador
CREATE TABLE IF NOT EXISTS enderecoCuidador (
  id INT NOT NULL AUTO_INCREMENT,
  estado_cuid VARCHAR(45) NOT NULL,
  cidade_cuid VARCHAR(45) NOT NULL,
  endereco_cuid VARCHAR(100) NOT NULL,
  numero_cuid VARCHAR(10) NOT NULL,
  complemento VARCHAR(100) NULL,
  infoCuidador_id INT NOT NULL,
  PRIMARY KEY(id, infoCuidador_id),
  FOREIGN KEY(infoCuidador_id) REFERENCES infoCuidador(id)
) ENGINE = InnoDB;

INSERT INTO enderecoCuidador (estado_cuid, cidade_cuid, endereco_cuid, numero_cuid, complemento, infoCuidador_id)
VALUES
  ('BA', 'Salvador', 'Rua M', '789', NULL, 1),
  ('BA', 'Salvador', 'Av N', '567', 'Casa 1', 2);


-- Table infoCurricular
CREATE TABLE IF NOT EXISTS infoCurricular (
  id INT NOT NULL AUTO_INCREMENT,
  rg_frente VARCHAR(200) NOT NULL,
  curriculo VARCHAR(200) NOT NULL,
  rg_verso VARCHAR(200) NOT NULL,
  apresentacao_txt TEXT(3000) NOT NULL,
  id_cuid INT NOT NULL,
  PRIMARY KEY(id, id_cuid),
  FOREIGN KEY(id_cuid) REFERENCES infoCuidador(id)
) ENGINE = InnoDB;

INSERT INTO infoCurricular (rg_frente, curriculo, rg_verso, apresentacao_txt, id_cuid)
VALUES
  ('caminho/rgfrente.jpg', 'caminho/curriculo1.pdf', 'caminho/rgverso.jpg', 'Sou uma enfermeira dedicada.', 1),
  ('caminho/rgfrente.jpg', 'caminho/curriculo2.pdf', 'caminho/rgverso.jpg', 'Tenho experiência em cuidados com idosos.', 2);


-- Table certificadosCuidador
CREATE TABLE IF NOT EXISTS certificadosCuidador (
  id INT NOT NULL AUTO_INCREMENT,
  certificado VARCHAR(200),
  id_cuid INT NOT NULL,
  PRIMARY KEY(id, id_cuid),
  FOREIGN KEY(id_cuid) REFERENCES infoCuidador(id)
) ENGINE = InnoDB;

INSERT INTO certificadosCuidador (certificado, id_cuid)
VALUES
  ('caminho/certificado1.jpg', 1),
  ('caminho/certificado2.jpg', 2);

-- Table contratos
CREATE TABLE IF NOT EXISTS contratos (
  id INT NOT NULL AUTO_INCREMENT,
  id_contr_FK INT NOT NULL,
  id_cuid_FK INT NOT NULL,
  id_dep_FK INT NULL,
  dt_emissao DATETIME NOT NULL,
  dt_inicio DATE NOT NULL,
  dt_fim DATE NOT NULL,
  horario_inicio TIME NOT NULL,
  horario_fim TIME NOT NULL,
  subtotal FLOAT NOT NULL,
  total FLOAT NOT NULL,
  status_contrato ENUM("Contrato em Aguardo de Confirmação", "Contrato Confirmado", "Contrato Recusado", "Contrato Finalizado", "Contrato Cancelado") NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id),
  FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id),
  FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
) ENGINE = InnoDB;

INSERT INTO contratos (id_contr_FK, id_cuid_FK, id_dep_FK, dt_emissao, dt_inicio, dt_fim, horario_inicio, horario_fim, subtotal, total, status_contrato)
VALUES
  (1, 1, NULL, NOW(), '2023-01-01', '2023-12-31', '08:00:00','16:00:00', 1000.00, 1200.00, 'Contrato Confirmado'),
  (2, 2, 1, NOW(), '2023-02-01', '2023-11-30', '09:00:00', '17:00:00', 1100.00, 1300.00, 'Contrato Confirmado'); -- 


-- Table relatorios
CREATE TABLE IF NOT EXISTS relatorios (
  id INT NOT NULL AUTO_INCREMENT,
  contrato_id_FK INT NOT NULL,
  id_contr_FK INT NOT NULL,
  id_dep_FK INT NULL,
  id_cuid_FK INT NOT NULL,
  anotacoes TEXT(4000) NULL,
  dt_emissao DATE NOT NULL,
  PRIMARY KEY(id, contrato_id_FK),
  FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id),
  FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id),
  FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id),
  FOREIGN KEY(contrato_id_FK) REFERENCES contratos(id)
) ENGINE = InnoDB;

INSERT INTO relatorios (contrato_id_FK, id_contr_FK, id_dep_FK, id_cuid_FK, anotacoes, dt_emissao)
VALUES
  (1, 1, NULL, 1, 'Cuidados prestados conforme acordado.','2023-12-31'),
  (2, 2, 1, 2, 'Paciente está respondendo bem ao tratamento.','2023-11-30');


-- Table extratos
CREATE TABLE IF NOT EXISTS extratos (
  id INT NOT NULL AUTO_INCREMENT,
  subtotal FLOAT NOT NULL,
  total FLOAT NOT NULL,
  id_cuid_FK INT NOT NULL,
  id_contr_FK INT NOT NULL,
  dt_emissao DATE NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id),
  FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
) ENGINE = InnoDB;

INSERT INTO extratos (subtotal, total, id_cuid_FK, id_contr_FK, dt_emissao)
VALUES
  (100.00, 120.00, 1, 2, '2023-03-15'),
  (110.00, 130.00, 2, 1, '2023-03-20');


-- Table metodoPagamento
CREATE TABLE IF NOT EXISTS metodoPagamento (
  id INT NOT NULL AUTO_INCREMENT,
  id_contr_FK INT NOT NULL,
  numero_cartao VARCHAR(16) NOT NULL,
  nome_cartao VARCHAR(150) NOT NULL,
  validade DATE NOT NULL,
  cvv VARCHAR(3) NOT NULL,
  PRIMARY KEY(id),
  FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
) ENGINE = InnoDB;

INSERT INTO metodoPagamento (id_contr_FK, numero_cartao, nome_cartao, validade, cvv)
VALUES
  (1, '1234567812345678', 'João Silva', '2025-12-31', '123'),
  (2, '9876543298765432', 'Maria Santos', '2024-08-30', '456');


-- Table fotoPerfilCuid
CREATE TABLE IF NOT EXISTS fotoPerfilCuid (
  idFoto INT NOT NULL AUTO_INCREMENT,
  foto_cuid VARCHAR(200) NOT NULL,
  id_cuid_FK INT NOT NULL,
  PRIMARY KEY(idFoto),
  FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id)
) ENGINE = InnoDB;

INSERT INTO fotoPerfilCuid (foto_cuid, id_cuid_FK)
VALUES
  ('caminho/imagem1.jpg', 1),
  ('caminho/imagem2.jpg', 2);

-- Table funcionarios
CREATE TABLE IF NOT EXISTS funcionarios (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(30) NOT NULL,
  sobrenome VARCHAR(100) NOT NULL,
  CPF VARCHAR(14) UNIQUE NOT NULL,
  senha VARCHAR(8) NOT NULL,
  PRIMARY KEY(id)
) ENGINE = InnoDB;

INSERT INTO funcionarios (nome, sobrenome, CPF, senha)
VALUES
  ('Joana', 'Brito', '984.867.624-01', 'senha123'),
  ('Luciene', 'Moraes', '824.927.272-09', 'senha456');


-- Table fotoContr
CREATE TABLE IF NOT EXISTS fotoContr (
  idFoto INT NOT NULL AUTO_INCREMENT,
  foto_contr VARCHAR(200) NOT NULL,
  id_contr_FK INT NOT NULL,
  PRIMARY KEY(idFoto, id_contr_FK),
  FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
) ENGINE = InnoDB;

INSERT INTO fotoContr (foto_contr, id_contr_FK)
VALUES
  ('caminho/imagem_contr1.jpg', 1),
  ('caminho/imagem_contr2.jpg', 2);
  

-- RELATÓRIOS POR CONTRATO -- 
-- fazer essa view --

-- View Dependente_Contratante
-- DROP TABLE IF EXISTS Dependente_Contratante; --


-- DROP VIEW IF EXISTS Dependente_Contratante; --
 select * from Dependente_Contratante;
CREATE OR REPLACE VIEW Dependente_Contratante AS
SELECT
    ic.id AS "ID Contratante",
    ic.CPF_contr AS "CPF Contratante",
    ic.nome_contr AS "Nome Contratante",
    ic.sobrenome_contr AS "Sobrenome Contratante",
    id.id AS "ID Dependente",
    id.CPF_dep AS "CPF Dependente",
    id.nome_dep AS "Nome Dependente",
    id.sobrenome_dep AS "Sobrenome Dependente"
FROM
    infoDependente id
JOIN
    infoContratante ic ON id.id_contr_FK = ic.id;
    
-- View loginContratante
DROP TABLE IF EXISTS loginContratante;
-- DROP VIEW IF EXISTS loginContratante; --

CREATE OR REPLACE VIEW loginContratante AS
SELECT
    id AS "ID Contratante",
    CPF_contr AS "CPF Contratante",
    senha_contr AS "Senha Contratante"
FROM
    infoContratante
ORDER BY id ASC;

-- select * from loginContratante; --
-- select * from loginCuidador; --

CREATE OR REPLACE VIEW loginCuidador AS
SELECT
    id AS "ID Cuidador",
    CPF_cuid AS "CPF Cuidador",
    senha_cuid AS "Senha Cuidador"
FROM
    infoCuidador
ORDER BY id ASC;

CREATE VIEW disponibilidadeCuidador AS -- Para checarmos os dias e horários em que os cuidadores estarão ocupados --
SELECT
    id_cuid_FK,
    GROUP_CONCAT(DISTINCT DATE_FORMAT(dt_inicio, '%Y-%m-%d') ORDER BY DATE_FORMAT(dt_inicio, '%Y-%m-%d')) AS datas_ocupadas,
    GROUP_CONCAT(DISTINCT horario_fim ORDER BY horario_fim) AS horarios_ocupados,
    GROUP_CONCAT(DISTINCT status_contrato ORDER BY status_contrato) AS status_contratos
FROM contratos
GROUP BY id_cuid_FK;
*/