# #NãoCompreViolência

## https://naocompreviolencia.com/

## Características da aplicação

- Git
- PHP 5.6 ou superior
- Composer
- Redis
- Não possui banco de dados

### Instalação 
#### Guia genérico de uma aplicação desenvolvida em PHP pelo Projetos Especiais

- Clonar o repositório
- Configurar servidor web para apontar para a pasta-do-site/public
- Instalar certificado SSL
- Criar um banco de dados (se necessário)
- Entrar na pasta do site
- Copiar o arquivo .env.example para .env
- Editar o arquivo .env e configurar os dados do sistema, inclusive banco de dados e setar o APP_ENV=production
- Executar o comando "composer install" para instalar todas as dependências
- Restaurar backup do banco de dados ou executar o comando "php artisan migrate" para criar a estrutura do banco de dados
- Executar o comando `php artisan migrate` para atualizar a estrutura do banco de dados (caso já não tenha sido executado no passo 8)

### Atualizando a aplicação

- Entrar na pasta do site
- Baixar as atualizações de código fonte usando Git (git pull ou git fetch + git merge, isso depende de como operador prefere trabalhar com Git)
- Executar o comando `composer install` para instalar todas as dependências (atualizadas)
- Executar o comando `php artisan migrate`

#### Passos extras específicos desta aplicação

- Não possui
