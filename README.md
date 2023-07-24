
# Projeto DompixelShop

Teste pratico para desenvolver um crud em laravel 

## Rodar o projeto localente
Clone o projeto

```bash
  git clone https://github.com/MarcelloMonteiro/teste-laravel.git
```

Entre no diretório do projeto

```bash
  cd teste-laravel
```

Após fazer o clone do repositorio rodar os seguintes comandos
```bash
  composer install
  composer update
```
Depois precisa configurar o arquivo .env para configurar o banco de dados. Abaixo um exemplo de configuração no .env
```bash
DB_CONNECTION=mysql // tipo do banco
DB_HOST=127.0.0.1 //Endereço do banco
DB_PORT=3306 //Porta do banco
DB_DATABASE=laravel //Nome do banco
DB_USERNAME=root //Usuario do banco
DB_PASSWORD= //Senha do banco
```
Apos configurar o banco de dados vamos rodar o comandos para gerar as tabelas no banco de dados

```bash
  php artisan migrate
```
Depois de gerar as tabelas o sistema ja vai esta pronto para uso mas antes precisa rodar o comando abaixo para rodar o sistema
```bash
  php artisan serve
```
agora so acesar o sistema no Endereço local

```bash
  http://127.0.0.1:8000/produto
```



## Funcionalidades

- Lista de Produtos cadastrados
- Criar um novo Produto
- Editar um produto
- Apagar um produto


## Stack utilizada

**Front-end:** Laravel

**Back-end:** Laravel

