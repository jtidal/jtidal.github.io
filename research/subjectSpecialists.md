---
layout: page
title: Library Subject Specialists
categories: research
---
<p>Each discipline and department at City Tech has a subject specialist, a library faculty member who can collaborate with you on research and information literacy instruction, collection development and open educational resources, accreditation and curriculum development, and more.</p>

<p>Visit our <a href="https://libguides.citytech.cuny.edu">research guides</a> for discipline resources.</p>

<table class="table table-striped table-bordered">
	<thead>
		<tr><td><strong>Subject</strong></td><td><strong>Librarian</strong></td></tr>
	</thead>
	
{% for item in site.data.subjects.disciplines %}
<tr><td><a href="{{item.url}}">{{item.subject}}</a></td>
<td><a href="{{item.link}}">{{item.specialist}}</a></td></tr>
{% endfor %}
</table>
</div>
