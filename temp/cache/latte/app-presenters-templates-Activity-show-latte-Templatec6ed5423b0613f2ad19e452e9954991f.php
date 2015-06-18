<?php
// source: C:\Program Files (x86)\EasyPHP-DevServer-14.1VC9\goldlife\app\presenters/templates/Activity/show.latte

class Templatec6ed5423b0613f2ad19e452e9954991f extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('6bd01e8a37', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbb1a5fd05c0_content')) { function _lbb1a5fd05c0_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">

        <div class="hero-unit">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-info">
                    <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                full year
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr><th>name</th><th>From</th><th>To</th><th>Beginning</th><th>End</th><th>How often?</th><th>Kids</th></tr>
<?php $iterations = 0; foreach ($activities as $activity) { if ($activity->season =='year') { ?>
                                        <tr>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->name, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_start, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_end, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_start, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_end, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->how_often, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->kids, ENT_NOQUOTES) ?></td></tr>
<?php } $iterations++; } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Summer
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr><th>name</th><th>From</th><th>To</th><th>Beginning</th><th>End</th><th>How often?</th><th>Kids</th></tr>
<?php $iterations = 0; foreach ($activities as $activity) { if ($activity->season =='summer') { ?>
                                        <tr>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->name, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_start, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_end, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_start, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_end, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->how_often, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->kids, ENT_NOQUOTES) ?></td></tr>
<?php } $iterations++; } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-success">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Winter
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr><th>name</th><th>From</th><th>To</th><th>Beginning</th><th>End</th><th>How often?</th><th>Kids</th><th></th></tr>
<?php $iterations = 0; foreach ($activities as $activity) { if ($activity->season =='winter') { ?>
                                        <tr>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->name, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_start, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_end, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_start, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_end, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->how_often, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->kids, ENT_NOQUOTES) ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
<?php } $iterations++; } ?>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-warning">
                    <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFourth" aria-expanded="false" aria-controls="collapseFourth">
                                One time events
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFourth" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFourth">
                        <div class="panel-body">
                            <table class="table table-hover">
                                <tr><th>name</th><th>From</th><th>To</th><th>Beginning</th><th>End</th><th>How often?</th><th>Kids</th><th>info</th></tr>
<?php $iterations = 0; foreach ($activities as $activity) { if ($activity->season =='one_time_events') { ?>
                                        <tr>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->name, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_start, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->date_end, 'j. n. Y'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_start, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($template->date($activity->time_end, '%H:%I'), ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->how_often, ENT_NOQUOTES) ?></td>
                                            <td><?php echo Latte\Runtime\Filters::escapeHtml($activity->kids, ENT_NOQUOTES) ?></td>
                                            <td><button class="btn btn-primary popover" target="popover">info</button>
                                                <div class="popover-content" name="popover"><?php echo Latte\Runtime\Filters::escapeHtml($activity->info, ENT_NOQUOTES) ?></div>
                                            </td>
                                            
                                        </tr>
<?php } $iterations++; } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>

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
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}