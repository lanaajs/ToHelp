-- SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
-- SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- CREATE DATABASE IF NOT EXISTS tohelpdb;
-- USE tohelpdb;


-- -- Table infoContratante
-- CREATE TABLE IF NOT EXISTS infoContratante(
--   id INT NOT NULL AUTO_INCREMENT,
--   nome_contr VARCHAR(45) NOT NULL,
--   sobrenome_contr VARCHAR(100) NOT NULL,
--   CPF_contr VARCHAR(14) NOT NULL UNIQUE,
--   RG_contr VARCHAR(13) NOT NULL UNIQUE,
--   dt_nasc DATE NOT NULL,
--   email_contr VARCHAR(100) NOT NULL,
--   celular_contr VARCHAR(15) NOT NULL UNIQUE,
--   genero ENUM("Masculino","Feminino","Outros") NOT NULL,
--   senha_contr VARCHAR(255) NOT NULL,
--   dt_cadastro DATETIME NOT NULL,
--   tipo_contr ENUM("0","1") NOT NULL, -- 0 NÃO POSSUI DEPENDENTES, 1 POSSUI UM OU MAIS DEPENDENTES --
--   PRIMARY KEY(id, CPF_contr)
-- ) ENGINE = InnoDB;

-- INSERT INTO infoContratante (nome_contr, sobrenome_contr, CPF_contr, RG_contr, dt_nasc, email_contr, celular_contr, genero, senha_contr, dt_cadastro, tipo_contr)
-- VALUES
--     ('João', 'Silva', '12345678901', '12345678', '1980-01-01', 'joao@email.com', '123456789', 'Masculino', 'senha123', NOW(), '0'),
--     ('Maria', 'Santos', '98765432109', '87654321', '1975-05-15', 'maria@email.com', '987654321', 'Feminino', 'senha456', NOW(), '1');

-- -- Table enderecoContratante
-- CREATE TABLE IF NOT EXISTS enderecoContratante (
--   id INT NOT NULL AUTO_INCREMENT,
--   CEP_contr VARCHAR(9) NOT NULL,
--   estado_contr VARCHAR(45) NOT NULL,
--   cidade_contr VARCHAR(45) NOT NULL,
--   bairro_contr VARCHAR(45) NOT NULL,
--   end_contr VARCHAR(45) NOT NULL,
--   numero_contr VARCHAR(5) NOT NULL,
--   complemento_contr VARCHAR(100) NULL,
--   id_contr_FK INT NOT NULL,
--   PRIMARY KEY(id, id_contr_FK),
--   FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO enderecoContratante (CEP_contr, estado_contr, cidade_contr,bairro_contr, end_contr, numero_contr, complemento_contr, id_contr_FK)
-- VALUES
--     ('12345-678', 'SP', 'São Paulo','Valinhos','Rua Amarela','123', 'Apt 4B', 1),
--     ('54321-987', 'RJ', 'Rio de Janeiro','Ipanema','Avenida Brotas', '456', 'Casa', 2);


-- -- Table infoDependente
-- CREATE TABLE IF NOT EXISTS infoDependente (
--   id INT NOT NULL AUTO_INCREMENT,
--   CPF_dep VARCHAR(14) NOT NULL UNIQUE,
--   RG_dep VARCHAR(13) NOT NULL UNIQUE,
--   nome_dep VARCHAR(45) NOT NULL,
--   sobrenome_dep VARCHAR(100) NOT NULL,
--   dtnasc_dep DATE NOT NULL,
--   celular_dep VARCHAR(15) NULL UNIQUE,
--   genero ENUM("Masculino","Feminino","Outros") NOT NULL,
--   parentesco ENUM("Filho(a)", "Irmão", "Irmã", "Neto(a)", "Tio", "Tia", "Sobrinho(a)", "Bisneto(a)", "Primo(a)", "Sogro(a)", "Genro", "Nora", "Enteado(a)"),
--   id_contr_FK INT,
--   dt_cadastro_dep DATETIME NOT NULL,
--   PRIMARY KEY(id, CPF_dep, id_contr_FK),
--   FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO infoDependente (CPF_dep, RG_dep, nome_dep, sobrenome_dep, dtnasc_dep, celular_dep, genero, parentesco, id_contr_FK, dt_cadastro_dep)
-- VALUES
--     ('98765432102', '00.000.000-11', 'Carlos', 'Silva', '2000-03-12', '987654321', 'Masculino', 'Filho(a)', 2, NOW()),
--     ('65432198703', '00.000.000-22' ,'Ana', 'Santos', '1995-08-20', '654321987', 'Feminino', 'Sobrinho(a)', 2, NOW());

-- -- Table enderecoDependente
-- CREATE TABLE IF NOT EXISTS enderecoDependente (
--   id INT NOT NULL AUTO_INCREMENT,
--   CEP_dep VARCHAR(9) NOT NULL,
--   estado_dep VARCHAR(45) NOT NULL,
--   cidade_dep VARCHAR(45) NOT NULL,
--   bairro_dep VARCHAR(45) NOT NULL,
--   end_dep VARCHAR(45) NOT NULL,
--   numero_dep VARCHAR(5) NOT NULL,
--   complemento_dep VARCHAR(100) NULL,
--   id_dep_FK INT NOT NULL,
--   PRIMARY KEY(id, id_dep_FK),
--   FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO enderecoDependente (CEP_dep, estado_dep, cidade_dep, bairro_dep, end_dep, numero_dep, complemento_dep, id_dep_FK)
-- VALUES
--     ('54321-987', 'RJ', 'Rio de Janeiro','Boreal', 'Rua Juca Bel','456', 'Casa', 1),
--     ('12345-678', 'SP', 'São Paulo','Mocaa', 'Rua K' ,'321', 'Apt 2C', 2);

-- -- Table infoMedDependente
-- CREATE TABLE IF NOT EXISTS infoMedDependente (
--   id INT NOT NULL AUTO_INCREMENT,
--   comorbidades_dep VARCHAR(500) NULL,
--   alergias_dep VARCHAR(200) NULL,
--   rotina_dep TEXT(1000) NOT NULL,
--   id_dep_FK INT NOT NULL,
--   PRIMARY KEY(id, id_dep_FK),
--   FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO infoMedDependente (comorbidades_dep, alergias_dep, rotina_dep, id_dep_FK)
-- VALUES
--     ('Nenhuma', 'Nenhuma', 'Rotina normal', 1), -- Associado ao Dependente Carlos
--     ('Hipertensão', 'Nenhuma', 'Rotina com medições regulares', 2); -- Associado ao Dependente Ana


-- -- Table medicamentosDependente
-- CREATE TABLE IF NOT EXISTS medicamentosDependente (
--   id INT NOT NULL AUTO_INCREMENT,
--   nomeMed VARCHAR(60) NOT NULL,
--   horaMed TIME NOT NULL,
--   diaMed ENUM("Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado", "Domingo") NOT NULL,
--   id_dep_FK INT NOT NULL,
--   PRIMARY KEY(id, id_dep_FK),
--   FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO medicamentosDependente (nomeMed, horaMed, diaMed, id_dep_FK)
-- VALUES
--     ('Paracetamol', '08:00:00', 'Segunda-feira', 1), -- Associado ao Dependente Carlos --
--     ('Dipirona', '09:00:00', 'Terça-feira', 2), -- Associado ao Dependente Ana --
--     ('Ibuprofeno', '14:30:00', 'Quinta-feira', 2); -- Associado ao Dependente Ana --
    
-- -- Table infoCuidador
-- CREATE TABLE IF NOT EXISTS infoCuidador (
--   id INT NOT NULL AUTO_INCREMENT,
--   nome_cuid VARCHAR(45) NOT NULL,
--   sobrenome_cuid VARCHAR(100) NOT NULL,
--   CPF_cuid VARCHAR(14) NOT NULL UNIQUE,
--   RG_cuid VARCHAR(13) NOT NULL UNIQUE,
--   dt_nasc DATE NOT NULL,
--   email_cuid VARCHAR(100) NOT NULL,
--   celular_cuid VARCHAR(15) NOT NULL UNIQUE,
--   genero ENUM("Masculino","Feminino","Outros") NOT NULL,
--   senha_cuid VARCHAR(8) NOT NULL,
--   dt_cadastro DATETIME NOT NULL,
--   PRIMARY KEY(id, CPF_cuid)
-- ) ENGINE = InnoDB;

-- INSERT INTO infoCuidador (nome_cuid, sobrenome_cuid, CPF_cuid, RG_cuid, dt_nasc, email_cuid, celular_cuid, genero, senha_cuid, dt_cadastro)
-- VALUES
--     ('Lucia', 'Ferreira', '8765432101', '7654321', '1985-02-25', 'lucia@email.com', '876543210', 'Feminino', 'senha789', NOW()),
--     ('Roberto', 'Pereira', '9876543102', '8765432', '1990-06-15', 'roberto@email.com', '987654310', 'Masculino', 'senhaabc', NOW());


-- -- Table enderecoCuidador
-- CREATE TABLE IF NOT EXISTS enderecoCuidador (
--   id INT NOT NULL AUTO_INCREMENT,
--   CEP_cuid VARCHAR(9) NOT NULL,
--   estado_cuid VARCHAR(45) NOT NULL,
--   cidade_cuid VARCHAR(45) NOT NULL,
--   bairro_cuid VARCHAR(45) NOT NULL,
--   end_cuid VARCHAR(45) NOT NULL,
--   numero_cuid VARCHAR(5) NOT NULL,
--   complemento_cuid VARCHAR(100) NULL,
--   infoCuidador_id INT NOT NULL,
--   PRIMARY KEY(id, infoCuidador_id),
--   FOREIGN KEY(infoCuidador_id) REFERENCES infoCuidador(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO enderecoCuidador (CEP_cuid, estado_cuid, cidade_cuid, bairro_cuid, end_cuid, numero_cuid, complemento_cuid, infoCuidador_id)
-- VALUES
--     ('54321-987', 'RJ', 'Rio de Janeiro','Laranjeiras','Rua Laranja', '456', 'Casa', 1),
--     ('12345-678', 'SP', 'São Paulo', 'Joana Angelica','Av. Macapá', '758', 'Ao lado do mercado',2);


-- -- Table infoCurricular
-- CREATE TABLE IF NOT EXISTS infoCurricular (
--   id INT NOT NULL AUTO_INCREMENT,
--   rg_frente VARCHAR(200) NOT NULL,
--   rg_verso VARCHAR(200) NOT NULL,
--   curriculo VARCHAR(200) NOT NULL,
--   certificado VARCHAR(200) NOT NULL,
--   sobre_txt TEXT(1000) NOT NULL,
--   id_cuid_FK INT NOT NULL,
--   PRIMARY KEY(id, id_cuid_FK),
--   FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO infoCurricular (rg_frente, rg_verso, curriculo, certificado, sobre_txt, id_cuid_FK)
-- VALUES
--     ('/path/rg1.png', '/path/rg2.png', '/path/curriculo1.pdf','path/certificado1.pdf','Trabalho como cuidador a 6 anos', 1),
--     ('/path/rg3.png', '/path/rg4.png', '/path/curriculo2.pdf','path/certificado1.pdf','Amo trabalhar com idosos', 2);


-- -- Table fotoPerfilCuid
-- CREATE TABLE IF NOT EXISTS fotoPerfilCuid (
--   idFoto INT NOT NULL AUTO_INCREMENT,
--   foto_cuid VARCHAR(200) NOT NULL,
--   id_cuid_FK INT NOT NULL,
--   PRIMARY KEY(idFoto),
--   FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO fotoPerfilCuid (foto_cuid, id_cuid_FK)
-- VALUES
--     ('/path/foto1.jpg', 1),
--     ('/path/foto2.jpg', 2);


-- -- Table certificadosCuidador
-- CREATE TABLE IF NOT EXISTS certificadosCuidador (
--   id INT NOT NULL AUTO_INCREMENT,
--   certificado VARCHAR(200),
--   id_cuid INT NOT NULL,
--   PRIMARY KEY(id, id_cuid),
--   FOREIGN KEY(id_cuid) REFERENCES infoCuidador(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO certificadosCuidador (certificado, id_cuid)
-- VALUES
--     ('Certificado1.pdf', 1),
--     ('Certificado2.pdf', 1);


-- -- Table contratos
-- CREATE TABLE IF NOT EXISTS contratos (
--   id INT NOT NULL AUTO_INCREMENT,
--   id_contr_FK INT NOT NULL,
--   id_cuid_FK INT NOT NULL,
--   id_dep_FK INT NULL,
--   dt_emissao DATETIME NOT NULL,
--   dt_inicio DATE NOT NULL,
--   dt_fim DATE NOT NULL,
--   horario_inicio TIME NOT NULL,
--   horario_fim TIME NOT NULL,
--   subtotal FLOAT NOT NULL,
--   total FLOAT NOT NULL,
--   status_contrato ENUM("Contrato em Aguardo de Confirmação", "Contrato Confirmado", "Contrato Recusado", "Contrato Finalizado", "Contrato Cancelado") NOT NULL,
--   PRIMARY KEY(id),
--   FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id),
--   FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id),
--   FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO contratos (id_contr_FK, id_cuid_FK, id_dep_FK, dt_emissao, dt_inicio, dt_fim, horario_inicio, horario_fim, subtotal, total, status_contrato)
-- VALUES
--     (1, 1, NULL, NOW(), '2023-10-01', '2023-10-31', '08:00:00', '16:00:00', 1000.00, 1200.00, 'Contrato em Aguardo de Confirmação'),
--     (2, 2, 2, NOW(), '2023-10-15', '2023-11-15', '09:00:00', '17:00:00', 1200.00, 1400.00, 'Contrato Confirmado'),
--     (2, 1, 1, NOW(), '2023-10-12', '2023-11-13', '07:00:00', '09:00:00', 1250.00, 1430.00, 'Contrato Confirmado');


-- -- Table relatorios
-- CREATE TABLE IF NOT EXISTS relatorios (
--   id INT NOT NULL AUTO_INCREMENT,
--   contrato_id_FK INT NOT NULL,
--   id_contr_FK INT NOT NULL,
--   id_dep_FK INT NULL,
--   id_cuid_FK INT NOT NULL,
--   anotacoes TEXT(4000) NULL,
--   dt_emissao DATE NOT NULL,
--   PRIMARY KEY(id, contrato_id_FK),
--   FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id),
--   FOREIGN KEY(id_dep_FK) REFERENCES infoDependente(id),
--   FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id),
--   FOREIGN KEY(contrato_id_FK) REFERENCES contratos(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO relatorios (contrato_id_FK, id_contr_FK, id_dep_FK, id_cuid_FK, anotacoes, dt_emissao)
-- VALUES
--     (1, 1, NULL, 1, 'Anotações do relatório 1', '2023-10-20'),
--     (2, 2, 2, 2, 'Anotações do relatório 2', '2023-11-15'),
-- 	(3, 2, 1, 1, 'Anotações do relatório 2', '2023-11-13');


-- -- Table extratos
-- CREATE TABLE IF NOT EXISTS extratos (
--   id INT NOT NULL AUTO_INCREMENT,
--   subtotal FLOAT NOT NULL,
--   total FLOAT NOT NULL,
--   id_cuid_FK INT NOT NULL,
--   id_contr_FK INT NOT NULL,
--   dt_emissao DATE NOT NULL,
--   PRIMARY KEY(id),
--   FOREIGN KEY(id_cuid_FK) REFERENCES infoCuidador(id),
--   FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO extratos (subtotal, total, id_cuid_FK, id_contr_FK, dt_emissao)
-- VALUES
--     (1000.00, 1200.00, 1, 1, '2023-10-20'),
--     (1200.00, 1400.00, 2, 2, '2023-11-15'),
--     (1250.00, 1430.00, 2, 1, '2023-11-12');

-- -- Table metodoPagamento
-- CREATE TABLE IF NOT EXISTS metodoPagamento (
--   id INT NOT NULL AUTO_INCREMENT,
--   id_contr_FK INT NOT NULL,
--   numero_cartao VARCHAR(16) NOT NULL,
--   nome_cartao VARCHAR(150) NOT NULL,
--   validade DATE NOT NULL,
--   cvv VARCHAR(3) NOT NULL,
--   PRIMARY KEY(id),
--   FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO metodoPagamento (id_contr_FK, numero_cartao, nome_cartao, validade, cvv)
-- VALUES
--     (1, '1234567890123456', 'João Silva', '2025-12-31', '123'),
--     (2, '9876543210987654', 'Maria Santos', '2024-10-31', '456');


-- -- Table funcionarios
-- CREATE TABLE IF NOT EXISTS funcionarios (
--   id INT NOT NULL AUTO_INCREMENT,
--   nome_func VARCHAR(30) NOT NULL,
--   sobrenome_func VARCHAR(100) NOT NULL,
--   CPF_func VARCHAR(14) UNIQUE NOT NULL,
--   senha_func VARCHAR(8) NOT NULL,
--   PRIMARY KEY(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO funcionarios (nome_func, sobrenome_func, CPF_func, senha_func)
-- VALUES
--     ('Joana', 'Lima', '11111111111', 'senha143'),
--     ('Jonas', 'Marcos', '22222222222', 'senha466');


-- -- Table fotoContr
-- CREATE TABLE IF NOT EXISTS fotoContr (
--   idFoto INT NOT NULL AUTO_INCREMENT,
--   foto_contr VARCHAR(200) NOT NULL,
--   id_contr_FK INT NOT NULL,
--   PRIMARY KEY(idFoto, id_contr_FK),
--   FOREIGN KEY(id_contr_FK) REFERENCES infoContratante(id)
-- ) ENGINE = InnoDB;

-- INSERT INTO fotoContr (foto_contr, id_contr_FK)
-- VALUES
--     ('/path/foto1.jpg', 1),
--     ('/path/foto2.jpg', 2);


-- CREATE VIEW Dependente_Contratante AS
-- SELECT
--     ic.id AS "ID Contratante",
--     ic.CPF_contr AS "CPF Contratante",
--     ic.nome_contr AS "Nome Contratante",
--     ic.sobrenome_contr AS "Sobrenome Contratante",
--     id.id AS "ID Dependente",
--     id.CPF_dep AS "CPF Dependente",
--     id.nome_dep AS "Nome Dependente",
--     id.sobrenome_dep AS "Sobrenome Dependente"
-- FROM
--     infoContratante ic
-- JOIN
--     infoDependente id ON ic.id = id.id_contr_FK;
    
-- -- View loginContratante 
-- CREATE OR REPLACE VIEW loginContratante AS
-- SELECT
--     id AS "ID Contratante",
--     CPF_contr AS "CPF Contratante",
--     senha_contr AS "Senha Contratante"
-- FROM
--     infoContratante
-- ORDER BY id ASC;

-- -- View loginCuidador
-- CREATE OR REPLACE VIEW loginCuidador AS
-- SELECT
--     id AS "ID Cuidador",
--     CPF_cuid AS "CPF Cuidador",
--     senha_cuid AS "Senha Cuidador"
-- FROM
--     infoCuidador
-- ORDER BY id ASC;

-- CREATE VIEW disponibilidadeCuidador AS
-- SELECT
--     c.id_cuid_FK AS "ID Cuidador",
--     GROUP_CONCAT(DISTINCT DATE_FORMAT(c.dt_inicio, '%Y-%m-%d') ORDER BY DATE_FORMAT(c.dt_inicio, '%Y-%m-%d')) AS "Datas Ocupadas",
--     GROUP_CONCAT(DISTINCT c.horario_fim ORDER BY c.horario_fim) AS "Horários Ocupados",
--     GROUP_CONCAT(DISTINCT c.status_contrato ORDER BY c.status_contrato) AS "Status dos Contratos"
-- FROM contratos c
-- GROUP BY c.id_cuid_FK;