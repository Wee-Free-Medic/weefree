{{ define "main" }}
{{ partial "pageHeader.html" . }}

<br>
<section id="page-section" class="section">
  <div class="container">
    {{ .Content }}
  </div>
</section>

{{ if .Pages }}
<section id="page-section" class="section">
  <div class="container">
    <h2>Subsections and Pages</h2>
    {{ range .Pages.ByPublishDate.Reverse }}
      <p>
        <h3><a class="title" href="{{ .RelPermalink }}">{{ .Title }}</a></h3>
        {{ partial "metadata.html" . }}
        <a class="summary" href="{{ .RelPermalink }}">
            <p>{{ .Summary }}</p>
        </a>
      </p>
    {{ end }}
  </div>
</section>
{{ end }}

{{ end }}
