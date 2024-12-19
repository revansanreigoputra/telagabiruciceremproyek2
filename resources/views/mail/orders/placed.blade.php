<x-mail::message>
# Booking Tiket Sukses!

Thank You Broh. No Booking kamu adalah: {{ $individu->id }}.

<x-mail::button :url="$url">
    Lihat Booking
</x-mail::button>

Terimakasih,<br>
{{ config('app.name') }}
</x-mail::message>
