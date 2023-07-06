<?php
require __DIR__ . '/vendor/autoload.php';
use Automattic\WooCommerce\Client;

// Connection Destination for WooCommerce API
// This API requires read and write privileges.
// This is the Ecommerce API for Etraining
// ================================
$url_API_woo = 'https://e-commerce.davebarbosa.click/';
$ck_API_woo = 'ck_9cd0b29862f5507fca674d2ffee41e1df7125771';
$cs_API_woo = 'cs_3490851fdb3d4d088a21ecfd189953febf216d56';

$woocommerce = new Client(
    $url_API_woo,
    $ck_API_woo,
    $cs_API_woo,
    ['version' => 'wc/v3']
);
// ================================


// DATA EXTERNAL 
// API connection external
// ===================
$url_API="https://api.unsplash.com/photos/random?count=' + resultsPerPage + '&client_id=YqKE7-WAlZTH4EBiafdCxqRPpLGB6Sz9hCztDcgmAv4";

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL,$url_API);

echo "➜ Obteniendo datos origen ... \n";
$items_origin = curl_exec($ch);
curl_close($ch);

if ( ! $items_origin ) {
    exit('❗Error en API origen');
}
// ===================


// Get data from the source API
$items_origin = json_decode($items_origin, true);

// Generate list of SKUs for update
$param_sku ='';
foreach ($items_origin as $item){
    $param_sku .= $item['sku'] . ',';
}

echo "➜ Obteniendo los ids de los productos... \n";
// Get all products from SKUs list
$products = $woocommerce->get('products/?sku='. $param_sku);

// Build data based on recovered products
$item_data = [];
foreach($products as $product){

    // Filter the source array by sku
    $sku = $product->sku;
    $search_item = array_filter($items_origin, function($item) use($sku) {
        return $item['sku'] == $sku;
    });
    $search_item = reset($search_item);

    // Create the array to be updated
    $item_data[] = [
        'id' => $product->id,
        'regular_price' => $search_item['price'],
        'stock_quantity' => $search_item['qty'],
    ];

}

// Build information to be updated in batches
$data = [
    'update' => $item_data,
];

echo "➜ Actualización en lote ... \n";
// Update in batch mode
$result = $woocommerce->post('products/batch', $data);

if (! $result) {
    echo("❗Error al actualizar productos \n");
} else {
    print("✔ Productos actualizados correctamente \n");
}