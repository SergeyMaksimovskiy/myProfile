
<?php get_header(); ?>
    <section id="first-section" class="section-block">
      <div class="second-bg"></div>

        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-6">

              <div class="wrap-info-text">
                <div class="pre-center-disp">
                  <div class="center-disp">
                    <p><?php echo bloginfo('name'); ?>	</p>
                    <span><?php echo bloginfo('description'); ?></span>
                    <?php get_template_part('social-main' , 'index'); ?>
                  </div>
                </div>
              </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-lg-6">
              <div class="wrap-info-blocks">
                <div class="pre-center-disp">
                  <div class="center-disp">
                  	<?php if ( have_posts() ) : query_posts('cat=4');
						while (have_posts()) : the_post(); ?>

						<div class="col-xs-6 info-content-box">
							<div class="info-block-content">
								<div class="in-info-block">
									<i class=<?php 
										$tags = wp_get_post_tags($post->ID); 
											if ($tags) {
												foreach ($tags as $tag) {
													echo ' ' , $tag->name;
												}
											}
										?>
										>
									</i>
									<span><?php the_title(); ?></span>
								</div>
								<div class="hidden-block">
									<?php the_content(); ?> 
								</div>
								<a href="javascript:void(0);" class="more-button">
									<i class="fa fa-angle-up"></i>
								</a>
							</div>
						</div>
					<? endwhile; endif; wp_reset_query(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>

        <a href="#third-section" class="bottom-line">
          <i></i>
        </a>
    </section>

    <section id="second-section" class="section-block">
      <div class="second-bg"></div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="apply-servises">
              <h3>Применяю</h3>
              <div class="container">
                <div class="row">
                  <div class="apply-block">
                    <i class="fab fa-css3-alt"></i>
                    <span>CSS</span>
                    <div class="hint">
                      Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.
                    </div>
                  </div>
                  <div class="apply-block">
                    <i class="fab fa-sass"></i>
                    <span>SASS</span>
                    <div class="hint">
                      ЛОЛОЛОЛОЛ
                    </div>
                  </div>
                  <div class="apply-block">
                    <i class="fab fa-js-square"></i>
                    <span>javaScript</span>
                    <div class="hint">
                      Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.
                    </div>
                  </div>
                  <div class="apply-block">
                    <i class="fab fa-wordpress"></i>
                    <span>Wordpress</span>
                    <div class="hint">
                      ЛОЛОЛОЛОЛ
                    </div>
                  </div>
                  <div class="apply-block">
                    <i class="bootstrap"></i>
                    <span>Bootstrap</span>
                    <div class="hint">
                      Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних условиях.
                    </div>
                  </div>
                  <div class="apply-block">
                    <i class="jquery"></i>
                    <span>jQuery</span>
                    <div class="hint">
                      ЛОЛОЛОЛОЛ
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="third-section" class="section-block">
      <div class="second-bg"></div>
      <h3>Услуги</h3>

      <div class="servises-blocks-wrap">
        <div class="container">
          <div class="row">
            <?php if ( have_posts() ) : query_posts('cat=10');
				while (have_posts()) : the_post(); ?>

				<div class="col-xs-12 col-sm-4">
					<div class="servises-blocks <?php 
								$tags = wp_get_post_tags($post->ID); 
									if ($tags) {
										foreach ($tags as $tag) {
											echo ' ' , $tag->name;
										}
									}
								?>
								>">
							<i></i>
							<h5><?php the_title(); ?></h5>
							<p><?php the_content(); ?></p> 
						<button class="popup-with-form">Заказать</button>  
					</div>
				</div>
			<? endwhile; endif; wp_reset_query(); ?>
          </div>
        </div>
      </div>
    </section>

    <section id="fourth-section" class="section-block">
      <div class="second-bg"></div>
      <h3>Клиенты</h3>

      <div class="container">
        <div class="row klients-block-wrap">
          <div class="col-md-4 logo-klients">
            <a href="#" class="klients-block korporativka">
              <img src="<?php echo M_IMG_ROOT; ?>/korporat.png" alt="korporativka" />
            </a>
          </div>
          <div class="col-md-4 logo-klients">
            <a href="#" class="klients-block kids">
              <img src="<?php echo M_IMG_ROOT; ?>/kids.png" alt="korporativka" />
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="fifth-section" class="section-block">
      <div class="second-bg"></div>
      <h3>Контакты</h3>

      <div class="footer-form-wrap">
        <div class="container">
          <div class="row">
            <form id="footer-form" class="call-back">
              <input type="hidden" name="project_name" value="Portfolio" />
              <input type="hidden" name="admin_email" value="dp090291msa@gmail.com" />
              <input type="hidden" name="form_subject" value="Форма в Обратной связи" />
              <div class="area inputs">
                <label>
                  <input type="text" name="name" placeholder="Имя..." required="" />
                </label>
                <label>
                  <input type="text" name="email" placeholder="E-mail..." required="" />
                </label>
                <label>
                  <input id="call-back-telephone" type="text" name="phone" placeholder="+38 (___) ___-__-__" />
                </label>
              </div>

              <div class="area text">
                <label>
                  <textarea name="text" placeholder="Сообщение..." required=""></textarea>
                </label>
              </div>
              <button>Отправить</button>
            </form>
          </div>
        </div>
      </div>

      <?php get_footer(); ?>