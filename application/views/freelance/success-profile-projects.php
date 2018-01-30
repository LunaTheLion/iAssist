<div class="container mt-5">
	
<h6>Service Title</h6><p class="text-primary"><?php echo $this->session->set_userdata('title')?></p>
<h6>Category</h6><p class="text-primary"><?php echo $this->session->set_userdata('category')?></p>
<h6>Sub-Category</h6><p class="text-primary"><?php echo $this->session->set_userdata('subcategory')?></p>
<h6>Service</h6><p class="text-primary"><?php echo $this->session->set_userdata('service')?></p>
<h6>Offer</h6><p class="text-primary"><?php echo $this->session->set_userdata('offer')?></p>
<h6>Delivery</h6><p class="text-primary"><?php echo $this->session->set_userdata('delivery')?></p>
<h6>Description</h6><p class="text-primary"><?php echo $this->session->set_userdata('description')?></p>
<h6>Requirements</h6><p class="text-primary"><?php echo $this->session->set_userdata('requirements')?></p>

<img src="<?php echo $img;?>" width="300" height="300">
<p><?php echo anchor('upload', 'Upload Another File!'); ?></p>	




</div>