@component('mail::message')
# CDI - Cartão de Vantagens

Mensagem de Contato.

#Email: {{$contato["email"]}}
#Assunto: {{$contato["assunto"]}}
#Mensagem: {{$contato["mensagem"]}}

Obrigado,<br>
{{ config('app.name') }}
@endcomponent
