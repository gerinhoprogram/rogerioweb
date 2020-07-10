document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems);
  });

$(window).scroll(function() {    
				var scroll = $(window).scrollTop();
				if (scroll >= 100) {               
					$(".topo").addClass("ativo");    
				} else {
					$(".topo").removeClass("ativo");
				}
        });

$(window).scroll(function() {    
				var scroll = $(window).scrollTop();
				if (scroll < 800) {               
					$(".rodape").addClass("ativo2");    
				} else {
					$(".rodape").removeClass("ativo2");
				}
        });

jQuery( document ).ready(function( $ ) {
          $(".celular").inputmask({mask: '(99) 99999-9999'});
          $(".telefone").inputmask({mask: '(99) 9999-9999'});  
       });

jQuery(document).ready(function() {
		
		$('#irtopo').click(function() {
			$('html, body')
  			.animate({scrollTop: 0}, 1500);
		});	

		$('#irroda').click(function() {
			$('html, body')
  			.animate({scrollTop: 4000}, 1500)
		});
		
		$('#top').click(function() {
			var num = $('#web').offset();
			var top = num.top;
			$('html, body')
  			.animate({scrollTop: top}, 1500)
		});
		
		$('#idImp').click(function() {
			var num = $('#impressa').offset();
			var top = num.top;
			$('html, body')
  			.animate({scrollTop: top}, 1500)
		});
		
		$('#idPlan').click(function() {
			var num = $('#planilhas').offset();
			var top = num.top;
			$('html, body')
  			.animate({scrollTop: top}, 1500)
		});
	})