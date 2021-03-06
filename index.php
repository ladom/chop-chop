<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Chop-Chop.org - zadanie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut icon" href="pictures/logo.ico">
    <link rel="stylesheet" type="text/css" href="styles/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="styles/style.css">
</head>

<body>

    <!-- Top -->

    <section class="top" id="top">
    </section>

    <!-- Header -->
    <header id="home">
        <div class="container header">
            <div class="header__column header__column--left">
                <a class="header__link" href="#home">Home</a>
            </div>
            <div class="header__column header__column--left">
                <a class="header__link" href="#products">Products</a>
            </div>
            <div class="header__column header__column--right">
                <a class="header__link" href="#about">About us</a>
            </div>
            <div class="header__column header__column--right">
                <a class="header__link" href="#contact">Contact</a>
            </div>
        </div>
    </header>

    <!-- Hero -->

    <section class="hero">
        <span class="line"></span>
        <div class="container hero__content">
            <h1 class="hero__title">This is just a sample page</h1>
            <button class="hero__button">Push the button</button>
        </div>
    </section>

    <!-- Content -->

    <section class="content" id="about">
        <span class="line"></span>
        <div class="container content__container">
            <div class="content__column">
                <div class="content__column--main">
                    <h2 class="content__title">A heading title</h2>
                    <img class="content__image" src="pictures/layer1.png" alt="picture">
                    <p class="content__text ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                    <br>
                    <p class="content__text ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
                </div>
            
                <div class="content__column--link">
                    <a class="content__link">&#151; read more</a>
                    <p class="content__more closed ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                </div>
            </div>
            <div class="content__column">
                <div class="content__column--main">
                    <h2 class="content__title">A much longer heading title</h2>
                    <img class="content__image" src="pictures/layer1.png" alt="picture">
                    <p class="content__text ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                    <br>
                    <p class="content__text ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.</p>
                </div>
                <div class="content__column--link">
                    <a class="content__link">&#151; read more</a>
                    <p class="content__more closed ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                </div>
            </div>
            <div class="content__column">
                <div class="content__column--main">
                    <h2 class="content__title">A heading title</h2>
                    <img class="content__image" src="pictures/layer1.png" alt="picture">
                    <p class="content__text ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                    <br>
                    <p class="content__text ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.</p>
                </div>
            
                <div class="content__column--link">
                    <a class="content__link">&#151; read more</a>
                    <p class="content__more closed ipsum">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->

    

    <section class="contact" id="contact">
        <span class="line"></span>
        <div class="container contact__content">
            <h1 class="contact__title">Contact us</h1>
            
            <form class="form" action="post.php" method="post">
                <div class="form__input">
                    <div class="form__left form__column">
                        <input class="form__left--input" type="text" name="name" placeholder="name" />
                        
                        <input class="form__left--input" type="text" name="email" placeholder="e-mail" />
                        
                        <input class="form__left--input" type="number" name="phone" placeholder="phone" />
                        
                    </div>
                    <div class="form__right form__column">
                        <textarea name="message" placeholder="your message"></textarea>
                        
                    </div>
                </div>
                <div class="form__submit">
                    <input type="submit" value="send message" class="form__submit--button">
                </div>
            </form>
            
        </div>
    </section>

    <!-- Footer -->

    <footer>
        <div class="container footer">
            <div class="footer__back">
                <div class="footer__backBtn">
                    <a href="#top" class="footer__backLink">back to top</a>
                </div>
            </div>
            <div class="footer__content">
                <div class="footer__left footer__column">
                    <div class="footer__left--left footer__links">
                        <a href="#home" class="footer__home footer__link">&#151; home</a>
                        <a href="#products" class="footer__products footer__link">&#151; products</a>
                    </div>
                    <div class="footer__left--right footer__links">
                        <a href="#about" class="footer__about footer__link">&#151; about us</a>
                        <a href="#contact" class="footer__contact footer__link">&#151; contact</a>
                    </div>
                </div>
                <div class="footer__center footer__column">
                    <div class="footer__social">
                        <a href="www.twitter.com" target="_blank" class="footer__social--twitter footer__social--link">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="www.facebook.com" target="_blank" class="footer__social--facebook footer__social--link">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </div>
                </div>
                <div class="footer__right footer__column">
                    <div class="footer__right--content">
                        <p class="footer__right--text">Copyright &#169; 2010 Sample &#38; Pack, Inc.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>