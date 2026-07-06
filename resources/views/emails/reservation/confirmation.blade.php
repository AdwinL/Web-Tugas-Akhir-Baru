@component('mail::message')
# Reservation Request Received

Dear {{ $reservation->name }},

Thank you for choosing Surya Lagoon. We have received your reservation request with the following details:

- **Event type:** {{ $reservation->event_type }}
- **Guest count:** {{ $reservation->guest_count }}
- **Date:** {{ $reservation->date->format('F j, Y') }}
- **Time:** {{ \Carbon\Carbon::parse($reservation->time)->format('H:i') }}
- **Notes:** {{ $reservation->notes ?? 'N/A' }}

Your request is currently **{{ ucfirst($reservation->status) }}**. We will notify you again once your reservation is confirmed.

Thanks,
Surya Lagoon Team
@endcomponent
