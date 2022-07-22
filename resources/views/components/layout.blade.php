<!-- resources/views/components/layout.blade.php -->

<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title ?? 'Expense Tracker' }}</title>
</head>
<body>
<div class="bg-green-500 text-center p-10 text-2xl">
    <h1>Expenses Management System</h1>
</div>
<hr/>

<div>
    {{ $slot }}
</div>
</body>
</html>
