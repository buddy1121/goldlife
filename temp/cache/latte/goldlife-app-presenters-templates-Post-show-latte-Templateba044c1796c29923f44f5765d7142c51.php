<?php
// source: C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\goldlife\app\presenters/templates/Post/show.latte

class Templateba044c1796c29923f44f5765d7142c51 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('72b5670861', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbb59286acfe_content')) { function _lbb59286acfe_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><p><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
">← zpět na výpis příspěvků</a></p>

<div class="date"><?php echo Latte\Runtime\Filters::escapeHtml($template->date($post->date_created, 'F j, Y'), ENT_NOQUOTES) ?></div>

<?php call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<div class="post"><?php echo Latte\Runtime\Filters::escapeHtml($post->text, ENT_NOQUOTES) ?>
</div><?php
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lb60c2429a2e_title')) { function _lb60c2429a2e_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><h1><?php echo Latte\Runtime\Filters::escapeHtml($post->title, ENT_NOQUOTES) ?></h1>
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
?>

<?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}