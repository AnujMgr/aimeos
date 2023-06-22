<?php

namespace Aimeos\Controller\Common\Media;

use Intervention\Image\Facades\Image;
use Bepsvpt\Blurhash\Facades\BlurHash as FacadesBlurHash;


class Mymedia extends Standard
{
    public function add(\Aimeos\MShop\Media\Item\Iface $item, \Psr\Http\Message\UploadedFileInterface $file): \Aimeos\MShop\Media\Item\Iface
    {
        $image = \Image::make($file->getStream());
        $image->resize(240, 240);
        $blurhash = FacadesBlurHash::encode($image);
        $item->set('media.blur_hash', $blurhash);
        return parent::add($item, $file);
    }
}
