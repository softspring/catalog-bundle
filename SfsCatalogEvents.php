<?php

namespace Softspring\CatalogBundle;

class SfsCatalogEvents
{
    /**
     * @Event("Softspring\AdminBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_LIST_VIEW = 'sfs_catalog.admin.products.list_view';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_CREATE_INITIALIZE = 'sfs_catalog.admin.products.create_initialize';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_CREATE_FORM_VALID = 'sfs_catalog.admin.products.create_form_valid';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_CREATE_SUCCESS = 'sfs_catalog.admin.products.create_success';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_CREATE_FORM_INVALID = 'sfs_catalog.admin.products.create_form_invalid';

    /**
     * @Event("Softspring\AdminBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_CREATE_VIEW = 'sfs_catalog.admin.products.create_view';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_INITIALIZE = 'sfs_catalog.admin.products.update_initialize';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_FORM_VALID = 'sfs_catalog.admin.products.update_form_valid';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_SUCCESS = 'sfs_catalog.admin.products.update_success';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_FORM_INVALID = 'sfs_catalog.admin.products.update_form_invalid';

    /**
     * @Event("Softspring\AdminBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_VIEW = 'sfs_catalog.admin.products.update_view';

    /**
     * @Event("Softspring\AdminBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_LIST_VIEW = 'sfs_catalog.admin.models.list_view';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_CREATE_INITIALIZE = 'sfs_catalog.admin.models.create_initialize';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_CREATE_FORM_VALID = 'sfs_catalog.admin.models.create_form_valid';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_CREATE_SUCCESS = 'sfs_catalog.admin.models.create_success';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_CREATE_FORM_INVALID = 'sfs_catalog.admin.models.create_form_invalid';

    /**
     * @Event("Softspring\AdminBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_CREATE_VIEW = 'sfs_catalog.admin.models.create_view';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_UPDATE_INITIALIZE = 'sfs_catalog.admin.models.update_initialize';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_UPDATE_FORM_VALID = 'sfs_catalog.admin.models.update_form_valid';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_UPDATE_SUCCESS = 'sfs_catalog.admin.models.update_success';

    /**
     * @Event("Softspring\AdminBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_UPDATE_FORM_INVALID = 'sfs_catalog.admin.models.update_form_invalid';

    /**
     * @Event("Softspring\AdminBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_UPDATE_VIEW = 'sfs_catalog.admin.models.update_view';
}