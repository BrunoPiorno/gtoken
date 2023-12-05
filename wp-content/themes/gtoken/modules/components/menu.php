<?php
$hasmenu = get_field('menu', 'option');
$menu_english = get_field('menu_english', 'option');
$language_class = in_array('pll-en-us', get_body_class()) ? 'pll-en-us' : '';

if ($hasmenu):
    $menu_to_use = $language_class === 'pll-en-us' ? $menu_english : $hasmenu;
    ?>
    <div class="site-menu <?php echo $language_class; ?>">
        <?php foreach ($menu_to_use as $menuItem):

            $first_level = $menuItem["first_level"];
            $first_level_only_text = $menuItem["first_level_only_text"];

            if ($first_level_only_text == "" && (is_array($first_level) && $first_level['title'] == "" || !is_array($first_level))) {
                continue;
            }
            ?>
            <div class="site-menu__item <?php echo $submenu_type; ?>">
                <?php
                if ($first_level):
                    if ($first_level): ?>
                        <a class="site-menu__first-level" href="<?php echo $first_level['url']; ?>" <?php echo (empty($first_level['target'])) ? '' : 'target="' . $first_level['target'] . '"'; ?>><?php echo $first_level['title']; ?></a>
                    <?php endif;
                elseif ($first_level_only_text):
                    echo ($first_level_only_text) ? '<div class="site-menu__first-level site-menu__first-level--text">' . $first_level_only_text . '</div>' : '';
                endif; ?>
            </div>
        <?php endforeach; ?>

        <ul class="poylang">
            <?php pll_the_languages(array('show_flags' => 1, 'show_names' => 1)); ?>
        </ul>
    </div>
<?php endif; ?>

