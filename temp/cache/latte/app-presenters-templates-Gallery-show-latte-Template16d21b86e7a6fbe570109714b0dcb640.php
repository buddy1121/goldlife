<?php
// source: D:\weblocal\goldlife\app\presenters/templates/Gallery/show.latte

class Template16d21b86e7a6fbe570109714b0dcb640 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('19071b505d', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb8316428864_content')) { function _lb8316428864_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="container">
        <div class="modal fade" id="GalleryCarousel">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-title">
                        <h4>
                            Gallery
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->


                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>/img/gallery/IMG_1913.jpg" alt="20">

                                    <div class="carousel-caption">
                                        ...
                                    </div>
                                </div>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($images) as $image) { ?>
                                    <div class="item">


<?php Tracy\Debugger::barDump(($image), '$image') ?>
                                        <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($image), ENT_COMPAT) ?>" class="img-responsive"
                                             alt="<?php echo Latte\Runtime\Filters::escapeHtml($iterator->counter, ENT_COMPAT) ?>">
                                    </div>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button"
                               data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" role="button"
                               data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>


        <button type="button" class="btn btn-lg glyphicon glyphicon-camera" data-toggle="modal" data-target="#GalleryCarousel">

        </button>
        <div class="container-fluid">
            <div class="row">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Latte\Runtime\CachingIterator($images) as $image) { ?>
                <div class="col-lg-2">


<?php Tracy\Debugger::barDump(($image), '$image') ?>
                    <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>
/<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($image), ENT_COMPAT) ?>
" class="img-responsive" alt="<?php echo Latte\Runtime\Filters::escapeHtml($iterator->counter, ENT_COMPAT) ?>">
                </div>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
                </div>
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