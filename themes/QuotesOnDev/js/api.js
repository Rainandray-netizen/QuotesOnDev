(function($){
  

    //get new quote
    $("#quote-button").on("click",function(event){
        event.preventDefault()

        $.ajax({
            method:"GET",
            url: qod_data.root_url + "/wp-json/quotes/v1/post"
        }).done(function(data){
            console.log(data)
            let quotenumber = Math.floor(data.length*(Math.random()))

            const title = (data[quotenumber].title)
            const content = (data[quotenumber].content)
            const quotesURL = (data[quotenumber].quotesURL)
            const quotesSource = (data[quotenumber].quotesSource)

            $("#quotes-content").html(`<h1>${content}</h1><h4>-${title}, <a class="quoteslink" href="${quotesURL}"><span>${quotesSource}</span></a></h4>`)
        })  
    })
    //add in submit button!
    $("#submit").on("click",function(event){
        event.preventDefault
        console.log("ive been licked")
        const $title = $('#quote-title').val()
        const $content = $("#quote-content").val()
        const $permalink =$("#quote-permalink").val()
        const $quotesSource = $("#quote-source").val()

        $("input:text").val("")

        const data = {
            title: $title,
            content: $content,
            quotesSource: $quotesSource,
            permalink: $permalink
        }
        $.ajax({
            method:"POST",
            url: qod_data.root_url + "/wp-json/wp/v2/posts",
            data,
            beforeSend: function(xhr){
                xhr.setRequestHeader('X-WP-Nonce', qod_data.nonce);
            }
        })
    })

})(jQuery)
