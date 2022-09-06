@component('mail::message')
    # E-GET Gerenciador de Clientes

    Olá,
    {{ $usuario['nome'] }}.

    Seja bem-vindo ao Gerenciador de Clientes da e-Get.
    Seu cadastro foi realizado com sucesso.
    Agora você já pode acessar a nossa plataforma!

    Obrigado,
    {{ config('app.name') }}
@endcomponent
