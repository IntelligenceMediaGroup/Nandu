<?php
/**
* @package   YOOtweet Module
* @version   1.5.3 2009-06-02 11:04:53
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) 2007 - 2009 YOOtheme GmbH
* @license   http://www.gnu.org/copyleft/gpl.html GNU/GPL
*/

// no direct access
defined('_JEXEC') or die('Restricted access');

?>
<div class="<?php echo $style ?>">
	<div class="yoo-tweet">
	
		<?php if (count($feed->items) > 0) : ?>
		
			<ul>
				<?php
				$i = 0;
				foreach ($feed->items as $key => $item) :
					$link      = $item->get_link(0, 'alternate');
					$image     = $item->get_link(0, 'image');
					$published = $item->get_date('Y-m-d H:i:s');
					$author    = modYOOtweetHelper::getAuthor($feed, $item);
					$text      = modYOOtweetHelper::getText($feed, $item);
					$i++;
				?>
				<li class="<?php if ($i % 2 == 0) { echo 'even'; } else { echo 'odd'; } ?> <?php if ($i == 1) echo 'first'; ?>">
				
					<?php if ($show_image) : ?>
					<a class="image" href="<?php echo $author->link; ?>">
						<img src="<?php echo $image; ?>" align="left" width="<?php echo $image_size; ?>" height="<?php echo $image_size; ?>" alt="<?php echo $author->name; ?>"/>
					</a>
					<?php endif; ?>
					
					<p class="text"><?php echo $text; ?></p>
					
					<?php if ($show_author || $show_date) : ?>
					<p class="meta">
						<?php if ($show_author) : ?>
							<span class="author">by <a href="<?php echo $author->link; ?>"><?php echo $author->name; ?></a></span>
						<?php endif; ?>
						
						<?php if ($show_date) : ?>
							<span class="date"><?php echo modYOOtweetHelper::getRelativeTime($published); ?></span>
						<?php endif; ?>
					</p>
					<?php endif; ?>
					
				</li>
				<?php endforeach; ?>
				
			</ul>
		
		<?php else : ?>
			<?php echo JText::_('No tweets found'); ?>
		<?php endif; ?>
		
	</div>
</div>
