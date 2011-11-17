<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' );
mm_showMyFileName(__FILE__);
 ?>
 <style>
 .bilde{
 width: 100px;
 height: 100px;
 float: left;
 }
 </style>
 <div class="browseProductContainer">
        
        
        <h4 class="browseProductTitle"><a title="<?php echo $product_name ?>" href="<?php echo $product_flypage ?>">
            <?php echo $product_name ?></a>
        </h4>

        <div class="bilde" align="left">
	        <script type="text/javascript">//<![CDATA[
	        document.write('<a href="javascript:void window.open(\'<?php echo $product_full_image ?>\', \'win2\', \'status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=<?php echo $full_image_width ?>,height=<?php echo $full_image_height ?>,directories=no,location=no\');">');
	        document.write( '<?php echo ps_product::image_tag( urldecode($product_thumb_image), 'class="browseProductImage" border="0" title="'.$product_name.'" alt="'.$product_name .'"' ) ?></a>' );
	        //]]>
	        </script>
	        <noscript>
	            <a href="<?php echo $product_full_image ?>" target="_blank" title="<?php echo $product_name ?>">
	            <?php echo ps_product::image_tag( urldecode($product_thumb_image), 'class="browseProductImage" border="0" title="'.$product_name.'" alt="'.$product_name .'"' ) ?>
	            </a>
	        </noscript>
        </div>
        <div class="browseProductDescription">
            <?php echo $product_s_desc ?>&nbsp;
            <a href="<?php echo $product_flypage ?>" title="<?php echo $product_details ?>"><br />
			<?php echo $product_details ?>...</a>
        </div>
        <br />

</div>
