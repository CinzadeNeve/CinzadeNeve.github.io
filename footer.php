<footer id="directors">

<section class="topSection" id="contact">
    <h2 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000" class="font-title-sections container-padding">&lt;_Contato#&gt;</h2>
    <canvas id="decoration-subtitle-contact" class="decoration-subtitle container-padding" height="100" width="400"></canvas>

    <div class="grid-contact container-padding">
        <div class="info-contact" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">
            <div>
                <img src="./assets/icones/discord.png" alt="Discord" />
                <a class="font-family-bender font-color-white font-size-24"><strong>@meglatam</strong></a>
            </div>

            <div>
                <a href="mailto:atendimento@meglatam" class="font-family-bender font-color-white font-size-24"><strong>atendimento@meglatam</strong></a>
            </div>

            <div>
                <p class="font-family-bender font-color-white font-size-24">Rio de Janeiro</p>
                <p class="font-family-bender font-color-white font-size-24">Ipanema</p>
                <p class="font-family-bender font-color-white font-size-24">Rua Barão de Jaguaripe, 181</p>
            </div>

            <div class="contact-list-icones">
                <ul>
                    <li>
                        <a href="#">
                            <img src="./assets/icones/whatssap.png" alt="Whatssap" />
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="./assets/icones/youtube.png" alt="Youtube" />
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="./assets/icones/facebook.png" alt="Facebook" />
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="./assets/icones/twitter.png" alt="Twitter" />
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="./assets/icones/instagram.png" alt="Instagram" />
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <img src="./assets/icones/twitch.png" alt="Twitch" />
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="form-contact" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1000">
            <form id="formContact">
                <label for="contactNome">Nome*</label>
                <input type="text" name="contactNome" id="contactNome" />

                <label for="contactEmail">E-mail*</label>
                <input type="email" name="contactEmail" id="contactEmail" />

                <label for="contactAssunto">Assunto*</label>
                <input type="text" name="contactAssunto" id="contactAssunto" />

                <label for="contactMensagem">Mensagem*</label>
                <textarea name="contactMensagem" id="contactMensagem"></textarea>

                <div>
                    <button class="bt-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <canvas width="200" height="700" id="digits-animated"></canvas>
</section>

<div class="directors-achievement">
    <div class="directors-line">
        <div class="directors-circle">
            <div class="directors-small-circle"></div>
        </div>
    </div>
    <p  class="font-family-bender font-color-blue-white font-size-14" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="300">
        Realização
    </p>
</div>


<div class="containerImgDirectors container-padding" data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="600">
    <figure>
        <img src="./assets/realizacao/player1.png" alt="Player 1" />
        <img src="./assets/realizacao/good to game.png" alt="GTG Good to Game" />
    </figure>
</div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="./js/configMobile.js"></script>
<script src="./js/configGlobal.js"></script>
<script src="./js/animations/decorationSubTitle.js"></script>
<script src="./js/animation.js"></script>
<script src="./js/animation-arrow.js"></script>
<script src="./js/animations/graphic-bar.js"></script>
<script src="./js/animations/digits.js"></script>
<script src="./js/animations/warning.js"></script>
<script src="./js/animations/loading.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script>

let swiperParceiros1= new Swiper('.slide-parceiros-1',{
    slidesPerView:1,
    spaceBetween:20,
    loop:true,
    autoplay:
        {delay:2500,
            reverseDirection:true,
            disableOnInteraction:false,
        },
    breakpoints:{
        320: {slidesPerView: 2,}
        ,768:{slidesPerView:4},
        1024:{slidesPerView:4}
}});
    
let swiperParceiros2=new Swiper('.slide-parceiros-2',
    {slidesPerView:1,
    spaceBetween:20,
    loop:true,
    autoplay:{
        delay:2500,
        disableOnInteraction:false,
    },
    breakpoints:{
        320:{slidesPerView:2,},
        768:{slidesPerView:4},
        1024:{slidesPerView:4}
}});

let swiperGeneralChampionshipArrows= new Swiper('#general-championship .general-championship-arrows .swiper',{
    slidesPerView:1,
    spaceBetween:20,
    loop:true,
    autoplay:
        {delay:20,
            reverseDirection:true,
            disableOnInteraction:false,
        },
    breakpoints:{
        320: {slidesPerView: 10,}
        ,768:{slidesPerView:14},
        1024:{slidesPerView:18}
}});

</script>
</body>
</html>