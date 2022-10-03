<?php include 'header_2.php' ?>

<?php
$db = "shop_01";
$connect = mysqli_connect('localhost', 'root', '', $db);;
mysqli_set_charset($connect, 'utf8');
$get_info = "SELECT full_name, role, picture, user_information FROM user WHERE org_pas = '".$_SESSION['org_pas']."'";
$profile_info = mysqli_query($connect, $get_info);
if(mysqli_num_fields($profile_info) > 0){
    $user_info = mysqli_fetch_array($profile_info);
    #echo $user_info[0];
}else{
    $user_info = 0;
}

?>
    
        <div class="col">
            <div class="container_2">
                      <div class="row">
                            <div class="pick_prof">
                                <div class="img-container">
                                <img class ="prod-img" src="../picture/dir.jpg">
                                </div>
                                <label for="fullname">(Аватар)</label>
                            </div>
                            

                              <div class="row">
                                    <div class="inf_prof">
                                        <input type="varchar" name="name" class="add-frame" value="<?php echo $user_info[0]; ?>" placeholder="  ФИО..." required="required">
                                    </div>
                                    <div class="head-inf_prof">
                                        <label for="org_pas">ФИО</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="inf_prof">
                                        <input type="varchar" name="role" class="add-frame" value="<?php echo $user_info[1]; ?>" placeholder="Должность..." required="required">
                                    </div>
                                    <div class="head-inf_prof">
                                        <label for="points">Должность</label>
                                    </div>
                              </div>
                              <div class="row">
                                    <div class="inf_prof">
                                        <input type="varchar" name="inform" class="add-frame" value="<?php echo $user_info[3]; ?>" placeholder="О себе...">
                                    </div>
                                    <div class="head-inf_prof">
                                        <label for="user_inf">Биоргафия</label>
                                    </div>
                              </div>

                      </div>

                      
                      <div class="add-button">                          
                            <a href="change_prof.php" class="knopka">Изменить</a>
                      </div>
            </div>
        </div>
    </main>     
        

<?php include 'footer.php' ?>