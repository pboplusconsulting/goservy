<div id="content_block">
<div class="row">
		<div class="col-md-8 col-sm-12 col-xs-12 manage_pad">
		<?php 
		//echo "<pre>";print_r($tableStatus);echo "</pre>";
			$book_table_ids=array();//array of booked tables
			$no_of_orders=array();
			$complete_orders=array();
			$cancel_orders=array();
			$unread_order_notification=array();
			$i=1;$j=1;$k=1;$c=1;
		foreach($tableStatus as $ts){
			$booking_id = $ts['booking_id'];
			if($ts['booking_status']==1)
			{
			   $book_table_ids[]=$ts['id'];
			} 

			if($ts['no_of_orders']!=null&&$booking_id!=null)
            {
				$no_of_orders[$i++]=$this->Bar_tendor_model->total_orders($booking_id);
				
				
			}
			else
			{
				$no_of_orders[$i++]=0;
			}
            if($ts['complete_orders']!=null&&$booking_id!=null)
            {
				$complete_orders[$j++]=$this->Bar_tendor_model->no_of_complete_order($booking_id);
			}	
			else
			{
				$complete_orders[$j++]=0;
			}

            if($ts['cancel_orders']!=null&&$booking_id!=null)
            {
				$cancel_orders[$c++]=$this->Bar_tendor_model->no_of_cancel_order($booking_id);
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
		}//print_r($book_table_ids); 
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
            	<h4 class="chef_screen">Bartender - Today's Member</h4>
            <!--    <div id="custom-search-input">
                    <div class="input-group col-md-12">
                    <input type="text" name="search_member_chef" class="form-control input-lg" placeholder="Search Members.." />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                    </div>
                </div>-->
            
            <div id="start_lsiting">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<?php //echo '<pre>';
                //print_r($data);
				?>
				<?php $in=0;
				foreach($data as $member){
			        $orderData=$this->Bar_tendor_model->get_order_data($member['table_booking_id']);//echo "<pre>";print_r($orderData);echo "</pre>";continue;
					$no_of_delay=$this->Bar_tendor_model->no_of_dalay_order($member['table_booking_id']);
					$no_of_complete=$this->Bar_tendor_model->no_of_complete_order($member['table_booking_id']);
	                $no_of_cancel=$this->Bar_tendor_model->no_of_cancel_order($member['table_booking_id']);
					$no_of_unread=$this->Bar_tendor_model->no_of_unread_oreder($member['table_booking_id']);
					$total_orders=$this->Bar_tendor_model->total_orders($member['table_booking_id']);
					$last_order_time=$this->Bar_tendor_model->get_last_order_time($member['table_booking_id']);
					//print_r($total_orders);
					//echo $last_order_time[0]->order_time;
					
					$feedback=$this->Bar_tendor_model->get_by_query_return_row("SELECT * FROM ru_feedback WHERE table_booking_id=".$member['table_booking_id']." AND status=1");
					
					if($member['member_status']==0 || $member['member_status']==4){$tiles_color="#f8be5d"; } //Table relevied
					//elseif($feedback != null) { $tiles_color="#f8be5d"; } //Table relevied
					else if($no_of_delay > 0){  $tiles_color="#d9534f"; } //Order Delayed 
					else if(count($orderData)>0 && count($orderData)==($no_of_complete+$no_of_cancel)){$tiles_color="#5cb85c";} //Order Served
					else if(count($orderData)==0){ $tiles_color="#FF5500";} //Table Booked
					else { $tiles_color="#d9534f"; } //Order panding
					if($total_orders>0){
			    ?>
					<div class="panel panel-default">
						<div class="panel-heading <?php echo $no_of_delay>0?'inside_guest_delay':'inside_guest'?> <?php echo (count($orderData)==($no_of_complete+$no_of_cancel)?'completed_all':''); ?> <?php echo $no_of_unread > 0?'new_label':'';?>" style="background:<?php echo $tiles_color; ?>" role="tab" id="heading<?php echo $member['table_booking_id'] ?>" data-id="<?php echo $member['table_booking_id'] ?>">
							<h4 class="panel-title">
							   <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $member['table_booking_id'] ?>" aria-expanded="false" aria-controls="collapse<?php echo $member['table_booking_id'] ?>" class="member-order-today" data-id="<?php echo $member['table_booking_id'] ?>">
							   
							   <img src="<?php echo base_url();?>assets/img/user_pic.png" class="img-circle" alt="username" width="30" /> <?php echo strlen($member['member_name'])>8?ucfirst(substr($member['member_name'],0,8)).'..':ucfirst($member['member_name']); ?>
							   <span class="badge"><?php echo $no_of_complete.'<i class="divider"></i>'.($total_orders); ?></span>
							   
			                   <span class="table_num">
                               <?php 
							   $tbl=explode(',',$member['table_name']);
							   if(count($tbl)>0) { foreach($tbl as $key=>$value) { ?>
                               <strong><?php echo $value?></strong>
                               <?php } }?>
                              </span>
							   </a>
							   <span class="mini-about ft-10">
								<b>Order: <i><?php echo date('h:i A',strtotime($orderData[0]['order_time']));?></i></b>
								<?php if($member['member_status']==4 && $member['table_status']==0) { 
								       echo '<br><b><i>Table Relieved</i></b>';
								} else if($no_of_delay > 0){ ?>
								<br><b><i><?php echo 'Order Delayed';?></i></b><br><b><i><?php echo $no_of_delay.' dish delayed';?></i></b>
								<?php }else if(count($orderData)>0 && count($orderData)==($no_of_complete+$no_of_cancel)){ echo '<br><b><i>Order Served</i></b>'; 
								} else if(count($orderData)==0){ echo '<br><b><i>Table Booked</i></b>';
								} else { echo '<br><b><i>Order Pending</i></b>'; } ?>
								</span>
							</h4>

						</div>
					   
						<div id="collapse<?php echo $member['table_booking_id'] ?>" class="panel-collapse collapse inside_guest <?php //echo $in++==0?'in':''?>" role="tabpane<?php echo $member['table_booking_id'] ?>" aria-labelledby="heading<?php echo $member['table_booking_id'] ?>">
							<div class="panel-body">
							    <!--    <div class="row">
							        <div class="col-xs-6">
									<?php 
									
									if($no_of_delay > 0){ ?>
                            	        <strong><small style="color:#d9534f;"><?php echo $no_of_delay.' dish is delayed';?></small></strong>
				                    <?php } ?>	
                                    </div>
									<div class="col-xs-6 text-right entry_time">
										<strong><small>Entry Time : <i><?php echo date('h:i A',strtotime($member['booking_time'])) ?></i></small></strong>
									</div>
									</div>-->
									<?php if(count($orderData)>0){?>
									<form method="post" action="">
								   <div class="table-responsive chef_table"> 								   
								   <table class="table table-striped">
										<tbody>
										
										<?php $uncompleteCount=0; 
										$gredient_array=$this->config->item('ingredients');
										foreach($orderData as $order){
											   if($order['order_status']==2){$uncompleteCount++;}
											?>
											
											
											<tr id="order-no-<?php echo $order['table_order_id']?>" data-order="<?php echo $order['table_order_id'] ?>" data-ordertime="<?php echo strtotime($order['order_time']) ?>" data-preparetime="<?php echo $order['meal_prepration_time'] ?>" data-quantity="<?php echo $order['quantity']?>">
												<td><img src="<?php echo empty($order['meal_image'])?base_url().'assets/img/unavailable.jpg':base_url().$order['meal_image']?>" class="img-responsive"/><?php echo $order['meal_name'];?></td>
												<td><span class="quant_hai"><?php echo $order['quantity']?></span><i class="ft-11 black-txt">
												<?php 
											  $gredients = $order['gredients'];
                                              $gredients=!empty($gredients)?explode(',',$gredients):array();
												//echo $gredients; 
												if($gredients){
												foreach($gredients as $grad){
													echo $gredient_array[$grad].', ';
												}}
												?></i></td>
												<?php 
												
												//echo '<br>aaa-->'.$order['order_status'];
												if($order['order_status']==0){continue;
												 ?>
												<!--	<td class="queued"><a href="" class="start-processing"><i class="fa fa-play fa-lg" aria-hidden="true"></i> Start</a></td>
													<td><div class="checkbox"><label><input type="checkbox" disabled> Completed</label></div></td>-->
												<?php } 
												else if($order['order_status']==1) {?>
												<td  class="complete"><span>Completed</span><br><span><?php echo date('h:i A',strtotime($order['completed_time'])); ?><span></td>
												<td></td>
												<?php } 
												else if($order['order_status']==2) { ?>
                                                <td  class="incomplete">
												<span class="timer"></span>
												</a></td>
												<td colspan="2" style="vertical-align:middle;">
                                                <div class="check-top">
                                                <div class="checkbox"><label><input type="checkbox" name="tableorder[]" value="<?php echo $order['table_order_id'];?>" class="check_comp"></label></div>
                                                </div>
                                                <div class="status-check">
                                                <span class="comment_btn"><i class="fa fa-pencil fa-lg"></i></span>
													<div class="com_box">
													<div class="input-group">
													    <textarea name="comment" class="form-control" placeholder="Message to Steward..."></textarea>
													    <span class="input-group-btn">
														<button class="btn btn-default order_comment" type="button">Ok!</button>
													  </span>
													</div>
													</div>
                                                    
                                                     <span class="cancel_btn">
                                                     <i class="fa fa-trash fa-lg" style="color:#333 !important" aria-hidden="true"></i>
                                                     </span>
                                                     <div class="cancel_box">
													<div class="input-group">
													    <textarea name="comment" id="cancelreason" class="form-control" placeholder="Cancel Reason"></textarea>
													    <span class="input-group-btn">
														<button class="btn btn-default order_cancel" type="button">Ok!</button>
													  </span>
													</div>
													</div>
												</div>	
                                                </td>
												
												    <?php } 
												else if($order['order_status']==3){ ?>
                                                <td  class="time_over">
												<span class="">Cancelled</span><br><span><?php echo date('h:i A',strtotime($order['cancel_time'])); ?>
												</a></td>
												<td></td>
                                                <?php } ?>												
												
											</tr>
											<tr><td>Comment: </td><td colspan="5"><p class="ft-12" style="margin:0;"><?php echo $order['comment']?></p> </td></tr>
										<?php } ?>	
										<tr><td>Remark: </td><td colspan="5"><p class="ft-12" style="margin:0;"><?php echo $member['remark']?></p> </td></tr>
										</tbody>
								   </table>    
								   </div>  
										<?php if($uncompleteCount>0){ ?>
                                   <div class="err_msg" style="color:red"></div> 
									   <div class="text-right">
										<button type="submit" name="complete_order_status" class="btn btn-ru complete_proceed">Proceed</button>
									   </div> 
										<?php }?>
								   </form>
									<?php }?>		
							</div>
						</div>
				    </div>
				<?php  } } ?>
		        </div>
            </div>
            
</section>
</div>
</div>

</div>