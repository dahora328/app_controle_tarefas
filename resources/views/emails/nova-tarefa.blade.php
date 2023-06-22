@component('mail::message')
# Título: {{$tarefa->titulo}}

Tarefa a ser cumprida: {{ $tarefa->tarefa}}
<br>
Data limite de conclusão: {{ $data_limite}}

@component('mail::button', ['url' => $url])
Clique aqui para ver a tarefa
@endcomponent

Att,<br>
{{ config('app.name') }}
@endcomponent
