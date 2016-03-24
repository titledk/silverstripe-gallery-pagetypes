<?php

/**
 * GalleryPage
 *
 * @author Anselm Christophersen <ac@anselm.dk>
 * @date   March 2016
 *
 * StartGeneratedWithDataObjectAnnotator
 * @method ManyManyList|Image[] Images
 * @mixin GalleryExtension
 * EndGeneratedWithDataObjectAnnotator
 */
class GalleryPage extends Page implements UploadDirRulesInterface
{
    private static $singular_name = 'Gallery';
    private static $plural_name = 'Galleries';
    private static $description = 'A page type for listing images';
    private static $allowed_children = [];
    private static $icon = 'gallery-pagetypes/images/pageicons/gallery.png';
    private static $extensions = [
        'GalleryExtension'
    ];

    /**
     * The gallery directory is created based on the page name
     * You can overwrite this behavior by extending this page
     * TODO this could also be made configurable
     * @return string
     */
    function getCalcAssetsFolderDirectory() {
        if ($this->ID) {
            $filter = URLSegmentFilter::create();
            return Config::inst()->get('GalleryExtension', 'gallery_folder') .
                '/' . $this->ID . '-' . $filter->filter($this->Title);
        }
    }
    function getMessageSaveFirst(){
        return 'Please pick a name and save to create corresponding directory';
    }
    function getMessageUploadDirectory() {
        return null;
    }
    // Make sure that the directory is NOT saved before a page name has been chosen
    function getReadyForFolderCreation() {
        if ($this->Title != 'New ' . self::$singular_name) {
            return true;
        }
    }
}

class GalleryPage_Controller extends Page_Controller
{
}
