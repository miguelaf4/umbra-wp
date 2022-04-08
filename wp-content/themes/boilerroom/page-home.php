<?php
/**
 * Template Name: Home Page
 *
 * This is custom template, that you can select from template option when adding new page/post/custom-post.
 * To modify template, simply rename this file and change Template Name below
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php get_header(); ?>


<main>
    <section class="hero">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100 px-0">
                    <div class="overlay"></div>
                    <img src="<?php echo get_field('hero_img')['url'] ?>" alt="">
                </div>
                <div class="col-12 pl-md-80 pl-lg-150 text-float">
                    <h1 class="display">Find your <br> true place.</h1>
                    <div class="d-flex flex-column flex-md-row mt-30">
                        <a href="#concepto" class="btn btn-light mr-md-15 mb-15 mb-md-0 ">Conoce umbra</a>
                        <a href="#contacto" class="btn btn-dark">Contáctanos</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="concepto">
        <div class="container-fluid">
            <div class="row">
                <div
                    class="col-12 col-lg-6 d-flex flex-column justify-content-center py-60 py-md-150 py-lg-60 px-30 px-lg-80">
                    <p class="pb-15">
                        Desarollo pensado para elevar las experiencias de sus habitantes con departementos que se
                        ajustan a las necesidades de un concepto de vida dinámico e integral.
                    </p>
                    <p>Umbra está formado por:</p>
                    <ul class="body-text">
                        <li>1 torre de 6 niveles</li>
                        <li>28 departamentos</li>
                        <li>4 diferentes modelos</li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6 px-0">
                    <img src="<?php echo get_field('concepto_img_1')['url'] ?>" alt="">
                </div>
            </div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-6 px-0">
                    <img src="<?php echo get_field('concepto_img_2')['url'] ?>" alt="">
                </div>
                <div
                    class="col-12 col-lg-6 bg-grey c-black d-flex flex-column justify-content-center py-60 py-md-150 py-lg-60 px-30 px-lg-80">
                    <h1 class="pb-30">UMBRA, ¿Por qué es tu mejor opción para INVERTIR?</h1>
                    <ul class="body-text">
                        <li class="pb-15">Ubicación privilegiada al norte de Mérida, Yucatán.</li>
                        <li class="pb-15">Zona con gran desarrollo y plusvalía.</li>
                        <li class="pb-15">Sector de alta rentabilidad impulsada por su cercanía a universidades,
                            centros comerciales y vialidades principales (Periférico, carretera Mérida-Progreso)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white" id="departamentos">
        <div class="container c-black py-60">
            <div class="row">
                <div class="col-12 pr-0 pr-lg-15 col-lg-3 d-flex align-items-center">
                    <ul class="nav nav-menu flex-lg-column" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active h1" id="black-tab" data-toggle="tab" href="#black" role="tab"
                                aria-controls="black" aria-selected="true">Modelo Black</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link h1" id="duplex-tab" data-toggle="tab" href="#duplex" role="tab"
                                aria-controls="duplex" aria-selected="false">Modelo Duplex</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link h1" id="grey-tab" data-toggle="tab" href="#grey" role="tab"
                                aria-controls="grey" aria-selected="false">Modelo Grey</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link h1" id="white-tab" data-toggle="tab" href="#white" role="tab"
                                aria-controls="white" aria-selected="false">Modelo White</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-9">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="black" role="tabpanel" aria-labelledby="black-tab">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo get_field('modelo_black_img')['url'] ?>" alt="">
                                </div>
                                <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                                    <h1 class="pb-15 pt-15 pt-md-0">Caractéristicas</h1>
                                    <ul class="nav flex-md-column">
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABYgAAAWIBXyfQUwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKOSURBVHic7Zo/aNVAHMc/qRULFpXiUhR0KSJqFwcHQQfRSRQH3cTNQShU0EUHXURRUFQUh06dHRQVURTqYFdd6uDqIhVUHv55/n0Ov4Se16Yx5nK/l3f3gfDyu7tcvvm+3F2SO4iETVKQPwKs8SGkW7kBdHp563PnVTMJ3oD+gvwHwDsfQiKRiAoJ8MyIXwDjRjwOHPCqyDP9wA4j7lj5I1Z+zxH8MBgNKFl+M9JvNHkz+7x4B0QDtAVoEw3QFqBNNEBbgDbRAG0B2kQDtAUUsAJYDwzUdYKib4JV2ACMpvvvgac55ZYB+4z4EXLhE8Bu5E/6DtwCjgO/XQs1v5NPWXn2vMCmEvWeNI77BWzLKXfKOsdG4BjwBZgFXhl5e0ucP48pFOYF+hAzl1jpaxEDbG4it/4ocNpIX1qHMF9sBY5aaZeB5VZaNl03mx4zmca3gbuuRfnuBM8Dw+n+LuDgAmUyA8aQCx4EngNngNWuBfk2YCVwAel8r+SUSZDO7xpzTWY7MANcci2ozlEgj8PIsLYljTv8PUudAJ+BJwscO+NajE8DHgN7kAs8ZKRPAkeMOAGmkbugdnw2gTHgk5V2D7jvUcM8fBrwBjhrxN+AE9TwYFMG353gVWT2CeAi8Jr5BhStWnGK707wJ9KjDwCtNK1nDbiOPM9ntNPfr+mW8RAYMuIWHqnTgDZzF70YP4APNepYlG5/Ha6daIC2AG2iAdoCtAneAI23wSoMAjsr1mE+czTOgHU4fnkKvgkEb0DTmoDNNHCnSgVNN+AlFb8TBt8EogHaArSJBmgL0KbsKHAO+FiHkH9klesKyxqw37UAbYJvAsEbkCALETLawFsjHkKWq3QrLWT5TSTyn/wBvvaWJB7YsUEAAAAASUVORK5CYII=">
                                                81
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGJSURBVHic7ZhNTsMwEIVfUW9Bw5ILtBeBWyIQK0SrsiOw5CiVUC8Ai9jIOL+Nxx5beZ9kpbXS0ZtXJ54xQAghhBBCSB8VgCcAZwA/hYwzgGcAtxLJnzJIaO44AdiEGPBoAr0AuA4JlJgNgFc02h9CAtllH+SiEhUa7d8hQexSKpVR/VeJhGQLDdAWoA0N0BagDQ3QFqANDZjxm5DmaKhJiRU3CL+SkmqO/CYlVtzgStYPENoc9TUpseKKGyDRHHU1KbHiihsg1RxlE5e7gLYAbWhAx5y7H1v6nq25I3XcyXVC6Yegl9YJLUo9BB1j8iFpyYegY0w6JJXaj3OllR93AW0B2tAAbQHa0ABtAdrQAHP9hGxNnutw86sBYOVMLJHV2p9QkZGevz988e8AfwUs7lGwK+BDVYUOddek+7a8N5/3qRRF4IAmhzvz/aJucGuuX/K6kmG1b/tuGDJg5wUpEat9N3iXQ1fxUMnrSsYNhguiFrV34zGywBS84X9O77pyCCGEEEJIHvwCRZGiyGw32/IAAAAASUVORK5CYII=">
                                                2
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABuwAAAbsBOuzj4gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAVISURBVHic7ZtbaB9FFMZ/J5cKJq3aQhM0eMFUaZoqWJJKaUtSTSre8EGwLwURAkWt1hfNQ33wFoU+CAriFfGpgmKxEZTaFm3VxkRQqRewqDGJNA1eor2lrfX4MDPNts1ld3YmG2k+WOa/mz3fOfPtmZ3ZmQnAW4AGPg4AdarKdD9KgDsJj/nAigi8wVGW+L0CGAjA+SawFJAAXNGRFGBAVXvzEorISF6OqURSgDdE5GgAzmsCcEwZyoAhTJtdGZj7QGC+KBCgDtP+O4C5wPPAtx5cTwHzgGeB3cBWVT0ZKM54cN0B0Ivpwm7y6U4S9k1Fd21Zu8FzGmWT35IZt4tIDbBHVX+MwB8UMQR4yJYnRWSjqj4TwUcwxGgCXwPfA6VAh4gsieAjGGIIsEFV64CdmF7mhgg+giGGANUi0gjU2vM/IvgIhhjvgM2J34PAlgg+giFWN3gY+AAzJvg9ko8giJEBzar6UQTeKDjnB0IzAhQdQNGYEaDoAIrGjABFB1A0ZgQoOoCiEWMkCICIzAJagYpYPjyhQJeq9kFEAYCHgSci8ueCiOwEbo4pQI0th4D9Ef1kRQlmJnwVsCmmAA6vq2r7FPhJDRG5DdgKrBlLgAoRudCD171QK639LHt+nidfLJQAbppuROycPiLSC1xWUFBF4dHkwsbLhN8nMF2P48BjQMmpDAAQkTlWiLswS2WbPJV9HFiPmR6715MjBtYBTwPbVHU1nNENqurfIvIlRoAFqjrs40VEdmAEWOzLEQMicpX9+bG7NtZIcK8tr83h6xNMqi20WTVd0GDLXe7CWAJ8Y8taEfEaxdmJULc4staHIzTsVH09MAJ0u+tnCWCHiPvt39py+PzQlvfl4AiJB225Q1WPn7o6zlL3A5gUHgJmey6Xz8csiihwT5FL4EAjcALz9l942t/GMZgF/GKD78jhuM1yHARqC6p8JbBvvLpMZHi3NfoXWOvpXBh9IX4FzJviypcD71j/PwPnpxbAErxijU8At3oGsQgYtjx7gaoprPwW6/cY0DLmfZOQlALvJUS43zOYeqDf8vQCawCJWPllQJf1N8wE23bSkFUA7zM6jHwJKPcI6hLM3gHH0w2sDFzxWuDthI9+oH5Cm5TEpZjdX454O3CBR4BzgM4EjwLvThZkCt5q4Dn7lne8PUDNZLanfQtMBhFpA17ADKG/A25Rj92lIrIc2AisTlzuwwxR9wC/YpbWf8O8hJOYC1TZSi8BmjATHG5rbg/wJNCpaSrnoXYL8BdG5UFSqDwBVwMmA0J84e0CWrPGkCkDHERkEWb9vwbTzTWp56ZIO3l6zJ5uxoxBauxRjWl+DorJioHEsQ7z9K9W1R8yB5Dj6S3F9Ax5B0sXMfoUMw+WgEPW9jof/97rAqr6Oea7H6BdRJo9qZIfXIc87J1NpY/zvAsjHcCnmBR8xJMjlABeX665BLDt3m2EbBGRSz1oXOAKHPGwP2zLQjIATAao5brRw94JcFRVz+zy0qDQJoCq/okZE4DfLJIL3Cf9k3aFZQCYrhBgsYety4D/tQBdtvSZ/6uz5U+evp3dFT7GoQRww1Cfpbbltuzx9O3smnyMQwlQZcvyLEYiUgpcb0+7J7p3Aji7BSJycVbj0AIczGi3DJgN/AN85uPYfoz12dNVWe1DC9Cf0W6DLTtVdSiH/9dsuT6rYWgBUv/nqYhcCdxhT1/M6f9VTBY1ikhrFsNQ+wOcAEdE5PKUNu2YBzAI7MtgNx52A82YeYZtaY28PofPIhEZZFSE6YAGVf0izY2hmsD2QDwhMIBZ0EmF/wDmz+gcgm2CMAAAAABJRU5ErkJggg==">
                                                2
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASqSURBVHic7dlZqFVVHMfxz1VzeAnTGw1aSVGmEmikRZrVU4RlIwVNgplENIDRJD2ch8SCICLIsbK0ogIrMkp7aCAttHl6KAjRwoomiyy96O1hrd1dXs+5Z59z9rmK7S9sztrrrP3//9baa/ivtSkpKSkpKSkpKSkpKSkpKSkpKSn5P9GRo8wxOBdHtVlLNbbgVfyxH3wbgkexC9378foJ57e5rvvQgddaFF7ktRPT2lXRaszFkuT+DXyEsbg45u3GQ/G3L6Zhakyvx7t18jMG4QphCMKPmIytdfy1zFB8p6f170v+ezHJX5XTXiV5ppIjP+VYoeJZuQ8xLKffXAyokncDRsX0NiyI6XGYGdPduL9IITXYgkuEIQCnYqV8k3cuejfAENyZ3C/E3zF9b1L+JXxRlIg6bMCNyf1luKMo470bYC5Gx/Q2LI/pE4TxmLGwKAE5WYFFvfzPKMJw2gB9vf17hEkJ1mJTEc4b5Da8FdMD8AzGt2o0bYBab380rk3KLbB/6MLl+DbeH4rVGN6K0eytDsVdSf43uDWmp2NwTP+GM+OVl6n1i5jay39fvI/jY3qssBpdib8a0LQPt+ifgKaS+KwUaHc7HsZxzVR+kL3X/XZeVyd+r2mD/S48L1+vQ1hPz8Pr8f4HPJn34Qb5DM8KQjPfV+GUFmwOFGKTk6r8t0noFS8I+5mazNPTgktbELO/GCAsieuwx7694nvMR2ctA5WkcKWtUtvPBOEl7rBvQ+zAsljmPwZpjIHCOE7PBrbhafU3RdW4FCcWYCfjS2E5nx9/b9IT1g/DHMzGY7hZHBoV+XvALNUnn1lNiD27IDt9cYgwz2ys4msF1TdDBxNdQsQ4RVgZ1iT/XYfxjQ6BVULrpSHoV0LXbZS3hY3NacKLaNZOXjbgQqERZgir0PRGG2A3nipQ1Op49Scf6NlIHXGwD4F6dDTaA0YKJ8RZyLlZ2KH9UpympujEOYKuDkHXm3LoytsAnXhACF8H9/pvlzAs7s7jsGDq6VoZdf1cy0CeITABnwrrZ28nYt6cWGZcDntFMR6f1NF1fSxT89ygXg84XAgxj4733UKM/U58dpowixMCjnWYqP09oTP6yoKcerrWYpIaPaGidiC0PPnvd1xU5fmZwpebrNySKmWKphVdFb3qe3uSsTIxMELPV6E9NZxkXJDY2InDGq1RA7Sia7hQxyxvXgfOwHvxgW4hcvpc2GLOjvkbcXpMDxDCS0Lg0p2UmRzTj+PrZmqXg1Z0rRdOs7Jj9SmZ0TX6Pmh4MBGQHmSkBxyP1LHRjqsVXS9nrSY+kMbJvcnzIaIrR5miaVbXK+JBb7YKbBfi5MnCpuFIjBEOGwkHoxlZ9+oWTngyzkrSzwnBSDtoRdciPCHnsX462XTr+SxWjZlJuWyyaRf9qmtZYuBPYVat5mR7Um5xo06aoDBd9cZQpxBJjUryNgkza5e9Aw7Cp+tJ+icQ+ljPh5w8uibi12acjZfv2HwrTm7GQZOM609dI4Vut7OKg3+EKGtEq06a1LU0aqima3E9XY1+Zx8hbDvHxPvNwna4qa5VICOEbfoYofKbHRi6SkpKSkoOaP4FbQchm9uQCEMAAAAASUVORK5CYII=">
                                                1
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="duplex" role="tabpanel" aria-labelledby="duplex-tab">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo get_field('modelo_duplex_img')['url'] ?>" alt="">
                                </div>
                                <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                                    <h1 class="pb-15 pt-15 pt-md-0">Caractéristicas</h1>
                                    <ul class="nav flex-md-column">
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABYgAAAWIBXyfQUwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKOSURBVHic7Zo/aNVAHMc/qRULFpXiUhR0KSJqFwcHQQfRSRQH3cTNQShU0EUHXURRUFQUh06dHRQVURTqYFdd6uDqIhVUHv55/n0Ov4Se16Yx5nK/l3f3gfDyu7tcvvm+3F2SO4iETVKQPwKs8SGkW7kBdHp563PnVTMJ3oD+gvwHwDsfQiKRiAoJ8MyIXwDjRjwOHPCqyDP9wA4j7lj5I1Z+zxH8MBgNKFl+M9JvNHkz+7x4B0QDtAVoEw3QFqBNNEBbgDbRAG0B2kQDtAUUsAJYDwzUdYKib4JV2ACMpvvvgac55ZYB+4z4EXLhE8Bu5E/6DtwCjgO/XQs1v5NPWXn2vMCmEvWeNI77BWzLKXfKOsdG4BjwBZgFXhl5e0ucP48pFOYF+hAzl1jpaxEDbG4it/4ocNpIX1qHMF9sBY5aaZeB5VZaNl03mx4zmca3gbuuRfnuBM8Dw+n+LuDgAmUyA8aQCx4EngNngNWuBfk2YCVwAel8r+SUSZDO7xpzTWY7MANcci2ozlEgj8PIsLYljTv8PUudAJ+BJwscO+NajE8DHgN7kAs8ZKRPAkeMOAGmkbugdnw2gTHgk5V2D7jvUcM8fBrwBjhrxN+AE9TwYFMG353gVWT2CeAi8Jr5BhStWnGK707wJ9KjDwCtNK1nDbiOPM9ntNPfr+mW8RAYMuIWHqnTgDZzF70YP4APNepYlG5/Ha6daIC2AG2iAdoCtAneAI23wSoMAjsr1mE+czTOgHU4fnkKvgkEb0DTmoDNNHCnSgVNN+AlFb8TBt8EogHaArSJBmgL0KbsKHAO+FiHkH9klesKyxqw37UAbYJvAsEbkCALETLawFsjHkKWq3QrLWT5TSTyn/wBvvaWJB7YsUEAAAAASUVORK5CYII=">
                                                73
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGJSURBVHic7ZhNTsMwEIVfUW9Bw5ILtBeBWyIQK0SrsiOw5CiVUC8Ai9jIOL+Nxx5beZ9kpbXS0ZtXJ54xQAghhBBCSB8VgCcAZwA/hYwzgGcAtxLJnzJIaO44AdiEGPBoAr0AuA4JlJgNgFc02h9CAtllH+SiEhUa7d8hQexSKpVR/VeJhGQLDdAWoA0N0BagDQ3QFqANDZjxm5DmaKhJiRU3CL+SkmqO/CYlVtzgStYPENoc9TUpseKKGyDRHHU1KbHiihsg1RxlE5e7gLYAbWhAx5y7H1v6nq25I3XcyXVC6Yegl9YJLUo9BB1j8iFpyYegY0w6JJXaj3OllR93AW0B2tAAbQHa0ABtAdrQAHP9hGxNnutw86sBYOVMLJHV2p9QkZGevz988e8AfwUs7lGwK+BDVYUOddek+7a8N5/3qRRF4IAmhzvz/aJucGuuX/K6kmG1b/tuGDJg5wUpEat9N3iXQ1fxUMnrSsYNhguiFrV34zGywBS84X9O77pyCCGEEEJIHvwCRZGiyGw32/IAAAAASUVORK5CYII=">
                                                1
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABuwAAAbsBOuzj4gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAVISURBVHic7ZtbaB9FFMZ/J5cKJq3aQhM0eMFUaZoqWJJKaUtSTSre8EGwLwURAkWt1hfNQ33wFoU+CAriFfGpgmKxEZTaFm3VxkRQqRewqDGJNA1eor2lrfX4MDPNts1ld3YmG2k+WOa/mz3fOfPtmZ3ZmQnAW4AGPg4AdarKdD9KgDsJj/nAigi8wVGW+L0CGAjA+SawFJAAXNGRFGBAVXvzEorISF6OqURSgDdE5GgAzmsCcEwZyoAhTJtdGZj7QGC+KBCgDtP+O4C5wPPAtx5cTwHzgGeB3cBWVT0ZKM54cN0B0Ivpwm7y6U4S9k1Fd21Zu8FzGmWT35IZt4tIDbBHVX+MwB8UMQR4yJYnRWSjqj4TwUcwxGgCXwPfA6VAh4gsieAjGGIIsEFV64CdmF7mhgg+giGGANUi0gjU2vM/IvgIhhjvgM2J34PAlgg+giFWN3gY+AAzJvg9ko8giJEBzar6UQTeKDjnB0IzAhQdQNGYEaDoAIrGjABFB1A0ZgQoOoCiEWMkCICIzAJagYpYPjyhQJeq9kFEAYCHgSci8ueCiOwEbo4pQI0th4D9Ef1kRQlmJnwVsCmmAA6vq2r7FPhJDRG5DdgKrBlLgAoRudCD171QK639LHt+nidfLJQAbppuROycPiLSC1xWUFBF4dHkwsbLhN8nMF2P48BjQMmpDAAQkTlWiLswS2WbPJV9HFiPmR6715MjBtYBTwPbVHU1nNENqurfIvIlRoAFqjrs40VEdmAEWOzLEQMicpX9+bG7NtZIcK8tr83h6xNMqi20WTVd0GDLXe7CWAJ8Y8taEfEaxdmJULc4staHIzTsVH09MAJ0u+tnCWCHiPvt39py+PzQlvfl4AiJB225Q1WPn7o6zlL3A5gUHgJmey6Xz8csiihwT5FL4EAjcALz9l942t/GMZgF/GKD78jhuM1yHARqC6p8JbBvvLpMZHi3NfoXWOvpXBh9IX4FzJviypcD71j/PwPnpxbAErxijU8At3oGsQgYtjx7gaoprPwW6/cY0DLmfZOQlALvJUS43zOYeqDf8vQCawCJWPllQJf1N8wE23bSkFUA7zM6jHwJKPcI6hLM3gHH0w2sDFzxWuDthI9+oH5Cm5TEpZjdX454O3CBR4BzgM4EjwLvThZkCt5q4Dn7lne8PUDNZLanfQtMBhFpA17ADKG/A25Rj92lIrIc2AisTlzuwwxR9wC/YpbWf8O8hJOYC1TZSi8BmjATHG5rbg/wJNCpaSrnoXYL8BdG5UFSqDwBVwMmA0J84e0CWrPGkCkDHERkEWb9vwbTzTWp56ZIO3l6zJ5uxoxBauxRjWl+DorJioHEsQ7z9K9W1R8yB5Dj6S3F9Ax5B0sXMfoUMw+WgEPW9jof/97rAqr6Oea7H6BdRJo9qZIfXIc87J1NpY/zvAsjHcCnmBR8xJMjlABeX665BLDt3m2EbBGRSz1oXOAKHPGwP2zLQjIATAao5brRw94JcFRVz+zy0qDQJoCq/okZE4DfLJIL3Cf9k3aFZQCYrhBgsYety4D/tQBdtvSZ/6uz5U+evp3dFT7GoQRww1Cfpbbltuzx9O3smnyMQwlQZcvyLEYiUgpcb0+7J7p3Aji7BSJycVbj0AIczGi3DJgN/AN85uPYfoz12dNVWe1DC9Cf0W6DLTtVdSiH/9dsuT6rYWgBUv/nqYhcCdxhT1/M6f9VTBY1ikhrFsNQ+wOcAEdE5PKUNu2YBzAI7MtgNx52A82YeYZtaY28PofPIhEZZFSE6YAGVf0izY2hmsD2QDwhMIBZ0EmF/wDmz+gcgm2CMAAAAABJRU5ErkJggg==">
                                                1.5
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASqSURBVHic7dlZqFVVHMfxz1VzeAnTGw1aSVGmEmikRZrVU4RlIwVNgplENIDRJD2ch8SCICLIsbK0ogIrMkp7aCAttHl6KAjRwoomiyy96O1hrd1dXs+5Z59z9rmK7S9sztrrrP3//9baa/ivtSkpKSkpKSkpKSkpKSkpKSkpKSn5P9GRo8wxOBdHtVlLNbbgVfyxH3wbgkexC9378foJ57e5rvvQgddaFF7ktRPT2lXRaszFkuT+DXyEsbg45u3GQ/G3L6Zhakyvx7t18jMG4QphCMKPmIytdfy1zFB8p6f170v+ezHJX5XTXiV5ppIjP+VYoeJZuQ8xLKffXAyokncDRsX0NiyI6XGYGdPduL9IITXYgkuEIQCnYqV8k3cuejfAENyZ3C/E3zF9b1L+JXxRlIg6bMCNyf1luKMo470bYC5Gx/Q2LI/pE4TxmLGwKAE5WYFFvfzPKMJw2gB9vf17hEkJ1mJTEc4b5Da8FdMD8AzGt2o0bYBab380rk3KLbB/6MLl+DbeH4rVGN6K0eytDsVdSf43uDWmp2NwTP+GM+OVl6n1i5jay39fvI/jY3qssBpdib8a0LQPt+ifgKaS+KwUaHc7HsZxzVR+kL3X/XZeVyd+r2mD/S48L1+vQ1hPz8Pr8f4HPJn34Qb5DM8KQjPfV+GUFmwOFGKTk6r8t0noFS8I+5mazNPTgktbELO/GCAsieuwx7694nvMR2ctA5WkcKWtUtvPBOEl7rBvQ+zAsljmPwZpjIHCOE7PBrbhafU3RdW4FCcWYCfjS2E5nx9/b9IT1g/DHMzGY7hZHBoV+XvALNUnn1lNiD27IDt9cYgwz2ys4msF1TdDBxNdQsQ4RVgZ1iT/XYfxjQ6BVULrpSHoV0LXbZS3hY3NacKLaNZOXjbgQqERZgir0PRGG2A3nipQ1Op49Scf6NlIHXGwD4F6dDTaA0YKJ8RZyLlZ2KH9UpympujEOYKuDkHXm3LoytsAnXhACF8H9/pvlzAs7s7jsGDq6VoZdf1cy0CeITABnwrrZ28nYt6cWGZcDntFMR6f1NF1fSxT89ygXg84XAgxj4733UKM/U58dpowixMCjnWYqP09oTP6yoKcerrWYpIaPaGidiC0PPnvd1xU5fmZwpebrNySKmWKphVdFb3qe3uSsTIxMELPV6E9NZxkXJDY2InDGq1RA7Sia7hQxyxvXgfOwHvxgW4hcvpc2GLOjvkbcXpMDxDCS0Lg0p2UmRzTj+PrZmqXg1Z0rRdOs7Jj9SmZ0TX6Pmh4MBGQHmSkBxyP1LHRjqsVXS9nrSY+kMbJvcnzIaIrR5miaVbXK+JBb7YKbBfi5MnCpuFIjBEOGwkHoxlZ9+oWTngyzkrSzwnBSDtoRdciPCHnsX462XTr+SxWjZlJuWyyaRf9qmtZYuBPYVat5mR7Um5xo06aoDBd9cZQpxBJjUryNgkza5e9Aw7Cp+tJ+icQ+ljPh5w8uibi12acjZfv2HwrTm7GQZOM609dI4Vut7OKg3+EKGtEq06a1LU0aqima3E9XY1+Zx8hbDvHxPvNwna4qa5VICOEbfoYofKbHRi6SkpKSkoOaP4FbQchm9uQCEMAAAAASUVORK5CYII=">
                                                1
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="grey" role="tabpanel" aria-labelledby="grey-tab">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo get_field('modelo_grey_img')['url'] ?>" alt="">
                                </div>
                                <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                                    <h1 class="pb-15 pt-15 pt-md-0">Caractéristicas</h1>
                                    <ul class="nav flex-md-column">
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABYgAAAWIBXyfQUwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKOSURBVHic7Zo/aNVAHMc/qRULFpXiUhR0KSJqFwcHQQfRSRQH3cTNQShU0EUHXURRUFQUh06dHRQVURTqYFdd6uDqIhVUHv55/n0Ov4Se16Yx5nK/l3f3gfDyu7tcvvm+3F2SO4iETVKQPwKs8SGkW7kBdHp563PnVTMJ3oD+gvwHwDsfQiKRiAoJ8MyIXwDjRjwOHPCqyDP9wA4j7lj5I1Z+zxH8MBgNKFl+M9JvNHkz+7x4B0QDtAVoEw3QFqBNNEBbgDbRAG0B2kQDtAUUsAJYDwzUdYKib4JV2ACMpvvvgac55ZYB+4z4EXLhE8Bu5E/6DtwCjgO/XQs1v5NPWXn2vMCmEvWeNI77BWzLKXfKOsdG4BjwBZgFXhl5e0ucP48pFOYF+hAzl1jpaxEDbG4it/4ocNpIX1qHMF9sBY5aaZeB5VZaNl03mx4zmca3gbuuRfnuBM8Dw+n+LuDgAmUyA8aQCx4EngNngNWuBfk2YCVwAel8r+SUSZDO7xpzTWY7MANcci2ozlEgj8PIsLYljTv8PUudAJ+BJwscO+NajE8DHgN7kAs8ZKRPAkeMOAGmkbugdnw2gTHgk5V2D7jvUcM8fBrwBjhrxN+AE9TwYFMG353gVWT2CeAi8Jr5BhStWnGK707wJ9KjDwCtNK1nDbiOPM9ntNPfr+mW8RAYMuIWHqnTgDZzF70YP4APNepYlG5/Ha6daIC2AG2iAdoCtAneAI23wSoMAjsr1mE+czTOgHU4fnkKvgkEb0DTmoDNNHCnSgVNN+AlFb8TBt8EogHaArSJBmgL0KbsKHAO+FiHkH9klesKyxqw37UAbYJvAsEbkCALETLawFsjHkKWq3QrLWT5TSTyn/wBvvaWJB7YsUEAAAAASUVORK5CYII=">
                                                50
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGJSURBVHic7ZhNTsMwEIVfUW9Bw5ILtBeBWyIQK0SrsiOw5CiVUC8Ai9jIOL+Nxx5beZ9kpbXS0ZtXJ54xQAghhBBCSB8VgCcAZwA/hYwzgGcAtxLJnzJIaO44AdiEGPBoAr0AuA4JlJgNgFc02h9CAtllH+SiEhUa7d8hQexSKpVR/VeJhGQLDdAWoA0N0BagDQ3QFqANDZjxm5DmaKhJiRU3CL+SkmqO/CYlVtzgStYPENoc9TUpseKKGyDRHHU1KbHiihsg1RxlE5e7gLYAbWhAx5y7H1v6nq25I3XcyXVC6Yegl9YJLUo9BB1j8iFpyYegY0w6JJXaj3OllR93AW0B2tAAbQHa0ABtAdrQAHP9hGxNnutw86sBYOVMLJHV2p9QkZGevz988e8AfwUs7lGwK+BDVYUOddek+7a8N5/3qRRF4IAmhzvz/aJucGuuX/K6kmG1b/tuGDJg5wUpEat9N3iXQ1fxUMnrSsYNhguiFrV34zGywBS84X9O77pyCCGEEEJIHvwCRZGiyGw32/IAAAAASUVORK5CYII=">
                                                1
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABuwAAAbsBOuzj4gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAVISURBVHic7ZtbaB9FFMZ/J5cKJq3aQhM0eMFUaZoqWJJKaUtSTSre8EGwLwURAkWt1hfNQ33wFoU+CAriFfGpgmKxEZTaFm3VxkRQqRewqDGJNA1eor2lrfX4MDPNts1ld3YmG2k+WOa/mz3fOfPtmZ3ZmQnAW4AGPg4AdarKdD9KgDsJj/nAigi8wVGW+L0CGAjA+SawFJAAXNGRFGBAVXvzEorISF6OqURSgDdE5GgAzmsCcEwZyoAhTJtdGZj7QGC+KBCgDtP+O4C5wPPAtx5cTwHzgGeB3cBWVT0ZKM54cN0B0Ivpwm7y6U4S9k1Fd21Zu8FzGmWT35IZt4tIDbBHVX+MwB8UMQR4yJYnRWSjqj4TwUcwxGgCXwPfA6VAh4gsieAjGGIIsEFV64CdmF7mhgg+giGGANUi0gjU2vM/IvgIhhjvgM2J34PAlgg+giFWN3gY+AAzJvg9ko8giJEBzar6UQTeKDjnB0IzAhQdQNGYEaDoAIrGjABFB1A0ZgQoOoCiEWMkCICIzAJagYpYPjyhQJeq9kFEAYCHgSci8ueCiOwEbo4pQI0th4D9Ef1kRQlmJnwVsCmmAA6vq2r7FPhJDRG5DdgKrBlLgAoRudCD171QK639LHt+nidfLJQAbppuROycPiLSC1xWUFBF4dHkwsbLhN8nMF2P48BjQMmpDAAQkTlWiLswS2WbPJV9HFiPmR6715MjBtYBTwPbVHU1nNENqurfIvIlRoAFqjrs40VEdmAEWOzLEQMicpX9+bG7NtZIcK8tr83h6xNMqi20WTVd0GDLXe7CWAJ8Y8taEfEaxdmJULc4staHIzTsVH09MAJ0u+tnCWCHiPvt39py+PzQlvfl4AiJB225Q1WPn7o6zlL3A5gUHgJmey6Xz8csiihwT5FL4EAjcALz9l942t/GMZgF/GKD78jhuM1yHARqC6p8JbBvvLpMZHi3NfoXWOvpXBh9IX4FzJviypcD71j/PwPnpxbAErxijU8At3oGsQgYtjx7gaoprPwW6/cY0DLmfZOQlALvJUS43zOYeqDf8vQCawCJWPllQJf1N8wE23bSkFUA7zM6jHwJKPcI6hLM3gHH0w2sDFzxWuDthI9+oH5Cm5TEpZjdX454O3CBR4BzgM4EjwLvThZkCt5q4Dn7lne8PUDNZLanfQtMBhFpA17ADKG/A25Rj92lIrIc2AisTlzuwwxR9wC/YpbWf8O8hJOYC1TZSi8BmjATHG5rbg/wJNCpaSrnoXYL8BdG5UFSqDwBVwMmA0J84e0CWrPGkCkDHERkEWb9vwbTzTWp56ZIO3l6zJ5uxoxBauxRjWl+DorJioHEsQ7z9K9W1R8yB5Dj6S3F9Ax5B0sXMfoUMw+WgEPW9jof/97rAqr6Oea7H6BdRJo9qZIfXIc87J1NpY/zvAsjHcCnmBR8xJMjlABeX665BLDt3m2EbBGRSz1oXOAKHPGwP2zLQjIATAao5brRw94JcFRVz+zy0qDQJoCq/okZE4DfLJIL3Cf9k3aFZQCYrhBgsYety4D/tQBdtvSZ/6uz5U+evp3dFT7GoQRww1Cfpbbltuzx9O3smnyMQwlQZcvyLEYiUgpcb0+7J7p3Aji7BSJycVbj0AIczGi3DJgN/AN85uPYfoz12dNVWe1DC9Cf0W6DLTtVdSiH/9dsuT6rYWgBUv/nqYhcCdxhT1/M6f9VTBY1ikhrFsNQ+wOcAEdE5PKUNu2YBzAI7MtgNx52A82YeYZtaY28PofPIhEZZFSE6YAGVf0izY2hmsD2QDwhMIBZ0EmF/wDmz+gcgm2CMAAAAABJRU5ErkJggg==">
                                                1
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASqSURBVHic7dlZqFVVHMfxz1VzeAnTGw1aSVGmEmikRZrVU4RlIwVNgplENIDRJD2ch8SCICLIsbK0ogIrMkp7aCAttHl6KAjRwoomiyy96O1hrd1dXs+5Z59z9rmK7S9sztrrrP3//9baa/ivtSkpKSkpKSkpKSkpKSkpKSkpKSn5P9GRo8wxOBdHtVlLNbbgVfyxH3wbgkexC9378foJ57e5rvvQgddaFF7ktRPT2lXRaszFkuT+DXyEsbg45u3GQ/G3L6Zhakyvx7t18jMG4QphCMKPmIytdfy1zFB8p6f170v+ezHJX5XTXiV5ppIjP+VYoeJZuQ8xLKffXAyokncDRsX0NiyI6XGYGdPduL9IITXYgkuEIQCnYqV8k3cuejfAENyZ3C/E3zF9b1L+JXxRlIg6bMCNyf1luKMo470bYC5Gx/Q2LI/pE4TxmLGwKAE5WYFFvfzPKMJw2gB9vf17hEkJ1mJTEc4b5Da8FdMD8AzGt2o0bYBab380rk3KLbB/6MLl+DbeH4rVGN6K0eytDsVdSf43uDWmp2NwTP+GM+OVl6n1i5jay39fvI/jY3qssBpdib8a0LQPt+ifgKaS+KwUaHc7HsZxzVR+kL3X/XZeVyd+r2mD/S48L1+vQ1hPz8Pr8f4HPJn34Qb5DM8KQjPfV+GUFmwOFGKTk6r8t0noFS8I+5mazNPTgktbELO/GCAsieuwx7694nvMR2ctA5WkcKWtUtvPBOEl7rBvQ+zAsljmPwZpjIHCOE7PBrbhafU3RdW4FCcWYCfjS2E5nx9/b9IT1g/DHMzGY7hZHBoV+XvALNUnn1lNiD27IDt9cYgwz2ys4msF1TdDBxNdQsQ4RVgZ1iT/XYfxjQ6BVULrpSHoV0LXbZS3hY3NacKLaNZOXjbgQqERZgir0PRGG2A3nipQ1Op49Scf6NlIHXGwD4F6dDTaA0YKJ8RZyLlZ2KH9UpympujEOYKuDkHXm3LoytsAnXhACF8H9/pvlzAs7s7jsGDq6VoZdf1cy0CeITABnwrrZ28nYt6cWGZcDntFMR6f1NF1fSxT89ygXg84XAgxj4733UKM/U58dpowixMCjnWYqP09oTP6yoKcerrWYpIaPaGidiC0PPnvd1xU5fmZwpebrNySKmWKphVdFb3qe3uSsTIxMELPV6E9NZxkXJDY2InDGq1RA7Sia7hQxyxvXgfOwHvxgW4hcvpc2GLOjvkbcXpMDxDCS0Lg0p2UmRzTj+PrZmqXg1Z0rRdOs7Jj9SmZ0TX6Pmh4MBGQHmSkBxyP1LHRjqsVXS9nrSY+kMbJvcnzIaIrR5miaVbXK+JBb7YKbBfi5MnCpuFIjBEOGwkHoxlZ9+oWTngyzkrSzwnBSDtoRdciPCHnsX462XTr+SxWjZlJuWyyaRf9qmtZYuBPYVat5mR7Um5xo06aoDBd9cZQpxBJjUryNgkza5e9Aw7Cp+tJ+icQ+ljPh5w8uibi12acjZfv2HwrTm7GQZOM609dI4Vut7OKg3+EKGtEq06a1LU0aqima3E9XY1+Zx8hbDvHxPvNwna4qa5VICOEbfoYofKbHRi6SkpKSkoOaP4FbQchm9uQCEMAAAAASUVORK5CYII=">
                                                1
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="white" role="tabpanel" aria-labelledby="white-tab">
                            <div class="row justify-content-between">
                                <div class="col-12 col-md-7">
                                    <img src="<?php echo get_field('modelo_white_img')['url'] ?>" alt="">
                                </div>
                                <div class="col-12 col-md-4 d-flex flex-column justify-content-center">
                                    <h1 class="pb-15 pt-15 pt-md-0">Caractéristicas</h1>
                                    <ul class="nav flex-md-column">
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABYgAAAWIBXyfQUwAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAKOSURBVHic7Zo/aNVAHMc/qRULFpXiUhR0KSJqFwcHQQfRSRQH3cTNQShU0EUHXURRUFQUh06dHRQVURTqYFdd6uDqIhVUHv55/n0Ov4Se16Yx5nK/l3f3gfDyu7tcvvm+3F2SO4iETVKQPwKs8SGkW7kBdHp563PnVTMJ3oD+gvwHwDsfQiKRiAoJ8MyIXwDjRjwOHPCqyDP9wA4j7lj5I1Z+zxH8MBgNKFl+M9JvNHkz+7x4B0QDtAVoEw3QFqBNNEBbgDbRAG0B2kQDtAUUsAJYDwzUdYKib4JV2ACMpvvvgac55ZYB+4z4EXLhE8Bu5E/6DtwCjgO/XQs1v5NPWXn2vMCmEvWeNI77BWzLKXfKOsdG4BjwBZgFXhl5e0ucP48pFOYF+hAzl1jpaxEDbG4it/4ocNpIX1qHMF9sBY5aaZeB5VZaNl03mx4zmca3gbuuRfnuBM8Dw+n+LuDgAmUyA8aQCx4EngNngNWuBfk2YCVwAel8r+SUSZDO7xpzTWY7MANcci2ozlEgj8PIsLYljTv8PUudAJ+BJwscO+NajE8DHgN7kAs8ZKRPAkeMOAGmkbugdnw2gTHgk5V2D7jvUcM8fBrwBjhrxN+AE9TwYFMG353gVWT2CeAi8Jr5BhStWnGK707wJ9KjDwCtNK1nDbiOPM9ntNPfr+mW8RAYMuIWHqnTgDZzF70YP4APNepYlG5/Ha6daIC2AG2iAdoCtAneAI23wSoMAjsr1mE+czTOgHU4fnkKvgkEb0DTmoDNNHCnSgVNN+AlFb8TBt8EogHaArSJBmgL0KbsKHAO+FiHkH9klesKyxqw37UAbYJvAsEbkCALETLawFsjHkKWq3QrLWT5TSTyn/wBvvaWJB7YsUEAAAAASUVORK5CYII=">
                                                57
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAGJSURBVHic7ZhNTsMwEIVfUW9Bw5ILtBeBWyIQK0SrsiOw5CiVUC8Ai9jIOL+Nxx5beZ9kpbXS0ZtXJ54xQAghhBBCSB8VgCcAZwA/hYwzgGcAtxLJnzJIaO44AdiEGPBoAr0AuA4JlJgNgFc02h9CAtllH+SiEhUa7d8hQexSKpVR/VeJhGQLDdAWoA0N0BagDQ3QFqANDZjxm5DmaKhJiRU3CL+SkmqO/CYlVtzgStYPENoc9TUpseKKGyDRHHU1KbHiihsg1RxlE5e7gLYAbWhAx5y7H1v6nq25I3XcyXVC6Yegl9YJLUo9BB1j8iFpyYegY0w6JJXaj3OllR93AW0B2tAAbQHa0ABtAdrQAHP9hGxNnutw86sBYOVMLJHV2p9QkZGevz988e8AfwUs7lGwK+BDVYUOddek+7a8N5/3qRRF4IAmhzvz/aJucGuuX/K6kmG1b/tuGDJg5wUpEat9N3iXQ1fxUMnrSsYNhguiFrV34zGywBS84X9O77pyCCGEEEJIHvwCRZGiyGw32/IAAAAASUVORK5CYII=">
                                                1
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAABuwAAAbsBOuzj4gAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAAVISURBVHic7ZtbaB9FFMZ/J5cKJq3aQhM0eMFUaZoqWJJKaUtSTSre8EGwLwURAkWt1hfNQ33wFoU+CAriFfGpgmKxEZTaFm3VxkRQqRewqDGJNA1eor2lrfX4MDPNts1ld3YmG2k+WOa/mz3fOfPtmZ3ZmQnAW4AGPg4AdarKdD9KgDsJj/nAigi8wVGW+L0CGAjA+SawFJAAXNGRFGBAVXvzEorISF6OqURSgDdE5GgAzmsCcEwZyoAhTJtdGZj7QGC+KBCgDtP+O4C5wPPAtx5cTwHzgGeB3cBWVT0ZKM54cN0B0Ivpwm7y6U4S9k1Fd21Zu8FzGmWT35IZt4tIDbBHVX+MwB8UMQR4yJYnRWSjqj4TwUcwxGgCXwPfA6VAh4gsieAjGGIIsEFV64CdmF7mhgg+giGGANUi0gjU2vM/IvgIhhjvgM2J34PAlgg+giFWN3gY+AAzJvg9ko8giJEBzar6UQTeKDjnB0IzAhQdQNGYEaDoAIrGjABFB1A0ZgQoOoCiEWMkCICIzAJagYpYPjyhQJeq9kFEAYCHgSci8ueCiOwEbo4pQI0th4D9Ef1kRQlmJnwVsCmmAA6vq2r7FPhJDRG5DdgKrBlLgAoRudCD171QK639LHt+nidfLJQAbppuROycPiLSC1xWUFBF4dHkwsbLhN8nMF2P48BjQMmpDAAQkTlWiLswS2WbPJV9HFiPmR6715MjBtYBTwPbVHU1nNENqurfIvIlRoAFqjrs40VEdmAEWOzLEQMicpX9+bG7NtZIcK8tr83h6xNMqi20WTVd0GDLXe7CWAJ8Y8taEfEaxdmJULc4staHIzTsVH09MAJ0u+tnCWCHiPvt39py+PzQlvfl4AiJB225Q1WPn7o6zlL3A5gUHgJmey6Xz8csiihwT5FL4EAjcALz9l942t/GMZgF/GKD78jhuM1yHARqC6p8JbBvvLpMZHi3NfoXWOvpXBh9IX4FzJviypcD71j/PwPnpxbAErxijU8At3oGsQgYtjx7gaoprPwW6/cY0DLmfZOQlALvJUS43zOYeqDf8vQCawCJWPllQJf1N8wE23bSkFUA7zM6jHwJKPcI6hLM3gHH0w2sDFzxWuDthI9+oH5Cm5TEpZjdX454O3CBR4BzgM4EjwLvThZkCt5q4Dn7lne8PUDNZLanfQtMBhFpA17ADKG/A25Rj92lIrIc2AisTlzuwwxR9wC/YpbWf8O8hJOYC1TZSi8BmjATHG5rbg/wJNCpaSrnoXYL8BdG5UFSqDwBVwMmA0J84e0CWrPGkCkDHERkEWb9vwbTzTWp56ZIO3l6zJ5uxoxBauxRjWl+DorJioHEsQ7z9K9W1R8yB5Dj6S3F9Ax5B0sXMfoUMw+WgEPW9jof/97rAqr6Oea7H6BdRJo9qZIfXIc87J1NpY/zvAsjHcCnmBR8xJMjlABeX665BLDt3m2EbBGRSz1oXOAKHPGwP2zLQjIATAao5brRw94JcFRVz+zy0qDQJoCq/okZE4DfLJIL3Cf9k3aFZQCYrhBgsYety4D/tQBdtvSZ/6uz5U+evp3dFT7GoQRww1Cfpbbltuzx9O3smnyMQwlQZcvyLEYiUgpcb0+7J7p3Aji7BSJycVbj0AIczGi3DJgN/AN85uPYfoz12dNVWe1DC9Cf0W6DLTtVdSiH/9dsuT6rYWgBUv/nqYhcCdxhT1/M6f9VTBY1ikhrFsNQ+wOcAEdE5PKUNu2YBzAI7MtgNx52A82YeYZtaY28PofPIhEZZFSE6YAGVf0izY2hmsD2QDwhMIBZ0EmF/wDmz+gcgm2CMAAAAABJRU5ErkJggg==">
                                                1
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <div class="nav-link d-flex align-items-center">
                                                <img class="char-img"
                                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAAB2AAAAdgB+lymcgAAABl0RVh0U29mdHdhcmUAd3d3Lmlua3NjYXBlLm9yZ5vuPBoAAASqSURBVHic7dlZqFVVHMfxz1VzeAnTGw1aSVGmEmikRZrVU4RlIwVNgplENIDRJD2ch8SCICLIsbK0ogIrMkp7aCAttHl6KAjRwoomiyy96O1hrd1dXs+5Z59z9rmK7S9sztrrrP3//9baa/ivtSkpKSkpKSkpKSkpKSkpKSkpKSn5P9GRo8wxOBdHtVlLNbbgVfyxH3wbgkexC9378foJ57e5rvvQgddaFF7ktRPT2lXRaszFkuT+DXyEsbg45u3GQ/G3L6Zhakyvx7t18jMG4QphCMKPmIytdfy1zFB8p6f170v+ezHJX5XTXiV5ppIjP+VYoeJZuQ8xLKffXAyokncDRsX0NiyI6XGYGdPduL9IITXYgkuEIQCnYqV8k3cuejfAENyZ3C/E3zF9b1L+JXxRlIg6bMCNyf1luKMo470bYC5Gx/Q2LI/pE4TxmLGwKAE5WYFFvfzPKMJw2gB9vf17hEkJ1mJTEc4b5Da8FdMD8AzGt2o0bYBab380rk3KLbB/6MLl+DbeH4rVGN6K0eytDsVdSf43uDWmp2NwTP+GM+OVl6n1i5jay39fvI/jY3qssBpdib8a0LQPt+ifgKaS+KwUaHc7HsZxzVR+kL3X/XZeVyd+r2mD/S48L1+vQ1hPz8Pr8f4HPJn34Qb5DM8KQjPfV+GUFmwOFGKTk6r8t0noFS8I+5mazNPTgktbELO/GCAsieuwx7694nvMR2ctA5WkcKWtUtvPBOEl7rBvQ+zAsljmPwZpjIHCOE7PBrbhafU3RdW4FCcWYCfjS2E5nx9/b9IT1g/DHMzGY7hZHBoV+XvALNUnn1lNiD27IDt9cYgwz2ys4msF1TdDBxNdQsQ4RVgZ1iT/XYfxjQ6BVULrpSHoV0LXbZS3hY3NacKLaNZOXjbgQqERZgir0PRGG2A3nipQ1Op49Scf6NlIHXGwD4F6dDTaA0YKJ8RZyLlZ2KH9UpympujEOYKuDkHXm3LoytsAnXhACF8H9/pvlzAs7s7jsGDq6VoZdf1cy0CeITABnwrrZ28nYt6cWGZcDntFMR6f1NF1fSxT89ygXg84XAgxj4733UKM/U58dpowixMCjnWYqP09oTP6yoKcerrWYpIaPaGidiC0PPnvd1xU5fmZwpebrNySKmWKphVdFb3qe3uSsTIxMELPV6E9NZxkXJDY2InDGq1RA7Sia7hQxyxvXgfOwHvxgW4hcvpc2GLOjvkbcXpMDxDCS0Lg0p2UmRzTj+PrZmqXg1Z0rRdOs7Jj9SmZ0TX6Pmh4MBGQHmSkBxyP1LHRjqsVXS9nrSY+kMbJvcnzIaIrR5miaVbXK+JBb7YKbBfi5MnCpuFIjBEOGwkHoxlZ9+oWTngyzkrSzwnBSDtoRdciPCHnsX462XTr+SxWjZlJuWyyaRf9qmtZYuBPYVat5mR7Um5xo06aoDBd9cZQpxBJjUryNgkza5e9Aw7Cp+tJ+icQ+ljPh5w8uibi12acjZfv2HwrTm7GQZOM609dI4Vut7OKg3+EKGtEq06a1LU0aqima3E9XY1+Zx8hbDvHxPvNwna4qa5VICOEbfoYofKbHRi6SkpKSkoOaP4FbQchm9uQCEMAAAAASUVORK5CYII=">
                                                1
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="lifestyle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 d-flex flex-column justify-content-center py-60 px-30 px-lg-80">
                    <h1 class="pb-30">Amenidades y servicios creados para un estilo de vida moderno
                    </h1>
                    <p class="pb-30">
                        Umbra cuenta con amenidades y servicios que suceden en el interior del desarrollo y que
                        enriquecen el estilo de vida de sus habitantes.
                    </p>
                    <div class="row">
                        <div class="col-6">
                            <h3 class="body-text">
                                Amenidades
                            </h3>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <div class="pl-0 nav-link d-flex align-items-center">
                                        <img class="char-img"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJ3SURBVHgB7ViLUeNADFWYK4AOzh1cOjh3cO7gfBXgDuIOnA6cqyBQgaECQgU2FQQqWCT8PFnMyj/AIbBvRrOxLa20Wul5YyIPD49ZYIwJWEIZR+qf0zEhAbAU5iVyLTAE3tbP6FhAsKVkE9cxgkoV/WKM/ocDweSte7cSqKJvFP3cpf+DjoP/NA5XLBUdA64d6NE3Y/Tn2oFQK5m3Yq4FPLDcDNQN6TPho0vojE4cc/bA4KyOwZw9cD9C9/NgQg+U70KjOKvELL9YAjowyeVisag67EIe/sDm3Bp7AZ8iDe32+jxTJop4KFlWLI+YRErgQu7z85XLOQ5d4njJcgc7eesukdmA9OCf58bllcNnQkOBY2yqPEtBdTJphuucZW8fwlo2zQlTdGJyLBxzrhWfMZL6CguaAGQyZPlt3W62+qHDLuXhL9VlUtGhxOT3P7a9ppGYtIC3ArsU4HLHge/ou0LdATCC1J2wkPyW0rjjbG2oAy32EkgjXg8pD8XnDdteajYaC4VUM0KGiSSIgGWFRo1dzsFCe6rrXCAMJn0iDbztYaFI8ZnBZ0RDga5PTet/K4JcgzEkqAS6GRhm73IEFipdi2+zkOIzdSVtMhDQGotospuYji8ICGRjUbDY3VoLH87zFmZnIZTREiI1Lgy066LfL43OHUAzS6YaRtj1sYnFJAFuVVSzUEUDMMWna5KlOXxcKnBUKKz6DRS7C6umt5ASdnlPj0zyqU2WoOHajBBYjSgOIkhiDmedxDFfZLFQQO6FGyxY8xnTewEBbcEiJcbUdPO8vfgCCchPkYWkvqVHflL9oqtYNt+WhTw8PDw8PDw8PE4YT1grQR60g68xAAAAAElFTkSuQmCC"
                                            alt="Swimming Pool">
                                        Piscinas
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="pl-0 nav-link d-flex align-items-center">
                                        <img class="char-img"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAOOSURBVHgB7VjtcdswDIV7+V+NoE5QZ4IqE9SdINqg7gRWJrA7gdwJ0kygEZJMIG9gb8AS1oMFMfqirNjpnd4dziYJggABgoSIJowPY0xA/yus8pEpMO/D/4muCN5pS4uG4cDhXVgKXaarGmARWkqtYplS7qAZYOQj84G/ghl5AItEavEd6GU2mx1YEfv/yf7fUE9AZobmraXY0ldLr5b+WmLl2Rs/rNwX8gVicm1pj9jMsWNCup8RkSewyzFkscwU8ridDDrUvDPsOiiVIQaDFt4YizKtqFvhSFGIeY8O3xZGvOGnjgXmSpmI/AwXQ55bDNbGMi2xUUuH79Tv8MdtCoSw2lt5R0arETVzMr0mdvoYruQDFXu5KWO7V06uMYLlrHvwcniuETIaGfpj6gPEWioxBiUkDmNQRD2hQiBq4VmBJ1Frah0SjK9oCGCUMWWG2Pt4BfybhrFINsfpqxgND/GaCxpoROS0xSsJKDbNB5Z5c/JYq8trTRPl4LnIXeXUIpkpUm3e5BUYuKeegMcfTVeqrJkoSqUwhknSaSWbSJ8zX7ySgmLI2PgYcBawaOXAKM+kaK/AEzpz5xLvoFyRXyo804ikxgjpWyglf8LVmWlIc6a8yWO6JJTC94hJyTyp+jXg2zQpqTwR0qXhGCFn4agodvZZ8Z5CzJERmGtWV8qIuak+D+SCkhAyCKnoKrvdBlNmF9eIOQxcqliXp/U9XQidBQ12VMLlFr+cVbhyukOb0+SDLTiOF5v9zwlga+mJnAprII4FU91AHwNYmYSFUFEZidLaCDHwzi60M8UtGlNRWZ17BgJQbGX/8ZqJkJFsEyB0clNedDqc8vfKOKblOTJzGCOqFs7fLfED6hcVu807wc/jnaUH8LKH2DtP+M9jXMu+0niQO4n14HDakWsA8ngKBT4qeAN5I2/lTNyowdDSzg58oQ8KRAifvc+E5HDj8ARmYBl5IXxzO3QIhdTw8UhBMsKByvQYOu2+CGvkMHYd8377fHeqQL2FQrRXclOTJ/BO2stcdbu/zyWolI3Qlqd3QgNhyi8RAdpiVEhjwhTP6JOypvziMMyVpVy5SzLV92xqqsAxFpGCJpBLi0YALkHG2lnv/CJIK6vcnI5947rxb8rydtinFCV4DUEZFJdX57DPG+1rSfynapM615p1CI3pbVrly25LIwMeXtYMbfXTYcKECRMmTJgwYUT8A/vrxOQspBlxAAAAAElFTkSuQmCC"
                                            alt="Solarium">
                                        Solarium
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="pl-0 nav-link d-flex align-items-center">
                                        <img class="char-img"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAI+SURBVHgB7ZfRUQIxEIZ/HN/FCkwJdOBZgXQAVqBWgFYgVoBUIFYAdgAVGDugA9wlezM3R3LJ5Y4TZvLN7ASSzU022d1sgEQikSiz2+0GJMuCZDg3aNFqZ8hI+jgnZPFLMYBbhSNxgeMwI1n3CGo38v8oXKIh4h6DQpeWdiPtguTepkf2aTSksQHElOQWZuF9EW3R+yRRBb0tyR0a0pYLzWk3eTHPHr1X0XtHS7RxAhrGRVbcwr77DLvUiPS0R697aFFjyTgz9nXJPGMZ4zT6I/0vojc9udSa53z5fWBASe8GLdGDe0G8Q28IZ0yygnGNTFqWvvxfFPT49xZhsB7HjlW/ygBFDe/cA/4XvkMUGfBrGwwJYo0TJtSFhjDuEXrsTVEwl17uds8uFwpCskiGjigHfhW17wE5mWGFyspVIsgmKMe8Lc1boCYxF9kTyQjGpcpkMAt8cczdF3mwu+KQDGQjVqhB7E2sSb4t/Qp+OJusLf1DRBBjAB/zBKY0KO4kX04ceFX10JzkEYcnkBeDGsegHMS22zR/gXm+wyXH0tLPJcas8D84iGtXo/nrynWxeGoc15hGmPsdEFNOWxdRyDxXnrm6Yqw2MTGwf4zwsTvGr2EC1TV3YJl7gw4NYDgItaPf50LaMbczAxTMe/ajPEA7O0G1L/NOf5XnSlxNEEFrMSBo+HHWNDGPnDonMJJUyjm774gBBfO8VI5v+MY5nbKBwQ+eXogSfZRvya6fgFG1USKRSCQSiUQikQjmD8RFUJ7fa8OyAAAAAElFTkSuQmCC"
                                            alt="Bar">
                                        Bar
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <div class="pl-0 nav-link d-flex align-items-center">
                                        <img class="char-img"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAHvSURBVHgB7ZjtUcJAEIY3jv+lA88O6MDQgVYgVKBWAFSAVmA6ACogVgBWYOiADuK7ZpnJkAtyH0Fn3GfmnYNc7mPv9u72QqQoiqIEkJAnZVkaJDOoR/4skyR5oXPDnYc+oZQ8QdketIYe6Nyg0TfoiQKpDUTILDo3mnKjFAnUNWGRJ85rgEcfyTt8N7PkGSRpS9ENymwsZXj018i7IQ8uyZ0+9Hok3xzJaxiAju9gRAH1bQZGBw2VFBlUmUFD8sDJhaTzOXWDgaY21zxGwwDZGtu2ttTmqzJ6C3GHIXdC1gO7xULq3LGL1N89qCNDcg0VlnY/2s4LmwGG2v2YF/DA8pwX4r5DptaJ/fP9Nrk7eLcOH4pbaGHJK2BAYXnu7EIrqnaZnOJiJB2hozl1yV9bxD7b6GHjd+QXDzXWgQ8XFA777hW5MabqPAkmeAYEHs3tqS/HDOBiGfDND6FE0cUCjeFCbaTQsPa/k4gz6gzIXp3xb9msbl1PVle6nIGzoAb8NicbwPG6hBJdMUP9Y8cyp8dCfAFHcg/xdTKrZfFJnFMzQDOi3FJdSlXAV9T+P0OPnLpcbFwM4NFfUhUtTvgRNKUw+DTmk3xE1QDMoUFb5BmEfEHgoGslF/Eo+zoHcVLnPOQzjaIoiqIoiqIo/48v2wT5aA0v76AAAAAASUVORK5CYII="
                                            alt="Grill">
                                        Grill
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <h3 class="body-text">
                                Servicios
                            </h3>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <div class="pl-0 nav-link d-flex align-items-center">
                                        <img class="char-img"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAJsSURBVHgB7ZjRUcMwDIZVjnc6QjYgG5ANYASzARvQDQoTpBu0GwQmgA3cDdoNhEzlQ03tRE3SJtz5u9PlYju2fluWfQFITBhEnMN/hZxf4oEdWUX2QlbAxJiFCsnRjB6WbEv2SXZPlnP1nuybyz9ms9kHTA0SUPLsG1GWkT2Rrci+8Bi3Qgu3QpMIO3LCsmNZQ5s5C3qLCFqOIoidcpS18iXXZZHvpKCqJuhLfH9ZQTTAmgctRFnBm9ljOcxMi6BCISiDoeA4/3UwUu8cemGHvKAKlPD3i4igsrcg+jjnDlWpk9vn0JHIhKhWuKlTg6dc5SwQgtYBQa7MaDtBdliVOuFC8Ap7QZbHXbR9VHJDE6jzgq6aOvGQENYxv+qN3dJZRb/as6Bz6uT+X1GbMPAv/kvoAA6UOkOOq0KVB5aD9QoHIUiVOgOO71CzcWsDnh0OeNgbBSpSXk2QzDS72rvEwLmgLhxMoG555jg+dZY8luV+/NjdBDQICoXDG9f5lXuCDmDtJoCKS2UvhJCC31+9A9jhJMW/JOKv5o4NXAoxCIrZt9h8Ncgb+rOir6rPap4jIhODlXLG8fgkDV4NvCAxGTsxGeqLIohOjDBVGuUld5iWdjn3K68G3mmr6aPNkRWeYrHlxqkV0CLIzfoC+iAE/B4uvPyODVxAwBDcRMr39LdhS0/v+B1MlBsYhgd+buHK3CrbzTGcz13ZI1kBI/0j0gpwm7jpiu1C7RlGQCvA/Yl7j9RtaOb3MBJaAW5Tr2CCDLWJR6NNwOR/r8dCqKKsI99j8T86dQEum2zFu9ucGz7UEolEIpFIJBIT4weV9783+15R1AAAAABJRU5ErkJggg=="
                                            alt="Security Camera">
                                        Seguridad
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="pl-0 nav-link d-flex align-items-center">
                                        <img class="char-img"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAEdSURBVHgB7diBDYIwEAXQwziAG8gojuAGrsAG4gS6gWwCGxgnACeADc6r1IRUUtpIaUj+SwhRf6FXQnqRCABWLSFPzHyQ04nm18nxTJKk8Bm09QnL5M9yyvXHxmFI6puVe+ykiBuFIBdvuZc65j8cs6mOtxSKz4SWyCsbWjkUEBsKiA0FxDZLAWr3pEjmegIPKSKbCkmm5HFHWsLYTqn6o28LYLYYZl63C60x+dx2/aAFqJUzJlPa8vq7bJCvp/LBCtCrWfOv61jeuE7h8sRceLXTBvXiXsZ+4L4l7ixj1ftSSaahJfmuUOi8gn0gNhQQGwqIDQXE5rsTV3IcZK+5y/nlOmjYsFnsB/cIQ/c/BYdTsuOfZgAAAAAA8Lc3Tbypr9hFlLgAAAAASUVORK5CYII="
                                            alt="Elevator">
                                        Elevador
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <div class="pl-0 nav-link d-flex align-items-center">
                                        <img class="char-img"
                                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGQAAAB9CAYAAABUO8YHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAYcSURBVHgB7Z39dds2EMDPff2/7gTGBlYmMDNB3QnqbNBO4OcJMoKUCaJMIGWCuBMImcDKBCjOZF6lIyAej8SHpfu9h2dDOgIUjnfAHb8AFEVRFEVRFEVRFEVRFEVRFEVRFEVRFEVRFGUsVzATzrnG//nDF/xrfLmG82bvi/Xl2ZcvV1dXa5iByQrxinjwfx6hVcIlY3158opZwQTECvGKMP7PElqLUP7H+vLeK8aCAJFCOmVsQK0ihoUJShkFKsOXnQuzQRfWyZz1HOJ/38KXe19WkbHYdQdu8h35HFGEgQvlxEG6gZR0Rz9lBcorEWv5G1IROAp2oBzReYtDXiAFvuEmoH0DyhGd+6I0MDe+0SXpZAlKkICVsMfqF+CzIPUvoMT4ROoNMBmjEEPqFpQYW1JnhwDswBDt7mhDDyhBXBuDHU3m3PF6kwrpfnAD8SMPE3/PWSLlCMnHiy4boACoCF8+Oj7LUivB5OOVvIPh/lEZOzeeXQmlXIJClk5O2hRGeH9F4/Um5pDuCKdZgdd5IrKJgf6qELOvW8hE8vGSanymvpek+50byCa7fnCW1UqSj1fyDuL9hlIRD4ztQqmeBjIhHa9fITF+X+6hPdcuZRH47M63ewfDoFs7tKSl324Lcr5OPUU7RNI5xG+Cg/kNzgvWXCQZL2RM6kTCAs6PBhKS2kLQXaCFGDgP0AW+42QApBaSfNnr2iUrWgoqh14utPLlK9QF7ufHgzoq4Z/u/7X/2XtOI9LxYiNdNZA2VqSZdKc3hQRWZ6I5UDpeqecQCj26bqE+aHzDsoi5yK0QGln/DvVBFyL/QkbUQvpQC7GQkdIWMpT+uO8CS5hJrmHI0YPEQo1IJynSxrXrcxORPTzvsTnR5txy38j+NSBgjvHK0oHrn9NYAKM/F0kmjpB7IXI3U9pj/E7ReOV2WQidRxZMud+AR0zuaGB9WPCdCrj+iaw9N+6YixIKoauWU+fFDxGvyBz/jCGVs5CZGizklilnQI4hdRuRKxqDICUUwo1FLKmLfDmz7Z8UjUGQmi3kB6lPUYgRylnITA0Wwp1DpiiEG+zdMOWSUYOFXEeWoJbUg8tUJlQh3yNyhtTPfw7plpGWfByaR2ZbZYHcZT1DZkpYCMKJRajMFAsZdEU1xCBIKYVwYhHLkJFiA58ZhkxyarEQw5BJvcoyA/1noZRCqG82AZmUq6zQvZGG1LPHIEgtFtKLRUL+O5YQZEAV8iMgY0jdQgFqsZDY0W9JffRKK5THikzWxWMQpBYLuY6kuedwW9yg0MDpvrNQRCGRWMQERDkyQ0gVkj0GQUpZCMKJRebIZ5khgcBJsiIxCFJSIZxYJJfL4lpRcmqyEMOQkayyJCusItaBlFQIJxaxpC7JZxlS3zNkisQgSE0WcsuQ4Z5XP7WNDchUc+lPTRbCyWcZGI/OIUw4scgck7oRyFzeHMKMRfYD9d5noct7CKH4wjBkslDSQpCTsUintKeDjz4F2niK/B/8nsYXNcUgo5BeiTfQJut+Eddegnp9oh3O9yby3Sz3gwTaFY1X8rtwB+DEIjB0xDK/j8n0LAQKUtplcWKR1FDLKhaDILXNIXcu//N+6T30Ft4CUp840Cb6dnpV+hIy4ft6dH0MzIB0vIo/fMa1z/39i3xsfVlDOO80Bxi949zRkM+3/me9hxmQjlcNCkEXVcO97Og+Wfegc5COV+k55OcK6E8o67txHz5cFXwk4GikPnFE+8bFH2yfko1L8MQ52gl3u+IuK9CPgda/LyAtFto5w0ICpONVnULOBel4jZlDaA5oyrW2Z40bzlpHGaMQS+rvQIlB3a0FJmMUQp/aM+UpcecOjavmT+e7flb0xTl9XQXFhd+200AKAh1tQDnCBZ6gCqlw4VcePYLyigvnxh4gJa7/PFzk8yW7L9cmSZehcYHUuNOvzcOdwrkmdwo9O50Sms4qXgJjsZMcpPpiyTRYEL5YUpRc7DrCNPUaFMoWJrzlU5ztxQ59wSztB9DXHyEW2oyxWBnI3K/vfoD2skwDl/P6bgyY1znfvKAoiqIoiqIoiqIoiqIoiqIoiqIoiqIoiqIoStX8B7Od2i4n2I2oAAAAAElFTkSuQmCC"
                                            alt="Trash">
                                        Shut de basura en cada nivel
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-6 px-0">
                    <div class="swiper swiper-gallery">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_1')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_2')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_3')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_4')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_5')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_6')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_7')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_8')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_9')['url'] ?>" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_field('slider_img_10')['url'] ?>" alt="">
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section id="render">
        <div class="container-fluid py-60">
            <div class="row pb-40">
                <div class="col-12 text-center">
                    <h1>Explora un nuevo estilo de vida</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12 px-0">

                <div class="swiper swiper-renders">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <?php echo do_shortcode( '[360 src="https://umbramx.com/wp-content/uploads/2022/04/Duplex_Dormitorio-min-scaled.jpg"]' ); ?>
                            </div>
                            <div class="swiper-slide">
                                <?php echo do_shortcode( '[360 src="https://umbramx.com/wp-content/uploads/2022/04/Black_Dormitorio-min-scaled.jpg"]' ); ?>
                            </div>
                            <div class="swiper-slide">
                                <?php echo do_shortcode( '[360 src="https://umbramx.com/wp-content/uploads/2022/04/Black_Area-social-min-scaled.jpg"]' ); ?>
                            </div>
                            <div class="swiper-slide">
                            <?php echo do_shortcode( '[360 src="https://umbramx.com/wp-content/uploads/2022/04/Rooftop_Piscina-min-scaled.jpg"]' ); ?>
                            </div>
                            <div class="swiper-slide">
                            <?php echo do_shortcode( '[360 src="https://umbramx.com/wp-content/uploads/2022/04/Lobby-min-scaled.jpg"]' ); ?>
                            </div>
                            <div class="swiper-slide">
                            <?php echo do_shortcode( '[360 src="https://umbramx.com/wp-content/uploads/2022/04/Grey_Area-social-min-scaled.jpg"]' ); ?>
                            </div>

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ubicacion">
        <div class="container-fluid">
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-12 col-lg-6 px-0">
                    <a href="https://goo.gl/maps/gkx6K85rHKF2wwaF7" target="_blank">
                        <img src="<?php echo get_field('ubicacion_img')['url'] ?>" alt="">
                    </a>
                </div>
                <div
                    class="col-12 col-lg-6 bg-dark-grey d-flex flex-column justify-content-center py-60 px-30 px-lg-80">
                    <h1 class="pb-30">Ubicados dentro de un entorno único.</h1>
                    <p class="pb-30">
                        Umbra se encuentra en un punto privilegiado frente a la Universidad Marista y las principales
                        universidades de Mérida, conecta con vialidades importantes y los mejores puntos de interés para
                        su habitantes.
                    </p>
                    <ul class="nav flex-column">
                        <li class="nav-item pb-15">
                            <div class="pl-0 nav-link d-flex align-items-center">
                                <img class="char-img"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAIHSURBVHgB7ZjxVcIwEMYPn/+LG9QJlAksE8gGMoJuoBOIE1AnACagTlCcgG4gThC/I1cJGLApCU8e+b33vWCp7X2XuyQPokgkEolEIpHTpUWeUUq1MdxAd1APKqEJlLdarRl5xosBBJ3SKuh0x60llEPvpA2VtCeNDEiWObu3MrapGTwjOTSBmZwaUMuApSwS8s+CtCGncttqAEFzwCnpoPlz0yw3pSSZHdKGFrabfgx4LItQ5CQzZJbb0gCC72MY0vFQQh2elTM6cpYG4CTD0IGeSU/Tf8TsgbLqCWsTo6QS0g18T7vX9dBwkG/QWD4Xcp2bulvrCTAzVys+VXjMd/SNOBLj+rS67tQDcH2JoStZKckfOfQIXUGvLv94To7IEsaqjhC85PJekVB9zE0rM9d4PJNccDZgYph5ULpvKjOp5XYOkmuZZ2+2bWNyZS8DJnIwG7DU+iLwAY2bnnX+wpsBEzGTiYLi1MRS88FQ+jhzbftOksIlyOOE6oKHFhvL3JyXNykTL3BioJH6vUz3aF9k/c3U+n5QMVT61NrkuW2Im39qee7U3AO8IZkvLC8s6r5Qsv1iyTb/PQhdplUQNzIrylJew83yqpFt/u7wx3ely6uv7OXFszKSAG3ZHh0k23WR0rDNymbgTz6zHeJnlYT0JsbNfSGXvyjgZhaJRCKRSCRyqnwDZZFr8n6PnvwAAAAASUVORK5CYII="
                                    alt="Education Icon">
                                <div class="d-block">
                                    <label>5min. Universidad del Valle de México</label>
                                    <label>10 min. Universidad Anáhuac Mayab</label>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item pb-15">
                            <div class="pl-0 nav-link d-flex align-items-center">
                                <img class="char-img"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAH/SURBVHgB7ZmNVcIwEICvfQ7ACNmAOoEdwQ3sBnYDnyMwATiBblCYADYgTgAbxMRe9AxJaFow4b18793zau/C3eUfADKZTCaTCkKImZQXKZ2UvfjlgP9rpTBIDQx8KYazTCYRFYhR7Q4rXeE7hnpj2O2jJ2EJvh3g0yaThPg7bM4GT/wa2mMQA6z+z5iGQHCoaWYwkhLGUxF9A+G8Ef0RRjIlAVo1DuFwuABTEkiCm0+g8L3EydVImUM/ZOiwYSiKnZQjhKHaqjz+XMqmKIqVrxFnArg+dyTIWHAp9zIRa4F8CailscHHBfRVotRSnlB/hfBJqar/jPoKTleymrS/kAkM3me+kQlscY3eOt7TzaiGQJQP8W8cNnu9Y7vaKR2OdHx+wnU4OnSK7hUWtNkZ1Wk9dqoXRm9C6O9rvx3Vy6MdL4wqzrlCuvaBB6LvIB5ros9tBq4EGP7lruXrP8DP5vhYDXYk3fYBkZExvPtOraXFoSaPMYePhu4PzHxpG0K0q1JIgBO9Nl/aEmBETyEBGsP8rDW5KR0gEUT/tYzzVGAaa+LcVS2QiXxS1NIwnHpNvBb6ODMzYjyZA6lNYA2NZXACHNJhTXT3hpbiBNaQidxNM4qEq7h3DvsKJ0u0c5CBOkIw1N0xGcfoVPFfLUV/yehEWujfF2rIZDKZTIbwBeZPc57dNPM8AAAAAElFTkSuQmCC"
                                    alt="Education Icon">
                                <div class="d-block">
                                    <label>5min. The Harbor</label>
                                    <label>6 min. City Center</label>
                                    <label>6 min. La Isla</label>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item pb-15">
                            <div class="pl-0 nav-link d-flex align-items-center">
                                <img class="char-img"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAG1SURBVHgB7ZbhcYMwDIXNBtmg3qCMwAbNBmGDZAPYIHQC6ARpJ6CZINcJoBuwAZXCc6Nzja8hf3I5fXfviCNZsg2WbYyiKIqiKIqiKMqjMY7jjnQgrQO2jFSTWtKeZCP9WXnAbkkF7Bwri+QpzcJJpGKQKZLy7xOCr3hwaOewZ+hToc0qSR1irODTiRgpYhRenjY0MUnyz4nk9HhB85gkSeXZLT12pGdST3ojn09/MejBcZ5IX6SGfPqZPAP7+HmUe2T2E+Jv8+yQJEPEzhoiPhYx+htiRMdhIhPIUSFaWWWw6VqoxmYsvL4ZNmWNGCe/mlF7K3xa+Mk8VuTZmaVwYjHYPQacez6uypQzk7awH+BzrlLm74JF89wEVjV1rzRgd+XRRmKkrnQuzaPcG7EqtKWHJb0GDhw+lDZmqiB8KL0HfDL4uEOp8ezcNzfT4TfM5OEYfLB9X32oeUd+gfYK1aNz3/t4uUqsRT/erBW+ZVYjq4yoUuV4uX50rpohRjGKK8vcOK+5SmzQPJIqWZcxsNJM1wT+/yOw4hyDV9O9tUquuHgjv1cJP4+iKIqiKIqiKMpD8QPTz2GiLVGtjwAAAABJRU5ErkJggg=="
                                    alt="Shop Icon">
                                <div class="d-block">
                                    <label>25min. Progreso</label>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item pb-15">
                            <div class="pl-0 nav-link d-flex align-items-center">
                                <img class="char-img"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAMYSURBVHgB7VjRcdswDIVz/a86QZQJ6g3iThB1AisTJJnA7gT1BnYmiD2B1AnsTGB3AqsTsHhH6MIwFC1ZlNrk9O5wlEQAj6QAkBLRR4dSKmKJqWcE42UnGcuaekZrXlkBODkqDVxH1DGE90l4j6142TBh2bNsWVLqCUF5ZQW21DOC8LKDiXrBhHpCE96Rx0nMTcZykEe4/zYajQ7UIYLxSiIhDmMRXGcNfWAlk4Y2rXnhZCavL7EGA9w38JM1IT/BO6vrZCwGc1QAYyVwvagTl1JFMqsUpl3zkvHKtjIIJStQrkI5MOhEJ/ykhq9UeXbVULxwtBSluFwVoy8yyI51QqNuCLXhHRmKiLE5S87yi/z4yoI4feDqsKgYFIhBhrayirTlvTA6J6RLF+TyhBQiN44B4bUv+fIoOsBeVjl2DGoSgvecivFKXwaeScxmZsIZMezqa8V7QS0hCQqH5eaDcIHkpQ5fr/GML69YfkNXYj6lUHCthNInw0QkdugrSay5XR3ENq2wRUKuZBLqDN7s5ASUrst79VLLIVNLf6scZQ16lt3erCzWRLYOXts2qRqnM4Rk1k+kQ+KKX/8Xbh9ZVur1ZlJwX+GwRYXYwE5sUV0ye7JSmQoHb27wbliWqmIfqcqBCelD1G05QG7vhWxKfkAPA51bz8y2ConwPhgLM/fZ+iZQOGr3Rvp8QK3OTVsZDO7HJ2zRf3DY5izXLgNfFSooLODvM52HP6Tf6hu0LqP/Gp+oG4wdpQ7hsaPA6GICP0gnog1Usf9/AuUOLCUzJh27O7vchkInOSAnzD0L/ioglLAh/VQd/FcKPgGlf4WgZiOUsJHhyH5LusZnoScRdAKy8khWHOYWxia44uY76ZCq/U1dB74ciBynxUvyA/orHvCbZMUz9odEvuN24cmJRrxVE9iJkevYsHYZyFkF8kzVyFnuRG/XkPfR5dA5Aflcc34q1kBRoy8Kxfvud+IPd5TAEWBJ9RCTTrhSvwyLKT+7rrApdWbGx5Htpw7vobwxf6ugTt/Q+8Bz1e+cAQMGDBgwYMCABvgL92zeWHLThwYAAAAASUVORK5CYII="
                                    alt="Church Icon">
                                <div class="d-block">
                                    <label>25min. Centro Mérida</label>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    

    <section id="contacto">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-6 text-center text-lg-right bg-light-gray c-black py-60 px-30 px-lg-80">
                    <h1 class="pb-15">Es momento de obtener tu lugar verdadero</h1>
                    <p class="pb-30">Llena el formulario para recibir más información.
                    </p>
                    <?php echo do_shortcode( '[sudatos id=1]' ); ?>
                </div>
                <div class="col-12 col-lg-6 px-0">
                    <img src="<?php echo get_field('contacto_img')['url'] ?>" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="c-black bg-white py-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center pb-15">¡Comparte nuestro brochure!</h1>
                    <div class="d-flex justify-content-center mb-15">
                        <?php echo do_shortcode( '[kaya_qrcode title_align="aligncenter" content="https://umbramx.com/Brochure-UmbraTrueLiving.pdf" ecclevel="L" align="alignnone"]' ); ?>
                    </div>
                    <div class="d-flex justify-content-center mb-15">
                        <a href="https://umbramx.com/Brochure-UmbraTrueLiving.pdf" class="btn btn-dark" download>Descargar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
$(function() {
    var swiper = new Swiper(".swiper-gallery", {
        pagination: {
            el: "#lifestyle .swiper-pagination",
        },
        loop: true,
        autoplay: {
            delay: 3000,
        },
    })
});
</script>

<script>
$(function() {
    var swiper = new Swiper(".swiper-renders", {
        pagination: {
            clickable: true,
            el: "#render .swiper-pagination",
        },
        loop: true,
    })
});
</script>

<?php get_footer(); ?>