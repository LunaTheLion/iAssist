<?php foreach ($view as $row):?>
<div class="card border-success  p-2 mb-3" style="margin-right: 150px; ">
				 <h4><?php echo "$50"?>Premium</h4>					
				 <a class="btn btn-success" href="<?php echo base_url()?>search/buy_project/<?php echo $row->project_title_slug.$row->id?>">Purchase</a>
					  
			</div>	
			<div class="card border-success  p-2 mb-3 " style="margin-right: 150px; ">
				 <h4><?php echo "$40"?>Standard</h4>
					<a class="btn btn-success" href="<?php echo base_url()?>search/buy_project/<?php echo $row->project_title_slug.$row->id?>">Purchase</a>
					  
			</div>
			<div class="card border-success  p-2 mb-3" style="margin-right: 150px;">
				 <h4><?php echo "$30"?>Basic</h4>
					<a class="btn btn-success" href="<?php echo base_url()?>search/buy_project/<?php echo $row->project_title_slug.$row->id?>">Purchase</a>
					  
			</div>
<?php endforeach ?>