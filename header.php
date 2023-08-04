<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="container">
    <div class="row">
        <div class="site-name col-mb-12 col-9">
            <?php if ($this->options->logoUrl) : ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                    <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                </a>
            <?php else : ?>
                <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                <p class="description"><?php $this->options->description() ?></p>
            <?php endif; ?>
        </div>
        <div class="site-search col-3 kit-hidden-tb">
            <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                <button type="submit" class="submit"><?php _e('搜索'); ?></button>
            </form>
        </div>
        <div class="col-mb-12">
            <?php $this->need('components/menu.php'); ?>


        </div>
    </div><!-- end .row -->
</div>