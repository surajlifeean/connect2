
 <div class="row">
        <div class="col-xs-12 pull-right col-sm-12 col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading c-list">
                    <span class="title">Connect</span>
                    <ul class="pull-right c-controls">
                        <li><a href="#cant-do-all-the-work-for-you" data-toggle="tooltip" data-placement="top" title="Add Contact"><i class="glyphicon glyphicon-plus"></i></a></li>
                        <li><a href="#" class="hide-search" data-command="toggle-search" data-toggle="tooltip" data-placement="top" title="Toggle Search"><i class="fa fa-ellipsis-v"></i></a></li>
                    </ul>
                </div>
                
                <div class="row" style="display: none;">
                    <div class="col-xs-12">
                        <div class="input-group c-search">
                            <input type="text" class="form-control" id="contact-list-search">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search text-muted"></span></button>
                            </span>
                        </div>
                    </div>
                </div>
                
                <ul class="list-group" id="contact-list">
                    
<?php
                    foreach($allusers as $user){
?>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://localhost/connect2/images/<?php echo $user['profilepic'] ?>" alt="Scott Stevens" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                           
                            <span class="name"><?php echo $user['name']  ?></span><br/>
                            
                            <a href="http://localhost/connect2/sendrequest.php?id=<?php echo $user['id'] ?>">
                            <span class="glyphicon glyphicon-send text-muted c-info" data-toggle="tooltip" title="Send Friend Request"></span>
                            </a>
                            <span class="visible-xs"> <span class="text-muted">5842 Hillcrest Rd</span><br/></span>

                        <?php    if($user['gender']=='girl'){
?>
                            <span class="fa fa-female text-muted c-info" data-toggle="tooltip" title=She></span>
<?php                            }

                            else{

      ?>
                              <span class="fa fa-male text-muted c-info" data-toggle="tooltip" title="He"></span>

      <?php                      }  ?>
                            <span class="visible-xs"> <span class="text-muted">(870) 288-4149</span><br/></span>

                          <a href="http://localhost/connect2/chat.php?id=<?php echo $user['id'] ?>">
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="Send Friend Request"></span>
                            </a>
                            
                            <span class="visible-xs"> <span class="text-muted">scott.stevens@example.com</span><br/></span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
<?php
                    }
?>
                </ul>
            </div>
        </div>
	</div>
    
    <div id="cant-do-all-the-work-for-you" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="mySmallModalLabel">Ooops!!!</h4>
                </div>
                <div class="modal-body">
                    <p>I am being lazy and do not want to program an "Add User" section into this snippet... So it looks like you'll have to do that for yourself.</p><br/>
                    <p><strong>Sorry<br/>
                    ~ Mouse0270</strong></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- JavaScrip Search Plugin -->
    <script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    
</div>