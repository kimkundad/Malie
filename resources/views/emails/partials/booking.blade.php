{{--
    Shared booking email layout.
    Email clients (Gmail, Outlook) ignore external CSS and flexbox,
    so everything here is table-based with inline styles.
    Params: $title, $heading, $intro (array of lines), $details
--}}
@php
    $rows = [
        'Booking Name' => trim(($details['first_name'] ?? '').' '.($details['last_name'] ?? '')),
        'Phone'        => $details['phone'] ?? '',
        'Email'        => $details['email'] ?? '',
        'Adults'       => $details['adults'] ?? '',
        'Children'     => $details['children'] ?? '',
        'Pets'         => $details['pets'] ?? '',
        'Detail'       => $details['note'] ?? '',
    ];
    $dates = array_filter([$details['arrive'] ?? null, $details['departure'] ?? null]);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ $title }}</title>
</head>
<body style="margin:0; padding:0; background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif;">
<table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:#D5D9E2; border-collapse:collapse;">
    <tr>
        <td align="center" style="padding:40px 12px;">
            <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0" style="max-width:600px; background-color:#ffffff; border-radius:24px; border-collapse:separate;">
                {{-- Logo --}}
                <tr>
                    <td align="center" style="padding:45px 40px 10px 40px;">
                        <a href="{{ url('/') }}" rel="noopener" target="_blank">
                            <img alt="Villa Malie Koh Samui" src="{{ url('home/images/logo-header-MALIE_v2.png') }}" width="200" style="display:block; width:200px; max-width:100%; height:auto; border:0;" />
                        </a>
                    </td>
                </tr>

                {{-- Heading --}}
                <tr>
                    <td align="center" style="padding:10px 40px 30px 40px; font-size:14px; color:#7E8299; line-height:1.5;">
                        <p style="margin:0 0 9px 0; color:#181C32; font-size:22px; font-weight:700;">{{ $heading }}</p>
                        @foreach ($intro as $line)
                            <p style="margin:0;">{{ $line }}</p>
                        @endforeach
                    </td>
                </tr>

                {{-- Booking summary --}}
                <tr>
                    <td style="padding:0 40px 30px 40px;">
                        <h3 style="margin:0 0 18px 0; color:#181C32; font-size:18px; font-weight:600;">Booking summary</h3>
                        <table role="presentation" width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse; font-size:14px; color:#7E8299;">
                            @foreach ($rows as $label => $value)
                                <tr>
                                    <td valign="top" style="padding:4px 10px 4px 0; white-space:nowrap;">{{ $label }}</td>
                                    <td valign="top" align="right" style="padding:4px 0; word-break:break-word;">{!! nl2br(e($value)) !!}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="2" style="padding:12px 0 0 0; border-bottom:1px dashed #E4E6EF; font-size:0; line-height:0;">&nbsp;</td>
                            </tr>
                            <tr>
                                <td valign="top" style="padding:12px 10px 4px 0; white-space:nowrap;">Booking Date</td>
                                <td valign="top" align="right" style="padding:12px 0 4px 0; color:#50cd89; font-weight:700;">{{ implode(' - ', $dates) }}</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                {{-- Contact --}}
                <tr>
                    <td align="center" style="padding:0 20px 10px 20px; font-size:13px; color:#A1A5B7; line-height:1.5;">
                        <p style="margin:0 0 9px 0; color:#181C32; font-size:16px; font-weight:600;">It’s all about customers!</p>
                        <p style="margin:0 0 2px 0;">Call our customer care number: <a href="tel:{{ get_phone() }}" style="color:#A1A5B7;">{{ get_phone() }}</a></p>
                        <p style="margin:0 0 4px 0;">You may reach us at
                            <a href="mailto:{{ get_email() }}" rel="noopener" target="_blank" style="font-weight:600; color:#009ef7;">{{ get_email() }}</a>.</p>
                        <p style="margin:0;">We serve Mon-Sun, 9AM-6PM</p>
                    </td>
                </tr>

                {{-- Social --}}
                <tr>
                    <td align="center" style="padding:16px 20px 10px 20px;">
                        <a href="https://www.facebook.com/Villamaliekohsamui" style="text-decoration:none; margin:0 5px;"><img alt="Facebook" src="{{ url('admin/assets/media/email/icon-facebook.png') }}" width="24" height="24" style="width:24px; height:24px; border:0;" /></a>
                        <a href="https://www.youtube.com/@VillaMalieSamui/featured" style="text-decoration:none; margin:0 5px;"><img alt="YouTube" src="{{ url('admin/assets/media/email/youtube-icon.png') }}" width="24" height="24" style="width:24px; height:24px; border:0;" /></a>
                        <a href="https://www.instagram.com/villa_malie_samui/" style="text-decoration:none; margin:0 5px;"><img alt="Instagram" src="{{ url('admin/assets/media/email/ig-icon.png') }}" width="24" height="24" style="width:24px; height:24px; border:0;" /></a>
                    </td>
                </tr>

                {{-- Footer --}}
                <tr>
                    <td align="center" style="padding:0 15px 34px 15px; font-size:13px; color:#A1A5B7;">
                        <p style="margin:10px 0 0 0;">&copy; {{ date('Y') }} Villa Malie Samui. All rights reserved.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
