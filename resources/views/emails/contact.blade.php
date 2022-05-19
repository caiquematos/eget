@component('mail::message')
# CDI - Cartão de Vantagens

Mensagem de Contato.

<strong>Email:</strong> {{$contato["email"]}}<br>
<strong>Assunto:</strong> {{$contato["assunto"]}}<br>
<strong>Mensagem:</strong> {{$contato["mensagem"]}}<br>

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
