<?php

echo PHPTheme::beginTag('form', $formOptions);

echo PHPTheme::beginTag('button', $options);

echo $label;

echo PHPTheme::endTag('button');

echo PHPTheme::endTag('form');