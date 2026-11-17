<?php
declare(strict_types=1);

/**
 * API baca-saja untuk data portofolio.
 *
 *   GET api.php                      daftar resource
 *   GET api.php?resource=profile     profil singkat
 *   GET api.php?resource=skills
 *   GET api.php?resource=experience
 *   GET api.php?resource=projects
 *   GET api.php?resource=education
 *   tambahkan &pretty=1 untuk JSON yang diformat
 */

require __DIR__ . '/includes/helpers.php';

date_default_timezone_set(config()['timezone']);

function respond(int $status, array $body, bool $pretty, array $extraHeaders = []): never
{
    http_response_code($status);
    header('Content-Type: application/json; charset=utf-8');
    header('X-Content-Type-Options: nosniff');
    header('Cache-Control: ' . ($status === 200 ? 'public, max-age=300' : 'no-store'));
    foreach ($extraHeaders as $h) {
        header($h);
    }
    $flags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | ($pretty ? JSON_PRETTY_PRINT : 0);
    echo json_encode($body, $flags), "\n";
    exit;
}

$pretty = isset($_GET['pretty']) && $_GET['pretty'] === '1';
$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';

if (!in_array($method, ['GET', 'HEAD'], true)) {
    respond(405, ['error' => ['status' => 405, 'message' => 'Method not allowed. Gunakan GET.']], $pretty, ['Allow: GET, HEAD']);
}

$p = profile();

$resources = [
    'profile' => static fn(): array => [
        'name'     => $p['person']['name'],
        'role'     => $p['person']['role'],
        'location' => $p['person']['location'],
        'email'    => $p['person']['email'],
        'summary'  => preg_replace('/\{\{(.+?)\}\}/u', '$1', $p['summary']),
    ],
    'skills' => static function () use ($p): array {
        $out = [];
        foreach ($p['skills'] as $group) {
            $out[$group['table']] = $group['items'];
        }
        return $out;
    },
    'experience' => static fn(): array => array_map(
        static fn(array $x): array => [
            'role'    => $x['role'],
            'context' => $x['context'],
            'period'  => $x['period'],
            'current' => $x['current'],
        ],
        $p['experience']
    ),
    'projects' => static fn(): array => array_map(
        static fn(array $x): array => [
            'slug'   => $x['slug'],
            'title'  => $x['title'],
            'role'   => $x['role'],
            'period' => $x['period'],
            'stack'  => $x['stack'],
        ],
        $p['projects']
    ),
    'education' => static fn(): array => $p['education'],
];

$name = $_GET['resource'] ?? null;

if ($name === null) {
    respond(200, [
        'data' => array_map(
            static fn(string $r): string => 'api.php?resource=' . $r,
            array_combine(array_keys($resources), array_keys($resources))
        ),
    ], $pretty);
}

if (!is_string($name) || !isset($resources[$name])) {
    respond(404, ['error' => [
        'status'    => 404,
        'message'   => 'Resource tidak ditemukan.',
        'available' => array_keys($resources),
    ]], $pretty);
}

respond(200, [
    'data' => $resources[$name](),
    'meta' => ['resource' => $name, 'generated_at' => date('c')],
], $pretty);
