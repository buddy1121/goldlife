<?php
// source: C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\goldlife.club\goldlife\app\presenters/templates/@layout.latte

class Template1824ca5172ed805c8eebcd1843a10c9f extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('44767e105d', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block head
//
if (!function_exists($_b->blocks['head'][] = '_lbf5410f48ce_head')) { function _lbf5410f48ce_head($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;
}}

//
// block scripts
//
if (!function_exists($_b->blocks['scripts'][] = '_lb9234b86dd1_scripts')) { function _lb9234b86dd1_scripts($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <script src="//nette.github.io/resources/js/netteForms.min.js"></script>
        <script src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/js/bootstrap.js"></script>
        
        
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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <title><?php if (isset($_b->blocks["title"])) { ob_start(); Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'title', $template->getParameters()); echo $template->striptags(ob_get_clean()) ?>
 | <?php } ?>Nette Sandbox</title>

        <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap.css">
        <Style type="text/css">
            body{
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }

            @media (max-width: 980px) {
                /* Enable use of floated navbar text */
                .navbar-text.pull-right {
                    float: none;
                    padding-left: 5px;
                    padding-right: 5px;
                }
            }</style>
        <link rel="stylesheet" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/css/bootstrap-theme.css">
        <link rel="shortcut icon" href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/favicon.ico">
        <meta name="viewport" content="width=device-width">
        <?php if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['head']), $_b, get_defined_vars())  ?>

    </head>

    <body>
        
<?php Latte\Macros\BlockMacrosRuntime::callBlock($_b, 'content', $template->getParameters()) ?>


        <hr>

        <footer>
            <p>&copy; Company 2013</p>
        </footer>



<?php call_user_func(reset($_b->blocks['scripts']), $_b, get_defined_vars())  ?>
    </body>
</html>
<?php
}}