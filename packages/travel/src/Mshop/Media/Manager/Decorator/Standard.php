<?php

namespace Aimeos\MShop\Media\Manager\Decorator;


class Standard extends \Aimeos\MShop\Common\Manager\Decorator\Base
{
    private $attr = [
        'blur_hash' => [
            'code' => 'media.blur_hash',
            'internalcode' => 'mmed."blur_hash"',
            'label' => 'Blur Hash',
            'type' => 'string',
            'internaltype' => \Aimeos\Base\DB\Statement\Base::PARAM_STR,
        ],
    ];

    public function setBlurhash(?string $val): \Aimeos\MShop\Common\Item\Iface
    {
        return $this->set('media.blur_hash', $val);
    }

    public function save($items, bool $fetch = true)
    {
        // dd($items);
        return parent::save($items, $fetch);
    }
    // public function save($items, bool $fetch = true)
    // {
    //     // $imageUrl = "http://localhost:8000/aimeos/";
    //     // $mediaList = parent::context()->view()->request();

    //     // // dd($mediaList);

    //     // $absolutePath = public_path('/aimeos/' . "1.d/preview/e/b/eb7acb41_img_385041.webp");
    //     // $fileContents = file_get_contents($absolutePath);

    //     // $image = imagecreatefromstring($fileContents);
    //     // $width = imagesx($image);
    //     // $height = imagesy($image);

    //     // $pixels = [];
    //     // for ($y = 0; $y < $height; ++$y) {
    //     //     $row = [];
    //     //     for ($x = 0; $x < $width; ++$x) {
    //     //         $index = imagecolorat($image, $x, $y);
    //     //         $colors = imagecolorsforindex($image, $index);

    //     //         $row[] = [$colors['red'], $colors['green'], $colors['blue']];
    //     //     }
    //     //     $pixels[] = $row;
    //     // }

    //     // $components_x = 4;
    //     // $components_y = 3;
    //     // $blurhash = Blurhash::encode($pixels, $components_x, $components_y);


    //     // dd($blurhash);
    //     // $item = Image::make($image);
    //     // dd(parent::context()->view()->request());

    //     // foreach ($mediaList as $key => $media) {
    //     //     // $hash = 
    //     //     $imageUrl = url();
    //     //     $item = Image::make($imageUrl);
    //     //     dd($imageUrl);
    //     //     $blurHash = BlurHash::encode($imageUrl);
    //     //     $items['blur_hash'] = $blurHash;
    //     // }
    //     // dd($blurHash);

    //     // dd($items);
    //     // $item->get( 'mycolumn', '<default value>' );
    //     // dd(parent::context()->view()->request()->getParsedBody());
    //     // dd(parent::context()->view()->request()->getParsedBody());
    //     // foreach ($mediaList as $key => $media) {
    //     //     // $hash = 
    //     //     $items['blur_hash'] = BlurHash::encode(url("aimeos/" . $media['media.url']));
    //     // }
    //     // // random_bytes(10);
    //     // dd(parent::context()->view()->request()->getParsedBody());
    //     // dd($items["media.url"]);

    //     // $items["blur_hash"] = BlurHash::encode(url("aimeos/" . $media['media.url']));
    //     // info($items->);
    //     // dd($mediaList);
    //     // $rental_start_date = parent::context()->view()->request()->getParsedBody()['data']['attributes']['rental_start_date'];
    //     // $items['rental_start_date'] = $rental_start_date;

    //     return parent::save($items, $fetch);
    // }

    // public function saveItem( \Aimeos\MShop\Media\Item\Iface $item, bool $fetch = true ) : \Aimeos\MShop\Media\Item\Iface {
    //     dd($item);
    // }

    public function getSaveAttributes(): array
    {
        return parent::getSaveAttributes() + $this->createAttributes($this->attr);
    }

    public function getSearchAttributes(bool $sub = true): array
    {
        return parent::getSearchAttributes($sub) + $this->createAttributes($this->attr);
    }
}
