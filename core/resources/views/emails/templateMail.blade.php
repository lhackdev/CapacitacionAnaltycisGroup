@component('mail::message')
#  {{$data->nombre}}

{{$data->mensaje}}

@component('mail::panel')
Esta clase estuvo genial :)
@endcomponent


@component('mail::button', ['url' => 'https://github.com/lhackdev/CapacitacionAnalyticsGroup'])
Ir al Repositorio
@endcomponent


Gracias,<br>
{{$data->nombre}}
@endcomponent
