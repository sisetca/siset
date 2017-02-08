<div class="main">
    <div class="container tim-container">
        <div class="tim-title">
            <h2>Typography</h2>
        </div>   
        <div id="typography">
            <div class="row">
                <div class="tim-typo">
                    <h1><span class="tim-note">Header 1</span>Awesome looking header </h1>
                </div>
                <div class="tim-typo">
                    <h2><span class="tim-note">Header 2</span>Awesome looking header</h2>
                </div>
                <div class="tim-typo">
                    <h3><span class="tim-note">Header 3</span>Awesome looking header</h3>
                </div>
                <div class="tim-typo">
                    <h4><span class="tim-note">Header 4</span>Awesome looking header</h4>
                </div>
                <div class="tim-typo">
                    <h5><span class="tim-note">Header 5</span>Awesome looking header</h5>
                </div>
                 <div class="tim-typo">
                    <h6><span class="tim-note">Header 6</span>Awesome looking header</h6>
                </div>
                <div class="tim-typo">
                    <p><span class="tim-note">Paragraph</span>            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.</p>
                </div>
                <div class="tim-typo">
                    <span class="tim-note">Quote</span>      
                    <blockquote> 
                     <p>
                     Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
                     </p>
                     <small>
                     Steve Jobs, CEO Apple
                     </small>
                    </blockquote>
                </div>
                
                <div class="tim-typo">
                    <span class="tim-note">Muted Text</span>
                    <p class="text-muted">            
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
                    </p>
                </div> 
                <div class="tim-typo">
                    <!-- 
                    
                     there are also "text-info", "text-success", "text-warning", "text-warning" clases for the text 
                     
                     -->
                    <span class="tim-note">Primary Text</span>
                    <p class="text-primary">            
                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.
                    </p>
                </div> 
                <div class="tim-typo">
                    <h1><span class="tim-note">Special Header</span>Header with special subtitle <small class="subtitle">".subtitle" is a special class for h1 title</small> </h1>
                </div>
                <div class="tim-typo">
                    <h2><span class="tim-note">Small Tag</span>Header with small subtitle <br><small>".small" is a tag for the headers</small> </h2>
                </div>                                  
            </div>
        </div> 
        <!--   end typography -->
        <div class="space"></div>
        <div id="images">
             <div class="tim-title">
                <h2>Images</h2>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <h4>Rounded Image</h4>
                    <img src="assets/img/mockup.png" alt="Rounded Image" class="img-rounded">
                    
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4>Circle Image</h4>
                    <img src="assets/img/mockup.png" alt="Circle Image" class="img-circle">
                   
                </div>
                <div class="col-md-4 col-sm-6">
                    <h4>Thumbnail Image</h4>
                    <img src="assets/img/mockup.png" alt="Thumbnail Image" class="img-thumbnail">
                    
                </div>
            </div>
            <div class="row">
            
            </div>
        </div>  
    <!--   end images -->
        
        <div class="tim-title">
            <h2>Javascript components</h2>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="tim-title">
                    <h3>Modal</h3>
                </div>
                
                <!-- Button trigger modal -->
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                  Launch demo modal
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                      </div>
                      <div class="modal-body">
                        ...
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-simple" data-dismiss="modal">Close</button>
                        <div class="divider"></div>
                        <button type="button" class="btn btn-info btn-simple">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                
                
            </div>
            
         <!--    end modal -->
            
            <div class="col-md-6">
                <div id="tooltips">
                    <div class="tim-title">
                        <h3>Tooltips</h3>
                    </div>
                    <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>
        
        <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button>
        
        <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">Tooltip on bottom</button>
        
        <button type="button" class="btn btn-default btn-tooltip" data-toggle="tooltip" data-placement="right" title="Tooltip on right">Tooltip on right</button>
                </div>
            </div>
            <div class="clearfix"></div><br><br>
        <!--     end tooltips -->
            
        </div><!--  end row -->
    
        <div class="tim-title">
            <h3>Collapse</h3>
        </div>
        <div id="acordeon">
            
            <div class="panel-group" id="accordion">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-target="#collapseOne" href="#collapseOne" data-toggle="gsdk-collapse">
                      GSDK Collapsible Item 1
                    </a>
                  </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-target="#collapseTwo" href="#collapseTwo" data-toggle="gsdk-collapse">
                      GSDK Collapsible Item 2
                    </a>
                  </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-target="#collapseThree" href="#collapseTwo" data-toggle="gsdk-collapse">
                      GSDK Collapsible Item 3
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapseFour">
                      Default Collapsible Item 1
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" href="#collapseFive">
                      Default Collapsible Item 2
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse">
                  <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHSssss.
                  </div>
                </div>
              </div>
            </div>
            
        </div><!--  end acordeon -->
        
        <div class="space"></div>
        <div class="tim-title">
            <h3>Carousel</h3>
        </div>
    </div>
</div>