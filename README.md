# AgroMonitor

Sistema web de monitoramento agrícola em **PHP e MySQL**, com login. Controla lotes de plantio, insumos e as aplicações de insumo em cada lote. Projeto de curricularização, desenvolvido em colaboração.

## Funcionalidades

- **Lotes:** nome, cultura, área em hectares e localização.
- **Insumos:** nome, tipo, unidade de medida, quantidade em estoque e imagem.
- **Aplicações:** registro de data, quantidade utilizada e observação, ligando um insumo, um lote e o usuário que aplicou.
- **Usuários:** cadastro com perfil e senha armazenada como hash.
- CRUD completo (listar, detalhar, inserir, editar e remover) para cada entidade.
- Login e logout, com as páginas protegidas por verificação de sessão.

## Arquitetura

Camadas separadas, em PHP puro:

```
MODEL/   classes das entidades (aplicacao, insumo, lote, usuario)
DAL/     acesso a dados com PDO (conexao.php e um DAL por entidade)
VIEW/    formulários, listagens e operações de cada entidade
SQL/     curricularizacao.sql (estrutura do banco) e gerar-admin.php
```

## Como rodar

Requer PHP e MySQL (por exemplo, XAMPP).

1. Crie o banco `curricularizacao` no MySQL e importe `SQL/curricularizacao.sql`.
2. Confira host, usuário e senha em `DAL/conexao.php` e ajuste ao seu ambiente.
3. Coloque a pasta no servidor web (`htdocs`, no XAMPP) e abra `index.php`.

## Primeiro acesso

O banco não vem com usuário nem senha padrão. Depois de importar `SQL/curricularizacao.sql`, crie o primeiro administrador:

```bash
php SQL/gerar-admin.php "Seu Nome" seu@email.com "uma-senha-forte"
```

Execute no MySQL o `INSERT` que o comando imprimir. A senha não é gravada em nenhum arquivo: só o hash aparece.

## Tecnologias

PHP, MySQL, PDO, HTML e CSS.
