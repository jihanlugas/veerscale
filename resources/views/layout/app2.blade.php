<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="http://nodemodules.web/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="http://nodemodules.web/material-components-web/dist/material-components-web.min.css" rel="stylesheet">
    <title>Shorai Development</title>
</head>
<body>

<nav class="g-navbar">
    <ul class="g-navbar-nav">
        <li class="g-logo">
            <a href="#" class="g-nav-link text-decoration-none">
                <span class="g-link-text">Verrscale</span>
                <i class="material-icons g-color">
                    mail_outline
                </i>
            </a>
        </li>
        <li class="g-nav-item">
            <a href="#" class="g-nav-link text-decoration-none">
                <i class="material-icons g-color">
                    mail_outline
                </i>
                <span class="g-link-text">mail_outline</span>
            </a>
        </li>
        <li class="g-nav-item">
            <a href="#" class="g-nav-link text-decoration-none">
                <i class="material-icons g-color">
                    email
                </i>
                <span class="g-link-text">email</span>
            </a>
        </li>
        <li class="g-nav-item">
            <a href="#" class="g-nav-link text-decoration-none">
                <i class="material-icons g-color">
                    duo
                </i>
                <span class="g-link-text">duo</span>
            </a>
        </li>
        <li class="g-nav-item">
            <a href="#" class="g-nav-link text-decoration-none">
                <i class="material-icons g-color">
                    forum
                </i>
                <span class="g-link-text">forum</span>
            </a>
        </li>
    </ul>
</nav>

<main>
    <h1>This Is Header</h1>

    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, dolor eius in nam nihil quaerat ratione
        repellat voluptas? Ab accusamus, ad at atque autem beatae blanditiis, debitis distinctio dolore doloremque
        doloribus earum eligendi est facilis id illo impedit incidunt laudantium magnam minima molestiae mollitia nemo
        neque nihil officiis pariatur praesentium quisquam quo recusandae, repellendus rerum saepe sapiente suscipit
        ullam vero vitae voluptas! Nemo odit repellat sapiente sint tempora! Commodi facere obcaecati quaerat. Ab alias
        aliquam aliquid, aperiam architecto aspernatur autem commodi consequatur eius enim eos fugit impedit incidunt
        laudantium minus mollitia necessitatibus nisi numquam omnis provident quae quidem rem repellendus repudiandae
        rerum sapiente sint suscipit ullam ut veritatis. Animi debitis delectus eius eum neque non perferendis, quae
        quasi tempore voluptatum. Ab alias, aliquid architecto atque consectetur debitis dicta dolorem doloribus eius
        enim eos eveniet harum hic impedit ipsa laboriosam minima nam nisi numquam, obcaecati officia porro reiciendis
        rem sapiente sed, sequi tenetur totam ullam vel veniam voluptate voluptatem voluptates voluptatibus! Aspernatur
        assumenda consequuntur corporis eum iste mollitia tempora velit! Ab accusamus aliquam enim ex impedit iure
        necessitatibus nesciunt non! Expedita mollitia nesciunt odio suscipit voluptas. Animi, at, beatae deleniti dolor
        doloremque ducimus eligendi, facere fuga ipsum mollitia nisi quia quibusdam ratione temporibus velit veniam
        veritatis voluptatum. Dignissimos impedit perferendis, quia reiciendis unde voluptatem. Accusantium asperiores
        aspernatur culpa cumque deleniti deserunt dignissimos dolores esse est excepturi exercitationem facere fugiat
        inventore ipsum itaque iure molestiae molestias nam non nostrum numquam obcaecati, omnis porro quis quo ratione
        saepe sed tempora tempore temporibus vel veniam voluptatem voluptatibus. Adipisci aliquid atque aut beatae
        consequatur cumque, deserunt distinctio doloremque fugit impedit inventore ipsa iusto laboriosam molestiae
        mollitia necessitatibus neque nobis nostrum porro qui quibusdam quo ratione sapiente sed sunt suscipit velit
        veritatis? Ad, amet corporis culpa dolore dolores eaque ipsa maxime pariatur rem repellat voluptates
        voluptatibus?</p>
</main>

@yield('sidebar')
@yield('container')


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://nodemodules.web/jquery/dist/jquery.slim.min.js"></script>
<script src="http://nodemodules.web/popper.js/dist/umd/popper.min.js"></script>
<script src="http://nodemodules.web/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="http://nodemodules.web/material-components-web/dist/material-components-web.min.js"></script>

<script src="{{ asset('js/app.js') }}"></script>

@stack('script')
</body>
</html>
