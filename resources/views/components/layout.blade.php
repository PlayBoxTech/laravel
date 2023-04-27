<! doctype html>

<title>
    @if (isset($title))
        {{ $title }}
    @else
        Forgot to set something
    @endif
</title>
<link rel="stylesheet" href="/app.css">
<body>
   {{ $content }}
    
</body>