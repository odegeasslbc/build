<?php $this->need('header.php'); ?>

<article id="post-douban-index-for-chrome" class="article article-type-post" itemscope itemprop="blogPost">
  <div class="article-meta">
    <a href="<?php $this->permalink() ?>" class="article-date">
      <time datetime="<?php $this->date('Y-m-d\TH:i:s.000\Z'); ?>" itemprop="datePublished"><?php $this->date('M j');?></time>
    </a>
    <?php echo yqctags($this);?>
  </div>
  <div class="article-inner">
    <input type="hidden" class="isFancy" />
    <header class="article-header">
      <h1 class="article-title" itemprop="name">
        <?php $this->title() ?>
      </h1>
    </header>
    <div class="article-entry" itemprop="articleBody">
      <?php $this->content(''); ?>
    </div>
    <footer class="article-footer">
    </footer>
  </div>
  <nav id="article-nav">
    <?php thePrev($this);?>
    <?php theNext($this);?>
  </nav>
</article>


<div class="share">
  <!-- JiaThis Button BEGIN -->
  <div class="jiathis_style">
    <span class="jiathis_txt">分享到：</span>
    <a class="jiathis_button_tsina"></a>
    <a class="jiathis_button_cqq"></a>
    <a class="jiathis_button_douban"></a>
    <a class="jiathis_button_weixin"></a>
    <a class="jiathis_button_tumblr"></a>
    <a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jtico jtico_jiathis" target="_blank"></a>
  </div>
  <script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1405949716054953" charset="utf-8"></script>
  <!-- JiaThis Button END -->
</div>

<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
