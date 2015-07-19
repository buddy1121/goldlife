<?php
// source: D:\weblocal\goldlife\app\presenters/templates/Activity/show.latte

class Template50b8c657da1a70b5e03aa9967ed3f370 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('4c98e54bbb', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbd6ca82713a_content')) { function _lbd6ca82713a_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">

        <div class="hero-unit">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                overview
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <img src="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($basePath), ENT_COMPAT) ?>\img\activity\rozvrh.png" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                gymnastic
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tr><th>Day</th><th>From</th><th>To</th><th>Where</th><th>Age group</th><th>Info</th></tr>
<?php $iterations = 0; foreach ($activities as $activity) { if ($activity->name == 'Gymnastics A & B' || $activity->name == 'Gymnastics I & II') { ?>
                                        <tr>
                                            <td>
                                                <?php echo Latte\Runtime\Filters::escapeHtml($activity->day, ENT_NOQUOTES) ?>

                                            </td>
                                            <td>
                                                <?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_start , "%H:%I"), ENT_NOQUOTES) ?>

                                            </td>
                                            <td>
                                                <?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_end, "%H:%I"), ENT_NOQUOTES) ?>

                                            </td>
                                            <td>
                                                <?php echo Latte\Runtime\Filters::escapeHtml($activity->where, ENT_NOQUOTES) ?>

                                            </td>
                                            <td>
                                                <?php echo Latte\Runtime\Filters::escapeHtml($activity->category, ENT_NOQUOTES) ?>

                                            </td>
                                            <td>
                                                
                                                <a tabindex="0" class="btn btn-primary glyphicon glyphicon-info-sign" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<?php echo Latte\Runtime\Filters::escapeHtml($activity->info, ENT_COMPAT) ?>"></a>
                                                                                                                                            </td>
                                        </tr>

<?php } $iterations++; } ?>
                                <tr><td></td><td></td><td></td><td><a tabindex="0" class="btn btn-primary glyphicon glyphicon-info-sign" role="button" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="<?php echo Latte\Runtime\Filters::escapeHtml($activity->info, ENT_COMPAT) ?>"></a></td><td></td><td></td></tr>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                atheltics
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr><th>name</th><th>From</th><th>To</th><th>Beginning</th><th>End</th><th>How often?</th><th>Kids</th><th></th></tr>
<?php $iterations = 0; foreach ($activities as $activity) { ?>

                                        <tr>
                                            <td>

                                            </td>
                                        </tr>

<?php $iterations++; } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                shmuck
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFourth" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourth">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr><th>name</th><th>From</th><th>To</th><th>Beginning</th><th>End</th><th>How often?</th><th>Kids</th><th>info</th></tr>
<?php $iterations = 0; foreach ($activities as $activity) { ?>

                                        <tr>
                                            <td>
                                                
                                            </td>

                                        </tr>

<?php $iterations++; } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>




</div> <!-- /container -->
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