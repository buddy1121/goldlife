<?php
// source: D:\weblocal\goldlife\app\presenters/templates/Camps/default.latte

class Template82982840d3b548f6679b37ebb0108798 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1a3c0e416e', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb59ee54f7e6_content')) { function _lb59ee54f7e6_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>    <div class="container jumbotron">
        <div class="">
            <div id="sl-user-content"><h1 class="h1 text-center">Summer Camps 2015</h1>

                <p class="text-center"><span style="font-size: large;"><strong>SUMMER CAMPS 22.6 - 22.8.2015</strong></span></p>

                <p>&nbsp;</p>

                <p class="text-center"><span style="font-size: small;">Our <strong>camps</strong> <strong>run</strong> in <strong>weekly
                            turns</strong> from <strong>Mondays to Fridays</strong>, daily from <strong>9.00 -
                            16.00</strong></span></p>

                <p>&nbsp;</p>

                <p><span style="font-size: small;"><strong><span
                                    style="font-size: medium;">Camp Options:</span></strong></span></p>

                <p><span style="font-size: small;"><span style="font-size: medium;"><strong><span
                                        style="font-size: small;">For age group 5 - 12 years:</span></strong></span></span>
                </p>
                <ul>
                    <li><span style="font-size: small;"><strong>Football &amp; Selected Sports for Football
                                Players</strong> - VENUE: FC Predni Kopanina, Prague 6</span>
                    </li>
                </ul>
                <ul>
                    <li><span style="font-size: small;"><strong>Sports Camp - diverese sports disciplines</strong>, incl. ball games, tennis, athletics, beach volley ball, gymnastics, swimming - VENUE: Riverside International School, Prague 6 Sedlec<br></span>
                    </li>
                </ul>
                <p>&nbsp;</p>

                <p><span style="font-size: small;"><span style="font-size: medium;"> </span></span></p>

                <p><strong><span style="font-size: small;">For age groups 12 - 16 years:</span></strong></p>
                <ul>
                    <li><span style="font-size: small;"><strong>Outdoor adventure Camps</strong> - activities include out-door limbing, high and low rope courses, rafting, biking and hiking.</span>
                    </li>
                </ul>
                <p><span style="font-size: small;">The outdoor adventure camps are offered as <strong>Prague day
                            camps</strong> at different locations catering for the activities (a central meeting point in Prague 6 will cater for easy drop-offs and pick-ups) and <strong>outside
                            of
                            Prague</strong> camps with overnight stays. The latter will be in the Czech mountains.</span>
                </p>

                <p>&nbsp;</p>

                <p>&nbsp;</p>

                <p><strong><span style="font-size: medium;">Camp fees:</span></strong></p>

                <p><span style="font-size: small;">All <strong>day camps</strong> are available for <strong>Czk 4 900 /
                            week
                            / child</strong>, including a 5 day sports program, equipment, entrance fees where appropriate, qualified instructors, snacks and lunches.</span>
                </p>

                <p><span style="font-size: small;">The <strong>outside of Prague</strong> <strong>camp</strong> is available for Czk 7900 / week / child, including a 5 day sports program, equipment, entrance fees, qualified instructors, accommodation, transport and meals.</span>
                </p>

                <p>&nbsp;</p>

                <p><span style="font-size: small;"><strong>For more information: </strong><a href="mailto:renata@goldlife.cz">renata@goldlife.cz</a> or 724 020 613.</span>
                </p>

                <p><span style="font-size: small;">For unbinding registrations please find the link on this site:</span>
                </p>

                <p><span style="font-size: small;"><a href="www.goldlife.cz/en/international-sports-club/registration-for-summer-holiday-camps">www.goldlife.cz/en/international-sports-club/registration-for-summer-holiday-camps</a></span>
                </p>

                <p><span style="font-size: small;"><br></span></p></div>
        </div>
        <!-- /center -->


        <!-- /left -->
    </div>
    <!-- /pageleft -->
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