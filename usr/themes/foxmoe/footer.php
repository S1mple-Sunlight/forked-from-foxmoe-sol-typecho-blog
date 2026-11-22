<?php if (!defined('__TYPECHO_ROOT_DIR__'))
    exit; ?>
<footer class="footer">
    <div class="footer-content">
        <div class="footer-left">
            <div class="footer-logo">
                <img src="<?php $this->options->themeUrl('image/logo/site-logo.png'); ?>" alt="" class="logo">
                <div class="logo-text">
                    <h3><?php $this->options->title(); ?></h3>
                    <p>快乐是第一生产力，拒绝内卷式学习!</p>
                </div>
            </div>
            <img class="footer-visit-counter"
                src="https://count.getloli.com/@sunlight_blog?theme=rule34&amp;padding=7&amp;offset=1&amp;align=center&amp;scale=1&amp;pixelated=1&amp;darkmode=0"
                alt="网站访问计数器">
        </div>
        <div class="footer-right">
            <div class="footer-links">
                <div class="link-group">
                    <h4>快速导航</h4>
                    <ul>
                        <li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>/archives.html">归档</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>/console">控制台</a></li>
                        <li><a href="<?php $this->options->siteUrl(); ?>/about.html">关于</a></li>
                        <li><a href="/rss.xml">RSS</a></li>
                        <li><a href="/sitemap.xml">网站地图</a></li>
                    </ul>
                </div>
                <div class="link-group">
                    <h4>友情链接</h4>
                    <ul>
                        <li><a href="https://www.cauc.fun/" target="_blank" rel="noopener noreferrer">CAUCraft</a></li>
                        <li><a href="https://skin.cauc.fun/" target="_blank" rel="noopener noreferrer">CAUCraft皮肤站V5</a></li>
                    </ul>
                </div>
                <div class="link-group">
                    <h4>联系方式</h4>
                    <ul>
                        <?php foreach (foxmoe_social_links() as $service => $link): ?>
                            <?php if ($service === 'osu'): ?>
                                <?php continue; ?>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo htmlspecialchars($link['href'], ENT_QUOTES); ?>"
                                    <?php if ($service !== 'email'): ?>target="_blank" rel="noopener noreferrer"<?php endif; ?>>
                                    <?php echo htmlspecialchars($link['label']); ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="footer-info">
            <p>&copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?>. All rights reserved.</p>
            <p>
                <a href=" " target="_blank">萌ICP备20267747号</a>
            </p>
            <p><a href="https://github.com/FoxMoe/foxmoe-blog" target=="_blank">Foxmoe Blog Engine 1.6</a> Based on <a
                    href="https://typecho.org" target="_blank">Typecho</a>
            </p>
            <p>Protected by <a
                    href="https://www.cloudflare.com/" target="_blank">Cloudflare</a>
                    <span> 网站已经运行了: <span id="runtime">0天0小时0分钟</span></span>
                    </p>
        </div>
    </div>
</footer>
<div class="toast-container" aria-live="polite" aria-atomic="true"></div>
<div class="fab-container">
    <button class="fab back-to-top" title="返回顶部">
        <span class="material-icons">keyboard_arrow_up</span>
    </button>
    <button class="fab main-fab">
        <span class="material-icons">settings</span>
    </button>
    <div class="fab-actions">
        <button class="fab action-fab auto-theme" title="自动切换主题">
            <span class="material-icons">brightness_auto</span>
        </button>
        <button class="fab action-fab theme-toggle" title="切换主题">
            <span class="material-icons">dark_mode</span>
        </button>
        <button class="fab action-fab font-size" title="字体大小">
            <span class="material-icons">text_fields</span>
        </button>
    </div>
</div>

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('js/jquery-3.7.1.min.js'); ?>" defer fetchpriority="high"></script>
<script src="<?php $this->options->themeUrl('js/jquery.pjax.min.js'); ?>" defer></script>
<script src="<?php $this->options->themeUrl('js/components.js'); ?>" defer></script>
<script src="<?php $this->options->themeUrl('js/main.js'); ?>" defer></script>
</body>

</html>
