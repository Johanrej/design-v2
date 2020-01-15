<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "id" => "rm-menu",
    "wrapper" => null,
    "class" => "rm-default rm-mobile",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                    [
                        "text" => "Kmom06",
                        "url" => "redovisning/kmom06",
                        "title" => "Redovisning för kmom06.",
                    ],
                    [
                        "text" => "Kmom10",
                        "url" => "redovisning/kmom10",
                        "title" => "Redovisning för kmom10.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Testsida för hopp och lek!",
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgval",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport för färgval.",
                    ],
                    [
                        "text" => "Laddningstid",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport för laddningstid.",
                    ],
                    [
                        "text" => "Design",
                        "url" => "rapport/designprincip",
                        "title" => "Analys av design.",
                    ],
                    [
                        "text" => "Designelement",
                        "url" => "rapport/designelement",
                        "title" => "Prova designelement.",
                    ],
                    [
                        "text" => "Designprinciper",
                        "url" => "rapport/designprinciper",
                        "title" => "Designprinciper",
                    ],
                    [
                        "text" => "Webbplatsdesign",
                        "url" => "rapport/webbplatsdesign",
                        "title" => "Webbplatsdesign",
                    ],
                    [
                        "text" => "Färganalys",
                        "url" => "rapport/design-och-webbplatser",
                        "title" => "Färganalys",
                    ],
                ],
            ],
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Mitt tredje inlägg.",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Blogg nummer tre.",
                    ],
                    [
                        "text" => "Mitt andra inlägg.",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Blogg nummer två.",
                    ],
                    [
                        "text" => "Mitt första inlägg.",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Blogg nummer ett.",
                    ],
                ],
            ],
        ],
    ],
];
