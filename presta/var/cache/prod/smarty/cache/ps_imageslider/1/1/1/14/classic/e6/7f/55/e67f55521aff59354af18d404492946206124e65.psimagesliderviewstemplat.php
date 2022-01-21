<?php
/* Smarty version 3.1.39, created on 2022-01-19 21:58:50
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61e87b8a74aa19_99029975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1642238321,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_61e87b8a74aa19_99029975 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
          </ol>
    <ul class="carousel-inner" role="listbox">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="http://localhost/index.php?id_category=3&amp;controller=category">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/7a9da259e56ff3cfc87642bdae0b98681af24486_slider_kitchen_1.JPG" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Nowa seria już dostępna!</h2>
                  <div class="caption-description"><h3></h3>
<p><span style="color:#f7f4f4;">Nowy design spowoduje, że jadalnia i kuchnia zmienią swoje oblicze. Sprawdź sam!</span></p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/index.php?id_category=9&amp;controller=category">
            <figure>
              <img src="https://localhost/modules/ps_imageslider/images/5c975bda0c444a56bbb8d81c2ad14716b0db0431_slider_room_2.JPG" alt="">
                              <figcaption class="caption">
                  <h2 class="display-1 text-uppercase">Stylowy design</h2>
                  <div class="caption-description"><p>Nowy stylowy design jest już tutaj!</p></div>
                </figcaption>
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Przyciski karuzeli">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Poprzedni">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Następny">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
