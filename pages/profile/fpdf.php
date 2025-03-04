
<?php
require_once '../lib/dompdf/autoload.inc.php';

use Dompdf\Dompdf;
use Dompdf\Options;
// Instantiate and use the dompdf class 

ob_start();
include '../resume/index.php';
$html = ob_get_clean();

$options = new Options();
$options->setIsPhpEnabled(true);
$dompdf = new Dompdf($options);
define('DOMPDF_ENABLE_PHP', true);

$html = file_get_contents($html);

$dompdf->loadHtml(html_entity_decode($html));

// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'portrait');


$dompdf->render();
ob_end_clean();
$dompdf->stream();

?>