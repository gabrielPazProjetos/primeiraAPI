--- API Laravel 5.7 - Lab de Desenvolvimento
Este projeto é uma API RESTful desenvolvida com o framework Laravel 5.7 como parte de um laboratório prático de formação.
A API permite realizar operações básicas de cadastro de usuários, utilizando rotas HTTP, validações e estrutura MVC.

--- Requisitos
- PHP >= 7.1
- Composer
- MySQL
- Laravel 5.7
- Servidor HTTP (Apache ou NGINX) — opcional
- Ferramentas recomendadas: Postman ou Insomnia para testes

--- Estrutura do Projeto
- routes/api.php: Rotas da API
- app/Http/Controllers/UsuarioController.php: Lógica de requisições
- app/Models/Usuario.php: Modelo Eloquent
- database/migrations/: Estrutura da tabela usuarios
- database/seeds/: Dados fictícios para testes
- tests/Feature/UsuarioTest.php: Testes automatizados

--- Método	Rota	Descrição
- GET	/api/usuarios	Lista todos os usuários
- POST	/api/usuarios	Cria um novo usuário

--- Exemplo de requisição POST
json
{
  "nome": "João da Silva",
  "email": "joao@example.com"
}
