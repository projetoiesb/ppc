<h3>Matriz Curricular</h3>

<?php echo validation_errors(); ?>

<?php echo form_open('matrizes/edit/'.$matriz_item[0]['curso_id']); ?>

    <h3>Curso: <?php echo $curso_item[0]['curso_name']; ?></h3>


              <?php foreach($discip_list as $item): ?>

                  <?php if(in_array($item['discip_id'], $discip_item)) { ?>
                           <input type="checkbox" name="<?php echo $item['discip_name']; ?>" value="<?php echo $item['discip_id']; ?>" checked><?php echo $item['discip_name']; ?><br>
                    <?php } else { ?>
                           <input type="checkbox" name="<?php echo $item['discip_name']; ?>" value="<?php echo $item['discip_id']; ?>"><?php echo $item['discip_name']; ?><br>
                    <?php } ?>
              <?php endforeach; ?> 
    <input type="submit" name="submit" value="Atualizar item" />

</form>
