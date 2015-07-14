<?php
/* ----------------------------------------------------------------------
 * controllers/ContributeController.php
 * ----------------------------------------------------------------------
 * CollectiveAccess
 * Open-source collections management software
 * ----------------------------------------------------------------------
 *
 * Software by Whirl-i-Gig (http://www.whirl-i-gig.com)
 * Copyright 2014 Whirl-i-Gig
 *
 * For more information visit http://www.CollectiveAccess.org
 *
 * This program is free software; you may redistribute it and/or modify it under
 * the terms of the provided license as published by Whirl-i-Gig
 *
 * CollectiveAccess is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTIES whatsoever, including any implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * This source code is free and modifiable under the terms of
 * GNU General Public License. (http://www.gnu.org/copyleft/gpl.html). See
 * the "license.txt" file for details, or visit the CollectiveAccess web site at
 * http://www.CollectiveAccess.org
 *
 * ----------------------------------------------------------------------
 */

require_once(__CA_LIB_DIR__."/core/Error.php");
require_once(__CA_LIB_DIR__."/ca/BasePluginController.php");
require_once(__CA_APP_DIR__.'/helpers/accessHelpers.php');
require_once(__CA_MODELS_DIR__.'/ca_objects.php');

class TEIBoilerplateController extends BasePluginController {

    protected $opn_object_id;
    # -------------------------------------------------------

    # -------------------------------------------------------
    public function __construct(&$po_request, &$po_response, $pa_view_paths=null) {
        parent::__construct($po_request, $po_response, $pa_view_paths);

        if ($this->request->config->get('pawtucket_requires_login')&&!($this->request->isLoggedIn())) {
            $this->response->setRedirect(caNavUrl($this->request, "", "LoginReg", "LoginForm"));
        }

        $this->opn_object_id = $this->getRequest()->getParameter("object",pInteger);
        $this->ops_display_mode = $this->getRequest()->getParameter("displayMode",pString);
    }
    # -------------------------------------------------------
    /**
     *
     */

    public function Index() {
        die("no index");
    }
    # ------------------------------------------------------
    public function Display() {

        if ($this->opn_object_id) {
            $vt_object = new ca_objects($this->opn_object_id);
            $vs_xml_url = $vt_object->get("ca_objects.tei_xml_source", array("return"=>"url") );
            $vs_xml_content = file_get_contents($vs_xml_url);

            // Printing XML Content
            header('Content-Type: application/xml; charset=utf-8');

            // Injecting xml declaration and XSL stylesheet (depending on target text or transcript)
            print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
            if ($this->ops_display_mode == "text") {
                print "<?xml-stylesheet type=\"text/xsl\" href=\"/app/plugins/EuRED/assets/tei-boilerplate/content/teibp-textonly.xsl\"?>\n";

            } else {
                print "<?xml-stylesheet type=\"text/xsl\" href=\"/app/plugins/EuRED/assets/tei-boilerplate/content/teibp.xsl\"?>\n";
            }

            // Removing declaration and printing XML
            $vs_xml_content_array = explode("\n",$vs_xml_content);
            foreach($vs_xml_content_array as $vs_xml_content_row) {
                if(strpos($vs_xml_content_row, "<?xml")=== false) {
                    print $vs_xml_content_row."\n";
                }
            }
            die();
        }

    }
}
?>