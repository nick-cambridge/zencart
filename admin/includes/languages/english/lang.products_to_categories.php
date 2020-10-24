<?php
/**
 * @copyright Copyright 2003-2020 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id:
*/

$define = [
    'HEADING_TITLE' => 'Products to Multiple Categories Link Manager',
    'HEADING_TITLE2' => 'Categories / Products',
    'TEXT_HEADING_PRODUCT_SELECT' => 'Select Product',
    'WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED' => 'WARNING: The previously-selected product is no longer linked into this category.',
    'TEXT_PRODUCTS_ID_INVALID' => 'WARNING: Product ID#%u is invalid/does not exist in the database.',
    'TEXT_INFO_MASTER_CATEGORY_CHANGE' => 'A product has a Master Category ID (for pricing purposes) that can be considered as the category where the product actually <i>resides</i>. Additionally, a product may be <i>linked</i> to any number of other categories, so that it displays in multiple places. <br>The Master Category ID can be changed by using this Master Category dropdown, that only offers the <strong>currently linked</strong> categories as possible alternatives.<br>To set the Master Category ID to <strong>another</strong> category, first link it to a new category using the table below, and Update. Then use this dropdown to reassign the master category to that new category.',
    'TEXT_INFOBOX_HEADING_SELECT_PRODUCT' => 'Select Product by ID#',
    'TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS' => 'Show Product to Categories Links for: ',
    'TEXT_PRODUCTS_ID' => 'Product ID# ',
    'TEXT_PRODUCTS_NAME' => 'Product: ',
    'TEXT_PRODUCTS_PRICE' => 'Price: ',
    'BUTTON_NEW_PRODUCTS_TO_CATEGORIES' => 'Select Another Product by ID#',
    'BUTTON_CATEGORY_LISTING' => 'Category Listing',
    'TEXT_HEADING_LINKED_CATEGORIES' => 'Linked Categories',
    'TEXT_SET_MASTER_CATEGORIES_ID' => '<strong>WARNING:</strong> a MASTER CATEGORIES ID must be assigned',
    'BUTTON_UPDATE_CATEGORY_LINKS' => 'Update Category Links for',
    'TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO' => '<p>This product is currently linked to the categories selected below (you may change the number of columns displayed on <a target="_blank" href="configuration.php?&amp;gID=3">this page</a>).<br>To add/remove links, select/deselect the checkboxes as required and then click on the Update Category Links button.</p><p>Note that additional product/category actions are available using the Global Tools below.</p>',
    'TEXT_LABEL_CATEGORY_DISPLAY_ROOT' => 'Display the SubCategories under:',
    'BUTTON_SET_DEFAULT_TARGET_CATEGORY' => 'Set as Default',
    'BUTTON_SET_DEFAULT_TARGET_CATEGORY_TITLE' => 'Set this selected Target Category as the Default to display',
    'TEXT_LABEL_SELECT_ALL_OR_NONE' => 'Select All or None',
    'ERROR_CATEGORY_ID_INVALID' => 'Linked Category ID#%u invalid (not added).',
    'SUCCESS_PRODUCT_LINKED_TO_CATEGORIES' => 'Product links to multiple categories updated for: %s',
    'WARNING_PRODUCT_UNLINKED_FROM_CATEGORY' => 'The product was unlinked from the previously selected category "%1$s" ID#%2$u, and so is now shown in it\'s master category.',
    'WARNING_MAX_INPUT_VARS_LIMIT' => 'WARNING: There are %1$u subcategories available for linking on this page, which is greater than the PHP limit "max_input_vars" (currently %2$u). This means no more than %2$u categories may be linked until this PHP limit is increased in your hosting.',
    'HEADER_CATEGORIES_GLOBAL_TOOLS' => 'Global Product/Category Tools',
    'TEXT_PRODUCTS_ID_NOT_REQUIRED' => '<p>Note: A product does not need to be selected to use these tools. However, selecting a product above will display the categories available (and their ID numbers on hover).</p>',
    'TEXT_HEADING_COPY_LINKED_CATEGORIES' => 'Copy Linked Categories to Another Product',
    'TEXT_INFO_COPY_LINKED_CATEGORIES' => 'Copy the linked categories of the currently selected product%sto another product.<br>You may <strong>Add</strong> this product\'s linked categories to the Target Product, or you may <strong>Replace</strong> (delete+add) the Target product\'s linked categories.<br>Note: This action does not copy the master category of the source product as a linked category for the target category, it only copies the linked categories.',
    'TEXT_LABEL_ENABLE_COPY_LINKS' => 'Enable product selection dropdown (lists <b>all</b> products)',
    'TEXT_OPTION_LINKED_CATEGORIES' => 'Select the Target Product',
    'BUTTON_COPY_LINKED_CATEGORIES_ADD' => 'Copy-Add Linked Categories',
    'BUTTON_COPY_LINKED_CATEGORIES_REPLACE' => 'Copy-Replace Linked Categories',
    'SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_ADD' => 'Linked Categories (%1$u) have been added:<br>FROM Reference Product: %2$s<br>TO Target Product: %3$s',
    'SUCCESS_LINKED_CATEGORIES_COPIED_TO_TARGET_PRODUCT_REPLACE' => 'Linked Categories (%1$u) for Target Product: %3$s<br>have been <em>replaced</em> by the Linked Categories of Product: %2$s',
    'WARNING_COPY_LINKED_CATEGORIES_NO_TARGET' => 'A target product was not selected!',
    'WARNING_COPY_LINKED_CATEGORIES_NO_ADDITIONAL' => 'Nothing to do!<br>Source Product: %1$s<br>has no <em>additional</em> linked categories to copy to<br>Target Product: %2$s',
    'ERROR_MASTER_CATEGORY_MISSING' => 'ERROR: Master Category ID missing from table "' . TABLE_PRODUCTS_TO_CATEGORIES . '"<br>for Product: %s',
    'TEXT_HEADING_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED' => 'Link (copy) Products from one Category to another Category',
    'TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED' => 'Example: a Copy from Source Category ID#8 to Target Category ID#22 will create linked copies of ALL the products that are in Category 8, in Category 22.',
    'TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED' => 'Select ALL products from the Source Category ID#: ',
    'TEXT_LABEL_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED' => 'Link (copy) to the Target Category ID#: ',
    'BUTTON_COPY_CATEGORY_LINKED' => 'Copy Products as Linked',
    'WARNING_CATEGORY_SOURCE_NOT_EXIST' => '<strong>Source</strong> Category ID#%u invalid (does not exist)',
    'WARNING_CATEGORY_TARGET_NOT_EXIST' => '<strong>Target</strong> Category ID#%u invalid (does not exist)',
    'WARNING_CATEGORY_IDS_DUPLICATED' => 'Warning: same Category IDs (#%u)',
    'WARNING_CATEGORY_NO_PRODUCTS' => '<strong>Source</strong> Category ID#%u invalid (contains no products)',
    'WARNING_CATEGORY_SUBCATEGORIES' => '<strong>Target</strong> Category ID#%u invalid (contains subcategories)',
    'SUCCESS_PRODUCT_COPIED' => 'product: %1$s was linked to category ID#%2$u<br>',
    'SUCCESS_COPY_LINKED' => '%1$u product(s) linked from Source Category ID#%2$u to Target Category ID#%3$u',
    'WARNING_COPY_FROM_IN_TO_LINKED' => 'WARNING: No products copied (all products in Category ID#%1$u are already linked into Category ID#%2$u)',
    'TEXT_HEADING_REMOVE_ALL_PRODUCTS_FROM_CATEGORY_LINKED' => 'Remove Linked Products from a Category',
    'TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED' => 'Example: Using Reference Category #8 and Target Category #22 will remove any linked products from the Target Category #22 that exist in the Reference Category #8. No product in Target Category #22 can have a master category ID of #22 (if so, it must be reassigned to another category).<br><strong>Current Category ID#%u.</strong>',
    'TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED' => 'Select ALL Products in the Reference Category: ',
    'TEXT_LABEL_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED' => 'Remove Any Linked Products from the Target Category: ',
    'BUTTON_REMOVE_CATEGORY_LINKED' => 'Remove Linked Products',
    'SUCCESS_REMOVED_PRODUCT' => 'product: %1$s was removed from category ID#%2$u<br>',
    'SUCCESS_REMOVE_LINKED_PRODUCTS' => '%u linked product(s) removed',
    'WARNING_REMOVE_FROM_IN_TO_LINKED' => 'WARNING: Nothing to do! No products in Target Category ID#%1$u are linked from Reference Category ID#%2$u',
    'WARNING_PRODUCT_MASTER_CATEGORY_IN_TARGET' => 'Product: ID#%1$u "%2$s" (%3$s)<br>has the same master category id as the target category ID#%4$u<br>',
    'WARNING_REMOVE_LINKED_PRODUCTS_MASTER_CATEGORIES_ID_CONFLICT' => '<strong>WARNING: MASTER CATEGORIES ID CONFLICT!</strong><br>Reference Category ID#%1$u for removal of linked products in Target Category ID#%2$u.<br>You have requested the removal of some linked products from a target category. One or more of those products has the same master category ID as the target category. This means that the product is not "linked" to the target category but "resides" in that category and so cannot be removed as part of this request to remove <i>linked</i> products.<br>If you wish to <i>retain</i> this product, you must change it\'s master category ID to another category (i.e. "Move" it) before carrying out this process again. This may be done on this page or via the "Move" action on a Category-Product listing page. The first product with a conflicting master category ID has been already selected for editing.<br/>If you wish to <i>delete</i> this product, you must use the "Delete" action on the Category-Product listing page.',
    'TEXT_HEADING_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER' => 'Reset the Master Category ID for ALL Products in a Category',
    'TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER' => 'Example: Resetting Category 22 will assign a Master Category ID of 22 to ALL the products in Category 22.',
    'TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER' => 'Reset the Master Category ID for All Products in Category: ',
    'BUTTON_RESET_CATEGORY_MASTER' => 'Reset Master Categories ID',
    'SUCCESS_RESET_PRODUCTS_MASTER_CATEGORY' => 'All products in Category ID#%1$d have been reset to have Master Category ID#%1$d',
    'TEXT_CATEGORIES_NAME' => 'Categories Name',
];

return $define;
