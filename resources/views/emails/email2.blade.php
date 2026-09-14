{{-- Sent to the Villa Malie team when a new booking request arrives. --}}
@include('emails.partials.booking', [
    'title' => 'New booking request',
    'heading' => 'New booking request',
    'intro' => [
        'A customer has submitted a booking request on villamaliesamui.com.',
        'Please review the details below and contact the customer to confirm.',
    ],
    'details' => $details,
])
