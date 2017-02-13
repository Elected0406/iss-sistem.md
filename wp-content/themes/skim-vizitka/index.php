<?php get_header(); ?>
<div class="row">
  <div class="col-sm-12 media-left"><?php the_custom_logo(); ?></div>
    <div class="col-sm-12">
      <h1>
        <p class="text-center">   
          <?php bloginfo( 'name' ); ?> 
        </p>
      </h1>
      <h4>
        <p class="text-center">
          <?php $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
          <?php echo $description; ?>
          <?php endif; ?>
        </p>
      </h4>
      </p>
    </div>
</div><!-- .site-branding -->
<div class="row">
  <div class="col-sm-8">
    <h2><p>Монтажные работы:</p></h1>
      <ul class="col-sm-8">
        <li>Монтаж и проектирование систем охранной сигнализации</li>
        <li>Монтаж и проектирование систем пожарной сигнализации</li>
        <li>Монтаж и проектирование систем оповещения и управления эвакуацией</li>
        <li>Монтаж и проектирование систем видеонаблюдения</li>
        <li>Системы контроля доступа, подсчета рабочего времени и количества посетителей</li>
      </ul>
    <h2><p>Услуги:</p></h1>
      <ul class="col-sm-8">
        <li>Установка охранной сигнализации и последующее подключение к мониторинговой станции на выбор   </li>
        <li>Установка тревожной кнопки с реагированием силами ЧОП</li>
        <li>Установка видеодомофонов на объектах любой сложности</li>
        <li>Подключение систем автомониторинга</li>
        <li>Персональные трекеры с функцией тревожной кнопки</li>
      </ul>
  </div> 
  <div class="col-sm-4">   
    <div class="col-sm-6">
      <div class="col-sm-6">
        <h2><p>Наши контакты:</p></h1>
          <ul class="col-sm-4">
            <li>+37379470933</li>
            <li>+37378333633</li>
            <li>+37322261110</li>
          </ul>
      </div>
    </div> 
    <div class="col-sm-6"> 
      <div class="col-sm-4">    
        <h2><p>SKYPE:</p></h1> 
          <ul class="col-sm-6">  
            <li>ISS.SISTEM</li>
          </ul>
        <h2><p>EMAIL:</p></h1>
          <ul class="col-sm-6">  
            <li>iss.sistems@gmail.com</li>
          </ul> 
      </div>    
    </div>
  </div>    
</div>
<?php get_footer(); ?>
