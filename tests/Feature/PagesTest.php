<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class PagesTest extends TestCase
{
    public static function pages(): array
    {
        $pages = ['/', '/team', '/philosophie', '/kontakt'];

        foreach (['listing' => '/projekte/', 'detail' => '/projekt/'] as $dir => $prefix) {
            foreach (glob(dirname(__DIR__, 2)."/resources/views/web/pages/partials/projects/{$dir}/*.blade.php") as $file) {
                $pages[] = $prefix.rawurlencode(basename($file, '.blade.php'));
            }
        }

        return array_combine($pages, array_map(fn ($page) => [$page], $pages));
    }

    #[DataProvider('pages')]
    public function test_page_returns_ok(string $uri): void
    {
        $this->get($uri)->assertOk();
    }

    public function test_home_redirects_to_root(): void
    {
        $this->get('/home')->assertStatus(301)->assertRedirect('/');
    }
}
