<div class="panel-body">
    <div class="row">
        <div class="form-group col-md-12">
            <h5>1. Your name and contact details</h5>

            <div class="col-xs-3">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
            </div>
            <div class="col-xs-3">
                <label for="surname">Surname</label>
                <input type="text" class="form-control" id="surname" placeholder="Enter surname">
            </div>
            <div class="col-xs-3">
                <label for="inputEmail">Email address</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Enter email">
            </div>
        </div>
    </div>

    <!-- ****************************************************************************** -->
    <div class="row">
        <div class="form-group col-md-12">
            <h5>2. Evidence of the Reading Experience</h5>
            <label for="evidence">Evidence</label>
            <textarea class="form-control" id="evidence" style="height:6em ;" placeholder="Please use this space to quote the words that act as the evidence of the reading experience. If no quotation exists, please describe your findings here in your own words."></textarea>
        </div>
    </div>

    <!-- ****************************************************************************** -->

    <div class="panel-group" id="selector" role="tablist" aria-multiselectable="true">
        <div class="panel">
            <h5>3. Source for the Reading Experience</h5>


            <button class="btn btn-primary" type="button" data-toggle="collapse"
                    data-target="#manuscript"
                    role="tab" data-parent="#selector"
                    aria-expanded="false" aria-controls="manuscript">
                Manuscript
            </button>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#print"
                    role="tab" data-parent="#selector"
                    aria-expanded="false" aria-controls="print">
                Print
            </button>

            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#other"
                    role="tab" data-parent="#selector"
                    aria-expanded="false" aria-controls="other">
                Other
            </button>

            <div class="collapse panel-collapse" role="tabpanel" id="manuscript">

                <div class="form-group col-md-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="manuscriptAuthorFirstName">Author First Name</label>
                            <input type="text" class="form-control" id="manuscriptAuthorFirstName"
                                   placeholder="Enter author first name">
                        </div>
                        <div class="col-xs-4">
                            <label for="manuscriptAuthorSurname">Author Surname</label>
                            <input type="text" class="form-control" id="manuscriptAuthorSurname"
                                   placeholder="Enter surname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="manuscriptTitle">Title</label>
                            <input type="text" class="form-control" id="manuscriptTitle"
                                   placeholder="Enter Title">
                        </div>
                        <div class="col-xs-4">
                            <label for="manuscriptLocation">Location</label>
                            <input type="text" class="form-control" id="manuscriptLocation"
                                   placeholder="Enter location">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="manuscriptCallNumber">Call Number</label>
                            <input type="text" class="form-control" id="manuscriptCallNumber"
                                   placeholder="Enter call number">
                        </div>
                    </div>
                    <label for="manuscriptAdditionalInfo">Additional Information</label>
                    <textarea class="form-control" id="manuscriptAdditionalInfo" style="height:6em ;" placeholder="Use this box to include any additional information about the source, such as details of an individual letter, date of a diary entry, details about an oral source, or any other information you think relevant for example: ‘diary entry for 1 January, 1832’; ‘Letter from Mary Russell Mitford to Mrs Ouvry, 14 July, 1840’; ‘the editor cites Darwin’s Reading Notebooks in a footnote to substantiate this information’."></textarea>
                </div>

            </div>
            <div class="collapse panel-collapse" role="tabpanel" id="print">

                <div class=" form-group col-md-12">
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="printAuthorFirstName">Author First Name</label>
                            <input type="text" class="form-control" id="printAuthorFirstName"
                                   placeholder="Enter author first name">
                        </div>
                        <div class="col-xs-4">
                            <label for="printAuthorSurname">Author Surname</label>
                            <input type="text" class="form-control" id="printAuthorSurname"
                                   placeholder="Enter author surname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="printEditorFirstName">Editor First Name</label>
                            <input type="text" class="form-control" id="printEditorFirstName"
                                   placeholder="Enter editor first name">
                        </div>
                        <div class="col-xs-4">
                            <label for="printEditorSurname">Editor Surname</label>
                            <input type="text" class="form-control" id="printEditorSurname"
                                   placeholder="Enter editor surname">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8">
                            <label for="printTitle">Title</label>
                            <input type="text" class="form-control" id="printTitle"
                                   placeholder="Enter Title">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="printPlacePublication">Place of publication</label>
                            <input type="text" class="form-control" id="printPlacePublication"
                                   placeholder="Enter place of publication">
                        </div>
                        <div class="col-xs-4">
                            <label for="printDatePublication">Date of publication</label>
                            <input type="date" class="form-control" id="printDatePublication">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="printVolumeNumber">Volume Number</label>
                            <input type="text" class="form-control" id="printVolumeNumber"
                                   placeholder="Enter volume number">
                        </div>
                        <div class="col-xs-4">
                            <label for="printPageNumber">Page Number</label>
                            <input type="text" class="form-control" id="printPageNumber"
                                   placeholder="Enter page number">
                        </div>
                    </div>
                    <label for="manuscriptAdditionalInfo">Additional Information</label>
                    <textarea class="form-control" id="manuscriptAdditionalInfo" style="height:6em ;">Use this box to include any additional information about the source, such as details of an individual letter, date of a diary entry, details about an oral source, or any other information you think relevant for example: ‘diary entry for 1 January, 1832’; ‘Letter from Mary Russell Mitford to Mrs Ouvry, 14 July, 1840’; ‘the editor cites Darwin’s Reading Notebooks in a footnote to substantiate this information’.</textarea>
                </div>

            </div>
            <div class="collapse panel-collapse" role="tabpanel" id="other">
                <div class=" form-group col-md-12">
                    <label for="otherAdditionalInfo">Additional Information</label>
                                        <textarea class="form-control" id="otherAdditionalInfo"
                                                  style="height:6em ;"></textarea>

                </div>
            </div>
        </div>
    </div>

    <!-- ****************************************************************************** -->
    <div class="row">
        <div class="form-group col-md-12">
            <h5>4. Century of Reading Experience</h5>
            <label for="century">Century of Reading Experience</label>

            <div id="century">
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="1450" value="1450">
                        1450 to 1499
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="1500" value="1500">
                        1500 to 1599
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="1600" value="1600">
                        1600 to 1699
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="1700" value="1700">
                        1700 to 1799
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="1800" value="1800">
                        1800 to 1849
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="1850" value="1850">
                        1850 to 1899
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="1900" value="1900">
                        1900 to 1945
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="century" id="unknown" value="unknown">
                        Unknown
                    </label>
                </div>
            </div>
            <label for="dateOfRexp">Date of Reading Experience</label>

            <div class="panel-group" id="dateOfRexp" role="tablist" aria-multiselectable="true">
                <div class="panel">
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#exactDate"
                            role="tab" data-parent="#dateOfRexp"
                            aria-expanded="false" aria-controls="exactDate">
                        Exact Date
                    </button>

                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#dateRange"
                            role="tab" data-parent="#dateOfRexp"
                            aria-expanded="false" aria-controls="dateRange">
                        Date Range
                    </button>

                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#unknown"
                            role="tab" data-parent="#dateOfRexp"
                            aria-expanded="false" aria-controls="unknown">
                        Unknown
                    </button>

                    <div class="collapse panel-collapse" role="tabpanel" id="exactDate">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label for="exactDateField">Exact Date</label>
                                    <input type="date" class="form-control" id="exactDateField" name="exactDateField">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collapse panel-collapse" role="tabpanel" id="dateRange">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label for="dateRangeStart">From</label>
                                    <input type="date" class="form-control" id="dateRangeStart" name="dateRangeStart">
                                </div>
                                <div class="col-xs-4">
                                    <label for="dateRangeEnd">To</label>
                                    <input type="date" class="form-control" id="dateRangeEnd" name="dateRangeEnd">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="collapse panel-collapse" role="tabpanel" id="unknown">
                        <p>date: unknown </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ****************************************************************************** -->
    <div class="row">
        <div class="form-group col-md-12">
            <h5>5. Who was involved</h5>

            <div class="panel-group" id="whoSelector" role="tablist" aria-multiselectable="true">
                <div class="panel">
                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#reader"
                            role="tab" data-parent="#whoSelector"
                            aria-expanded="false" aria-controls="exactDate">
                        Reader
                    </button>

                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#listener"
                            role="tab" data-parent="#whoSelector"
                            aria-expanded="false" aria-controls="dateRange">
                        Listener
                    </button>

                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                            data-target="#readingGroup"
                            role="tab" data-parent="#whoSelector"
                            aria-expanded="false" aria-controls="unknown">
                        Reading Group
                    </button>

                    <div class="collapse panel-collapse" role="tabpanel" id="reader">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label for="readerFirstName">Reader First Name</label>
                                    <input type="text" class="form-control" id="readerFirstName" name="readerFirstName"
                                           placeholder="Enter reader first name">
                                </div>
                                <div class="col-xs-4">
                                    <label for="readerSurname">Reader Surname</label>
                                    <input type="text" class="form-control" id="readerSurname" name="readerSurname"
                                           placeholder="Enter reader surname">
                                </div>
                            </div>
                            <label for="readerAge">Reader Age</label>

                            <div id="readerAge">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="readerAge" id="child"
                                               value="child">
                                        child (0 to 17)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="readerAge" id="adult"
                                               value="adult">
                                        adult (18 to 100+)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="readerAge" id="unknown"
                                               value="unknownAge">
                                        Unknown
                                    </label>
                                </div>
                            </div>
                            <label for="readerGender">Reader Gender</label>

                            <div id="readerGender">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="readerGender" id="female"
                                               value="female">
                                        female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="readerGender" id="male"
                                               value="male">
                                        male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="readerGender"
                                               id="unknownGender" value="unknown">
                                        Unknown
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="readerComments">Comments</label>
                                    <input type="text" class="form-control" id="readerComments" name="readerComments"
                                           placeholder="Please enter any useful information here about the identity of the reader – for example, their maiden name, any pseudonyms, any family relationships (mother of, father of, son of, etc)">
                                </div>
                                <div class="col-xs-12">
                                    <label for="readerListenerDetails">Listener Details</label>
                                    <input type="text" class="form-control" id="readerListenerDetails" name="readerListenerDetails"
                                           placeholder="If the reader was reading the text aloud, were there any listeners? If so, please enter their names">
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="collapse panel-collapse" role="tabpanel" id="listener">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label for="listenerFirstName">Listener First Name</label>
                                    <input type="text" class="form-control" id="listenerFirstName" name="listenerFirstName"
                                           placeholder="Enter listener first name">
                                </div>
                                <div class="col-xs-4">
                                    <label for="listenerSurname">Listener Surname</label>
                                    <input type="text" class="form-control" id="listenerSurname" name="listenerSurname"
                                           placeholder="Enter listener surname">
                                </div>
                            </div>
                            <label for="listenerAge">Listener Age</label>

                            <div id="listenerAge">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="listenerAge" id="child"
                                               value="child">
                                        child (0 to 17)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="listenerAge" id="adult"
                                               value="adult">
                                        adult (18 to 100+)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="listenerAge" id="unknown"
                                               value="unknownAge">
                                        Unknown
                                    </label>
                                </div>
                            </div>
                            <label for="listenerGender">Listener Gender</label>

                            <div id="listenerGender">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="listenerGender"
                                               id="female" value="female">
                                        female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="listenerGender" id="male"
                                               value="male">
                                        male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="listenerGender"
                                               id="unknownGender" value="unknown">
                                        Unknown
                                    </label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12">
                                    <label for="listenerComments">Comments</label>
                                    <input type="text" class="form-control" id="listenerComments" name="listenerComments"
                                           placeholder="Please enter any useful information here about the identity of the listener – for example, their maiden name, any pseudonyms, any family relationships (mother of, father of, son of, etc)">
                                </div>
                                <div class="col-xs-12">
                                    <label for="AdditionalListenerDetails">Additional Listeners</label>
                                    <input type="text" class="form-control"
                                           id="AdditionalListenerDetails" name="AdditionalListenerDetails"
                                           placeholder="Were there any other listeners? If so, please enter their names">
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="collapse panel-collapse" role="tabpanel" id="readingGroup">
                        <div class="form-group col-md-12">
                            <div class="row">
                                <div class="col-xs-4">
                                    <label for="groupName">Group Name</label>
                                    <input type="text" class="form-control" id="groupName" name="groupName"
                                           placeholder="Enter group name">
                                </div>
                            </div>
                            <label for="groupAge">Average Age</label>

                            <div id="groupAge">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="groupAge" id="child"
                                               value="child">
                                        child (0 to 17)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="groupAge" id="adult"
                                               value="adult">
                                        adult (18 to 100+)
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="groupAge" id="unknown"
                                               value="unknownAge">
                                        Unknown
                                    </label>
                                </div>
                            </div>
                            <label for="groupGender">Group Gender</label>

                            <div id="groupGender">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="groupGender"
                                               id="female" value="female">
                                        female
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="groupGender" id="male"
                                               value="male">
                                        male
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="groupGender"
                                               id="mixed" value="mixed">
                                        mixed
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="groupGender"
                                               id="unknownGender" value="unknown">
                                        Unknown
                                    </label>
                                </div>
                            </div>

                            <div class="col-xs-12">
                                <label for="groupComments">Comments</label>
                                <input type="text" class="form-control" id="groupComments" name="groupComments"
                                       placeholder="Please list any distinctive characteristics of this group, including members names.">
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ****************************************************************************** -->
