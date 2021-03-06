<section class="box-position">
<div class="container">
 
  <div class="  col-xs-12 col-md-3 col-sm-4">
  
            <div class="panel panel-default"  >
            
                    <!-- Message box title	-->    
                        <div class="panel-heading top-bar ">
                            <div class="col-md-10 col-xs-10">
                                <p class="panel-title"><span class="glyphicon glyphicon-comment"></span> Message</p>
                            </div>
                            <div class="col-md-2 col-xs-2" style="text-align: right;">
                                <a href="#"><span class="glyphicon glyphicon-minus icon_minim"></span></a>
                            </div>
                        </div>

                 <!-- Message body	--> 
                        <div class="panel-body msg_container_base">
                          <br />
                          <form action="mail.php">
                            <div class="form-group">
                              <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" id="subject" placeholder="Subject">
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <input type="tell" class="form-control" id="phone" placeholder="Phone" pattern="[0-9]{10}">
                            </div>
                            <div class="form-group">
                              <textarea type="text" class="form-control" id="message" placeholder="Message..."></textarea>
                            </div>
                            
                             <div class="form-group">
                              <input type="submit" class="form-control" id="submit" value="Send">
                            </div>
                          </form>
                      </div>
              

                        <div class="panel-footer">
                            <div class="input-group">
                            </div>
                        </div>
                
    		</div>

    </div> 
</div>
<style>
    .panel{
        margin-bottom: 0px;
    }
    .top-bar {
    background: #666;
    color: white;
    padding: 10px;
    position: relative;
    overflow: hidden;
    padding-right:5px;
    }
    .box-position{
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>

<script>
$(document).on('click', '.panel-heading span.icon_minim', function (e) {
    var $this = $(this);
    if (!$this.hasClass('panel-collapse')) {
        $this.parents('.panel').find('.panel-body').slideUp();
        $this.addClass('panel-collapse');
        $this.removeClass('glyphicon-minus').addClass('glyphicon-plus');
    } else {
        $this.parents('.panel').find('.panel-body').slideDown();
        $this.removeClass('panel-collapse');
        $this.removeClass('glyphicon-plus').addClass('glyphicon-minus');
    }
});

</script>
</section>