<?php

namespace Softspring\CatalogBundle;

class SfsCatalogEvents
{
    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_LIST_VIEW = 'sfs_catalog.admin.products.list_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_CREATE_INITIALIZE = 'sfs_catalog.admin.products.create_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_CREATE_FORM_VALID = 'sfs_catalog.admin.products.create_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_CREATE_SUCCESS = 'sfs_catalog.admin.products.create_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_CREATE_FORM_INVALID = 'sfs_catalog.admin.products.create_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_CREATE_VIEW = 'sfs_catalog.admin.products.create_view';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_READ_VIEW = 'sfs_catalog.admin.products.read_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_INITIALIZE = 'sfs_catalog.admin.products.update_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_FORM_VALID = 'sfs_catalog.admin.products.update_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_SUCCESS = 'sfs_catalog.admin.products.update_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_FORM_INVALID = 'sfs_catalog.admin.products.update_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_UPDATE_VIEW = 'sfs_catalog.admin.products.update_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_DELETE_INITIALIZE = 'sfs_catalog.admin.products.delete_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_DELETE_FORM_VALID = 'sfs_catalog.admin.products.delete_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_PRODUCTS_DELETE_SUCCESS = 'sfs_catalog.admin.products.delete_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_PRODUCTS_DELETE_FORM_INVALID = 'sfs_catalog.admin.products.delete_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_PRODUCTS_DELETE_VIEW = 'sfs_catalog.admin.products.delete_view';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_CATEGORIES_LIST_VIEW = 'sfs_catalog.admin.categories.list_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_CATEGORIES_CREATE_INITIALIZE = 'sfs_catalog.admin.categories.create_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_CATEGORIES_CREATE_FORM_VALID = 'sfs_catalog.admin.categories.create_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_CATEGORIES_CREATE_SUCCESS = 'sfs_catalog.admin.categories.create_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_CATEGORIES_CREATE_FORM_INVALID = 'sfs_catalog.admin.categories.create_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_CATEGORIES_CREATE_VIEW = 'sfs_catalog.admin.categories.create_view';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_CATEGORIES_READ_VIEW = 'sfs_catalog.admin.categories.read_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_CATEGORIES_UPDATE_INITIALIZE = 'sfs_catalog.admin.categories.update_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_CATEGORIES_UPDATE_FORM_VALID = 'sfs_catalog.admin.categories.update_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_CATEGORIES_UPDATE_SUCCESS = 'sfs_catalog.admin.categories.update_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_CATEGORIES_UPDATE_FORM_INVALID = 'sfs_catalog.admin.categories.update_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_CATEGORIES_UPDATE_VIEW = 'sfs_catalog.admin.categories.update_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_CATEGORIES_DELETE_INITIALIZE = 'sfs_catalog.admin.categories.delete_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_CATEGORIES_DELETE_FORM_VALID = 'sfs_catalog.admin.categories.delete_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_CATEGORIES_DELETE_SUCCESS = 'sfs_catalog.admin.categories.delete_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_CATEGORIES_DELETE_FORM_INVALID = 'sfs_catalog.admin.categories.delete_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_CATEGORIES_DELETE_VIEW = 'sfs_catalog.admin.categories.delete_view';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_LIST_VIEW = 'sfs_catalog.admin.models.list_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_CREATE_INITIALIZE = 'sfs_catalog.admin.models.create_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_CREATE_FORM_VALID = 'sfs_catalog.admin.models.create_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_CREATE_SUCCESS = 'sfs_catalog.admin.models.create_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_CREATE_FORM_INVALID = 'sfs_catalog.admin.models.create_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_CREATE_VIEW = 'sfs_catalog.admin.models.create_view';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_READ_VIEW = 'sfs_catalog.admin.models.read_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_UPDATE_INITIALIZE = 'sfs_catalog.admin.models.update_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_UPDATE_FORM_VALID = 'sfs_catalog.admin.models.update_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_UPDATE_SUCCESS = 'sfs_catalog.admin.models.update_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_UPDATE_FORM_INVALID = 'sfs_catalog.admin.models.update_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_UPDATE_VIEW = 'sfs_catalog.admin.models.update_view';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_DELETE_INITIALIZE = 'sfs_catalog.admin.models.delete_initialize';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_DELETE_FORM_VALID = 'sfs_catalog.admin.models.delete_form_valid';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseEntityEvent")
     */
    const ADMIN_MODELS_DELETE_SUCCESS = 'sfs_catalog.admin.models.delete_success';

    /**
     * @Event("Softspring\CrudlBundle\Event\GetResponseFormEvent")
     */
    const ADMIN_MODELS_DELETE_FORM_INVALID = 'sfs_catalog.admin.models.delete_form_invalid';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const ADMIN_MODELS_DELETE_VIEW = 'sfs_catalog.admin.models.delete_view';

    /**
     * @Event(Softspring\CoreBundle\Event\GetResponseRequestEvent")
     */
    const CATALOG_LIST_INITIALIZE = 'sfs_catalog.catalog.list_initialize';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const CATALOG_LIST_VIEW = 'sfs_catalog.catalog.list_view';

    /**
     * @Event("Softspring\CatalogBundle\Event\GetResponseProductEvent")
     */
    const CATALOG_PRODUCT_INITIALIZE = 'sfs_catalog.catalog.product_initialize';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const CATALOG_PRODUCT_VIEW = 'sfs_catalog.catalog.product_view';

    /**
     * @Event("Softspring\CatalogBundle\Event\GetResponseModelEvent")
     */
    const CATALOG_MODEL_INITIALIZE = 'sfs_catalog.catalog.model_initialize';

    /**
     * @Event("Softspring\CoreBundle\Event\ViewEvent")
     */
    const CATALOG_MODEL_VIEW = 'sfs_catalog.catalog.model_view';
}