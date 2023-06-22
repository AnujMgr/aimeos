<?php
\Aimeos\MShop\Product\Item\Standard::macro('getMycolumn', function () {
    return (int) $this->get('mycolumn');
});

\Aimeos\MShop\Product\Item\Standard::macro('setMycolumn', function ($value) {
    return $this->set('mycolumn', (int) $value);
});
