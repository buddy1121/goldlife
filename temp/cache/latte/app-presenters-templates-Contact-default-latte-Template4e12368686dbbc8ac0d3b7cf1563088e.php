<?php
// source: D:\weblocal\goldlife\app\presenters/templates/Contact/default.latte

class Template4e12368686dbbc8ac0d3b7cf1563088e extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('67b1efede7', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbb0ce5c91d2_content')) { function _lbb0ce5c91d2_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="container jumbotron">
        <div id="center">
            <h1 class="h1 text-center">Contact</h1>

            <h3 class="h3 text-center">GoldLife Services s.r.o.</h3>

            <p><strong>Residence</strong><strong>:</strong></p>

            <p align="justify">N&aacute;ves 9, &Uacute;holičky, <br> okres Praha-z&aacute;pad, <br> PSČ 252 64</p>

            <p align="justify"><strong>Postal address:</strong></p>

            <p align="justify">Korunn&iacute; 64, Praha 2, <br> PSČ 120 00</p>

            <p><strong>IC:</strong> 288 91 155</p>

            <italic>Registered in the Trade Register of the Municipal Court in Prague, part C, file No.: <span>151393</span>.</italic><br>

            <p><strong>Bank Account:</strong></p>

            <p>2121109319/0800</p>

            <p>&nbsp;</p>

            <p><strong>Infoline:</strong> +420 721 558 776</p>

            <p><strong>Email:</strong> info@goldlife.cz</p>

            <p>&nbsp;</p>
            
                <strong>Renata Schmit Ljunggren </strong>
            
            <p>tel.: +420 724 020 613</p>

            <p><a href="mailto:renata@goldlife.cz">renata@goldlife.cz</a></p>
            
                <strong>Lucie Vimrov&aacute;</strong>
            
            <p>tel.: +420 607 562 281</p>

            <p><a href="mailto:lucie@goldlife.cz">lucie@goldlife.cz</a></p>
            
                <strong>Alena Foster</strong>
            
            <p>tel.: +420 603 828 847</p>

            <p><a href="mailto:alena@goldlife.cz">alena@goldlife.cz</a></p>
        </div>
    </div>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIMacros::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}