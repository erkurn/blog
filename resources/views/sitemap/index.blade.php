{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}

<sitemapindex xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <sitemap>
        <loc>{{ config('app.url') }}/sitemap/posts</loc>
        <lastmod>{{ $post->published_at->tz('UTC')->toAtomString() }}</lastmod>
    </sitemap>
</sitemapindex>
