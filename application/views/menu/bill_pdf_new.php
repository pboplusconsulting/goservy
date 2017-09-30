	    
<div style=" font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif; font-size:11px">
					    <div>
						    <h3 style="text-align: center; margin-bottom:3px">GOSERVY</h3>
							</div>
					
						     <table width="100%" cellspacing="0" cellpadding="2">
							     <tr >
								    <td colspan="5" style="border-top: 1px solid #000000">MEMBER NAME : <b><?php echo strtoupper($memberData->member_name); ?></b> <?php if(!empty($memberData->guest_comment)) { echo "(".$memberData->guest_comment.")"; } ?> </td>
								 </tr>
								 <tr >
								    <td colspan="5">MEMBER ID : <?php echo $memberData->membership_id; ?></td>
								 </tr>								 
								 <tr >
								    <td colspan="2">DATE : <?php echo date('d/m/y');?></td>
									<td colspan="3" style="text-align:right">TIME : <small><?php echo date('h:i A');?></small></td>
								 </tr>							     
								 <tr >
								    <td style="text-align:left">ORDER ID</td>
									<td style="text-align:center">TABLE</td>
									<td colspan="3" style="text-align:center">CVR</td>
									
								 </tr>
								 <tr>
								    <td style="text-align:left; border-bottom: 1px dashed #000000"><?php echo $orderid; ?></td>
									<td style="text-align:center; border-bottom: 1px dashed #000000"><?php echo $memberData->table_name; ?></td>
									<td style="text-align:center; border-bottom: 1px dashed #000000" colspan="3"><?php echo $memberData->no_of_guest; ?></td>
									
								 </tr>
							 
							     <tr style="font-weight:bold">
								    <td colspan="4" style="border-bottom: 1px dashed #000000"><small>ITEM NAME</small></td>
									<td style="border-bottom: 1px dashed #000000"><small>QTY</small></td>
									
									</tr>
								 <?php foreach($printOrder as $order){?>
								 <tr style="text-transform: uppercase;">
								    <td colspan="4" ><div style="width:110px"><small><?php echo $order['meal_name'] ?></small></div></td>
									<td style="text-align:center"><?php echo $order['quantity'] ?></td>
									
								 </tr>
								 <?php if(!empty($order['comment'])) { ?>
								 <tr><td colspan="5"><em>(Comment:<?php echo $order['comment'] ?>)</em></td></tr>								 
								 <?php } } if(!empty($printremark)){ ?>
								 <tr><td colspan="5" style="text-align:left; border-top: 1px dashed #000000"><em><strong>Remark:</strong><?php echo $printremark; ?></em></td></tr>
								 <?php } ?>							    
							    </table>
								
</div>