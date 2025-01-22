# Motor Web

Motor Web é um sistema de gerenciamento de ordens de serviço para oficinas de carros. Este projeto foi desenvolvido com o objetivo de facilitar o registro e acompanhamento de serviços realizados em veículos, promovendo eficiência e organização no ambiente de trabalho.

O sistema permite inserir informações detalhadas sobre o serviço a ser realizado, incluindo descrição do defeito, urgência do serviço e necessidade de reposição de peças, caso necessário.

## 📋 Funcionalidades

- Cadastro de ordens de serviço
- Visualização de serviços cadastrados
- Edição de informações das ordens de serviço
- Exclusão de ordens de serviço
- Registro de detalhes como:
  - Tipo de serviço
  - Descrição do defeito
  - Nível de urgência
  - Necessidade de reposição de peças

## 🛠️ Tecnologias Utilizadas

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Banco de Dados**: MySQL

## 🚀 Como Começar

Siga os passos abaixo para configurar e executar o projeto localmente.

### 📦 Pré-requisitos

- Servidor web com suporte a PHP (como XAMPP, WAMP ou LAMP)
- Banco de dados MySQL
- Navegador de internet moderno

### 🔧 Instalação

1. Clone o repositório para sua máquina local:

   ```bash git clone https://github.com/KaikPedretti/motor-web.git ```
   
3. Mova os arquivos do projeto para a pasta pública do seu servidor web (ex.: htdocs para XAMPP).

4. Importe o banco de dados:
  - Localize o arquivo database.sql na raiz do projeto.
  - Acesse o phpMyAdmin (ou seu gerenciador de banco de dados preferido).
  - Crie um banco de dados chamado motor_web.
  - Importe o arquivo database.sql para o banco de dados criado.

4. Configure o arquivo de conexão com o banco de dados:
  - Localize o arquivo config.php no projeto.
  - Atualize as credenciais do banco de dados conforme necessário (host, usuário, senha, nome do banco).

### ▶️ Executando o Projeto

1. Inicie o servidor web e o banco de dados.

2. Abra seu navegador e acesse o projeto através do endereço:

   ``` http://localhost:3000/ ```

### 📄 Licença

Este projeto está licenciado sob a Licença MIT. Sinta-se à vontade para usá-lo e adaptá-lo conforme necessário.

### 📞 Contato

Caso tenha dúvidas ou sugestões, entre em contato:

Autor: Kaik Pedretti
GitHub: github.com/KaikPedretti
