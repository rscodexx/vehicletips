
<p align="center">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/rscodexx/vehicletips">

  <a href="https://github.com/rscode/ragpainel/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/rscodexx/vehicletips">
  </a>

   <img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen">
   <a href="https://github.com/rscodexx/vehicletips/stargazers">
    <img alt="Stargazers" src="https://img.shields.io/github/stars/rscodexx/rscodexx?style=social">
  </a>

  <a href="https://rscode.com.br">
    <img alt="Feito por RS CODE" src="https://img.shields.io/badge/feito%20por-RS CODE-%237519C1">
  </a>

  <a href="https://blog.rscode.com.br/">
    <img alt="Stargazers" src="https://img.shields.io/badge/Blog-RS CODE-%237159c1?style=flat&logo=ghost">
    </a>
  
 
</p>

<h4 align="center"> 
	Vehicle Tips 🚀
</h4>

<p align="center">
 <a href="#-sobre-o-projeto">Sobre</a> •
 <a href="#%EF%B8%8F-funcionalidades">Funcionalidades</a> •
 <a href="#-layout">Layout</a> • 
 <a href="#-tecnologias">Tecnologias</a> • 
 <a href="#warning-requisitos-mínimos">Requisitos Mínimos</a> • 
 <a href="#large_blue_circle-instalação-no-windows">Instalação no Windows</a> • 
 <a href="#-autor">Autor</a> •
 <a href="#user-content--licença">Licença</a>
</p>


## 💻 Sobre o projeto

Vehicle Tips - É um sistema para cadastrar e visualizar dicas sobre todos os tipos de veículos, desenvolvido para um teste prático em um processo seletivo.

## 🎬 <a href="https://rscode.com.br/vehicletips">Demonstração</a>

---

## ⚙️ Funcionalidades

- [x] Início
  - [x] Visualizar últimas dicas.
  - [x] Total de Usuários, dicas de carros, motos e caminhões.

- [x] Usuário
  - [x] Criar conta.
  - [x] Registrar conta.

- [x] Dicas
  - [x] Visualizar todas as dicas.
  - [x] Visualizar suas dicas.
  - [x] Cadastrar nova dica.
---

## 🎨 Layout

### :iphone: Celular

<p align="center">
  <img alt="NextLevelWeek" title="#NextLevelWeek" src="./public/examples/mobile/01.jpg" width="200px">

  <img alt="NextLevelWeek" title="#NextLevelWeek" src="./public/examples/mobile/02.jpg" width="200px">
  
  <img alt="NextLevelWeek" title="#NextLevelWeek" src="./public/examples/mobile/03.jpg" width="200px">
</p>

### :computer: Desktop

<p align="center" style="display: flex; align-items: flex-start; justify-content: center;">
  <img alt="NextLevelWeek" title="#NextLevelWeek" src="./public/examples/desktop/01.png" width="400px">
  <img alt="NextLevelWeek" title="#NextLevelWeek" src="./public/examples/desktop/02.png" width="400px">
  <img alt="NextLevelWeek" title="#NextLevelWeek" src="./public/examples/desktop/03.png" width="400px">
</p>

---

## 🛠 Tecnologias

As seguintes ferramentas foram usadas na construção do projeto:

<img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?&style=for-the-badge&logo=php&logoColor=white"/> <img alt="Laravel" src="https://img.shields.io/badge/laravel%20-%23FF2D20.svg?&style=for-the-badge&logo=laravel&logoColor=white"/> <img alt="JavaScript" src="https://img.shields.io/badge/javascript%20-%23323330.svg?&style=for-the-badge&logo=javascript&logoColor=%23F7DF1E"/> <img alt="HTML5" src="https://img.shields.io/badge/html5%20-%23E34F26.svg?&style=for-the-badge&logo=html5&logoColor=white"/> <img alt="CSS3" src="https://img.shields.io/badge/css3%20-%231572B6.svg?&style=for-the-badge&logo=css3&logoColor=white"/> <img alt="Bootstrap" src="https://img.shields.io/badge/bootstrap%20-%23563D7C.svg?&style=for-the-badge&logo=bootstrap&logoColor=white"/>

---

## :warning: Requisitos Mínimos

:heavy_check_mark: PHP na versão 7.3 ou superior<br>
:heavy_check_mark: BCMath PHP Extensão ativa<br>
:heavy_check_mark: Ctype PHP Extensão ativa<br>
:heavy_check_mark: Fileinfo PHP Extensão ativa<br>
:heavy_check_mark: JSON PHP Extensão ativa<br>
:heavy_check_mark: Mbstring PHP Extensão ativa<br>
:heavy_check_mark: OpenSSL PHP Extensão ativa<br>
:heavy_check_mark: PDO PHP Extensão ativa<br>
:heavy_check_mark: Tokenizer PHP Extensão ativa<br>
:heavy_check_mark: XML PHP Extensão ativa<br>

---

## :large_blue_circle: Instalação no Windows.

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:
[GIT](https://git-scm.com/download/win), [Apache](https://httpd.apache.org/docs/2.4/platform/windows.html), [Mysql](https://dev.mysql.com/downloads/installer/) (Ou qualquer outro tipo de banco de dados), [Composer](https://getcomposer.org/download/)

Se você não sabe instalar e configurar um ambiente de servidor, pode utilizar ferramentas que já vem tudo pronto como:
[Apache](https://www.apachefriends.org/pt_br/download.html) [Wamp](https://www.wampserver.com/en/)

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

#### 🎲 Rodando o Backend (servidor)

```bash

# Clone este projeto
$ git clone https://github.com/rscodexx/vehicletips.git

# Ou baixe o projeto direto do repositório: https://github.com/rscodexx/vehicletips

# Renomeie o arquivo .env-example(está na pasta raiz do projeto) para .env e configure.

DB_CONNECTION=mysql #Tipo de banco de dados.
DB_HOST=127.0.0.1 #IP do banco de dados.
DB_PORT=3306 #Porta do banco de dados.
DB_DATABASE=laravel #Tabela do banco de dados.
DB_USERNAME=root #Usuário do banco de dados
DB_PASSWORD=root #Senha do banco de dados.
TIMEZONE=America/Sao_Paulo #Horário
LOCALE=pt-BR #Idioma geral.
FALLBACK_LOCALE=pt-BR #Idioma das mensagens de erro.

# Acesse a pasta do projeto em seu terminal/cmd
$ cd vehicletips

# Após entrar no diretório do projeto instale o composer e suas dependências.
$ composer install

# Insira as tabelas no banco de dados.
$ php artisan migrate

# Preencha o banco de dados com dados fakes(opcional).
$ php artisan db:seed

# Pronto, seu servidor já está configurado para rodar o projeto.

```

#### 🧭 Rodando a aplicação web (Frontend)

```bash

# Inicie o seu servidor, para acessar o painel é necessário acessar a pasta public, um exemplo abaixo:

$ http://localhost/vehicletips/public

# Você também pode rodar a aplicação sem precisar de um servidor apache configurado através do php artisan.

# Acesse a pasta do projeto em seu terminal/cmd
$ cd vehicletips

# Digite o comando:
$ php artisan serve

# Basta clicar no link gerado para iniciar o painel.

# Use o comando CTRL + C para desligar o servidor.

```
---

## 🦸 Autor

<a href="https://rscode.com.br">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/80411629?s=460&u=b013fbff0e47f42e5f2c819849416285d380d5e7&v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Rafael Santos</b></sub></a> <a href="https://rscode.com.br/"</a>
 <br />

[![Twitter Badge](https://img.shields.io/badge/-@raffrenan-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/tgmarinho)](https://twitter.com/raffrenan) [![Linkedin Badge](https://img.shields.io/badge/-Raffrenan-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/tgmarinho/)](https://www.linkedin.com/in/raffrenan/)
[![Gmail Badge](https://img.shields.io/badge/-raffrenan@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:raffrenan@gmail.com)](mailto:raffrenan@gmail.com)

---

## 📝 Licença

Este projeto esta sobe a licença [MIT](./LICENSE.md).

Feito com ❤️ por Rafael Santos 👋🏽 [Entre em contato!](https://www.rscode.com.br)

---

##  Versões do README

[Português 🇧🇷](./README.md)  |  [Inglês](./README-en.md)
