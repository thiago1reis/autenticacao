## Autenticação com PHP usando PDO.

### Banco de dados:
```sh
    CREATE DATABASE autenticacao CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

    CREATE TABLE `autenticacao`.`usuarios` 
    (	
        `id` INT NOT NULL , 
        `nome` VARCHAR(255) NOT NULL , 
        `email` VARCHAR(255) NOT NULL , 
        `senha` VARCHAR(255) NOT NULL , 
        `status` BOOLEAN NOT NULL DEFAULT TRUE , 
        PRIMARY KEY (`id`), 
        UNIQUE (`email`)
    ) ENGINE = InnoDB;

```