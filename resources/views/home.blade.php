<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        @foreach ($dresses as $dress)
            <ul>
                <li>
                    <p>tipo: {{ $dress -> type }}</p>
                    <p>taglia: {{ $dress -> size }}</p>
                    <p>brand: {{ $dress -> brand }}</p>
                    <p>color: {{ $dress -> color }}</p>
                    <p>tessuto: {{ $dress -> tissue }}</p>
                    <p>sesso: {{ $dress -> sex }}</p>
                </li>
            </ul>
        @endforeach
    </body>
</html>
