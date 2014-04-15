<?php

// Make sure there's no direct access to this template.
if (!defined('FORUM_ROOT'))
    exit('The constant FORUM_ROOT must be defined and point to a valid ModernBB installation root directory.');

?>

<h2><?php echo $lang['Help'] ?></h2>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['BBCode'] ?></h3>
    </div>
    <div class="panel-body">
        <p><a name="bbcode"></a><?php echo $lang['BBCode info'] ?></p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Text style'] ?></h3>
    </div>
    <div class="panel-body">
        <p><?php echo $lang['Text style info'] ?></p>
        <p><code>[b]<?php echo $lang['Bold text'] ?>[/b]</code> <?php echo $lang['produces'] ?> <strong><?php echo $lang['Bold text'] ?></strong></p>
        <p><code>[u]<?php echo $lang['Underlined text'] ?>[/u]</code> <?php echo $lang['produces'] ?> <span class="bbu"><?php echo $lang['Underlined text'] ?></span></p>
        <p><code>[i]<?php echo $lang['Italic text'] ?>[/i]</code> <?php echo $lang['produces'] ?> <em><?php echo $lang['Italic text'] ?></em></p>
        <p><code>[s]<?php echo $lang['Strike-through text'] ?>[/s]</code> <?php echo $lang['produces'] ?> <span class="bbs"><?php echo $lang['Strike-through text'] ?></span></p>
        <p><code>[ins]<?php echo $lang['Inserted text'] ?>[/ins]</code> <?php echo $lang['produces'] ?> <ins><?php echo $lang['Inserted text'] ?></ins></p>
        <p><code>[color=#FF0000]<?php echo $lang['Red text'] ?>[/color]</code> <?php echo $lang['produces'] ?> <span style="color: #ff0000"><?php echo $lang['Red text'] ?></span></p>
        <p><code>[color=blue]<?php echo $lang['Blue text'] ?>[/color]</code> <?php echo $lang['produces'] ?> <span style="color: blue"><?php echo $lang['Blue text'] ?></span></p>
        <p><code>[sub]<?php echo $lang['Sub text'] ?>[/sub]</code> <?php echo $lang['produces'] ?> <sub><?php echo $lang['Sub text'] ?></sub></p>
        <p><code>[sup]<?php echo $lang['Sup text'] ?>[/sup]</code> <?php echo $lang['produces'] ?> <sup><?php echo $lang['Sup text'] ?></sup></p>
        <p><code>[h]<?php echo $lang['Heading text'] ?>[/h]</code> <?php echo $lang['produces'] ?></p> <h4><?php echo $lang['Heading text'] ?></h4>
        <p><code>[left]<?php echo $lang['Left text'] ?>[/left]</code> <?php echo $lang['produces'] ?></p> <p style="text-align: left"><?php echo $lang['Left text'] ?></p>
        <p><code>[center]<?php echo $lang['Center text'] ?>[/center]</code> <?php echo $lang['produces'] ?></p> <p style="text-align: center"><?php echo $lang['Center text'] ?></p>
        <p><code>[right]<?php echo $lang['Right text'] ?>[/right]</code> <?php echo $lang['produces'] ?></p> <p style="text-align: right"><?php echo $lang['Right text'] ?></p>
        <p><code>[justify]<?php echo $lang['Justify text'] ?>[/justify]</code> <?php echo $lang['produces'] ?></p> <p style="text-align: justify"><?php echo $lang['Justify text'] ?></p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Links, images and video'] ?></h3>
    </div>
    <div class="panel-body">
        <p><?php echo $lang['Links info'] ?></p>
        <p><code>[url=<?php echo luna_htmlspecialchars(get_base_url(true).'/') ?>]<?php echo luna_htmlspecialchars($luna_config['o_board_title']) ?>[/url]</code> <?php echo $lang['produces'] ?> <a href="<?php echo luna_htmlspecialchars(get_base_url(true).'/') ?>"><?php echo luna_htmlspecialchars($luna_config['o_board_title']) ?></a></p>
        <p><code>[url]<?php echo luna_htmlspecialchars(get_base_url(true).'/') ?>[/url]</code> <?php echo $lang['produces'] ?> <a href="<?php echo luna_htmlspecialchars(get_base_url(true).'/') ?>"><?php echo luna_htmlspecialchars(get_base_url(true).'/') ?></a></p>
        <p><code>[email]myname@example.com[/email]</code> <?php echo $lang['produces'] ?> <a href="mailto:myname@example.com">myname@example.com</a></p>
        <p><code>[email=myname@example.com]<?php echo $lang['My email address'] ?>[/email]</code> <?php echo $lang['produces'] ?> <a href="mailto:myname@example.com"><?php echo $lang['My email address'] ?></a></p>
        <p><a name="img"></a><?php echo $lang['Images info'] ?></p>
        <p><code>[img=<?php echo $lang['ModernBB bbcode test'] ?>]<?php echo luna_htmlspecialchars(get_base_url(true)) ?>/img/test.png[/img]</code> <?php echo $lang['produces'] ?> <img style="height: 21px" src="<?php echo luna_htmlspecialchars(get_base_url(true)) ?>/img/test.png" alt="<?php echo $lang['ModernBB bbcode test'] ?>" /></p><br />
        <p><a name="img"></a><?php echo $lang['Video info'] ?></p>
        <p><code>[video=(x,y)][url]<?php echo $lang['Video link'] ?>[/url][/video]</code>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Quotes'] ?></h3>
    </div>
    <div class="panel-body">
        <p><?php echo $lang['Quotes info'] ?></p>
        <p><code>[quote=James]<?php echo $lang['Quote text'] ?>[/quote]</code></p>
        <p><?php echo $lang['produces quote box'] ?></p>
        <div class="postmsg">
            <div class="quotebox"><cite>James <?php echo $lang['wrote'] ?></cite><blockquote><div><p><?php echo $lang['Quote text'] ?></p></div></blockquote></div>
        </div>
        <p><?php echo $lang['Quotes info 2'] ?></p>
        <p><code>[q]<?php echo $lang['Inline quote'] ?>[/q]</code> <?php echo $lang['produces'] ?> <q><?php echo $lang['Inline quote'] ?></q></p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Code'] ?></h3>
    </div>
    <div class="panel-body">
        <p><?php echo $lang['Code info'] ?></p>
        <p><code>[code]<?php echo $lang['Code text'] ?>[/code]</code></p>
        <p><?php echo $lang['produces code box'] ?></p>
        <pre><?php echo $lang['Code text'] ?></pre>
        <p><code>[c]<?php echo $lang['Code text'] ?>[/c]</code> <?php echo $lang['produces code box'] ?> <code><?php echo $lang['Code text'] ?></code></p>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Lists'] ?></h3>
    </div>
    <div class="panel-body">
        <p><a name="lists"></a><?php echo $lang['List info'] ?></p>
        <p><code>[list][*]<?php echo $lang['List text 1'] ?>[/*][*]<?php echo $lang['List text 2'] ?>[/*][*]<?php echo $lang['List text 3'] ?>[/*][/list]</code>
        <br /><span><?php echo $lang['produces list'] ?></span></p>
        <div class="postmsg">
            <ul><li><p><?php echo $lang['List text 1'] ?></p></li><li><p><?php echo $lang['List text 2'] ?></p></li><li><p><?php echo $lang['List text 3'] ?></p></li></ul>
        </div>
        <p><code>[list=1][*]<?php echo $lang['List text 1'] ?>[/*][*]<?php echo $lang['List text 2'] ?>[/*][*]<?php echo $lang['List text 3'] ?>[/*][/list]</code>
        <br /><span><?php echo $lang['produces decimal list'] ?></span></p>
        <div class="postmsg">
            <ol class="decimal"><li><p><?php echo $lang['List text 1'] ?></p></li><li><p><?php echo $lang['List text 2'] ?></p></li><li><p><?php echo $lang['List text 3'] ?></p></li></ol>
        </div>
        <p><code>[list=a][*]<?php echo $lang['List text 1'] ?>[/*][*]<?php echo $lang['List text 2'] ?>[/*][*]<?php echo $lang['List text 3'] ?>[/*][/list]</code>
        <br /><span><?php echo $lang['produces alpha list'] ?></span></p>
        <div class="postmsg">
            <ol class="alpha"><li><p><?php echo $lang['List text 1'] ?></p></li><li><p><?php echo $lang['List text 2'] ?></p></li><li><p><?php echo $lang['List text 3'] ?></p></li></ol>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $lang['Smilies'] ?></h3>
    </div>
    <div class="panel-body">
        <p><a name="smilies"></a><?php echo $lang['Smilies info'] ?></p>
<?php

// Display the smiley set
require FORUM_ROOT.'include/parser.php';

$smiley_groups = array();

foreach ($smilies as $smiley_text => $smiley_img)
    $smiley_groups[$smiley_img][] = $smiley_text;

foreach ($smiley_groups as $smiley_img => $smiley_texts)
    echo "\t\t".'<p><code>'.implode('</code> '.$lang['and'].' <code>', $smiley_texts).'</code> <span>'.$lang['produces'].'</span> <img src="'.luna_htmlspecialchars(get_base_url(true)).'/img/smilies/'.$smiley_img.'" width="15" height="15" alt="'.$smiley_texts[0].'" /></p>'."\n";

?>
    </div>
</div>

<?php
    require FORUM_ROOT.'footer.php';
