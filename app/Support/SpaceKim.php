<?php

namespace App\Support;

use Illuminate\Support\Facades\Http;

/**
 * Client for the self-hosted space-kim file service.
 * The API key token is "<keyId>.<secret>"; URLs are signed locally with the secret.
 */
class SpaceKim
{
    public static function upload(string $folder, string $name, $contents): array
    {
        // folder must come before file in the multipart body
        $response = self::client()
            ->attach('folder', $folder)
            ->attach('name', $name)
            ->attach('file', $contents, $name)
            ->post(self::baseUrl().'/api/v1/files');

        if ($response->status() === 409) {
            throw new SpaceKimFileExists($folder.'/'.$name);
        }

        return $response->throw()->json();
    }

    public static function delete(string $path): void
    {
        $response = self::client()->delete(self::baseUrl().'/api/v1/files/'.$path);

        if ($response->status() !== 404) {
            $response->throw();
        }
    }

    public static function url(string $path, int $ttl = 21600): string
    {
        [$keyId, $secret] = explode('.', config('services.space_kim.key'), 2);
        $exp = time() + $ttl;
        $raw = hash_hmac('sha256', $path."\n".$exp, $secret, true);
        $sig = rtrim(strtr(base64_encode($raw), '+/', '-_'), '=');

        return self::baseUrl().'/'.$path.'?kid='.$keyId.'&exp='.$exp.'&sig='.$sig;
    }

    private static function client()
    {
        return Http::withHeaders(['X-Api-Key' => config('services.space_kim.key')])
            ->timeout(120);
    }

    private static function baseUrl(): string
    {
        return rtrim(config('services.space_kim.url'), '/');
    }
}
