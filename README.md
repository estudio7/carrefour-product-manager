# Product Management System

## Descrição

Este é um sistema de gerenciamento de produtos que utiliza uma API backend em Laravel e um frontend em React com Next.js. A API implementa conceitos de DDD e S.O.L.I.D, e o frontend utiliza Redux e Saga para um gerenciamento de estado eficiente.

## Pré-requisitos

Antes de começar, certifique-se de ter instalado em sua máquina:
- Docker e Docker Compose
- Node.js e npm
- PHP e Composer

## Instalação

1. **Clonar o Repositório**
`   git clone [URL do Repositório]`
  `cd product-management-system`
Configuração do Backend (Laravel)

Navegue até a pasta laravel-api.
Copie o arquivo .env.example para .env e configure as variáveis de ambiente.
Execute o comando para subir os serviços com Docker:
 
`docker-compose up -d`
Após o serviço estar rodando, execute as migrações:
`docker-compose exec laravel-api php artisan migrate`

2. **Configuração do Frontend (Next.js)**

Navegue até a pasta front-end.
Instale as dependências:
`npm install`
Inicie o servidor de desenvolvimento:

`npm run dev`
