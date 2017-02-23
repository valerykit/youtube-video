 $(document).ready(function(){
        $(".btn-success").click(function(){
    	$(".jumbotron").slideToggle(1000);
    })
        $(".btn-danger").click(function(){
        	$(".jumbotron").stop();
        });
        $(".btn-info").click(function(){
        	$(".jumbotron").animate({
        		top: '100px',
        		opacity: '0'
        	});
        });
        $(".btn-muted").click(function(){
        	$(".jumbotron").animate({
        		top: '50px',
        		opacity: 1,
        	})
        })
        $(".btn-danger").click(function(){
        	$(".jumbotron").hide();
        });



});

