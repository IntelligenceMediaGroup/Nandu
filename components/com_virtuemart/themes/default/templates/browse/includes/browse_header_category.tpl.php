<?php if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
mm_showMyFileName(__FILE__);?>
<style>
#pogas{
text-align:left;
width: 100%;
height: 60px;
}
</style>
<div id="pogas">
	<?php echo $navigation_childlist; ?>
</div>
<?php if( trim(str_replace( "<br />", "" , $desc)) != "" ) { ?>

		<div style="width:100%;float:left;">
			<?php echo $desc; ?>
		</div>
		<br class="clr" /><br />
		<?php
     }
?>
