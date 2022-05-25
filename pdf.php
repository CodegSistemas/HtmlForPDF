<?php 
// NAO COLOCAR NADA ACIMA
namespace Mpdf; //mpf importado
require_once __DIR__ . '/mpdf60/vendor/autoload.php';
// NAO COLOCAR NADA ACIMA


$header = '

';

$html = '
<html>
<body>

</body>
</html>
';

$mpdf = new \Mpdf\Mpdf();
$mpdf->SetHeader($header); // HEADER DO PDF
$mpdf->SetFooter($header); // FOOTER DO PDF
$mpdf->SetWatermarkImage('agua.png','0.1'); // MARCA D'AGUA / TRANSPARENCIA
$mpdf->showWatermarkImage = true;
$stylesheet = file_get_contents('style.css'); // ARQUIVO CSS
$mpdf->WriteHTML($stylesheet,1); // APLICA CSS
$mpdf->WriteHTML($html,2); // CONVERTE O HTML
$mpdf->Output(); // MOSTRA O RESULTADO
$mpdf->Output("arquivo.pdf", \Mpdf\Output\Destination::FILE); // SALVA O PDF

?>