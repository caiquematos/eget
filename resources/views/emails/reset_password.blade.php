@component('mail::message')
# CDI - Cartão de Vantagens

Clique no botão abaixo para criar uma nova senha.

@component('mail::button', ['url' => "http://www.cdidevantagens.com.br/cliente/recuperar/$token"])
Recuperar Senha
@endcomponent

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
