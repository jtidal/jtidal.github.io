---
layout: page
title: About
---
{% for link in site.data.navbar.toc[3].subfolderitems %}
<div class="col-12">
<div class="card text-center">     
<div class="card-head"><h2><a href="{{link.url}}" title="{{link.title}}">{{link.page}}</a></h2></div>
<div class="card-body"><p>{{link.title}}</p></div>
</div>
</div>
{% endfor %}

