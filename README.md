# Agenda
A página de registro (register.php) exibe um formulário HTML onde os usuários podem inserir seu nome, nome de usuário e senha. Quando o formulário é enviado, os dados são recebidos no código PHP. A partir daí, é construída uma consulta SQL para inserir esses dados na tabela "register" do banco de dados.

O código também inclui uma página de login (login.html) que possui campos para o nome de usuário e senha. Quando o formulário de login é enviado, o código PHP correspondente (register.php) verifica se as informações fornecidas coincidem com as registradas no banco de dados. Se as credenciais forem válidas, o usuário é redirecionado para a página "index.php" (supostamente a página principal do sistema).

O arquivo config.php é incluído nos outros arquivos e contém as informações de configuração para estabelecer uma conexão com o banco de dados MySQL.

O SQL Dump incluído é um trecho de código SQL que cria a tabela "register" no banco de dados com colunas como "id", "idName", "idEmail", "idUser", "idPassword" e "idTelefone". Ele também define um índice primário para a coluna "id" e configura a coluna para autoincremento.

Para usar esse sistema, você precisará configurar um servidor web com suporte a PHP e um banco de dados MySQL. Além disso, é necessário ajustar as configurações de conexão no arquivo config.php para corresponder às suas configurações do servidor e do banco de dados.
