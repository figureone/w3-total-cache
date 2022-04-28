<?php
namespace W3TC;

if ( !defined( 'W3TC' ) )
	die();

include W3TC_INC_DIR . '/options/common/header.php';
?>
<div class="metabox-holder">
	<?php Util_Ui::postbox_header( __( 'Usage Statistics', 'w3-total-cache' ) ); ?>

	<div style="float: right"><a href="admin.php?page=w3tc_stats">&lt; Back To Statistics</a></div>
	<h1>Object Cache Calls</h1>
	<p>
		Period
		<?php echo esc_html( $result['date_min'] ); ?>
		-
		<?php echo esc_html( $result['date_max'] ); ?>
	</p>

	<table style="width: 100%">
		<tr>
			<td><?php $this->sort_link( $result, 'Group', 'group' ) ?></td>
			<td><?php $this->sort_link( $result, 'Calls', 'count_total' ) ?></td>
			<td><?php $this->sort_link( $result, 'Get', 'count_get_total' ) ?></td>
			<td><?php $this->sort_link( $result, 'Cache Hits', 'count_get_hit' ) ?></td>
			<td><?php $this->sort_link( $result, 'Set', 'count_set' ) ?></td>
			<td><?php $this->sort_link( $result, 'Total processed time (ms)', 'sum_time_ms' ) ?></td>
			<td><?php $this->sort_link( $result, 'Total size transfeffed', 'sum_size' ) ?></td>
			<td><?php $this->sort_link( $result, 'Avg Size', 'avg_size' ) ?></td>
		</tr>
	<?php foreach ($result['items'] as $i): ?>
		<tr>
			<td><?php echo esc_html($i['group']) ?></td>
			<td><?php echo esc_html($i['count_total']) ?></td>
			<td><?php echo esc_html($i['count_get_total']) ?></td>
			<td><?php echo esc_html($i['count_get_hit']) ?></td>
			<td><?php echo esc_html($i['count_set']) ?></td>
			<td><?php echo esc_html($i['sum_time_ms']) ?></td>
			<td><?php echo $i['sum_size'] == 0 ? 'n/a' : esc_html($i['sum_size']) ?></td>
			<td><?php echo $i['avg_size'] == 0 ? 'n/a' : esc_html($i['avg_size']) ?></td>
		</tr>
	<?php endforeach ?>
	</table>

	<?php Util_Ui::postbox_footer(); ?>
</div>
