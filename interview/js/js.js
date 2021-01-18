function op(x,y,url) {
    // $(".modal").fadeIn()
    // $("#cover").fadeIn()
	$(x).fadeIn()
	if(y)
	$(y).fadeIn()
	if(y&&url)
	$(y).load(url)
    
  };
  function cl(x) {
    $(x).fadeOut();

  };