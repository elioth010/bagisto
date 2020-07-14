<?php

namespace Webkul\Takul\Http\Controllers\Shop;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Webkul\Takul\Helpers\Helper;
use Webkul\Product\Helpers\ProductImage;
use Webkul\Product\Repositories\SearchRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Customer\Repositories\WishlistRepository;
use Webkul\Category\Repositories\CategoryRepository;
use Webkul\Takul\Repositories\Product\ProductRepository as VelocityProductRepository;
use Webkul\Takul\Repositories\VelocityCustomerCompareProductRepository as CustomerCompareProductRepository;

class Controller extends BaseController
{
    use DispatchesJobs, ValidatesRequests;

    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * ProductImage object
     *
     * @var \Webkul\Product\Helpers\ProductImage
     */
    protected $productImageHelper;

    /**
     * SearchRepository object
     *
     * @var \Webkul\Product\Repositories\SearchRepository
     */
    protected $searchRepository;

    /**
     * ProductRepository object
     *
     * @var \Webkul\Product\Repositories\ProductRepository
     */
    protected $productRepository;

    /**
     * ProductRepository object of velocity package
     *
     * @var \Webkul\Takul\Repositories\Product\ProductRepository
     */
    protected $velocityProductRepository;

    /**
     * CategoryRepository object of velocity package
     *
     * @var \Webkul\Category\Repositories\CategoryRepository
     */
    protected $categoryRepository;

    /**
     * WishlistRepository object
     *
     * @var \Webkul\Customer\Repositories\WishlistRepository
     */
    protected $wishlistRepository;

    /**
     * Helper object
     *
     * @var \Webkul\Takul\Helpers\Helper
     */
    protected $velocityHelper;

    /**
     * VelocityCustomerCompareProductRepository object of repository
     *
     * @var \Webkul\Takul\Repositories\VelocityCustomerCompareProductRepository
     */
    protected $compareProductsRepository;


    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Takul\Helpers\Helper                                         $velocityHelper
     * @param  \Webkul\Product\Helpers\ProductImage                                    $productImageHelper
     * @param  \Webkul\Product\Repositories\SearchRepository                           $searchRepository
     * @param  \Webkul\Product\Repositories\ProductRepository                          $productRepository
     * @param  \Webkul\Category\Repositories\CategoryRepository                        $categoryRepository
     * @param  \Webkul\Takul\Repositories\Product\ProductRepository                 $velocityProductRepository
     * @param  \Webkul\Takul\Repositories\VelocityCustomerCompareProductRepository  $compareProductsRepository
     * @param  \Webkul\Takul\Repositories\VelocityCustomerCompareProductRepository  $compareProductsRepository
     *  
     * @return void
     */
    public function __construct(
        Helper $velocityHelper,
        ProductImage $productImageHelper,
        SearchRepository $searchRepository,
        ProductRepository $productRepository,
        WishlistRepository $wishlistRepository,
        CategoryRepository $categoryRepository,
        VelocityProductRepository $velocityProductRepository,
        CustomerCompareProductRepository $compareProductsRepository
    ) {
        $this->_config = request('_config');

        $this->velocityHelper = $velocityHelper;

        $this->searchRepository = $searchRepository;

        $this->productRepository = $productRepository;

        $this->productImageHelper = $productImageHelper;

        $this->categoryRepository = $categoryRepository;

        $this->wishlistRepository = $wishlistRepository;

        $this->velocityProductRepository = $velocityProductRepository;
        
        $this->compareProductsRepository = $compareProductsRepository;
    }
}
