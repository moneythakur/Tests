
<?php

$products = Mage::getModel('catalog/product') ->getCollection() ->addAttributeToSelect('*') ->addAttributeToSort('position', 'ASC'); ->load(); 


Mage::helper('catalog/image')->init($asc_product, 'thumbnail')->resize(100);

$_helper = Mage::helper(‘catalog/category’); 

$_categories = $_helper->getStoreCategories(); 

if (count($_categories) > 0): 
	foreach($_categories as $_category): ?> 
	<a href=”<?php echo $_helper->getCategoryUrl($_category) ?>”> 
	<?php echo $_category->getName() ?> </a> 
<?php endforeach; 
endif; 


get all orders of a customer.


$orders = Mage::getResourceModel('sales/order_collection') ->addFieldToSelect('*') ->addFieldToFilter('customer_id', $customer->getId()); 

if ($orders->getSize()) { } 


Mage::getResourceModel('catalog/product')->getAttributeRawValue($productId, 'attribute_code', $storeId);


"get only configurable products on a page."

$collectionConfigurable = Mage::getResourceModel('catalog/product_collection')->addAttributeToFilter('type_id', array('eq' => 'configurable'));




$products = Mage::getModel(‘catalog/product’) ->getCollection() ->addAttributeToSort() ->addAttributeToSelect(‘*”) ->addCategoryFilter(Mage::getModel(‘catalog/category’)->load()); 

$products->getSelect()->order(new Zend_Db_Expr(‘RAND()’));



Get all active pages in magento
$pageCollection = Mage::getModel('cms/page')->getCollection()->addAttributeToFilter('is_active', 1);

$collection = Mage::getModel('cms/page')->getCollection()->getSelect()->where('is_active = 1');


Get current page title in magento 

$this->getLayout()->getBlock('head')->getTitle();


headers already sent error in magento::

When the code inside an if statement


?>