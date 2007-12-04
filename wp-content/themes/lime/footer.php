		</td>
		<td class="rl"></td>
	  </tr>
	  <tr class="main_side2">
		<?php if($menu == '2'){ print '<td width="34">'; } ?>
		<td class="blc2"></td>
		<td class="bl2"></td>
		<td class="brc2"></td>
	  </tr>
	</table>
	</td>
	<td class="sidebar1">
		<table class="sidebar">
		  <tr class="main_side">
			<td class="tlc"></td>
			<td class="tl"></td>
			<td class="trc"></td>
		  </tr>
		  <tr>
			<td class="ll"></td>
			<td class="sidebar2">
			<?php wp_list_categories('orderby=name&style=list&show_count=0&title_li='.__('Categories','lime').'&feed_image=wp-content/themes/lime/media/rss3.png'); ?>
			<hr size="1" width="90%" align="center">
			<a title="RSS2" href="<?php bloginfo_rss('rss2_url'); ?>" onmouseover="rss2()" onmouseout="rss1()">
			  <div align="center"><img src="wp-content/themes/lime/media/rss1.png" alt="RSS" name="rss"></div>
			</a>
			<!--debug-->
			  <div align="center"><font color="#2880b8" size="1"><?php echo get_num_queries().' '.__('queries','lime').' / '; timer_stop(1); echo ' '.__('sec','lime'); ?></font></div>
			<!--debug-->
			</td>
			<td class="rl"></td>
		  </tr>
		  <tr class="main_side2">
			<td class="blc2"></td>
			<td class="bl2"></td>
			<td class="brc2"></td>
		  </tr>
		</table>
	</td>
	<td class="leak"></td>
   </tr>
  </table>
<!-- <?php echo get_num_queries().' '.__('queries','lime').' / '; timer_stop(1); echo ' '.__('sec','lime'); ?> -->
<?php wp_footer(); ?>
  </body>
</html>