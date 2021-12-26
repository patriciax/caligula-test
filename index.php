<?php require('header.php'); ?>
<?php require('partials/banner.php'); ?>
<section data-scroll-section="">
    <div>
        <span class="c-lerp-block_index icon-speed" data-scroll data-scroll-delay="0.2" data-scroll-speed="6" data-scroll-repeat>
            <div class="laurel">
                <img src="assets/images/iconos/laurel.svg" alt="">
            </div>
        </span>
    </div>
</section>
<?php require('partials/categories.php'); ?>
<?php require('partials/productos.php'); ?>



<!-----
<section class="c-section" data-scroll-section>
    <div class="o-container" id="speed-control">
        <div class="o-layout -gutter">
            <div class="o-layout_item u-2/5@from-medium">
                <div class="c-section_infos -padding" data-scroll data-scroll-speed="-2" data-scroll-call="test">
                    <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
                        <h3>
                            01. <br>
                            Speed control
                        </h3>
                        <div class="c-sections_infos_text u-text">
                            <p>
                                Each element can be animated at a different speed. You get to choo-choo-choose!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-layout_item u-3/5@from-medium">
                <div class="c-speed-block" data-scroll data-scroll-speed="2">
                    <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                        <div class="o-image" data-scroll>
                            <img class="c-speed-block_image" src="assets/images/locomotive01.jpg" alt="Locomotive image from unsplash">
                        </div>
                    </div>
                    <p class="c-speed-block_title" data-scroll>
                        Speed x2
                    </p>
                    <span class="c-speed-block_bubble" data-scroll data-scroll-speed="4" data-scroll-call="dynamicColor" data-scroll-repeat>
                        4x
                    </span>
                </div>
            </div>
        </div>
        <div class="o-layout -gutter -bottom">
            <div class="o-layout_item u-2/5@from-medium">
                <div class="c-speed-block" data-scroll data-scroll-speed="4">
                    <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                        <div class="o-image" data-scroll data-scroll-speed="-1.5">
                            <img class="c-speed-block_image" src="assets/images/locomotive02.jpg" alt="Locomotive image from unsplash">
                        </div>
                    </div>
                    <p class="c-speed-block_title" data-scroll>
                        Speed x4
                    </p>
                    <span class="c-speed-block_bubble -right" data-scroll data-scroll-speed="1" data-scroll-call="dynamicColor" data-scroll-repeat>
                        1x
                    </span>
                    <span class="c-speed-block_bubble -left -bottom" data-scroll data-scroll-speed="3" data-scroll-call="dynamicColor" data-scroll-repeat>
                        3x
                    </span>
                </div>
            </div>
            <div class="o-layout_item u-3/5@from-medium">
                <div class="o-layout u-text-right">
                    <div class="o-layout_item u-1/2@from-medium">
                        <div class="c-speed-block -margin" data-scroll data-scroll-speed="6">
                            <div class="o-image_wrapper" data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                                <div class="o-image" data-scroll data-scroll-speed="-2">
                                    <img class="c-speed-block_image" src="assets/images/locomotive03.jpg" alt="Locomotive image from unsplash">
                                </div>
                            </div>
                            <p class="c-speed-block_title" data-scroll>
                                Speed x6
                            </p>
                            <span class="c-speed-block_bubble -left -top" data-scroll data-scroll-speed="2" data-scroll-call="dynamicColor" data-scroll-repeat>
                                2x
                            </span>
                            <span class="c-speed-block_bubble -right" data-scroll data-scroll-speed="6" data-scroll-call="dynamicColor" data-scroll-repeat>
                                6x
                            </span>
                            <span class="c-speed-block_bubble -left -bottom" data-scroll data-scroll-speed="9" data-scroll-call="dynamicColor" data-scroll-repeat>
                                9x
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
--->
<!---- <section class="c-section" data-scroll-section>
            <div class="o-container" id="speed-control">
                <div class="type" data-type-transition="" aria-hidden="true">
                    <div class="type__line">Shop Clothing Manifesto</div>
                    <div class="type__line">Clothing Home Manifesto</div>
                    <div class="type__line">Vegan AF & Alcohol</div>
                    <div class="type__line">caligula Manifesto</div>
                    <div class="type__line">tendresse tendresse tendresse</div>
                    <div class="type__line">chatoyer chatoyer chatoyer</div>

                    <div class="type__line">Shop Clothing Manifesto</div>
                    <div class="type__line">Clothing Home Manifesto</div>
                    <div class="type__line">Vegan AF & Alcohol</div>
                    <div class="type__line">caligula Manifesto</div>
                    <div class="type__line">tendresse tendresse tendresse</div>
                </div>

                <section class="item-wrap">

                    <figure class="item" data-article="article-2">
                        <img class="item__img" src="https://images.unsplash.com/photo-1561365452-adb940139ffa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=856&q=80" alt="Some title" />
                        <figcaption class="item__caption">
                            <h2 class="item__caption-title">Clothing</h2>
                     
                        </figcaption>
                    </figure>
                    <figure class="item" data-article="article-3">
                        <img class="item__img" src="https://images.unsplash.com/photo-1533090481720-856c6e3c1fdc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=388&q=80" alt="Some title" />
                        <figcaption class="item__caption">
                            <h2 class="item__caption-title">Home</h2>
                         
                        </figcaption>
                    </figure>
                    <figure class="item" data-article="article-4">
                        <img class="item__img" src="4.70e0cafc.jpg" alt="Some title" />
                        <figcaption class="item__caption">
                            <h2 class="item__caption-title">Vegan AF & Alcohol</h2>
                         
                        </figcaption>
                    </figure>
                </section>




                <section class="article-wrap">
                    <button class="back">
                        <svg viewBox="0 0 50 9">
                            <path d="m0 4.5 5-3m-5 3 5 3m45-3h-77" />
                        </svg>
                    </button>
                    <article class="article" id="article-1">
                        <div class="article__img-wrap">
                            <div class="article__img" style="background-image: url(1.763bbef2.jpg)"></div>
                        </div>
                        <span class="article__number">01</span>
                        <h2 class="article__title">A Poem</h2>
                        <p class="article__intro">
                            I, D-503, the builder of the Integral, I am only one of the many
                            mathematicians of the United State.
                        </p>
                        <p class="article__description">
                            The great historic hour is near, when the first Integral will rise
                            into the limitless space of the universe. A thousand years ago your
                            heroic ancestors subjected the whole earth to the power of the
                            United State. A still more glorious task is before you,—the
                            integration of the indefinite equation of the Cosmos by the use of
                            the glass, electric, fire-breathing Integral.
                        </p>
                    </article>
                    <article class="article" id="article-2">
                        <div class="article__img-wrap">
                            <div class="article__img" style="background-image: url(2.c9d78bbc.jpg)"></div>
                        </div>
                        <span class="article__number">02</span>
                        <h2 class="article__title">Harmony</h2>
                        <p class="article__intro">
                            From behind the Green Wall from some unknown plains the wind brings
                            to us the yellow honeyed pollen of flowers.
                        </p>
                        <p class="article__description">
                            One’s lips are dry from this sweet dust. Every moment one passes
                            one’s tongue over them. Probably, all women whom I meet in the
                            street (and men certainly also), have today sweet lips.
                        </p>
                    </article>
                    <article class="article" id="article-3">
                        <div class="article__img-wrap">
                            <div class="article__img" style="background-image: url(3.01b3c39f.jpg)"></div>
                        </div>
                        <span class="article__number">03</span>
                        <h2 class="article__title">A Coat</h2>
                        <p class="article__intro">
                            I looked over all that I wrote down yesterday and I find that my
                            descriptions are not sufficiently clear.
                        </p>
                        <p class="article__description">
                            That is, everything would undoubtedly be clear to one of us but who
                            knows to whom my Integral will some day bring these records? Perhaps
                            you, like our ancestors, have read the great book of civilization
                            only up to the page of nine hundred years ago.
                        </p>
                    </article>
                    <article class="article" id="article-4">
                        <div class="article__img-wrap">
                            <div class="article__img" style="background-image: url(4.b86909e1.jpg)"></div>
                        </div>
                        <span class="article__number">04</span>
                        <h2 class="article__title">Epilepsy</h2>
                        <p class="article__intro">
                            The auditorium: an enormous half-globe of glass with the sun
                            piercing through.
                        </p>
                        <p class="article__description">
                            The circular rows of noble, globe-like, closely-shaven heads. With
                            joy in my heart I looked around. I believe I was looking in the hope
                            of seeing the rose-colored scythe, the dear lips of O-, somewhere
                            among the blue waves of the unifs. Then I saw extraordinarily white,
                            sharp teeth like the.... But no!
                        </p>
                    </article>
                </section>
            </div>

        </section>-->
<!----
<section class="c-section" data-scroll-section>
    <div class="o-container" id="scroll-direction">
        <div class="c-direction-block_wrapper">
            <div class="c-section_infos -padding" data-scroll data-scroll-sticky data-scroll-target="#scroll-direction">
                <div class="c-section_infos_inner" data-scroll>
                    <h3>
                        02. <br>
                        Scroll direction
                    </h3>
                    <div class="c-sections_infos_text u-text">
                        <p>
                            And if that wasn't enough, make 'em go backwards. Or upwards. Or downwards!
                        </p>
                    </div>
                </div>
            </div>
            <div class="c-direction-block" id="direction">
                <div class="c-direction-block_item -one">
                    <span class="c-direction-block_item_inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="6" data-scroll-target="#direction">
                        I'm moving in this direction
                    </span>
                </div>
                <div class="c-direction-block_item -two">
                    <span class="c-direction-block_item_inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-8" data-scroll-target="#direction">
                        And in this direction
                    </span>
                </div>
                <div class="c-direction-block_item -three">
                    <span class="c-direction-block_item_inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="9" data-scroll-target="#direction" data-scroll-delay="0.05">
                        Sooo customizable. Right?
                    </span>
                </div>
                <div class="c-direction-block_item -four">
                    <span class="c-direction-block_item_inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="15" data-scroll-target="#direction">
                        I can also go in this direction
                    </span>
                </div>
                <div class="c-direction-block_item -five">
                    <span class="c-direction-block_item_inner" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-20" data-scroll-target="#direction" data-scroll-delay="0.05">
                        Ok, enough!!!!
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="c-section" data-scroll-section>
    <div class="o-container" id="lerp-effect">
        <div class="o-layout">
            <div class="o-layout_item u-2/5@from-medium">
                <div class="c-section_infos" data-scroll>
                    <div class="c-section_infos_inner" data-scroll data-scroll-offset="200">
                        <h3>
                            03. <br>
                            Lerp elements
                        </h3>
                        <div class="c-sections_infos_text u-text">
                            <p>
                                Stagger those smooth animations using delays to create a rushing or dragging effect.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="o-layout_item u-3/5@from-medium">
                <div class="c-lerp-block">
                    <span class="c-lerp-block_index" data-scroll data-scroll-delay="0.2" data-scroll-speed="6" data-scroll-call="dynamicColor" data-scroll-repeat>
                        01
                    </span>
                    <span class="c-lerp-block_title" data-scroll data-scroll-delay="0.6" data-scroll-speed="6">
                        <span>
                            I have a lerp
                        </span>
                    </span>
                </div>
                <div class="c-lerp-block">
                    <span class="c-lerp-block_index" data-scroll data-scroll-delay="0.06" data-scroll-speed="6" data-scroll-call="dynamicColor" data-scroll-repeat>
                        02
                    </span>
                    <span class="c-lerp-block_title" data-scroll data-scroll-delay="0.1" data-scroll-speed="6">
                        <span>
                            Me too! <br>
                            And even more
                        </span>
                    </span>
                </div>
                <div class="c-lerp-block">
                    <span class="c-lerp-block_index" data-scroll data-scroll-delay="0.06" data-scroll-speed="6" data-scroll-call="dynamicColor" data-scroll-repeat>
                        03
                    </span>
                    <span class="c-lerp-block_title" data-scroll>
                        <span data-scroll data-scroll-delay="0.13" data-scroll-speed="6">B</span>
                        <span data-scroll data-scroll-delay="0.12" data-scroll-speed="6">y</span>
                        <span data-scroll data-scroll-delay="0.11" data-scroll-speed="6"> </span>
                        <span data-scroll data-scroll-delay="0.1" data-scroll-speed="6">L</span>
                        <span data-scroll data-scroll-delay="0.09" data-scroll-speed="6">e</span>
                        <span data-scroll data-scroll-delay="0.08" data-scroll-speed="6">t</span>
                        <span data-scroll data-scroll-delay="0.07" data-scroll-speed="6">t</span>
                        <span data-scroll data-scroll-delay="0.06" data-scroll-speed="6">e</span>
                        <span data-scroll data-scroll-delay="0.05" data-scroll-speed="6">r</span>
                    </span>
                </div>
                <div class="c-lerp-block">
                    <span class="c-lerp-block_index" data-scroll data-scroll-delay="0.03" data-scroll-speed="6" data-scroll-call="dynamicColor" data-scroll-repeat>
                        04
                    </span>
                    <span class="c-lerp-block_title" data-scroll data-scroll-delay="0.04" data-scroll-speed="6">
                        <span>
                            Soooo smooooth
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="c-section" data-scroll-section>
    <div class="o-container">
        <div class="c-cta">
            <h1 class="o-title" data-scroll>
                <span class="o-title_line">
                    <span>If you</span>
                </span>
                <span class="o-title_line">
                    <span>Enjoyed</span>
                </span>
                <span class="o-title_line u-white">
                    <span>Scrolling</span>
                </span>
            </h1>
            <hr class="c-cta_line" data-scroll data-scroll-offset="100" />
            <div class="c-cta_content">
                <div class="o-layout -gutter">
                    <div class="o-layout_item u-2/5@from-medium">
                        <p class="u-label">
                            Github
                        </p>
                    </div>
                    <div class="o-layout_item u-3/5@from-medium">
                        <div class="c-cta_section">
                            <div class="c-cta_content_text" data-scroll data-scroll-offset="100">
                                <h3>Check out Locomotive Scroll</h3>
                                <p>
                                    This library has evolved considerably over the years. The architecture and conventions shift according to our projects.
                                </p>
                                <p>
                                    Visit the GitHub repository page for a complete introduction and list of available options. Search the GitHub issue tracker carefully to check if your issue/feature has already been reported/requested before opening a new issue or submitting a pull request.
                                </p>
                            </div>
                            <a class="c-cta_button o-button" href="https://github.com/locomotivemtl/locomotive-scroll" target="_blank" data-scroll data-scroll-offset="100">
                                <span class="o-button_icon">
                                    <svg role="img">
                                        <use xlink:href="assets/images/sprite.svg#github"></use>
                                    </svg>
                                </span>
                                Check on Github
                                <span class="o-button_arrow u-icon">
                                    →
                                </span>
                            </a>
                        </div>
                        <hr class="c-cta_line -margin" data-scroll data-scroll-offset="100" />
                        <div class="c-cta_section">
                            <div class="c-cta_content_text" data-scroll data-scroll-offset="100">
                                <h4>Neue Montreal <br>Pangram Pangram® Foundry</h4>
                                <p>
                                    You like the font used on this page? Well this is your lucky day. You can get it on <a class="o-link -underline" href="https://pangrampangram.com/" target="_blank">pangrampangram.com</a>! Thanks to our good friend Mathieu Desjardins ❤️
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section data-scroll-section>
    <div class="c-choochoo">
        <div class="c-choochoo_item u-text-center" data-scroll data-scroll-direction="horizontal" data-scroll-speed="10">
            <span>
                🚂
            </span>
        </div>
        <div class="c-choochoo_item u-text-center -reverse" data-scroll data-scroll-direction="horizontal" data-scroll-speed="-10">
            <span>
                🚂
            </span>
        </div>
    </div>
</section>--->




<?php require('footer.php'); ?>