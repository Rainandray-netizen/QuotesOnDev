(function($){
  

    //get new quote
    $("#quote-button").on("click",function(event){
        event.preventDefault()
        console.log("hewwo")

        $.ajax({
            method:"GET",
            url: wpApiSettings.root + "wp/v2/posts?filter[orderby]=rand"
        }).done(function(data){
            let quotenumber = Math.floor(data.length*(Math.random()))

            const title = (data[quotenumber].title.rendered)
            const content = (data[quotenumber].content.rendered)

            $("#quotes-content").html(`<h2>${title}</h2>${content}`)
        })
        

    })

})(jQuery)
