<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <!-- Basic Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elicit Publishing Limited is a forward-thinking publishing house dedicated to uncovering hidden ideas and clarifying complex concepts to illuminate new perspectives and contribute to global knowledge frontiers. We aim to solve the world’s most pressing problems by addressing issues like poverty, inequality, climate change, and sustainability.">
    <meta name="keywords" content="Elicit Publishing Limited, publishing, global knowledge, sustainability, climate change, inequality, poverty, SDGs, Sustainable Development Goals, transformative ideas, innovation">
    <meta name="author" content="Elicit Publishing Limited">

    <!-- Title -->
    <title>Elicit Publishing Limited | Illuminating New Perspectives for a Sustainable Future</title>

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('ui/images/site-logo.png') ?>" type="image/png">

    <!-- Open Graph / Facebook Meta Tags -->
    <meta property="og:title" content="Elicit Publishing Limited | Illuminating New Perspectives for a Sustainable Future">
    <meta property="og:description" content="Elicit Publishing Limited is a forward-thinking publishing house dedicated to uncovering hidden ideas and clarifying complex concepts to illuminate new perspectives and contribute to global knowledge frontiers. We aim to solve the world’s most pressing problems by addressing issues like poverty, inequality, climate change, and sustainability.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= base_url() ?>">
    <meta property="og:image" content="<?= base_url('ui/images/site-logo.png') ?>">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Elicit Publishing Limited">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Elicit Publishing Limited | Illuminating New Perspectives for a Sustainable Future">
    <meta name="twitter:description" content="Elicit Publishing Limited is a forward-thinking publishing house dedicated to uncovering hidden ideas and clarifying complex concepts to illuminate new perspectives and contribute to global knowledge frontiers. We aim to solve the world’s most pressing problems by addressing issues like poverty, inequality, climate change, and sustainability.">
    <meta name="twitter:image" content="<?= base_url('ui/images/site-logo.png') ?>">
    <meta name="twitter:site" content="@ElicitPublishing">
    <meta name="twitter:creator" content="@ElicitPublishing">

    <!-- Canonical URL -->
    <link rel="canonical" href="<?= base_url() ?>">

    <!-- Stylesheets -->
    <link href="<?= base_url('ui/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link href="<?= base_url('ui/css/sequence-theme.basic.css') ?>" rel="stylesheet" media="all">
    <link href="<?= base_url('ui/css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('ui/css/bootstrap-dropdownhover.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('ui/css/ekko-lightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('ui/css/main.css') ?>" rel="stylesheet">
    <link href="<?= base_url('ui/css/style.css') ?>" rel="stylesheet">

    <!-- Modernizr Script -->
    <script src="<?= base_url('ui/js/modernizr-2.8.3.min.js') ?>"></script>

    <script type="application/ld+json">
    <?php
        if (isset($jsonld)) {
            echo $jsonld;
        } else {
            $jsonData = [
                "@context" => "https://schema.org",
                "@type" => "Organization",
                "name" => "Elicit Publishing Limited",
                "url" => base_url(),
                "logo" => base_url('ui/images/site-logo.png'),
                "description" => "Elicit Publishing Limited is a forward-thinking publishing house dedicated to uncovering hidden ideas and clarifying complex concepts to illuminate new perspectives and contribute to global knowledge frontiers. We aim to solve the world’s most pressing problems by addressing issues like poverty, inequality, climate change, and sustainability.",
                "foundingDate" => "2024", // Replace with actual founding year
                "founder" => [
                    "@type" => "Organization",
                    "name" => "Elicit Publishing Limited"
                ],
                "address" => [
                    "@type" => "PostalAddress",
                    "streetAddress" => "667 E 187Th Street, Apt 8, Bronx",
                    "addressLocality" => "New York",
                    "postalCode" => "10458",
                    "addressCountry" => "United States"
                ],
                "contactPoint" => [
                    "@type" => "ContactPoint",
                    "telephone" => "",
                    "contactType" => "Journal Subscription",
                    "email" => "subscriptions@elicitpublisher.com",
                    "availableLanguage" => ["English"]
                ],
                "sameAs" => [
                    "https://twitter.com/ElicitPublishing",
                    "https://facebook.com/ElicitPublishing",
                    "https://linkedin.com/company/elicit-publishing-limited"
                ],
                "mission" => "At Elicit Publishing Limited, we bring hidden ideas to life and clarify complex concepts that drive global progress. Committed to publishing high-quality works addressing urgent issues like poverty, inequality, and climate change, we support the SDGs and empower authors to advance a more inclusive, equitable, and sustainable world.",
                "focusArea" => [
                    ["@type" => "Thing", "name" => "Poverty"],
                    ["@type" => "Thing", "name" => "Inequality"],
                    ["@type" => "Thing", "name" => "Climate Change"],
                    ["@type" => "Thing", "name" => "Sustainability"]
                ],
                "goals" => [
                    "@type" => "Thing",
                    "name" => "Sustainable Development Goals (SDGs) 2030",
                    "description" => "Contributing to the achievement of the United Nations Sustainable Development Goals by addressing global challenges through transformative ideas and innovation."
                ]
            ];
            echo json_encode($jsonData, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
        }
    ?>
    </script>
</head>

<body class="auth-theme-rashmore">
    <header class="sabbi-site-head">
        <nav class="navbar navbar-white navbar-kawsa navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button aria-controls="navbar" aria-expanded="false" class="navbar-toggle collapsed" data-target="#navbar" data-toggle="collapse" type="button"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="/"><img alt="" class="img-responsive" src="<?=base_url('ui/images/site-logo.png')?>"></a>
                </div>
                <div class="navbar-collapse collapse sabbi-navbar-collapse  navbar-nav-hov_underline" id="navbar">
                    <div class="nav-btn-wrap"><a href="https://journal.elicitpublisher.com" target="_blank" class="btn btn-primary pull-right">Access Profile</a></div>
                    <ul class="nav navbar-nav navbar-right" id="menu-main-nav">
                        <li class="active">
                            <a href="/" title="Home">Home</a>
                        </li>
                        <li>
                            <a href="#about" >About Us</a>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" href="#" title="Publications" data-animations="zoomIn">Publications <span class="caret"></span></a>
                            <ul class=" dropdown-menu" role="menu">
                                <!-- <li>
                                    <a href="lab_book.html" title="Books">Books</a>
                                </li>
                                <li>
                                    <a href="lab_journal.html" title="Journal Articles">Journal Articles</a>
                                </li>
                                <li>
                                    <a href="lab_conf-talk.html" title="Conferences and Talks">Conferences and Talks</a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>