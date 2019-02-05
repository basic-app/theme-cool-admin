<?= PHPTheme::beginTag($tag, $options);?>

<?= PHPTheme::beginTag('a', $linkOptions);?>

    <?= $content;?>

<?= PHPTheme::endTag('a');?>

<?= PHPTheme::endTag($tag);?>