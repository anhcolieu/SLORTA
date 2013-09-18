<?php


// no direct access
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');

class JFormFieldAsset extends JFormField {

    protected $type = 'Asset';

    protected function getInput() {
		JHTML::_('behavior.framework');	
		$document	= &JFactory::getDocument();		
		if (!version_compare(JVERSION, '3.0', 'ge')) {
			$checkJqueryLoaded = false;
			$header = $document->getHeadData();
			foreach($header['scripts'] as $scriptName => $scriptData)
			{
				if(substr_count($scriptName,'/jquery')){
					$checkJqueryLoaded = true;
				}
			}
				
			//Add js
			if(!$checkJqueryLoaded) 
			$document->addScript(JURI::root().$this->element['path'].'js/jquery.min.js');
			$document->addScript(JURI::root().$this->element['path'].'js/chosen.jquery.min.js');		
			$document->addScript(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.js');
			$document->addScript(JURI::root().$this->element['path'].'js/pl.js');

			//Add css         
			$document->addStyleSheet(JURI::root().$this->element['path'].'css/pl.css');
			$document->addStyleSheet(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.css');        
			$document->addStyleSheet(JURI::root().$this->element['path'].'css/chosen.css');        
			$document->addStyleDeclaration('.switcher-yes,.switcher-no{background-image:url('.JURI::root().JText::_('YESNO_IMAGE').')}');
		
		}else{
			$document->addScript(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.js');
			$document->addScript(JURI::root().$this->element['path'].'js/pl.js');
			//Add css         
			$document->addStyleSheet(JURI::root().$this->element['path'].'css/pl.css');
			$document->addStyleSheet(JURI::root().$this->element['path'].'js/colorpicker/colorpicker.css'); 
		
		}
        
        return null;
    }
}
?>