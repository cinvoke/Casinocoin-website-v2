<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <figure class="navbar-brand"><a href="<?php echo $_SESSION["home"]; ?>"><img src="<?php echo WEBSITE_PATH; ?>assets/img/logoMain.png"></a></figure>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav navbar-right langleft">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo HEADER_LANGUAGE_TEXT . '/' .$_SESSION["langShort"]; ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="cs">Česky</a></li>
            <li><a href="da">Dansk</a></li>
            <li><a href="de">Deutsch</a></li>
            <li><a href="el">Ελληνικά</a></li>
            <li><a href="en">English</a></li>
            <li><a href="es">Español</a></li>
            <li><a href="et">Eesti</a></li>
            <li><a href="fi">Suomi</a></li>
            <li><a href="fr">Français</a></li>
            <li><a href="it">Italiano</a></li>
            <li><a href="ja">日本語</a></li>
            <li><a href="lv">Latviešu</a></li>
            <li><a href="nl">Nederlands</a></li>
            <li><a href="no">Norsk</a></li>
            <li><a href="pl">Polski</a></li>
            <li><a href="pt">Português</a></li>
            <li><a href="ru">Русский</a></li>
            <li><a href="sl">Slovene</a></li>
            <li><a href="sv">Svenska</a></li>
            <li><a href="tr">Türkçe</a></li>
            <li><a href="vi">Việt</a></li>
            <li><a href="zh_CN">中文</a></li>
            <li><a href="zh_TW">繁體中文</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo HEADER_NAV_1 ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo WEBSITE_PATH ?>casinocoin-for-users"><?php echo HEADER_NAV_2 ?></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>casinocoin-for-miners"><?php echo HEADER_NAV_3 ?></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>casinocoin-for-developers"><?php echo HEADER_NAV_4 ?></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>code-examples"><?php echo HEADER_NAV_5 ?></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="<?php echo WEBSITE_PATH ?>how-casinocoin-works"><?php echo HEADER_NAV_6 ?></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>how-to-participate"><?php echo HEADER_NAV_7 ?></a></li>
          </ul>
        </li>
        <li><a href="<?php echo WEBSITE_PATH ?>getting-started"><?php echo HEADER_NAV_8 ?></a></li>
        <li><a href="<?php echo WEBSITE_PATH ?>casinocoin-faq"><?php echo HEADER_NAV_9 ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo HEADER_NAV_10 ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo WEBSITE_PATH ?>download"><?php echo HEADER_NAV_16 ?></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>casinocoin-resources"><?php echo HEADER_NAV_11 ?></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>casinocoin-communities"<?php echo HEADER_NAV_12 ?>></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>casinocoin-documentation"><?php echo HEADER_NAV_13 ?></a></li>
            <li><a href="<?php echo WEBSITE_PATH ?>responsible-gambling"><?php echo HEADER_NAV_15 ?></a></li>
          </ul>
        </li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Prices<span class="caret"></span></a>
          <ul class="dropdown-menu" id="fillContent">
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>