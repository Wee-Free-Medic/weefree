{{ define "main" }}
{{- partial "pageHeader.html" . -}}

<section id="page-section" class="section">
  <div class="container">
    {{ .Content }}
  </div>
</section>

{{ end }}
