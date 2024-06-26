---
layout: page
title: Permalinker
categories: 
 - services
 - faculty
---
<div id="row">
    <ul>
    <li>The permalinker will create a URL to licensed articles and other library database content. </li>
    <li>Links will work on or off campus.</li>
    <li>Share permalinks on Blackboard, the OpenLab, syllabi, reading lists, and social media to prevent potential copyright violations.</li>
    </ul>
</div>

<div id="row">
    <div>
    <h3>How to use Permalinker</h3>
        <ol>
            <li>Copy the URL or DOI of the link to the article from a City Tech database.</li>
            <li>Paste into the field below</li>
            <li>Select URL or DOI</li>
            <li>Click submit</li>
            <li>Your authentication URL for City Tech faculty and students is now available</li>
            <li>Users will need to login using their CUNY login credentials to access the article</li>
        </ol>
    </div>
</div>

<div>
    <form name="myform" id="myform" action="https://library.citytech.cuny.edu/process.php" class="form-horizontal" role="form" method="POST">
        <div class="form-group">
            <label for="name" id="name_label" class="control-label"><strong></strong></label>
            <input onfocus="this.value='';" type="text" class="form-control" name="theAddie" id="theAddie" value="Paste address or DOI, e.g. http://muse.jhu.edu/journals/american_imago/v069/"/>
        </div>

        <div class="row">
            <div class="radio">
                <label><input type="radio" style="padding:0px;" name="RadioSelector" id="RadioSelector" value="url" checked="checked">URL</label>
            </div>

            <div class="radio">
                <label><input type="radio" name="RadioSelector" id="RadioSelector" value="doi">DOI</label>
            </div>

            <!-- The Submit button -->
            <div style="margin-top:10px; margin-bottom:10px;">
                <button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button>
                <button type="reset" class="btn btn-primary"  name="reset" value="Clear">Clear</button>
            </div>
        </div>
        
        <div>
            <p>
            <strong>Examples:</strong>
            <br>
            <strong>URL:</strong>
            http://muse.jhu.edu/journals/american_imago/v069/...
            <br>
            <strong>DOI:</strong>
            10.1021/ac0354342
            </p>
        </div>

        <div class="form-group">
            <div class="col-sm-10">
                <div id="results"><div>
                    <!-- We will output the results from process.php here -->
            </div>
        </div>
    </form>
</div>

<div class="row">
    <h3>It's not working.</h3>
    <p>Contact <a href="mailto:jtidal@citytech.cuny.edu">Prof. Junior Tidal</a> to report any problems.</p>
    <h3>Resources</h3>
    <p><a href="https://libguides.ala.org/copyright/teachact">American Libraries Association - TEACH Act</a></p>
</div>


