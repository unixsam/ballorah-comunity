<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('common', 'url', 'html','form','security'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
		$this->load->library('Pdf');
	}

	public function index(){
		$data = array();
		$this->load->view('sample_view', $data);
	}
	public function diff(){
		echo 'Diff done<pre>';
		echo shell_exec('cat ~/aa.txt');
		echo "done";
	}
	public function login(){
		get_login_key();
	}
	public function pdf(){
 		$this->load->library('Pdf', 'tcpdf');

		
 		// create new PDF document
 		$pdf = new PDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		
 		
		// set document information
		$pdf->SetCreator("WorkPro");
		$pdf->SetAuthor('Sami Elkady');
		$pdf->SetTitle('Sample PDF File');
		$pdf->SetSubject('00001');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
		
		// set default header data
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, 0, '', '', array(0,3,200), array(255,255,255));
		// set default header data
		
		
		
		$html = '<table cellspacing="2" cellpadding="2" border="0" width="190mm">
					<tr>
						<td rowspan="4" width="65mm"><img src="'. K_PATH_IMAGES.'logo.jpg'.'" /></td>
						<td ><h2 style="text-align: center" width="125mm">company name</h2></td>
						<td rowspan="3" width="50mm"></td>
						
					</tr>
					<tr>
						<td style="text-align: center">Functions</td>
					</tr>
					<tr>
						<td style="text-align: center">Address</td>
					</tr>
					<tr>
						<td style="text-align: center">Options</td>
						<td style="text-align: right; color:#8B0000; font-size: 16px">88888</td>
					</tr>
				</table>';
		$pdf->setHeaderData('', PDF_HEADER_LOGO_WIDTH, '170', $html, array(0,0,0), array(0,0,0));
		//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		
		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		
		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		
		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		
		// set some language-dependent strings (optional)
		if (@file_exists(APPPATH.'libraries/tcpdf/lang/eng.php')) {
			require_once(APPPATH.'libraries/tcpdf/lang/eng.php');
			$pdf->setLanguageArray($l);
		}
		
		
		// set font
		$pdf->SetFont('helvetica', '', 11);
		
		// add a page
		$pdf->AddPage();
		// print a message
		
		$style = array(
				'position' => '',
				'align' => 'C',
				'stretch' => false,
				'fitwidth' => true,
				'cellfitalign' => '',
				'border' => false,
				'hpadding' => 'auto',
				'vpadding' => 'auto',
				'fgcolor' => array(0,0,0),
				'bgcolor' => false, //array(255,255,255),
				'text' => true,
				'font' => 'helvetica',
				'fontsize' => 7,
				'stretchtext' => 4
		);
		
		$style = array(
				'border' => 0,
				'vpadding' => 'auto',
				'hpadding' => 'auto',
				'fgcolor' => array(0,0,0),
				'bgcolor' => false, //array(255,255,255)
				'module_width' => 1, // width of a single module in points
				'module_height' => 1 // height of a single module in points
		);
		
		$QR='http://localhost/workpro/sample/login?s4w8ksw8o8kko44ssscw0wgo04kg4sooccws4448';
		// QRCODE,L : QR-CODE Low error correction
		$qr = $pdf->write2DBarcode($QR, 'QRCODE,L', 175, 9, 20, 20, $style, 'N');

		
		
		$pdf->SetFont('helvetica', 'B', 20);
		$txt = '<br><h1 style="text-align: center">Estimation</h1>';
		$pdf->writeHTML($txt, true, false, false, false, '');
		$pdf->SetFont('aealarabiya', '', 30);
		$txt = '<h1 style="text-align: center">مقايسة</h1>';
		$pdf->writeHTML($txt, true, false, false, false, '');
		
		$pdf->SetFont('dejavusans', '', 10);
		
		$tbl = <<<EOD
		<br><br>
				
				
<table cellspacing="0" cellpadding="2" border="0">
	<tr style="">
        <th style="font-weight: bold;" width="70">Name</th>
		<th style="font-weight: bold;" width="10">:</th>
        <th style="" width="240">Cust Name</th>
        <th style="text-align: right;" width="240">Fuck</th>
		<th style="font-weight: bold;" width="10">:</th>
		<th style="text-align: right;font-weight: bold;" width="75">الاسم</th>
    </tr>
    <tr style="">
        <th style="font-weight: bold;">Plate No:</th>
		<th style="font-weight: bold;" width="10">:</th>
        <th style="">Name</th>
        <th style="text-align: right;">Fuck</th>
		<th style="font-weight: bold;" width="10">:</th>
		<th style="text-align: right;font-weight: bold;">رقم اللوحة</th>
    </tr>
	<tr style="">
        <th style="font-weight: bold;">Model:</th>
		<th style="font-weight: bold;" width="10">:</th>
        <th style="">Name</th>
        <th style="text-align: right;">Fuck</th>
		<th style="font-weight: bold;" width="10">:</th>
		<th style="text-align: right;font-weight: bold;">نوع السيارة</th>
    </tr>
		
</table>
			<br><br>	
				
<table cellspacing="0" cellpadding="2" border="0">
	<tr style="font-weight: bold;">
        <th style="border-top: 2px solid black;border-bottom: 2px solid black;">NO</th>
        <th style="border-top: 2px solid black;border-bottom: 2px solid black;">Name</th>
        <th style="border-top: 2px solid black;border-bottom: 2px solid black;">Fuck</th>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid #d9d9d9;">COL 1 - ROW 1<br />COLSPAN 3<br />text line<br />text line<br />text line<br />text line<br />text line<br />text line</td>
        <td style="border-bottom: 1px solid #d9d9d9;">COL 2 - ROW 1</td>
        <td style="border-bottom: 1px solid #d9d9d9;">COL 3 - ROW 1</td>
    </tr>
    <tr>
        <td colspan="2" style="border-bottom: 1px solid #d9d9d9;">COL 2 - ROW 2 - COLSPAN 2<br />text line<br />text line<br />text line<br />text line</td>
         <td style="border-bottom: 1px solid #d9d9d9;">COL 3 - ROW 2</td>
    </tr>
    <tr>
       <td style="border-bottom: 1px solid #d9d9d9;" colspan="3">COL 3 - ROW 3 COL 3 - ROW 3 COL 3 - ROW 3 COL 3 - ROW 3 COL 3 - ROW 3 COL 3 - ROW 3 COL 3 - ROW 3 </td>
    </tr>
		
</table>
EOD;
		
		$pdf->writeHTML($tbl, true, false, false, false, '');
		
		$txt = "Text You can also export 2D barcodes in other formats (PNG, SVG, HTML). Check the examples inside the barcode directory.\n";
		$pdf->MultiCell(60, 10, $txt, "B", 'C', false, 1, 125, 190, true, 0, false, true, 0, 'T', false);
		
		
		$pdf->SetFont('ae_AlHor', 'B', 11);
		$txt="نص يمكنك أيضا تصدير الباركود 2D في أشكال أخرى (PNG، SVG، HTML). تحقق الأمثلة داخل الدليل الباركود. ";
		$pdf->MultiCell(60, 10, $txt, "B", 'C', false, 1, 50, 190, true, 0, false, true, 0, 'T', false);
		
		
		//Close and output PDF document
		$pdf->Output('example_050.pdf', 'I');
		
		//============================================================+
		// END OF FILE
		//============================================================+
	}
	
	
	function pdf2(){
		//============================================================+
		// File name   : example_001.php
		//
		// Description : Example 001 for TCPDF class
		//               Default Header and Footer
		//
		// Author: Muhammad Saqlain Arif
		//
		// (c) Copyright:
		//               Muhammad Saqlain Arif
		//               PHP Latest Tutorials
		//               http://www.phplatesttutorials.com/
		//               saqlain.sial@gmail.com
		//============================================================+
		
		 
		
		// create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		
		// set document information
		$pdf->SetCreator(PDF_CREATOR);
		$pdf->SetAuthor('Muhammad Saqlain Arif');
		$pdf->SetTitle('TCPDF Example 001');
		$pdf->SetSubject('TCPDF Tutorial');
		$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
		
		// set default header data
		$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
		$pdf->setFooterData(array(0,64,0), array(0,64,128));
		
		// set header and footer fonts
		$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
		
		// set default monospaced font
		$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
		
		// set margins
		$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		
		// set auto page breaks
		$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
		
		// set image scale factor
		$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		
		// set some language-dependent strings (optional)
		if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
			require_once(dirname(__FILE__).'/lang/eng.php');
			$pdf->setLanguageArray($l);
		}
		
		// ---------------------------------------------------------
		
		// set default font subsetting mode
		$pdf->setFontSubsetting(true);
		
		// Set font
		// dejavusans is a UTF-8 Unicode font, if you only need to
		// print standard ASCII chars, you can use core fonts like
		// helvetica or times to reduce file size.
		$pdf->SetFont('dejavusans', '', 12, '', true);
		
		// Add a page
		// This method has several options, check the source code documentation for more information.
		$pdf->AddPage();
		
		// set text shadow effect
		$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
		
		// Set some content to print
		$html = <<<EOD
    <h1>Welcome to <a href="http://www.tcpdf.org" style="text-decoration:none;background-color:#CC0000;color:black;">&nbsp;<span style="color:black;">TC</span><span style="color:white;">PDF</span>&nbsp;</a>!</h1>
    <i>This is the first example of TCPDF library.</i>
    <p>This text is printed using the <i>writeHTMLCell()</i> method but you can also use: <i>Multicell(), writeHTML(), Write(), Cell() and Text()</i>.</p>
    <p>Please check the source code documentation and other examples for further information.</p>
   
EOD;
		
		// Print text using writeHTMLCell()
		$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
		
		// ---------------------------------------------------------
		
		// Close and output PDF document
		// This method has several options, check the source code documentation for more information.
		$pdf->Output('example_001.pdf', 'I');
		
		//============================================================+
		// END OF FILE
		//============================================================+
	}
}
