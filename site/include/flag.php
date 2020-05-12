<?php 
    require_once(dirname(__FILE__).'/head.php');  
    
?>
<section class="jumbotron text-center">
<div class="container">
    <h1 class="jumbotron-heading">FLAGS</h1>
    <img src="rcs/icon/jolly-roger.png" width="128" height="128" class="d-inline-block align-top" alt=""><img>
    <p class="lead text-muted">
        
    </p>
</div>
</section>


<div class="list-group" style="margin-left:10%; margin-right:10%;font-family: cursive; text-align:center;" id="flags_list">
 <div class="row">
    <div class="col-sm-2">
       <a href="home" style="padding:0;margin:0;">
            <img src="rcs/icon/back.png" width="64" height="64" class="d-inline-block align-left" alt="Go home !"><img>
            <p class="mb-1">
                Back to website
            </p>
        </a>
    </div>
    <div class="col-sm" style="margin-top:25px; text-align: center;">
       
    </div>
    <div class="col-sm-2">
       <a href="#" style="padding:0;margin:0;">
            <img src="rcs/icon/doc_64.png" width="64" height="64" class="d-inline-block align-left" alt="Go home !"><img>
        </a>
    </div>
    <div class="col-sm-2">
       <a href="#" style="padding:0;margin:0;">
            <img src="rcs/icon/word_64.png" width="64" height="64" class="d-inline-block align-left" alt="Go home !"><img>
        </a>
    </div>
    <div class="col-sm-2">
       <a href="#" style="padding:0;margin:0;">
            <img src="rcs/icon/pdf_64.png" width="64" height="64" class="d-inline-block align-left" alt="Go home !"><img>
        </a>
    </div>
  </div>
  
  <?php if(isset($flag) && !empty($flag)) :?> 
  
  <?php foreach($flag as $value) : ?>
  <?php if($value->flag_view > 0) : ?>
  <div id="flag" class="list-group-item list-group-item-action flex-column align-items-start" style="cursor: pointer">
    <div class="d-flex w-100 justify-content-between">
      <h5 id="title" value="List group item heading" class="mb-1"><?php echo htmlentities($value->flag_name); ?></h5>
      <small>Click to copy</small>
    </div>
    <p id="copy" class="mb-1"><?php echo htmlentities($value->flag_key); ?></p>
    <small class="text-muted">Congratulations</small>
  </div>
  <?php endif ?>
  
   <?php if($value->flag_view == 0) : ?>
    <div id="flag" class="list-group-item list-group-item-action flex-column align-items-start" style="cursor: pointer">
    <div class="d-flex w-100 justify-content-between">
      <h5 id="title" value="List group item heading" class="mb-1">You did not find any security vulnerabilities</h5>
      <small>Click to copy</small>
    </div>
    <p id="copy" class="mb-1">No pain no gain ...</p>
    <small class="text-muted">Sorry</small>
  </div>
   <?php endif ?>
  
  <?php endforeach ?>
  
  <?php endif ?>
  
  <?php if(!isset($flag) || empty($flag)) :?> 
  <div id="flag" class="list-group-item list-group-item-action flex-column align-items-start" style="cursor: pointer">
    <div class="d-flex w-100 justify-content-between">
      <h5 id="title" value="List group item heading" class="mb-1">You did not find any security vulnerabilities</h5>
      <small>Click to copy</small>
    </div>
    <p id="copy" class="mb-1">No pain no gain ...</p>
    <small class="text-muted">Sorry</small>
  </div>
  <?php endif ?>
 
</div>
<style>
#flags_list {
    margin-bottom: 10%;
}
</style>

<script>
// TODO : move asset -> .js/.min.js
// TODO : create a copy error and manage of authorisation
jQuery(document).ready(function(){
    var flagEach = jQuery('#flags_list #flag');
    var flagList = jQuery('#flags_List');
    
    insertFlag = function(id) {
        _deleteFlag();
        jQuery(id).addClass('active');
        _copy(id);
    }
    
    _deleteFlag = function() {
        jQuery(flagEach).each(function(){
            jQuery(this).removeClass('active');
        });
    }
    _copy = function (id) {
            navigator.clipboard.writeText(jQuery(id).find('#title').text()+' -> '+jQuery(id).find('#copy').text()).then(() => {
        }).catch(err => {
            alert('Could not copy text: ', err);
        });
    }

   
    jQuery(flagEach).each(function(){
        jQuery(this).click(function(){
            insertFlag(this);
        });
    });
    

});
</script>


<?php 
    require_once(dirname(__FILE__).'/footer.php'); 
?>