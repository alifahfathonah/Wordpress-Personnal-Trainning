<!doctype html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <?php wp_head() ?>
    </head>
    <body>
        <nav>
            <nav class="navbar navbar-expand-lg navbar-dark indigo">

                <a class="navbar-brand" href="<?= home_url('/'); ?>"><strong><?php bloginfo( 'name' ); ?></strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <?php wp_nav_menu([
		                "theme_location" => "Principal",
		                "container" => false,
		                "menu_class" => "navbar-nav mr-auto",
	                ]);?>
                </div>

            </nav>

        </nav>
        <!-- Div qui se ferme dans le footer -->
        <div class="container"> 