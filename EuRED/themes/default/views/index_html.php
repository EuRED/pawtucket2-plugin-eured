<?php
	$t_collection = $this->getVar('t_collection');
	$ps_template = $this->getVar('display_template');
	$vs_page_title = $this->getVar('page_title');
	$vs_intro_text = $this->getVar('intro_text');
	$va_open_by_default = $this->getVar('open_by_default');
	
	$qr_top_level_collections = ca_collections::find(array('parent_id' => null), array('returnAs' => 'searchResult'));
	
	if (!$va_open_by_default) {
		$vs_hierarchy_style = "style='display:none;'";
	}
?>
	<h1><?php print $vs_page_title; ?></h1>
	<div class='findingIntro'><?php print $vs_intro_text; ?></div>
    <form method="post" target="http://pawtucket2.dev/index.php/EuRED/Contribute/Index">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true"
                           aria-controls="collapseOne">
                            SECTION 1: Contributor's Details and Reading Experience
                        </a>
                    </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <?php include('form_one_html.php'); ?>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"
                           aria-expanded="false" aria-controls="collapseTwo">
                            SECTION 2: Details of the Text Being Read
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <?php include('form_two_html.php'); ?>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree"
                           aria-expanded="false" aria-controls="collapseThree">
                            SECTION 3: Further Details
                        </a>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <?php include('form_three_html.php'); ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-11">
                <button type="submit" class="btn btn-success btn-lg" style="margin-top: 20px;" formtarget="_self">Submit</button></div>
            <div class="col-md-1">
                <button type="reset" class="btn btn-danger" style="float:right;margin-top: 20px;">Reset</button></div>
        </div>

    </form>
</div>
