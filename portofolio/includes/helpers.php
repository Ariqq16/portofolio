<?php
declare(strict_types=1);

const BASE_PATH = __DIR__ . '/..';

function config(): array
{
    static $cfg = null;
    return $cfg ??= require BASE_PATH . '/config.php';
}

function profile(): array
{
    static $data = null;
    return $data ??= require BASE_PATH . '/data/profile.php';
}

/** Escape untuk output HTML. */
function e(?string $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** URL aset dengan cache-busting berdasarkan waktu ubah file. */
function asset(string $path): string
{
    $file = BASE_PATH . '/' . ltrim($path, '/');
    $v = is_file($file) ? (string) filemtime($file) : '0';
    return e($path . '?v=' . $v);
}

/** Escape lalu bedakan huruf I kapital pada nama "BicaraIsyarat" dari l kecil. */
function brand(?string $value): string
{
    return str_replace('BicaraIsyarat', 'Bicara<span class="ci">I</span>syarat', e($value));
}

/** Ubah {{kata}} pada ringkasan menjadi <mark>kata</mark>, sisanya tetap di-escape. */
function marked(string $text): string
{
    $safe = e($text);
    return (string) preg_replace('/\{\{(.+?)\}\}/u', '<mark>$1</mark>', $safe);
}

function security_headers(): void
{
    header('X-Content-Type-Options: nosniff');
    header('X-Frame-Options: DENY');
    header('Referrer-Policy: strict-origin-when-cross-origin');
    header('Permissions-Policy: camera=(), microphone=(), geolocation=()');
    header(
        "Content-Security-Policy: default-src 'self'; "
        . "style-src 'self' https://fonts.googleapis.com; "
        . "font-src https://fonts.gstatic.com; "
        . "img-src 'self' data:; script-src 'self'; "
        . "connect-src 'self'; form-action 'self'; base-uri 'self'; frame-ancestors 'none'"
    );
}

