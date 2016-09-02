#!/usr/bin/env php
<?php

// installed via composer?

use Bitban\PoC\SiteArticle;

if (file_exists($a = __DIR__ . '/../../autoload.php')) {
    require_once $a;
} else {
    require_once __DIR__ . '/vendor/autoload.php';
}

set_time_limit(0);

$data = [
    'id' => 'ARTICLE_ID',
    'pubDate' => 'ARTICLE_PUBDATE',
    'permalink' => 'ARTICLE_PERMALINK',
    'summary' => 'ARTICLE_SUMMARY',
    'body' => 'ARTICLE_BODY',
    'site' => 'ARTICLE_SITE',
    'subtitle' => 'ARTICLE_SUBTITLE'
];

$article = new SiteArticle($data);

echo 'id = ' . $article->getId() . "\n";
echo 'pubDate = ' . $article->getPubDateTS() . "\n";
echo 'permalink = ' . $article->getPermalink() . "\n";
echo 'summary = ' . $article->getSummary() . "\n";
echo 'body = ' . $article->getBody() . "\n";
echo 'site = ' . $article->getSite() . "\n";
echo 'subtitle = ' . $article->getSubtitle() . "\n";
