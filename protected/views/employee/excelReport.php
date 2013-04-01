<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      departmentId		</th>
 		<th width="80px">
		      firstName		</th>
 		<th width="80px">
		      lastName		</th>
 		<th width="80px">
		      email		</th>
 		<th width="80px">
		      ext		</th>
 		<th width="80px">
		      hireDate		</th>
 		<th width="80px">
		      leaveDate		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->departmentId; ?>
		</td>
       		<td>
			<?php echo $row->firstName; ?>
		</td>
       		<td>
			<?php echo $row->lastName; ?>
		</td>
       		<td>
			<?php echo $row->email; ?>
		</td>
       		<td>
			<?php echo $row->ext; ?>
		</td>
       		<td>
			<?php echo $row->hireDate; ?>
		</td>
       		<td>
			<?php echo $row->leaveDate; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
