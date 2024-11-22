<!-- order-section.php -->

<section class="order_sec"> <!-- OrderSec------------------------------------------ -->
    <div class="container">
        <h2>Хотите сделать заказ?</h2>
        <div class="order_wrapper">
            <div class="order_form">
                <p>Оставьте заявку или свяжитесь с нами любым
                    удобным способом. Наши менеджеры ответят
                    Вам на любой вопрос и обсудят задачи.
                </p>
                <form class="input_form" action="#">
                    <label>
                        <input type="name" required><span placeholder="Ваше имя"></span>
                    </label>
                    <label>
                        <input type="tel" required><span placeholder="Ваш телефон"></span>
                    </label>
                    <input type="email" placeholder="E-mail">
                </form>
                <div class="order_text order_hide">
                    <textarea class="speach_order" name="" id="" placeholder="Ваш текст"></textarea>
                    <label for="fileInput" class="file-label">Прикрепить файл<img
                            src="<?php bloginfo('template_url'); ?>/assets/img/icons/screpa.svg" alt=""></label>
                    <input type="file" class="file-input" id="fileInput" />
                </div>
                <a class="blue_btn order_btn" href="javascript:;">Оставить заявку</a>
            </div>
            <div class="order_text">
                <textarea class="speach_order" name="" id="" placeholder="Ваш текст"></textarea>
                <label for="fileInput" class="file-label">Прикрепить файл<img
                        src="<?php bloginfo('template_url'); ?>/assets/img/icons/screpa.svg" alt=""></label>
                <input type="file" class="file-input" id="fileInput" />
            </div>
            <div class="order_info">
                <a class="logo_black" href="javascript:;"><img
                        src="<?php bloginfo('template_url'); ?>/assets/img/main/logo_black.png" alt="Лого" width="221px"
                        height="52px"></a>
                <div class="order_social">
                    <div class="social_link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Telegram.svg" alt="WhatsApp"
                            width="56px" height="56px">
                        <a href="javascript:;">Написать</a>
                    </div>
                    <div class="social_link">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/icons/whatsApp.svg" alt="Telegram"
                            width="56px" height="56px">
                        <a href="javascript:;">Написать</a>
                    </div>
                </div>
                <ul>
                    <li><a href="tel:88006665544">8 800 666 55 44</a></li>
                    <li><a href="email:info@farvaternn.ru">info@farvaternn.ru</a></li>
                    <li>РнД, Красноармейская 124</li>
                </ul>
            </div>
            <div class="discount_order">
                <div class="discount_name">
                    <h3>Заберите скидку</h3>
                    <p>На первый заказ</p>
                </div>
                <div class="discount_bottom">
                    <p>-10%</p>
                    <a class="openSignPop" href="">Забрать</a>
                </div>
            </div>
        </div>
    </div>
</section>