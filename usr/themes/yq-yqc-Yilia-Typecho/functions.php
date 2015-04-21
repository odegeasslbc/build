<?php

function themeConfig($form) {
    //$logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    //$form->addInput($logoUrl);
    
    $sidebarBlock = new Typecho_Widget_Helper_Form_Element_Checkbox('sidebarBlock', 
    array('ShowRecentPosts' => _t('显示最新文章'),
    'ShowRecentComments' => _t('显示最近回复'),
    'ShowCategory' => _t('显示分类'),
    'ShowArchive' => _t('显示归档'),
	'ShowLinks' => _t('显示友链'),
	'ShowPLinks' => _t('显示公益链接'),
    'ShowOther' => _t('显示管理项'),
	'ShowWeibo' => _t('显示微博')),
    array('ShowRecentPosts', 'ShowRecentComments', 'ShowCategory', 'ShowArchive', 'ShowLinks', 'ShowPLinks', 'ShowOther','ShowWeibo'), _t('侧边栏显示'));
    
    $form->addInput($sidebarBlock->multiMode());
}
/* 自定tags的输出格式 */
function yqctags($widget, $split = ',', $default = NULL){
  $outstr = '<ul class="article-tag-list">';
  if ($widget->tags) {
    foreach ($widget->tags as $tag) {
      $outstr.= '<li class="article-tag-list-item"><a class="article-tag-list-link" href="'.$tag['permalink'].'">'.$tag['name'].'</a></li>';
    }
  } else {
    $outstr.= '<li class="article-tag-list-item"><a class="article-tag-list-link" href="javascript:void(0);">暂无标签</a></li>';
  }
  $outstr.='</ul>';
  return $outstr;
}
/* 自定义标签云 */
function yqccloudtags(){
  Typecho_Widget::widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'limit' => 20, 'ignoreZeroCount' => true, 'desc' => true))->to($tags); 
  $outcloud ='';
  if($tags->have()){
    while ($tags->next()){
      $outcloud .= '<a href="'.$tags->permalink.'">'.$tags->name.'</a>';
    }
  }
  return $outcloud;
}
/**
 * 显示下一篇
 *
 * @access public
 * @param string $default 如果没有下一篇, 显示的默认文字
 * @return void
 */
function theNext($widget, $word = '下一篇', $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
        ->where('table.contents.created > ?', $widget->created)
        ->where('table.contents.status = ?', 'publish')
        ->where('table.contents.type = ?', $widget->type)
        ->where('table.contents.password IS NULL')
        ->order('table.contents.created', Typecho_Db::SORT_ASC)
        ->limit(1);
    $content = $db->fetchRow($sql);

    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" id="article-nav-newer" class="article-nav-link-wrap" title="' . $content['title'] . '">' . '<strong class="article-nav-caption"><</strong><div class="article-nav-title">' . $content['title'] . '</div>' . '</a>';
        echo $link;
    } else {
        echo $default;
    }
}

/**
 * 显示上一篇
 *
 * @access public
 * @param string $default 如果没有上一篇, 显示的默认文字
 * @return void
 */
function thePrev($widget, $word = '上一篇', $default = NULL)
{
    $db = Typecho_Db::get();
    $sql = $db->select()->from('table.contents')
        ->where('table.contents.created < ?', $widget->created)
        ->where('table.contents.status = ?', 'publish')
        ->where('table.contents.type = ?', $widget->type)
        ->where('table.contents.password IS NULL')
        ->order('table.contents.created', Typecho_Db::SORT_DESC)
        ->limit(1);
    $content = $db->fetchRow($sql);

    if ($content) {
        $content = $widget->filter($content);
        $link = '<a href="' . $content['permalink'] . '" id="article-nav-older" class="article-nav-link-wrap" title="' . $content['title'] . '">' . '<div class="article-nav-title">' . $content['title'] . '</div><strong class="article-nav-caption">></strong>' . '</a>';
        echo $link;
    } else {
        echo $default;
    }
}