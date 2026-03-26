<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? SITENAME; ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo asset('css/style.css'); ?>">
    
    <?php if (isset($extra_css)) echo $extra_css; ?>
</head>
<body>
    
    <?php view_component('navbar'); ?>
    
    <main class="main-content">
        <?php echo $content; ?>
    </main>

    <?php view_component('footer'); ?>

    <!-- Custom JS -->
    <script src="<?php echo asset('js/main.js'); ?>"></script>
    <?php if (isset($extra_js)) echo $extra_js; ?>
</body>
</html>
