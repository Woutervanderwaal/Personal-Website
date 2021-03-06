<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<div class="container">
  <div class="row">
  
    <section id="pinBoot">

      <article class="white-panel"><img src="img/davinci.png" alt="">
        <h4><a href="school.php">School</a></h4>
        <p>Im attending Davinci Collage in Dordrecht and my study is niveau 4 applicatie en mediaontwikkeling</p>
      </article>

      <article class="white-panel"> <img src="img/snowboarding.jpg" alt="">
        <h4><a href="hobbies.php">Hobbies</a></h4>
        <p>Here are some of my hobbies, Snowboarding, Programming, Moddeling, 3D printing.</p>
      </article>

      <article class="white-panel"> <img src="img/linkedin.png" alt="">
        <h4><a href="https://nl.linkedin.com/"  target="_blank">Linkedin</a></h4>
        <p>Click on the link to get to my Linkedin profile</p>
      </article>


      <article class="white-panel"> <img src="img/github.png" alt="">
        <h4><a href="https://github.com/Woutervanderwaal" target="_blank">Github</a></h4>
        <p>Click on the link to see my repositories to take a look at some of my projects, if you look at the Languages and tools section you can see a short versions of my projects</p>
      </article>

      <article class="white-panel"> <img src="img/instagram.png" alt="">
        <h4><a href="https://www.instagram.com/woutervdw.078/?hl=nl" target="_blank">Instagram</a></h4>
        <p>Click to see some photo's on my instagram.</p>
      </article>

      <article class="white-panel"> <img src="img/contact.jpg" alt="">
        <h4><a href="contact.php">Contact</a></h4>
        <p>If you have any questions. Get in touch with me and send me a email or a message</p>
      </article>

      <article class="white-panel"><img src="img/htmlCssJs.jpg" alt="">
        <h4><a href="htmlCssJs.php">Html/Css/Js</a></h4>
        <p>Look at some of my Html/Css/Js projects. This contains some of my better work over the weeks to get a sight on what i can do.</p>
      </article>

      <article class="white-panel"> <img src="img/php.jpg" alt="">
        <h4><a href="php.php">PHP</a></h4>
        <p>Some of my PHP projects There arent many at this point but i will sure add some more in the future.</p>
      </article>

      <article class="white-panel"> <img src="img/cpp.png" alt="">
        <h4><a href="cpp.php">C++</a></h4>
        <p>I do C++ for fun. I mosly use C++ in unreal engine. This is the language im currently learning the hardest </p>
      </article>

      <article class="white-panel"> <img src="img/cSharp.png" alt="">
        <h4><a href="cs.php">C#</a></h4>
        <p>i do C# for fun. I use C# with unity im side learning C# with C++ but im learning C++ more.</p>
      </article>

      <article class="white-panel"> <img src="img/python.jpg" alt="">
        <h4><a href="python.php">Python</a></h4>
        <p>Python is the first programming language i ever learned. So the project arnt that good but it showed me how fun programming is.</p>
      </article>

      <article class="white-panel"> <img src="img/blender.png" alt="">
        <h4><a href="blender.php">Blender</a></h4>
        <p>I'd like to make my own moddels for Unity and Unreal because i like to learn. So be able to make my own 3D models was looking like a good step</p>
      </article>

      <article class="white-panel"> <img src="img/unity.jpg" alt="">
        <h4><a href="unity.php">Unity</a></h4>
        <p>Unity is the game enigine i mostly use because its a lot easyer then unreal</p>
      </article>

      <article class="white-panel"> <img src="img/unreal.png" alt="">
        <h4><a href="unreal.php">Unreal</a></h4>
        <p>While i use Unity more Unreal give me some options that Unity doesnt and since it also works with blender i can use the same models</p>
      </article>
    </section>


    <hr>


  </div>
 

</div>

<style>
/*
Ref:
Thanks to:
http://www.jqueryscript.net/layout/Simple-jQuery-Plugin-To-Create-Pinterest-Style-Grid-Layout-Pinterest-Grid.html
*/

body {
  background-color:#eee;  
  max-width: 100%;
  overflow-x: hidden; 
  overflow: hidden;
}    

#pinBoot {
  position: relative;
  max-width: 100%;
  width: 100%;
}
img {
  width: 100%;
  max-width: 100%;
  height: auto;
}
.white-panel {
  position: absolute;
  background: white;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  padding: 10px;
}
/*
stylize any heading tags withing white-panel below
*/

.white-panel h1 {
  font-size: 1em;
}
.white-panel h1 a {
  color: #A92733;
}
.white-panel:hover {
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
  margin-top: -5px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
</style>

<script>
$(document).ready(function() {
$('#pinBoot').pinterest_grid({
no_columns: 4,
padding_x: 10,
padding_y: 10,
margin_bottom: 50,
single_column_breakpoint: 700
});
});

/*
Ref:
Thanks to:
http://www.jqueryscript.net/layout/Simple-jQuery-Plugin-To-Create-Pinterest-Style-Grid-Layout-Pinterest-Grid.html
*/


/*
    Pinterest Grid Plugin
    Copyright 2014 Mediademons
    @author smm 16/04/2014

    usage:

     $(document).ready(function() {

        $('#blog-landing').pinterest_grid({
            no_columns: 4
        });

    });


*/
;(function ($, window, document, undefined) {
    var pluginName = 'pinterest_grid',
        defaults = {
            padding_x: 10,
            padding_y: 10,
            no_columns: 3,
            margin_bottom: 50,
            single_column_breakpoint: 700
        },
        columns,
        $article,
        article_width;

    function Plugin(element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options) ;
        this._defaults = defaults;
        this._name = pluginName;
        this.init();
    }

    Plugin.prototype.init = function () {
        var self = this,
            resize_finish;

        $(window).resize(function() {
            clearTimeout(resize_finish);
            resize_finish = setTimeout( function () {
                self.make_layout_change(self);
            }, 11);
        });

        self.make_layout_change(self);

        setTimeout(function() {
            $(window).resize();
        }, 500);
    };

    Plugin.prototype.calculate = function (single_column_mode) {
        var self = this,
            tallest = 0,
            row = 0,
            $container = $(this.element),
            container_width = $container.width();
            $article = $(this.element).children();

        if(single_column_mode === true) {
            article_width = $container.width() - self.options.padding_x;
        } else {
            article_width = ($container.width() - self.options.padding_x * self.options.no_columns) / self.options.no_columns;
        }

        $article.each(function() {
            $(this).css('width', article_width);
        });

        columns = self.options.no_columns;

        $article.each(function(index) {
            var current_column,
                left_out = 0,
                top = 0,
                $this = $(this),
                prevAll = $this.prevAll(),
                tallest = 0;

            if(single_column_mode === false) {
                current_column = (index % columns);
            } else {
                current_column = 0;
            }

            for(var t = 0; t < columns; t++) {
                $this.removeClass('c'+t);
            }

            if(index % columns === 0) {
                row++;
            }

            $this.addClass('c' + current_column);
            $this.addClass('r' + row);

            prevAll.each(function(index) {
                if($(this).hasClass('c' + current_column)) {
                    top += $(this).outerHeight() + self.options.padding_y;
                }
            });

            if(single_column_mode === true) {
                left_out = 0;
            } else {
                left_out = (index % columns) * (article_width + self.options.padding_x);
            }

            $this.css({
                'left': left_out,
                'top' : top
            });
        });

        this.tallest($container);
        $(window).resize();
    };

    Plugin.prototype.tallest = function (_container) {
        var column_heights = [],
            largest = 0;

        for(var z = 0; z < columns; z++) {
            var temp_height = 0;
            _container.find('.c'+z).each(function() {
                temp_height += $(this).outerHeight();
            });
            column_heights[z] = temp_height;
        }

        largest = Math.max.apply(Math, column_heights);
        _container.css('height', largest + (this.options.padding_y + this.options.margin_bottom));
    };

    Plugin.prototype.make_layout_change = function (_self) {
        if($(window).width() < _self.options.single_column_breakpoint) {
            _self.calculate(true);
        } else {
            _self.calculate(false);
        }
    };

    $.fn[pluginName] = function (options) {
        return this.each(function () {
            if (!$.data(this, 'plugin_' + pluginName)) {
                $.data(this, 'plugin_' + pluginName,
                new Plugin(this, options));
            }
        });
    }

})(jQuery, window, document);
</script>