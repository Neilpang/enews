(function($){$.fn.mobileMenu=function(options){var defaults={defaultText:'Navigate to...',className:'select-menu',subMenuClass:'sub-menu',subMenuDash:'&ndash;'},settings=$.extend(defaults,options),el=$(this);this.each(function(){el.find('ul').addClass(settings.subMenuClass);$('<div class="select-nav">').insertAfter(el);$('<select />',{'class':settings.className}).appendTo(el.next($(this)));$('<option />',{"value":'#',"text":settings.defaultText}).appendTo('.'+settings.className);el.find('a').each(function(){var $this=$(this),optText='&nbsp;'+$this.text(),optSub=$this.parents('.'+settings.subMenuClass),len=optSub.length,dash;if($this.parents('ul').hasClass(settings.subMenuClass)){dash=Array(len+1).join(settings.subMenuDash);optText=dash+optText;}
$('<option />',{"value":this.href,"html":optText,"selected":(this.href==window.location.href)}).appendTo('.'+settings.className);});$('.'+settings.className).change(function(){var locations=$(this).val();if(locations!=='#'){window.location.href=$(this).val();};});});return this;};})(jQuery);