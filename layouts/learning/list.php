{{ define "main" }}
{{ partial "pageHeader.html" . }}

<br>
<section id="page-section" class="section">
  <div class="container">
    {{ .Content }}
  </div>
</section>

{{ end }}
