---
layout: page
title: Library Faculty and Staff Directory
categories: 
 - about
---
<div class="row">
  <div class="col-sm-12 col-md-9 col-lg-9">
<h2>Library Faculty</h2>
<table class="cols-2 table table-striped table-condensed" style="padding-top:20px;">
  <thead>
    <tr>
    <th>Name &amp; Contact</th>
    <th>Rank &amp; Service Area</th>
    </tr>
  </thead>
  <tbody>
  {% for person in site.data.librarians.librarians %}
    <tr><td><h4><a href="{{ person.url }}">{{ person.name }}</a></h4>
    <p>
    {% if person.namedrop %}
    <a href="{{ person.namedrop }}" target="_blank">Name pronunciation</a><br>
    {% else %}
    {% endif %}
    {% if person.pronouns %}
    {{ person.pronouns }}<br>
    {% else %}
    {% endif %}
    <a href="mailto:{{ person.email }}">{{ person.email }}</a>
    {% if person.phone %}
    <br><a href="{{ person.phone }}">{{ person.phone }}</a>
    {% else %}
    {% endif %}
    <br>{{ person.room }}</p>
    </td>
    <td><p>{{ person.rank }}<br>{{ person.area }}</p>
    </td>
    </tr>    
  {% endfor %}
  </tbody>
    </table>

<h2>College Laboratory Technicians</h2>
<table class="cols-2 table table-striped table-condensed">
  <thead>
    <tr>
    <th>Name &amp; Contact</th>
    <th>Rank &amp; Service Area</th>
    </tr>
  </thead>
  <tbody>
  {% for person in site.data.clt.clts %}
 <tr><td><h4><a href="{{ person.url }}">{{ person.name }}</a></h4>
    <p>
    {% if person.namedrop %}
    <a href="{{ person.namedrop }}" target="_blank">Name pronunciation</a><br>
    {% else %}
    {% endif %}
    {% if person.pronouns %}
    {{ person.pronouns }}<br>
    {% else %}
    {% endif %}
    <a href="mailto:{{ person.email }}">{{ person.email }}</a>
    {% if person.phone %}
    <br><a href="{{ person.phone }}">{{ person.phone }}</a>
    {% else %}
    {% endif %}
    <br>{{ person.room }}</p>
    </td>
    <td><p>{{ person.area }}</p>
    </td>
    </tr>
    {% endfor %}
  </tbody>
    </table>

<h2>Emeritus Faculty</h2>
<table class="cols-2 table table-striped table-condensed">
  <thead>
    <tr>
    <th>Name &amp; Contact</th>
    <th>Rank &amp; Service Area</th>
    </tr>
  </thead>
  <tbody>
  {% for person in site.data.emeritus.emeritus %}
    <tr><td><h4>{{ person.name }}</h4>
    <p><a href="mailto:{{ person.email }}">{{ person.email }} </a></p>
    </td>
    <td>{{ person.rank }}</td>
    </tr>    
  {% endfor %}
  </tbody>
    </table>

    <h2>Administrative and Technical Staff</h2>
    <table class="cols-2 table table-striped table-condensed">
  <thead>
    <tr>
    <th>Name &amp; Contact</th>
    <th>Rank &amp; Service Area</th>
    </tr>
  </thead>
  <tbody>
  {% for person in site.data.staff.staff %}
    <tr><td><h4>{{ person.name }}</h4>
    <p>
    {% if person.pronouns %}
    {{ person.pronouns }}<br>
    {% else %}
    {% endif %}
     <a href="mailto:{{ person.email }}">{{ person.email }}</a>
    <br><a href="{{ person.phone }}">{{ person.phone }}</a><br>
    {{ person.room }}</p>
    </td>
    <td>{{ person.area }}
    </td>
    </tr>    
  {% endfor %}
  </tbody>
    </table>

  <h2>Adjunct Library Faculty</h2>
   <table class="cols-2 table table-striped table-condensed">
  <thead>
    <tr>
    <th>Name &amp; Contact</th>
    <th>Rank &amp; Service Area</th>
    </tr>
  </thead>
  <tbody>
  {% for person in site.data.adjuncts.adjuncts %}
    <tr><td><h4>{{ person.name }}</h4>
    <p><a href="mailto:{{ person.email }}">{{ person.email }} </a>
    <br><a href="{{ person.phone }}">{{ person.phone }}</a><br>
    {{ person.room }}</p>
    </td>
    <td><p>{{ person.area }}</p>
    </td>
    </tr>    
  {% endfor %}
  </tbody>
    </table>
    
  </div>
  <div class="col-sm-12 col-md-3 col-lg-3">
  
        <h2>Library Phone Numbers</h2>
    
      <table class="table table-striped"><tbody><tr><td><strong>Circulation:</strong></td>
      <td align="right"><a href="tel:718.260.5470">718.260.5470</a></td>
      </tr><tr><td><strong>Reference:</strong></td>
      <td align="right"><a href="tel:718.260.5485">718.260.5485</a></td>
      </tr><tr><td><strong>Administration:</strong></td>
      <td align="right"><a href="tel:718.260.5497">718.260.5497</a></td>
      </tr><tr><td><strong>Multimedia:</strong></td>
      <td align="right"><a href="tel:718.260.5476">718.260.5476</a></td>
      </tr><tr><td><strong>Periodicals:</strong></td>
      <td align="right"><a href="tel:718.260.5482">718.260.5482</a></td>
      </tr><tr><td><strong>Interlibrary Loan:</strong></td>
      <td align="right"><a href="tel:718.260.5792">718.260.5792</a></td>
      </tr></tbody></table>

        <h2>Library Subject Specialists</h2>
    
  <p>Looking for a library faculty member specific to your department, subject, or discipline? <a href="https://library.citytech.cuny.edu/research/subjectSpecialists.html">Consult the library faculty subject specialist directory</a>.</p>

  </div>
</div>
