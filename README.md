Aqui está um modelo de **README.md** que você pode incluir no repositório do projeto. Ele explica cada ação que a pessoa deve fazer ao baixar e rodar o sistema:

---

# Projeto DWIII - Sistema de Gestão

Este projeto foi desenvolvido na disciplina de **Desenvolvimento Web III** utilizando **Laravel 10**, **Jetstream**, **Livewire** e **Tailwind/Flowbite**.  
O sistema permite gerenciar **Produtos** e **Clientes**, além de possuir um fluxo de **Login/Cadastro customizado com senha hash**.

---

## 📦 Requisitos

Antes de rodar o projeto, certifique-se de ter instalado:
- [PHP >= 8.1](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js + NPM](https://nodejs.org/)
- SQLite ou MySQL (neste projeto usamos SQLite para simplificar)

---

## 🚀 Instalação

1. **Clonar o repositório**
   ```bash
   git clone <url-do-repo>
   cd projeto-dwiii
   ```

2. **Instalar dependências do Laravel**
   ```bash
   composer install
   ```

3. **Instalar dependências do frontend**
   ```bash
   npm install
   npm run dev
   ```

4. **Configurar o arquivo `.env`**
   - Copie o arquivo de exemplo:
     ```bash
     cp .env.example .env
     ```
   - Configure o banco de dados para SQLite:
     ```env
     DB_CONNECTION=sqlite
     DB_DATABASE=database/database.sqlite
     ```
   - Crie o arquivo do banco:
     ```bash
     touch database/database.sqlite
     ```

5. **Gerar a chave da aplicação**
   ```bash
   php artisan key:generate
   ```

6. **Rodar as migrations**
   ```bash
   php artisan migrate
   ```

---

## ⚙️ Funcionalidades

- **Autenticação customizada**: cadastro e login com senha criptografada (`Hash::make` e `Hash::check`).
- **CRUD de Produtos**: cadastro, edição, exclusão e listagem com layout moderno.
- **CRUD de Clientes**: gerenciamento de dados de clientes com campos de nome, email e telefone.
- **Dashboard personalizado**: tela inicial com cards apresentando os módulos do sistema.

---

## ▶️ Como rodar

1. Inicie o servidor Laravel:
   ```bash
   php artisan serve
   ```
2. Acesse no navegador:
   ```
   http://127.0.0.1:8000
   ```

---

## 🎯 Dicas

- Se precisar reiniciar o banco:
  ```bash
  php artisan migrate:fresh --seed
  ```
- Sempre rodar `npm run dev` para compilar os estilos do Tailwind/Flowbite.
- Verifique se o arquivo `database.sqlite` existe antes de rodar.

---

## 📚 Tecnologias utilizadas

- **Laravel 10** – Framework PHP
- **Jetstream** – Autenticação e scaffolding
- **Livewire** – Componentes dinâmicos sem JavaScript
- **TailwindCSS + Flowbite** – Estilização moderna
- **SQLite** – Banco de dados simples para testes

---
