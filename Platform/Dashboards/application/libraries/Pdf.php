<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once dirname(__FILE__) . '/tcpdf/tcpdf.php';

class PDF extends TCPDF
{

	
	public function Header() {
		$headerData = $this->getHeaderData();
 		$this->writeHTML($headerData['string'].'<hr style="height: 2px;">',true,0,true,0);
	}
	
	// Page footer
	public function Footer() {
		// Position at 15 mm from bottom
		$this->SetY(-15);
		// Set font
		$this->SetFont('arial', '', 8);
		$txt = date("m/d/Y h:m:s");
		$this->writeHTML('<br><hr style="height: 2px;">'.$txt.'&nbsp;&nbsp;&nbsp;&nbsp;Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(),true,0,true,0);
	}
}