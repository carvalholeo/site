<?php
/**
 * @see https://github.com/artesaos/seotools
 */
$seoTitle = 'Léo Carvalho - Desenvolvedor PHP/C#';
$seoDescription = 'Léo Carvalho é desenvolvedor PHP/C#, com experiência acadêmica e em freelas. Acredita que a empatia é o maior exerício de relacionamento interpessoal.';
$seoCanonical = null;

$seoPinterest = '0d6d3731c70b9bdcdde4e31b18925f9b';
$url = getenv('APP_URL');
$images = [$url.'/storage/images/perfil.jpg'];

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => $seoTitle, // set false to total remove
            'titleBefore'  => true, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => $seoDescription, // set false to total remove
            'separator'    => ' - ',
            'keywords'     => [
                'desenvolvedor', 'léo carvalho', 'dev c#', 'dev php',
                'php', 'c#', '.net', 'javascript', 'js', 'web',
                'desktop', 'desenvolvedor full stack', 'full stack developer',
                'coder', '.net core', '.net framework', 'laravel', 'vue.js',
                'bootstrap', 'css', 'git', 'github'
            ],
            'canonical'    => $seoCanonical, // Set null for using Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => $seoPinterest,
            'yandex'    => null,
            'p:domain_verify' => $seoPinterest
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => $seoTitle, // set false to total remove
            'description' => $seoDescription, // set false to total remove
            'url'         => $seoCanonical, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => $images,
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'site'        => '@_carvalho_leo',
            'title'       => $seoTitle,
            'description' => $seoDescription,
            'image'       => $images[0],
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => $seoTitle, // set false to total remove
            'description' => $seoDescription, // set false to total remove
            'url'         => $seoCanonical, // Set null for using Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => $images,
            'sameAs'      => [
                'https://twitter.com/_carvalho_leo',
                'https://instagram.com/carvalho_leo',
                'https://pinterest.com/carvalho_leo',
                'https://github.com/carvalholeo',
                'https://linkedin.com/in/carvalholeo'
            ]
        ],
    ],
];
