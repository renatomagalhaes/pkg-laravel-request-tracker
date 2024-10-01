# Laravel Request Tracker

![PHP Version](https://img.shields.io/badge/PHP-%5E8.1-blue)
![Laravel Version](https://img.shields.io/badge/Laravel-%5E10.x-brightgreen)

O Laravel Request Tracker é um pacote para monitorar e rastrear todas as requisições feitas à aplicação Laravel, fornecendo insights sobre o uso das rotas e performance.

## Recursos
- Rastreamento de todas as requisições HTTP.
- Relatórios detalhados sobre as rotas mais acessadas e tempos de resposta.
- Configuração personalizável para ignorar rotas ou métodos específicos.
- Compatível com Laravel 10.

## Instalação
```bash
composer require renatomagalhaes/pkg-laravel-request-tracker
php artisan request-tracker:install
```

## Configuração
Após a instalação, publique o arquivo de configuração usando o comando:

```bash
php artisan request-tracker:install
```

## Uso
Este pacote começa a rastrear as requisições automaticamente após a instalação.

## License
The MIT License (MIT). Please see [License File](LICENSE.md) for more information.