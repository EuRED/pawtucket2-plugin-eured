<div class="panel-body">
    <div class="panel-group" id="read_selector" role="tablist" aria-multiselectable="true">
        <div class="panel">
            <h5>1. Form of Text</h5>


            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#read_print"
                    role="tab" data-parent="#read_selector"
                    aria-expanded="false" aria-controls="read_print">
                Print
            </button>

            <button class="btn btn-primary" type="button" data-toggle="collapse"
                    data-target="#read_manuscript"
                    role="tab" data-parent="#read_selector"
                    aria-expanded="false" aria-controls="read_manuscript">
                Manuscript
            </button>


            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#read_other"
                    role="tab" data-parent="#read_selector"
                    aria-expanded="false" aria-controls="read_other">
                Other
            </button>

            <div class="collapse panel-collapse" role="tabpanel" id="read_print">

                <div class="row">
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Advertisement
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Book
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Broadsheet
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Form
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Handbill
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Newspaper
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Pamphlet
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Poster
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Serial / periodical
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Ticket
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Unknown
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="read_print_other">Other:</label>
                        <input type="text" class="form-control" id="read_print_other" placeholder="(please specify)">
                    </div>
                </div>
            </div>

            <div class="collapse panel-collapse" role="tabpanel" id="read_manuscript">

                <div class="row">
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Codex
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Graffito
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Letter
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Unknown
                            </label>
                        </div>
                    </div>

                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Pamphlet
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Roll
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Sheet
                            </label>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <label for="read_manuscript_other">Other:</label>
                        <input type="text" class="form-control" id="read_print_other" placeholder="(please specify)">
                    </div>
                </div>
            </div>

            <div class="collapse panel-collapse" role="tabpanel" id="read_other">

                <div class="row">
                    <div class="col-xs-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> (click checkbox to confirm 'unknown')
                            </label>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <h5>2. Publication details</h5>

                <label for="firstName">Any known publication details of the text being read:</label>
                <input type="text" class="form-control" id="firstName" placeholder="e.g year, edition, publisher, translation">
        </div>
    </div>

    <div class="row">
        <div class="form-group col-md-12">
            <h5>3. Provenance</h5>
            <label for="provenance">Provenance (choose one)</label>

            <div id="provenance">
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                        Borrowed (circulating library)
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                        Borrowed (institution library)
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                        Borrowed (private library)
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                        Borrowed (public library)
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
                        Borrowed (other)
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios6" value="option6">
                        Found
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios7" value="option7">
                        Owned
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios8" value="option8">
                        Read in situ
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios8" value="option9">
                        Reading group
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios8" value="option10">
                        Stolen
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios8" value="option11">
                        Subscription Library
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios8" value="option12">
                        Unknown
                    </label>
                </div>
            </div>

            <label for="firstName">Other (please specify):</label>
            <input type="text" class="form-control" id="firstName">
        </div>
    </div>

</div>

<!-- ****************************************************************************** -->
