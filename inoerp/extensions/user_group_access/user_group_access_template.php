<div id="form_box" class="clearfix">
 <div id ="form_header"><span class="heading">User Group Details </span>
  <div class="tabContainer">
   <ul class="column header_field">
    <li><label> Select User Group : </label>
     <?php echo $f->select_field_from_object('user_group_code', user_group_access::user_groups(), 'option_line_code', 'option_line_value', $user_group_code_h, 'user_group_code'); ?>
     <a name="show" href="form.php?class_name=user_group_access&<?php echo "mode=$mode"; ?>" class="show document_id user_group_access_id"><i class="fa fa-refresh"></i></a> 
    </li>						
    <li><label>Role Code : </label>
     <?php echo $f->text_field('user_group_code', $user_group_code_h, '', '', '', '', 1) ?>
    </li>
    <li><label>Description : </label>
     <?php echo $f->text_field('description', $user_group_code_description, '50', '', '', '', 1); ?>
    </li>
   </ul>
  </div>
 </div>

<form action=""  method="post" id="user_group"  name="user_group">
 <!--END OF FORM HEADER-->
 <div id ="form_line" class="user_group"><span class="heading">Group Access Details </span>
  <div id="tabsLine">
   <ul class="tabMain">
    <li><a href="#tabsLine-1">Organization Access </a></li>
   </ul>
   <div class="tabContainer"> 
    <div id="tabsLine-1" class="tabContent">
     <table class="form_table">
      <thead> 
       <tr>
        <th>Action</th>
        <th>Group Access Id</th>
        <th>Organization Name </th>
        <th>Access Level</th>
       </tr>
      </thead>
      <tbody class="form_data_line_tbody user_group_values" >
       <?php
       $count = 0;
       foreach ($user_group_access_object as $user_group_access) {
        ?>         
        <tr class="user_group_access<?php echo $count ?>">
         <td>  
          <?php
          echo ino_inline_action($$class->user_group_access_id, array('user_group_code' => $user_group_code_h));
          ?>
         </td>
         <td><?php form::number_field_drs('user_group_access_id') ?></td>
         <td><?php echo $f->select_field_from_object('org_id', org::find_all(), 'org_id', 'org', $$class->org_id, '', '', 1); ?></td>
         <td><?php echo $f->select_field_from_array('access_level', user_group_access::$access_map, $$class->access_level); ?></td>
        </tr>
        <?php
        $count = $count + 1;
       }
       ?>
      </tbody>
     </table>
    </div>
   </div>

  </div>
 </div> 
</form>
</div>
<div id="pagination" class="clearfix">
 <?php echo $pagination->show_pagination(); ?>
</div>

<div id="js_data">
 <ul id="js_saving_data">
  <li class="lineClassName" data-lineClassName="user_group_access" ></li>
  <li class="line_key_field" data-line_key_field="org_id" ></li>
  <li class="single_line" data-single_line="false" ></li>
  <li class="form_line_id" data-form_line_id="user_group" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docLineId" data-docLineId="user_group_access_id" ></li>
  <li class="btn2DivId" data-btn2DivId="form_line" ></li>
  <li class="trClass" data-trclass="user_group_access" ></li>
  <li class="tbodyClass" data-tbodyClass="form_data_line_tbody" ></li>
  <li class="noOfTabbs" data-noOfTabbs="1" ></li>
 </ul>
</div>