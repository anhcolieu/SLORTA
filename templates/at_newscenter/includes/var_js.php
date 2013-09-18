<?php

JText::script('TPL_ALTEXPAND');
JText::script('TPL_ALTCOLLAPSE');
JText::script('TPL_TEXTEXPANDRIGHTCOL');
JText::script('TPL_TEXTCOLLAPSERIGHTCOL');
JText::script('TPL_OPENMENU');
JText::script('TPL_CLOSEMENU');
?>

<script type="text/javascript">
var dropl = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/dropdown/dropdown_pl.png';
var dropmin = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/dropdown/dropdown_min.png';
var expandcolright='<?php echo JText::_('TPL_TEXTEXPANDRIGHTCOL', true); ?>';
var collapsecolright='<?php echo JText::_('TPL_TEXTCOLLAPSERIGHTCOL', true); ?>';
var altexpand='<?php echo JText::_('TPL_ALTEXPAND', true); ?>';
var altcollapse='<?php echo JText::_('TPL_ALTCOLLAPSE', true); ?>';
</script>
