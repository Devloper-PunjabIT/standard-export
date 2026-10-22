<?php
require_once __DIR__ . '/config.php';

$selected_category = $selected_category ?? null;
$category_details = [
    'bolts' => [
        'title' => 'Bolts',
        'intro' => 'Explore bolts manufactured and exported by Standard Exports for industrial and structural applications.',
        'image' => 'hex-bolt.jpg',
    ],
    'nuts' => [
        'title' => 'Nuts',
        'intro' => 'Browse nuts from Standard Exports for fastening, assembly, and industrial requirements.',
        'image' => 'hex-nuts.jpg',
    ],
    'washers' => [
        'title' => 'Washers',
        'intro' => 'Explore flat, square, tapered, spring, and toothed washers in the Standard Exports range.',
        'image' => 'washers.jpg',
    ],
    'cast-forged' => [
        'title' => 'Cast & Forged Items',
        'intro' => 'Discover cast and forged components included in the Standard Exports industrial product range.',
        'image' => 'Forged Parts.webp',
    ],
];

if ($selected_category === null) {
    header('Location: ' . SITE_URL . '/', true, 301);
    exit;
}

if (!isset($category_details[$selected_category])) {
    http_response_code(404);
    exit('Product category not found.');
}

$page_title = $category_details[$selected_category]['title'] . ' - Standard Exports';
$current_page = 'products';
include 'includes/header.php';

// Bolts Products
$boltsproducts = [
    [
        'name' => 'Hex Bolts',
        'image' => 'assets/images/products/hex-bolt.webp',
        'description' => 'High-strength hexagonal head bolts for heavy-duty industrial applications.'
    ],
    [
        'name' => 'Allen Bolts',
        'image' => 'assets/images/products/allen-bolt.png',
        'description' => 'Socket head cap screws for high-torque applications and flush finishes.'
    ],
    [
        'name' => 'Carriage Bolt',
        'image' => 'assets/images/products/carriage bolt.jpg',
        'description' => 'Carriage bolts are commonly used in woodworking and general construction applications.'
    ],
    [
        'name' => 'Clinch Bolt',
        'image' => 'assets/images/products/clinch-bolt.webp',
        'description' => 'Self-clinching bolts for permanent installation in thin sheet metal assemblies.'
    ],
    [
        'name' => 'L Bolts',
        'image' => 'assets/images/products/l-bolts.jpg',
        'description' => 'L-shaped anchor bolts for securing equipment foundations and steel structures.'
    ],
    [
        'name' => 'J Bolts',
        'image' => 'assets/images/products/j-bolt.png',
        'description' => 'J-shaped anchor bolts for concrete embedment and structural foundation work.'
    ],
    [
        'name' => 'Eye Bolts',
        'image' => 'assets/images/products/i-bolt.jpg',
        'description' => 'Eye bolts with closed ring design for lifting and rigging applications.'
    ],
    [
        'name' => 'U Bolts',
        'image' => 'assets/images/products/u-bolt.png',
        'description' => 'U-shaped bolts for securing pipes and tubes to walls and mounting surfaces.'
    ],
    // [
    //     'name' => 'L Hook Bolt',
    //     'image' => 'assets/images/products/l-hook-bolt.png',
    //     'description' => 'Hook-shaped bolts ideal for hanging and suspension applications in construction.'
    // ],
    // [
    //     'name' => 'Pin Type Anchor Bolt',
    //     'image' => 'assets/images/products/Pin Type Anchor Bolt.jpg',
    //     'description' => 'Specialized anchor bolts with pin design for secure concrete embedment work.'
    // ],
    // [
    //     'name' => 'Pipe Hook Bolt',
    //     'image' => 'assets/images/products/pipe-hook-bolt.jpg',
    //     'description' => 'Hook bolts designed specifically for hanging and securing pipes in plumbing systems.'
    // ],

    // [
    //     'name' => 'CSK Screws',
    //     'image' => 'assets/images/products/csk-screw.png',
    //     'description' => 'Countersunk screws for flush finishes and smooth surfaces.'
    // ],
    // [
    //     'name' => 'Quadrex Head Screws',
    //     'image' => 'assets/images/products/quad-screw.jpg',
    //     'description' => 'High-strength screws with quadrex heads for demanding applications.'
    // ],

];

// Nuts Products
$nutsproducts = [
    [
        'name' => 'Hex Nuts',
        'image' => 'assets/images/products/hex-nuts.jpg',
        'description' => 'Standard hexagonal nuts in multiple grades for reliable bolt fastening.'
    ],
    [
        'name' => 'Coupling Nuts',
        'image' => 'assets/images/products/coupling-nut.png',
        'description' => 'Elongated nuts for connecting two threaded rods or extending bolt length.'
    ],
    [
        'name' => 'Square Nuts',
        'image' => 'assets/images/products/square-nuts.jpg',
        'description' => 'Square nuts with four sides for increased surface contact and torque resistance.'
    ],
    [
        'name' => 'Flange Nuts',
        'image' => 'assets/images/products/flange-nuts.jpg',
        'description' => 'Flange nuts with a built-in flange for increased surface contact and improved load distribution.'
    ],
    [
        'name' => 'DOM Nuts',
        'image' => 'assets/images/products/dom-nuts.jpg',
        'description' => 'High-precision DOM nuts with superior strength for critical applications.'
    ],
    [
        'name' => 'Clinch Nuts',
        'image' => 'assets/images/products/Clinch-Nuts.jpg',
        'description' => 'Self-clinching nuts providing strong permanent threads in thin sheet metal.'
    ],
    [
        'name' => 'Nylock Nuts',
        'image' => 'assets/images/products/Nylock-Nuts.png',
        'description' => 'Self-locking nuts with nylon insert preventing loosening from vibration.'
    ],
    [
        'name' => 'Round Nuts',
        'image' => 'assets/images/products/round-nuts.jpg',
        'description' => 'Round nuts with smooth exterior for aesthetic applications and easy handling.'
    ],


    // [
    //     'name' => 'Square Weld Nut',
    //     'image' => 'assets/images/products/Square Weld Nut.jpg',
    //     'description' => 'Square weld nuts designed for high-stress applications requiring superior strength and durability.'
    // ],




    // [
    //     'name' => 'Lock Nuts',
    //     'image' => 'assets/images/products/lock-nut.jpg',
    //     'description' => 'Locking nuts designed to resist loosening under vibration and torque loads.'
    // ],
    // [
    //     'name' => 'Sprinkler Nuts',
    //     'image' => 'assets/images/products/sparkling.png',
    //     'description' => 'Specialized nuts for fire sprinkler systems with quick-connect functionality.'
    // ],
    // [
    //     'name' => 'Dual Nuts',
    //     'image' => 'assets/images/products/dual-nut.png',
    //     'description' => 'Paired nuts for threaded assemblies, helping secure connections against loosening under vibration.'
    // ],
    // [
    //     'name' => 'Slide Nuts',
    //     'image' => 'assets/images/products/slide-nut.png',
    //     'description' => 'Slide into compatible channels to provide adjustable threaded mounting points for securing components.'
    // ],
    // [
    //     'name' => 'Spring Nuts',
    //     'image' => 'assets/images/products/spring-nut.jpeg',
    //     'description' => 'Spring-loaded nuts that maintain tension and prevent loosening in dynamic applications.'
    // ],
    // [
    //     'name' => 'Channel Nuts',
    //     'image' => 'assets/images/products/channel-nuts.png',
    //     'description' => 'Spring-loaded nuts that maintain tension and prevent loosening in dynamic applications.'
    // ],

];

// Washers Products
$washersproducts = [
    [
        'name' => 'Plain Washers',
        'image' => 'assets/images/products/washer.png',
        'description' => 'Standard flat washers for distributing load and preventing surface damage.'
    ],
    [
        'name' => 'Square Washers',
        'image' => 'assets/images/products/square-washer.png',
        'description' => 'Square-shaped washers for increased surface contact and load distribution.'
    ],
    [
        'name' => 'Spring Washers',
        'image' => 'assets/images/products/spring-washer.png',
        'description' => 'Split ring spring washers providing tension to prevent fastener loosening.'
    ],
    [
        'name' => 'Taper Washers',
        'image' => 'assets/images/products/taper-washer.jpg',
        'description' => 'Wedge-shaped washers for compensating angles on I-beams and channel steel.'
    ],
    // [
    //     'name' => 'Star Washers (External Teeth)',
    //     'image' => 'assets/images/products/star-washter-e.webp',
    //     'description' => 'External tooth star washers for locking fasteners and preventing loosening under vibration.'
    // ],
    // [
    //     'name' => 'Star Washers (Internal Teeth)',
    //     'image' => 'assets/images/products/star-washer-i.png',
    //     'description' => 'Internal tooth star washers for locking fasteners and preventing loosening under vibration.'
    // ],
];

// Cast and forged items
$castForgedProducts = [
    [
        'name' => 'Gate Roller Bracket',
        'image' => 'assets/images/products/Gate Roller Bracket.png',
        'description' => 'Gate roller brackets for sliding gate systems, included in the cast and forged items range.'
    ],
    [
        'name' => 'Gear Casting',
        'image' => 'assets/images/products/gear-casting.png',
        'description' => 'Gear castings for industrial machinery, included in the cast and forged items range.'
    ]

];
?>

<!-- Page Header -->
<section class="page-header">
    <div class="container-fluid">
        <nav class="page-breadcrumb" aria-label="Breadcrumb">
            <a href="<?php echo SITE_URL; ?>/">Home</a>
            <i class="fas fa-chevron-right" aria-hidden="true"></i>
            <span
                aria-current="page"><?php echo htmlspecialchars($category_details[$selected_category]['title']); ?></span>
        </nav>
    </div>
</section>

<?php
$all_product_groups = [
    'bolts' => $boltsproducts,
    'nuts' => $nutsproducts,
    'washers' => $washersproducts,
    'cast-forged' => $castForgedProducts,
];
$product_groups = [$selected_category => $all_product_groups[$selected_category]];
?>

<?php foreach ($product_groups as $category_key => $products): ?>
    <section id="<?php echo htmlspecialchars($category_key); ?>" class="products-section">
        <div class="container-fluid">
            <div class="contact-intro product-intro">
                <h1><?php echo htmlspecialchars($category_details[$selected_category]['title']); ?></h1>
                <p><?php echo htmlspecialchars($category_details[$selected_category]['intro']); ?> Products are available in
                    Mild Steel, EN-Series, CI, SGI, and stainless steel.</p>
            </div>
            <div class="products-grid">
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="<?php echo SITE_URL; ?>/<?php echo $product['image']; ?>"
                                alt="<?php echo htmlspecialchars($product['name']); ?>">
                        </div>
                        <div class="product-content">
                            <h3 class="product-name"><?php echo htmlspecialchars($product['name']); ?></h3>
                            <p class="product-description"><?php echo htmlspecialchars($product['description']); ?></p>
                            <div class="product-actions">
                                <a href="https://wa.me/<?php echo WHATSAPP_PHONE; ?>?text=Hi%20Standard%20Exports%2C%20I%27m%20interested%20in%20<?php echo urlencode($product['name']); ?>."
                                    class="btn btn-primary btn-sm" target="_blank" rel="noopener">
                                    <i class="fab fa-whatsapp"></i> Enquire Now
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endforeach; ?>

<?php include 'includes/footer.php'; ?>