# #NãoCompreViolência

## https://naocompreviolencia.com/

## Características da aplicação

- [Git](https://git-scm.com/docs/user-manual.html)
- [PHP 5.6 ou superior](http://php.net/)
- [Composer](https://getcomposer.org/)
- [Redis](https://redis.io/topics/quickstart)
- **Ignorar todos os passos relacionados a banco de dados** pois a aplicação não possui banco

### Instalação 
#### Guia genérico de uma aplicação desenvolvida em PHP pelo Projetos Especiais

- Clonar o repositório
- Configurar servidor web para apontar para a **`<pasta-aonde-o-site-foi-instalado>`/public**
- Instalar certificado SSL (precisamos que a página seja acessível **via https apenas**)
- Criar o banco do dados
- Entrar na `<pasta-aonde-o-site-foi-instalado>`
- Copiar o arquivo `.env.example` para `.env`
- Editar o arquivo `.env` e configurar todos dados do sistema
- Ainda no arquivo `.env`, alterar a variável `APP_ENV` para o ambiente correto (testing, staging, production)
- Ainda no arquivo `.env`, configurar banco de dados
- Executar o comando `composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev` para instalar todas as dependências da aplicação
- Banco de dados
    - Caso **não** haja backup: executar o comando `php artisan migrate` para **criar** a estrutura do banco de dados
    - Caso haja backup: restaurar o banco e executar o comando `php artisan migrate` para **atualizar** a estrutura do banco de dados

### Atualizando a aplicação

- Entrar na `<pasta-aonde-o-site-foi-instalado>`
- Baixar as atualizações de código fonte usando Git (git pull ou git fetch + git merge, isso depende de como operador prefere trabalhar com Git)
- Executar o comando `composer install --no-interaction --prefer-dist --optimize-autoloader --no-dev` para instalar todas as dependências (atualizadas)
- Executar o comando `php artisan migrate` para atualizar o banco de dados

#### Passos extras específicos desta aplicação

- Não possui
