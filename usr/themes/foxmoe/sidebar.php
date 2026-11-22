<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>
<aside class="sidebar">
    <?php
    // 读取主题设置中的侧栏开关
    $blocks = $this->options->sidebarBlock;
    if (!is_array($blocks) || empty($blocks)) {
        $blocks = array('ShowAbout', 'ShowRecommend', 'ShowTagCloud', 'ShowCategories', 'ShowRecentComments');
    }
    ?>

    <?php if (in_array('ShowAbout', $blocks)): ?>
        <div class="widget about-widget" id="about">
            <h3 class="widget-title">关于我</h3>
            <div class="about-content">
                <div class="avatar-container">
                    <img src="<?php $this->options->themeUrl('image/site-avatar.png'); ?>" alt="" class="avatar">
                    <div class="avatar-border"></div>
                </div>
                <h4 class="author-name">太阳_Sol</h4>
                <p class="author-bio">热爱游戏和动漫的数码宅一枚，站内常驻非人类。</p>
                <div class="social-links">
                    <?php foreach (foxmoe_social_links() as $service => $link): ?>
                        <a href="<?php echo htmlspecialchars($link['href'], ENT_QUOTES); ?>"
                            class="social-link <?php echo htmlspecialchars($service, ENT_QUOTES); ?>"
                            aria-label="<?php echo htmlspecialchars($link['label'], ENT_QUOTES); ?>"
                            title="<?php echo htmlspecialchars($link['label'], ENT_QUOTES); ?>"
                            <?php if ($service !== 'email'): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
                            <span class="material-icons" aria-hidden="true"><?php echo htmlspecialchars($link['icon']); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>


    <?php if (in_array('ShowRecommend', $blocks)): ?>
        <div class="widget recommend-widget">
            <h3 class="widget-title">推荐阅读</h3>
            <div class="recommend-list">
                <?php
                $recommend = \Widget\Contents\Post\Recent::alloc('pageSize=5&type=post');
                while ($recommend->next()):
                    ?>
                    <div class="recommend-item">
                        <div class="recommend-content">
                            <h4 class="recommend-title">
                                <a href="<?php $recommend->permalink(); ?>"><?php $recommend->title(); ?></a>
                            </h4>
                            <div class="recommend-meta">
                                <span class="recommend-date"><?php $recommend->date('m-d'); ?></span>
                                <span class="recommend-comments"><?php $recommend->commentsNum('%d'); ?>评论</span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (in_array('ShowTagCloud', $blocks)): ?>
        <div class="widget tags-widget">
            <h3 class="widget-title">标签云</h3>
            <div class="tag-cloud">
                <?php \Widget\Metas\Tag\Cloud::alloc()->to($tags); ?>
                <?php while ($tags->next()): ?>
                    <a href="<?php $tags->permalink(); ?>" class="tag-item" title="<?php $tags->count(); ?> 篇文章">
                        <?php $tags->name(); ?>
                    </a>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (in_array('ShowCategories', $blocks)): ?>
        <div class="widget categories-widget">
            <h3 class="widget-title">分类目录</h3>
            <div class="categories-list">
                <?php \Widget\Metas\Category\Rows::alloc()->to($categories); ?>
                <?php while ($categories->next()): ?>
                    <div class="category-item">
                        <a href="<?php $categories->permalink(); ?>" class="category-link">
                            <span class="category-name"><?php $categories->name(); ?></span>
                            <span class="category-count"><?php $categories->count(); ?></span>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>

    <?php if (in_array('ShowRecentComments', $blocks)): ?>
        <div class="widget comments-widget">
            <h3 class="widget-title">最新评论</h3>
            <div class="recent-comments">
                <?php \Widget\Comments\Recent::alloc()->to($comments); ?>
                <?php while ($comments->next()): ?>
                    <div class="comment-item">
                        <div class="comment-avatar">
                            <?php $comments->gravatar(32); ?>
                        </div>
                        <div class="comment-content">
                            <div class="comment-author">
                                <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>
                            </div>
                            <div class="comment-text">
                                <?php $comments->excerpt(40, '...'); ?>
                            </div>
                            <div class="comment-meta">
                                <span class="comment-date"><?php $comments->date('y-m-d'); ?></span>
                                <span class="comment-post">
                                    在文章 <a href="<?php $comments->permalink(); ?>"><?php $comments->title(); ?></a> 中
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</aside>
