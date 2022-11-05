Primeiro passo para usar a aplicação:
- Criar o usuário no MYSQL
- Após entrar no terminal MYSQL, utilize os seguintes comandos:

CREATE USER 'BlueLogic'@'localhost' IDENTIFIED BY 'simpleCRUD';

GRANT ALL PRIVILEGES ON * . * TO 'novo_usuario'@'localhost';

FLUSH PRIVILEGES;

Agora, criaremos o banco de dados que e a tabela que  serão utilizados:

CREATE DATABASE blue_logic;
USE blue_logic;
CREATE TABLE users ( name VARCHAR(50) username VARCHAR(50),lastname VARCHAR(50),email VARCHAR(50));


