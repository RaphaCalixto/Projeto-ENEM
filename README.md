
# Projeto ENEM

Este projeto simula um "banco de dados" de estudo, permitindo que alunos acessem conteúdos para se preparar para o ENEM. Desenvolvido em 2019, utiliza PHP, MySQL, HTML, CSS e JavaScript.

## 🚀 Tecnologias Utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript

## ✅ Pré-requisitos

Antes de começar, você precisará ter os seguintes softwares instalados em sua máquina:

- [XAMPP](https://www.apachefriends.org/pt_br/index.html) ou [WampServer](https://www.wampserver.com/en/) (para ambiente local com Apache e MySQL)
- Navegador web (como Google Chrome ou Mozilla Firefox)

## ⚙️ Como Executar

1. **Clone o repositório:**

   ```bash
   git clone https://github.com/RaphaCalixto/Projeto-ENEM.git
   ```

2. **Copie os arquivos para o diretório do servidor local:**

   - Se estiver usando o XAMPP, copie a pasta `Projeto-ENEM` para o diretório `htdocs`.

3. **Importe o banco de dados:**

   - Inicie o Apache e o MySQL pelo painel do XAMPP.
   - Acesse o [phpMyAdmin](http://localhost/phpmyadmin).
   - Crie um novo banco de dados com o nome `enem`.
   - Importe o arquivo `tbusuarios.sql` localizado na raiz do projeto para o banco de dados recém-criado.

4. **Configure a conexão com o banco de dados:**

   - Abra o arquivo `conexao.php` e verifique se as informações de host, usuário, senha e nome do banco de dados estão corretas:

     ```php
     $host = "localhost";
     $usuario = "root";
     $senha = "";
     $banco = "enem";
     ```

5. **Execute o projeto:**

   - Abra o navegador e acesse `http://localhost/Projeto-ENEM/index.php`.

## 📁 Estrutura do Projeto

O projeto está organizado da seguinte forma:

- `index.php`: Página inicial do projeto.
- `conexao.php`: Arquivo de conexão com o banco de dados.
- `tbusuarios.sql`: Script SQL para criação e população da tabela de usuários.
- Pastas como `css`, `js`, `imagens`: Contêm os arquivos de estilo, scripts e imagens utilizados no projeto.

## 📄 Licença

Este projeto está sob a licença MIT. Consulte o arquivo `LICENSE` para mais informações.
