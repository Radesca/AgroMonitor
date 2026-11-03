# sistema-monitoramento-agricola
Sistema web para monitoramento agrícola, desenvolvido em PHP e MySQL.

## Primeiro acesso

O banco não vem com usuário nem senha padrão. Depois de importar `SQL/curricularizacao.sql`, crie o primeiro administrador:

```bash
php SQL/gerar-admin.php "Seu Nome" seu@email.com "uma-senha-forte"
```

Execute no MySQL o `INSERT` que o comando imprimir. A senha não é gravada em nenhum arquivo: só o hash aparece.
