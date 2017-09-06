<?php
/**
 * Чистый Шаблон для разработки
 * Шаблон главной страницы
 * http://dontforget.pro
 * @package WordPress
 * @subpackage clean
 */
get_header(); // Подключаем хедер?>

    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>наши услуги</h2>
                </div>
            </div>
        </div>
        <div class="accordion">
            <ul>
                <li>
                    <div> <a href="#" data-toggle="modal" data-target="#portfolioModal1">
                            <h3>Заправка<br>картриджа</h3>
                            <!--<p>Description 1</p>-->
                        </a> </div>
                </li>
                <li>
                    <div> <a href="#" data-toggle="modal" data-target="#portfolioModal2">
                            <h3>Восстановление<br>картриджа</h3>
                            <!--<p>Description 2</p>-->
                        </a> </div>
                </li>
                <li>
                    <div> <a href="#" data-toggle="modal" data-target="#portfolioModal3">
                            <h3>Вечный<br>картридж</h3>
                            <!--<p>Description 3</p>-->
                        </a> </div>
                </li>
                <li>
                    <div> <a href="#" data-toggle="modal" data-target="#portfolioModal4">
                            <h3>Ремонт/Перепрошивка<br>принтеров</h3>
                            <!--<p>Description 4</p>-->
                        </a> </div>
                </li>
                <!--<li>-->
                <!--<div> <a href="#">-->
                <!--<h2>Title 5</h2>-->
                <!--<p>Description 5</p>-->
                <!--</a> </div>-->
                <!--</li>-->
                <!--<li>-->
                <!--<div> <a href="#">-->
                <!--<h2>Title 6</h2>-->
                <!--<p>Description 6</p>-->
                <!--</a> </div>-->
                <!--</li>-->
            </ul>
            <div id="shares"></div>
        </div>
<!--        <div id="shares"></div>-->
    </section>
    <section class="sign-up sale">
        <div class="container">
            <div class="row form-ukr">
                <div class="col-md-12 ">
	                <?php echo do_shortcode( '[contact-form-7 id="5" title="main"]' ); ?>
<!--	                --><?php //echo do_shortcode( '[contact-form-7 id="4" title="test"]' ); ?>
<!--                    <form id="contactForm" data-toggle="validator" class="form-inline signup-form" role="form" method="POST">-->
<!--                        <div class="row">-->
<!--                            <h4 class="text-uppercase text-center">ЗАКАЗАТЬ обратный звонок</h4>-->
<!--                        </div>-->
<!--                        <div class="row">-->
<!--                            <div class="form-input-group col-md-4 col-xs-12">-->
<!--                                <i class="fa fa-user"></i>-->
<!--                                <input type="text" class="" name="name" id="name" maxlength="20" placeholder="Ваше имя" required>-->
<!--                                <div class="help-block with-errors"></div>-->
<!--                            </div>-->
<!--                            <div class="form-input-group col-md-4 col-xs-12">-->
<!--                                <i class="fa fa-mobile"></i>-->
<!--                                <input type="tel" name="tel" pattern="2[0-9]{3}-[0-9]{3}" id="tel" maxlength="20" placeholder="Ваш телефон" required>-->
<!--                                <div class="help-block with-errors"></div>-->
<!--                            </div>-->
<!--                            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>-->
<!--                            <button type="submit" form="contactForm" class="btn-fill sign-up-btn col-md-4 col-xs-12">Заказать</button>-->
<!--                            <!--<div id="msgSubmit" class="h3 text-center hidden"></div>-->
<!--                            <div  id="shares" class="clearfix"></div>-->
<!--                        </div>-->
<!--                        <div id="msgSubmit" class="h4 text-center hidden"></div>-->
<!--                        <div class="clearfix"></div>-->
<!--                    </form>-->
                    <!--<form class="form-inline" role="form">-->
                    <!--<div class="form-group">-->
                    <!--<input type="text" class="form-control" id="exampleInputName" placeholder="Имя">-->
                    <!--</div>-->
                    <!--<div class="form-group">-->
                    <!--<input type="tel" class="form-control" id="exampleInputTel" placeholder="Телефон">-->
                    <!--</div>-->
                    <!--<button type="submit" class="btn btn-default">Заказать</button>-->
                    <!--</form>-->
                </div>
            </div>
            <div class="row">
                <img src="<?php echo bloginfo('template_url'); ?>/img/boy-sale.svg" alt="sale">
            </div>
        </div>
    </section>
    <section id="testimonial" class="testimonial-slider section-padding text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>ОТЗЫВЫ наших<br>клиентов</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="flexslider">
                        <ul class="slides">
                            <li class="row">
                                <div class="avatar col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/recall/ukr-print-4.jpg" alt="Ukraine Print Testimonial Avatar">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <h3>Денис Анатольевич</h3>
                                    <p class="author">Руководитель Днепропетровского филиала<br><b>Салтовский мясокомбинат</b></p>
                                    <p class="text-left">Компания «УКРАИНА ПРИНТ» зарекомендовала себя как честный, надежный, ответственный и обязательный партнер, работающий на профессиональном уровне.</p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="avatar col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/recall/ukr-print-5.jpg" alt="Ukraine Print Testimonial Avatar">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <h3>Вадим Иванович</h3>
                                    <p class="author">Завхоз римско-католической церкви<br><b>Костел Римско-католической церкви</b></p>
                                    <p class="text-left">Долго искал сервисный центр, в котором будет насыщенная печать текста, без дефектов, так как печатаем очень много литературы с картинками. Сменил несколько компаний. Нашел Украину принт в интернете и заказал одну заправку на пробу, качество приятно удивило. Еще порадовало то, что картридж не закончился через 100 листов, а отпечатал 5 пачек бумаги! Честная, качественная компания!</p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="avatar col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/recall/ukr-print-0.jpg" alt="Ukraine Print Testimonial Avatar">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <h3>Дмитрий Васильевич</h3>
                                    <p class="author">Директор, <b>IT HOUSE</b></p>
                                    <p class="text-left">Работаем с «УКРАИНА ПРИНТ» с 2006 г. по настоящее время. Сотрудничество с этой компанией характеризирует оперативное реагирование на заявки, своевременное выполнение работ, клиентоориентированность. </p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="avatar col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/recall/ukr-print-1.jpg" alt="Ukraine Print Testimonial Avatar">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <h3>Евгений Николаевич</h3>
                                    <p class="author">Менеджер, <b>Новониколаевский Элеватор</b></p>
                                    <p class="text-left">Нужно было заправить картриджи, порекомендовали Украину принт, сделал заявку, мастер приехал, в этот же день и заправил сразу все картриджи в офисе. Заправка была сделана очень аккуратно. Качество отличное, очень оперативно. Теперь всегда заправляюсь только в этой фирме.</p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="avatar col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/recall/ukr-print-3.jpg" alt="Ukraine Print Testimonial Avatar">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <h3>Владимир Владимирович</h3>
                                    <p class="author">Системный администратор IT<br><b>Киевстар</b></p>
                                    <p class="text-left">Сотрудничество с «УКРАИНА ПРИНТ» позволило нам значительно сократить расходы на обслуживание печатной техники и перейти на более прозрачные отношения. Работу «УКРАИНЫ ПРИНТ» также характеризует  оперативное реагирование на все наши заявки и своевременное выполнение работ на выгодных условиях для клиента.
                                    </p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="avatar col-lg-4 col-sm-4 col-md-4 col-xs-12">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/recall/ukr-print-2.jpg" alt="Ukraine Print Testimonial Avatar">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                                    <h3>Дмитрий Николаевич</h3>
                                    <p class="author">Зам директора<br><b>ЧП «Здоровье»</b></p>
                                    <p class="text-left">Ребята молодцы, восстановили мой картридж. Печать теперь идеальная! Носил его ранее в разные компании и никто не смог починить! Рекомендую всем!</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="about"></div>
    </section>
    <section class="hero-strip section-padding">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2>о нас</h2>
            </div>
            <div class="row padding-bottom-70">
                <div class="col-md-6 col-lg-3 text-icon text-center">
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<path class="st1" fill="#ec008c" d="M95.1,148.8H73.9V72.7l-14.5,3.8l-3.3-18.7l24.7-7.3h14.4v98.3H95.1z M75.4,147.3h18.2V52H80.9l-23.1,6.9
	l2.7,15.7l14.9-3.8V147.3z M143.8,148.8h-21.2V72.7l-14.5,3.8l-3.3-18.7l24.7-7.3h14.4v98.3H143.8z M124.1,147.3h18.2V52h-12.7
	l-23.1,6.9l2.7,15.7l14.9-3.8V147.3z"/>
					</svg>
                    <p>Опыт работы более 11 лет</p>
                </div>
                <div class="col-md-6 col-lg-3 text-icon text-center">
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<path class="st1" fill="#ec008c" d="M120.6,151.3H79.4l9.9-39.4c-2.7-1.3-7.5-7.6-9.3-10.1c-37.5-0.3-47-48.7-47.1-49.2l-0.2-0.9h25.6v-3h83.5v3
                        h25.4l-0.2,0.9c-0.1,0.5-9.6,48.9-47.1,49.2c-1.8,2.5-6.6,8.8-9.3,10.1L120.6,151.3z M81.4,149.8h37.3l-9.8-39.1h1
                        c1.1,0,5.7-5.2,9.2-10.1l0.2-0.3h0.4c33.8,0,44.3-40.5,45.8-47.1h-25v-3H59.8v3H34.6c1.5,6.6,12,47.1,45.8,47.1h0.4l0.2,0.3
                        c3.5,4.9,8,10.1,9.2,10.1h1L81.4,149.8z M73.9,95.7c-5.3,0-20.4-3.2-33.8-37.3l-0.4-1h21.2l0.1,0.6c0,0.2,3.3,22.4,14.8,36.3
                        l-0.6,0.5l0,0.7C74.9,95.6,74.5,95.7,73.9,95.7z M41.9,58.9C54.8,91,68.8,94.2,73.7,94.2c-10-12.9-13.5-31.6-14.2-35.3H41.9z
                         M126.7,95.7c-1.1,0-1.8-0.1-1.9-0.2l-1.2-0.3l0.8-0.9c11.5-14,14.8-36.1,14.8-36.3l0.1-0.6h21.1l-0.4,1
                        C146.8,92.4,131.9,95.7,126.7,95.7z M126.5,94.1C126.5,94.1,126.5,94.1,126.5,94.1c4.3,0,18.8-2.7,31.8-35.3h-17.7
                        C140,62.5,136.5,81.2,126.5,94.1z" />
					</svg>
                    <p>"Лідер галузі" 2011-2016 г. согласно Национальному бизнес-рейтингу лидеров экономики Украины</p>
                </div>
                <div class="col-md-6 col-lg-3 text-icon text-center">
                    <svg version="1.1" id="_x32_500_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
							<path class="st1" fill="#ec008c" d="M161.4,93.7c10,0,18-8.1,18-18s-8.1-18.1-18-18.1s-18,8.1-18,18.1S151.4,93.7,161.4,93.7z M161.4,59.1
                        c9.1,0,16.5,7.4,16.5,16.6s-7.4,16.5-16.5,16.5s-16.5-7.4-16.5-16.5S152.4,59.1,161.4,59.1z M99.6,82c12.3,0,22.2-10,22.2-22.2
                        s-10-22.2-22.2-22.2s-22.2,10-22.2,22.2C77.4,72,87.3,82,99.6,82z M99.6,39c11.4,0,20.8,9.3,20.8,20.8s-9.3,20.8-20.8,20.8
                        s-20.8-9.3-20.8-20.8S88.2,39,99.6,39z M58.1,98.3c2.8-6,8.9-10.1,15.9-10.1h51.3c4.7,0,9.1,1.8,12.4,5.2c1.5,1.6,2.7,3.4,3.6,5.3
                        l0.3,0.7c0.8,2,1.2,4.1,1.1,6.3v37.8c0,1.6-0.4,3.1-1.1,4.3c0,0-0.6,1.3-1.5,2c-1.7,1.7-4,2.8-6.5,2.8c-3.2,0-6-1.6-7.6-4.1v13.9
                        H73.3v-13.7c-1.4,2.3-3.8,3.9-7.7,3.9c-2.1,0-4-0.7-5.5-1.9v-2c1.4,1.5,3.4,2.4,5.5,2.4c5.6,0,7.7-4.2,7.7-8.2v-37.2h1.5v55.2h49.7
                        v-55.2h1.5v37.8c0,4.2,3.4,7.7,7.6,7.7c4.2,0,7.7-3.4,7.7-7.7v-37.8c0-4.3-1.6-8.3-4.6-11.3s-7.1-4.7-11.4-4.7H73.9
                        c-8.8,0-16,7.2-16,16v37.8c0,2,0.8,3.8,2.1,5.2h-1.5v0.6c-1.3-1.6-2.1-3.6-2.1-5.8v-37.8c0-2.1,0.4-4.1,1.1-6h1.4v-1.5 M59.9,148.7
                        C59.9,148.8,59.9,148.8,59.9,148.7v9.8H17.1v-11c-1.4,1.8-3.6,3-6.1,3c-4.2,0-7.5-3.4-7.5-7.5v-30.4c0-7.9,6.4-14.2,14.2-14.2h41.3
                        c-0.2,0.5,0.1,1-0.1,1.5H17.7c-7,0-12.8,5.7-12.8,12.8v30.4c0,3.3,2.7,6,6,6s6.1-2.7,6.1-6v-30.3h1.5v44.3h39.9v-8.4
                        C59.1,148.4,59.6,148.4,59.9,148.7z M196.6,112.6V143c0,4.2-3.4,7.5-7.5,7.5c-2.5,0-4.7-1.2-6-3v10.9h-43v-8.6
                        c0.6-0.6,1.1-1.3,1.5-2v9.1h39.9v-44.3h1.5V143c0,3.3,2.7,6,6,6s6-2.7,6-6v-30.4c-0.2-7.1-6-12.9-12.9-12.9h-41.4l-0.2-0.4
                        c-0.1-0.2-0.2-0.5-0.3-0.7l-0.2-0.4h42C189.9,98.3,196.4,104.7,196.6,112.6z M38.4,93.7c10,0,18-8.1,18-18s-8.1-18.1-18-18.1
                        s-18.1,8.1-18.1,18.1S28.4,93.7,38.4,93.7z M38.4,59.1c9.1,0,16.5,7.4,16.5,16.6s-7.4,16.5-16.5,16.5s-16.6-7.4-16.6-16.5
                        S29.3,59.1,38.4,59.1z" />
						</svg>

                    <p>Нам доверяют более 9 000 клиентов</p>
                </div>
                <div class="col-md-6 col-lg-3 text-icon text-center">
                    <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="200px" height="200px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
						<path class="st1" fill="#ec008c" d="M101.6,95.6l-9.9-17.1l2.3-1.3l7.1,12.1l6.7-19.3l2.5,0.9L101.6,95.6z M108,134.1c1.9-1.3,3.6-2.5,5.5-3
                        c1.8-0.5,4.1-0.4,6.2-0.3c3,0.2,6.1,0.4,8.5-1.1c2.6-1.5,3.9-4.2,5.3-6.9c1-1.9,2-4,3.4-5.4c1.4-1.5,3.5-2.5,5.5-3.5
                        c2.6-1.3,5.4-2.7,6.8-5.1c1.5-2.5,1.3-5.6,1.1-8.5c-0.1-2.2-0.3-4.4,0.3-6.2c0.5-1.6,1.6-3.3,2.8-5c1.8-2.7,3.6-5.4,3.6-8.5
                        c0-3.1-1.9-5.9-3.7-8.6c-1.1-1.7-2.2-3.3-2.7-4.9c-0.5-1.8-0.4-4.1-0.3-6.2c0.2-3,0.4-6.1-1.1-8.5c-1.5-2.6-4.2-3.9-6.9-5.3
                        c-1.9-1-4-2-5.4-3.4c-1.5-1.4-2.5-3.5-3.5-5.5c-1.3-2.6-2.7-5.4-5.1-6.8c-2.5-1.5-5.6-1.3-8.5-1.1c-2.2,0.1-4.4,0.3-6.2-0.3
                        c-1.6-0.5-3.3-1.6-5-2.8c-2.7-1.8-5.4-3.6-8.5-3.6c-2.9,0-5.5,1.8-8,3.5c-1.9,1.3-3.6,2.5-5.5,3c-1.8,0.5-4.1,0.4-6.2,0.3
                        c-3-0.2-6.1-0.4-8.5,1.1c-2.6,1.5-3.9,4.2-5.3,6.9c-1,1.9-2,4-3.4,5.4c-1.4,1.5-3.5,2.5-5.5,3.5c-2.6,1.3-5.4,2.7-6.8,5.1
                        c-1.5,2.5-1.3,5.6-1.1,8.5c0.1,2.2,0.3,4.4-0.3,6.2c-0.5,1.6-1.6,3.3-2.8,5c-1.8,2.7-3.6,5.4-3.6,8.5c0,2.9,1.8,5.5,3.5,8
                        c1.3,1.9,2.5,3.6,3,5.5c0.5,1.8,0.4,4.1,0.3,6.2c-0.2,3-0.4,6.1,1.1,8.5c1.5,2.6,4.2,3.9,6.9,5.3c1.9,1,4,2,5.4,3.4
                        c1.5,1.4,2.5,3.5,3.5,5.5c1.3,2.6,2.7,5.4,5.1,6.8c2.5,1.5,5.6,1.3,8.5,1.1c2.2-0.1,4.4-0.3,6.2,0.3c1.6,0.5,3.3,1.6,5,2.8
                        c2.7,1.8,5.4,3.6,8.5,3.6C102.9,137.5,105.5,135.8,108,134.1z M80.2,129.4c-2.9,0.2-5.6,0.3-7.7-0.9c-2-1.2-3.3-3.6-4.5-6.2
                        c-1.1-2.1-2.2-4.3-3.8-5.9c-1.6-1.6-3.7-2.7-5.8-3.7c-2.6-1.3-5-2.5-6.3-4.7c-1.2-2.1-1.1-4.8-0.9-7.7c0.1-2.3,0.3-4.7-0.3-6.7
                        c-0.5-2.1-1.9-4.1-3.2-6c-1.7-2.4-3.2-4.7-3.2-7.2c0-2.6,1.7-5.2,3.4-7.7c1.2-1.8,2.4-3.6,3-5.4c0.6-2.1,0.5-4.4,0.3-6.7
                        C51,57.8,50.8,55,52,53c1.2-2,3.6-3.3,6.2-4.5c2.1-1.1,4.3-2.2,5.9-3.8c1.6-1.6,2.7-3.7,3.7-5.8c1.3-2.6,2.5-5,4.7-6.3
                        c2.1-1.2,4.8-1.1,7.7-0.9c2.3,0.1,4.7,0.3,6.7-0.3c2.1-0.5,4.1-1.9,6-3.2c2.4-1.7,4.7-3.2,7.2-3.2c2.6,0,5.2,1.7,7.7,3.4
                        c1.8,1.2,3.6,2.4,5.4,3c2.1,0.6,4.4,0.5,6.7,0.3c2.9-0.2,5.6-0.3,7.7,0.9c2,1.2,3.3,3.6,4.5,6.2c1.1,2.1,2.2,4.3,3.8,5.9
                        c1.6,1.6,3.7,2.7,5.8,3.7c2.6,1.3,5,2.5,6.3,4.7c1.2,2.1,1.1,4.8,0.9,7.7c-0.1,2.3-0.3,4.7,0.3,6.8c0.6,1.8,1.7,3.5,2.9,5.3
                        c1.7,2.5,3.4,5.1,3.4,7.8c0,2.6-1.7,5.2-3.4,7.7c-1.2,1.8-2.4,3.6-3,5.4c-0.6,2.1-0.5,4.4-0.3,6.7c0.2,2.9,0.3,5.6-0.9,7.7
                        c-1.2,2-3.6,3.3-6.2,4.5c-2.1,1.1-4.3,2.2-5.9,3.8c-1.6,1.6-2.7,3.7-3.7,5.8c-1.3,2.6-2.5,5-4.7,6.3c-2.1,1.2-4.8,1.1-7.7,0.9
                        c-2.3-0.1-4.7-0.3-6.7,0.3c-2.1,0.5-4.1,1.9-6,3.2c-2.4,1.7-4.7,3.2-7.2,3.2c-2.6,0-5.2-1.7-7.7-3.4c-1.8-1.2-3.6-2.4-5.4-3
                        c-1.2-0.3-2.4-0.4-3.7-0.4C82.2,129.2,81.2,129.3,80.2,129.4z M141.2,80.5c0-22.7-18.5-41.1-41.2-41.1c-22.7,0-41.1,18.5-41.1,41.1
                        c0,22.7,18.5,41.2,41.1,41.2C122.7,121.7,141.2,103.2,141.2,80.5z M139.7,80.5c0,21.9-17.8,39.7-39.7,39.7
                        c-21.9,0-39.6-17.8-39.6-39.7c0-21.9,17.8-39.6,39.6-39.6C121.9,40.9,139.7,58.6,139.7,80.5z M114,130.4h-1.5V175h-11.8v-38.5h-1.5
                        V161H87.5v-30.3H86v31.8h13.3v14H114V130.4z" />
					</svg>
                    <p>Гарантия на все виды работ</p>
                </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9 ">
                <iframe width="640" height="480" src="https://www.youtube.com/embed/Z_q_kitBoOs" frameborder="0" allowfullscreen></iframe>

            </div>
        </div>
    </section>
    <section class="blog text-center padding-top-70 padding-bottom-70">
        <div class="container ">
            <div class="row">
                <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat.jpg" rel="gellery2" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat-1.jpg" alt="certificate" />
                                </div>
                            </a>

                        </figure>
                    </article>
                </div>
                <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat1.jpg" rel="gellery2" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat1-1.jpg" alt="certificate" />
                                </div>
                            </a>

                        </figure>
                    </article>
                </div>
                <div class="col-xs-25 col-sm-25 col-md-25 col-lg-25">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat2.jpg" rel="gellery2" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat2-2.jpg" class="single_image" alt="certificate" />
                                </div>
                            </a>

                        </figure>
                    </article>
                </div>
                <div class="col-xs-15 col-sm-15 col-md-15 col-lg-15">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat3.jpg" rel="gellery2" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/gramot/sertifekat3-1.jpg" class="single_image" alt="certificate" />
                                </div>
                            </a>

                        </figure>
                    </article>
                </div>

            </div>
            <div class="row medal-img">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo bloginfo('template_url'); ?>/img/medal/medal2011x600.png" rel="gallery1" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/medal/medal2011-1-1.png" class="single_image" alt="medal 2011" />
                                </div>
                            </a>

                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo bloginfo('template_url'); ?>/img/medal/medal2012x600.png" rel="gallery1" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/medal/medal2012-1-1.png" class="single_image" alt="medal 2012" />
                                </div>
                            </a>

                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo bloginfo('template_url'); ?>/img/medal/medal2014x600.png" rel="gallery1" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/medal/medal2014-1-1.png" class="single_image" alt="medal 2014" />
                                </div>
                            </a>

                        </figure>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="contakt section-padding sign-up">
        <div id="contakt"></div>
        <div class="container">
            <div class="row form-ukr">
                <div class="col-md-12">
	                <?php echo do_shortcode( '[contact-form-7 id="6" title="main_2"]' ); ?>
                </div>
            </div>
            <h2 class="text-center">контакты</h2>
        </div>
    </section>
    <section class="google-maps">
        <div class="container-fluid">
            <div class="row">
                <div id="ukraine-print"></div>
            </div>
        </div>
    </section>
    <section class="addres">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-text text-left inline-block">
                                <span class="fa-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <p class="flex">г. Днепр<br> пр. Сергея Нигояна 42<br>(бывшай пр. Калинина)</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-text text-left">
                                <p>
                                    <a href="tel:(056) 736-01-31"><i class="fa fa-phone" aria-hidden="true"></i> (056) 736-01-31</a><br>
                                    <a href="tel:(067) 536-89-69"><i class="fa fa-mobile" aria-hidden="true"></i> (067) 536-89-69</a><br>
                                    <a href="tel:(099) 299-68-50"><i class="fa fa-mobile" aria-hidden="true"></i> (099) 299-68-50</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-text text-left inline-block">
                                <span class="fa-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <p class="flex">г. Днепр<br> ул. Владимира Мономаха 12<br>(бывшая ул. Московская)</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <div class="contact-text text-left">
                                <p>
                                    <a href="tel:(056) 736-01-31"><i class="fa fa-phone" aria-hidden="true"></i> (056) 736-01-31</a><br>
                                    <a href="tel:(067) 536-89-69"><i class="fa fa-mobile" aria-hidden="true"></i> (067) 536-89-69</a><br>
                                    <a href="tel:(099) 299-68-50"><i class="fa fa-mobile" aria-hidden="true"></i> (099) 299-68-50</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <div id="videoModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <div class="modal-dialog">
            <div class="embed-responsive embed-responsive-16by9">
<!--                <iframe width="660" height="371" src="https://www.youtube.com/embed/Z_q_kitBoOs?&border=0&controls=2&modestbranding=1" frameborder="0" allowfullscreen></iframe>-->
            </div>
        </div>
    </div>

    <!--    ЗАПРАВКА КАРТРИДЖА-->
    <div class="modal-order modal fade" id="portfolioModal1-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<?php echo do_shortcode( '[contact-form-7 id="7" title="REFILL"]' ); ?>
    </div>

    <!--    ВОССТАНОВЛЕНИЕ КАРТРИДЖА-->
    <div class="modal-order modal fade" id="portfolioModal2-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<?php echo do_shortcode( '[contact-form-7 id="8" title="RECOVERY"]' ); ?>
    </div>

    <!--    ВЕЧНЫЙ КАРТРИДЖ-->
    <div class="modal-order modal fade" id="portfolioModal3-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<?php echo do_shortcode( '[contact-form-7 id="9" title="SERVICE"]' ); ?>
    </div>

    <!--    РЕМОНТ ПРИНТЕРА-->
    <div class="modal-order modal fade" id="portfolioModal4-order" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<?php echo do_shortcode( '[contact-form-7 id="10" title="REPAIR"]' ); ?>
    </div>

    <!-- modal #1 -->
    <div class="modal modal-wide fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="border-color">
                <div class="modal-content text-center">
                    <div class="modal-header center-block">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="center-block">
                            <div class="drop inline-block">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
									<path class="st0" fill="#fff" d="M159.3,199.6H55.5c-7.7,0-14-6.5-14-14.6v-40.8c0-0.7-0.2-1.3-0.6-1.7l-10.2-10.6c-1.4-1.5-2.2-3.5-2.2-5.5
									V96.6c0-7.9,6.1-14.4,13.6-14.6V69.4c0-8.1,6.5-14.6,14.6-14.6h102c8,0,14.6,6.5,14.6,14.6V185C173.3,193,167,199.6,159.3,199.6z
									M42.5,84c-6.6,0-12,5.7-12,12.6v29.8c0,1.5,0.6,3,1.6,4.1l10.2,10.6c0.7,0.7,1.2,1.9,1.2,3.1V185c0,6.9,5.4,12.6,12,12.6h103.8
									c6.6,0,12-5.7,12-12.6V69.4c0-6.9-5.7-12.6-12.6-12.6h-102c-6.9,0-12.6,5.7-12.6,12.6V84H42.5z M173.3,84H42.1V69.4
									c0-8.1,6.5-14.6,14.6-14.6h102c8,0,14.6,6.5,14.6,14.6V84z M44.1,82h127.2V69.4c0-6.9-5.7-12.6-12.6-12.6h-102
									c-6.9,0-12.6,5.7-12.6,12.6V82z M138.3,172.4H77.1c-4.2,0-7.8-3.6-7.8-7.8V117c0-4.2,3.6-7.8,7.8-7.8h61.2c4.2,0,7.8,3.6,7.8,7.8
									v47.6C146.1,168.8,142.5,172.4,138.3,172.4z M77.1,111.2c-3.1,0-5.8,2.7-5.8,5.8v47.6c0,3.1,2.7,5.8,5.8,5.8h61.2
									c3.1,0,5.8-2.7,5.8-5.8V117c0-3.1-2.7-5.8-5.8-5.8H77.1z M134.9,165.6H80.5c-2.5,0-4.4-1.9-4.4-4.4v-20.4c0-2.5,1.9-4.4,4.4-4.4
									h54.4c2.5,0,4.4,1.9,4.4,4.4v20.4C139.3,163.7,137.4,165.6,134.9,165.6z M80.5,138.4c-1.3,0-2.4,1.1-2.4,2.4v20.4
									c0,1.3,1.1,2.4,2.4,2.4h54.4c1.3,0,2.4-1.1,2.4-2.4v-20.4c0-1.3-1.1-2.4-2.4-2.4H80.5z M134.9,124.8h-27.2c-2.5,0-4.4-1.9-4.4-4.4
									c0-2.5,1.9-4.4,4.4-4.4h27.2c2.5,0,4.4,1.9,4.4,4.4C139.3,122.9,137.4,124.8,134.9,124.8z M107.7,118c-1.3,0-2.4,1.1-2.4,2.4
									s1.1,2.4,2.4,2.4h27.2c1.3,0,2.4-1.1,2.4-2.4s-1.1-2.4-2.4-2.4H107.7z M90.7,123.8c0,3.7-3.1,6.8-6.8,6.8s-6.8-3.1-6.8-6.8
									s3.1-6.8,6.8-6.8S90.7,120,90.7,123.8L90.7,123.8z M105.2,33.3c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1
									c0.4,0.5,10.2,13.4,10.2,20.4C116.2,28.4,111.3,33.3,105.2,33.3z M105.2,4.2c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9
									C114.2,17.1,107.5,7.4,105.2,4.2z M105.7,28.2c0-0.8-0.7-1.5-1.5-1.5c-0.9,0-1.8-0.4-2.7-1.1c-0.6-0.4-0.8-1.3-0.8-2.4
									c0-0.8-0.7-1.5-1.5-1.5c-0.8,0-1.5,0.7-1.5,1.5c0,2.6,1.1,4.1,2,4.8c1.4,1.1,3,1.7,4.5,1.7C105,29.7,105.7,29,105.7,28.2z
									M82.6,48.2c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1c0.4,0.5,10.2,13.4,10.2,20.4C93.6,43.3,88.7,48.2,82.6,48.2z
									M82.6,19.1c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9C91.6,31.9,84.9,22.3,82.6,19.1z M83.2,43.2c0-0.8-0.7-1.5-1.5-1.5
									c-0.9,0-1.7-0.3-2.6-1c-0.6-0.6-0.9-1.5-0.9-2.5c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5c0,1.8,0.6,3.5,1.8,4.7l0.1,0.1
									c1.4,1.1,3,1.7,4.5,1.7C82.5,44.7,83.2,44,83.2,43.2z M129.7,48.2c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1
									c0.4,0.5,10.2,13.4,10.2,20.4C140.7,43.3,135.8,48.2,129.7,48.2z M129.7,19.1c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9
									C138.7,31.9,132,22.3,129.7,19.1z M130.3,43.2c0-0.8-0.7-1.5-1.5-1.5c-0.9,0-1.7-0.3-2.6-1c-0.6-0.6-0.9-1.5-0.9-2.5
									c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5c0,1.8,0.6,3.5,1.8,4.7l0.1,0.1c1.4,1.1,3,1.7,4.5,1.7C129.6,44.7,130.3,44,130.3,43.2z" />
								</svg>
                            </div>
                            <h4 class="modal-title inline-block">Заправка картриджа</h4>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="body-sale">
                            <div class="img-boy-sale">
                                <img src="<?php echo bloginfo('template_url'); ?>/img/sale-body_1.svg" alt="sale body ukraine print">
                            </div>
                        </div>
                        <div class="container-fluid bd-example-row">
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <h4>Процесс заправки картриджей в нашем Сервисном Центре:</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>1. Разборка</td>
                                                <th>2. Полная чистка, смазка</th>
                                            </tr>
                                            <tr>
                                                <td>3. Заправка картриджа тонером европейского качества «SCC»</td>
                                                <th>4. Сборка картриджа.Тест качества печати</th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="">Стоимость заправки стандартного* картриджа в Сервисном Центре</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>CANON</td>
                                                <th rowspan="5" class="text-center font-20" style="vertical-align: middle">78</th>
                                            </tr>
                                            <tr>
                                                <td class="row">HEWLETT PACKARD</td>
                                            </tr>
                                            <tr>
                                                <td class="row">SAMSUNG</td>
                                            </tr>
                                            <tr>
                                                <td class="row">XEROX</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-left"><small>* уточняйте у менеджера</small></p>
                                </div>
                                <div class="modal-text-bottom">
                                    <h3>МЫ ЗАПРАВИЛИ КАРТРИДЖЕЙ В АВГУСТЕ 2017</h3>
                                    <p class="text-clock"><span>6</span><span>5</span><span>4</span><span>7</span></p>
                                    <h4 class="">Гарантия на весь ресурс печати картриджа!</h4>
                                    <p>Получить консультацию специалиста:</p>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0675368969"><svg width="25" height="25"><use xlink:href='#kievstar'/></svg>067 536-8969</a></div>
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0992996850"><svg width="25" height="25"><use xlink:href='#vodafone'/></svg>099 299-6850</a></div>
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0567360131"><svg width="25" height="25"><use xlink:href='#phone'/></svg>056 736-0131</a></div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <button type="button" disabled="disabled" class="btn btn-default btn-prev text-left pull-left"><span>&#10229;</span></button>

                    <button type="button" class="btn btn-default btn-next text-right pull-right"><span>&#10230;</span></button>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-fill btn-primary text-center"  data-toggle="modal" data-target="#portfolioModal1-order">ЗАКАЗАТЬ звонок специалиста</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- modal #2 -->
    <div class="modal modal-wide fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="border-color">
                <div class="modal-content text-center">
                    <div class="modal-header center-block">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="center-block">
                            <div class="drop inline-block">
                                <svg version="1.1" fill="#fff" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 152 152" style="enable-background:new 0 0 152 152;" xml:space="preserve">
                                    <path d="M126.8,103.4c0,13-9.8,24-22.7,25.6l-20.2,0.2l1.4,15.4c0.3,3.2,2.9,5.7,6.2,5.7h6.8v1.6h-6.8
                                    c-4.1,0-7.4-3-7.8-7.1l-1.5-17.1l21.9-0.2c12.1-1.5,21.2-11.8,21.2-24c0-10.6-6.9-20-17-23.1l-1-0.3l0.6-0.8c2.3-3,3.5-6.7,3.5-10.4
                                    c0-9.6-7.8-17.3-17.3-17.3h-0.8v-0.8c0.1-0.7,0.1-1.5,0.1-2.1c0-9.6-7.8-17.3-17.3-17.3c-9.6,0-17.3,7.8-17.3,17.3
                                    c0,0.6,0,1.4,0.1,2.1l0.1,0.8h-0.9L58,50.8l0,0v0.7c-9.6,0-17.3,7.8-17.3,17.3c0,3.9,1.2,7.4,3.5,10.4l0.6,0.8l-1,0.3
                                    c-10.2,3.2-17,12.5-17,23.1c0,12.5,9.4,22.9,21.8,24.2l21.2,0.1l-1.5,17.1c-0.3,4.1-3.6,7.1-7.8,7.1h-6v-1.6h6
                                    c3.2,0,5.9-2.5,6.2-5.7l1.4-15.4l-19.7-0.1c-13.3-1.4-23.3-12.4-23.3-25.7c0-11,6.8-20.6,17.1-24.3c-2.1-3.1-3.2-6.8-3.2-10.5
                                    c0-10.2,8.1-18.5,18.1-18.8c0-0.5-0.1-0.9-0.1-1.5c0-10.4,8.4-18.8,18.8-18.8c10.3-0.1,18.7,8.4,18.7,18.8c0,0.4,0,0.9-0.1,1.5
                                    c10.1,0.4,18.1,8.7,18.1,18.8c0,3.7-1.1,7.4-3.2,10.5C119.9,82.8,126.8,92.4,126.8,103.4z M50,107.6c-0.6-1-0.6-2.2,0-3.2l7-12.2
                                    l5.1,2.9L62,81.9l-11.5,6.7l5.1,2.9l-7,12.2c-0.8,1.5-0.8,3.3,0,4.8c0.8,1.5,2.4,2.4,4.2,2.4h19.9v-1.6H52.8
                                    C51.7,109.2,50.6,108.6,50,107.6z M87,110.8H101c1.8,0,3.3-0.9,4.2-2.4c0.8-1.5,0.8-3.3,0-4.8l-10-17.2l-1.4,0.8l10,17.2
                                    c0.6,1,0.6,2.2,0,3.2c-0.6,1-1.7,1.7-2.8,1.7H87v-5.8l-11.5,6.7l11.6,6.6L87,110.8z M77,60.5c1.1,0,2.2,0.6,2.8,1.7l7,12.1l-5,2.9
                                    l11.6,6.6l-0.1-13.2l-5.1,2.9l-7-12.1C80.3,59.9,78.8,59,77,59l0,0c-1.8,0-3.3,0.9-4.2,2.4l-10,17.2l1.4,0.8l10-17.2
                                    C74.8,61.1,75.8,60.5,77,60.5L77,60.5z" />
                                </svg>
                            </div>
                            <h4 class="modal-title inline-block">Восстановление  картриджей </h4>

                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="body-sale">
                            <div class="img-boy-sale">
                                <img src="<?php echo bloginfo('template_url'); ?>/img/sale-body_2.svg" alt="sale ukraine print">
                            </div>
                        </div>
                        <div class="container-fluid bd-example-row">
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <h4>Восстановление картриджа – это замена пришедших в негодность внутренних комплектующих на новые.</h4>
                                    <h3>Процесс восстановления картриджа:</h3>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>1. Разборка</td>
                                                <th>2. Полная чистка</th>
                                                <td>3. Определение неисправных комплектующих</td>

                                            </tr>
                                            <tr>
                                                <th>4. Замена комплектующих</th>
                                                <td>5. Заправка картриджа тонером европейского качества «SCC</td>
                                                <th>6. Сборка картриджа. Тест качества печати</th>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="">Стоимость восстановления стандартного* картриджав Сервисном Центре</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>CANON</td>
                                                <th rowspan="5" class="text-center font-20" style="vertical-align: middle">190 грн.</th>
                                            </tr>
                                            <tr>
                                                <td class="row">HEWLETT PACKARD</td>
                                            </tr>
                                            <tr>
                                                <td class="row">SAMSUNG</td>
                                            </tr>
                                            <tr>
                                                <td class="row">XEROX</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-left"><small>* уточняйте у менеджера</small></p>
                                </div>
                                <div class="modal-text-bottom">
                                    <h3>МЫ ВОССТАНОВИЛИ КАРТРИДЖЕЙ В АВГУСТЕ 2017</h3>
                                    <p class="text-clock"><span>1</span><span>2</span><span>8</span><span>4</span></p>
                                    <h4 class="">Гарантия на весь ресурс печати картриджа!</h4>
                                    <p>Получить консультацию специалиста:</p>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0675368969"><svg width="25" height="25"><use xlink:href='#kievstar'/></svg>067 536-8969</a></div>
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0992996850"><svg width="25" height="25"><use xlink:href='#vodafone'/></svg>099 299-6850</a></div>
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0567360131"><svg width="25" height="25"><use xlink:href='#phone'/></svg>056 736-0131</a></div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <button type="button" class="btn btn-default btn-prev text-left pull-left"><span>&#10229;</span></button>

                    <button type="button" class="btn btn-default btn-next text-right pull-right"><span>&#10230;</span></button>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-fill btn-primary text-center"  data-toggle="modal" data-target="#portfolioModal2-order">ЗАКАЗАТЬ звонок специалиста</button>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- modal #3  -->
    <div class="modal modal-wide fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="border-color">
                <div class="modal-content text-center">
                    <div class="modal-header center-block">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="center-block">
                            <div class="drop inline-block">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
									<path class="st0" fill="#fff" d="M159.3,199.6H55.5c-7.7,0-14-6.5-14-14.6v-40.8c0-0.7-0.2-1.3-0.6-1.7l-10.2-10.6c-1.4-1.5-2.2-3.5-2.2-5.5
									V96.6c0-7.9,6.1-14.4,13.6-14.6V69.4c0-8.1,6.5-14.6,14.6-14.6h102c8,0,14.6,6.5,14.6,14.6V185C173.3,193,167,199.6,159.3,199.6z
									M42.5,84c-6.6,0-12,5.7-12,12.6v29.8c0,1.5,0.6,3,1.6,4.1l10.2,10.6c0.7,0.7,1.2,1.9,1.2,3.1V185c0,6.9,5.4,12.6,12,12.6h103.8
									c6.6,0,12-5.7,12-12.6V69.4c0-6.9-5.7-12.6-12.6-12.6h-102c-6.9,0-12.6,5.7-12.6,12.6V84H42.5z M173.3,84H42.1V69.4
									c0-8.1,6.5-14.6,14.6-14.6h102c8,0,14.6,6.5,14.6,14.6V84z M44.1,82h127.2V69.4c0-6.9-5.7-12.6-12.6-12.6h-102
									c-6.9,0-12.6,5.7-12.6,12.6V82z M138.3,172.4H77.1c-4.2,0-7.8-3.6-7.8-7.8V117c0-4.2,3.6-7.8,7.8-7.8h61.2c4.2,0,7.8,3.6,7.8,7.8
									v47.6C146.1,168.8,142.5,172.4,138.3,172.4z M77.1,111.2c-3.1,0-5.8,2.7-5.8,5.8v47.6c0,3.1,2.7,5.8,5.8,5.8h61.2
									c3.1,0,5.8-2.7,5.8-5.8V117c0-3.1-2.7-5.8-5.8-5.8H77.1z M134.9,165.6H80.5c-2.5,0-4.4-1.9-4.4-4.4v-20.4c0-2.5,1.9-4.4,4.4-4.4
									h54.4c2.5,0,4.4,1.9,4.4,4.4v20.4C139.3,163.7,137.4,165.6,134.9,165.6z M80.5,138.4c-1.3,0-2.4,1.1-2.4,2.4v20.4
									c0,1.3,1.1,2.4,2.4,2.4h54.4c1.3,0,2.4-1.1,2.4-2.4v-20.4c0-1.3-1.1-2.4-2.4-2.4H80.5z M134.9,124.8h-27.2c-2.5,0-4.4-1.9-4.4-4.4
									c0-2.5,1.9-4.4,4.4-4.4h27.2c2.5,0,4.4,1.9,4.4,4.4C139.3,122.9,137.4,124.8,134.9,124.8z M107.7,118c-1.3,0-2.4,1.1-2.4,2.4
									s1.1,2.4,2.4,2.4h27.2c1.3,0,2.4-1.1,2.4-2.4s-1.1-2.4-2.4-2.4H107.7z M90.7,123.8c0,3.7-3.1,6.8-6.8,6.8s-6.8-3.1-6.8-6.8
									s3.1-6.8,6.8-6.8S90.7,120,90.7,123.8L90.7,123.8z M105.2,33.3c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1
									c0.4,0.5,10.2,13.4,10.2,20.4C116.2,28.4,111.3,33.3,105.2,33.3z M105.2,4.2c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9
									C114.2,17.1,107.5,7.4,105.2,4.2z M105.7,28.2c0-0.8-0.7-1.5-1.5-1.5c-0.9,0-1.8-0.4-2.7-1.1c-0.6-0.4-0.8-1.3-0.8-2.4
									c0-0.8-0.7-1.5-1.5-1.5c-0.8,0-1.5,0.7-1.5,1.5c0,2.6,1.1,4.1,2,4.8c1.4,1.1,3,1.7,4.5,1.7C105,29.7,105.7,29,105.7,28.2z
									M82.6,48.2c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1c0.4,0.5,10.2,13.4,10.2,20.4C93.6,43.3,88.7,48.2,82.6,48.2z
									M82.6,19.1c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9C91.6,31.9,84.9,22.3,82.6,19.1z M83.2,43.2c0-0.8-0.7-1.5-1.5-1.5
									c-0.9,0-1.7-0.3-2.6-1c-0.6-0.6-0.9-1.5-0.9-2.5c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5c0,1.8,0.6,3.5,1.8,4.7l0.1,0.1
									c1.4,1.1,3,1.7,4.5,1.7C82.5,44.7,83.2,44,83.2,43.2z M129.7,48.2c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1
									c0.4,0.5,10.2,13.4,10.2,20.4C140.7,43.3,135.8,48.2,129.7,48.2z M129.7,19.1c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9
									C138.7,31.9,132,22.3,129.7,19.1z M130.3,43.2c0-0.8-0.7-1.5-1.5-1.5c-0.9,0-1.7-0.3-2.6-1c-0.6-0.6-0.9-1.5-0.9-2.5
									c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5c0,1.8,0.6,3.5,1.8,4.7l0.1,0.1c1.4,1.1,3,1.7,4.5,1.7C129.6,44.7,130.3,44,130.3,43.2z" />
								</svg>
                            </div>
                            <h4 class="modal-title inline-block">Услуга «Вечный картридж» </h4>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="body-sale">
                            <div class="img-boy-sale">
                                <img src="<?php echo bloginfo('template_url'); ?>/img/sale-body_4.svg" alt="sale ukraine print">
                            </div>
                        </div>
                        <div class="container-fluid bd-example-row">
                            <div class="row text-left">
                                <div class="col-md-12">
                                    <h4>Услуга «Вечный картридж» - обмен пустого картриджа на полный.</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 arrow-c">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/icon/mess.svg" alt="mess">
                                </div>
                                <div class="col-md-3 arrow-c">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/icon/car.svg" alt="car">
                                </div>
                                <div class="col-md-3 arrow-c">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/icon/print.svg" alt="print">
                                </div>
                                <div class="col-md-3">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/icon/print-c.svg" alt="print">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="">Стоимость услуги «Вечный картридж» для стандартного* картриджа</h4>
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <tbody>
                                            <tr>
                                                <td>CANON</td>
                                                <th rowspan="5" class="text-center font-20" style="vertical-align: middle">120 грн.</th>
                                            </tr>
                                            <tr>
                                                <td class="row">HEWLETT PACKARD</td>
                                            </tr>
                                            <tr>
                                                <td class="row">SAMSUNG</td>
                                            </tr>
                                            <tr>
                                                <td class="row">XEROX</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-left"><small>* уточняйте у менеджера</small></p>
                                </div>
                                <div class="modal-text-bottom">
                                    <h3>МЫ ЗАМЕНИЛИ КАРТРИДЖЕЙ В АВГУСТЕ 2017</h3>
                                    <p class="text-clock"><span>4</span><span>3</span><span>4</span><span>1</span></p>
                                    <h4 class="">Гарантия на весь ресурс печати картриджа!</h4>
                                    <p>Получить консультацию специалиста:</p>
                                </div>
                                <div class="row ">
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0675368969"><svg width="25" height="25"><use xlink:href='#kievstar'/></svg>067 536-8969</a></div>
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0992996850"><svg width="25" height="25"><use xlink:href='#vodafone'/></svg>099 299-6850</a></div>
                                    <div class="col-sm-4 col-xs-12"><a href="tel:0567360131"><svg width="25" height="25"><use xlink:href='#phone'/></svg>056 736-0131</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-default btn-prev text-left pull-left"><span>&#10229;</span></button>

                    <button type="button" class="btn btn-default btn-next text-right pull-right"><span>&#10230;</span></button>


                    <div class="modal-footer">

                        <button type="button" class="btn btn-fill btn-primary text-center"  data-toggle="modal" data-target="#portfolioModal3-order">ЗАКАЗАТЬ звонок специалиста</button>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- modal #4 -->

    <div class="modal modal-wide fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="border-color">
                <div class="modal-content text-center">
                    <div class="modal-header center-block">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <div class="center-block">
                            <div class="drop inline-block">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
									<path class="st0" fill="#fff" d="M159.3,199.6H55.5c-7.7,0-14-6.5-14-14.6v-40.8c0-0.7-0.2-1.3-0.6-1.7l-10.2-10.6c-1.4-1.5-2.2-3.5-2.2-5.5
									V96.6c0-7.9,6.1-14.4,13.6-14.6V69.4c0-8.1,6.5-14.6,14.6-14.6h102c8,0,14.6,6.5,14.6,14.6V185C173.3,193,167,199.6,159.3,199.6z
									M42.5,84c-6.6,0-12,5.7-12,12.6v29.8c0,1.5,0.6,3,1.6,4.1l10.2,10.6c0.7,0.7,1.2,1.9,1.2,3.1V185c0,6.9,5.4,12.6,12,12.6h103.8
									c6.6,0,12-5.7,12-12.6V69.4c0-6.9-5.7-12.6-12.6-12.6h-102c-6.9,0-12.6,5.7-12.6,12.6V84H42.5z M173.3,84H42.1V69.4
									c0-8.1,6.5-14.6,14.6-14.6h102c8,0,14.6,6.5,14.6,14.6V84z M44.1,82h127.2V69.4c0-6.9-5.7-12.6-12.6-12.6h-102
									c-6.9,0-12.6,5.7-12.6,12.6V82z M138.3,172.4H77.1c-4.2,0-7.8-3.6-7.8-7.8V117c0-4.2,3.6-7.8,7.8-7.8h61.2c4.2,0,7.8,3.6,7.8,7.8
									v47.6C146.1,168.8,142.5,172.4,138.3,172.4z M77.1,111.2c-3.1,0-5.8,2.7-5.8,5.8v47.6c0,3.1,2.7,5.8,5.8,5.8h61.2
									c3.1,0,5.8-2.7,5.8-5.8V117c0-3.1-2.7-5.8-5.8-5.8H77.1z M134.9,165.6H80.5c-2.5,0-4.4-1.9-4.4-4.4v-20.4c0-2.5,1.9-4.4,4.4-4.4
									h54.4c2.5,0,4.4,1.9,4.4,4.4v20.4C139.3,163.7,137.4,165.6,134.9,165.6z M80.5,138.4c-1.3,0-2.4,1.1-2.4,2.4v20.4
									c0,1.3,1.1,2.4,2.4,2.4h54.4c1.3,0,2.4-1.1,2.4-2.4v-20.4c0-1.3-1.1-2.4-2.4-2.4H80.5z M134.9,124.8h-27.2c-2.5,0-4.4-1.9-4.4-4.4
									c0-2.5,1.9-4.4,4.4-4.4h27.2c2.5,0,4.4,1.9,4.4,4.4C139.3,122.9,137.4,124.8,134.9,124.8z M107.7,118c-1.3,0-2.4,1.1-2.4,2.4
									s1.1,2.4,2.4,2.4h27.2c1.3,0,2.4-1.1,2.4-2.4s-1.1-2.4-2.4-2.4H107.7z M90.7,123.8c0,3.7-3.1,6.8-6.8,6.8s-6.8-3.1-6.8-6.8
									s3.1-6.8,6.8-6.8S90.7,120,90.7,123.8L90.7,123.8z M105.2,33.3c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1
									c0.4,0.5,10.2,13.4,10.2,20.4C116.2,28.4,111.3,33.3,105.2,33.3z M105.2,4.2c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9
									C114.2,17.1,107.5,7.4,105.2,4.2z M105.7,28.2c0-0.8-0.7-1.5-1.5-1.5c-0.9,0-1.8-0.4-2.7-1.1c-0.6-0.4-0.8-1.3-0.8-2.4
									c0-0.8-0.7-1.5-1.5-1.5c-0.8,0-1.5,0.7-1.5,1.5c0,2.6,1.1,4.1,2,4.8c1.4,1.1,3,1.7,4.5,1.7C105,29.7,105.7,29,105.7,28.2z
									M82.6,48.2c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1c0.4,0.5,10.2,13.4,10.2,20.4C93.6,43.3,88.7,48.2,82.6,48.2z
									M82.6,19.1c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9C91.6,31.9,84.9,22.3,82.6,19.1z M83.2,43.2c0-0.8-0.7-1.5-1.5-1.5
									c-0.9,0-1.7-0.3-2.6-1c-0.6-0.6-0.9-1.5-0.9-2.5c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5c0,1.8,0.6,3.5,1.8,4.7l0.1,0.1
									c1.4,1.1,3,1.7,4.5,1.7C82.5,44.7,83.2,44,83.2,43.2z M129.7,48.2c-6.1,0-11-4.9-11-11c0-7.1,9.8-19.9,10.2-20.4l0.8-1l0.8,1
									c0.4,0.5,10.2,13.4,10.2,20.4C140.7,43.3,135.8,48.2,129.7,48.2z M129.7,19.1c-2.3,3.2-9,12.8-9,18.1c0,5,4,9,9,9s9-4,9-9
									C138.7,31.9,132,22.3,129.7,19.1z M130.3,43.2c0-0.8-0.7-1.5-1.5-1.5c-0.9,0-1.7-0.3-2.6-1c-0.6-0.6-0.9-1.5-0.9-2.5
									c0-0.8-0.7-1.5-1.5-1.5s-1.5,0.7-1.5,1.5c0,1.8,0.6,3.5,1.8,4.7l0.1,0.1c1.4,1.1,3,1.7,4.5,1.7C129.6,44.7,130.3,44,130.3,43.2z" />
								</svg>
                            </div>
                            <h4 class="modal-title inline-block">Ремонт оргтехники и профессиональная<br>«перепрошивка» принтеров SAMSUNG и XEROX</h4>
                        </div>
                    </div>

                    <div class="modal-body">
                        <div class="body-sale">
                            <div class="img-boy-sale">
                                <img src="<?php echo bloginfo('template_url'); ?>/img/sale-body_3.svg" alt="sale ukraine print">
                            </div>
                        </div>
                        <div class="container-fluid bd-example-row">
                            <div class="row text-left">
                                <div class="col-md-12 font-r marker">
                                    <p>Ремонт выполняется квалифицированными сервисными инженерами, опыт работы каждого в сфере ремонта оргтехники более 15 лет.</p>
                                    <p>Диагностика и техническое заключение по устройству в течении дня.</p>
                                    <ul >
                                        <li><i class="fa fa-caret-right" aria-hidden="true"></i>Мы ремонтируем любые виды печатной техники (Принтеры, МФУ, КМА, Факсы) и другую технику для офиса</li>
                                    </ul>
                                </div>

                            </div>
                            <h4>Стартовая цена ремонта печатной техники (принтеры, МФУ, КМА, факсы), грн.</h4>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-bordered">
                                            <tbody>
                                            <tr>
                                                <td class="row">ФОРМАТ А4</td>
                                                <td class="row font-20">114</td>
                                            </tr>
                                            <tr>
                                                <td class="row">ФОРМАТ А4</td>
                                                <td class="row font-20">180</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <p class="text-left"><small>* уточняйте у менеджера</small></p>
                                </div>
                                <div class="col-md-12 text-left">
                                    <h4>Примеры возможных проблем:</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/povtor_izob.jpg" alt="povtor izob">
                                    <p class="text-left">«Повтор изображения на листе»</p>
                                    <p class="text-left">Срок ремонта 1 день. Проблема устранена</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/zamin_bumag.jpg" alt="zamin bumag">
                                    <p class="text-left">«Заминает бумагу»</p>
                                    <p class="text-left">Срок ремонта 2 день. Проблема устранена</p>
                                </div>
                                <div class="col-md-4">
                                    <img src="<?php echo bloginfo('template_url'); ?>/img/razmitoe_izob.jpg" alt="razmitoe izob">
                                    <p class="text-left">«Размытое изображение»</p>
                                    <p class="text-left">Срок ремонта 1 день. Проблема устранена</p>
                                </div>
                            </div>
                            <div class="modal-text-bottom">
                                <h3>МЫ ОТРЕМОНТИРОВАЛИ ПЕЧАТНОЙ ТЕХНИКИ В АВГУСТЕ 2017</h3>
                                <p class="text-clock"><span>9</span><span>3</span><span>4</span></p>
                                <p>Получить консультацию специалиста:</p>
                            </div>
                            <div class="row ">
                                <div class="col-sm-4 col-xs-12"><a href="tel:0675368969"><svg width="25" height="25"><use xlink:href='#kievstar'/></svg>067 536-8969</a></div>
                                <div class="col-sm-4 col-xs-12"><a href="tel:0992996850"><svg width="25" height="25"><use xlink:href='#vodafone'/></svg>099 299-6850</a></div>
                                <div class="col-sm-4 col-xs-12"><a href="tel:0567360131"><svg width="25" height="25"><use xlink:href='#phone'/></svg>056 736-0131</a></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12 font-r text-left">
                                    <p>Заправка отдельных моделей картриджей принтеров SAMSUG, XEROX требует замены чипа картриджа. Стоимость чипа может колебаться от 200 до 400 грн, в зависимости от модели вашего принтера (МФУ).
                                        Избежать постоянной замены чипа, при заправках картриджа, возможно путем «перепрошивки» принтера.</p>
                                    <p><b>ВНИМАНИЕ!</b> Процесс «перепрошивки» технически небезопасен и может привести к невосстановимой поломки принтера!</p>
                                    <p><b>ВЫПОЛНЕНИЕ РАБОТ В КВАЛИФИЦИРОВАНОМ СЕРВИСНОМ ЦЕНТРЕ ИСКЛЮЧАЕТ ПОДОБНЫЕ ПРОБЛЕМЫ!</b></p>
                                    <p><b>Важное уточнение!</b> Гарантийное устройство после «перепрошивки» теряет гарантию. </p>
                                </div>
                            </div>
                            <div class="modal-text-bottom">
                                <h3>МЫ УСПЕШНО «ПЕРЕПРОШИЛИ» В АВГУСТЕ 2017</h3>
                                <p class="text-clock"><span>1</span><span>8</span><span>2</span></p>
                                <p>Получить консультацию специалиста:</p>
                            </div>
                            <div class="row padding-bottom-70">
                                <div class="col-sm-4 col-xs-12"><a href="tel:0675368969"><svg width="25" height="25"><use xlink:href='#kievstar'/></svg>067 536-8969</a></div>
                                <div class="col-sm-4 col-xs-12"><a href="tel:0992996850"><svg width="25" height="25"><use xlink:href='#vodafone'/></svg>099 299-6850</a></div>
                                <div class="col-sm-4 col-xs-12"><a href="tel:0567360131"><svg width="25" height="25"><use xlink:href='#phone'/></svg>056 736-0131</a></div>
                            </div>
                        </div>
                    </div>

                    <button type="button" class="btn btn-default btn-prev text-left pull-left"><span>&#10229;</span></button>

                    <button type="button" disabled="disabled" class="btn btn-default btn-next text-right pull-right"><span>&#10230;</span></button>

                    <div class="modal-footer">

                        <button type="button" class="btn btn-fill btn-primary text-center"  data-toggle="modal" data-target="#portfolioModal4-order">ЗАКАЗАТЬ звонок специалиста</button>

                    </div>
                </div>
            </div>
        </div>
    </div>


<?php //get_sidebar(); // Подключаем сайдбар ?>
<?php get_footer(); // Подключаем футер ?>