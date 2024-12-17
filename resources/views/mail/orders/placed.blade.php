<x-mail::message>
# Booking Tike Sukses!

Thank You Broh. No Booking kamu adalah: {{ $individu->id }}.

<x-mail::button :url="$url">
    Liat Booking
</x-mail::button>

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
