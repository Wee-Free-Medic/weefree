<!DOCTYPE html>
{{ "<!--" | safeHTML }}
{{ "  Wee Free Medicine" | safeHTML }}
{{ "" | safeHTML }}
{{ "       __..." | safeHTML }}
{{ "   ___/. :::\\" | safeHTML }}
{{ "  {      ':' *...." | safeHTML }}
{{ "   \\___" | safeHTML }}
{{ "       \\" | safeHTML }}
{{ "        \\" | safeHTML }}
{{ "         +" | safeHTML }}
{{ "" | safeHTML }}
{{ "  Based on Theme Fisher:" | safeHTML }}
{{ "         // WEBSITE: https://themefisher.com" | safeHTML }}
{{ "         // TWITTER: https://twitter.com/themefisher" | safeHTML }}
{{ "         // FACEBOOK: https://www.facebook.com/themefisher" | safeHTML }}
{{ "         // GITHUB: https://github.com/themefisher/" | safeHTML }}
{{ "" | safeHTML }}
{{ "  All other content on this site is owned by me, Michael Dacre, copyright" | safeHTML }}
{{ printf "  2021–%s." (now.Format "2006") | safeHTML }}
{{ "-->" | safeHTML }}

<html lang="en-us">
    {{- partial "head.html" . -}}
    {{- partial "phpMailer.php" . -}}
    <body>
        {{- partial "header.html" . -}}
        <div id="content">
          {{- block "main" . }}{{- end }}
        </div>
        {{- partial "footer.html" . -}}
        {{- partial "scripts.html" . -}}
    </body>
</html>
