<?php
/**
* 移植Yilia主题到Typecho
* 
* @package Yilia
* @author Litten
* @version 0.1
* @link http://litten.github.io/
*/
 $this->need('header.php');
?>

    <?php while($this->next()):?>

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
          <h1 itemprop="name">
            <a class="article-title" href="<?php $this->permalink(); ?>"><?php $this->title() ?></a>
          </h1>
        </header>
        <div class="article-entry" itemprop="articleBody">
          <?php $this->content(''); ?>
          <p class="article-more-link">
            <a href="<?php $this->permalink();?>#more">more >></a>
          </p>
        </div>
        <footer class="article-footer"> </footer>
      </div>
    </article>
    <?php endwhile; ?>
    
    <?php $this->pageNav('&laquo; Prev','Next &raquo;',1,'...'); ?>
<?php $this->need('footer.php');?>
