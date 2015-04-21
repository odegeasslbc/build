<?php $this->need('header.php'); ?>

<section class="archives-wrap">
  <div class="archive-year-wrap">
    <a href="javascript:void(0);" class="archive-year"><?php $this->archiveTitle('', '', ''); ?></a>
  </div>
  <div class="archives">

    <?php while($this->next()):?>
    <article class="archive-article archive-type-post">
      <div class="archive-article-inner">
        <header class="archive-article-header">
          <div class="article-meta">
            <a href="<?php $this->permalink();?>" class="archive-article-date">
              <time datetime="<?php $this->date('Y-m-d\TH:i:s.000\Z');?>" itemprop="datePublished"><?php $this->date('M j');?></time>
            </a>
            <br>
          <?php echo yqctags($this);?>
          </div>

          <h1 itemprop="name">
            <a class="archive-article-title" href="<?php $this->permalink();?>"><?php $this->title() ?></a>
          </h1>
        </header>
      </div>
    </article>

    <?php endwhile; ?>


  </div>
</section>
<br>
<?php $this->pageNav('&laquo; Prev','Next &raquo;',1,'...'); ?>
<?php $this->need('footer.php'); ?>
