<?php
// source: D:\weblocal\goldlife\app\presenters/templates/Homepage/default.latte

class Template840b00c265c6323b4ec7df9f585660d8 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('7a3e1f00f3', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb997ee40f13_content')) { function _lb997ee40f13_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="container jumbotron text-center">

        <h1><strong>SA GoldLife</strong></h1>
        <br>

        <h2>Sports Academy & Club</h2>
        <br>
        SA GoldLife is a subsidiary of GoldLife Services s.r.o. which was established in 2009.
        <div class="text-left">
            <br>

            In January 2015 we decided to establish SA GoldLife in order to better respond to our clients
<br>
            (mainly the international expats community in Prague) demand for:
            <ul class="blog-post">
                <br>

                <li> An equivalent to Czech sports leagues / clubs where training is conducted in English.;</li>

                <li> Development of talented children who want to pursue their sports discipline to a</li>

                competitive level;

                <li> Contest participation in order to display and compare acquired skills with a larger</li>

                community.

            </ul>
        </div>
        <br>

        Czech sports leagues / clubs that offer all of the above are de jure open for foreigners, de facto

        however, are hardly accessible mainly due to the language barrier and due to different styles and

        approaches to sports.

        SA GoldLife is now available to the international and Czech communities as an appropriate

        alternative to Czech leagues. We operate as a sports club with members who are eligible to join our

        sports courses and to participate in sports contests competeing with other clubs.
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