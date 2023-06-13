ReadMe para a API Laravel
markdown
Copy code
# API de Eletrodomésticos

API para gerenciamento de eletrodomésticos.

## Instalação

Certifique-se de ter o PHP 7.4 ou superior e o Composer instalados.

1. Clone este repositório:

git clone https://github.com/luisTrivinh0/eletrodomesticos-api.git

2. Navegue até o diretório do projeto:

cd api-eletrodomesticos

3. Instale as dependências do Composer:

composer install

4. Crie um arquivo de ambiente `.env` baseado no arquivo `.env.example`:

cp .env.example .env

5. Gere a chave de criptografia da aplicação:

php artisan key:generate

6. Configure as informações do banco de dados no arquivo `.env`.

7. Execute as migrações do banco de dados:

php artisan migrate

8. Inicie o servidor:

php artisan serve

9. Acesse a API em `http://localhost:8000/`.

## Endpoints

- `/api/eletrodomesticos`: Retorna todos os eletrodomésticos.
- `/api/eletrodomesticos/{id}`: Retorna um eletrodoméstico específico.
- `/api/eletrodomesticos`: Cria um novo eletrodoméstico.
- `/api/eletrodomesticos/{id}`: Atualiza um eletrodoméstico existente.
- `/api/eletrodomesticos/{id}`: Exclui um eletrodoméstico.

## Contribuição

Se você quiser contribuir para este projeto, siga as etapas abaixo:

1. Faça um fork do repositório.
2. Crie um novo branch com a sua feature: `git checkout -b minha-feature`.
3. Faça as alterações necessárias e adicione os commits: `git commit -m 'Minha nova feature'`.
4. Envie as suas alterações: `git push origin minha-feature`.
5. Envie um Pull Request.
