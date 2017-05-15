<div class="cablist">
		<div class="formBox1">
			<table  id="card-table" class="table">
				<tbody>
					<thead>
					  <tr>
						 <th width="30%">CARMODEL</th>
						 <th width="10%">AVAILABLE</th>
						 <th width="10%">NUMBER</th>
						 <th width="10%">FAREPK</th>
						 <th width="10%">DISTANCE</th>
						 <th width="10%">ADV</th>
						 <th width="30%">TYPE OF CAB</th>
						 
					  </tr>
					 </thead> 
						<tr>
						<td style="width:10%" id="i1"><img src="images/mii.png" height="50%" width="50%"> <?php echo $carmodel; ?></td>
						<td style="width:10%"><?php echo $avail; ?></td>
						<td><?php echo $no; ?></td>
						<TD><?php echo $farepk; ?></TD>
						<td><?php echo $dist; ?> </td>
						<td> <?php echo $adv; ?></td>
						<td id="r1"><div name="<?php echo $name; ?>" email="<?php echo $email; ?>" fromcity="<?php echo $pickupcity; ?>" tocity="<?php echo $dropcity; ?>" fromdate="<?php echo $pickupdate; ?>" todate="<?php echo $returndate ?>" pickuptime="<?php echo $pickuptime; ?>" type= "<?php echo $type; ?> " fare="<?php echo $fare; ?>"  ></div>
						<div id="b2"><button id="b1" class="book">Book</button></div>
            <!-- STYLE="position:relative;" class="button1" -->
					    </td>
					  </tr>
				</tbody>
			</table>
		</div>
	</div>
<style type="text/css">
  th {text-align: left; padding-right: 1em}
  th, td.sub {background-color: #eee}
  .table {
    border: 1px solid black;
  }
  .table .st-key {
    font-weight: bold;
  }
</style>