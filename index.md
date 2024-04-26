layout: default
title: Welcome to City Tech Library
-
<div class="container">
<div class="row" style="padding-bottom:10px; width:100%">
<div class="col-md-3 col-sm-12" style="height:100%; padding-bottom:5px;">
			<div class="panel panel-info">
  <div class="panel-heading"><h2 style="font-weight:bold;"><span class="glyphicon glyphicon-time"></span><a href="https://libcal.citytech.cuny.edu"> Hours</a></h2></div>

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
		</div><!-- panel-->
<div class="panel panel-default">
  <div class="panel-heading"><h2 style="font-weight:bold;"><span class="glyphicon glyphicon-comment"></span> Chat</h2></div>
  <div class="panel-body" style="text-align:center">
<a href="https://library.citytech.cuny.edu/help/ask/index.php"><img style="padding: 2px;  margin:2px; height:50px; width:50px;" src="https://library.citytech.cuny.edu/uploads/noun-chat-bubble-1388380.png" alt="Ask a Librarian"><p>Ask A Librarian</p></a>
</div>
</div>
	</div> <!--col-md-3-->

 	<div class="jumbotron col-md-9 col-sm-12" style="height:100%;">
	<div class="panel panel-primary" style="width:100%;">
		<div class="panel-heading panel-primary" style="background:#044e95;"><h2 style="color:white; font-weight:bold;"><span class="glyphicon glyphicon-search"></span> Search the Collection</h2></div>
			<div class="form-group" style="padding:20px; 0px; 0px; 10px;">
			    <div class="col-md-4">
			      <form action="https://library.citytech.cuny.edu/oneSearch2.php" enctype="application/x-www-form-urlencoded; charset=utf-8" method="post" name="searchForm" role="search" class="form-inline">
			      <select name="selectStyle" style="margin: 0px 5px 5px 0px"  class="form-control" aria-label="Search by Type">
			        <option label="Print and eBooks">Books (Print + eBooks)</option>
			        <option label="Everything"  selected="selected">Everything</option>
			        <option label="Articles">Articles</option>
			        <option label="Print Books">Books (Print)</option>
			        <option label="eBooks">eBooks</option>
			        <option label="Video, Audio and More">Media</option>
                                <option label="Journals">Journal</option>
			        <option label="Site Search">Site</option>
			      </select> 
					<p style="padding: 10px; float: left;"><a href="https://cuny-ny.primo.exlibrisgroup.com/discovery/search?vid=01CUNY_NY:CUNY_NY&mode=advanced" style="color:#045099; font-weight:bold;">Advanced Search</a></p>
			     </div>  <!--col-md-3-->
		     <div class="col-md-6">
		      <input name="institution" type="hidden" value="NY" /> 
		      <input name="vid" type="hidden" value="ny" /> 
		      <input name="group" type="hidden" value="GUEST" /> 
		      <input name="onCampus" type="hidden" value="true" /> 
		      <input name="search_scope" type="hidden" value="IZ_CI_AW" /> 
		      <input id="primoQuery" name="query" type="hidden" /> 
		      <input label= "search query" id="primoQueryTemp" class="focus form-control" name="queryTemp" size="30" type="text" placeholder="Find books, media, and more" aria-label="Input search query here"/>
		    </div><!--col-md-6-->
		    <div class="col-md-2">
		        <input alt="Search" class="btn btn-info" id="submit" title="Search books, articles &amp; more" type="submit" value="Search" />
		    </div><!--col-md-2-->
		  <div class="row">
		    <div class="col-md-3"></div>
		      <div class="col-md-6">
		       	 <div style="padding-top:10px;">
		       	   <label class="radio-inline"><input type="radio" name="radioSelection" checked="checked" value="any" >Keyword</label><label class="radio-inline" style="margin-left:15px"><input type="radio" name="radioSelection" value="title">Title</label> <label class="radio-inline"><input type="radio" name="radioSelection" value="creator">Author</label><label class="radio-inline"><input type="radio" name="radioSelection" value="sub">Subject</label>
		      	  </div><!--col-md-6-->
			    </div><!--padding top-->
			</div><!--row-->
				</form><!--form-group-->

	</div><!--panel -->
	</div><!--panel-->
</div>
</div><!--row-->
