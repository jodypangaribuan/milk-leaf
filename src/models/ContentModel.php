<?php
require_once __DIR__ . '/../config/database.php';

/**
 * ContentModel Class
 * Handles all database interactions for website content
 */
class ContentModel {
    private $conn;
    private $table = 'content';

    public function __construct() {
        $database = new Database();
        $this->conn = $database->connect();
    }

    /**
     * Get homepage content
     * @return array
     */
    public function getHomeContent() {
        // In a real implementation, this would fetch from the database
        // For now, we'll return hardcoded content that matches the image
        
        return [
            'hero' => [
                'title' => 'MILK LEAF',
                'subtitle' => 'Pilihan Terbaik untuk Kebahagiaan Keluarga Anda.',
                'tagline' => '100% murni susu kambing'
            ],
            'nutrition' => [
                'title' => 'Kandungan Nutrisi Dalam Susu Kambing',
                'items' => [
                    [
                        'image' => 'assets/images/nutrition1.jpg',
                        'description' => 'berperan penting dalam pembentukan hemoglobin, yaitu protein dalam sel darah merah yang mengangkut oksigen ke seluruh tubuh.'
                    ],
                    [
                        'image' => 'assets/images/nutrition2.jpg',
                        'description' => 'berperan membantu pembentukan dan pemeliharaan tulang serta gigi yang kuat, pertumbuhan, dan keseimbangan kalsium.'
                    ],
                    [
                        'image' => 'assets/images/nutrition3.jpg',
                        'description' => 'bermanfaat untuk menjaga kesehatan tulang dan gigi, membantu fungsi otot dan saraf, serta memelihara kadar pH tubuh yang optimal.'
                    ]
                ]
            ],
            'benefits' => [
                'title' => 'Manfaat Susu Kambing',
                'items' => [
                    [
                        'icon' => 'check',
                        'title' => 'Menjaga Kesehatan Tulang dan Gigi',
                        'description' => 'Kaya akan kalsium dan fosfor yang membantu memperkuat tulang dan mencegah osteoporosis.'
                    ],
                    [
                        'icon' => 'drop',
                        'title' => 'Mudah Dicerna',
                        'description' => 'Susu kambing memiliki struktur lemak dan protein yang lebih halus, mengandung rendah laktosa, menjadikannya susu sapi — cocok untuk penderita intoleransi ringan.'
                    ]
                ]
            ],
            'alternative' => [
                'title' => 'Alternatif bagi yang intoleransi Laktosa',
                'description' => 'Susu kambing mengandung partikel-partikel yang lebih ramah bagi mereka yang mengalami intoleransi laktosa ringan. Kandungan kalsium dalam susu kambing lebih serupa dibandingkan susu sapi, dan struktur lemaknya lebih mudah dicerna. Karena globula lemak dalam susu kambing lebih kecil, protein dalam susu kambing memiliki karakteristik yang menjadikannya lebih mudah dicerna tanpa menyebabkan reaksi alergi atau gangguan pencernaan seperti kembung, diare, atau sakit perut.'
            ],
            'comparison' => [
                'title' => 'Perbandingan Susu Kambing dan Susu Sapi',
                'goat' => [
                    'title' => 'Susu Kambing',
                    'points' => [
                        'Mudah dicerna karena ukuran lemak dan protein lebih kecil.',
                        'Jarang sekali menjadi cocok untuk intoleransi ringan.',
                        'Mengandung protein A2, lebih mirip air susu ibu.',
                        'Kaya mineral seperti kalsium, fosfor, dan zat besi.',
                        'Rasa khas dan aroma, cocok bagi yang menyukai cita tradisional.'
                    ]
                ],
                'cow' => [
                    'title' => 'Susu Sapi',
                    'points' => [
                        'Lebih tinggi laktosa, bisa sebabkan gangguan pencernaan.',
                        'Lemak lebih banyak, cocok untuk penambahan sensasi.',
                        'Umumnya mengandung protein A1, bisa pemicu alergi.',
                        'Tinggi nutrisi, baik untuk pertumbuhan dan perkembangan.',
                        'Rasa netral dan familiar, mudah diakulturasi dengan makanan/minuman lain.'
                    ]
                ]
            ],
            'testimonials' => [
                'title' => 'Testimoni Pelanggan',
                'items' => [
                    [
                        'name' => 'Anisa',
                        'rating' => 5,
                        'comment' => 'Susu kambing ini tes...'
                    ],
                    [
                        'name' => 'Budi',
                        'rating' => 5,
                        'comment' => 'Milk leaf...'
                    ],
                    [
                        'name' => 'Siti',
                        'rating' => 5,
                        'comment' => 'Saya suka...'
                    ],
                    [
                        'name' => 'Andi',
                        'rating' => 5,
                        'comment' => 'This leaf milk...'
                    ],
                    [
                        'name' => 'Rina',
                        'rating' => 5,
                        'comment' => 'Suami dan...'
                    ],
                    [
                        'name' => 'Wanto',
                        'rating' => 5,
                        'comment' => 'Milk leaf...'
                    ]
                ]
            ]
        ];
    }
} 