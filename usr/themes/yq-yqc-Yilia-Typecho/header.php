<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<?php if($this->is('index')){?>
<title><?php $this->options->title() ?> - <?php $this->options->description() ?></title>
<?php }else{?>
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<?php }?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="/favicon.ico">
<link rel="stylesheet" href="<?php $this->options->themeUrl();?>css/style.css" type="text/css">
<script src="http://cdn.staticfile.org/jquery/1.9.0/jquery.min.js"></script>
<!--[if lte IE 8]><script>window.location.href='http://cdn.dmeng.net/upgrade-your-browser.html?referrer='+location.href;</script><![endif]-->
<?php $this->header(); ?>
</head>
<body>
<div id="container">
  <div class="left-col">
    <div class="overlay"></div>
    <div class="intrude-less">
      <header id="header" class="inner">
        <div class="profilepic">
          <img src="<?php $this->options->themeUrl();?>images/tx.jpg">
        </div>

        <hgroup>
        <h1 class="header-author"><a href="/"><?php $this->options->title(); ?></a></h1>
        </hgroup>

        <p class="header-subtitle"><?php $this->options->description() ?></p>
        <!--搜索框-->
        <form method="post" id="searchform" action="<?php $this->options->siteUrl(); ?>">
        <input type="text" id="sear_txt" value="" name="s" placeholder="Enter键搜索"/>
        </form>
        <div class="switch-btn">
          <div class="icon">
            <div class="icon-ctn">
              <div class="icon-wrap icon-house" data-idx="0">
                <div class="birdhouse"></div>
                <div class="birdhouse_holes"></div>
              </div>
              <div class="icon-wrap icon-ribbon hide" data-idx="1">
                <div class="ribbon"></div>
              </div>
              <div class="icon-wrap icon-me hide" data-idx="3">
                <div class="user"></div>
                <div class="shoulder"></div>
              </div>
            </div>

          </div>
          <div class="tips-box hide">
            <div class="tips-arrow"></div>
            <ul class="tips-inner">
              <li>菜单</li>
              <li>标签</li>
              <li>友链</li>
              <li>关于</li>
            </ul>
          </div>
        </div>


        <div class="switch-area">
          <div class="switch-wrap">
            <section class="switch-part switch-part1">
              <nav class="header-menu">
                <ul>
                  <li><a href="/">主页</a></li>
                  <li><a href="/store.html">杂货铺</a></li>
                </ul>
              </nav>
              <nav class="header-nav">
                <div class="social">
                  <a class="github" target="_blank" href="https://github.com/odegeasslbc" title="github">github</a>
                  <a class="weibo" target="_blank" href="http://www.weibo.com/2805335451/profile?topnav=1&wvr=6" title="weibo">weibo</a>
                  <a class="rss" target="_blank" href="<?php $this->options->feedUrl();?>" title="rss">rss</a>
                  <a class="isear" href="javascript:void(0);" title="search">search</a>
                </div>
              </nav>
            </section>
            <section class="switch-part switch-part2">
              <div class="widget tagcloud">
              <?php echo yqccloudtags();?>
              </div>
            </section>
            <section class="switch-part switch-part3">
              <a target="_blank" class="main-nav-link switch-friends-link" href="http://www.wumen.cn/">吾们</a>
              <a target="_blank" class="main-nav-link switch-friends-link" href="http://malagis.com/">麻辣GIS</a>
            </section>
            <section class="switch-part switch-part4">
               Bruce，学名刘炳辰，九零年初男士。自幼自命不凡，云游四方，饱览群书。年三七时，访西方，拜网络编程之技，通移动互联之识。前途漫漫，志存高远，上下求索，誓不泯初心。
            </section>
          </div>
        </div>
      </header>				
    </div>
  </div>
  <div class="mid-col">
    <nav id="mobile-nav">
      <div class="overlay"></div>
      <div class="intrude-less">
        <header id="header" class="inner">
          <div class="profilepic">
            <img src="<?php $this->options->themeUrl();?>images/tx.jpg">
          </div>

          <hgroup>
          <h1 class="header-author"><a href="/"><?php $this->options->title(); ?></a></h1>
          </hgroup>

          <p class="header-subtitle"><?php $this->options->description(); ?></p>
          <nav class="header-menu">
            <ul>
              <li><a href="/">主页</a></li>
              <li><a href="/store.html">杂货铺</a></li>
              <div class="clearfix"></div>
            </ul>
          </nav>
          <nav class="header-nav">
            <div class="social">
              <a class="github" target="_blank" href="https://github.com/sailor103" title="github">github</a>
              <a class="weibo" target="_blank" href="http://weibo.com/sailor521" title="weibo">weibo</a>
              <a class="rss" target="_blank" href="<?php $this->options->feedUrl();?>" title="rss">rss</a>
              <a class="isear" href="javascript:void(0);" title="search">search</a>
            </div>
          </nav>
        </header>				
      </div>
    </nav>

