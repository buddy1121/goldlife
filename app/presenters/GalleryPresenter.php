<?php


namespace App\Presenters;

use Nette,
    Nette\Utils\Image;

class GalleryPresenter extends BasePresenter
{

    public function loadAllPhotos()
    {
        $images = ("img/gallery/\*.jpg");
        return $images;
    }


    public function renderShow()
    {
        $images = $this->loadAllPhotos();
        return $this->template->images = $images;
        foreach ($images as $image) {
            echo $image;


        }

    }


}

