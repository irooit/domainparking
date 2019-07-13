<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>
<body>

<div id="app">
</div>

<script>
    window.laravel = <?php echo json_encode(
        [
            'data' => $data,
        ]
    ); ?>
</script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
