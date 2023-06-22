<?php

namespace Aimeos\MShop\Media\Item;

class Custommanager extends Standard
{
    public function getBlurhash(): ?string
    {
        dd($this->get('media.blur_hash', null));
        return $this->get('media.blur_hash', null);
    }

    public function setBlurhash(?string $val): \Aimeos\MShop\Common\Item\Iface
    {
        dd($val);
        return $this->set('media.blur_hash', $val);
    }

    public function getLabel(): string
    {
        dd($this->get('media.label', ''));
        return (string) $this->get('media.label', '');
    }
}
