<?php $__env->startSection('content'); ?>
<?php
use app\PDF;
$pdf = \PDF::loadView('panel.ejemplo', compact('repair2'));
$pdf->stream($repair->id.'.pdf');
// Cargamos el contenido HTML.
$pdf->load_html(utf8_decode($html));
 
// Renderizamos el documento PDF.
$pdf->render();
echo $pdf;
?>

	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('panel.layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>