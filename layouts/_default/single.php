
{{ define "main" }}
{{- partial "pageHeader.html" . -}}

<section id="page-section" class="section">
  {{ if eq .File.Ext "md" }}
    {{ .Render "markdown.container" }}
  {{ else }}
    {{ .Content }}
  {{ end }}
</section>
{{ end }}
