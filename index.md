---
layout: default
title: Welcome to City Tech Library
---
<div class="row">
	<div class="col-md-3 col-sm-12">
		<div class="card card-info">
			<djv class="card-heading"><h2 class="card-header embolden"><i class="bi-alarm icon-space" ></i><a href="https://libcal.citytech.cuny.edu">Hours</a></h2></djv>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
				<script src="https://citytech-cuny.libcal.com/js/hours_today.js"></script> 
				<div id="s_lc_tdh_4689_10010" style=" font-size:14px;"></div> 
				<script>
					$(function(){ 
						var s_lc_tdh_4689_10010 = new $.LibCalTodayHours( $("#s_lc_tdh_4689_10010"), { iid: 4689, lid: 10010 }); 
					});
				</script> 
				<!-- Please note: The following styles are optional, feel free to modify! //-->
				<style>
					.s-lc-w-today { border-spacing: 0; border-collapse: collapse; width: 100%; }.s-lc-w-today td, .s-lc-w-today th { padding: 8px 5px; }
					.s-lc-w-head { text-align: center; border-bottom: 1px solid #ddd;}
					.s-lc-w-loading { margin-top: 80px; text-align: center; }
					.s-lc-w-sr-only { position: absolute; width: 1px; height: 1px; padding: 0; margin: -1px; overflow: hidden; clip: rect(0, 0, 0, 0); border: 0; }
					.s-lc-w-btn { line-height: 1.5; border-radius: 3px; display: inline-block; padding: 6px 6px; 10px; 0px; margin-bottom: 0; font-size: 12px; font-weight: 400; text-align: center; white-space: nowrap; vertical-align: middle; touch-action: manipulation; cursor: pointer; user-select: none; border: 1px solid #ccc; color: #333; background-color: #fff; display: none; }
					.s-lc-w-btn:active, .s-lc-w-btn:hover { color: #333; background-color: #d4d4d4; border-color: #8c8c8c; display: none;}
					.s-lc-w-previous { float: left;}
					.s-lc-w-next { float: right; }
					.s-lc-w-location td {  font-weight: bold;  }
					.s-lc-w-department {  display: none; } 
					.s-lc-w-name {  display:none; }
					.s-lc-w-times { display: inline; padding-left:45px; }
					.s-lc-w-today-view-link { text-decoration: none; font-size:12px;}
					.s-lc-w-today-view-all { display:none; }
					.s-lc-w-head-pre { padding-top:10px; display:none; }
					.s-lc-hours-note {display:none;}
				</style>
		</div><!-- card-->

		<div class="card card-default">
			<h2 class="card-header embolden"><i class="bi-chat icon-space"></i>Chat</h2>
			<div class="card-body" style="text-align:center">
				<a href="https://library.citytech.cuny.edu/help/ask/index.php"><img style="padding: 2px;  margin:2px; height:50px; width:50px;" src="https://library.citytech.cuny.edu/uploads/noun-chat-bubble-1388380.png" alt="Ask a Librarian"><p>Ask A Librarian</p></a>
			</div>
		</div>
	</div> <!--col-md-3-->

<!--SEARCH THE COLLECTION-->
	<div class="col-md-9 col-sm-12">
		<div class="card" >
			<div class="card-header" style="background-color:#044e95; color:white;"><h1 class="embolden"><i class="bi-search icon-space"></i>Search the collection</h1></div>
			<div class="card-body">
			<form action="https://library.citytech.cuny.edu/oneSearch2.php" enctype="application/x-www-form-urlencoded; charset=utf-8" method="post" name="searchForm" role="search" class="form-inline">
			        <select name="selectStyle" class="form-select form-control-lg" aria-label="Search by Type">
				        <option label="Print and eBooks">Books (Print + eBooks)</option>
				        <option label="Everything" selected="selected">Everything</option>
				        <option label="Articles">Articles</option>
				        <option label="Print Books">Books (Print)</option>
				        <option label="eBooks">eBooks</option>
				        <option label="Video, Audio and More">Media</option>
		                <option label="Journals">Journal</option>
				        <option label="Site Search">Site</option>
				     </select> 
					
					<p><a href="https://cuny-ny.primo.exlibrisgroup.com/discovery/search?vid=01CUNY_NY:CUNY_NY&mode=advanced" style="color:#045099; font-weight:bold;">Advanced Search</a></p>

				    <input name="institution" type="hidden" value="NY" /> 
				    <input name="vid" type="hidden" value="ny" /> 
				    <input name="group" type="hidden" value="GUEST" /> 
				    <input name="onCampus" type="hidden" value="true" /> 
				    <input name="search_scope" type="hidden" value="IZ_CI_AW" /> 
				    <input id="primoQuery" name="query" type="hidden" /> 
				    
				    <input label= "search query" id="primoQueryTemp" class="focus form-control" name="queryTemp" size="30" type="text" placeholder="Find books, media, and more" aria-label="Input search query here"/>
				    <br>
		    		<input alt="Search" class="btn-primary" id="submit" title="Search books, articles &amp; more" type="submit" value="Search" />
		       		<fieldset>
	       			<legend>Search type:</legend>
		       		<label class="radio-inline"><input type="radio" name="radioSelection" checked="checked" value="any">Keyword</label>
		       		<label class="radio-inline"><input type="radio" name="radioSelection" value="title">Title</label> 
		       		<label class="radio-inline"><input type="radio" name="radioSelection" value="creator">Author</label>
		       		<label class="radio-inline"><input type="radio" name="radioSelection" value="sub">Subject</label>
				</fieldset>
    				</form><!--form-group-->
			</div>
		</div>
	</div>
</div><!--row-->

<!--START YOUR RESEARCH-->
<div class="row">
	<div class="col-md-12 col-sm-12" style="padding-bottom:10px;">
		<div class="card">
			<div class="card-header" style="background-color: #ffa815;">
				<h2 class="embolden"><i class="bi-mortarboard-fill icon-space"></i>Start Your Research</h2>
		 	</div>
  			<div class="card-body" style="text-align:center;">
				<div class="row">
				    <div class="col-md-3 col-center" style="padding:5px;">
				    	<a href="https://libguides.citytech.cuny.edu/"><img style="padding: 2px; margin:2px; height:100px; width:100px;" src="https://library.citytech.cuny.edu/uploads/noun-research-5090533%281%29.png" alt="Access research guides"><br>Research Guides</a>
				    </div>
				    <div class="col-md-3 col-center" style="padding:5px;">
				    	<a href="research/articles/subjects/index.php"><img style="padding: 2px;  margin:2px; height:100px; width:100px;" src="https://library.citytech.cuny.edu/uploads/noun-articles-2663651.png" alt="Access articles and databases"><br>Articles & Databases</a>
				    </div>
				    <div class="col-md-3 col-center" style="padding:5px;">
				    	<a href="research/eBooks/index.php"><img style="padding: 2px;  margin:2px; height:100px; width:100px;" src="https://library.citytech.cuny.edu/uploads/noun-ebook-4317312.png" alt="Access eBooks"><br>eBooks</a>
				    </div>
				    <div class="col-md-3 col-center" style="padding:5px;">
				    	<a href="https://cuny-ny.primo.exlibrisgroup.com/discovery/jsearch?vid=01CUNY_NY:CUNY_NY"><img style="padding: 2px;  margin:2px; height:100px; width:100px;" src="https://library.citytech.cuny.edu/uploads/noun-magazine-1188936.png" alt="Access journals"><br>Journals</a>
				    </div>
				</div><!--row-->
				<br>
				<div class="row" style="padding-bottom:5px;">
	    			<div class="col-md-3 col-center" style="padding:5px;">
	    				<a href="https://libguides.citytech.cuny.edu/er.php?b=c"><img style="padding: 2px;  margin:2px; height:100px; width:100px;" src="https://library.citytech.cuny.edu/uploads/noun-shelves-2208934.png" alt="Access electronic reserves"><br>Electronic Reserves</a>
	    			</div>
	    			<div class="col-md-3 col-center" style="padding:5px;">
	    				<a href="https://libguides.citytech.cuny.edu/az.php?t=49467"><img style="padding: 2px;  margin:2px; height:100px; width:100px;" src="https://library.citytech.cuny.edu/uploads/noun-streaming-3320374.png" alt="Access streaming video"><br>Streaming Video</a>
	    			</div>
	    			<div class="col-md-3 col-center" style="padding:5px;">
	    				<a href="services/interlibraryLoan/index.php"><img style="padding: 2px;  margin:2px; height:100px; width:100px;" src="https://library.citytech.cuny.edu/uploads/noun-book-delivery-85121.png" alt="Access interlibrary loan"><br>Interlibrary Loan</a>
	    			</div>
					<div class="col-md-3 col-center" style="padding:5px;">
						<a href="https://library.citytech.cuny.edu/orientation/"  target="_blank"><img src="https://library.citytech.cuny.edu/uploads/noun-tutorial-2366925.png" alt="Access library tutorials"><br>Tutorials</a>
					</div>
				</div><!--row-->
			</div><!--body-->
		</div><!--card-->
	</div><!--col-->
</div><!--row-->

<!--NEWS AND EVENTS-->
<div class="row">
	<div class="col-md-8 col-sm-12" style="padding-bottom:10px;">
		<div class="card card-primary">
	 		<div class="card-header" style="background-color:#044e95; color:white;"><h2 class="embolden"><i class="bi-newspaper icon-space"></i>News & Events</h2></div>
			
	</div>
	</div>

	<div class="col-md-4 col-sm-12">
	<div class="card card-warning">
	  <div class="card-header" style="background-color: #ffa815;"><h2 style="font-weight:bold;"><i class="bi-people-fill icon-space"></i>Workshops</h2></div>
	  <div class="card-body" style="height:100%;">
	<div id="api_upc_cid17264_iid4689"></div><script src="https://libcal.citytech.cuny.edu/api_events.php?m=upc&cid=17264&audience=&c=&d=&l=5&target=_blank&simple=agenda&context=object&format=js"> </script>
	</div><!--bod-->
	</div><!--card-->

	<div class="card card-primary">
	  <div class="card-header" style="background-color:#044e95; color:white;"><h2 class="embolden"><i class="bi-globe icon-space"></i>Explore</h2></div>
	  <div class="card-body">
	<div class="row"  style="text-align:center;">
	<div style="padding: 15px;"><a href="https://cuny-ny.primo.exlibrisgroup.com/discovery/collectionDiscovery?vid=01CUNY_NY:CUNY_NY" target="_blank"><img src="https://library.citytech.cuny.edu/uploads/noun-book-shelf-2174494%281%29.png" alt="Featured Collections"><br>Featured Collections</a></div>
	<div style="padding: 15px;"><a href="https://libguides.citytech.cuny.edu/exhibits" target="_blank"><img src="https://library.citytech.cuny.edu/uploads/noun-exhibit-648083.png" alt="Access library exhibits"><br>Library Exhibits</a></div>
	<div style="padding: 15px;"><a href="https://academicworks.cuny.edu/ny_pubs/"  target="_blank"><img src="https://library.citytech.cuny.edu/uploads/noun-academic-1544056.png" alt="Access CUNY Academic Works"><br>Academic Works</a></div>
	</div>
	<div class="row"  style="text-align:center;">
	<div style="padding: 15px;"><a href="https://openlab.citytech.cuny.edu/oerresources/"  target="_blank"><img src="https://library.citytech.cuny.edu/uploads/noun-reading-book-4822569.png" alt="Access open educational resources"><br>Open Educational Resources</a></div>
	</div>
	</div><!--bod-->
	</div><!--card-->
	</div><!--col-->
	</div><!--row-->
