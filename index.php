<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  rel="icon"   href="http://www.lebrain.com.ar/Firma/LogoLebrain.gif" type="image/png" />
        <title>Maqueta || Lebrain</title>
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">

    </head>
    <style>
        /*** Styles for Live Preview Window ***/

        #livepreview_iframe {
            box-shadow: inset 5px 5px 10px #666;
            -moz-box-shadow: inset 5 5px 10px #666;
            -webkit-box-shadow: inset 5 5px 10px #666;
        }

        #livepreview_dialog {
            padding:0px;
            height:200px;  
            width:300px;
            background-color:#fff;
            background-image:url('/images/icon_loading.gif');
            background-repeat:no-repeat;
            background-position:center center;
            position:absolute;
            border:solid 5px #666;
            border-radius:5px;
            -moz-border-radius: 5px;
            -webkit-border-radius:5px;
        }

        #livepreview_dialog:after, #livepreview_dialog:before {
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none;
        }

        #livepreview_dialog.bottom:after, #livepreview_dialog.bottom:before {
            bottom: 100%;
            left: 50%;
        }

        #livepreview_dialog.bottom:after {
            border-color: rgba(255, 255, 255, 0);
            border-bottom-color: #ffffffff;
            border-width: 20px; 
            margin-left: -20px;
        }
        #livepreview_dialog.bottom:before {
            border-color: rgba(102, 102, 102, 0);
            border-bottom-color: #666666;
            border-width: 26px;
            margin-left: -26px;
        }

        #livepreview_dialog.top:after, #livepreview_dialog.top:before {
            top: 100%;
            left: 50%;
        }

        #livepreview_dialog.top:after {
            border-color: rgba(255, 255, 255, 0);
            border-top-color: #ffffffff;
            border-width: 20px;
            margin-left: -20px;
        }

        #livepreview_dialog.top:before {
            border-color: rgba(102, 102, 102, 0);
            border-top-color: #666666;
            border-width: 26px;
            margin-left: -26px;
        }

        #livepreview_dialog.right:after, #livepreview_dialog.right:before {
            right: 100%;
            top: 50%;
        }

        #livepreview_dialog.right:after {
            border-color: rgba(255, 255, 255, 0);
            border-right-color: #ffffffff;
            border-width: 20px;
            margin-top: -20px;
        }

        #livepreview_dialog.right:before {
            border-color: rgba(102, 102, 102, 0);
            border-right-color: #666666;
            border-width: 26px;
            margin-top: -26px;
        }

        #livepreview_dialog.left, #livepreview_dialog.left:before {
            left: 100%;
            top: 50%;
        }

        #livepreview_dialog.left:after {
            border-color: rgba(255, 255, 255, 0);
            border-left-color: #ffffffff;
            border-width: 20px;
            margin-top: -20px;
        }

        #livepreview_dialog.left:before {
            border-color: rgba(102, 102, 102, 0);
            border-left-color: #666666;
            border-width: 26px;
            margin-top: -26px;
        }

    </style>
    <body>
        <nav class="mb-1 navbar navbar-expand-lg navbar-light bg-white">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="http://www.lebrain.com.ar/Firma/LogoLebrain.gif" alt="" style="width: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-dark"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link waves-effect waves-light" href="mailto:aloha@lebrain.com.ar">
                                <i class="fas fa-envelope"></i> Contacto
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-headset"></i> 
                                Soporte
                            </a>
                            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-phone-volume"></i>
                                    Telefonico
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fab fa-whatsapp"></i>
                                    Whatsapp
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fab fa-facebook"></i>
                                    Facebook
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <?php
            $directorio = opendir("."); 
            while ($archivo = readdir($directorio)) 
            {
                if (is_dir($archivo)){ }
                else {  
                    
                    $info = new SplFileInfo($archivo);
                    switch ($info->getExtension()) {
                        case 'html':
                            $archivo_name[] = $archivo;
                            break;
                        case 'zip':
                            $descargar = $archivo;
                            break;
                        default:
                            $archivo_name[] = "vacio";
                            break;
                    }
                }
            }
        ?>

        <div class="container row mx-auto mt-5">
            <?php  foreach ($archivo_name as $key => $value) { ?>
                <?php if($value != 'vacio'){ ?>
                    <div class="col-md-4 col-sm-6 col-12 p-3 mx-auto">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                <!-- Card footer -->
                                <div class="card-footer border-top-0">
                                    <div class="row mb-0">
                                        <a href="<?=$value?>" target="_blank" class="livepreview" data-position="right">
                                            <span class="float-left">
                                                <?php $name_file = str_replace('.html',' ', $value); ?>
                                                <strong><?=str_replace('-',' ', $name_file)?></strong>
                                            </span>
                                        </a>
                                        <span class="float-right ml-auto mr-4">
                                            <a href="<?=$value?>" target="_blank" class="livepreview" data-position="right" title="Ver mas">
                                                <i class="fas fa-eye ml-3 text-dark"></i>
                                            </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Card content -->
                        </div>
                        <!-- Card -->
                    </div>
                <?php } ?>
            <?php } ?>
            <?php if (!empty($descargar)) { ?>
                <a class="btn btn-primary my-5 mx-auto" href="<?=$descargar?>">Descargar proyecto <?=$descargar?></a>
            <?php }?>
        </div>

        <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/js/mdb.min.js"></script>
    </body>
    <script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        var ps = new PerfectScrollbar(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });
    </script>
    <script>
        (function($) {
            $.fn.extend({
                livePreview: function(options) {
                    
                    var defaults = {
                        trigger: 'click',
                        targetWidth : 1244,
                        targetHeight: 830,
                        viewWidth: 310,
                        viewHeight: 210,
                        position: 'right',
                        positionOffset: 0,
                    };

                    var options = $.extend(defaults, options);
                    //calculate appropriate scaling based on width.
                    var scale_w = (options.viewWidth / options.targetWidth);
                    var scale_h = (options.viewHeight / options.targetHeight);
                    var scale_f = 1;
                    var preview_id = 'livepreview_dialog';

                    if(typeof options.scale != 'undefined')
                        scale_f = options.scale;
                    else
                    {
                        if(scale_w > scale_h)
                            scale_f = scale_w;
                        else
                            scale_f = scale_h;
                    }
                    
                    var showPreview = function(event) {
                        var triggerType = event.data.triggerType;
                        var obj = event.data.target;
                        var href = event.data.href;
                        var s = event.data.scale;
                        
                        if( (triggerType == 'click') && ($('#' + preview_id).length == 0) ) {
                            event.preventDefault();
                        }

                        var currentPos = options.position;
                        if(obj.attr("data-position"))
                            currentPos = obj.attr("data-position");

                        var currentOffset = options.positionOffset;
                        if(obj.attr("data-positionOffset"))
                            currentOffset = obj.attr("data-positionOffset");

                        if(obj.attr("data-scale"))
                            s = obj.attr("data-scale");

                        var pos = $(this).offset();
                        var width = $(this).width();
                        var height = $(this).height();
                        var toppos = pos.top - (options.viewHeight/2);
                        var leftpos = pos.left + width + currentOffset;

                        if(currentPos == 'left') {
                            leftpos = pos.left - options.viewWidth - currentOffset;
                        }
                        
                        if(currentPos == 'top') {
                            leftpos = pos.left + (width/2) - (options.viewWidth/2);
                            toppos = pos.top - options.viewHeight - currentOffset;
                        }

                        if(currentPos == 'bottom') {
                            leftpos = pos.left + (width/2) - (options.viewWidth/2);
                            toppos = pos.top + (height/2) + currentOffset;
                        }
                        
                        //hover on 
                        $('body').append('<div id="livepreview_dialog" class="' + currentPos + '" style="display:none; padding:0px; left: ' + leftpos + 'px; top:' + toppos + 'px; width: ' + options.viewWidth + 'px; height: ' + options.viewHeight + 'px"><div class="livepreview-container" style="overflow:hidden; width: ' + options.viewWidth + 'px; height: ' + options.viewHeight + 'px"><iframe id="livepreview_iframe" src="' + href + '" style="height:' + options.targetHeight + 'px; width:' + options.targetWidth + 'px;-moz-transform: scale('+ s + ');-moz-transform-origin: 0 0;-o-transform: scale('+ s + ');-o-transform-origin: 0 0;-webkit-transform: scale('+ s + ');-webkit-transform-origin: 0 0;"></iframe></div></div>');
                        $('#' + preview_id).fadeIn(100);
                    };

                    return this.each(function() {
                        var o = options;
                        var s = scale_f;
                        var obj = $(this);
                        var href = obj.attr("data-preview-url") || obj.attr("href");
                        var triggerType = options.trigger;

                        if(obj.attr("data-trigger")) {
                            triggerType = obj.attr("data-trigger");
                        }

                        if(triggerType != 'click') {
                            triggerType = 'mouseenter';
                            obj.on('click', function() {
                                $('#' + preview_id).remove();
                            });
                        }
                        
                        obj.on(triggerType, null, { triggerType: triggerType, target: obj, href: href, scale: s }, showPreview);
                        obj.on('mouseleave', function() {
                            $('#' + preview_id).remove();
                        });

                    });
                }
            });
            })(jQuery);
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".livepreview").livePreview();
        });
    </script>
</html>
