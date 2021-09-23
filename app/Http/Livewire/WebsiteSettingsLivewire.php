<?php

namespace App\Http\Livewire;

use Exception;
use LVR\Colour\Hex;

class WebsiteSettingsLivewire extends BaseLivewireComponent
{

    // App settings
    public $websiteHeaderTitle;
    public $websiteHeaderSubtitle;
    public $websiteHeaderImage;
    public $oldWebsiteHeaderImage;
    //social links
    public $fbLink;
    public $igLink;
    public $twLink;

    public function mount()
    {
        //
        $this->websiteHeaderTitle = setting('websiteHeaderTitle', '');
        $this->websiteHeaderSubtitle = setting('websiteHeaderSubtitle', '');
        $this->oldWebsiteHeaderImage = setting('websiteHeaderImage');

        $this->fbLink = setting('social.fbLink', '');
        $this->igLink = setting('social.igLink', '');
        $this->twLink = setting('social.twLink', '');
    }

    public function render()
    {
        $this->mount();
        return view('livewire.settings.website-settings');
    }


    public function saveAppSettings()
    {



        try {

            $this->isDemo();

            // store new logo
            if ($this->websiteHeaderImage) {
                $this->oldWebsiteHeaderImage = \Storage::url($this->websiteHeaderImage->store('public/website'));
            }

            $websiteSettings = [
                'websiteHeaderTitle' =>  $this->websiteHeaderTitle,
                'websiteHeaderSubtitle' =>  $this->websiteHeaderSubtitle,
                'websiteHeaderImage' =>  $this->oldWebsiteHeaderImage,
                "social" => [
                    'fbLink' =>  $this->fbLink,
                    'igLink' =>  $this->igLink,
                    'twLink' =>  $this->twLink,
                ]
            ];


            // update the site name
            setting($websiteSettings)->save();



            $this->showSuccessAlert(__("Website Settings saved successfully!"));
            $this->reset();
        } catch (Exception $error) {
            $this->showErrorAlert($error->getMessage() ?? __("Website Settings save failed!"));
        }
    }
}
