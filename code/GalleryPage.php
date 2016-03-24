<?php

/**
 * GalleryPage
 *
 * @author Anselm Christophersen <ac@anselm.dk>
 * @date   March 2016
 *
 * StartGeneratedWithDataObjectAnnotator
 * @property int AssetsFolderID
 * @method Folder AssetsFolder
 * @method ManyManyList|Image[] Images
 * @mixin AssetsFolderExtension
 * @mixin UploadDirRules_SiteTreeExtension
 * @mixin GalleryExtension
 * EndGeneratedWithDataObjectAnnotator
 */
class GalleryPage extends Page
{
    private static $singular_name = 'Gallery';
    private static $plural_name = 'Galleries';
    private static $description = 'A page type for listing images';
    private static $allowed_children = [];
    private static $icon = 'gallery-pagetypes/images/pageicons/gallery.png';

    private static $extensions = [
        'AssetsFolderExtension',
        'UploadDirRules_SiteTreeExtension', //TODO this should go away
        'GalleryExtension'
    ];
}

class GalleryPage_Controller extends Page_Controller
{
}
