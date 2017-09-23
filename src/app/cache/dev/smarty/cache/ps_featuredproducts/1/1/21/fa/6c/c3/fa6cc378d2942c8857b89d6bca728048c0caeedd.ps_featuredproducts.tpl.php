<?php /*%%SmartyHeaderCode:158747385659c68bda444d13-10687517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl',
      1 => 1506183130,
      2 => 'module',
    ),
    '35103ab1e7d4c356d60677d372e5230bdf88b8b6' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1506183130,
      2 => 'file',
    ),
    '3b933e273769c1d19779fd54c84b0d0e874eae7a' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/variant-links.tpl',
      1 => 1506183130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158747385659c68bda444d13-10687517',
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'allProductsLink' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59c68bda600090_14263926',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c68bda600090_14263926')) {function content_59c68bda600090_14263926($_smarty_tpl) {?><!-- begin /var/www/html/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl -->
<section class="featured-products clearfix">
  <h1 class="h1 products-section-title text-uppercase">
    Popular Products
  </h1>
  <div class="products">
          
<!-- begin catalog/_partials/miniatures/product.tpl -->

  <article class="product-miniature js-product-miniature" data-id-product="1" data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
    <div class="thumbnail-container">
      
        <a href="http://localhost:3080/home/1-sample-product.html" class="thumbnail product-thumbnail">
          <img
            src = "http://localhost:3080/1-home_default/sample-product.jpg"
            alt = "Sample Product"
            data-full-size-image-url = "http://localhost:3080/1-large_default/sample-product.jpg"
          >
        </a>
      

      <div class="product-description">
        
          <h1 class="h3 product-title" itemprop="name"><a href="http://localhost:3080/home/1-sample-product.html">Sample Product</a></h1>
        

        
                      <div class="product-price-and-shipping">
              
              

              <span class="sr-only">Price</span>
              <span itemprop="price" class="price">$100.00</span>

              

              
            </div>
                  

        
          
        
      </div>

      
        <ul class="product-flags">
                      <li class="product-flag new">New</li>
                  </ul>
      

      <div class="highlighted-informations no-variants hidden-sm-down">
        
          <a class="quick-view" href="#" data-link-action="quickview">
            <i class="material-icons search">&#xE8B6;</i> Quick view
          </a>
        

        
                  
      </div>

    </div>
  </article>


<!-- end catalog/_partials/miniatures/product.tpl -->

      </div>
  <a class="all-product-link float-xs-left float-md-right h4" href="http://localhost:3080/2-home">
    All products<i class="material-icons">&#xE315;</i>
  </a>
</section>
<!-- end /var/www/html/themes/classic/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }} ?>
