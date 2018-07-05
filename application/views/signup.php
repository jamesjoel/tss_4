
   <style type="text/css">
   	.error_msg{
   		color: red !important;
   		
   	}
   </style>
</div> <!-- end of header -->

<div id="tooplate_main">
	<div class="col_12">
    	<div class="title_with_icon"><h3>Signup Page</h3></div>
        <div class="cleaner h10"></div>
        <div id="contact_form">
        	<?php
        	// echo validation_errors();
        	?>
        <form action="" method="post">

        	<table>
        		<tr>
        			<td>Full Name</td>
        			<td><input type="text" value="<?php echo set_value('full_name');?>" name="full_name" class="input_field" /><br />
        				<span class="error_msg"><?php echo form_error('full_name');?></span>
        			</td>
        		</tr>
        		<tr>
        			<td>Username</td>
        			<td><input type="text" value="<?php echo set_value('username');?>" name="username" class="input_field"/><br />
        				<span class="error_msg"><?php echo form_error('username');?></span>
        			</td>
        		</tr>
        		<tr>
        			<td>Password</td>
        			<td><input type="password" value="<?php echo set_value('pass');?>" name="pass" class="input_field"/><br />
        				<span class="error_msg"><?php echo form_error('pass');?></span></td>
        		</tr>
        		<tr>
        			<td>Re-Password</td>
        			<td><input type="password" value="<?php echo set_value('re_pass');?>" name="re_pass" class="input_field"/><br />
        				<span class="error_msg"><?php echo form_error('re_pass');?></span>
        			</td>
        		</tr>
        		<tr>
        			<td>Address</td>
        			<td><textarea name="add"><?php echo set_value('add'); ?></textarea>
        				<Br />
        				<span class="error_msg"><?php echo form_error('add'); ?></span>
        			</td>
        		</tr>
        		<tr>
        			<td>City</td>
        			<td><select class="input_field" name="city">
        				<option value="">Select</option>
        				<option value="indore" <?php echo set_select('city', 'indore'); ?>>Indore</option>
        				<option value="ujjain" <?php echo set_select('city', 'ujjain'); ?>>Ujjain</option>
        				<option value="bhopal" <?php echo set_select('city', 'bhopal'); ?>>Bhopal</option>
        			</select>
        			<br />
        			<span class="error_msg"><?php echo form_error('city'); ?></span>
        		</td>
        		</tr>
        		<tr>
        			<td>Gender</td>
        			<td>
        				Male<input type="radio" <?php echo set_radio('gender', 'male') ?> value="male" name="gender" />
        				Female<input type="radio" <?php echo set_radio('gender', 'female') ?> value="female" name="gender" />
        			<br />
        			<span class="error_msg"><?php echo form_error('gender'); ?></span>
        			
        			</td>
        		</tr>
        		<tr>
        			<td>Contact</td>
        			<td><input type="text" name="contact" value="<?php echo set_value('contact');?>" class="input_field"/><br />
        				<span class="error_msg"><?php echo form_error('contact'); ?></span>
        			</td>
        		</tr>
        		<tr>
        			<td colspan="2" align="center"><input type="submit" value="Signup" class="submit_btn" /></td>
        		</tr>
        	</table>
        </form>
    	</div>
    </div>
    
    <div class="cleaner"></div>
</div>

