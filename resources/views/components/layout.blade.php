<!-- resources/views/components/layout.blade.php -->

<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title ?? 'Expense Tracker' }}</title>
</head>
<body>
<h1>Todos</h1>
<hr/>
{{ $slot }}
</body>
</html>
