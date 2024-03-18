<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"],
                ]
            ],
            [
                "nama" => "Kuliner",
                "subMenu" => [
    
                ]
            ],
            [
                "nama" => "Hiburan",
                "subMenu" => [
                    
                ]
            ],
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

    function tampilkanMenuBertingkat (array $menu){
        echo "<ul>";
        foreach ($menu as $key => $item){
            echo "<li>{$item['nama']}";
            if (isset($item['subMenu'])) {
                tampilkanMenuBertingkat($item['subMenu']);
            }
            echo "</li>";
        }
        echo "</ul>";
    }
    tampilkanMenuBertingkat($menu);
?>