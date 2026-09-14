{{-- Sent to the customer after they submit a booking request. --}}
@include('emails.partials.booking', [
    'title' => 'Welcome to Villa Malie',
    'heading' => 'Welcome to Villa Malie',
    'intro' => [
        'Thank you for your booking request. Villa Malie is one of only eight',
        'exclusive villas in "The Bayridge" compound. As our special guest,',
        'you\'ll enjoy our luxurious three-bedroom, four-bathroom retreat.',
        'Our team will contact you shortly to confirm your stay.',
    ],
    'details' => $details,
])
