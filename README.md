<p align="center" style="
    background-color: #8080808c;
    padding: 1rem;
"><a href="https://www.e-get.com.br/" target="_blank"><img src="https://www.e-get.com.br/wp-content/uploads/2022/01/cropped-logo-e-get-topo.png" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Importante

Os usuários cadastrados na aplicação desempenham dois papéis: cliente e administrador.
Portanto, o esquema de tabelas contém a tabela 'roles' que possui funções predefinidas cadastradas.
Para preencher essa tabela é necessário executar o seguintes comandos para criá-las e em seguida alimentá-las:

-   php artisan migrate:fresh --seed

Happy coding!
