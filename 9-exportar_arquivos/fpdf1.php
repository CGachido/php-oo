<?php
require_once 'vendor/autoload.php';

// instancia a classe FPDF
$pdf = new FPDF('P', 'pt', 'A4');

// define os atributos do PDF
$pdf->SetTitle('Teste PDF 1');
$pdf->SetAuthor('Pablo Dall\'Oglio');
$pdf->SetCreator('PHP' . phpversion());
$pdf->SetKeywords('php, pdf');
$pdf->SetSubject('Como criar um PDF com PHP 1');

// adiciona uma p�gina
$pdf->AddPage();

// define a fonte
$pdf->SetFont('Arial', '', 12);

// marca os quatro cantos da p�gina
$pdf->Text(0, 12, 'X1');
$pdf->Text(576, 12, 'X2');
$pdf->Text(0, 840, 'X3');
$pdf->Text(576, 840, 'X4');

// vinte pontos de espa�amento
$pdf->Ln(20);

// imprie o t�tulo em azul centralizado
$pdf->SetFont('Courier', 'B', 16);
$pdf->SetTextColor(50, 50, 100);
$pdf->SetY(70);
$pdf->SetX(260);
$pdf->Write(30, 'T�tulo'); // n�o desloca o cursor

// vinte pontos de espa�amento
$pdf->Ln(30);

// cria vari�veis de texto com repeti��es
$txt = str_repeat('write ', 30);

$pdf->SetTextColor(100, 50, 50);  // tom de vermelho
$pdf->SetFont('Times', 'B', 14);
// imprime texto usando a fun��o Write
$pdf->Write(20, $txt); // n�o desloca o cursor

// imprime texto ap�s alterar coordenada X
$pdf->Ln(40);
$pdf->SetX(200); // altera a posi��o X
$pdf->SetTextColor(50, 100, 50); // tom de verde
$pdf->Write(20, 'SetX ' . $txt);

// imprime dados com hyperlink
$pdf->Ln(40);
$pdf->SetX(260);
$pdf->SetTextColor(0, 0, 255); // azul
$pdf->Write(20, 'Site Adianti', 'http://www.adianti.com.br');

$pdf->Output('F', 'tmp/fpdf1.pdf');

echo "Arquivo gerado com sucesso.<br>";
echo "<a href='tmp/fpdf1.pdf'>Clique aqui para visualizar</a>.";
