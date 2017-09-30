<div id="content_block">
<div class="row">
		<div class="col-md-8 col-sm-12 col-xs-12 manage_pad">
		<?php 
		// echo "<pre>";print_r($tableStatus);echo "</pre>";
			$book_table_ids=array();//array of booked tables
			$no_of_orders=array();
			$complete_orders=array();
			$cancel_orders=array();
			$unread_order_notification=array();
			$i=1;$j=1;$k=1;$c=1;
		foreach($tableStatus as $ts){
			if($ts['booking_status']==1)
			{
			   $book_table_ids[]=$ts['id'];
			} 

			if($ts['no_of_orders']!=null)
            {
				$no_of_orders[$i++]=$ts['no_of_orders'];
			}
			else
			{
				$no_of_orders[$i++]=0;
			}
            if($ts['complete_orders']!=null)
            {
				$complete_orders[$j++]=$ts['complete_orders'];
			}	
			else
			{
				$complete_orders[$j++]=0;
			}
			
            if($ts['cancel_orders']!=null)
            {
				$cancel_orders[$c++]=$ts['cancel_orders'];
			}	
			else
			{
				$cancel_orders[$c++]=0;
			}

            if($ts['unread_order_notification']!=null)
            {
				$unread_order_notification[$k++]=$ts['unread_order_notification'];
			}	
			else
			{
				$unread_order_notification[$k++]=0;
			}			
		}
		//echo '<pre>';
		//print_r($data); 
		?>

				<!--- New Table Code Start Here --->
			<div class="clearfix"></div>
     <!--Row One-->
      <div class="row">
        <div class="col-sm-3 col-xs-12">
          <div class="sixchair_table clearfix <?php echo in_array(1,$book_table_ids)?($no_of_orders[1]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">  
 <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[1]>0?($complete_orders[1]+$cancel_orders[1])*100/$no_of_orders[1]:0 ?>%">
                                       </div>
                                     		  
              <span>G1</span>
          </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
        	<div class="sixchair_table clearfix <?php echo in_array(2,$book_table_ids)?($no_of_orders[2]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[2]>0?($complete_orders[2]+$cancel_orders[2])*100/$no_of_orders[2]:0 ?>%">
                                       </div>
 		  
              <span>G2</span>
          </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
        	<div class="sixchair_table clearfix <?php echo in_array(3,$book_table_ids)?($no_of_orders[3]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[3]>0?($complete_orders[3]+$cancel_orders[3])*100/$no_of_orders[3]:0 ?>%">
                                       </div>		  
              <span>G3</span>
          </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
        	<div class="sixchair_table clearfix <?php echo in_array(4,$book_table_ids)?($no_of_orders[4]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[4]>0?($complete_orders[4]+$cancel_orders[4])*100/$no_of_orders[4]:0 ?>%">
                                       </div>		  
              <span>G4</span>
          </div>
          </div>
        </div>
      </div>
      
     <!--Row Two-->
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <div class="fourchair_table clearfix <?php echo in_array(5,$book_table_ids)?($no_of_orders[5]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[5]>0?($complete_orders[5]+$cancel_orders[5])*100/$no_of_orders[5]:0 ?>%">
                                       </div>		  
              <span>G5</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(6,$book_table_ids)?($no_of_orders[6]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[6]>0?($complete_orders[6]+$cancel_orders[6])*100/$no_of_orders[6]:0 ?>%">
                                       </div>		  
              <span>G6</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(7,$book_table_ids)?($no_of_orders[7]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[7]>0?($complete_orders[7]+$cancel_orders[7])*100/$no_of_orders[7]:0 ?>%">
                                       </div>		  
              <span>G7</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(8,$book_table_ids)?($no_of_orders[8]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[8]>0?($complete_orders[8]+$cancel_orders[8])*100/$no_of_orders[8]:0 ?>%">
                                       </div>		  
              <span>G8</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(9,$book_table_ids)?($no_of_orders[9]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">  
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[9]>0?($complete_orders[9]+$cancel_orders[9])*100/$no_of_orders[9]:0 ?>%">
                                       </div>		  
              <span>G9</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(10,$book_table_ids)?($no_of_orders[10]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">  
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[10]>0?($complete_orders[10]+$cancel_orders[10])*100/$no_of_orders[10]:0 ?>%">
                                       </div>		  
              <span>G10</span>
          </div>
          </div>
        </div>
      </div>   
         
     <!--Row Three-->
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <div class="fourchair_table clearfix <?php echo in_array(11,$book_table_ids)?($no_of_orders[11]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">   
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[11]>0?($complete_orders[11]+$cancel_orders[11])*100/$no_of_orders[11]:0 ?>%">
                                       </div>		  
              <span>G11</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(12,$book_table_ids)?($no_of_orders[12]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[12]>0?($complete_orders[12]+$cancel_orders[12])*100/$no_of_orders[12]:0 ?>%">
                                       </div>		  
              <span>G12</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(13,$book_table_ids)?($no_of_orders[13]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[13]>0?($complete_orders[13]+$cancel_orders[13])*100/$no_of_orders[13]:0 ?>%">
                                       </div>		  
              <span>G13</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(14,$book_table_ids)?($no_of_orders[14]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[14]>0?($complete_orders[14]+$cancel_orders[14])*100/$no_of_orders[14]:0 ?>%">
                                       </div>		  
              <span>G14</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(15,$book_table_ids)?($no_of_orders[15]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[15]>0?($complete_orders[15]+$cancel_orders[15])*100/$no_of_orders[15]:0 ?>%">
                                       </div>		  
              <span>G15</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(16,$book_table_ids)?($no_of_orders[16]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
		  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[16]>0?($complete_orders[16]+$cancel_orders[16])*100/$no_of_orders[16]:0 ?>%">
                                       </div>
              <span>G16</span>
          </div>
          </div>
        </div>
      </div>
      
     <!--Row Four-->
      <div class="row">
        <div class="col-sm-2 col-xs-12">
          <div class="fourchair_table clearfix <?php echo in_array(17,$book_table_ids)?($no_of_orders[17]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[17]>0?($complete_orders[17]+$cancel_orders[17])*100/$no_of_orders[17]:0 ?>%">
                                       </div>		  
              <span>C1</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(18,$book_table_ids)?($no_of_orders[18]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">   
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[18]>0?($complete_orders[18]+$cancel_orders[18])*100/$no_of_orders[18]:0 ?>%">
                                       </div>		  
              <span>C2</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(19,$book_table_ids)?($no_of_orders[19]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                      aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[19]>0?($complete_orders[19]+$cancel_orders[19])*100/$no_of_orders[19]:0 ?>%">
                                       </div>		  
              <span>C3</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(20,$book_table_ids)?($no_of_orders[20]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[20]>0?($complete_orders[20]+$cancel_orders[20])*100/$no_of_orders[20]:0 ?>%"></div>		  
              <span>C4</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(21,$book_table_ids)?($no_of_orders[21]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[21]>0?($complete_orders[21]+$cancel_orders[21])*100/$no_of_orders[21]:0 ?>%"></div>		  
              <span>C5</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="fourchair_table clearfix <?php echo in_array(22,$book_table_ids)?($no_of_orders[22]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[22]>0?($complete_orders[22]+$cancel_orders[22])*100/$no_of_orders[22]:0 ?>%"></div>		  
              <span>C6</span>
          </div>
          </div>
        </div>
      </div>  
          
       <!--Row Five-->
       <div class="row">
        <div class="col-sm-2 col-xs-12">
          <div class="twochair_table clearfix <?php echo in_array(23,$book_table_ids)?($no_of_orders[23]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[23]>0?($complete_orders[23]+$cancel_orders[23])*100/$no_of_orders[23]:0 ?>%"></div>		  
              <span>C7</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="twochair_table clearfix <?php echo in_array(24,$book_table_ids)?($no_of_orders[24]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[24]>0?($complete_orders[24]+$cancel_orders[24])*100/$no_of_orders[24]:0 ?>%"></div>		  
              <span>C8</span>
          </div>
          </div>
        </div>
<?php for ($b = 25; $b < 29; $b++) {?>
    
        <div class="col-sm-2 col-xs-12">
        	<div class="twochair_table clearfix <?php echo in_array($b,$book_table_ids)?($no_of_orders[$b]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[$b]>0?($complete_orders[$b]+$cancel_orders[$b])*100/$no_of_orders[$b]:0 ?>%"></div>
              
              <span>B<?php echo $b-24 ?></span>
          </div>
          </div>
        </div>
<?php } ?>

      </div>
      
              
       <!--Row Six-->
       <div class="row">
       <div class="col-sm-9 col-xs-12">
	   <?php for ($ib = 30; $ib < 35; $ib++) {?>
       		<div class="l-2">
        	<div class="twochair_table clearfix <?php echo in_array($ib,$book_table_ids)?($no_of_orders[$ib]>0?'':'booked_table'):'empty_table'?>">
            <span><i></i></span>
            <div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[$ib]>0?($complete_orders[$ib]+$cancel_orders[$ib])*100/$no_of_orders[$ib]:0 ?>%"></div>
            	<span>B<?php echo $ib-24 ?></span>
            </div>
            </div>
        	</div>
            <?php } ?>

        </div>
       <div class="col-sm-3 col-xs-12">
        	<div class="sixchair_table clearfix <?php echo in_array(35,$book_table_ids)?($no_of_orders[35]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[35]>0?($complete_orders[35]+$cancel_orders[35])*100/$no_of_orders[35]:0 ?>%"></div>		  
              <span>F1</span>
          </div>
          </div>
        </div>
        </div>
        
       <!--Row Seven-->
       <div class="row">
       <div class="col-sm-1 col-xs-12 wd-ad"></div>
        <div class="col-sm-3 col-xs-12">
          <div class="sixchair_table clearfix <?php echo in_array(36,$book_table_ids)?($no_of_orders[36]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">  
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[36]>0?($complete_orders[36]+$cancel_orders[36])*100/$no_of_orders[36]:0 ?>%"></div>		  
              <span>F2</span>
          </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
        	<div class="sixchair_table clearfix <?php echo in_array(37,$book_table_ids)?($no_of_orders[37]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[37]>0?($complete_orders[37]+$cancel_orders[37])*100/$no_of_orders[37]:0 ?>%"></div>		  
              <span>F3</span>
          </div>
          </div>
        </div>
        <div class="col-sm-3 col-xs-12">
        	<div class="sixchair_table clearfix <?php echo in_array(38,$book_table_ids)?($no_of_orders[38]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[38]>0?($complete_orders[38]+$cancel_orders[38])*100/$no_of_orders[38]:0 ?>%"></div>		  
              <span>F4</span>
          </div>
          </div>
        </div>
        <div class="col-sm-2 col-xs-12">
        	<div class="twochair_table clearfix <?php echo in_array(39,$book_table_ids)?($no_of_orders[39]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[39]>0?($complete_orders[39]+$cancel_orders[39])*100/$no_of_orders[39]:0 ?>%"></div>		  
              <span>F5</span>
          </div>
          </div>
        </div>
      </div>
       <!--Row Eight-->
        <div class="row">      
        <div class="l-3">
        	<div class="fourchair_table clearfix <?php echo in_array(40,$book_table_ids)?($no_of_orders[40]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[40]>0?($complete_orders[40]+$cancel_orders[40])*100/$no_of_orders[40]:0 ?>%"></div>		  
              <span>F6</span>
          </div>
          </div>
        </div> 
          <div class="l-3">
        	<div class="fourchair_table clearfix <?php echo in_array(41,$book_table_ids)?($no_of_orders[41]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[41]>0?($complete_orders[41]+$cancel_orders[41])*100/$no_of_orders[41]:0 ?>%"></div>		  
              <span>F7</span>
          </div>
          </div>
        </div>
        <div class="l-4">
        	<div class="sixchair_table clearfix <?php echo in_array(42,$book_table_ids)?($no_of_orders[42]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">  
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[42]>0?($complete_orders[42]+$cancel_orders[42])*100/$no_of_orders[42]:0 ?>%"></div>		  
              <span>F8</span>
          </div>
          </div>
        </div> 
         <div class="l-3">
        	<div class="fourchair_table clearfix <?php echo in_array(43,$book_table_ids)?($no_of_orders[43]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[43]>0?($complete_orders[43]+$cancel_orders[43])*100/$no_of_orders[43]:0 ?>%"></div>		  
              <span>F9</span>
          </div>
          </div>
        </div>
        <div class="l-3">
        	<div class="twochair_table clearfix <?php echo in_array(44,$book_table_ids)?($no_of_orders[44]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[44]>0?($complete_orders[44]+$cancel_orders[44])*100/$no_of_orders[44]:0 ?>%"></div>		  
              <span>F10</span>
          </div>
          </div>
        </div> 
        <div class="l-3">
        	<div class="twochair_table clearfix <?php echo in_array(45,$book_table_ids)?($no_of_orders[45]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[45]>0?($complete_orders[45]+$cancel_orders[45])*100/$no_of_orders[45]:0 ?>%"></div>		  
              <span>F11</span>
          </div>
          </div>
        </div>         
        </div>
       <!--Row Nine-->
       <div class="row">
       <div class="col-sm-3 col-xs-12">
        	<div class="sixchair_table clearfix <?php echo in_array(46,$book_table_ids)?($no_of_orders[46]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress"> 
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[46]>0?($complete_orders[46]+$cancel_orders[46])*100/$no_of_orders[46]:0 ?>%"></div>		  
              <span>F12</span>
          </div>
          </div>
        </div>
       <div class="col-sm-9 col-xs-12">
       		<div class="l-2">
        	<div class="twochair_table clearfix <?php echo in_array(47,$book_table_ids)?($no_of_orders[47]>0?'':'booked_table'):'empty_table'?>">
            <span><i></i></span>
            <div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[47]>0?($complete_orders[47]+$cancel_orders[47])*100/$no_of_orders[47]:0 ?>%"></div>
            	<span>F14</span>
            </div>
            </div>
        	</div>
            <?php for ($ci = 21; $ci < 25; $ci++) {?>
			<div class="l-2">
        	<div class="twochair_table clearfix <?php echo in_array($ci,$book_table_ids)?($no_of_orders[$ci]>0?'':'booked_table'):'empty_table'?>">
            <span><i></i></span>
            <div class="progress">
			<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[$ci]>0?($complete_orders[$ci]+$cancel_orders[$ci])*100/$no_of_orders[$ci]:0 ?>%"></div>
            	<span>C<?php echo $ci; ?></span>
            </div>
            </div>
        	</div>

            <?php } ?>            
        </div>       
        </div>
       <!--Row Ten-->
      <div class="row">
	  <?php for ($cii = 25; $cii < 31; $cii++) {?>
        <div class="col-sm-2 col-xs-12">
          <div class="fourchair_table clearfix <?php echo in_array($cii,$book_table_ids)?($no_of_orders[$cii]>0?'':'booked_table'):'empty_table'?>">
          <span><i></i></span>
          <span><i></i></span>
          <span><i></i></span>
          <div class="progress">
<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $no_of_orders[$cii]>0?($complete_orders[$cii]+$cancel_orders[$cii])*100/$no_of_orders[$cii]:0 ?>%"></div>		  
              <span>C<?php echo $cii; ?></span>
          </div>
          </div>
        </div>
	  <?php } ?>
      </div>				
				<!--- New Table Code End Here --->
        </div>
        <div class="col-md-4 tab_mob_activated col-sm-12 col-xs-12">		
        <section id="members_listing">
            		<h4>Steward - Today's Member</h4>
                    <div id="custom-search-input">
						<div class="input-group col-md-12">
							<input type="text" class="form-control input-lg" placeholder="Search members" name="search_member"/>
							<span class="input-group-btn">
								<button class="btn btn-info btn-lg" type="button">
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</div>
                    </div>
            
        <div id="start_lsiting">
		
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		<?php foreach($data as $member){
			$orderData=$this->Dash_model->get_order_data($member['table_booking_id']);
			$feedback=$this->Dash_model->get_by_query_return_row("SELECT * FROM ru_feedback WHERE table_booking_id=".$member['table_booking_id']." AND status=1");
			$ratingArr=$this->config->item('feedback_rating');
			$member_status=$this->config->item('member_status');
            $total_orders=$this->Dash_model->total_orders($member['table_booking_id']);			
			$no_of_delay=$this->Dash_model->no_of_dalay_order($member['table_booking_id']);
			$no_of_complete=$this->Dash_model->no_of_complete_order($member['table_booking_id']);
			$no_of_cancel=$this->Dash_model->no_of_cancel_order($member['table_booking_id']);
			$no_of_unread=$this->Dash_model->no_of_unread_oreder($member['table_booking_id']);
			$check_bill_status=$this->Dash_model->check_bill_status($member['table_booking_id']);
			$number_of_bills_required=$this->Dash_model->number_of_bills($member['table_booking_id']);//echo $number_of_bills;
			
			if($member['member_status']==0 || $member['member_status']==4){$tiles_color="#f8be5d"; } //Table relevied
			//elseif($feedback != null) { $tiles_color="#f8be5d"; } //Table relevied
			else if($no_of_delay > 0){  $tiles_color="#d9534f"; } //Order Delayed 
			else if(count($orderData)>0 && count($orderData)==($no_of_complete+$no_of_cancel)){$tiles_color="#5cb85c";} //Order Served
			else if(count($orderData)==0){ $tiles_color="#FF5500";} //Table Booked
			else { $tiles_color="#d9534f"; } //Order panding
				?>
		  <div class="panel panel-default">
			<div class="panel-heading <?php echo $no_of_delay>0?'inside_guest_delay':'inside_guest' ?> <?php echo (count($orderData)>0 && count($orderData)==($no_of_complete+$no_of_cancel)?'completed_all':''); ?>" style="background:<?php echo $tiles_color; ?>" role="tab" id="heading<?php echo $member['table_booking_id']; ?>">
				<h4 class="panel-title">
				<small class="tile_msg"></small>
			    <a class="collapsed"  data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $member['table_booking_id'];?>" aria-expanded="false" aria-controls="collapse1" title="dfdf">
			    <img src="<?php echo base_url(); ?>assets/img/user_pic.png" class="img-circle" alt="username" width="30" /> <?php echo strlen($member['member_name'])>11?ucwords(strtolower(substr($member['member_name'],0,10))).'..':ucwords(strtolower($member['member_name'])); ?>
				
				<span class="badge"><?php echo $no_of_complete.'<i class="divider"></i>'.($total_orders); ?></span>
			  <!--  <span class="table_num"><strong><?php $tbl=explode(',',$member['table_name']); echo count($tbl)>2?$tbl[0].','.$tbl[1].',..':$member['table_name'];?></strong></span>-->
              
              	   <span class="table_num">
                               <?php 
							   $tbl=explode(',',$member['table_name']);
							   if(count($tbl)>0) { foreach($tbl as $key=>$value) { ?>
                               <strong><?php echo $value?></strong>
                               <?php } }?>
                              </span>
                              
			    </a>
				
				         <span class="mini-about ft-10">
								<b>Arrival: <i><?php echo date('h:i A',strtotime($member['booking_time']));?></i></b>
								
					         <?php if($member['member_status']==0){  echo '<br><b><i>'.$member_status[$member['member_status']].'</i></b>';}
							 elseif($member['member_status']==4 && $member['table_status']==0) { 
								       echo '<br><b><i>Table Relieved</i></b>';
								}
							 else if($no_of_delay > 0){ ?>
								<br><b><i><?php echo 'Order Delayed';?></i></b><br><b><i><?php echo $no_of_delay.' dish delayed';?></i></b>
								<?php }
								 else if(count($orderData)>0 && count($orderData)==($no_of_complete+$no_of_cancel)){ echo '<br><b><i>Order Served</i></b>'; 
								} else if(count($orderData)==0){ echo '<br><b><i>Table Booked</i></b>';
								} else { echo '<br><b><i>Order Pending</i></b>'; } ?>
								</span>
		        </h4>

            </div>
        <div id="collapse<?php echo $member['table_booking_id'];?>" class="panel-collapse collapse inside_guest" role="tabpanel" aria-labelledby="heading<?php echo $member['table_booking_id'];?>">
            <div class="panel-body">
            	<div class="tabbable-panel">
				    <div class="tabbable-line">
					    <ul class="nav nav-tabs ">
						    
							<li>
								<a href="#tab_default2_<?php echo $member['table_booking_id'];?>" data-toggle="tab">About Guest</a>
							</li>
							
						    <li class="active">
							   <a href="#tab_default1_<?php echo $member['table_booking_id'];?>" data-toggle="tab">Take Order</a>
						    </li>
							<li>
							   <a href="#tab_default3_<?php echo $member['table_booking_id'];?>" data-toggle="tab">Order Status</a>
						    </li>

							<?php //} ?>
							
							<li>
							     <?php
                                  if($member['member_status']!=0){
									 										 
								     if($feedback == null){
									 
									/* if($number_of_bills_required > 0 && ($number_of_bills_required!=$check_bill_status->generated_bills || $check_bill_status->no_of_unpaid>0))
								     { */
								    ?>
									 <!--   <a href="#tab_default4_<?php echo $member['table_booking_id'];?>" data-toggle="tab">Feedback</a> -->
								    <?php // }else {
									 ?>
								     
								 
								  <a href="<?php echo base_url().'dashboard/feedback/'.$member['table_booking_id']?>" data-tablebookingid="<?php echo $member['table_booking_id'];?>" class="member-feedback">Feedback</a>
								 
									 <?php } /*}*/ else { ?>
							    <a href="#tab_default4_<?php echo $member['table_booking_id'];?>" data-toggle="tab">Feedback</a>
								  <?php } } ?>
							</li>
							
							
                            
							<li>
							    <a href="#tab_default5_<?php echo $member['table_booking_id'];?>" data-toggle="tab" class="member-bill" data-bookingid="<?php echo $member['table_booking_id'];?>">Meal Bill</a>
								
						    </li>
							
							<li>
							    <a href="#tab_default7_<?php echo $member['table_booking_id'];?>" data-toggle="tab" class="member-bill2" data-bookingid="<?php echo $member['table_booking_id'];?>">Alcohol Bill</a>
								
						    </li> 
							
							<!--- <li class="dropdown"> 
<a href="#" class="dropdown-toggle" id="myTabDrop1" data-toggle="dropdown">Bill <span class="caret"></span></a> 
<ul class="dropdown-menu" style="width:60px;"> 
<li class=""><a href="#tab_default5_<?php // echo $member['table_booking_id'];?>" data-toggle="tab" class="member-bill" data-bookingid="<?php // echo $member['table_booking_id'];?>">Meal Bill</a></li> 
<li class=""><a href="#tab_default7_<?php // echo $member['table_booking_id'];?>" data-toggle="tab" class="member-bill2" data-bookingid="<?php // echo $member['table_booking_id'];?>">Alcohol Bill</a></li> 
</ul> 
</li> --->
							
							<li>
							    <a href="#tab_default6_<?php echo $member['table_booking_id'];?>" data-toggle="tab" class="" data-bookingid="<?php echo $member['table_booking_id'];?>">Payment Status</a>
								
						    </li>
							
							
                            
                            
                            
					    </ul>
					<div class="tab-content">
                    
                    	<div class="tab-pane" id="tab_default6_<?php echo $member['table_booking_id'];?>">
                        
							  <?php  
							 $query = $this->db->query('SELECT * FROM ru_order_bill WHERE table_booking_id='.$member['table_booking_id']);
							 $payment_row=$query->row();//print_r($payment_row);
							 $final_amount=$this->db->query("SELECT SUM(final_amount) AS final_amount FROM ru_order_bill WHERE table_booking_id=".$member['table_booking_id'])->row()->final_amount;
							 
							$myrows=$query->num_rows();
							$number_of_bills=$this->Dash_model->number_of_bills($member['table_booking_id']);
							$new_meal_order=$this->Dash_model->check_new_meal_order_bill($member['table_booking_id']);
							$new_alcohol_order=$this->Dash_model->check_new_alcohol_order_bill($member['table_booking_id']);
							$isBillPaid=$this->Dash_model->isBillPaid($member['table_booking_id']);
							  if($member['member_status'] == 1){echo "<br><br><h6 style='text-align:center;'>Please add order first.</h6><br>";}
							  else if($member['member_status'] == 2){echo "<br><br><h6 style='text-align:center;'>Please wait till order are completed</h6><br>";}
							  else if($member['member_status'] == 3)
							  {
									if($myrows < $number_of_bills) { echo "<br><br><h6 style='text-align:center;'>Please generate bill.</h6><br>";}
										
                                    else if($new_meal_order){
										echo "<br><br><h6 style='text-align:center;'>Please regenerate meal bill.</h6><br>";
									}
									else if($new_alcohol_order)
									{
										echo "<br><br><h6 style='text-align:center;'>Please regenerate alcohol bill.</h6><br>";
									}	
									else if ($isBillPaid == $number_of_bills)
									{?>
								     <p class="clearfix"></p>
								  <div class="col-xs-12"><label>Payment Status</label> : <?php echo $payment_row->bill_status==1?'Paid':'Pending';?>
								  </div>
								  <div class="col-xs-12"><label>Payment Amount</label> : <?php echo $final_amount ?>
								  </div>
								  <div class="col-xs-12"><label>Payment Method</label> : <?php echo $payment_row->payment_method?>
								  </div>
										
									<?php }	
									else { ?>
											   
										   <form name="payment_form" method="post" action="<?php echo base_url().'dashboard/save_payment_status/'.$member['table_booking_id'] ?>">
										   <input type="hidden" name="payment_amount" id="payment_amount" value="<?php echo $final_amount ?>">
											<div class="col-xs-6">Payment Status: <select name="payment_status1" id="payment_status1"  class="form-control payment_status1"  required>
											  <option value="0" <?php if($payment_row->bill_status=='0') echo 'selected';?>>Pending</option>  
										   <option value="1" <?php if($payment_row->bill_status=='1') echo 'selected';?>>Paid</option> 
										 
											</select>
											</div>
											
										  <p class="clearfix"></p>
											<div class="col-xs-6 id_name" id="id_name" style="display:none;">Payment Amount: <input type="number" name="payment_amount" id="payment_amount" value="<?php echo $final_amount?>" required class="form-control" step="0.01" disabled>
											</div>
										  
											<div class="col-xs-6 id_tid" id="id_tid"  style="display:none;">Payment Method: <select name="payment_method" id="payment_method"  required class="form-control"> 
											<option value="">Select</option> 
										   <option value="Cash" <?php if($payment_row->payment_method=='Cash') echo 'selected';?>>Cash</option> 
										   <option value="Card"  <?php if($payment_row->payment_method=='Card') echo 'selected';?>>Card</option>
                                            <option value="Credit" <?php if($payment_row->payment_method=='Credit') echo 'selected';?> >Credit</option>										   
											</select></div>
										
											<p class="clearfix"></p>
											 <div class="col-xs-5">
											 <input type="hidden" name="table_bookingid" id="table_bookingid" value="<?php echo $member['table_booking_id'];?>">
											<input type="submit" name="btn_payment_amount" value="Save" class="btn btn-success">
											 </div>
											</form>
							
							  <?php }
							  } 
							  
							  else if($member['member_status'] == 4) { ?>
							  <p class="clearfix"></p>
								  <div class="col-xs-12"><label>Payment Status</label> : <?php echo $payment_row->bill_status==1?'Paid':'Pending';?>
								  </div>
								  <div class="col-xs-12"><label>Payment Amount</label> : <?php echo $final_amount ?>
								  </div>
								  <div class="col-xs-12"><label>Payment Method</label> : <?php echo $payment_row->payment_method?>
								  </div>
							  <?php }
							  else {
								  echo "<br><br><h6 style='text-align:center;'>Bill not available.</h6><br>";
							  }
							  ?>                          
                        </div>
						
						
						
						<div class="tab-pane active" id="tab_default1_<?php echo $member['table_booking_id'];?>">
							<!--    <div class="col-xs-6">
									<strong><small>Status : <i><?php echo $this->config->item('member_status')[$member['member_status']];?></i></small></strong>
								</div>
								<div class="col-xs-6 text-right entry_time">
									<strong><small>Entry Time : <i><?php echo date('h:i A',strtotime($member['booking_time']));?></i></small></strong>
								</div>-->
							<p class="clearfix"><p>
                            <header class="clearfix">
								<div class="col-xs-6">
									<span class="t_guest">Total Guest : <strong><?php echo $member['no_of_guest'];?></strong></span>
								</div>
								<div class="col-xs-6">
									<span class="t_order">Total Order : <strong><?php echo count($orderData); ?></strong></span>
								</div>
								<p class="clearfix"></p>
								
								<?php if($member['member_status']==0){?>
								<div class="col-xs-12">
								    <label style="color:#cc0000;">Cancelled</label><p class="clearfix"></p>
                                    <label>Reason</label> : <?php echo $member['cancel_reason'];?>
								<div>	
								<?php } 
								
								else { ?>
								    <div class="col-xs-4">
								    <?php if($member['member_status']!=4 && $member['member_status']!=0){
										//$isBillPaid=$this->Dash_model->isBillPaid($member['table_booking_id']);
										//if(!$isBillPaid){ ?>
								     <a href="<?php echo base_url().'menu/make_order/'.$member['table_booking_id'];?>/1" class="btn btn-success add_meal"><i class="fa fa-cutlery" aria-hidden="true"></i> <span>Add meal</span></a>
									<?php } //} ?>
								
								</div>
								
                                
								
								
								<?php // if(count($orderData)==0 && $member['member_status']!=0) { ?>
								<?php if($member['member_status']!=4 && $member['member_status']!=0) { ?>
									<div class="col-xs-4">
									<a href="#" class="btn btn-success btn-xs change_table" data-toggle="modal" data-target="#changetable<?php echo $member['table_booking_id'];?>"><i class="fa fa-retweet" aria-hidden="true"></i> <span>Change Table</span></a>
									</div>
									
										<!-- Modal -->
									<div id="changetable<?php echo $member['table_booking_id'];?>" class="modal fade" role="dialog">
									  <div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
										    <form method="post" action="" class="change_table" data-parsley-validate="">
										  <div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title"><?php echo $member['member_name'];?></h4>
										  </div>
                                          <div class="modal-body">
											<div class="row">
											
												<input type="text" value="<?php echo $member['table_booking_id'];?>" name="table_booking_id" hidden>
												<div class="col-sm-4">
													<div class="form-group">
														<label>Total Guest</label>
														<input type="number" name="total_guest" class="form-control numeric" placeholder="Total number of guest" value="<?php echo $member['no_of_guest'] ?>" required min="1">
													</div>
												</div>
												<div class="col-sm-4">
							<div class="form-group">
								<label>Special Comment</label>
								<input type="text" name="guest_comment" class="form-control numeric" placeholder="Comment" value="<?php echo $member['guest_comment'] ?>">
							</div>
						</div>
												<div class="col-sm-4">
													<div class="form-group">
														<label>Available Tables</label><br>
														<select class="multiselect-tbl avalTable" name="table_number[]" required  multiple>
														<!--	<option value="">select</option>-->
															<?php
															$currentTableCheckedIds=explode(',',$member['table_ids']);
															$currentTableCheckedNames=explode(',',$member['table_name']);
															$x=0;
															foreach($currentTableCheckedIds as $currentTableCheckedId)
															{
																echo '<option value="'.$currentTableCheckedId.'" selected>'.$currentTableCheckedNames[$x].'</option>';
																$x++;
															}
															foreach($availableTables as $available) { 
															if(($available['table_status']==0 && $available['Advance_booking_status']==0) || $available['table_name']=='Parcel')
															{?>
															<option value="<?php echo $available['id'];?>"><?php echo $available['table_name'];?></option>
															<?php }} ?>
														</select>
													</div>
												</div>
											</div>
										  </div>
										  <div class="modal-footer">
											<button type="submit" name="changebooking" class="btn btn-success">Save</button>
										  </div>
										  </form>
										</div>

									  </div>
									</div>
									
								<?php } } ?>
								
								<?php if(count($orderData)>0) { ?>
                                    <div class="col-xs-8 text-right">
                                    <br>
								     <strong>Order:</strong> <?php echo date('h:i A',strtotime($orderData[0]['order_time'])); ?>
                                     </div>
								<?php } else { ?> <div class="col-xs-4"> <?php  if($member['table_status']==1 && $member['member_status']!=0){ ?>
								<a href="<?php echo base_url().'dashboard/cancel_order/'.$member['table_booking_id'] ?>" class="btn btn-danger btn-xs cancel-booking"><i class="fa fa-close" aria-hidden="true"></i> <span>Cancel Booking</span></a>
								<?php } ?>  </div> <?php } ?>
								

                            </header>
						    <div class="current_view clearfix">
								  
								   <div class="table-responsive">
										<table class="table table-bordered">
										   <thead>
											<tr>
												<th>Name</th>
												<th>Total Meals</th>
											</tr>
											</thead>
											<tbody><?php $seat=1; ?>
												<tr>
													<td><strong><?php echo $member['member_name'] ?></strong></td>
													<td><?php foreach($orderData as $order) {
														if($order['guest_seat_no']==$seat){echo $order['quantity'];
														?>-
													<small><?php echo $order['meal_name'].', ' ?></small>
													<?php }} $seat++;?>
													</td>
												</tr>
												
												<?php while($seat <= $member['no_of_guest']){ ?>
												<tr>
													<td><strong>Guest <?php echo $seat;?></strong></td>
													<td><?php foreach($orderData as $order) {
														if($order['guest_seat_no']==$seat){echo $order['quantity'];
														?>-
													<small><?php echo $order['meal_name'].', ' ?></small>
														<?php }}?>
													</td>
												</tr>
												<?php $seat++;}?>
												<?php if(!empty($member['guest_comment'])) { ?>
												<tr>
												<td colspan="2" style="text-align:left;"><strong>(<?php echo $member['guest_comment'] ?>)</strong></td>
		
												</tr>
												<?php } ?>
												
											</tbody>
										</table>
									</div>
							</div>
									  
						</div>
                        <div class="tab-pane" id="tab_default2_<?php echo $member['table_booking_id'];?>">
						    <div class="about_user_desc">
								<h5>Member ID : <?php echo $member['membership_id'];?></h5>
									<div class="row">
                                    	<div class="col-sm-6">
                                        		<div class="fav_meal df_abu">
                                                		<h5>Favourite Meal</h5>
                                                        <?php $meals= $this->Dash_model->fevourite_meal($member['member_id']);
														if(count($meals)>0){
														?>
                                                        <ul class="list-unstyled fave_meal_list">
														<?php foreach($meals as $meal){
                                                        echo "<li>".$meal['meal_name']."</li>";
														}
														?>
                                                        	
                                                        </ul>
														<?php } else{ echo "<p>Record not Found!</p>";} ?>
                                                       
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                        		<div class="fav_meal df_abu">
                                                		<h5>Preferences</h5>
                                                        <?php $meals= $this->Dash_model->preferences($member['member_id']);
														if(count($meals)>0){
														?>
                                                        <ul class="list-unstyled">
														<?php foreach($meals as $meal){
                                                        echo "<li>".$meal['menu_name']."</li>";
														}
														?>
                                                        	
                                                        </ul>
														<?php } else{ echo "<p>Record not Found!</p>";} ?>
                                                    <!--    <div class="add_more_btn">
                                                        	<span><i class="fa fa-plus"></i></span>
                                                        </div>-->
                                                </div>
                                        </div>
										
										<p class="clearfix"></p>
                                        
										<div class="col-sm-6">
                                        		<div class="fav_meal df_abu">
                                                		
                                                       
													   <h5>Last Order</h5>
														<?php $meals= $this->Dash_model->last_meal($member['member_id']);
														if(count($meals)>0){
														?>
                                                        <ul class="list-unstyled">
														<?php foreach($meals as $meal){
                                                        echo "<li>".$meal['meal_name']."</li>";
														}
														?>
                                                        	
                                                        </ul>
														<?php } else{ echo "<p>Record not Found!</p>";} ?>
                                                </div>
                                        </div>
										<div class="col-sm-6">
                                        		<div class="fav_meal df_abu">
                                                		<h5>Table Preferred</h5>
														<?php $preferedTable= $this->Dash_model->table_prefered($member['member_id']);
														if(count($preferedTable)>0){
														?>
                                                        <ul class="list-unstyled">
														<?php foreach($preferedTable as $pt){
                                                        echo "<li>".$pt['table_name']."</li>";
														}
														?>
                                                        	
                                                        </ul>
														<?php } else{ echo "<p>Record not Found!</p>";} ?>
                                                    <!--    <div class="add_more_btn">
                                                        	<span><i class="fa fa-plus"></i></span>
                                                        </div>-->
                                                </div>
                                        </div>
										<p class="clearfix"></p>
                                        
										<div class="col-sm-6">
                                        		<div class="fav_meal df_abu">
														
													<h5>Last Bill</h5>
                                                        <?php $last_bill= $this->Dash_model->last_bill($member['member_id']);//print_r($last_bill);
														if($last_bill!=null){
														?>
                                                        <ul class="list-unstyled">
														<?php
                                                        echo "<li>Sub Total: ".$last_bill->amount."</li>"."<li>Discount: ".$last_bill->discount."</li>".
														"<li>Total ".($last_bill->amount-$last_bill->discount)."</li>"."<li>Tax ".$last_bill->tax."</li>"."<li>Gross Total: ".$last_bill->final_amount."</li>";
													
														?>
                                                        	
                                                        </ul>
														<?php } else{ echo "<p>Record not Found!</p>";} ?>	
														
                                                </div>
                                        </div>
										<div class="col-sm-6">
                                        		<div class="fav_meal df_abu">
                                                		<h5>Average Billing</h5>
                                                        <?php $average_billing= $this->Dash_model->average_billing($member['member_id']);
														if($average_billing!=null && $average_billing->attended > 0){
														?>
                                                        <ul class="list-unstyled">
														<?php
                                                        echo "<li>".floor($average_billing->total_bill/$average_billing->attended)."</li>";
													
														?>
                                                        	
                                                        </ul>
														<?php } else{ echo "<p>Record not Found!</p>";} ?>
														
														
                                                </div>
                                        </div>
                                	</div>
                            </div>
						</div>
						
						<div class="tab-pane" id="tab_default3_<?php echo $member['table_booking_id'];?>">
						    <div class="about_user_desc">
                                <?php 
									   $order_status=$this->Dash_model->get_order_data($member['table_booking_id']);
					                   $no_of_delay=$this->Dash_model->no_of_dalay_order($member['table_booking_id']);
		                               
		                        ?>
							       <?php if(count($order_status)>0){?>
								   <div class="table-responsive chef_table">								   
								   <table class="table table-striped">
										<tbody>
										<tr><td>Remark: </td><td colspan="5"><p class="ft-12" style="margin:0;"><?php echo $member['remark']?></p> </td></tr>
										<?php 
										$gredient_array=$this->config->item('ingredients');
										foreach($order_status as $order) {
											
											?>
											
											
											<tr id="order-no-<?php echo $order['table_order_id']?>" data-order="<?php echo $order['table_order_id'] ?>" data-ordertime="<?php echo strtotime($order['order_time']) ?>" data-preparetime="<?php echo $order['meal_prepration_time'] ?>" data-quantity="<?php echo $order['quantity']?>">
												<td><img src="<?php echo empty($order['meal_image'])?base_url().'assets/img/unavailable.jpg':base_url().$order['meal_image']?>" class="img-responsive"/><?php echo $order['meal_name'];?></td>
												<td><?php echo $order['quantity']?></td>
												<td><i class="ft-11 black-txt">
												<?php 
											  $gredients = $order['gredients'];
                                              $gredients=!empty($gredients)?explode(',',$gredients):array();
												// echo $gredients; 
												if($gredients){
												foreach($gredients as $grad){
													echo $gredient_array[$grad].', ';
												}}
												?></i></td>
												
												<?php 
												if($order['order_status']==0){continue;
												 ?>
												<!--	<td class="queued"><a href="" class="start-processing"><i class="fa fa-play fa-lg" aria-hidden="true"></i> Start</a></td>
													<td><div class="checkbox"><label><input type="checkbox" disabled> Completed</label></div></td>-->
												<?php } 
												else if($order['order_status']==1) {?>
												<td  class="complete"><span>Completed</span><br><span><?php echo date('h:i A',strtotime($order['completed_time'])); ?><span></td>
													
												<?php } 
												else if($order['order_status']==2){?>
												<td  class="incomplete">
												<span class="timer"></span>
												</a></td>
												
										       <?php } else if($order['order_status']==3){ ?>
                                                <td  class="time_over">
												<span class="">Cancelled</span><br><span><?php echo date('h:i A',strtotime($order['cancel_time'])); ?>
												</a></td>
                                                <?php } ?>
												
												<td><span class="comment_vew"><small class="msg_count"></small><i class="fa fa-envelope"></i></span>
													<div class="comment_view_box"></div>	
												</td>
												
											</tr>
											<tr><td>Comment: </td><td colspan="5"><p class="ft-12" style="margin:0;"><?php echo $order['comment']?></p> </td></tr>
										<?php } ?>
											
										</tbody>
								   </table>     
								   </div>  
								   <?php }else echo "<br><br><h6 style='text-align:center;'>Add order to Start.</h6><br>";
								   
								   ?>	
                            </div>
						</div>
						<div class="tab-pane" id="tab_default4_<?php echo $member['table_booking_id'];?>">
						    <div class="about_user_desc">
							    <?php 
                                /*
								if($member['member_status'] == 1){echo "<br><br><h6 style='text-align:center;'>Please add order first.</h6><br>";}
								 else if($member['member_status'] == 2){echo "<br><br><h6 style='text-align:center;'>Please wait till order are completed.</h6><br>";}
								else if($number_of_bills_required>0 && ($number_of_bills_required!=$check_bill_status->generated_bills || $check_bill_status->no_of_unpaid>0))
								{
									echo "<br><br><h6 style='text-align:center;'>Please pay your bills.</h6><br>";
								}   
                                else {*/
								if($feedback !=null) { 
								if($feedback->cancel_reason=='') { 
								?>
								<p class="clearfix"></p>
								<div class="pull-right">
								         <?php $overallExp = !empty($feedback->feedback_text_10)?$feedback->feedback_text_10:'Overall Club Experience';
								          if(isset($feedback->feedback_10)){
									       echo $overallExp.'&nbsp; &nbsp;<img class="'.$ratingArr[$feedback->feedback_10].'"/>';
									       } ?>
								</div>		   
								<p class="clearfix"></p><p class="clearfix"></p>
								
								
								<div class="table-responsive">
								
                                 <table class="table">
								    <tr><td><b>Feedback</b></td><!--<td><b>Suggestion</b></td>--><td><b>Rating</b></td></tr>
									
									<tr>
									<td><?php echo !empty($feedback->feedback_text_1)?$feedback->feedback_text_1:'Food Quality and Taste';?></td>
								<!--	<td><?php echo !empty($feedback->text_feed_1)?$feedback->text_feed_1:'';?></td>-->
									<td><?php echo isset($feedback->feedback_1)?$feedback->feedback_1:'';?></td>
									</tr>
									
									<tr>
									<td><?php echo !empty($feedback->feedback_text_2)?$feedback->feedback_text_2:'Food Presentation';?></td>
								<!--	 <td><?php echo !empty($feedback->text_feed_2)?$feedback->text_feed_2:'';?></td>-->
									<td><?php echo isset($feedback->feedback_2)?$feedback->feedback_2:'';?></td>
									</tr>
									
									<tr><td><?php echo !empty($feedback->feedback_text_3)?$feedback->feedback_text_3:'Serving Time';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_3)?$feedback->text_feed_3:'';?></td>-->
									<td><?php echo isset($feedback->feedback_3)?$feedback->feedback_3:'';?></td>
									</tr>
									
									<tr><td><?php echo !empty($feedback->feedback_text_4)?$feedback->feedback_text_4:'Variety in Menu';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_4)?$feedback->text_feed_4:'';?></td>-->
									<td><?php echo isset($feedback->feedback_4)?$feedback->feedback_4:'';?></td></tr>
									
									<tr><td><?php echo !empty($feedback->feedback_text_5)?$feedback->feedback_text_5:'Reception';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_5)?$feedback->text_feed_5:'';?></td>-->
									<td><?php echo isset($feedback->feedback_5)?$feedback->feedback_5:'';?></td></tr>
									
									<tr><td><?php echo !empty($feedback->feedback_text_6)?$feedback->feedback_text_6:'Staff Responsiveness';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_6)?$feedback->text_feed_6:'';?></td>-->
									<td><?php echo isset($feedback->feedback_6)?$feedback->feedback_6:'';?></td></tr>
									
									<tr><td><?php echo !empty($feedback->feedback_text_7)?$feedback->feedback_text_7:'Ambience';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_7)?$feedback->text_feed_7:'';?></td>-->
									<td><?php echo isset($feedback->feedback_7)?$feedback->feedback_7:'';?></td></tr>
									
									<tr><td><?php echo !empty($feedback->feedback_text_8)?$feedback->feedback_text_8:'Cleanliness';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_8)?$feedback->text_feed_8:'';?></td>-->
									<td><?php echo isset($feedback->feedback_8)?$feedback->feedback_8:'';?></td></tr>
									
									<tr><td><?php echo !empty($feedback->feedback_text_9)?$feedback->feedback_text_9:'Steward\'s Communication';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_9)?$feedback->text_feed_9:'';?></td>-->
									<td><?php echo isset($feedback->feedback_9)?$feedback->feedback_9:'';?></td></tr>
									
								    <tr><td><?php echo !empty($feedback->feedback_text_10)?$feedback->feedback_text_1:'Overall Club Experience';?></td>
									<!--<td><?php echo !empty($feedback->text_feed_10)?$feedback->text_feed_10:'';?></td>-->
									<td><?php echo isset($feedback->feedback_10)?$feedback->feedback_10:'';?></td></tr>
								 </table>
								 </div>
								<?php } else if($feedback->cancel_reason!='')  {
								echo "<br><p>Client didn't given the feedback :<br><br><b>Client Comment</b> : ".$feedback->cancel_reason."</p><br>"	;
								} } else { echo "<br><br><h6 style='text-align:center;'>Feedback not available</h6><br>";
								}
								//} 
								?>
                            </div>
						</div>
						<div class="tab-pane" id="tab_default5_<?php echo $member['table_booking_id'];?>">
						    <div class="about_user_desc">
                                
                            </div>
						</div>
						
						<div class="tab-pane" id="tab_default7_<?php echo $member['table_booking_id'];?>">
						    <div class="about_user_desc">
                            
                            </div>
						</div>
					    
				    </div>
				    </div>
			    </div>
				
            </div>
		</div>
		</div>
			
		<?php } ?>
           </div>
        </div>
            
        </section>
		
        </div>
		
</div>
<div id="modal-container"></div>
</div>
	<!-- Modal -->
			<div id="add_new_member" class="modal fade" role="dialog">
			  <div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
				<form method="post" action="" class="add_new_member" data-parsley-validate="">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Add Member</h4>
				  </div>
				  <div class="modal-body">
					<div class="row">
						<div class="col-sm-4">
							<div class="form-group">
								<label>Member Name</label>
								<input type="text" name="member_name" class="form-control member_name" placeholder="Member Name" required>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Phone Number</label>
								<input type="tel" name="phone_number" class="form-control phone_number" placeholder="Phone Number" required>
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label>Email ID</label>
								<input type="email" name="email_id" class="form-control" placeholder="Email Id">
							</div>
						</div>
					</div>
					<div class="row">
					
						<div class="col-sm-4">
							<div class="form-group">
								<label>Total Guest</label>
								<input type="number" name="total_guest" class="form-control numeric" placeholder="Total number of guest" min="1">
							</div>
						</div>
						<div class="col-sm-4">
							<div class="form-group">
								<label>Special Comment</label>
								<input type="text" name="guest_comment" class="form-control numeric" placeholder="Comment">
							</div>
						</div>
						
						<div class="col-sm-4">
							<div class="form-group">
								<label>Available Tables</label><br>
								<select class="multiselect-tbl avalTable" name="table_number[]" multiple>
								<!--	<option value="">select</option>-->
									<?php foreach($availableTables as $available) { 
									if(($available['table_status']==0 && $available['Advance_booking_status']==0) ||  $available['table_name']=='Parcel')
									{?>
									<option value="<?php echo $available['id'];?>"><?php echo $available['table_name'];?></option>
	                                <?php }} ?>
								</select>
							</div>
						</div>
					</div>
				  </div>
				  <div class="modal-footer">
					<button type="submit" name="add_new_member" class="btn btn-success">Save</button>
				  </div>
				  </form>
				</div>

			  </div>
			</div>	